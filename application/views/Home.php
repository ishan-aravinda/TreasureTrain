<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body {
                background-image: url("../Images/bg.png ");
                background-repeat: no-repeat;
                background-size: cover;
            }

            .ui-page {
                background: transparent;
            }

            .ui-content {
                background: transparent;
            }

            .body-text {
                color: white;
                font-size: 25px;
            }

            .button {
                background-color: #4CAF50;
                /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }

            .card {
                /* Add shadows to create the "card" effect */
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                transition: 0.3s;
                margin: 25px;
                width: 20%;
                align-items: center;
            }

            /* On mouse-over, add a deeper shadow */
            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            }

            /* Add some padding inside the card container */
            .container {
                padding: 2px 16px;
            }

            .poi_img {
                width: 75%;
            }

            /* Stars */
            .checked {
                color: orange;
            }

            * {
                margin: 0;
                padding: 0;
            }

            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }

            .rate:not(:checked)>input {
                position: absolute;
                top: -9999px;
            }

            .rate:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ccc;
            }

            .rate:not(:checked)>label:before {
                content: '★ ';
            }

            .rate>input:checked~label {
                color: #ffc700;
            }

            .rate:not(:checked)>label:hover,
            .rate:not(:checked)>label:hover~label {
                color: #deb217;
            }

            .rate>input:checked+label:hover,
            .rate>input:checked+label:hover~label,
            .rate>input:checked~label:hover,
            .rate>input:checked~label:hover~label,
            .rate>label:hover~input:checked~label {
                color: #c59b08;
            }

            /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
        </style>

    </head>

    <body>

        <div data-role="page" id="index">
            <div data-role="header">

                <img src="../Images/logo.png" alt="Treasure Train Logo" width="200" height="200">

                <div data-demo-html="true">

                    <div data-role="navbar" data-grid="c">
                        <ul>
                            <li><a href="#" class="ui-btn-active">Home</a></li>
                            <li><a href="#">Book Tickets</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#map">Play Game</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div>
                <!--/demo-html -->
            </div>


            <div data-role="content" align="center">

                <video width="100%" height="500" controls>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>

                <button class="body-text" type="button" data-theme="e">Play</button>


                <div align="center" style="display: inline-block;">

                    <div align="center" style="display:inline-flex; ">

                        <div class="card">
                            <a href="#location">
                                <img src="../Locations/Coco-Cola london-eye.jpg" alt="location" class="poi_img">
                                <div class="container">
                                    <h4><b>Location 1</b></h4>

                                </div>
                            </a>
                        </div>

                        <div class="card">
                            <img src="../Locations/Coco-Cola london-eye.jpg" alt="location" class="poi_img">
                            <div class="container">
                                <h4><b>Location 2</b></h4>

                            </div>
                        </div>

                        <div class="card">
                            <img src="../Locations/Coco-Cola london-eye.jpg" alt="location" class="poi_img">
                            <div class="container">
                                <h4><b>Location 3</b></h4>
                            </div>
                        </div>
                    </div>

                    <div align="center" style="display:inline-flex">

                        <div class="card">
                            <img src="../Locations/Coco-Cola london-eye.jpg" alt="location" class="poi_img">
                            <div class="container">
                                <h4><b>Location 4</b></h4>
                            </div>
                        </div>

                        <div class="card">
                            <img src="../Locations/Coco-Cola london-eye.jpg" alt="location" class="poi_img">
                            <div class="container">
                                <h4><b>Location 5</b></h4>
                            </div>
                        </div>

                        <div class="card">
                            <img src="../Locations/Coco-Cola london-eye.jpg" alt="location" class="poi_img">
                            <div class="container">
                                <h4><b>Location 6</b></h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>




            <div data-role="footer" data-position="fixed">

                <!-- Footer -->
                <footer class="page-footer font-small stylish-color-dark pt-4">

                    <!-- Footer Links -->
                    <div class="container text-center text-md-left">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-4 mx-auto">

                                <!-- Content -->
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
                                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                                    amet,
                                    consectetur
                                    adipisicing elit.</p>

                            </div>
                            <!-- Grid column -->

                            <hr class="clearfix w-100 d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-2 mx-auto">

                                <!-- Links -->
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 4</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                            <hr class="clearfix w-100 d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-2 mx-auto">

                                <!-- Links -->
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 4</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                            <hr class="clearfix w-100 d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-2 mx-auto">

                                <!-- Links -->
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 4</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Footer Links -->


                    <!-- Social buttons -->
                    <ul class="list-unstyled list-inline text-center">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-fb mx-1">
                                <i class="fab fa-facebook-f"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-tw mx-1">
                                <i class="fab fa-twitter"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-gplus mx-1">
                                <i class="fab fa-google-plus-g"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-li mx-1">
                                <i class="fab fa-linkedin-in"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-dribbble mx-1">
                                <i class="fab fa-dribbble"> </i>
                            </a>
                        </li>
                    </ul>
                    <!-- Social buttons -->

                </footer>
                <!-- Footer -->
            </div>
        </div>


        <!-- Page 2 -->

        <div data-role="page" id="location">

            <div data-role="header">

                <nav class="navbar">

                    <img src="../Images/logo.png" alt="Treasure Train Logo" width="200" height="200">
                    <div data-grid="c">
                        <ul>
                            <li><a href="#index" class="ui-btn-active">Home</a></li>
                            <li><a href="#">Book Tickets</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Play Game</a></li>
                        </ul>
                    </div>
                </nav>

