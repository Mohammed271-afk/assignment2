<?php
if (isset($_GET['action']) && $_GET['action'] == 'set') {
    setcookie("user", "Bebish", time() + 3600, "/");
    echo "Cookie set<br>";
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    setcookie("user", "", time() - 3600, "/");
    echo "Cookie deleted<br>";
}

if (isset($_COOKIE["user"])) {
    echo "Cookie value: " . $_COOKIE["user"];
} else {
    echo "Cookie not set";
}
?>

<br><br>
<a href="?action=set">Set Cookie</a><br>
<a href="?action=delete">Delete Cookie</a>
