<?php 
include_once('local.config.php');
include_once('src/lib.php');
// // Database credentials
$dsn = "mysql:host=localhost;dbname=school";
$username = "root";        // Replace with your MySQL username
$password = "";            // Replace with   your MySQL password
 
// try {
  
    
//      // Create a PDO instance
     $pdo = new PDO($dsn, $username, $password);
    
//      // Set the PDO error mode to exception
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
//      // SQL query to select all data from the slides table
     $sql = "SELECT * FROM slides";
     
//      // Prepare and execute the query
     $stmt = $pdo->prepare($sql);
     $stmt->execute();
     
//      // Fetch all results
     $slides = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
     $docroot = $_SERVER['DOCUMENT_ROOT']."/school";
     $webroot = "http://school.akash/";
     $public = $webroot . "/public";
     $css = $public . "/css";
     $img = $public . "/img";
 ?>