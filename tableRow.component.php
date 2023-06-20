<?php
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
?>