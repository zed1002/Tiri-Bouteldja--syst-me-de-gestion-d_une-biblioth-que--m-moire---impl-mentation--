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
                url: 'remove.php',
                type: 'POST',
                data: { id:id },
                success: function(response){
    
                    if(response == 1){
                        // Remove row from HTML Table
                        $(el).closest('tr').css('background','tomato');
                        $(el).closest('tr').fadeOut(800,function(){
                            $(this).remove();
                        });
                    }else{
                        alert('Invalid ID.');
                    }
                }
            });
        }
    });
});