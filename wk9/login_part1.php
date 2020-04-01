<?php
$password = isset($_POST['password']) ? $_POST['password'] : '';
$common_passwords = array('123456', '123456789', 'qwerty', 'password', '111111', '12345678', 'abc123', '1234567', 'password1', '12345');
if (in_array($password, $common_passwords)){
        print('<p>Successfully Authenticated</p>');
}
else {
print("<h1>Weak Password</h1>
<form method='post'>
 <label>Password</label>
 <input type='password' name='password'>
 <br/>
 <input type='submit'>
 </form>");
}
?>