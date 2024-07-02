<?php
if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Save the latitude and longitude to a database or a file
    // ...

    // Display the location on a map
    echo "<script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: $latitude, lng: $longitude},
                zoom: 15
            });

            var marker = new google.maps.Marker({
                position: {lat: $latitude, lng: $longitude},
                map: map
            });
        }
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Track Mobile Location</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuraYByCJr56XJsxhArl34zoO656X6sNQ&callback=initMap" async defer></script>
</head>
<body>
    <form action="location.php" method="post">
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">
        <button type="submit">Submit Location</button>
    </form>
    <div id="map" style="width: 100%; height: 400px;"></div>

    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            document.getElementById("latitude").value = position.coords.latitude;
            document.getElementById("longitude").value = position.coords.longitude;
        }

        getLocation();
    </script>
</body>
</html>