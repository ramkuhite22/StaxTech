<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Weather App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Simple Weather App</h1>
    <form method="GET">
        <input type="text" name="location" placeholder="Enter location" required>
        <button type="submit">Get Weather</button>
    </form>

    <?php
    if (isset($_GET['location'])) {
        $location = htmlspecialchars($_GET['location']);
        $apiKey = '3e23d0cb7d6347c9b0105758250504';
        $apiUrl = "http://api.weatherapi.com/v1/current.json?key=$apiKey&q=" . urlencode($location) . "&aqi=yes";

        $response = file_get_contents($apiUrl);

        if ($response !== false) {
            $data = json_decode($response, true);

            if (isset($data['location'])) {
                echo "<div class='weather-box'>";
                echo "<h2>" . $data['location']['name'] . ", " . $data['location']['country'] . "</h2>";
                echo "<p><strong>Temperature:</strong> " . $data['current']['temp_c'] . "°C</p>";
                echo "<p><strong>Condition:</strong> " . $data['current']['condition']['text'] . "</p>";
                echo "<p><strong>Humidity:</strong> " . $data['current']['humidity'] . "%</p>";
                echo "<p><strong>Wind Speed:</strong> " . $data['current']['wind_kph'] . " km/h</p>";
                echo "<p><strong>AQI (PM2.5):</strong> " . $data['current']['air_quality']['pm2_5'] . "</p>";
                echo "</div>";
            } else {
                echo "<p class='error'>Weather data not found for this location.</p>";
            }
        } else {
            echo "<p class='error'>Failed to fetch weather data.</p>";
        }
    }
    ?>
</div>
</body>
</html>
