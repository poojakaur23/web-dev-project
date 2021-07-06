@extends('master')
@section("content")
<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>About Us</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="col-md-4">
                <img src="assets/img/about-hero.svg" alt="About Hero">
            </div>
        </div>
    </div>
</section>
<!-- Close Banner -->

<!-- Start Section -->
<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Our Services</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                <h2 class="h5 mt-4 text-center">Delivery Services</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                <h2 class="h5 mt-4 text-center">Promotion</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>
    <div id="map" style="width:100%;height:400px;"></div>
    <div id="info_div"></div>
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script>
        var myLatLng;
        var latit;
        var longit;
        var map;
        function geoSuccess(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            myLatLng = {
                lat: latitude,
                lng: longitude
            };
            var mapProp = {
                center: new google.maps.LatLng(latitude, longitude), // puts your current location at the centre of the map,
                zoom: 10,
                mapTypeId: 'roadmap',
            };
            var map = new google.maps.Map(document.getElementById("map"), mapProp);
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            //call renderer to display directions
            directionsDisplay.setMap(map);
            var bounds = new google.maps.LatLngBounds();
            //MARKER FOR MY LOCATION
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'My location'
            });
            var infowindow = new google.maps.InfoWindow({
             content:  "My Position",
             maxWidth: 200,
            });
            marker.addListener("click", () => {
            infowindow.open({
                anchor: marker,
                 map,
                shouldFocus: false,
            });
            });
                        
            function markStore(storeInfo){

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: storeInfo.location,
                title: storeInfo.name
            });
            var infowindow = new google.maps.InfoWindow({
                content:  storeInfo.name+'<br>Hours: ' + storeInfo.hours,
                maxWidth: 200,
            });
            //   const marker = new google.maps.Marker({
            //     position: uluru,
            //     map,
            //     title: "Uluru (Ayers Rock)",
            //   });
            marker.addListener("click", () => {
                infowindow.open({
                anchor: marker,
                map,
                shouldFocus: false,
                });
            });
            // show store info when marker is clicked
            // marker.addListener('click', function(){
            //     showStoreInfo(storeInfo);
            // });
            }

            // show store info in text box
            function showStoreInfo(storeInfo){
                var contentString =
                '<div id="content">' +
                '<div id="siteNotice">' +
                '</div>' +
                '<h1 id="firstHeading" class="firstHeading">'+storeInfo.name+'</h1>' +
                '<div id="bodyContent"><br>Hours: ' + storeInfo.hours
                    +
                '</div></div>';
            }
                
            var stores = [
            {
                name: 'Store 1',
                location: {lat: 52.4789619, lng: -2.0342962},
                hours: '8AM to 10PM'
            },
            {
                name: 'Store 2',
                location: {lat: 52.5658054, lng: -2.1627145},
                hours: '8AM to 10PM'
            },
            {
                name: 'Store 3',
                location: {lat: 52.5315881,lng:-2.1137857},
                hours: '8AM to 10PM'
            },
            {
                name: 'Store 4',
                location: {lat:52.557386,lng:-2.0886585},
                hours: '8AM to 10PM'
            },
            {
                name: 'Store 5',
                location: {lat:52.5178077,lng:-2.07352},
                hours: '8AM to 10PM'
            },

            {
                name: 'Store 6',
                location: {lat:52.6422991,lng:-2.1589375},
                hours: '8AM to 10PM'
            }
            ,
            {
                name: 'Store 7',
                location: {lat:52.6422991,lng:-2.1589375},
                hours: '8AM to 10PM'
            }
            ,
            {
                name: 'Store 8',
                location: {lat:52.6770432,lng:-2.4497807},
                hours: '8AM to 10PM'
            }



            ];

            stores.forEach(function(store){
            markStore(store);
            });
                    
        };

        function geoError() {
            alert("Geocoder failed.");
        }
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(geoSuccess, geoError);
                // alert("Geolocation is supported by this browser.");
            } else {
                alert("Geolocation is not supported by this browser.");
        }
}


    </script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVEPGCDv2ks08_VMg_V9ByKfHsERUfln0&callback=getLocation"></script>
  

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->

    @endsection