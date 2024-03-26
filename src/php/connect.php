<?php 

    $email = $_POST["email"];

    $f_open = fopen("suscribers.csv", "a");
    $subscribe_data = [$email, "\n"];

    fputcsv($f_open, $subscribe_data);

    fclose($f_open);

?>