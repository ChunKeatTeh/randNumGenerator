<html>
    <body>
        <?php
        $numToRoll = $_GET["diceToRoll"];
        $typeOfDice = $_GET["sideOfDice"];

        if ($typeOfDice == "d4") {
            $sideOfDice = 4;
        } elseif ($typeOfDice == "d6") {
            $sideOfDice = 6;
        } elseif ($typeOfDice == "d8") {
            $sideOfDice = 8;
        } elseif ($typeOfDice == "d10") {
            $sideOfDice = 10;
        } elseif ($typeOfDice == "d12") {
            $sideOfDice = 12;
        } elseif ($typeOfDice == "d20") {
            $sideOfDice = 20;
        }
        ?>

        <h2>Results</h2>
        <?php
        $total = 0;

        for ($i = 0; $i < $numToRoll; $i++) {
            $randomNum = rand(min: 1, max: $sideOfDice);
            echo "Roll ". ($i + 1). ": ". $randomNum. "<br>";
            $total += $randomNum;
        }

        echo "<br>". "Total: ". $total;
        ?>
    </body>
</html>