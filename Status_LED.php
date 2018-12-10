<!DOCTYPE html>
<html>
    <body>
        <h1>This page truns on/off an LED</h1>

        <?php
        $led = htmlspecialchars($_POST["led"]); 
        if ($led=="on")
            `sudo python LED_On`;
        else if($led=="off")
            `sudo python LED_Off`;
        ?>
    <body>
