<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Booking</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
    </head>
    
<body>
    <div class="container">
        <img class="img-responsive" src="{{ asset('images/home_banner.jpg') }}" style="width:100%; height:180px;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('home') }}">Pocetna</a></li>
                    <li><a href="{{ route('rooms') }}">Sobe & Sadrzaj</a></li>
                    <li><a href="{{ route('reservation') }}">Booking</a></li>
                    <li><a href="{{ route('admin') }}">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="{{ asset('images/facebook.png') }}"></a></li>
                    <li><a href="http://www.twitter.com"><img src="{{ asset('images/twitter.png') }}"></a></li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron">
            <div class="w3-content w3-section">
                <img class="mySlides" src="{{ asset('images/home_gallary/1.jpg') }}" style="width:100%; height:450px; display: block;">
                <img class="mySlides" src="{{ asset('images/home_gallary/2.jpg') }}" style="width:100%; height:450px; display: none;">
                <img class="mySlides" src="{{ asset('images/home_gallary/3.jpg') }}" style="width:100%; height:450px; display: none;">
                <img class="mySlides" src="{{ asset('images/home_gallary/4.jpg') }}" style="width:100%; height:450px; display: none;">
                <img class="mySlides" src="{{ asset('images/home_gallary/5.jpg') }}" style="width:100%; height:450px; display: none;">
                <img class="mySlides" src="{{ asset('images/home_gallary/6.jpg') }}" style="width:100%; height:450px; display: none;">
            </div>    
        </div>
        
        <hr>
        <div class="row" style="color: #ed9e21">
            <div class="col-md-12 well">
                <h4><strong style="color: #ffbb2b">About</strong></h4><br>
                <p>Online rezervacije hotela postala su pogodna i popularna metoda putnika da rezervišu hotelske sobe...</p>
            </div>  
        </div>
        <div class="row" style="color: #ffbb2b">
            <div class="col-md-4 wellfix">
                <h4><strong>Contact Us</strong></h4><hr>
                Address: Hotel CALIFORNIA FMI<br>
                Mail: fmioffcial@gmail.com <br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Developed By</strong></h4><hr>
                <a href="#">@Ivan Stanovic</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slide.js') }}"></script>
    
    
</body>
</html>
