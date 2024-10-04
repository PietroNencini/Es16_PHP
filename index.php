<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 16</title>
</head>
<body>
    

    <?php 

        function printTable($rows, $cols) {
            $outputTable = "<table style='border-collapse: collapse; font-size: 24px;'>";
            for($i = 0; $i < $rows; $i++) {
                $outputTable .= "<tr>";
                for($j = 0; $j < $cols; $j++) {
                    $outputTable .= "<th style='padding: 10px; border: black solid 1px;'> ($i;$j) </th>";
                }
                $outputTable .= "</tr>";
            } 
            return $outputTable .= "</table>";
        }

        echo printTable(rand(2,8), rand(2,8));

    ?>

</body>
</html>