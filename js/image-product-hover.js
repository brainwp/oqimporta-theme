	var id;
	var altura;
	var largura;
		jQuery( ".enrolador-produto" ).hover(
			  	function() {
					var altura = jQuery( this ).children('img').css('height');
					var largura = jQuery( this ).children('img').css('width');
					jQuery( this ).children('.enrolador-capa').css({ "width": largura, "height": altura});
								id = jQuery( this ).children('.enrolador-capa').attr('id');
					
					var top = parseFloat(altura)/2;
					var left = parseFloat(largura)/4;
					jQuery( this ).children('.enrolador-capa').children('.lupa').css({ "left": left, "top": top});
					jQuery( this ).children('.enrolador-capa').children('.comprar').css({ "right": left, "top": top});
					
					
					});
					
	jQuery('.comprar').click(function() {
			
			jQuery(this).addClass('suma');
			add = '#adicionado-'+ id;
			console.log(add)
			jQuery(add).addClass('visible');
			
						
		});
	
	jQuery('a.home').attr('href','../../shopping');