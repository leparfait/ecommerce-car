$("document").ready(function(){ //on test si le fichier jquery est bien chargé
    $(".cp").keyup(function(){
        if ($(this).val().length === 5) {
            $.ajax({                      //debut de notre requete ajax
                type: 'get',
                url : 'http://localhost/e-commerce/web/app_dev.php/villes/' + $(this).val(), // recuperation de la valeur du champ cp
               beforeSend: function(){   // traitement avant l'envoi
                   if($(".loading").length == 0){
                    $("form .ville").parent().append('<div class="loading"></div>');
                }
               },
               success: function(data){
                    $(".ville").val(data.ville); // on charge le champ ville avec le nom de la ville
                    $(".loading").remove();
               } 
            });
        }else{
            $(".ville").val('');
        }
    });
});