
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






<!-- 
@php
    $mainImages = !empty($property->main_image) ? json_decode($property->main_image, true) : [];
    $mainImage = !empty($mainImages) ? asset('' . $mainImages[0]) : asset('images/default-placeholder.png');
 @endphp -->