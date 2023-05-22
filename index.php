<?php
      
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <!-- link Bootstrap -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
    </head>
    <body>
        <!-- title -->
        <div class="vh-10 p-3">
            <h1 class="text-center text-capitalize">
                php hotel
            </h1>
        </div>
        <main class="vh-90 p-3 d-flex justify-content-center align-items-center">
            <div class="container">
                <!-- form  -->
                <form action="results.php" method="GET" class="row gx-3 gy-2 justify-content-center align-items-center">
                    <div class="col-sm-3">
                        <label class="visually-hidden">ParkingChoice</label>
                         <select class="form-select" name="parkingChoice">
                            <option value="" selected="">Parking</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                      <label class="visually-hidden">Preference</label>
                      <select class="form-select" name="starsChoice">
                        <option value="" selected="">Stars</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </main>
        <!-- script Bootstrap -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe' crossorigin='anonymous'></script>

        <!-- my css  -->
        <style>
            .vh-10{
                height: 10vh;
            }
            .vh-90{
                height: 90vh;
            }
        </style>
    </body>
</html>


