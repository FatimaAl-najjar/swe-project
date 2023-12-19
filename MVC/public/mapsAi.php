<!DOCTYPE html>
<html>
<head>
    <title>Interactive Map</title>
    <!-- this line links the google maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnk26kbfjHbZaM8dlOtLSot2J2XOp3wDU&libraries=places"></script>

    <style>
        #map {
            height: 400px;
            width: 30%;
        }
    </style>
        <!-- this is the css styling for the map -->

</head>
<body>
    <h1>Clinic location</h1>
    <h1>Please click on the nearest waypoint to the red pin and then press on view on Google Maps</h1>
<!--this is the heading that tells the user what he should do -->

    <div id="map"></div>
    
    <script>
        let map;
        let marker;
        //here we put the map and the red marker in variables

        let destination = { lat: 30.099610, lng: 31.337670 }; 
        //here we also put the clinic cordinates in the destination variable
        function initMap() {
            //this function is the function that initializes the map
            const initialLocation = { lat: 30.099610, lng: 31.337670 };
            //here we put the clinic cordinates in the initialLocation variable

            map = new google.maps.Map(document.getElementById("map"), {
                //here we create an object from map
                //and we put the initialLocation in the cenetr of the map
                center: initialLocation,
                zoom: 18
                //here we set the zoom of the map to 18
            });

            //here is were we make the movable red marker    
            marker = new google.maps.Marker({
                position: initialLocation,
                map: map,
                title: "Clinic location",
                draggable: true
                //here we set the marker to be movable
            });

            //here we make the map responsive
            //we also set up the actions after clicking on the map so the marker can move 
            //and also we can change the map view from here
            map.addListener("click", function(event) {
                map.setCenter(event.latLng);
                map.setZoom(18);

            });

            marker.addListener("click", function() {
                map.setZoom(18);
                map.setCenter(marker.getPosition());
            });

            document.getElementById("directionsButton").addEventListener("click", function() {
                if (navigator.geolocation) {
                    //here we check wether the geolocation is supported or not
                    navigator.geolocation.getCurrentPosition(
                        //here we check the user's current position
                        function(position) {
                            const userLocation = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };

                            //here we get the directions and we give them to the user to use them
                            directionsService.route(request, function(result, status) {
                                if (status == google.maps.DirectionsStatus.OK) {
                                    directionsDisplay.setDirections(result);
                                }
                            });
                        },
                        function() {
                            //here we ahndle the geolocation error
                            handleLocationError(true);
                        }
                    );
                } else {
                    //and here we handle the lack of support in the geolocation
                    handleLocationError(false);
                }
            });
        }

        function handleLocationError(browserHasGeolocation) {
            //this function handles the geolocation errors
            alert(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.'
            );
        }
    </script>
    <!--finally we load the google maps API and call our initialization function initMap()-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnk26kbfjHbZaM8dlOtLSot2J2XOp3wDU&callback=initMap"></script>
</body>
</html>