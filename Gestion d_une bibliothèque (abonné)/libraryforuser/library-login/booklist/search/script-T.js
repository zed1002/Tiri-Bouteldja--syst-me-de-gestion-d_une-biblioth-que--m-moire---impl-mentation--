$(document).ready(function(){

    // Delete 
    $('.delete').click(function(){
        var el = this;

        // Delete id
        var id = $(this).data('id');
        
        var confirmalert = confirm("Are you sure?");
        if (confirmalert == true) {
            // AJAX Request
            $.ajax({
                url: 'insert-T.php',
                type: 'POST',
                data: { id:id },
                success: function(response){
  
                   alert('Your reservation has been registered');
                }
            });
               
        }
    });
});