<!DOCTYPE html>
<html>
    <body>
        <h1>This page turns on/off an LED</h1>

        <?php
        $led = htmlspecialchars($_POST["led"]); 
        if ($led=="on")
            `python LED_On`;
        else if($led=="off")
            `python LED_Off`;
        ?>
    <body>
