
<script>


function crnrp(del ,n ,re ,g ,e){
if(confirm("do you want to cancel the reservation?")){
    
   window.location.href='deletereservation.php?deleterp='  +del + '&deleter=' +n + '&deleterppr=' +re + '&deleterpp=' +g + '&emailrpp=' +e ;
  return true;



}

}

</script>

<!--
if(g=='livre'){
  $sql0="UPDATE exemplaire SET etat='available' where id=$id and genre='livre' ";
                if(!mysqli_query($bdd,$sql0)){
                    die('fail:' .$bdd->error);}}

                    if(g=='memoire'){
  $sql0="UPDATE exemplaireth SET etat='available' where id=$id and genre='memoire' ";
                if(!mysqli_query($bdd,$sql0)){
                    die('fail:' .$bdd->error);}}


                    if(g=='revue'){
  $sql0="UPDATE exemplaireth SET etat='available' where id=$id and genre='revue' ";
                if(!mysqli_query($bdd,$sql0)){
                    die('fail:' .$bdd->error);}}-->