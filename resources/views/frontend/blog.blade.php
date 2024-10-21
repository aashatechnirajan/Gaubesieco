@extends('frontend.layouts.master')
@section("content")



<!-- same for contact and blog page but used the style of contact -->
<style>
  .blog_contact_section {
    position: relative;
  }

  .extra-lg-lg {
    font-size: 92px;
    font-weight:900;
    text-transform: uppercase;
    letter-spacing: 2px;
    stroke: 1px;
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



  @media (max-width: 700px) {
    .extra-lg-lg {
      font-size: 50px;

    }
    .blog_contact_heroimage {;
    bottom:0.8rem;

  }
  .blog_contact_heroimage_container::before {
    top:-0.8rem;
  
}


  }
</style>

<section class="container-fluid pt-2">
  <div class="container">
    <div class="row blog_contact_section">
      <h1 class="extra-lg-lg text-center pb-0 mb-0">Blogs</h1>
      <div class="blog_contact_heroimage_container">
    <img src="{{asset('image/house1.png')}}" alt="" class="blog_contact_heroimage p-0 m-0">
</div>

    </div>
</section>

<!-- blogss -->
<section class="container-fluid py-4 pb-5">
  <div class="container">
    <div class="row gap-2 fcc flex-wrap">
    <div class="col-md-4 row col-md-4">
        <img src="{{asset("image/expl.png")}}" alt="" class="lgimage lgimageheightcontroller p-0 m-0 rounded">
        <h1 class="md-text py-2">what can be the new topic for us</h1>
        <p class="xs-text ">We wanted to take a moment to tell you what a pleasure it has been to work with you and your team at Al Asar.
          eyond industry Firms and even ourexpectations. </p>
      </div>
      <div class="col-md-4 row col-md-4">
        <img src="{{asset("image/house2.png")}}" alt="" class="lgimage lgimageheightcontroller p-0 m-0 rounded">
        <h1 class="md-text py-2">what can be the new topic for us</h1>
        <p class="xs-text ">We wanted to take a moment to tell you what a pleasure it has been to work with you and your team at Al Asar.
          Your team professiona lism has been by far beyon </p>
      </div>
      <div class="col-md-4 row col-md-4">
        <img src="{{asset("image/expl.png")}}" alt="" class="lgimage lgimageheightcontroller p-0 m-0 rounded">
        <h1 class="md-text py-2">what can be the new topic for us</h1>
        <p class="xs-text ">We wanted to take a moment to tell you what a pleasure it has been to work with you and your team at Al Asar.
          Your team professiona lism has been by farns. </p>
      </div>
    </div>
    <button class="btn-buttonoutline mt-4">view more</button>
  </div>
</section>


<!-- Pagination Section -->
<!-- <section class="container-fluid">
  <div class="container">
    <div class="row nextpage">
      <ul class="nextui d-flex gap-1 justify-content-center align-content-center flex-wrap">
        <li class="nextli next-button" onclick="changepage(this)"><a href="#" class="md-text1">1</a></li>
        <li class="nextli" onclick="changepage(this)"><a href="#" class="md-text1">2</a></li>
        <li class="nextli" onclick="changepage(this)"><a href="#" class="md-text1">3</a></li>
        <li class="nextli" onclick="changepage(this)"><a href="#" class="md-text1">4</a></li>
        <li class="nextli" onclick="changepage(this)"><a href="#" class="md-text1">5</a></li>
      </ul>
    </div>
  </div>
</section> -->

@endsection

<script>
  function changepage(element) {
    const pageli = document.getElementsByClassName("nextli");
    for (let i = 0; i < pageli.length; i++) {
      pageli[i].classList.remove("activeli");
    }
    element.classList.add("activeli");
  }
</script>