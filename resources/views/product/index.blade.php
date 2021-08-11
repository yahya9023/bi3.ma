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

        <link rel="stylesheet" href="css/style.css">




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
                        <a href="{{asset('/')}}"> <span>bi3</span> .ma </a>
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
                            @auth
                               @if (Auth::user()->product->count() > 0)
                               <li> <a href="{{route('product.index')}}">My Product </a> </li>
                               @endif

                            @endauth
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

    
    <section class="product">
                <div class="row mt-5 container mx-auto">
                    @foreach ($myProduct as $product)
                    <div class="product_item">
                        <div class="product_item_pic">
                            <img src="{{ asset('storage/' . $product->image)}}" alt="">
                            <div class="label new">{{ $product->category->name}}</div>
                            <ul class="product_hover">
                                <li><a href="{{route('product.show',$product->id)}}"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_item_text">
                            <h6>
                                <a href="">{{ $product->name}}</a>
                                <p href="">{{Str::limit( $product->description, 50)}}</p>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="buttons">

                                    <form action="{{route('product.destroy',$product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</a>
                                </form>
                                    <a href="product/{{$product->id}}/edit" class="btn btn-primary">update</a>
                                </div>
                                <div class="product_price"> <span class="price">{{ $product->price}}</span>
                                     <span class="old_price">{{ $product->old_price}}    </span>
                                </div>
                            </h6>
                        </div>
                    </div>
                    @endforeach
                </div>
                

    </section>
</body>
</html>
    
