<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PropertyController extends Controller
{
    /**
     * Display a listing of the properties.
     */
    public function index()
    {
        $properties = Product::with('category', 'subCategory')->latest()->get();
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new property.
     */
    public function create()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.property.create', compact('categories', 'subCategories'));
    }

    /**
     * Store a newly created property in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'main_image' => 'required|array',
            'main_image.*' => 'required|string',
            'cropData' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'cost_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'product_quantity' => 'required|integer',
            'status' => 'required|boolean',
            'availability_status' => 'required|in:available,sold,rental',
            'other_images.*' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Handle the main image upload (base64 images)
        $images = $this->handleBase64Images($request->input('main_image'), 'property');

        // Handle other images upload
        $otherImages = [];
        if ($request->hasFile('other_images')) {
            $otherImages = $this->handleUploadedImages($request->file('other_images'), 'property/other_images');
        }

        // Create new property record
        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'cost_price' => $request->cost_price,
            'selling_price' => $request->selling_price,
            'product_quantity' => $request->product_quantity,
            'status' => $request->status,
            'main_image' => json_encode($images),
            'other_images' => json_encode($otherImages),
            'availability_status' => $request->availability_status,
        ]);

        session()->flash('success', 'Product created successfully.');
        return redirect()->route('property.index');
    }

    /**
     * Display the specified property.
     */
    public function show(Product $property)
    {
        return view('admin.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified property.
     */
    public function edit(Product $property)
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.property.update', compact('property', 'categories', 'subCategories'));
    }

    /**
     * Update the specified property in storage.
     */
    public function update(Request $request, Product $property)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'main_image' => 'nullable|array',
            'main_image.*' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'cost_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'product_quantity' => 'required|integer',
            'status' => 'required|boolean',
            'availability_status' => 'required|in:available,sold,rental',
            'other_images.*' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Handle main image update if provided
        if ($request->has('main_image')) {
            $this->deleteImages(json_decode($property->main_image, true), 'property/');
            $images = $this->handleBase64Images($request->input('main_image'), 'property');
            $property->main_image = json_encode($images);
        }

        // Handle other images update if provided
        if ($request->hasFile('other_images')) {
            $this->deleteImages(json_decode($property->other_images, true), 'property/other_images/');
            $otherImages = $this->handleUploadedImages($request->file('other_images'), 'property/other_images');
            $property->other_images = json_encode($otherImages);
        }

        // Update the property record
        $property->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'cost_price' => $request->cost_price,
            'selling_price' => $request->selling_price,
            'product_quantity' => $request->product_quantity,
            'status' => $request->status,
            'availability_status' => $request->availability_status,
        ]);

        session()->flash('success', 'Product updated successfully.');
        return redirect()->route('property.index');
    }

    /**
     * Remove the specified property from storage.
     */
    public function destroy(Product $property)
    {
        // Delete main images
        $this->deleteImages(json_decode($property->main_image, true), 'property/');

        // Delete other images
        $this->deleteImages(json_decode($property->other_images, true), 'property/other_images/');

        // Delete the property from the database
        $property->delete();

        return redirect()->route('property.index')->with('success', 'Product deleted successfully.');
    }

    // Keep all the existing private methods for image handling exactly as they are
    private function handleBase64Images(array $base64Images, $folder, $existingImages = [])
    {
        // Initialize with existing images if provided
        $images = !empty($existingImages) ? $existingImages : [];

        foreach ($base64Images as $base64Image) {
            // Extract base64 encoded part and decode it
            $image = explode(',', $base64Image);
            if (isset($image[1])) {
                $decodedImage = base64_decode($image[1]);
            } else {
                continue; // Skip if the base64 string is not properly formatted
            }
            $imageResource = imagecreatefromstring($decodedImage);

            if ($imageResource !== false) {
                // Generate unique image name
                $imageName = time() . '-' . Str::uuid() . '.webp';
                // Correct destination path
                $destinationPath = storage_path("app/public/$folder");

                // Create the directory if it does not exist
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true, true);
                }

                // Save the image in WEBP format
                $savedPath = $destinationPath . '/' . $imageName;
                imagewebp($imageResource, $savedPath);
                imagedestroy($imageResource);

                // Correctly formatted relative path for storage link
                $relativeImagePath = "storage/$folder/$imageName";
                $images[] = $relativeImagePath;
            }
        }

        return $images;
    }

    private function handleUploadedImages($uploadedFiles, $folder, $existingImages = [])
    {
        // Initialize with existing images if any
        $images = !empty($existingImages) ? $existingImages : [];

        if ($uploadedFiles) {
            foreach ($uploadedFiles as $file) {
                // Generate a unique name for each image
                $imageName = time() . '-' . Str::uuid() . '.webp';
                // Correct destination path for storage
                $destinationPath = storage_path("app/public/$folder");

                // Create the directory if it does not exist
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true, true);
                }

                // Convert the uploaded image to WEBP format
                $imageResource = imagecreatefromstring(file_get_contents($file));
                $savedPath = $destinationPath . '/' . $imageName;
                imagewebp($imageResource, $savedPath);
                imagedestroy($imageResource);

                // Correctly formatted relative path for storage link
                $relativeImagePath = "storage/$folder/$imageName";
                $images[] = $relativeImagePath;
            }
        }

        return $images;
    }

    private function deleteImages($images, $folderPath)
    {
        // If $images is a string, convert it to an array
        if (is_string($images)) {
            $images = [$images];
        }

        // If $images is an array, iterate through each image
        if (is_array($images)) {
            foreach ($images as $image) {
                // Check if image is not empty
                if (!empty($image)) {
                    // Extract the basename of the image path
                    $imagePath = storage_path('app/public/' . $folderPath . basename($image));

                    // Check if the image exists and delete it
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }
        }
    }
}