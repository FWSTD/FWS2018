<!DOCTYPE html>
<html>
    <body>
        <h1>My First Heading</h1>
        <p>My first paragraph.</p>

        <?php
        $output = `ls -lart`;
        echo "<div>$output</div>";
        ?>
    </body>
</html>