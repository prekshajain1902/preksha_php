<!-- How can you declare the array (all type) in PHP? Explain with example
Covert a JSON string to array -->

<?php
echo $str='{
        name : "preksha",
        
            id: "12",
            address: {
                ghodasar
            }
            
        
    }';
    $json = json_decode($str, true);
    ?>