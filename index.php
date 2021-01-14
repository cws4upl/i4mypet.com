<?php

$con = mysqli_connect("localhost", "root", "", "social");

if(mysqli_connect_errno())
{
    echo "Failed to connect: " . mysqli_connect_errno();
}


?>

<html>
<head>
    <title>Welcome to I for my pet</title>
</head>
<body>
My pupy
</body>
</html>