<?php
$conn = mysqli_connect("47.250.12.35", "admin_remote", "12345", "siakad");
$password = '12345';
sha1($password, 256);

$query = "update from User set password = '$password' where username = ''";
mysqli_query($conn,$query);