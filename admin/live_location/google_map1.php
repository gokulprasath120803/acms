<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps API Integration</title>
    <!-- Replace 'YOUR_GOOGLE_MAPS_API_KEY' with your actual API key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuraYByCJr56XJsxhArl34zoO656X6sNQ&libraries=places" defer></script>
    <style>
        /* Set the map container size */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Live Location</h1>

    <!-- Map container -->
    <div id="map"></div>

    <script>
        // Initialize and create the map
        function initMap() {
            // Replace the coordinates with your desired location
            var myLatLng = { lat: 37.7749, lng: -122.4194 };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: myLatLng
            });

            // Create a marker
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Your Location'
            });
        }

        // Load the map after the page has fully loaded
        window.onload = function () {
            initMap();
        };
    </script>
</body>
</html>
