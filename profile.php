<?php include 'partials/header.php';?>


 <div class="p-3 mb-2 bg-light text-dark">
<h5>Name:</h5> <?php echo $_POST['name']; ?><br>
</div>
<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// display image
$image = $_FILES["fileToUpload"]["name"]; 
$tempname = $_FILES["fileToUpload"]["tmp_name"];
$img = "images/".$image;

?>
<img src="<?php echo $img; ?>" width="200" style="border-radius: 50%;"/>

<div class="p-3 mb-2 bg-light text-dark">
<h5>Date of birth: </h5><?php echo $_POST['date']; ?><br>
</div>

<div class="p-3 mb-2 bg-light text-dark">
<h5>Age:</h5>
    <?php
    function birthday($birthday) {
    $age = date_create($birthday)->diff(date_create('today'))->y;
    return $age;
    }
    echo birthday($_POST['date']);
    ?>
</div>

<div class="p-3 mb-2 bg-light text-dark">
<?php
   $date = $_POST['date'];
   $name = $_POST['name'];
   $dob = date('d-m',strtotime($date));
   $today = date('d-m');
   if($dob == $today)
   {
      echo "<p style='color:red;'>Happy Birthday!</p>\n";
   } else
   {
      echo "";
   }
?>
</div>

<div class="p-3 mb-2 bg-light text-dark">
<h5>Biography:</h5> <?php echo $_POST['biography']; ?><br>
</div>

<div class="p-3 mb-2 bg-light text-dark">
<h5>Interest :</h5> <?php  foreach ($_POST['subject'] as $subject) print "<li class='li'>$subject</li><br/>"; ?><br>
</div>
<?php include 'partials/footer.php';?>