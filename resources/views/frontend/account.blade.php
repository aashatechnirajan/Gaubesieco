@extends('frontend.layouts.master')

@section('content')

<style>
    .descard {
        background: white;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .des-button {
        color: white;
        background: var(--off-green);
        border-radius: var(--radius4);
        font-weight:500;
        padding: 1rem 0;
        font-size:18px;
        text-transform: capitalize;
        font-family: var(--font-family);

    }

    .des-button:hover {
        background: var(--green);
        cursor: pointer;

    }

    .auth_button {
        border: 1px solid var(--pure-white);
        font-size: 18px;
        padding: 4px 6px;
        color: var(--pure-white);
        background: var(--yellow);
        font-family: var(--font-family);
    }

    .auth_button_black {
        background: var(--pure-black);
    }

    .heightcontroll {
        width:100%;
        height:12vh;
        object-fit: cover;
        border-radius: var(--radius4) !important;
    }
    @media (max-width:400px){
        .des-button {
        font-size:14px;
        font-weight:400;
    }

    }
</style>

<section class="container-fluid py-3">
    <div class="container">
        <div class="row m-2 p-0">
            <div class="col-md-8 col-12 row gap-2 order-md-1 order-2">
                <div class="col-md-12 row descard gap-2 py-3 rounded">
                    <div class="col-md-2 col-4 des-button fcc ">
                        order
                    </div>
                    <div class="col-md-9 col-7">
                        <p class="sm-text">here your order </p>
                        <p class="xs-text">items</p>
                    </div>

                </div>

                <div class="col-md-12 row descard gap-2 py-3 rounded">
                    <div class="col-md-2 col-4 des-button fcc ">
                        cart
                    </div>
                    <div class="col-md-9 col-7 ">
                        <p class="sm-text">here your order </p>
                        <p class="xs-text">items</p>
                    </div>

                </div>
                <div class="col-md-12 row descard gap-2 py-3 rounded">
                    <div class="col-md-2 col-4 des-button fcc text-center ">
                        favourite
                    </div>
                    <div class="col-md-9 col-7 ">
                        <p class="sm-text">here your order </p>
                        <p class="xs-text">items</p>
                    </div>

                </div>
                <div class="col-md-12 row descard gap-2 py-3 rounded">
                    <div class="col-md-2 col-4 des-button fcc text-center ">
                        help center
                    </div>
                    <div class="col-md-9 col-7 ">
                        <p class="sm-text">here your order </p>
                        <p class="xs-text">items</p>
                    </div>

                </div>

            </div>
            <div class="col-md-4 order-md-2 order-1 mb-4">
                <div class="row ">
                    <div class="col-4">
                        <img src="{{asset("image/expl.png")}}" alt="" class="col-12 rounded heightcontroll">

                    </div>

                    <div class="col-8 row ">
                        <div class="col-12 sm-text">Nirajan Sigdel</div>
                        <div class="col-12 m-0 p-0 mt-1 ">
                            <button class="auth_button rounded">login </button>
                            <button class="auth_button auth_button_black rounded">Register</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


</section>


@endsection