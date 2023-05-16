<script>







function crnr(del ,n){
if(confirm("do you want to delete?")){
   window.location.href='deletereservation.php?delete='  +del + '&deleter=' +n ;
  return true;
}
}




function crnb(del){
if(confirm("note: if you delete this book all copies will be deleted. do you want to delete? ")){
  window.location.href="http://localhost/gestiondunebibliotheque/document/deletebook.php?delete=" +del;
  return true;
}
}


function crnth(del){
if(confirm("note: if you delete this thesis all copies will be deleted. do you want to delete? ")){
  window.location.href="http://localhost/gestiondunebibliotheque/document/deletebook.php?deleteM=" +del;
  return true;
}
}

function crnj(del){
if(confirm("note: if you delete this journal all copies will be deleted. do you want to delete? ")){
  window.location.href="http://localhost/gestiondunebibliotheque/document/deletebook.php?deleteR=" +del;
  return true;
}
}

function crnex(del ){
if(confirm("do you want to delete?")){
  window.location.href='deleteexemplaire.php?delete' +del ;
  
  return true;
}
}
function crnexe(del,n ){
if(confirm("do you want to delete?")){
  window.location.href='deleteexemplaire.php?delete='  +del + '&deletex=' +n ;
  
  return true;
}
}


function crnexej(del,n ){
if(confirm("do you want to delete?")){
  window.location.href='deleteexemplairej.php?delete='  +del + '&deletex=' +n ;
  
  return true;
}
}

function crnexeth(del,n ){
if(confirm("do you want to delete?")){
  window.location.href='deleteexemplaireth.php?delete='  +del + '&deletex=' +n ;
  
  return true;
}
}

function crnu(del){
if(confirm("do you want to delete?")){
  window.location.href='deleteuser.php?delete=' +del;
  return true;
}
}


function crnar(del){
if(confirm("do you want to delete?")){
  window.location.href='deletearticle.php?delete=' +del;
  return true;
}
}










