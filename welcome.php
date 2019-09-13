<link rel="stylesheet" href="style.css" type="text/css">

<?php session_start(); ?>
<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
<span class="user"><img src='<?= $_SESSION['avatar'] ?>' </span> </br> welcome <span class=" user"><?= $_SESSION['username'] ?></span>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'accounts');
$sql = 'SELECT username, avatar FROM users';
$result = $mysqli->query($sql);
?>

<div id="registered">
    <span>all registered users</span>
    <?php while ($row = $result->fetch_assoc()) {
        // echo '<pre>';
        // print_r($row);
        // echo '</pre>';
        while ($row = $result->fetch_assoc()) {
            echo "<div class='userlist'><span>$row[username]</span></div>";
            echo "<div class='userlist'><span>$row[avatar]</span></div>";
        }
    } ?>
</div>