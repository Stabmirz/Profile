<?php include 'partials/header.php';?>

<div class="card text-center">
    <div class="p-3 mb-2 bg-light text-dark">
        <h5>Name:</h5> <?php echo $_POST['name']; ?><br>
    </div>
</div>
<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// display image
$image = $_FILES["upload"]["name"];
$tempname = $_FILES["upload"]["tmp_name"];
$img = "images/".$image;

?>
<div class="card text-center">
    <div class="p-3 mb-2 bg-light text-dark">
        <img src="<?php echo $img; ?>" width="200" style="border-radius: 50%;"/>
    </div>
</div>
<div class="card text-center">
    <div class="p-3 mb-2 bg-light text-dark">
        <h5>Date of birth: </h5><?php echo $_POST['date']; ?><br>
    </div>
</div>

<div class="card text-center">
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
</div>

<div class="card text-center">
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
</div>

<div class="card text-center">
    <div class="p-3 mb-2 bg-light text-dark">
        <h5>Biography:</h5> <?php echo $_POST['biography']; ?><br>
    </div>
</div>

<div class="card text-center">
    <div class="p-3 mb-2 bg-light text-dark">
        <h5>Interest :</h5> <?php  foreach ($_POST['subject'] as $subject) print "<li class='li'>$subject</li><br/>"; ?><br>
    </div>
</div>
<?php include 'partials/footer.php';?>