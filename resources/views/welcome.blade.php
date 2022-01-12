
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Task </title>
    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" />
    <!-- Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
</head>
<body>
@include('layouts.header')
<section class="contain">
    <div class="container">
        <h2 class="head-title"> Display 2.019 Total results for "Tasweq" </h2>
        <h5 class="desc-title">Courses</h5>

        <div class="courses">
            <div class="row">
                <div class="col-3">
                    <ul class="category">
                        <h5 class="result-header">category</h5>

                        <li><a href="#"> digital markteing </a></li>
                        <li><a href="#"> digital markteing </a></li>
                        <li><a href="#"> digital markteing </a></li>
                        <li><a href="#"> digital markteing </a></li>
                        <li><a href="#"> digital markteing </a></li>

                    </ul>

                    <ul class="panding-star">
                        <h5 class="result-header">Courses Panding</h5>

                        <li><input type="radio" name="rate-star">
                            <div class="rate" >
                                <i class="filled fa fa-star"></i>
                                <i class="filled fa fa-star"></i>
                                <i class="filled fa fa-star"></i>
                                <i class="not-filled fa fa-star"></i>
                                <i class="not-filled fa fa-star"></i>
                            </div>
                        </li>

                        <li><input type="radio" name="rate-star">
                            <div class="rate" >
                                <i class="filled fa fa-star"></i>
                                <i class="filled fa fa-star"></i>
                                <i class="filled fa fa-star"></i>
                                <i class="not-filled fa fa-star"></i>
                                <i class="not-filled fa fa-star"></i>
                            </div>
                        </li>

                        <li><input type="radio" name="rate-star">
                            <div class="rate" >
                                <i class="filled fa fa-star"></i>
                                <i class="filled fa fa-star"></i>
                                <i class="filled fa fa-star"></i>
                                <i class="not-filled fa fa-star"></i>
                                <i class="not-filled fa fa-star"></i>
                            </div>
                        </li>


                        <li><input type="radio" name="rate-star">
                            <div class="rate" >
                                <i class="filled fa fa-star"></i>
                                <i class="filled fa fa-star"></i>
                                <i class="filled fa fa-star"></i>
                                <i class="not-filled fa fa-star"></i>
                                <i class="not-filled fa fa-star"></i>
                            </div>
                        </li>

                    </ul>

                    <ul class="level">
                        <h5 class="result-header">level</h5>

                        <li><input type="checkbox" name="level"> beginer </li>
                        <li><input type="checkbox" name="level"> intermidite </li>
                        <li><input type="checkbox" name="level"> Hight </li>

                    </ul>


                    <ul class="time">
                        <h5 class="result-header">Time</h5>

                        <li><input type="checkbox" name="time"> beginer </li>
                        <li><input type="checkbox" name="time"> intermidite </li>
                        <li><input type="checkbox" name="time"> Hight </li>

                    </ul>

                </div>

                <div class="all-courses col-9">
                    <h3 class="all-courses-title">All Courses</h3>
                    <div class="courses-element">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('frontend/img/programming.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="rate" >
                                    <i class="filled fa fa-star"></i>
                                    <i class="filled fa fa-star"></i>
                                    <i class="filled fa fa-star"></i>
                                    <i class="not-filled fa fa-star"></i>
                                    <i class="not-filled fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('frontend/img/programming.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="rate" >
                                    <i class="filled fa fa-star"></i>
                                    <i class="filled fa fa-star"></i>
                                    <i class="filled fa fa-star"></i>
                                    <i class="not-filled fa fa-star"></i>
                                    <i class="not-filled fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('frontend/img/programming.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="rate" >
                                    <i class="filled fa fa-star"></i>
                                    <i class="filled fa fa-star"></i>
                                    <i class="filled fa fa-star"></i>
                                    <i class="not-filled fa fa-star"></i>
                                    <i class="not-filled fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('frontend/img/programming.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="rate" >
                                    <i class="filled fa fa-star"></i>
                                    <i class="filled fa fa-star"></i>
                                    <i class="filled fa fa-star"></i>
                                    <i class="not-filled fa fa-star"></i>
                                    <i class="not-filled fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
