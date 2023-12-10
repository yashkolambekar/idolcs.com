<?php

    include "../php/db.php";

    $query = "SELECT * FROM `progress` WHERE `id` = 0";
    $result = mysqli_query($db, $query);

    if($result){
        $row = mysqli_fetch_assoc($result);
        echo $row["data"];
    }


?>