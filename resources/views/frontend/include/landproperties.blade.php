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
        color:var(--yellow);
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
    .daydeal{
        background:#F1F4F0;
    }
</style>



<section class="container-fluid sectiongap">
    <div class="container">
        <div class="title">
        <div class="lg-texts ">Day of the <span class="greenhighlight">deal</span> </div>
            <div class="xs-text-md greenhighlight ">Don't wait. The time will never be just right.</div>
        </div>
        <div class="row my-md-4 fcc flex-wrap gap-md-0 gap-1">
            <div class="col-md-4 col-5">
                <div class=" offercard row col-md-12 p-2 rounded"> 
                    <p class="md-text whitehighlight py-3 d-flex justify-content-center text-center offerprice">
                    Offer Price Rs.900</p>
                <div class="d-flex gap-2 py-3">
                    <div class="">
                  <p class="xs-text-bd whitehighlight p-0 m-0">Vegetarian</p>
                    <p class="xs-text whitehighlight my-2">Vegetarian,farm grocery store vector illustration, green white
                        color.</p>
                        <button class="btn-buttonwhite p-0 m-0 ">Shop Now</button>
                        </div>
                    <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class=" mdimage-lg col-md-4">
                </div>
                </div>
            </div>

            <div class="col-md-4 col-5">
                <div class=" offercard row col-md-12 p-2 rounded"> 
                    <p class="md-text whitehighlight py-3 d-flex justify-content-center text-center offerprice">
                    Offer Price Rs.900</p>
                <div class="d-flex gap-2 py-3">
                    <div class="">
                  <p class="xs-text-bd whitehighlight p-0 m-0">Vegetarian</p>
                    <p class="xs-text whitehighlight my-2">Vegetarian,farm grocery store vector illustration, green white
                        color.</p>
                        <button class="btn-buttonwhite p-0 m-0 ">Shop Now</button>
                        </div>
                    <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class=" mdimage-lg col-md-4">
                </div>
                </div>
            </div>
            <div class="col-md-4 col-5">
                <div class=" offercard row col-md-12 p-2 rounded"> 
                    <p class="md-text whitehighlight py-3 d-flex justify-content-center text-center offerprice">
                    Offer Price Rs.900</p>
                <div class="d-flex gap-2 py-3">
                    <div class="">
                  <p class="xs-text-bd whitehighlight p-0 m-0">Vegetarian</p>
                    <p class="xs-text whitehighlight my-2">Vegetarian,farm grocery store vector illustration, green white
                        color.</p>
                        <button class="btn-buttonwhite p-0 m-0 ">Shop Now</button>
                        </div>
                    <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class=" mdimage-lg col-md-4">
                </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- product deal -->
<section class="container-fluid sectiongap">
    <div class="container">
        <div class="title">
        <div class="lg-texts ">product <span class="greenhighlight">deal</span> </div>
            <div class="xs-text-md greenhighlight ">Don't wait. The time will never be just right.</div>
        </div>
<style>
    @media(max-width:450px){
        .needhide{
            display:none ;
        }
        .col-md-3 .customcard:nth-child(even){
            margin-top:0.5rem;
        }
    }
</style>

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
                                    class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i> </p>

                        </div>
                        <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
                        <div class="d-flex justify-content-between mx-1 ">
                            <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
                            <p class="xs-text needhide">500 ml</p>

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
                                    class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i> </p>

                        </div>
                        <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
                        <div class="d-flex justify-content-between mx-1 ">
                            <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
                            <p class="xs-text needhide">500 ml</p>

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
                                    class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i> </p>

                        </div>
                        <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
                        <div class="d-flex justify-content-between mx-1 ">
                            <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
                            <p class="xs-text">500 ml</p>

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
                                    class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i> </p>

                        </div>
                        <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
                        <div class="d-flex justify-content-between mx-1 ">
                            <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
                            <p class="xs-text">500 ml</p>

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

<!-- feature and hot deal -->
 <style>
    .featureandhot{
        background:#E5E6E2;
        padding:4rem 0;
    }

 </style>
<section class="container-fluid  featureandhot ">
<style>
    .hotproduct {
        display: none;
        cursor: pointer;
    }
