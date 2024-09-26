<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('rooms') }}">Rooms &amp; Amenities</a></li>
                <li><a href="{{ route('reservation') }}">Booking</a></li>
                <li><a href="{{ route('admin') }}">Admin</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.facebook.com"><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a></li>
                <li><a href="http://www.twitter.com"><img src="{{ asset('images/twitter.png') }}" alt="Twitter"></a></li>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
    <script src="{{ mix('js/app.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slide.js') }}"></script>
</body>
</html>
