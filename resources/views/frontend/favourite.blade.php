@extends("frontend.layouts.master")
@section("content")




<style>
     .routingname {
        background-color: #f5f5f5;
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

    .custom-fa-trash{
        background-color: var(--yellow);
      
    }
    .custom-fa-trash:hover{
        background: #000;
    }
    @media(max-width:450px) {
        .needhide {
            display: none;
        }}
</style>


<!-- herosection -->
<section class="container-fluid routingname ">
    <div class="container py-3 ">
        <p class="sm-text"><i class="fa-solid fa-location-dot greenhighlight"></i> <span>Home</span> . <span>Favourite</span>
        </p>
    </div>
</section>

<!-- 
favourite collection -->

<section class="container-fluid  mt-2 ">
    <div class="container">
        <div class="title">
            <div class="lg-texts ">favourite <span class="greenhighlight">collection</span> </div>
            <div class="xs-text-md greenhighlight ">Create a space that reflects your inner tranquility.</div>
        </div>
        <div class="row py-2 fcc flex-wrap gap-md-0 gap-1">
            <div class="col-md-3 col-5">
                <div class=" customcard row col-md-12 p-2 rounded">
                    <div class="card-body ">
                    <i class="fa-solid fa-trash customicon custom-fa-trash "></i>
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
                            
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-5 mb-2">
                <div class="row"></div>
                <div class=" customcard row col-md-12 p-2 rounded">
                    <div class="card-body ">
                    <i class="fa-solid fa-trash customicon custom-fa-trash "></i>
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
                    
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-5 mb-2">
                <div class=" customcard row col-md-12 p-2 rounded">
                    <div class="card-body ">
                    <i class="fa-solid fa-trash customicon custom-fa-trash "></i>
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
                            <p class="xs-text">50s0 ml</p>
                        </div>
                        <div class="d-flex gap-2  py-2">
                        <i class="fa-solid fa-bag-shopping customicon"></i>
                            <i class="fa-solid fa-cart-plus customicon"></i>
                           
                           
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-5 mb-2">
                <div class=" customcard row col-md-12 p-2 rounded">
                    <div class="card-body ">
                    <i class="fa-solid fa-trash customicon custom-fa-trash "></i>
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
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection