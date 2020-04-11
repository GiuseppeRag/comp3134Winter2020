<?php
$server = "localhost";
$user = "newuser";
$password = "password";
$db = 'mySchema';
$results;

$link = mysqli_connect($server, $user, $password, $db);
if (mysqli_connect_error()) {
        die('Connection Failed: ' . mysqli_connect_error());
}
if (isset($_GET['searchTerm'])){
        $term = $_GET['searchTerm'];
        $query = "SELECT * FROM users WHERE firstname='$term' AND active=1";
        $results = $link->query($query);
}
else {
        $results = $link->query('SELECT * FROM users WHERE active=1;');
}
?>
<form method="get">
        <input type="text" name="searchTerm" />
        <input type="submit" />
</form>
<table>
        <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Email</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Active</td>
        </tr>
        <?php
        while ($row = mysqli_fetch_row($results)){
                echo "<tr>
                        <td>" . $row[0] . "</td>
                        <td>" . $row[1] . "</td>
                        <td>" . $row[2] . "</td>
                        <td>" . $row[3] . "</td>
                        <td>" . $row[4] . "</td>
                        <td>" . $row[5] . "</td>
                        </tr>";
        }
        mysqli_free_result($results);
        mysqli_close($link);
?>
</table>