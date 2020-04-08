<!doctype html>
<?php
        session_start();
        $_SESSION['confirmation'] = "khiheiwji398rujd38";
?>
<html lang="en">
<head>
        <meta charset="utf-8">
</head>
<body>
        <form action="csfr_action.php" method="post" name="myForm" id="myForm">
                <input type="text" name="username" value="host" />
                <input type="password" name="password" value="pass" />
                <input type="hidden" name="confirmation" value="<?php $confirmation ?>" />
        </form>
<script>
        window.onload = function() {
                document.forms['myForm'].submit()
        }
        </script>
</body>
</html>