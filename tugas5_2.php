<?php

    $ayo = "Ayo";
    $belajar = "Belajar";
    $bersama = "Bersama";
    $niomic = "Niomic";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, th,td {
            border:1px solid #000;
        }
    </style>
</head>
<body>
    <h1>Operator String</h1>
    <table>
        <thead>
            <tr>
                <th>Input 1</th>
                <th>Input 2</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo($ayo) ?></td>
                <td><?php echo($belajar) ?></td>
                <td><?php echo($ayo . " " . $belajar)?></td>
            </tr>
            <tr>
                <td><?php echo($bersama) ?></td>
                <td><?php echo($niomic) ?></td>
                <td><?php echo($bersama . " " . $niomic)?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>