<?php 
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "blog_tables";
  // $port = 3307;

  $conn = mysqli_connect("localhost", "root", "", "blog_tables");
  if (!$conn) {
    die ("Connection failed" . mysqli_connect_error());
  }

  define ('ROOT_PATH', realpath(dirname("index.php")));
  define('BASE_URL', 'http://localhost/blogpage/');
?>