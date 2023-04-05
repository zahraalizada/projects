$(document).ready(function (){
    $('.contact-delete').on('click',function (){
        let id = $(this).data('id');
        alertify.confirm("Silmek istediyinize emin misiniz?",
            function(){

                $.ajax({
                    type: "POST",
                    url: "settings.php",
                    data:{deleteId:id,module:'contact'},
                    dataType: "html",
                    success: function(data){
                        $('#msg').html(data);
                        $('#table-container').load('fetch-data.php');

                    }
                });


               $('#contact-id-'+id).remove();
                alertify.success('Melumat silindi');
            },
            function(){
                alertify.error('Emeliyyat legv olundu');
            });
    })




})