</style>
    <div class="container">
        <div class="row gap-5">
            <div class="col-md-8">
                <div class="topic-collection d-flex gap-4">
                    <p class="lg-text-md  underlineborder active" id="featuresProduct">features products
                    </p>
                    <p class="lg-text-md" id="hotSale">hot sale</p>
                </div>


                <div class="row py-3 col-md-12 product-container featureproduct">
                    <div class="fbc gap-1 flex-wrap ">
                        <div class="col-md-3 d-flex align-items-center mb-3">
                            <img src="{{ asset('image/house3.png') }}" alt="" class="smimage">
                            <div class="mx-2">
                                <p class="xs-text-md p-0 m-0">pure</p>
                                <p class="xs-text-md p-0 m-0 yellowhighlight">rs <span>2340</span></p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-center mb-3">
                            <img src="{{ asset('image/house3.png') }}" alt="" class="smimage">
                            <div class="mx-2">
                                <p class="xs-text-md p-0 m-0">pure</p>
                                <p class="xs-text-md p-0 m-0 yellowhighlight">rs <span>2340</span></p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-center mb-3">
                            <img src="{{ asset('image/house3.png') }}" alt="" class="smimage">
                            <div class="mx-2">
                                <p class="xs-text-md p-0 m-0">pure</p>
                                <p class="xs-text-md p-0 m-0 yellowhighlight">rs <span>2340</span></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row py-3 col-md-12 product-container hotproduct">
                <div class="fbc flex-wrap gap-1">
                        <div class="col-md-3 d-flex align-items-center mb-3">
                            <img src="{{ asset('image/house2.png') }}" alt="" class="smimage">
                            <div class="mx-2">
                                <p class="xs-text-md p-0 m-0">mali gaiko pure</p>
                                <p class="xs-text-md p-0 m-0 yellowhighlight">rs <span>2340</span></p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-center mb-3">
                            <img src="{{ asset('image/house2.png') }}" alt="" class="smimage">
                            <div class="mx-2">
                                <p class="xs-text-md p-0 m-0">mali gaiko pure</p>
                                <p class="xs-text-md p-0 m-0 yellowhighlight">rs <span>2340</span></p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-center mb-3">
                            <img src="{{ asset('image/house2.png') }}" alt="" class="smimage">
                            <div class="mx-2">
                                <p class="xs-text-md p-0 m-0">mali gaiko pure</p>
                                <p class="xs-text-md p-0 m-0 yellowhighlight">rs <span>2340</span></p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-center mb-3">
                            <img src="{{ asset('image/house2.png') }}" alt="" class="smimage">
                            <div class="mx-2">
                                <p class="xs-text-md p-0 m-0">mali gaiko pure</p>
                                <p class="xs-text-md p-0 m-0 yellowhighlight">rs <span>2340</span></p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-center mb-3">
                            <img src="{{ asset('image/house2.png') }}" alt="" class="smimage">
                            <div class="mx-2">
                                <p class="xs-text-md p-0 m-0">mali gaiko pure</p>
                                <p class="xs-text-md p-0 m-0 yellowhighlight">rs <span>2340</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="customcard-dup row col-md-3 col-11 p-2 rounded mx-md-0 mx-2">
                <div class="card-body fcc flex-column">
                    <p class="md-text text-center mx-1">mali gaiko pure gheu</p>
                    <div class="d-flex justify-content-center py-2">
                        <img src="{{ asset('image/house3.png') }}" alt="" class="mdimage-lglg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const featureDiv = document.querySelector(".featureproduct");
    const hotDiv = document.querySelector(".hotproduct");
    const featuresProduct = document.getElementById("featuresProduct");
    const hotSale = document.getElementById("hotSale");

    // Set initial states
    featureDiv.style.display = "block"; // Show feature product initially
    hotDiv.style.display = "none";      // Hide hot product initially

    // Event listeners for toggling
    featuresProduct.addEventListener("click", function() {
        featureFun();
        // Add underline and active class
        featuresProduct.classList.add("underlineborder", "active");
        hotSale.classList.remove("underlineborder", "active");
    });

    hotSale.addEventListener("click", function() {
        hotFun();
        // Add underline and active class
        hotSale.classList.add("underlineborder", "active");
        featuresProduct.classList.remove("underlineborder", "active");
    });
});

function featureFun() {
    const featureDiv = document.querySelector(".featureproduct");
    const hotDiv = document.querySelector(".hotproduct");

    // Show featureDiv and hide hotDiv
    featureDiv.style.display = "block";
    hotDiv.style.display = "none";
}

function hotFun() {
    const featureDiv = document.querySelector(".featureproduct");
    const hotDiv = document.querySelector(".hotproduct");

    // Show hotDiv and hide featureDiv
    hotDiv.style.display = "block";
    featureDiv.style.display = "none";
}

</script>

<!-- 
@php
    $mainImages = !empty($property->main_image) ? json_decode($property->main_image, true) : [];
    $mainImage = !empty($mainImages) ? asset('' . $mainImages[0]) : asset('images/default-placeholder.png');
 @endphp -->