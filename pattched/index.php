<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redlock-web-2.0</title>
    <style>
        body{
            font-size: 24px;
        }
        table,th,td{
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <h1>List of users redlock</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Position</th>
        </thead>
        <tbody>
        <?php
    $mysqli = new mysqli('localhost', 'root','','Redlock');
    $result = $mysqli->query("SELECT * FROM users");

    while($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td>'. $row['ID'].'</td>';
        echo '<td>'. $row['Name'].'</td>';
        echo '<td>'. $row['Alamat'].'</td>';
        echo '<td>'. $row['Jabatan'].'</td>';
        echo '</tr>';
    }
    $num_rows = $result->num_rows;
    echo 'Total numbers of users : '. $num_rows;
    $mysqli->close();
?>
            

        </tbody>
    </table>

</body>
</html>