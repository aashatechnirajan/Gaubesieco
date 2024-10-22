@extends("frontend.layouts.master")

<!-- css are same of dayofdeal and properrties and landproperties -->

<style>
  .advertisement {
    background: linear-gradient(rgba(124, 158, 119, 1) 0%,
        rgba(44, 56, 42, 1) 100%);
  }

  .offerprice {
    background: var(--off-green);

  }

  .offercard {
    background: var(--green);
  }

  .customcard {
    border: 2px solid var(--border-color);

  }

  .imgf {
    border-bottom: 1px solid var(--border-color);
  }

  .wrongprice {
    text-decoration: line-through;

  }

  .fa-star {
    color: var(--yellow);

  }

  .topic-collection {
    border-bottom: 1px solid var(--border-color);
  }

  .underlineborder {
    position: relative;
    color: var(--yellow);
  }

  .underlineborder::after {
    content: " ";
    color: var(---yellow);
    position: absolute;
    display: block;
    height: 4px;
    width: 76%;
    bottom: -1rem;
    border-bottom: 4px solid var(--yellow);

  }

  .customcard-dup {
    background: rgba(153, 153, 153, 0.12);

  }

  .daydeal {
    background: #F1F4F0;
  }


  .descriptionborder {
    border: 2px solid var(--border-color);
    border-radius: var(--radius4);
  }



  .findstockbutton {
    background-color: #FDE0E9 !important;
    border: 1px solid var(--text-gray) !important;
    color: var(--yellow) !important;
  }

  .forline {
    height: 1px;
    width: 100%;
    background: var(--border-color);
    color: red;

  }

  .routingname {
    background-color: #f5f5f5;
  }

  .btn-xs {
    border-radius: var(--radius4);
    height: 22px;
    width: 54px;
    font-size: 12px;
  }

  @media(max-width:450px) {
    .needhide {
      display: none;
    }

    .col-md-3 .customcard:nth-child(even) {
      margin-top: 0.5rem;
    }
  }

  .sidebar .searchcontainer {
    background: var(--off-green);
    border-radius: var(--radius4);
  }
</style>







@section("content")
<section class="container-fluid routingname ">
  <div class="container py-3 ">
    <p class="sm-text"><i class="fa-solid fa-location-dot greenhighlight"></i> <span>Home</span> . <span>Product</span>
    </p>
  </div>
</section>
<style>
  .hidesinglebuy {
    background: var(--border-color);
    min-height: 100vh;
    width:55%;
    position: fixed;
    top: 0;
    right: 0;
    z-index: 20;
    display: none;
  }

  .fa-xmark {
    position: absolute;
    top:20%;
    right:1.5%;
    z-index: 20;
    background: black;
    border-radius: var(--radius8);
    cursor: pointer;
  }



  @media (max-width:770px) {
    .hidesinglebuy {
    width:92%;
  }
    
  }

  .makeactive {
    background: var(--pure-black) !important;
    color: var(--pure-white);
  }

  .showsinglebuy {
    background: var(--green);
    margin: 0 1rem;
    top: 10rem;
    position: absolute;
    padding: 0 1rem;
    border-radius: var(--radius4);
  }
          #additional , #review{
            display: none;
          }
  
  @media (max-width:700px) {
    .hidesinglebuy {
      top: -3.5rem;
      left: 0;
      bottom: 20rem;


    }

    .fa-xmark {

      top: 24%;
      /* Adjust to a percentage for responsive design */
      right: 3%;

    }

    #additional,
    #review {
      display: none;
    }


  }
</style>

