<style>
  footer {
    background: #f1efef;
    border: 2px solid red;

  }

  footer li a {
    font-size: 16px !important;
    font-weight: var(--weight400) !important;
    color: var(--text-gray) !important;

  }

  .rightpadding {
    margin-right: 4px;


  }
</style>






<footer class="container-fluid my-5">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="col-md-4 flex-col sm-col-12">
        <img src="{{asset("image/logo.png")}}" alt="" class="logoimg ">
        <p class="xs-text py-1 pt-3">
          Located in northern Brazil and traversed by the lower Amazon River. </p>
        <p class="xs-text ">
          <i class="fa-solid fa-envelope  rightpadding greenhighlight"></i>51 Green St.Huntington ohaio,Brazil

        </p>
        <p class="xs-text">
          <i class="fa-solid fa-location-dot  rightpadding greenhighlight"></i>51 Green St.Huntington ohaio,Brazil

        </p>

        <p class="xs-text">
          <i class="fa-solid fa-phone  rightpadding greenhighlight"></i>51 Green St.Huntington ohaio,Brazil

        </p>


        <div class="d-flex font-collection py-2">
          <i class="fa-brands fa-facebook customicons mx-2"></i>
          <i class="fa-brands fa-linkedin customicons mx-2"></i>
          <i class="fa-brands fa-youtube customicons mx-2"></i>
          <i class="fa-brands fa-instagram customicons mx-2"></i>
        </div>
      </div>
      <style>
        .minuspadding {
          margin-left: -1.4rem;
        }
      </style>

      <div class=" col-md-4">
        <div class="row d-flex justify-content-center ">
          <div class="col-md-7 sm-col-12 ">
            <h1 class="md-text minuspadding">Quick link</h1>
            <ul class="d-flex justify-content-around  customui flex-column gap-2">
              <li><a href="" class="xs-text"> about us </a></li>
              <li><a href="" class="xs-text">privacy policy </a></li>
              <li><a href="" class="xs-text">term $ condition </a></li>
              <li><a href="" class="xs-text">delivery information </a></li>
              <li><a href="" class="xs-text">contact us </a></li>
              <li><a href="" class="xs-text">support center </a></li>

            </ul>
          </div>

          <div class="col-md-4 sm-col-12 ">
            <h1 class="md-text  minuspadding">Category</h1>
            <ul class="d-flex justify-content-around  customui flex-column gap-2">
              <li><a href="" class="xs-text"> Rent</a></li>
              <li><a href="" class="xs-text">Buy</a></li>
              <li><a href="" class="xs-text">About</a></li>
              <li><a href="" class="xs-text">Blog</a></li>
            </ul>
          </div>

        </div>
      </div>

      <div class="col-md-4 col-sm-12 ">

        <h1 class="md-text">Subscribe Our Newsletter</h1>
        <div class="d-flex">
        <input type="text" class="input" placeholder="Your email id here">
        <a href="{{ route('login') }}" class="btn-buttonyellow  footer-button">send message</a>\
        </div>
       
      </div>
    </div>
  </div>
</footer>

<div class="container-fluid button-footer">
  <div class="container d-flex align-items-center  justify-content-center flex-column py-">
    <p class="sm-text1 pt-4 greenhighlight">All rights reserved by <span class="highlight">Aasha Tech </span> © <span
        id="currentYear"></span></p>

    <!-- <ul class="d-flex justify-content-around customui">
        <li><a href="" class=" mx-1 line">fAQ</a></li>
        <li><a href="" class=" mx-1 line">Policy</a></li>
        <li><a href="" class=" mx-2">Term and Condition</a></li>

      </ul> -->

  </div>
</div>

<script>
  // JavaScript to dynamically insert the current year
  document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>