<?php
$emailError = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_REQUEST['email'];
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (empty($_REQUEST['email'])) {
        $emailError = "* Email Required";
    }
//     elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $emailError = "* Invalid Email Format";
//    }
    elseif (!preg_match($pattern,$email)){
        $emailError = "* Invalid Email Format";

    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="email" placeholder="Vui long nhap email">
    <p style="color: red"><?php echo $emailError; ?></p>
    <button>Check</button>
</form>

</body>
</html>


