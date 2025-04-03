<?php 
$host="localhost";
$username="root";
$password="";
$database="college";
  $conn=new mysqli($host,$username,$password,$database);
  if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
  }

  $sql="SELECT id,name,email,course FROM students";
  $result=$conn->query($sql);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

<h2 style="text-align:center;">Student Details</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
    </tr>

    <?php
    // Check if data exists
    if ($result->num_rows > 0) {
        // Fetch and display data in table rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['course']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No data found</td></tr>";
    }
    $conn->close(); // Close connection
    ?>
</table>

</body>
</html>