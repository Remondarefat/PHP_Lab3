<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include('students.php');
    ?>
    <table class="m-3 w-50  border border-2 ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
            <?php
            foreach($students as $student) {
                echo "<tr>"; 
                    echo "<td>" .$student['name']."</td>";
                    echo "<td>".$student['email']. "</td>";
                    echo "<td>".$student['status']. "</td>";
                echo "</tr>";

            
            }
            ?>
        </thead>
        <tbody>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/js/bootstrap.min.js">
            
        </tbody>
    </table>
</body>
</html>