<!--              <img src="../Images/logo.png" alt="Treasure Train Logo" width="200" height="200">

          <div data-demo-html="true">

                <div data-role="navbar" data-grid="c">
                    <ul>
                        <li><a href="#index" class="ui-btn-active">Home</a></li>
                        <li><a href="#">Book Tickets</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Play Game</a></li>
                    </ul>
                </div> /navbar 
            </div>-->
                <!--/demo-html -->

            </div>

            <div data-role="content" align="center">

                <div class="row">
                    <div class="col-sm">
                        <img src="<?php echo $DisplayPhoto ?>" alt="Logo" style="width:200px;height:128px;">
                        <?php echo $Name ?>    
                    </div>
                </div>

                <h3 class="body-text">Location 1</h3>

                <img src="../Locations/Coco-Cola london-eye.jpg" alt="Coco-Cola london-eye" width="500" height="300">

                <br>

                <!-- Rating Starts -->

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>

                <p class="body-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                    fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
                    vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                    elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                    vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus
                    viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.
                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>

                <button type="button" class="play_button">Book Tickets</button>
                <button type="button" class="play_button">Play Now</button>

                <br>
                <br>

                <h3>Reviews</h3>

                <p class="body-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                    fringilla vel, aliquet nec, vulputate eget, arcu.</p>

                <div align="right">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>

                <hr>

                <p class="body-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                    fringilla vel, aliquet nec, vulputate eget, arcu.</p>

                <div align="right">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>

                <hr>

                <p class="body-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                    fringilla vel, aliquet nec, vulputate eget, arcu.</p>

                <div align="right">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>

                <hr>

                <h3 class="body-text">Leave a Review</h3>

                <!-- <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div> -->

                <textarea rows="6" cols="70" placeholder="Leave a review"></textarea>

            </div>

            <div data-role="footer">

                <!-- Footer -->
                <footer class="page-footer font-small stylish-color-dark pt-4">

                    <!-- Footer Links -->
                    <div class="container text-center text-md-left">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-4 mx-auto">

                                <!-- Content -->
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
                                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                                    amet,
                                    consectetur
                                    adipisicing elit.</p>

                            </div>
                            <!-- Grid column -->

                            <hr class="clearfix w-100 d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-2 mx-auto">

                                <!-- Links -->
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 4</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                            <hr class="clearfix w-100 d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-2 mx-auto">

                                <!-- Links -->
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 4</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                            <hr class="clearfix w-100 d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-2 mx-auto">

                                <!-- Links -->
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!">Link 4</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Footer Links -->


                    <!-- Social buttons -->
                    <ul class="list-unstyled list-inline text-center">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-fb mx-1">
                                <i class="fab fa-facebook-f"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-tw mx-1">
                                <i class="fab fa-twitter"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-gplus mx-1">
                                <i class="fab fa-google-plus-g"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-li mx-1">
                                <i class="fab fa-linkedin-in"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-dribbble mx-1">
                                <i class="fab fa-dribbble"> </i>
                            </a>
                        </li>
                    </ul>
                    <!-- Social buttons -->

                </footer>
                <!-- Footer -->
            </div>

        </div>

        <!-- Page  3 MAP -->

        <div data-role="page" id="map">


            <div data-role="header">

                <img src="./images/logo.png" alt="Treasure Train Logo" width="200" height="200">

                <div data-demo-html="true">

                    <div data-role="navbar" data-grid="c">
                        <ul>
                            <li><a href="#" class="ui-btn-active">Home</a></li>
                            <li><a href="#">Book Tickets</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#map">Play Game</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div>
                <!--/demo-html -->
            </div>

            <div data-role="content">

                <div id="map"></div>
                <script>
                    var map;

                    var customLabel = {
                        restaurant: {
                            label: 'R'
                        },
                        bar: {
                            label: 'B'
                        }
                    };

                    function downloadUrl(url, callback) {
                        var request = window.ActiveXObject ?
                                new ActiveXObject('Microsoft.XMLHTTP') :
                                new XMLHttpRequest;

                        request.onreadystatechange = function () {
                            if (request.readyState == 4) {
                                request.onreadystatechange = doNothing;
                                callback(request, request.status);
                            }
                        };

                        request.open('GET', url, true);
                        request.send(null);
                    }

                    downloadUrl('C:\xampp\htdocs\treasuretrain\application\markers.php', function(data) {
                    var xml = data.responseXML;
                            var markers = xml.documentElement.getElementsByTagName('marker');
                            Array.prototype.forEach.call(markers, function(markerElem) {
                            var id = markerElem.getAttribute('LID');
                                    var name = markerElem.getAttribute('Name');
                                    var address = markerElem.getAttribute('Address');
                                    var point = new google.maps.LatLng(
                                            parseFloat(markerElem.getAttribute('Lat')),
                                            parseFloat(markerElem.getAttribute('Lng')));
                                    var infowincontent = document.createElement('div');
                                    var strong = document.createElement('strong');
                                    strong.textContent = name
                                    infowincontent.appendChild(strong);
                                    infowincontent.appendChild(document.createElement('br'));
                                    var text = document.createElement('text');
                                    text.textContent = address
                                    infowincontent.appendChild(text);
                                    var icon = customLabel[type] || {};
                                    var marker = new google.maps.Marker({
                                    map: map,
                                            position: point,
                                            label: icon.label
                                    });
                                    function initMap() {
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                    center: new google.maps.LatLng(51.5074, 0.1278),
                                            zoom: 12
                                    });
                                            var infoWindow = new google.maps.InfoWindow;
                                            // Change this depending on the name of your PHP or XML file
                                            downloadUrl('E:\UIUX\CW\Implementation\markers.php', function (data) {
                                            var xml = data.responseXML;
                                                    var markers = xml.documentElement.getElementsByTagName('marker');
                                                    Array.prototype.forEach.call(markers, function (markerElem) {
                                                    var id = markerElem.getAttribute('LID');
                                                            var name = markerElem.getAttribute('Name');
                                                            var address = markerElem.getAttribute('Address');
                                                            var point = new google.maps.LatLng(
                                                                    parseFloat(markerElem.getAttribute('Lat')),
                                                                    parseFloat(markerElem.getAttribute('Lng')));
                                                            var infowincontent = document.createElement('div');
                                                            var strong = document.createElement('strong');
                                                            strong.textContent = name
                                                            infowincontent.appendChild(strong);
                                                            infowincontent.appendChild(document.createElement('br'));
                                                            var text = document.createElement('text');
                                                            text.textContent = address
                                                            infowincontent.appendChild(text);
                                                            var icon = customLabel[type] || {};
                                                            var marker = new google.maps.Marker({
                                                            map: map,
                                                                    position: point,
                                                                    label: icon.label
                                                            });
                                                            marker.addListener('click', function () {
                                                            infoWindow.setContent(infowincontent);
                                                                    infoWindow.open(map, marker);
                                                            });
                                                    });
                                            });
                                    }



                            function downloadUrl(url, callback) {
                            var request = window.ActiveXObject ?
                                    new ActiveXObject('Microsoft.XMLHTTP') :
                                    new XMLHttpRequest;
                                    request.onreadystatechange = function () {
                                    if (request.readyState == 4) {
                                    request.onreadystatechange = doNothing;
                                            callback(request, request.status);
                                    }
                                    };
                                    request.open('GET', url, true);
                                    request.send(null);
                            }

                            function doNothing() { }
                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVIISj0N44ABEfP1SP_BREeYmSOU_5kT0 &callback=initMap"
                async defer></script>

            </div>
            <div data-role="footer"></div>


        </div>

    </body>


</html>

