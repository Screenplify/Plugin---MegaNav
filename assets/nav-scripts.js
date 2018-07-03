		$(document).ready(function(){

			console.log(inIframe());

			$(document).on('click', 'h1', function(e){
				e.preventDefault();

				if(inIframe()){
					$(parentBody).find('.cd-primary-nav').addClass('is-visible');
				} else {
					$('.cd-primary-nav').addClass('is-visible');
				}	
			});


			if(inIframe()){

				$(parentBody).find('.nav-menu .close').on('click', function(e){
					e.preventDefault();
					$(parentBody).find('.cd-primary-nav').removeClass('is-visible');	
				});

			} else {

				$(document).on('click', '.nav-menu .close', function(e){
					e.preventDefault();
					$('.cd-primary-nav').removeClass('is-visible');	
				});
			
			}

		});

