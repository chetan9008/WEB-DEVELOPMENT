<?php
$error = "";
$weather = "";
if ($_GET) {
    $city = $_GET["city"];
    if ($city == "") {
        $error = "<p>Please enter city</p>";
    } else {
        $file = "https://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=2a96bf902ca0f007d05d20115448512c";
        $file_headers = @get_headers($file);
        if (!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $error = $city . " is not found ";
        } else {
            $file = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=2a96bf902ca0f007d05d20115448512c");
            $weather = json_decode($file, true);
            $image = $weather['weather'][0]['icon'];
            $temp = $weather['main']['temp'] - 273.15;
            $des = $weather['weather'][0]['description'];
            $hum = $weather['main']['humidity'];
            $vis = $weather['visibility'];
            $vis = $vis / 1000;
            $wind = $weather['wind']['speed'];
        } 
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>Weather Scraper</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        body {
            background-image: url(back.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-color: black;
        }

        #margin {
            margin-top: 60px;
        }

        #background {
            margin-top: 120px;
        }

        #weather {
            color: white;
        }

        #underline {
            border-bottom: rgb(255, 193, 7) 3px solid;
        }

        @media (max-width: 700px) {
            body {
                background-size: 1400px;
            }

            #weather {
                margin-top: 50px;
                margin-left: 40px;
            }
        }


        #para1 {
            color: rgb(255, 216, 0);
        }

        #para {
            color: white;
        }

        #error {
            position: relative;
            top: 80px;
            width: 350px;
            height: 60px;
            font-size: 20px;
        }

        #width {
            width: 100px;
            height: 100px;
        }

        #margin-bootom {
            margin-top: -30px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="background">
        <div class="row">
            <div class="col-sm">
                <div class="d-flex justify-content-center">
                    <h1 id="para">What's the Weather</h1>
                </div>

                <div class="d-flex justify-content-center">
                    <p id="para1">Enter the City in World</p>
                </div>

                <form id="form">
                    <div class="d-flex justify-content-center">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Eg. delhi,kanpur,..." name="city">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-warning" value="Search">
                    </div>
                </form>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center">
                    <div id="weather">
                        <?php
                        if ($_GET) {
                            if ($error) {
                                echo '<div class="alert alert-danger" role="alert">
                                ' . $error . '
                              </div>';
                            } else {
                                echo '<h1 id="underline">' . strtoupper($city) . '</h1>';
                                echo '<img id="width" src="http://openweathermap.org/img/w/' . $image . '.png">';
                                echo '<h1>' . (int)($temp) . '&deg;C</h1><br>';
                                echo '<p id="margin-bootom">' . $des . '</p><br>';
                                echo '<span id="margin">Humidity : ' . $hum . '&percnt;</span><br>';
                                echo '<span id="">Pressure : ' . $vis . 'km</span><br>';
                                echo '<span id="">Wind : ' . $wind . 'm/s</span><br>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">

    </script>
</body>

</html>