<?php
// Store Indian Cricket player names in an array
$players = ["Virat Kohli", "Rohit Sharma", "MS Dhoni", "Sachin Tendulkar", "Jasprit Bumrah", "Hardik Pandya", "Ravindra Jadeja"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">List of Indian Cricket Players</h2>

<table>
    <tr>
        <th>Sl. No</th>
        <th>Player Name</th>
    </tr>
    <?php 
    $count=1;
    foreach ($players as $player){
        echo "<tr>
                <td>$count</td>
                <td>$player</td>
                </tr>";
                $count++;
    }

    ?>
</table>

</body>
</html>