<!--open after click the buy button  -->
<section class="container-fluid hidesinglebuy">
  <div class="container fcc ">
    <i class="fa-solid fa-xmark customicon" onclick="closeSinglebuy()"></i>
    <div class="row  py-3 my-1  showsinglebuy fcc gap-2">
      <div class="col-md-8">
        <div class="row  d-flex align-items-center border rounded shadow-sm bg-light py-2">
          <div class="col-md-3 d-flex align-items-center">
            <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class="col-md-5 smimage-lg smimage-lgcd mx-2">
          </div>
          <div class="col-md-4">
            <h5 class="sm-text"><strong>Seeds of Change helll</strong></h5>
          </div>
          <div class="d-flex align-items-center gap-1 col-md-3 ">
            <button class="btn-xsbutton p-0 m-0 ">-</button>
            <button class="btn-xsbutton-lg p-0 m-0 ">0</button>
            <button class="btn-xsbutton p-0 m-0 ">+</button>
          </div>
          <p class="xs-text-bd  yellowhighlight m-md-0 m-2 col-md-2 ">Rs 30000</p>
        </div>
      </div>
      <div class="col-md-3  border rounded shadow-sm bg-light">
        <div class="row col-md-12 green p-3 gap-2">
          <p class=" topic-collection md-text p-1">order summary </p>
          <span class="sm-text topic-collection p-1">total items : </span>
          <span class="sm-text topic-collection p-1">total itemss s : </span>
          <button class="btn-buttonoutline-sm p-0 m-0 ">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- start of single product -->
<section class="container-fluid singleprojectpage py-2">
  <div class="container">
    <div class="row gap-5">
      <div class="col-md-8 ">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="d-flex col-md-5 ">
                <div class="row">
                  <img src="{{asset("image/house2.png")}}" alt="" class=" col-md-12  lgimage-lgheightcd">
                  <div class=" col-md-12 m-3">
                    <img src="{{asset("image/house2.png")}}" alt="" class=" col-md-3 smimage-lg">
                    <img src="{{asset("image/house2.png")}}" alt="" class=" col-md-3  smimage-lg ">
                    <img src="{{asset("image/house2.png")}}" alt="" class=" col-md-3 smimage-lg">
                    <img src="{{asset("image/house2.png")}}" alt="" class=" col-md-3   smimage-lg">
                  </div>
                </div>
              </div>
              <!-- Property Details -->
              <div class=" col-md-7 d-flex flex-column justify-content-between ">
                <div class="d-flex gap-1">
                  <button class="btn-buttonoutline-sm findstockbutton ">available</button>
                  <button class="btn-buttonoutline-sm findstockbutton ">stock out</button>
                </div>
                <h3 class="sm-text py-2">People just don't do it anymor</h3>
                <h3 class="xs-text pb-2">Dressing up. People just don't do it anymore. We have to change that. Give me
                  time and
                  I'll give you a revolution. What I hate is nasty, ugly people. The market is like a language, and you
                  have
                  to be able to </h3>

                <div class="forline"></div>
                <div class="d-flex flex-column p-0 m-0">
                  <p class="m-0 p-0">
                    <span class="xs-text-bd">Brand </span>
                    <span class="xs-text">: ESTA BETTERU CO</span>
                  </p>
                  <p class="m-0 p-1">
                    <span class="xs-text-bd">Flavour </span>
                    <span class="xs-text">: Super Saver Pack</span>
                  </p>
                  <p class="m-0 p-1">
                    <span class="xs-text-bd">Weight </span>
                    <span class="xs-text">: 200 Grams</span>
                  </p>

                  <p class="m-0 p-1">
                    <span class="xs-text-bd">Brand </span>
                    <span class="xs-text">: Egg Free, Allergen-Free</span>
                  </p>
                  <p class="m-0 p-1">
                    <span class="xs-text-bd">Info</span>
                    <span class="xs-text">: ESTA BETTERU CO</span>
                  </p>
                  <p class="m-0 p-1 py-2 d-flex">
                    <span class="xs-text-bd">weight</span>
                    <span class="d-flex gap-1">
                      <span>:</span>
                      <button class="btn-xs">1000gm</button>
                      <button class="btn-xs">11</button>
                      <button class="btn-xs">11</button>
                    </span>
                  </p>
                </div>
                <h3 class="greenhighlight p-md-0 m-0  py-2">$250.24</h3>
                <div class="d-flex align-items-center gap-2 md-py-0 py-2 ">
                  <!-- <div class="d-flex align-items-center  gap-1">
                    <button class="btn-xsbutton p-0 m-0 ">-</button>
                    <button class="btn-xsbutton-lg p-0 m-0 ">0</button>
                    <button class="btn-xsbutton p-0 m-0 ">+</button>
                  </div> -->
                  <button class="btn-buttonoutline-sm p-0 m-0 ">favourite</button>
                  <button class="btn-buttonoutline-sm p-0 m-0 ">add cart</button>
                  <button class="btn-buttonoutline-sm p-0 m-0 " onclick="buyNowFun()">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Overview and Description -->
        <div class="col-md-12 descriptionborder p-4 my-2 ">
          <div class="row mx-2">
            <div class="col-md-6 gap-3 d-flex">
              <button class="btn-buttonoutline-sm p-0 m-0 changer makeactive " data-id="description"
                onclick="callToggle(this)">description</button>
              <button class="btn-buttonoutline-sm p-0 m-0 changer" data-id="additional" onclick="callToggle(this)">add
                info</button>
              <button class="btn-buttonoutline-sm p-0 m-0 changer " data-id="review" onclick="callToggle(this)">Review
                (4)</button>
            </div>
            <p class="xs-text py-2 " id="description">
              Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal
              goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop
              tightly neurotic hungrily some and dear furiously this apart.Spluttered narrowly yikes left
            </p>
            <p class="xs-text py-2 " id="additional">
              additional Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off
              far quetzal
              goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop
              tightly neurotic hungrily some and dear furiously this apart.Spluttered narrowly yikes left
            </p>
            <p class="xs-text py-2 " id="review">
              review Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far
              quetzal
              goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop
              tightly neurotic hungrily some and dear furiously this apart.Spluttered narrowly yikes left
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 sidebar">
        <div class="">
          <div class="searchcontainer fcc p-2 mt-2  ">
            <input type="text" class="footerinput m-0 p-2" placeholder="search your project">
            <button class="search m-0 py-2 px-3"> Search</button>
          </div>
          <div class="featurelist-body">
            <p class="md-text  p-2">our product </p>
            @foreach ($properties as $property)
              <a class="featurelist-content d-flex py-1" href="{{ route('singleproperties', ['id' => $property->id]) }}">
                @php
            $mainImages = !empty($property->main_image) ? json_decode($property->main_image, true) : [];
            $mainImage = !empty($mainImages) ? asset($mainImages[0]) : asset('images/default-placeholder.png');
        @endphp
                <img src="{{ $mainImage }}" alt="Property Image" class="feature-smallimg"
                data-src="holder.js/200x250?theme=thumb" />
                <div class="featurlist-description mx-3">
                <h3 class="sm-text">{{ $property->title }}</h3>
                <p class="sm-text highlight">{{ $property->price }}</p>
                </div>
              </a>
      @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- product deal -->
