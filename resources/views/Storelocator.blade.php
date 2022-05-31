<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Brands</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{ url('css/style.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- jquery cdn link --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header section -->

    <div class="container-fluid bg-white text-black headercontainer">
        <div class="firstnav mt-3 pe-5 text-center">
            <nav class="allnav">
                <ul class="nav-links">
                    <li><a href="{{ route('about') }}" class="leftmenu">ABOUT US</a></li>
                    <li><a href="{{ route('Brands') }}" class="leftmenu">BRANDS</a></li>
                    <li>
                        <a href="{{ route('Maisondeperfums') }}" class="leftmenu">MAISON DE PARFUMS</a>
                    </li>
                    <li>
                        <a href="{{ route('Index') }}" class="centermenu"><img src="pictures/logoblack.svg"
                                alt="" /></a>
                    </li>
                    <li><a href="{{ route('Retail') }}" class="rightmenu">RETAIL</a></li>
                    <li>
                        <a href="{{ route('createForm') }}" class="rightmenu">CONTACT US</a>
                    </li>
                    <li>
                        <a href="{{ route('Storelocator') }}" class="rightmenu active">STORE LOCATOR</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="secondnav">
            <nav class="navbar navbar-expand-xm navbar-light p-md-3">
                <div class="container">
                    <a class="navbar-brand" class="centermenu" href="{{ route('Index') }}"><img
                            src="pictures/logoblack.svg" width="40%" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav mt-3">
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('about') }}">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Brands') }}">BRANDS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="Maisondeperfums.html">MAISON DE PARFUMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Retail') }}">RETAIL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('createForm') }}">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Storelocator') }}">STORE LOCATOR</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <img src="pictures/store-banner.svg" width="100%" alt="" />


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 storecard">
                <div class="wrapper mt-3 mb-5">
                    <div class="st">
                        <label class="storelabel">
                        <select onchange="store()" id="store" class="form-select form-store" aria-label="Default select example">
                         <option selected value="0">Store</option>


                                <!---   store data   --->
                                @foreach ($storedata as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                                <!---   store data   --->


                            </select>
                        </label>
                    </div>
                    <div class="st">
                        <label class="storelabel-2">
                        <select onchange="storeCity()" id="storeCity" class="form-select form-store" aria-label="Default select example">
                               <option selected value="0">City</option>


                                <!---   city data   --->
                                @foreach ($storecity as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                                <!---   city data   --->


                            </select>
                        </label>
                    </div>
                </div>
                <div class="scroll-container">


                    <!--------- Your Store Data-------->

                    <div class="scroll-page store"></div>

                    <!--------- Your Store Data-------->
                </div>
            </div>

            <!-------------map ifram--------------->
            <div class="col-lg-6">
              <div class="iframe"></div>
            </div>
            

            <!-------------map ifram--------------->

        </div>
    </div>

    <!-- footer -->

  <div class="container-fluid ftoor pb-4 bg-black text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-8 col-sm-6 text-center mt-5">
              <img src="pictures/logobig.svg" width="80%" alt="" />
              <p class="mt-5 afterlogo">
                Vardaan 403 25A, Camac Street <br />
                Kolkata- 700016, India <br />
                ph: +91-33-2287-2358
              </p>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="row text-center">
                <div class="col-lg-12 col-xm-6">
                  <div class="fabev foot-about">
                    <div class="ftheadabout">
                      <span class="foothead">ABOUT US</span>
                    </div>
                    <div class="footdataaa">
                      <a href="{{route('about')}}" class="fbrands">
                        <li>Mission</li>
                      </a>
                      <a href="{{route('about')}}" class="fbrands">
                        <li>vision</li>
                      </a>
                      <a href="{{route('about')}}" class="fbrands">
                        <li>CSR</li>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-xm-6">
                  <div class="fabev">
                    <div class="ftheadevent">
                      <span class="footheadevent">Retail</span>
                    </div>
                    <div class="footdataaa">
                      <a href="{{route('Retail')}}" class="fbrands">
                        <li>MDP</li>
                      </a>
                      <a href="{{route('Retail')}}" class="fbrands">
                        <li>Beauty Luxe</li>
                      </a>
                      <a href="{{route('Retail')}}" class="fbrands"><li>Beauty Scentiments</li></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="row brandmaison">
                <div class="col-lg-12">
                  <div class="ftheadbrands">
                    <span class="foothead">BRANDS</span>
                  </div>
                  <div class="footdataaa">
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Luxury</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Prestige</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Popular</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Fashion</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Lifestyle</li>
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <!-- <div class="ftheadmaison">
                      <span class="footheadmaison">MAISON DE PARFUMS</span>
                      <div class="footdataaa">
                        <a href="#" class="fbrands"><li>Mumbai store</li></a>
                        <a href="#" class="fbrands"><li>delhi store</li></a>
                      </div>
                    </div> -->
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-6 mt-3">

              <div class="text-center mt-3">
                <div class="fabev">
                  <div class="mb-3">
                    <span class="icontext">Follow us: </span>&nbsp;&nbsp;
                    <span>
                      <a href="https://www.instagram.com/beautyconcepts_india/" target="_blank"><img
                          src="/pictures/insta.png" width="12%" alt=""></a>&nbsp;&nbsp;

                      <a href="https://www.facebook.com/BeautyConceptsIndia" target="_blank"><img src="/pictures/fb.png"
                          width="12%" alt=""></a>&nbsp;&nbsp;

                      <a href="https://www.linkedin.com/company/beauty-concepts-pvt.-ltd./" target="_blank"><img
                          src="/pictures/linkedin.png" width="12%" alt=""></a>

                    </span>
                  </div>
                  <img src="pictures/letterbox.png" width="20%" alt="" />
                  <p class="mt-3">Subscribe to our newsletter</p>
                  <input type="email" class="femail" placeholder="Email to...." /><br />
                  <button class="fbtn">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-white text-black">
    <div class="row text-center p-3">
      <div class="col-md-4 wfoot">Copyright 2021</div>
      <div class="col-md-4 wfoot">Rights reserved by beauty concepts</div>
      <div class="col-md-4 wfoot">Powered by roots and stalks digital</div>
    </div>
  </div>
  <script type="text/javascript" src="{{url('js/storelocator.js')}}"></script>
</body>

</html>
