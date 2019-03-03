
jQuery(document).ready(function() {
    var max_fields = 50; 
    var container    = jQuery(".form-table"); 
    var add_btn = jQuery(".add_field"); 
    var x = 1; 
	
	jQuery(add_btn).click(function(e){
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            jQuery(container).append('<div style="display:inline-block">Título del label: <input id="ttulodellabel_54887" name="ttulodellabel_54887" type="text" value=""> <a class="remove_field button-secondary">Quitar</a></div>');
        }
    });
	
    jQuery(container).on("click",".remove_field", function(e){ 
        e.preventDefault();
		jQuery(this).parent('div').remove(); 
		x--; 
    })
});