@include("frontend.include.landproperties")

<!-- advertisement -->
@include("frontend.include.advertisement")

<script>

  // to toggle description ,additional and review
  function callToggle(element) {
    const items = document.querySelectorAll('.changer')
    const description = document.getElementById('description');
    const additional = document.getElementById('additional');
    const review = document.getElementById('review');
    description.style.display = "none";
    additional.style.display = "none";
    review.style.display = "none";

    items.forEach(item => {
      item.classList.remove("makeactive");
    })
    element.classList.add("makeactive");

    const id = element.getAttribute("data-id");
    if (id === "description") {
      description.style.display = "block";
    }
    else if (id === "additional") {
      additional.style.display = "block";
    }
    else {
      review.style.display = "block";
    }
  }

  // Toggle the display property
  function buyNowFun() {
    const getSingleBuy = document.querySelector(".hidesinglebuy");


    if (getSingleBuy.style.display === "none") {
      getSingleBuy.style.display = "block";
    } else {
      getSingleBuy.style.display = "none";
    }
  }
  //to close the display property of single page
  function closeSinglebuy() {
    const getSingleBuy = document.querySelector(".hidesinglebuy");
    if (getSingleBuy.style.display === "block") {
      getSingleBuy.style.display = "none";

    }
    else {
      getSingleBuy.style.display = "block";

    }

  }
</script>

@endsection