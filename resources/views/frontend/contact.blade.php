@extends("frontend.layouts.master")
@section("content")

<!-- same for contact and blog page but used the style of contact -->
<style>
  .blog_contact_section {
    position: relative;
  }

  .extra-lg-lg {
    font-size: 92px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--pure-black);
    text-shadow: 2px 3px var(--off-green);

  }



  .blog_contact_heroimage_container {
    position: relative; 
    width: 99%;
    height: 70vh; 
}

.blog_contact_heroimage {
    width:100%;
    height: 100%; 
    object-fit: cover;
    position: relative;
    bottom: 1.2rem;
}

.blog_contact_heroimage_container::before {
  position: absolute;
  width: 98.5%;
  height: 70vh; 
    content: " ";
    display: block;
    top:-1.2rem;
    left:0.7rem;
    right: 0;
    bottom:0rem;
    background-color:rgba(150, 150, 150, 0.2);
    z-index: 100;
    height: 100%; 
}

  .greenbackground {
    background: var(--off-green);
    color: var(--pure-white);
  }

  .iconslarge {
    font-size: 24px;
  }

  .map-image {
    height: 80vh;
    width: 100%;
    object-fit: cover;
  }

  .contactbutton {
    background: #000;
    color: white;
    padding: 0.6rem;

  }


  @media (max-width: 700px) {
    .extra-lg-lg {
      font-size: 50px;

    }
    .blog_contact_heroimage {;
    bottom:0.8rem;

  }
   .map-image {
    height:40vh;
 
  }
  .blog_contact_heroimage_container::before {
    top:-0.8rem;
  
}

  }

  
</style>



<section class="container-fluid pt-2">
  <div class="container">
    <div class="row blog_contact_section">
      <h1 class="extra-lg-lg text-center pb-0 mb-0">Contact</h1>
      <div class="blog_contact_heroimage_container">
    <img src="{{asset('image/house1.png')}}" alt="" class="blog_contact_heroimage p-0 m-0">
</div>
    </div>
</section>



<!-- detailsection -->
<section class="container-fluid contact my-3">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center gap-2">
      @foreach ($siteSettings as $siteSetting)


      <div class="col-md-3 greenbackground d-flex flex-column align-items-center rounded py-3">
      <div class="d-flex align-items-center gap-2 ">
        <i class="fa-solid fa-location-dot iconslarge"></i>
        <h2 class="md-text whitehighlight py-2">Office Address</h2>
      </div>
      {{--
      <!-- @if(is_array(json_decode($siteSetting->office_address, true)))
          {{ implode(', ', json_decode($siteSetting->office_address)) }}
          @else
          {{ $siteSetting->office_address }}
          @endif -->
      --}}
      <p class="sm-text whitehighlight "> North road 435673Kth street</p>
      </div>

      <div class="col-md-3 greenbackground d-flex flex-column align-items-center rounded py-3">
      <div class="d-flex align-items-center gap-2 ">
        <i class="fa-solid fa-envelope  iconslarge"></i>
        <h2 class="md-text whitehighlight py-2">Office Email</h2>
      </div>
      {{--
      <!-- @if(is_array(json_decode($siteSetting->office_address, true)))
          {{ implode(', ', json_decode($siteSetting->office_address)) }}
          @else
          {{ $siteSetting->office_address }}
          @endif -->
      --}}
      <p class="sm-text whitehighlight"> North road 435673Kth street</p>
      </div>


      <div class="col-md-3 greenbackground d-flex flex-column align-items-center rounded py-3">
      <div class="d-flex align-items-center gap-2 ">
        <i class="fa-solid fa-phone iconslarge"></i>
        <h2 class="md-text whitehighlight py-2">Office Contact</h2>
      </div>
      {{--
      <!-- @if(is_array(json_decode($siteSetting->office_address, true)))
          {{ implode(', ', json_decode($siteSetting->office_address)) }}
          @else
          {{ $siteSetting->office_address }}
          @endif -->
      --}}
      <p class="sm-text whitehighlight"> North road 435673Kth street</p>
      </div>



    @endforeach

    </div>
  </div>
</section>




<section class="container-fluid  py-4 ">
  <div class="row d-flex  justify-content-center align-items-center mx-2">
    <div class="col-md-4 greenbackground px-4 m-2 order-md-1 order-2 rounded py-3">
      <div class="d-flex flex-column gap-2">
        <p class="">Are you ready to enhance your well-being? Explore our carefully curated selection of products
          designed to promote relaxation and inner peace..</p>
        <div class="d-flex flex-column">
          <label for="" class="xs-text pb-1">Your full Name</label>
          <input type="text" name="" id="" class="input" placeholder="Person name" />
        </div>
        <div class="d-flex flex-column">
          <label for="" class="xs-text pb-1">Email Address</label>
          <input type="text" name="" id="" class="input" placeholder="Person name" />
        </div>
        <div class="d-flex flex-column">
          <label for="" class="xs-text pb-1">Message</label>
          <textarea name="" id="" class="textarea" placeholder="message"></textarea>
        </div>
        <button class="mt-1 contactbutton rounded">Submit</button>
      </div>
    </div>
    <div class="col-md-6 order-md-2 order-1">
      <img src="{{asset("image/map.png")}}" alt="" class="map-image">
    </div>
  </div>
</section>
@endsection