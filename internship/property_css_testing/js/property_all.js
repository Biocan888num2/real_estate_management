
$(document).ready(function(){


	const swiper = new Swiper('.swiper',{

		slidesPerView: 3,
		spaceBetween: 40,

		autoplay:{

			delay:5000,
		},

		loop: true,

		navigation: {

			nextEl:'.swiper-button-next',
			prevEl:'.swiper-button-prev',

		},
		
		pagination:{

			el:'swiper-pagination',
			type: 'bullets',
		},	


		breakpoints:{

			320:{

				slidesPerView: 1,
				spaceBetween: 20
			},

			768:{

				slidesPerView: 2,
				spaceBetween: 30

			},


			992:{

				slidesPerView: 3,
				spaceBetween: 40

			}


		}



	})



	AOS.init();

	AOS.init({

		disable: 'mobile'

	});

	/*const swiper = new Swiper('.swiperR',{

		slidesPerView: 1,
		spaceBetween: 40,

		autoplay:{

			delay:5000,
		},

		loop: true,

		navigation: {

			nextEl:'.swiper-button-next',
			prevEl:'.swiper-button-prev',

		},
		
		pagination:{

			el:'swiper-pagination',
			type: 'bullets',
		},	


		breakpoints:{

			320:{

				slidesPerView: 1,
				spaceBetween: 20
			},

			768:{

				slidesPerView: 1,
				spaceBetween: 30

			},


			992:{

				slidesPerView: 1,
				spaceBetween: 40

			}


		}



	})*/


})