jQuery( document ).ready(function() {
	jQuery( ".attachment-shop_thumbnail" ).each(function() {
		img_end_nova = jQuery( this ).attr('src');
		ext_nova = img_end_nova.slice(img_end_nova.length - 4);
		img_end_nova = img_end_nova.slice(0,  - 12);
		img_preloader = document.getElementById('img-preload');
		img_preloader.innerHTML += '<img src ='+img_end_nova+'-350x350'+ext_nova+'>';
	});

});
jQuery('.attachment-shop_thumbnail').click(
  function() {
	espaco_thumb = jQuery( this );

	// pega imagem e link do thumb
    img_end_nova = jQuery( this ).attr('src');
	ext_nova = img_end_nova.slice(img_end_nova.length - 4);
	img_end_nova = img_end_nova.slice(0,  - 12);
	//pega o endereco da imagem que esta la
	img_end_ant = jQuery('.attachment-shop_single ').attr('src');
	ext_ant = img_end_ant.slice(img_end_ant.length - 4);
	img_end_ant = img_end_ant.slice(0,  - 12);
//para trocar só quando as duas estiverem carregadas
	//cria as imagens
	var img_nova = new Image();
	var img_ant = new Image();
	//coloca o endereco delas
	img_nova.src = img_end_nova+'-350x350.jpg';
	img_ant.src = img_end_ant+'-120x120.jpg';
	
	//quando carregar a imagem chama a função
	img_nova.onload	= function(){
		
			//troca a iomagem com o thumbnail
			//jQuery('.attachment-shop_single ').fadeOut('slow', function () {
			        jQuery('.attachment-shop_single ').attr('src', img_end_nova+'-350x350.jpg');
					jQuery('.attachment-shop_single ').parent().attr('href',img_end_nova+ext_nova );
			
			  //  });
				//espaco_thumb.fadeOut('slow', function () {
					espaco_thumb.attr('src',img_end_ant+'-120x120.jpg');	
					espaco_thumb.parent().attr('href',img_end_ant+ext_ant);	
			
				//});
				//jQuery('.attachment-shop_single ').fadeIn('slow');	
		       	//espaco_thumb.fadeIn('slow');
		       	
			//troca os links
			
	};
	
	
	return false;
  }
);