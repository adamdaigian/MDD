	$(document).ready(function(){
	
        //  Initialize Backgound Stretcher	   
		$('BODY').bgStretcher({
			images: ['http://biz104.inmotionhosting.com/~micha158/wp-content/themes/Michael%20Daigian%20Designs/images/bg2.jpg', 'http://biz104.inmotionhosting.com/~micha158/wp-content/themes/Michael%20Daigian%20Designs/images/bg.jpg','http://biz104.inmotionhosting.com/~micha158/wp-content/themes/Michael%20Daigian%20Designs/images/bg3.jpg','http://biz104.inmotionhosting.com/~micha158/wp-content/themes/Michael%20Daigian%20Designs/images/bg4.jpg','http://biz104.inmotionhosting.com/~micha158/wp-content/themes/Michael%20Daigian%20Designs/images/bg5.jpg',],
			imageWidth: 2200, 
			imageHeight: 1300, 
			slideShow:	true,
			slideDirection: 'W',
			slideShowSpeed: 500,
			transitionEffect: 'simpleSlide',
			sequenceMode: 'normal',
			buttonPrev: '#left-arrow',
			buttonNext: '#right-arrow',
			anchoring: 'left center',
			anchoringImg: 'left center'
		});
		
	});
