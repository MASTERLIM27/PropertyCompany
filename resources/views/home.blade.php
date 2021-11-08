@extends('layout.mainlayout')

@section('title','Property Company')

@section('main_content')

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://wallpaperaccess.com/full/1899348.jpg" alt="Los Angeles" class="d-block w-100">
          <div class="carousel-caption">
            <h2>Property Company</h2>
            <br>
            <p>We are a platform where we provide various kinds of property developers and their projects throughout Indonesia !</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://shakespearehomes.com/wp-content/uploads/2019/01/Shakespeare-POETRY-6-2.jpg" alt="Chicago" class="d-block w-100">
          <div class="carousel-caption">
            <h2>Add Developer and Projects</h2>
            <br>
            <p>Here you can add property developers or projects that do not yet exist freely, easily and quickly.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.vanbridge.com/wp-content/uploads/2015/08/assure-lease-image.jpg" alt="Los Angeles" class="d-block w-100">
          <div class="carousel-caption">
            <h2>Find What You Looking For</h2>
            <br>
            <p>We hope this platform can make it easier for you to find the developer and project you are looking for !</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <br>

    <div class="row p-5">
      <div class="col ms-5 ps-5">
        <!-- Carousel -->
        <div id="carddemo" class="carousel slide" data-bs-ride="carousel" style="width:400px">

          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carddemo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carddemo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carddemo" data-bs-slide-to="2"></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card" style="width:400px">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="398" height="275.5" src="https://www.youtube.com/embed/iFE1d-o2vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Tunjungan Plaza Surabaya</h4>
                    <p class="card-text">Tunjungan Plaza adalah sebuah pusat perbelanjaan terbesar kedua setelah Pakuwon Mall di Surabaya.</p>
                    <a href="" class="btn btn-primary">See Profile</a>
                  </div>
                </div>
              </div>     
            <div class="carousel-item">
              <div class="card" style="width:400px">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="398" height="275.5" src="https://www.youtube.com/embed/XzEAqGeOCaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Citraland Surabaya</h4>
                  <p class="card-text">CitraLand Surabaya adalah sebuah kota mandiri yang bersih, rapi, dan tertata.</p>
                  <a href="" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card" style="width:400px">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="398" height="275.5" src="https://www.youtube.com/embed/Hu-uQRwWQFY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Graha Family</h4>
                  <p class="card-text">Graha Famili is a premium residential area in East Java, specifically in West Surabaya.</p>
                  <a href="" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carddemo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carddemo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
      <div class="col">
        <div class="mt-4 p-5 bg-light text-black rounded">
          <h1>Latest Projects</h1>
          <p>See projects throughout Indonesia</p>
        </div>
      </div>
    </div>

    <div class="mt-4 p-5 bg-dark text-white">
      <h1>Best Developer</h1>
      <p>Find the best developer faster and easily</p>
    </div>

    <div class="row text-center p-5 pe-0">
      <div class="col align-middle">
        <div class="card" style="width:300px">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="298" height="175.5" src="https://www.youtube.com/embed/qScuwY7pht8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h4 class="card-title">Pakuwon Group</h4>
            <p class="card-text">Established in 1982 and listed on both the Jakarta and Surabaya Stock exchanges since 1989</p>
            <a href="" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width:300px">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="298" height="175.5" src="https://www.youtube.com/embed/nQKDUTX8PeA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h4 class="card-title">Ciputra Group</h4>
            <p class="card-text">Ciputra Group, which was established by Dr. Hc. Ir. Ciputra and his family in 1981.</p>
            <a href="" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width:300px">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="298" height="175.5" src="https://www.youtube.com/embed/3rMZmkglDQA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h4 class="card-title">Intiland</h4>
            <p class="card-text">Intiland is ready to serve Indonesia’s needs by providing residential, office building, retail, industrial estate, and many more.</p>
            <a href="" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
    </div>

@endsection