</script>


	<script >
      $(function validate() {
        $("#id_error_message").hide();
         $("#fname_error_message").hide();
         $("#sname_error_message").hide();
         $("#email_error_message").hide();
         $("#password_error_message").hide();
         $("#retype_password_error_message").hide();
         $("#tel_error_message").hide();
         $("#finame_error_message").hide();

         var error_id = false;
         var error_fname = false;
         var error_sname = false;
         var error_email = false;
         var error_password = false;
         var error_retype_password = false;
         var error_tel = false;
         var error_finame = false;

         $("#form_id").focusout(function(){
            check_id();
         });
         
         $("#form_fname").focusout(function(){
            check_fname();
         });

         $("#form_sname").focusout(function() {
            check_sname();
         });
         $("#form_email").focusout(function() {
            check_email();
         });

         $("#form_tel").focusout(function(){
            check_tel();
         });
         
         $("#form_finame").focusout(function(){
            check_finame();
         });

         function check_id() {
            var pattern = /^[0-9]*$/;
            var id= $("#form_id").val();
            if (pattern.test(id) && id !== '') {
               $("#id_error_message").hide();
               $("#form_id").css("border-bottom","2px solid #34F458");
            } else {
               $("#id_error_message").html("Should contain only numbers");
               $("#id_error_message").show();
               $("form_id").css("border-bottom","2px solid #F90A0A");
               error_id = true;
               event.preventDefault();
            }

           
         }


 function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#form_fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#form_fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain letters only");
               $("#fname_error_message").show();
               $("#form_fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
               event.preventDefault();
            }
         }
	
  
         function check_sname() {
            var pattern = /^[a-zA-Z]*$/;
            var sname = $("#form_sname").val()
            if (pattern.test(sname) && sname !== '') {
               $("#sname_error_message").hide();
               $("#form_sname").css("border-bottom","2px solid #34F458");
            } else {
               $("#sname_error_message").html("Should contain letters only");
               $("#sname_error_message").show();
               $("#form_sname").css("border-bottom","2px solid #F90A0A");
               error_sname = true;
               event.preventDefault();
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
               event.preventDefault();
            }
         }

         function check_tel() {
            var pattern = /^[0-9]*$/;
            var tel= $("#form_tel").val();
            if (pattern.test(tel) && tel !== '') {
               $("#tel_error_message").hide();
               $("#form_tel").css("border-bottom","2px solid #34F458");
            } else {
               $("#tel_error_message").html("Should contain numbers only");
               $("#tel_error_message").show();
               $("form_tel").css("border-bottom","2px solid #F90A0A");
               error_tel = true;
               event.preventDefault();
            }
         }

         function check_finame() {
            var pattern = /^[a-zA-Z]*$/;
            var finame = $("#form_finame").val();
            if (pattern.test(finame) && finame !== '') {
               $("#finame_error_message").hide();
               $("#form_finame").css("border-bottom","2px solid #34F458");
            } else {
               $("#finame_error_message").html("Should contain letters only");
               $("#finame_error_message").show();
               $("#form_finame").css("border-bottom","2px solid #F90A0A");
               error_finame = true;
               event.preventDefault();
            }
         }

         $("#registration_form").submit(function validate() {
          error_id = false;
            error_fname = false;
            error_sname = false;
            error_email = false;
            error_password = false;
            error_retype_password = false;
            error_id = false;
            error_finame = false;

            check_id();
            check_fname();
            check_sname();
            check_email();
            check_password();
            check_retype_password();
            check_tel();
            check_finame();

            if (error_fname === false && error_sname === false && error_email === false && error_id === false && error_tel === false && error_finame === false) {
               alert("Registration Successfull");
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });





        var validation =document.getElementById('ajouter');
        var n= document.getElementById('number');
        var n_m= document.getElementById('nbr_manquant');
        var n_v= /^[1-9]?/;
        validation.addEventListener('click', n_valid);


        var text= document.getElementById('text');
        var text_m= document.getElementById('text_manquant');
        var text_v= /^[a-zA-Zéè][a-zéèêàç]+([-'\s][a-zA-Zéè][a-zéèêàç]+)?/;
        validation.addEventListener('click', f_valid);
		
		var email= document.getElementById('email');
        var email_m= document.getElementById('email_manquant');
        var email_v= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		validation.addEventListener('click', e_valid);

		
        var text1= document.getElementById('text1');
        var text1_m= document.getElementById('text1_manquant');
        var text1_v= /^[a-zA-Zéè][a-zéèêàç]+([-'\s][a-zA-Zéè][a-zéèêàç]+)?/;
        validation.addEventListener('click', fp_valid);


        function f_valid(e){
          if(text.validity.valueMissing){
            e.preventDefault();
            text_m.textContent= 'champ manquant';
            text_m.style.color='red';
          }else if(text_v.test(text.value) == false){
            event.preventDefault();
            text_v.textContent= 'Format incorrect';
            text_v.style.color='orange';
          }else{

          }

        }
		
		function fp_valid(e){
          if(text.validity.valueMissing){
            e.preventDefault();
            text1_m.textContent= 'champ manquant';
            text1_m.style.color='red';
          }else if(text_v.test(text.value) == false){
            event.preventDefault();
            text1_v.textContent= 'Format incorrect';
            text1_v.style.color='orange';
          }else{

          }

        }

        function n_valid(e){
          if(text.validity.valueMissing){
            e.preventDefault();
            n_m.textContent= 'champ manquant';
            n_m.style.color='red';
          }else if(text_v.test(text.value) == false){
            event.preventDefault();
            n_v.textContent= 'Format incorrect';
           n_v.style.color='orange';
          }else{

          }

        }


		function e_valid(e){
          if(email.validity.valueMissing){
            e.preventDefault();
            email_m.textContent= 'champ manquant';
            email_m.style.color='red';
          }else if(email_v.test(email.value) == false){
            event.preventDefault();
            email_v.textContent= 'Format incorrect';
            email_v.style.color='orange';
          }else{

          }

        }
		</script>