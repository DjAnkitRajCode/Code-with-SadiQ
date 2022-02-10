<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form in application</title>
</head>
<body>
   
   
   <form action="index.php" method="post">
      <label for="">Amount</label>
      <br>
       <input type="text" name="data">
       
       <input type="submit" name="send">
   </form>
   <?php 
    if(isset($_POST['send'])){
        $data = $_POST['data'];
        $gst = $data*0.18;
        $final = $data + $gst;
    }
    
    
    ?>
   <br>
   <br>
   <hr>
    <label>GST(18%) Amount</label>
    <br>
    <input type="text" value="<?php if(isset($_POST['send'])){echo $gst;} else {echo 0;};?>">
       <br>
        <label>Final Amount</label>

    <br>
    <input type="text" value="<?php if(isset($_POST['send'])){echo $final;} else {echo 0;};?>">
    
    
    
    
</body>
</html>