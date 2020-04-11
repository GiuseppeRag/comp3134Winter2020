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
        $preparedQuery = mysqli_prepare($link, "SELECT * FROM users WHERE firstname=? AND active=1");
        $preparedQuery->bind_param("s", $term);
        $preparedQuery->execute();
        $results = $preparedQuery->get_result();
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
        while ($row = $results->fetch_assoc()){
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["username"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["firstname"] . "</td>
                        <td>" . $row["lastname"] . "</td>
                        <td>" . $row["active"] . "</td>
                        </tr>";
        }
        $preparedQuery->close();
        mysqli_free_result($results);
        mysqli_close($link);
?>
</table>