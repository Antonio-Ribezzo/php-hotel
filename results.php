<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    $parkingChoice = $_GET['parkingChoice'];

    $starsChoice = $_GET['parkingChoice'];


    // variabile copia
    $hotels2 = $hotels;

    if(isset($_GET['parkingChoice'])&& $_GET['parkingChoice'] == 1){

        $hotelWithParking = [];

        foreach($hotels as $el){
            if($el['parking']){
                $hotelWithParking[]= $el;
            }
        }

        $hotels2 = $hotelWithParking;

    } elseif($_GET['parkingChoice'] == 0){

        $hotelWithParking = [];

        foreach($hotels as $el){
            if($el['parking']== false){
                $hotelWithParking[]= $el;
            }
        }
        $hotels2 = $hotelWithParking;
    }

    if(isset($_GET['starsChoice'])&& $_GET['starsChoice'] !== ''){

        $hotelWithStars = [];

        foreach($hotels2 as $el){
            if($el['vote'] >= $_GET['starsChoice']){
                $hotelWithStars[]= $el;
            }
        }

        $hotels2 = $hotelWithStars;
    }                    
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
        <main class="vh-90 p-3 d-flex flex-column justify-content-center align-items-center">

            <!-- tabella -->
            <div class="d-flex justify-content-center align-items-center">
                <table class="table table-striped m-0">
                    <thead>
                      <tr>
                        <?php
                           foreach($hotels2[0] as $chiave => $valore){
                            echo "<th scope='col'>" . $chiave . "</th>";
                           }
                        ?>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($hotels2 as $el){
                                echo "<tr>";
                                foreach($el as $chiave => $valore){
                                    if($chiave == 'name'){
                                        echo  "<th scope='row'>" . $valore . "</th>";
                                    } else{
                                        echo 
                                         "<td scope='row'>" . $valore . "</td>" ;
                                    }
                                }
                                echo  "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
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

