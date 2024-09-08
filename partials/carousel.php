<?php 
include_once('functions/lib.php');
// // Database credentials
$dsn = "mysql:host=localhost;dbname=school";
$username = "root";        // Replace with your MySQL username
$password = "";            // Replace with your MySQL password

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
     
//      if ($results) {
//          // Output data of each row
//          foreach ($results as $row) {
//              echo "ID: " . $row["id"] . " - Title: " . $row["title"] . " - Content: " . $row["content"] . "<br>";
//          }
//      } else {
//          echo "0 results";
//      }
     
//  } catch (PDOException $e) {
//      echo "Error: " . $e->getMessage();
//  }
 


// $pathOfslides5= "img/pic1.jpg";
// $pathOfslides2 = "img/pic2.jpg";
// $pathOfslides3 = "img/pic3.jpg";
// $pathOfslides4 = "img/pic1.jpg";
// $pathOfslides1 = "img/pic4.jpg";

// $slides =[
//   ['path'=>'https://images.pexels.com/photos/326055/pexels-photo-326055.jpeg?auto=compress&cs=tinysrgb&w=600',
//   'description'=>"Image 1."],

//   ['path'=>"img/pic2.jpg",'description'=>"Image 2."],

//   ['path'=>'img/pic2.jpg','description'=>'Image 3'],
// ];
 

// foreach($slides as $key => $slide){
//  echo $slide;
//   echo "<hr />";
//}
 ?>


<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
  <?php 
  foreach($slides as $key => $slide){ ?>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $key ?>" class="active" aria-current="true" aria-label="Slide 1"></button>
    <?php } ?>
  </div>
  

   <?php foreach($slides as $key => $slide){ ?>
    <div class="carousel-item <?=($key==0) ? 'active' : '';?>">
      <img src="<?php echo $slide['path']; ?>" class="d-block w-100" height="300" alt="<?php $slide['description']; ?>">
    </div>
    <?php }
  
    ?>


    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

