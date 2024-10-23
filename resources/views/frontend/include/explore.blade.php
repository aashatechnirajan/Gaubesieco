

{{--
<section class="container-fluid gapbetweensection">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12">
        <div class="title text-center">
          <div class="xs-text1 dashline">Trusted Real Estate Care</div>
          <div class="lg-text">Latest BLOG for you</div>
        </div>
      </div>
    </div>
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        @foreach ($blogs as $blog)
          <div class="swiper-slide">
            <div class="card my-1">
              @php
                $images = json_decode($blog->image, true); // Decode the JSON array into a PHP array
              @endphp
              @if (!empty($images))
                @foreach ($images as $image)
                  <img class="card-img-top img-fluid" src="{{ asset('storage/blog_images/' . basename($image)) }}" alt="Blog image">
                @endforeach
              @else
                <p>No images available</p>
              @endif
              <div class="card-body">
                <h5 class="md-text">{{ $blog->title }}</h5>
                <p class="sm-text">
                  {{ strlen($blog->description) > 150 ? substr($blog->description, 0, 150) . '...' : $blog->description }}
                </p>
                <a href="{{ route('singleblogpost', ['id' => $blog->id]) }}" class="btn-buttongreen">Read more</a>
              </div>
            </div>
          </div>
    @endforeach
      </div>
    </div>
  </div>
</section>

--}}

<style>
  .explorecat{
  /* background:#F1EFEF; */

}
.swiper-slide .card{
  border: none;
  border-radius: var(--radius20);
}
.swiper-slide .card :hover{
  border: none;

}
.swiper-slide:nth-child(3n + 1) .card {
    background: rgba(124, 158, 119, 0.11); /* 1st, 4th, 7th, etc. */
}

.swiper-slide:nth-child(3n + 2) .card {
    background: rgba(241, 225, 210, 1); /* 2nd, 5th, 8th, etc. */
}

.swiper-slide:nth-child(3n + 3) .card {
    background: #CCD0E8; /* 3rd, 6th, 9th, etc. */
}

/* If you have additional styles, you can continue */
.swiper-slide:nth-child(3n + 4) .card {
    background: #FDE0E9; /* 4th, 7th, 10th, etc. */
}




  @media(max-width:450px){
        .needhide{
            display:none ;
        }
      
    }





</style>



<section class="container-fluid explorecat sectiongap">
  <div class="container">
    <div class="row fcc">
    <img class="lgimage-lg  col-md-8 needhide" src="{{asset("image/expl.png")}}" alt="Blog image">

      <div class="swiper col-md-8">
        <div class="d-flex flex-column p-0 m-0 pb-3">
        <span class="extralarger p-0 m-0">explore</span>
        <span class="greenhighlight extralarger p-0 m-0">categories</span>
        </div>

      <!-- Additional required wrapper -->
      <div class="swiper-wrapper ">
        @foreach ($blogs as $blog)
          
          <div class="swiper-slide">
            <div class="card fcc py-2  p-0 mx-4 col-10 mx-md-0">
              <img class=" mdimage" src="{{asset("image/house1.png")}}" alt="Blog image">
              <div class="card-body">
              <p class="sm-text-bd text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
                <p class="xs-text text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="card fcc py-2  p-0 mx-4 col-10 mx-md-0">
              <img class=" mdimage" src="{{asset("image/house1.png")}}" alt="Blog image">
              <div class="card-body">
              <p class="sm-text-bd text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
                <p class="xs-text text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="card fcc py-2  p-0 mx-4 col-10 mx-md-0">
              <img class=" mdimage" src="{{asset("image/house1.png")}}" alt="Blog image">
              <div class="card-body">
              <p class="sm-text-bd text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
                <p class="xs-text text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
              </div>
            </div>
          </div>
          
          <div class="swiper-slide">
          <div class="card fcc py-2  p-0 mx-4 col-10 mx-md-0">
              <img class=" mdimage" src="{{asset("image/expl.png")}}" alt="Blog image">
              <div class="card-body">
              <p class="sm-text-bd text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
                <p class="xs-text text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="card fcc py-2  p-0 mx-4 col-10 mx-md-0">
              <img class=" mdimage" src="{{asset("image/house1.png")}}" alt="Blog image">
              <div class="card-body">
              <p class="sm-text-bd text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
                <p class="xs-text text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide ">
          <div class="card fcc py-2  p-0 mx-4 col-10 mx-md-0">
              <img class=" mdimage" src="{{asset("image/expl.png")}}" alt="Blog image">
              <div class="card-body">
              <p class="sm-text-bd text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
                <p class="xs-text text-center">
                  {{ strlen($blog->description) > 10 ? substr($blog->description, 0, 10) : $blog->description }}
                </p>
              </div>
            </div>
          </div>
    @endforeach


    </div>
    
   </div>

    </div>
 
  </div>
</section>












{{--

<div class="container my-3">

<p class="btn-buttonoutline">
  nirajan

</p>
<p class="btn-buttonblack">
  nirajan

</p>
<p class="btn-buttonwhite">
  nirajan

</p>
<p class="btn-xsbutton">
  +
</p>
<p class="btn-xsbutton-lg">
  6
</p>
<p class="btn-xsbutton">
  -
</p>

<i class="fa-solid fa-chart-area customicon"></i>

<p class="lg-text">hello</p>
<p class="md-text">hello</p>
<p class="sm-text">hello</p>
<p class="sm-text">hello</p>
<img src="{{asset("image/about.jpg")}}" alt="" srcset="" class="mdimage-exlg">
<p class="xs-text">hello</p>
<i class="fa-solid fa-chart-area customicons"></i>
<img src="{{asset("image/about.jpg")}}" alt="" srcset="" class="lgimage">
<img src="{{asset("image/about.jpg")}}" alt="" srcset="" class="lgimage-lg">
<img src="{{asset("image/about.jpg")}}" alt="" srcset="" class="mdimage-lg">

<img src="{{asset("image/about.jpg")}}" alt="" srcset="" class="mdimage">
<img src="{{asset("image/about.jpg")}}" alt="" srcset="" class="smimage">
<img src="{{asset("image/about.jpg")}}" alt="" srcset="" class="smimage-lg">



</div>
--}}