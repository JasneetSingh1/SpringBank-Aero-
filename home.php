<?php




session_start();

include("connection.php");
include("functions.php");

$user_dat = check_login($con);

        $query = "SELECT * FROM fuel_price1 ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($con, $query);
        $user_data = mysqli_fetch_assoc($result);

        $query1 = "SELECT * FROM fuel_price2 ORDER BY id DESC LIMIT 1";
        $result1 = mysqli_query($con, $query1);
        $user_data1 = mysqli_fetch_assoc($result1);
        
    


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="color: red;">
<?php echo $user_data['value'];?>
</h1>

<h1 style="color: red;">
<?php echo $user_data1['value'];?>
</h1>
<a href="login.php">Login Page</a>
<a href="index.php">Admin Page</a>
</body>
</html>