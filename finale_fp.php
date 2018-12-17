<!DOCTYPE html>
<html>
    <body>
        <h1>This page turns on/off an LED</h1>

        <?php
        $form1 = htmlspecialchars($_POST["form1"]); 
        if ($form1<8)
            `python LED_On`;
        else if($led=="off")
            `python LED_Off`;
        ?>
    <body>
