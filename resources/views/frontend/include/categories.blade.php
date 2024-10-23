<style>
    .buttonborder {
        border-bottom: 2px solid forestgreen;
        padding: 1rem 0;

    }



    .subcato,
    .subcato1 {
        border: 1px solid var(--border-color);
        cursor: pointer;
    }

    .subcatoactive,
    .subcatoactive1 {
        background: var(--pure-black);
        color: var(--pure-white)
    }

    #categoryfirst_second,
    #categoryfirst_third {
        display: none;
    }


</style>





<section class="container-fluid py-4 categoriessection">
    <div class="container">
        <div class="title ">
            <h1 class="lg-texts">Details View <span class="greenhighlight">Category</span></h1>
            <p class="xs-text-md greenhighlight">Shop online for new arrivals and get healthy shipping!</p>
        </div>
        <!-- category first -->
        <div class="col-12">
            <div class="row  buttonborder">
                <p class="md-text col-md-3 yellowhighlight p-0 m-0">Vegetable</p>
                <div class="col-md-8 row p-0 m-0 rounded gap-3">
                    <div class="d-flex col-md-12 gap-md-1 gap-2 d-flex flex-wrap p-0 m-0">

                        <p class="xs-text col-md-2 col-5 subcato rounded text-center subcatoactive"
                            data-id="categoryfirst_first" onclick="callSubCat(this)">
                            Hariyo Sag</p>
                        <p class="xs-text col-md-2 col-5 subcato rounded text-center" data-id="categoryfirst_second"
                            onclick="callSubCat(this)">
                            Mitho Chamsur</p>
                        <p class="xs-text col-md-2 col-5 subcato rounded text-center" data-id="categoryfirst_third"
                            onclick="callSubCat(this)">
                            Hariyo Sag</p>

                    </div>
                    <div class="py-2 col-md-12 " id="categoryfirst_first">
                        <div class="row d-flex flex-wrap">
                            <div class="col-md-3 col-6 d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">mulakosaaag</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6  d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">Pure</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6   d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">Pure</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">Pure</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">Pure</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>
                            <!-- Repeat for other products -->
                        </div>
                    </div>
                    <div class="py-2 col-md-12" id="categoryfirst_second">
                        <div class="row d-flex flex-wrap">
                            <div class="col-md-3 col-6 d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">mitho chamsur</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>
                         
                            
                        </div>
                    </div>
                    <div class="py-2 col-md-12" id="categoryfirst_third">
                        <div class="row d-flex flex-wrap">
                            <div class="col-md-3 col-6 d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">hariyo sag</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- category second -->
        <div class="col-12 py-5">
            <div class="row ">
                <p class="md-text col-md-3 yellowhighlight p-0 m-0">Beans</p>
                <div class="col-md-8 row p-0 m-0 rounded gap-3">
                    <div class="d-flex col-md-12 gap-md-1 gap-2 d-flex flex-wrap p-0 m-0">
                        <p class="xs-text col-md-2 col-5 subcato1 rounded text-center subcatoactive1"
                            data-id="categorysecond_first" onclick="callSubCat1(this)">
                            kerau</p>
                        <p class="xs-text col-md-2 col-5 subcato1 rounded text-center" data-id="categorysecond_second"
                            onclick="callSubCat1(this)">
                            bodi</p>
                        <p class="xs-text col-md-2 col-5 subcato1 rounded text-center" data-id="categorysecond_third"
                            onclick="callSubCat1(this)">
                            rajma</p>

                    </div>
                    <div class="py-2 col-md-12 " id="categorysecond_first">
                        <div class="row d-flex flex-wrap">
                            <div class="col-md-3 col-6 d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">kerau</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="py-2 col-md-12" id="categorysecond_second">
                        <div class="row d-flex flex-wrap">
                            <div class="col-md-3 col-6 d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">bodi</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2 col-md-12" id="categorysecond_third">
                        <div class="row d-flex flex-wrap">
                            <div class="col-md-3 col-6 d-flex align-items-center mb-3">
                                <img src="{{ asset('image/house3.png') }}" alt="Pure product image" class="smimage">
                                <div class="mx-2">
                                    <p class="xs-text-md p-0 m-0">ramja</p>
                                    <p class="xs-text-md p-0 m-0 yellowhighlight">Rs <span>2340</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function callSubCat(element) {
        const categoryfirst_first = document.getElementById("categoryfirst_first");
        const categoryfirst_second = document.getElementById("categoryfirst_second");
        const categoryfirst_third = document.getElementById("categoryfirst_third");

        // Get all subcategory elements and remove the active class
        const items = document.querySelectorAll(".subcato");
        items.forEach(item => {
            item.classList.remove("subcatoactive");
        });

        // Add the active class to the clicked element
        element.classList.add("subcatoactive");

        // Hide all category sections initially
        categoryfirst_first.style.display = "none";
        categoryfirst_second.style.display = "none";
        categoryfirst_third.style.display = "none";

        const id = element.getAttribute("data-id")
        if (id === "categoryfirst_first") {
            categoryfirst_first.style.display = "block"
        }
        else if (id === "categoryfirst_second") {
            categoryfirst_second.style.display = "block"
        }
        else if (id === "categoryfirst_third") {
            categoryfirst_third.style.display = "block"

        }

        // Show the corresponding category section based on the clicked element

    }
</script>




<style>
    #categorysecond_second,
    #categorysecond_third {
        display: none;
    }
</style>

<script>
    function callSubCat1(element) {
        const items = document.querySelectorAll(".subcato1");
        const categorysecond_first = document.getElementById("categorysecond_first");
        const categorysecond_second = document.getElementById("categorysecond_second");
        const categorysecond_third = document.getElementById("categorysecond_third");

        items.forEach(item => {
            item.classList.remove("subcatoactive1");

        });
        element.classList.add("subcatoactive1");

        categorysecond_first.style.display = "none"
        categorysecond_second.style.display = "none"
        categorysecond_third.style.display = "none"
        const id = element.getAttribute("data-id");

        if (id === "categorysecond_first") {
            categorysecond_first.style.display = "block"
        }
        else if (id === "categorysecond_second") {
            categorysecond_second.style.display = "block"
        }
        if (id === "categorysecond_third") {
            categorysecond_third.style.display = "block"
        }

    }


</script>