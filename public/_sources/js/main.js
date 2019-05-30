$(function(){
	

	var utils ={

		init: function(){
			utils.ui.init();
		},
		ui:{
			init: function(){
				utils.ui.themeDefault();
				utils.ui.imagePreview();
				utils.ui.checkboxValue();
			},
			themeDefault: function(){

					$('.count').each(function () {
						$(this).prop('Counter',0).animate({
							Counter: $(this).text()
						}, {
							duration: 3000,
							easing: 'swing',
							step: function (now) {
								$(this).text(Math.ceil(now));
							}
						});
					});

					$('#menuToggle').on('click', function(event) {
						var windowWidth = $(window).width();   		 
						if (windowWidth<1010) { 
							$('body').removeClass('open'); 
							if (windowWidth<760){ 
								$('#left-panel').slideToggle(); 
							} else {
								$('#left-panel').toggleClass('open-menu');  
							} 
						} else {
							$('body').toggleClass('open');
							$('#left-panel').removeClass('open-menu');  
						} 
							 
					}); 

					 
					$(".menu-item-has-children.dropdown").each(function() {
						$(this).on('click', function() {
							var $temp_text = $(this).children('.dropdown-toggle').html();
							$(this).children('.sub-menu').prepend('<li class="subtitle">' + $temp_text + '</li>'); 
						});
					});


			},
			imagePreview: function(){
				$("#imageUpload").on('change', function() {
					console.log(window.URL.createObjectURL(this.files[0]));
					$('#blah').attr('src', window.URL.createObjectURL(this.files[0]));
				});
			},
			checkboxValue: function(){
				$('#scheduleCheckBox input.form-check-input').on('change', function(){
					var scheds = [];
					$.each($('#scheduleCheckBox input.form-check-input:checked'), function(){
						var value = $(this).val();
						scheds.push(value);
						console.log(scheds);
					});
					var realSched = scheds.join(',')
					$('#realSched').val(realSched);
				});
				
			}
		}
	};

	utils.init();
	
});



