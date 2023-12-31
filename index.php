<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="shortcut icon" href="#">
    <title>Hotel check</title>
</head>
<body>

    <!-- database array -->
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
    ?>

    <header class="container">
        <form type="GET" class="text-center m-3">
            <label for="park" >Parking space:</label>
            <br/>
            <input type="radio" name="park" id="park_yes" value="yes">
            <label for="park_yes" >yes</label>
            <input type="radio" name="park" id="park_no" value="no">
            <label for="park_no" >no</label>
            </br>
            <label for="vote">Vote</label>
            <input type="number" min="1" max="5" name="vote" size="5">
            </br>
            <input type="submit" value="SEARCH">
        </form>
    </header>

    <main class="container">
        <!-- tabella con elenco di hotel -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance from center</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    

                    $parking = $_GET["park"];

                    $evaluation = 0;

                    if ($_GET["vote"] != '') {

                        $evaluation = $_GET["vote"];

                    }

                    foreach ($hotels as $hotel) {

                        echo "<tr>";
                        
                        if (($parking === 'yes' && $hotel["parking"]  || $parking === "no" && !$hotel["parking"]  || $parking === null) && $evaluation <= $hotel["vote"]) {
                            
                            // componente
                            include "./tableRow.component.php";

                        } 
                        
                        echo "</tr>";
                        
                    }
                ?>
            </tbody>
        </table>
    </main>

</body>
</html>