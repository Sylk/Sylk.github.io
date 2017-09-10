<?php
        // $url = "http://api.openweathermap.org/data/2.5/weather?lat=42.50835&lon=-89.031776&appid=5a8d83768b4febb6e05eac3cfdd8508e";
        // $weather_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='. $_GET['location'];
        session_set_cookie_params(10,"/");
        session_start();


        if(!empty ($_GET['location'])){
            $weather_url = 'http://api.openweathermap.org/data/2.5/weather?q=' . urlencode($_GET['location']) . 't&appid=5a8d83768b4febb6e05eac3cfdd8508e';

            $weather_json = file_get_contents($weather_url);
            $weather_array = json_decode($weather_json, true);

            $description = $weather_array['weather'][0]['description'];
            $wind = $weather_array['wind']['speed'];
            $kelvin = $weather_array['main']['temp'];
            $humidity = round($weather_array['main']['humidity']);

            $temperature = round($kelvin*9/5-459.67);


            // SET ALL SESSIONS
            $_SESSION["wind"] = $wind;
            $_SESSION["humidity"] = $humidity;
            $_SESSION["temperature"] = $temperature;
        };

    ?>
<!DOCTYPE html>
<html>

<head>
    <div class="container">
        <title>Openweather Api</title>

        <!-- RESET IMPORT -->
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/base-min.css">

        <!-- FONT AWESOME IMPORTS -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- GOOGLE FONTS IMPORT -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Rubik" rel="stylesheet">

        <!-- IMPORTING VIEWPORT -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- PURE.CSS IMPORTS -->
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
        <!--<![endif]-->

        <!-- DEFAULT CSS -->
        <link rel="stylesheet" href="css/compiled.css" />

        <!-- CONTROLLER TO CHANGE WEATHER VARIABLES -->
        <!-- <script src="js/weather-controller.js"></script> -->
</head>

<body onload="checkForSessions">
    <div class="container">
        <!-- take the description and match it with a photo for the background-->
        <!-- <header class="pure-g"> -->

        <!-- <h1 class="openweather-header-h1 pure-u-1-3">OpenWeather API</h1> -->
        <!-- </header> -->

        <section class="openweather-input-container">
            <form class="pure-form pure-form-stacked" action="">
                <div class="pure-control-group">
                    <label for="location">City</label>
                    <input type="text" name="location" class="" placeholder="Atlanta, Houston, etc..." />
                </div>
                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary" onclick="valueSwitch()">Submit</button>
                </div>
            </form>
        </section>

        <!-- <article class="openweather-description-container pure-g">
          <section class="pure-u-1">
            <h1>Clear Sky</h1>
          </section>
        </article> -->

        <article class="openweather-weather-section pure-g">
            <section class="pure-u-md-1-3 pure-u-sm-1">
                <div class="openweather-weather-container">
                    <header class="openweather-weather-header">
                        Temperature
                    </header>
                    <section class="openweather-weather-values" id="openweather-weather-temperature">
                        <?php if(!empty($_SESSION['temperature'])){
                            echo $_SESSION['temperature'] ,' F';
                          }
                          else{
                            echo "Not Set";
                          }
                         ?>
                    </section>
                </div>
            </section>
            <section class="pure-u-md-1-3 pure-u-sm-1">
                <div class="openweather-weather-container">
                    <header class="openweather-weather-header">
                        Humidity
                    </header>
                    <section class="openweather-weather-values" id="openweather-weather-humidity">
                      <?php
                        if(!empty($_SESSION['humidity'])){
                          echo $_SESSION['humidity'];
                        }
                        else{
                          echo "Not Set";
                        }
                       ?>
                    </section>
                </div>
            </section>
            <section class="pure-u-md-1-3 pure-u-sm-1">
                <div class="openweather-weather-container">
                    <header class="openweather-weather-header">
                        Wind
                    </header>
                    <section class="openweather-weather-values" id="openweather-weather-wind">
                      <?php
                        if(!empty($_SESSION['wind'])){
                          echo $_SESSION['wind'];
                        }
                        else{
                          echo "Not Set";
                        }
                       ?>
                    </section>
                </div>
            </section>





            <!-- <span id="openweather-weather-temperature" class="openweather-weather-temperature">?</span> -->
            <!-- temperature -->
            <!-- humidity -->
            <!-- wind -->
            <!-- rain - yes or no -->
        </article>
    </div>
</body>

</html>
