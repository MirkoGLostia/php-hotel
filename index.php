<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/general.css">
    <title>Hotel check</title>
</head>
<body>

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

    <header>
        <!-- search bar -->
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
                    foreach ($hotels as $hotel) {
                        echo "<tr>";

                        echo "<th>" . $hotel["name"] . "</th>";
                
                        echo "<td>" . $hotel["description"] . "</td>";
                        
                        if ($hotel["parking"]) {

                            echo "<td> si </td>";
                    
                        } 
                        else {
                    
                            echo "<td> no </td>";
                    
                        };
                
                        echo "<td>" . $hotel["vote"] . "</td>";
                
                        echo "<td>" . $hotel["distance_to_center"] . "</td>";

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>

    <?php

    

    ?>

</body>
</html>