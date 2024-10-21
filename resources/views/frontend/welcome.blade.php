@extends('frontend.layouts.master')

{{--navbar --}}
@section("content")

{{--bannersection --}}
@include("frontend.include.indexbanner")
{{--blog --}}
@include("frontend.include.blog")

@include("frontend.include.landproperties")
@include("frontend.include.categories")

{{--advantage --}}
<!-- @include("frontend.include.advantage") -->

{{--description about company --}}
<!-- @include("frontend.include.about") -->

{{--our properties --}}
<!-- @include("frontend.include.project") -->



<!-- @includeIf("frontend,include.counter") -->
{{-- <!-- testimonial --> --}}
<!-- @include("frontend.include.testimonial") -->

{{--blog --}}



@endsection

