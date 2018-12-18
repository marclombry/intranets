$(document).ready(function(){
  
    // le(s) graphique(s) es cacher au debut
    $('.graf').hide();
    $('.grafik').on('click',function(){
        $('.cache').toggle();
        // On parcours toutes les class grafik et on vérifie la valeur de leur text (pour modifier le texte du bouton)//
        $('.grafik').each(function(){
            if($(this).text()=='Tableaux'){
                $(this).text('Grafiques');
            }else{
                $(this).text('Tableaux'); 
            }        
        });
        // fait apparaite/disparaitre le graphique
       
        $('.graf').toggle("slow");
    });
    // () => est la syntaxe es6 de function()
    $('.format').on('click',() => {
        //si la class existe //
        if($('.fo').hasClass('col-md-6')){
            $(".fo").removeClass("col-md-6");
            $(".fo").addClass("col-md-12");   
        }else{
            $(".fo").removeClass("col-md-12");
            $(".fo").addClass("col-md-6"); 
        }
    });    
});
