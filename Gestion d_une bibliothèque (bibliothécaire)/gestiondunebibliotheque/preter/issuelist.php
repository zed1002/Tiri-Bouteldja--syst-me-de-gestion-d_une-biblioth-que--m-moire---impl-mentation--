
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
 
    <?php
    include_once "..\connexion\connexion.php";
    require_once "..\document/addbook.php";
    include "..\js/file.php";
    include "..\user/header.html";
    
    
    $idu='';
    $ref_fk='';
    $ref_expe='';
    $genre='';
    $answer='';
    $dp='';
    $dr='';
   

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

 <br><br><br><br> <h1 style="font-size:40px">Borrow list</h1><br>
    <?php
 //pre_r($result);
 $sql="select * from emprunt order by ref_fk";
 $result=mysqli_query($bdd,$sql);
    
    ?>
  



<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>id user</th>
        <th>ref_copy</th>
        <th >ref_doc</th>
        <th>type</th>
        <th>condition</th>
        <th>borrow date </th>
        <th>return date</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
    <?php
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?php echo $row['idu'];?></td>
      <td><?php echo $row['ref_expe'];?></td>
      <td><?php echo $row['ref_fk'];?></td>
      <td><?php echo $row['genre'];?></td>
      <td><?php echo $row['answer'];?></td>
      <td><?php echo $row['dp'];?></td>
      <td><?php echo $row['dr'];?></td>
     
      <td>
   
      <a href="http://localhost/gestiondunebibliotheque/retourner/returnfe.php?id=<?php echo $row['idu']; ?>&ref=<?php echo $row['ref_expe']; ?>&ref_fk=<?php echo $row['ref_fk']; ?>&dp=<?php echo $row['dp']; ?>&dr=<?php echo $row['dr']; ?>&genre=<?php echo $row['genre']; ?>&answer=<?php echo $row['answer']; ?>" class="btn btn-info" name='return'>return</a>
      </td>

    </tr>
    <?php endwhile; ?>
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