@extends("frontend.layouts.master")



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
    min-height: 100vh; /* Minimum height of the viewport */
    width: 100%; /* Full width */
    position: fixed; /* Fixed positioning to cover entire viewport */
    top: 0; 
    left: 0; /* Align to the left */
    z-index: 20; 
    display: none;
   

}


  .fa-xmark {
    position: absolute; 
    top:22%; 
    right:10%; 
    z-index:20; 
    background: black;
    border-radius:var(--radius8);
    cursor: pointer; 
}

  .showsinglebuy {
    background: var(--green);
    margin: 0 1rem;
    top: 10rem;
    position: absolute;
    padding: 0 1rem;
    border-radius: var(--radius4);
  }
  @media (max-width:700px){
    .hidesinglebuy {
    top:-3.5rem; 
    left: 0;
    bottom:20rem;


}
.fa-xmark {

    top:25%; /* Adjust to a percentage for responsive design */
    right:3%; 


 
}

  }
</style>
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
                  <button class="btn-buttonoutline-sm p-0 m-0 ">add cart</button>
                  <button class="btn-buttonoutline-sm p-0 m-0 " onclick="buyNowFun()">Buy Now</button>
                  <i class="fa-regular fa-heart customicon"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Overview and Description -->
        <div class="col-md-12 descriptionborder p-4 my-2 ">
          <div class="row mx-2">
            <div class="col-md-6 gap-3 d-flex">
              <button class="btn-buttonoutline-sm p-0 m-0 ">description</button>
              <button class="btn-buttonoutline-sm p-0 m-0 ">add info</button>
              <button class="btn-buttonoutline-sm p-0 m-0 ">Review (4)</button>
            </div>
            <p class="xs-text py-2 ">
              Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal
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

<section class="container-fluid sectiongap">
  <div class="container">
    <div class="title">
      <div class="lg-texts ">product <span class="greenhighlight">deal</span> </div>
      <div class="xs-text-md greenhighlight ">Don't wait. The time will never be just right.</div>
    </div>
    <div class="row py-2 fcc flex-wrap gap-md-0 gap-1">
      <div class="col-md-3 col-5">
        <div class=" customcard row col-md-12 p-2 rounded">
          <div class="card-body ">
            <div class="imgf d-flex justify-content-center py-2">
              <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class="mdimage-lg ">
            </div>
            <div class="d-flex justify-content-between mx-1">
              <p class="xs-text needhide">type</p>
              <p class="xs-text"><i class="fa-regular fa-star"></i> <i class="fa-regular fa-star"></i> <i
                  class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
              </p>

            </div>
            <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
            <div class="d-flex justify-content-between mx-1 ">
              <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
              <p class="xs-text needhide">500 ml</p>
            </div>
            <div class="d-flex gap-2  py-2">
              <i class="fa-regular fa-heart customicon"></i>
              <i class="fa-regular fa-heart customicon"></i>
              <i class="fa-regular fa-heart customicon"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-5 mb-2">
        <div class="row"></div>
        <div class=" customcard row col-md-12 p-2 rounded">
          <div class="card-body ">
            <div class="imgf d-flex justify-content-center py-2">
              <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class="mdimage-lg ">
            </div>
            <div class="d-flex justify-content-between mx-1">
              <p class="xs-text needhide">type</p>
              <p class="xs-text"><i class="fa-regular fa-star"></i> <i class="fa-regular fa-star"></i> <i
                  class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
              </p>

            </div>
            <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
            <div class="d-flex justify-content-between mx-1 ">
              <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
              <p class="xs-text needhide">500 ml</p>

            </div>
            <div class="d-flex gap-2  py-2">
              <i class="fa-regular fa-heart customicon"></i>
              <i class="fa-regular fa-heart customicon"></i>
              <i class="fa-regular fa-heart customicon"></i>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-3 col-5 mb-2">
        <div class=" customcard row col-md-12 p-2 rounded">
          <div class="card-body ">
            <div class="imgf d-flex justify-content-center py-2">
              <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class="mdimage-lg ">
            </div>
            <div class="d-flex justify-content-between mx-1">
              <p class="xs-text">type</p>
              <p class="xs-text"><i class="fa-regular fa-star"></i> <i class="fa-regular fa-star"></i> <i
                  class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
              </p>

            </div>
            <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
            <div class="d-flex justify-content-between mx-1 ">
              <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
              <p class="xs-text">500 ml</p>
            </div>
            <div class="d-flex gap-2  py-2">
              <i class="fa-regular fa-heart customicon"></i>
              <i class="fa-regular fa-heart customicon"></i>
              <i class="fa-regular fa-heart customicon"></i>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-3 col-5 mb-2">
        <div class=" customcard row col-md-12 p-2 rounded">
          <div class="card-body ">
            <div class="imgf d-flex justify-content-center py-2">
              <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class="mdimage-lg ">
            </div>
            <div class="d-flex justify-content-between mx-1">
              <p class="xs-text">type</p>
              <p class="xs-text"><i class="fa-regular fa-star"></i> <i class="fa-regular fa-star"></i> <i
                  class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
              </p>

            </div>
            <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
            <div class="d-flex justify-content-between mx-1 ">
              <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
              <p class="xs-text">500 ml</p>
            </div>
            <div class="d-flex gap-2  py-2">
              <i class="fa-regular fa-heart customicon"></i>
              <i class="fa-regular fa-heart customicon"></i>
              <i class="fa-regular fa-heart customicon"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- explore -->
<section class="container-fluid advertisement py-5">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center gap-3">

      <div class="col-md-6 order-2 order-md-1">
        <div class="xs-text-bd yellowhighlight">yak churpi</div>
        <div class="lg-texts whitehighlight ">explore categories</div>
        <p class="xs-text whitehighlight my-2">Vegetarian,farm grocery store vector illustration, green white
          color.
          Find Vegetables Background stock images in HD and millions of other royalty-free stock photos,
          illustrations and vectors in the</p>
        <div class="adv-button-collection d-flex gap-3">
          <button class="btn-buttonblack mt-2">Shop Now</button>
          <button class="btn-buttonwhite mt-2">Shop Now</button>
        </div>
      </div>
      <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class=" col-md-4 lgimage order-md-2 order-1">

    </div>

  </div>
</section>


<script>
  function buyNowFun() {
    const getSingleBuy = document.querySelector(".hidesinglebuy");

    // Toggle the display property
    if (getSingleBuy.style.display === "none") {
      getSingleBuy.style.display = "block";
    } else {
      getSingleBuy.style.display = "none";
    }
  }
  function closeSinglebuy(){
    const getSingleBuy = document.querySelector(".hidesinglebuy");
    if(getSingleBuy.style.display ==="block"){
      getSingleBuy.style.display = "none";

    }
    else{
      getSingleBuy.style.display = "block";

    }

  }
</script>




@endsection