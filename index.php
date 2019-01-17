<?php include 'partials/header.php';?>

<center><h1>Enter Your Informations</h1></center>
<br><br>
   <form action="profile.php" method="post" enctype="multipart/form-data">
        <h5>Name: </h5><input type="text" name="name" required/>
        <br><br>
        <h5>Date of Birth: </h5><input type="date" name="date" required/>
        <br><br>
        <h5>Short Biography: </h5><textarea name="biography" rows="5" cols="40" required></textarea>
        <br><br>
        <h5>list of interests:</h5>
        <select name = 'subject[]' multiple size = 5 required>
        <option value="Playing">Playing</option>
        <option value="Reading">Reading</option>
        <option value="Watching TV">Watching TV</option>
        <option value="Singing">Singing</option>
        <option value="Coading">Coading</option>
        <option value="Fishing">Fishing</option>
        </select><br><br>
        Upload Image<br><input type="file" name="fileToUpload" required><br><br>
       <input type = "submit" name = "submit" value = Submit>
   </form>
   <br>
   <br>
   <br>
   <?php include 'partials/footer.php';?>