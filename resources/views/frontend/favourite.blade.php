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
        border: 1px solid red;
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



    .red {
        border: 2px solid red
    }

    .green {
        border: 2px solid green;
        border-radius: var(--radius4);
    }

    .deleteall {
        color: red !important;
        cursor: pointer;

    }
</style>
@section("content")
<section class="container-fluid routingname ">
    <div class="container py-3 ">
        <p class="sm-text"><i class="fa-solid fa-location-dot greenhighlight"></i> <span>Home</span> . <span>Cart</span>
        </p>
    </div>
</section>


<section class="container-fluid py-2 mt-2">
    <div class="container">
        <div class="row d-flex align-items-start">
            <div class="col-md-8 order-1">
                <div class="row">
                    <div class="col-md-12 fbc  mb-3 ">
                        <p class="md-text">cart details(0) </p>
                        <p class="sm-text deleteall">clear all </p>
                    </div>
                    <div class="col-md-12 gap-2 ">
                        <div class="row d-flex align-items-center border rounded shadow-sm bg-light py-3 my-1 ">
                            <div class="col-md-3 d-flex align-items-center col-2">
                                <input type="checkbox" class="btn-xsbutton" />
                                <img src="{{ asset("image/house3.png")}}" alt="" srcset=""
                                    class="col-md-5 smimage-lg smimage-lgcd mx-2">
                            </div>
                            <div class="col-md-4">
                                <h5 class="sm-text"><strong>Seeds of Change helll</strong></h5>
                                <p class="sm-text py-1"><strong>Sold By:</strong> <span>aasha tech</span></p>
                                <p class="sm-text"><strong>Size:</strong> <span>1kg</span></p>
                            </div>
                            <div class="d-flex align-items-center gap-1 col-md-3">
                                <button class="btn-xsbutton p-0 m-0 ">-</button>
                                <button class="btn-xsbutton-lg p-0 m-0 ">0</button>
                                <button class="btn-xsbutton p-0 m-0 ">+</button>
                            </div>
                            <p class="xs-text-bd  yellowhighlight m-md-0 m-2 col-md-2 ">Rs 300000</p>
                        </div>
                        <div class="row d-flex align-items-center mb-3  border rounded shadow-sm bg-light py-3  my-1">
                            <div class="col-md-3 d-flex align-items-center col-2">
                                <input type="checkbox" class="btn-xsbutton " />
                                <img src="{{ asset("image/house3.png")}}" alt="" srcset=""
                                    class="col-md-5 smimage-lg mx-2">
                            </div>
                            <div class="col-md-4">
                                <h5 class="xs-text-bd">Seeds of Change helll</h5>
                                <p class="sm-text py-1"><strong>Sold By:</strong> <span>aasha tech</span></p>
                                <p class="sm-text"><strong>Size:</strong> <span>1kg</span></p>
                            </div>
                            <div class="d-flex align-items-center gap-1 col-md-3">
                                <button class="btn-xsbutton p-0 m-0 ">-</button>
                                <button class="btn-xsbutton-lg p-0 m-0 ">0</button>
                                <button class="btn-xsbutton p-0 m-0 ">+</button>
                            </div>
                            <p class="xs-text-bd  yellowhighlight m-md-0 m-2 col-md-2 ">Rs 300000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border rounded shadow-sm bg-light py-3 my-1">
                <div class="row col-md-9 green p-3 gap-2">
                    <p class=" topic-collection md-text p-1">order summary </p>
                    <span class="sm-text topic-collection p-1">total items : </span>
                    <span class="sm-text topic-collection p-1">total itemss s : </span>
                    <button class="btn-buttonoutline-sm p-0 m-0 ">Buy Now</button>
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
                                    class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i>
                            </p>

                        </div>
                        <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
                        <div class="d-flex justify-content-between mx-1 ">
                            <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
                            <p class="xs-text needhide">500 ml</p>
                        </div>
                        <div class="d-flex gap-2  py-2">
                        <i class="fa-solid fa-bag-shopping customicon"></i>
                            <i class="fa-solid fa-cart-plus customicon"></i>
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
                                    class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i>
                            </p>

                        </div>
                        <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
                        <div class="d-flex justify-content-between mx-1 ">
                            <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
                            <p class="xs-text needhide">500 ml</p>

                        </div>
                        <div class="d-flex gap-2  py-2">
                        <i class="fa-solid fa-bag-shopping customicon"></i>
                            <i class="fa-solid fa-cart-plus customicon"></i>
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
                                    class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i>
                            </p>

                        </div>
                        <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
                        <div class="d-flex justify-content-between mx-1 ">
                            <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
                            <p class="xs-text">500 ml</p>
                        </div>
                        <div class="d-flex gap-2  py-2">
                        <i class="fa-solid fa-bag-shopping customicon"></i>
                            <i class="fa-solid fa-cart-plus customicon"></i>
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
                                    class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i>
                            </p>

                        </div>
                        <p class="xs-text-bd m-1 my-2">mali gaiko pure gheu</p>
                        <div class="d-flex justify-content-between mx-1 ">
                            <p class="md-text">rs. <span>450</span> <span class="xs-text wrongprice">500</span></p>
                            <p class="xs-text">500 ml</p>
                        </div>
                        <div class="d-flex gap-2  py-2">
                    
                            <i class="fa-solid fa-bag-shopping customicon"></i>
                            <i class="fa-solid fa-cart-plus customicon"></i>
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

@endsection