<?php
if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "host" && $password == "pass") {
                print('<div>Login Success!</div>');
        }
        else {
                print('<div>Login Failure!</div>');
        }
}
else {
        print('<form method="post">
                <p>Username: <input type="text" name="username" placeholder="username" /></p>
                <p>Password: <input type="password" name="password" placeholder="password" /></p>
                <input type="submit">   
        </form>');
}
?>