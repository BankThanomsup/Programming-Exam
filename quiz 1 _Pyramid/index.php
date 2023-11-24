<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pyramid</title>

</head>

<body>
    <?php
                 echo "<br>" ;
      ?>
        <form method="post" action="index.php">
            <label for="number"> Enter a number : </label>
            <input type="text" id="number" name="number" class ="DocSearch-Button-Placeholder">
            <button typfe="submit" class="btn btn-success">GO</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputnumber = $_POST["number"];

        if (is_numeric($inputnumber)) {
            if ($inputnumber % 2 === 0) {
                generateVerticalPyramid($inputnumber);
            } else {
                generateReversePyramid($inputnumber);
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }

    function generateVerticalPyramid($num)
    {
        echo "<br>";
        for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }

    function generateReversePyramid($num)
    {
        echo "<br>";
        for ($i = $num; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
    
    ?>
</body>

</html>