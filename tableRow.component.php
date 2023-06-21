<?php
    echo "<th>" . $hotel["name"] . "</th>";
                        
    echo "<td>" . $hotel["description"] . "</td>";

    echo "<td>" . ($hotel["parking"] ? "si" : "no") . "</td>";

    echo "<td>" . $hotel["vote"] . "</td>";

    echo "<td>" . $hotel["distance_to_center"] . "</td>";
?>