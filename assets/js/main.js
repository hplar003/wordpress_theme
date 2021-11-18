jQuery(document).ready(function() {
    jQuery(".post-col").slice(0,3).slideDown();
    jQuery(".btn-load-down").on('click',function(){
        jQuery(".col:hidden").slice(0,3).slideDown('slow','swing')
        if(jQuery(".col:hidden").length == 0){
            jQuery(".btn-load-down").hide('fast');
            jQuery(".btn-load-up").show('slow');
        }

    });
    jQuery(".btn-load-up").on('click',function(){
        jQuery(".col:visible").slice(0,3).slideUp('slow','swing')
        if(jQuery(".col:hidden").length ==3){
            jQuery(".btn-load-up").hide('fast');
            jQuery(".btn-load-down").show('slow');
        }

    });
    

});