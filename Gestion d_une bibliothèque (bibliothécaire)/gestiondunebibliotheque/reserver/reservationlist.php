
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <?php include "..\js/delrp.php";?>
    <?php
    include_once "..\connexion\connexion.php";
    require_once "..\document/addbook.php";
    include "..\js/file.php";
    include "..\user/header.html";
    
    
    $ref='';
    $id='';
    $drs='';
    $genre='';
    $email='';
   

    ?>

<?php include "../book/navigation.html"?>


  <?php
  if (isset($_SESSION['message'])): ?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
  <?php endif; ?>

 <br><br><br><br> <h1 style="font-size:40px">Reservation list</h1><br>
    <?php
 //pre_r($result);

 if (isset($_GET['preter'])):
   $ref=$_GET['preter'];
   $genre=$_GET['genre'];
   $id=$_GET['user'];
  $sql="select * from reserver where ref=$ref and genre='$genre' and emailsentdate!='NULL' order by emailsentdate";
  $result=mysqli_query($bdd,$sql);

 ?>

<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>reference</th>
        <th >reservation date</th>
        <th>document</th>
        <th>email</th>
        <th>emailSentDate</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
    <?php
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['ref'];?></td>
      <td><?php echo $row['drs'];?></td>
      <td><?php echo $row['genre'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['emailsentdate'];?></td>
      <td>
   <?php $gr= $_GET['genre'];
  $email= $row['email'];
   ?>
      <a class="btn btn-danger" name="deleterp" value="deleterp"  onClick="crnrp(<?php echo $row['id']; ?> ,<?php echo $row['idreservation'];?>,<?php echo $row['ref'];?>,<?php echo "'$gr'";?>,<?php echo "'$email'";?>)" style="color:white"> cancel reservation </a>
      </td>

    </tr>
    <?php endwhile; ?>
  </table>
</div>
<br><br>
    <?php endif;?>




<?php
 $sql="select * from reserver order by ref";
 $result=mysqli_query($bdd,$sql);
    
    ?>
  



<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>reference</th>
        <th >reservation date</th>
        <th>document</th>
        <th>email</th>
        <th>emailSentDate</th>
        <!--<th colspan="2">action</th>-->
      </tr>
    </thead>
    <?php
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['ref'];?></td>
      <td><?php echo $row['drs'];?></td>
      <td><?php echo $row['genre'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['emailsentdate'];?></td>
    
      <td>
   <?php $gr= $row['genre'];
  $email= $row['email'];
  if ($row['emailsentdate']==NULL):
  ?>
      <a class="btn btn-danger" name="delete" value="delete"  onClick="crnr(<?php echo $row['id']; ?> ,<?php echo $row['idreservation']; ?>)" style="color:white"> cancel reservation </a>
     <!-- <a class="btn btn-danger" name="deleterp" value="deleterp"  onClick="crnrp(<?php echo $row['id']; ?> ,<?php echo $row['idreservation'];?>,<?php echo $row['ref'];?>,<?php echo "'$gr'";?>,<?php echo "'$email'";?>)" style="color:white"> cancel reservation </a>-->
      
  <?php endif;?>
      
      </td>


    </tr>
    <?php endwhile;  
    
    ?>
  </table>
</div>




<?php
 function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
?>


        </body>
        

</html>