<style>

.logoimg {
    width: auto;
    height: 60px;
    object-fit: cover;
}

@media (max-width: 400px) {
    .logoimg {
        width: 130px;
        height: 60px;
        object-fit: contain;
    }
}
  a {
    text-decoration: none;
  }

  .crossmenu {
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    width: 60px;
    height: 44px;
    background: var(--off-green);
    border-radius: 8px;

  }

  .linea {
    margin-left: 6px;
    height: 4px;
    width: 72%;
    background-color: white;
    transition: all 0.3s ease;
  }

  .line1 {
    width: 66%;

  }

  .line2 {
    width: 76%;

  }

  .line3 {
    width: 66%;

  }

  .crossmenu.cross .line1 {
    transform: rotate(45deg) translate(11px, 5px);
  }

  .crossmenu.cross .line2 {
    opacity: 0;
  }

  .crossmenu.cross .line3 {
    transform: rotate(-45deg) translate(11px, -5px);
  }

  .navsection {
    background: var(--green) !important;
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  .navsection .nav-item {
    font-size: 18px !important;
    font-weight: var(--weight400) !important;
    font-family: var(--font-family) !important;
    text-transform: capitalize !important;

  }

  .navsection .nav-item a {
    color: white !important;
  }

  .navinput {
    width: 24vh;
    height: 5vh;
    border-radius: 20px 0 0 20px;
    border: 1px solid white
  }

  input::placeholder {
    font-size: 14px;
    font-weight: 400;
    color: var(--text-gray);
    font-family: var(--font-family);
  }

  .search {
    border: 1px solid black;
    background: black;
    padding: 0 2rem;
    border-radius: 0 20px 20px 0;
    color: white;
  }

  @media (max-width:998px) {
    .forhide {
      display: none;
    }

  }

  .top-counter {
    position: absolute;
    padding: 0 6px;
    top: 0.1rem;
    right: 0rem;
    background: var(--pure-white);
    border-radius: 20px;
    font-size: 12px;
  }

  .forrelative {
    position: relative;
  }
  .bur-menu {
    display: none;
    z-index: 1000;
    background: var(--green);
    height: 84vh;
    width: 25vw;
    position: absolute;
    top: 7rem;
    color: white;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 2;
    border-radius: var(--border-radius);
}

.activites {
    display: none;
}

@media (max-width: 990px) {
    .bur-menu {
        width: 50vw;
        top: 7rem !important;
    }

    .activites {
        display: block;
    }
}


.bur-menu li {
    display: flex;
    align-items: center;
    margin-left: 20%;
    font-size: 24px !important;
    list-style: none;
    padding: 0.5rem 1rem;
    border-radius: var(--border-radius);
    width: 52%;
}

.bur-menu .font-collection {
    margin-left: 20%;
    width: 20%;
}
.customicons {
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    padding: 0.6rem;
    border-radius: var(--border-radius);
}

.font-collection :hover {
    border-radius: var(--border-radius);
    z-index: 1;
}

.bur-menu li:hover {
    background: var(--off-yellow);
    border-radius: var(--border-radius);
}

@media (max-width: 700px) {
    .bur-menu {
        top: 20%;
        width: 90vw;
    }

    .bur-menu li {
        width: 62%;
    }
}



.nav-button-collection {
    display: none;
}
</style>

<section class="container-fluid navsection">
  <div class="container">
    <div class="bur-menu py-3" id="bur-menu">
      <div class="activites">
        <h2 class="navdestext pt-3">Activities Section</h2>
        <li class="nav-item">
          <i class="fa-solid fa-house customiconssmall"></i>
          <a class="nav-link" aria-current="page" href="/">Introduction</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-truck-moving customiconssmall"></i>
          <a class="nav-link" aria-current="page" href="{{ route('properties') }}">Rent</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-cart-shopping customiconssmall"></i>
          <a class="nav-link" aria-current="page" href="{{ route('properties') }}">Buy</a>
        </li>
      </div>
      <div class="information">
        <h2 class="navdestext">Information Section</h2>
        <li class="nav-item d-flex">
          <i class="fa-solid fa-circle-question customiconssmall"></i>
          <a class="nav-link" aria-current="page" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-blog customiconssmall"></i>
          <a class="nav-link active" aria-current="page" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-address-book customiconssmall"></i>
          <a class="nav-link active" aria-current="page" href="{{ route('contact') }}">Contact</a>
        </li>
      </div>
      <h2 class="navdestext">Follow Us</h2>
      <div class="d-flex font-collection py-2">
        <a href="#"><i class="fa-brands fa-facebook customicons mx-2"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin customicons mx-2"></i></a>
        <a href="#"><i class="fa-brands fa-instagram customicons mx-2"></i></a>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light navcustom">
      <div class="d-flex justify-content-center align-items-center">
        <!-- <i class="customicons crossmenu p-1 m-0 d-flex" onclick="funmenu()"> -->
        <!-- function comment so not work -->
        <i class="customicons crossmenu p-1 m-0 mx-md-1 d-flex">
          <div class="linea line1"></div>
          <div class="linea line2"></div>
          <div class="linea line3"></div>
        </i>
        <a class="navbar-brand" href="/"> <img src="{{ asset('image/logos.png') }}" alt="Logo" class="logoimg" /></a>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 mx-auto gap-2">

          <li class="nav-item">
            <a class="nav-link" href="/">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('properties') }}">shop</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">pages</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('blog') }}">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("contact")}}">contact</a>
          </li>

        </ul>
      </div>

      <div class="forhide">
        <div class="searchcontainer d-flex justify-content-center mx-3 ">
          <input type="text" class="navinput m-0 p-2" placeholder="search your project">
          <button class="search "> Search</button>

        </div>
      </div>

      <div class="d-flex gap-2 relative">
        <a href="{{route("account")}}" class="d-flex align-items-center">
          <i class="fa-regular fa-user customicon forhide" aria-hidden="true"></i>
        </a>


        <div class="forhide">
          <a href="{{route('cart')}}" class="d-flex align-items-center forrelative ">
            <i class="fa-solid fa-cart-plus customicon"></i>
            <p class="sm-text top-counter">9</p>
          </a>
        </div>
        <a href="{{route("favourite")}}" class="d-flex align-items-center forrelative">
          <i class="fa-regular fa-heart customicon"></i>
          <p class="sm-text top-counter">1</p>
        </a>
      </div>
    </nav>
  </div>
</section>
<script>

  function funmenu() {
    const menuIcon = document.querySelector('.crossmenu');
    const menu = document.getElementById('bur-menu');

    // Toggle the 'cross' class on the menu icon
    menuIcon.classList.toggle('cross');

    // Toggle the display of the menu
    if (menu.style.display === "block") {
      menu.style.display = "none";
    } else {
      menu.style.display = "block";
    }
  }

  // Search Form Toggle Function
  function funsearchingon() {
    const hiddenformdata = document.getElementsByClassName("hiddenform")[0];
    hiddenformdata.style.display = hiddenformdata.style.display === "block" ? "none" : "block";
  }

  function funmenu() {
    const menuIcon = document.querySelector('.crossmenu');
    const menu = document.getElementById('bur-menu');

    // Toggle the 'cross' class on the menu icon
    menuIcon.classList.toggle('cross');

    // Toggle the display of the menu
    if (menu.style.display === "block") {
      menu.style.display = "none";
    } else {
      menu.style.display = "block";
    }
  }
  function funsearchingon() {
    const hiddenformdata = document.getElementsByClassName("hiddenform")[0];
    hiddenformdata.style.display = hiddenformdata.style.display === "block" ? "none" : "block";
  }


</script>