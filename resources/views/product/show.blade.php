<!DOCTYPE html>
<html lang="en">
<head>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../css/style.css">





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header_logo">
                        <a href="{{asset('/')}}"> <span>bi3</span>  .ma </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header_menu">
                        <ul>
                            <li class="active"> <a href="{{asset('/')}}">Home</a> </li>
                            <li> <a href="#">Women's</a> </li>
                            <li> <a href="#">Men's</a> </li>
                            <li> <a href="#">Shop</a> </li>
                            <li> <a href="#">Pages</a> </li>
                            <li> <a href="#">Contact Us</a> </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    @if (Route::has('login'))
                    <div class="header_right">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <div class="header_right_aut">
                        
                            <a href="{{ route('login') }}" class="bt_login">Log in</a>
                        
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bt_register">Register</a>
                        @endif
                    @endauth

                           
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header> 


    {{-- #################################################################### --}}
    {{-- #################################################################### --}}
    {{-- #################################################################### --}}
    {{-- #################################################################### --}}

    {{$products->name}}



    <div class="container bootdey">
        <div class="col-md-12">
        <section class="panel">
              
                  <div class="col-md-6">
                      <div class="pro-img-details">
                          <img src="https://via.placeholder.com/550x380/FFB6C1/000000" alt="">
                      </div>
                      <div class="pro-img-list">
                          <a href="#">
                              <img src="https://via.placeholder.com/115x100/87CEFA/000000" alt="">
                          </a>
                          <a href="#">
                              <img src="https://via.placeholder.com/115x100/FF7F50/000000" alt="">
                          </a>
                          <a href="#">
                              <img src="https://via.placeholder.com/115x100/20B2AA/000000" alt="">
                          </a>
                          <a href="#">
                              <img src="https://via.placeholder.com/120x100/20B2AA/000000" alt="">
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <h4 class="pro-d-title">
                          <a href="#" class="">
                              Leopard Shirt Dress
                          </a>
                      </h4>
                      <p>
                          Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally.
                      </p>
                      <div class="product_meta">
                          <span class="posted_in"> <strong>Categories:</strong> <a rel="tag" href="#">Jackets</a>, <a rel="tag" href="#">Men</a>, <a rel="tag" href="#">Shirts</a>, <a rel="tag" href="#">T-shirt</a>.</span>
                          <span class="tagged_as"><strong>Tags:</strong> <a rel="tag" href="#">mens</a>, <a rel="tag" href="#">womens</a>.</span>
                      </div>
                      <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">$544</span>  <span class="pro-price"> $300.00</span></div>
                      <div class="form-group">
                          <label>Quantity</label>
                          <input type="quantiy" placeholder="1" class="form-control quantity">
                      </div>
                      <p>
                          <button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                      </p>
                  </div>
              
          </section>
          </div>
    </div>
    
</body>
</html>









