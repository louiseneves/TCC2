<?php
require 'fbconfig.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Facebook</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    if (isset($loginUrl, $authUrl)) {
        include './login.php';
    } else {
        include './index.php';
    }
    ?>
</body>

</html>

<?php
/*if (isset($login_url)) {
include '../login.php';
} else {
echo '<div class="card-header">
    <div class="card-content">';
        echo '<h4>Bem vindo Usuário,</h4>';
        echo '<h3><img src=' . $_SESSION[' user_pic'] . 'width="150"/></h3' ; echo '<h3><b>Nome :</b>:' . $_SESSION['user_name'] . '</h3>' ; echo '<h3><b>Email :</b>:' . $_SESSION['user_email'] . '</h3>' ; echo '<h3><a href="logout.php">Logout</a></h3>' ; echo '</div></div>' ; } ?>
    </div>
    </body>

    </html>
    */