<?php
print '<form method="get">
 <input name="q" placeholder="Enter Text">
 <br/>
 <input type="submit" value="Go">
</form>';
$queryText = isset($_GET['q']) ? $_GET['q'] : '';
$queryTextStripped = strip_tags($queryText);
print "<pre>" . $queryTextStripped . "</pre>";
?>