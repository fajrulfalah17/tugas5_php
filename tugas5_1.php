<?php
    $and1 = (false and false);
    $and2 = (false and true);
    $and3 = (true and false);
    $and4 = (true and true);

    $or1 = (false or false);
    $or2 = (false or true);
    $or3 = (true or false);
    $or4 = (true or true);
    
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
            border:1px solid #000
        }
    </style>
</head>
<body>
    <h1>Table Logika 1111</h1>
    <table>
        <thead>
            <tr>
                <th>Input true</th>
                <th>Input 2</th>
                <th>AND</th>
                <th>OR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>false</td>
                <td>false</td>
                <td><?php echo($and1*1) ?></td>
                <td><?php echo($or1*1) ?></td>
            </tr>
            <tr>
                <td>false</td>
                <td>true</td>
                <td><?php echo($and2*1) ?></td>
                <td><?php echo($or2*1) ?></td>
            </tr>
            <tr>
                <td>true</td>
                <td>false</td>
                <td><?php echo($and3*1) ?></td>
                <td><?php echo($or3*1) ?></td>
            </tr>
            <tr>
                <td>true</td>
                <td>true</td>
                <td><?php echo($and4*1) ?></td>
                <td><?php echo($or4*1) ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>