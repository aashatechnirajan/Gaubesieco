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



<section class="container-fluid sectiongap">
    <div class="container">
        <div class="title">
        <div class="lg-texts  ">Day of the <span class="greenhighlight">deal</span> </div>
            <div class="xs-text-md greenhighlight ">Don't wait. The time will never be just right.</div>
        </div>
        <div class="row my-md-4 fcc flex-wrap gap-md-0 gap-1">
            <div class="col-md-4 col-11">
                <div class=" offercard row col-md-12 p-2 rounded"> 
                    <p class="md-text whitehighlight py-3 d-flex justify-content-center text-center offerprice">
                    Offer Price Rs.900</p>
                <div class="d-flex gap-2 py-3">
                    <div class="">
                  <p class="sm-text-bd whitehighlight p-0 m-0">Vegetarian</p>
                    <p class="xs-text whitehighlight my-2">Vegetarian,farm grocery store vector illustration, green white
                        color.</p>
                        <button class="btn-buttonwhite p-0 m-0  mt-1">Shop Now</button>
                        </div>
                    <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class=" mdimage-lg col-md-4">
                </div>
                </div>
            </div>

            <div class="col-md-4 col-11">
                <div class=" offercard row col-md-12 p-2 rounded"> 
                    <p class="md-text whitehighlight py-3 d-flex justify-content-center text-center offerprice">
                    Offer Price Rs.900</p>
                <div class="d-flex gap-2 py-3">
                    <div class="">
                  <p class="sm-text-bd whitehighlight p-0 m-0">Vegetarian</p>
                    <p class="xs-text whitehighlight my-2">Vegetarian,farm grocery store vector illustration, green white
                        color.</p>
                        <button class="btn-buttonwhite p-0 m-0  mt-1">Shop Now</button>
                        </div>
                    <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class=" mdimage-lg col-md-4">
                </div>
                </div>
            </div>
            <div class="col-md-4 col-11">
                <div class=" offercard row col-md-12 p-2 rounded"> 
                    <p class="md-text whitehighlight py-3 d-flex justify-content-center text-center offerprice">
                    Offer Price Rs.900</p>
                <div class="d-flex gap-2 py-3">
                    <div class="">
                  <p class="sm-text-bd whitehighlight p-0 m-0">Vegetarian</p>
                    <p class="xs-text whitehighlight my-2">Vegetarian,farm grocery store vector illustration, green white
                        color.</p>
                        <button class="btn-buttonwhite p-0 m-0 mt-1">Shop Now</button>
                        </div>
                    <img src="{{ asset("image/house3.png")}}" alt="" srcset="" class=" mdimage-lg col-md-4">
                </div>
                </div>
            </div>

        </div>
    </div>
</section>