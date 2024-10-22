<!-- explore -->
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