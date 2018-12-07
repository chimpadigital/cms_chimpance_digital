(function() {

 "use strict";
 
	// Hone page one Revolution Slider Initialize			
	jQuery('.fullwidthbanner').show().revolution(
	{
		dottedOverlay:"none",
		delay:9000,
		startwidth:1130,
		startheight:550,
		hideThumbs:0,

		thumbWidth:100,
		thumbHeight:80,
		thumbAmount:4,
		
		simplifyAll:"off",
		
		navigationType:"arrow",
		navigationArrows:"solo",
		navigationStyle:"preview4",
		
		touchenabled:"on",
		onHoverStop:"on",
		nextSlideOnWindowFocus:"off",
		
		swipe_threshold: 75,
		swipe_velocity: 0.7,
		swipe_min_touches: 1,
		swipe_max_touches: 1,
		drag_block_vertical: false,
								
		keyboardNavigation:"off",
		
		navigationHAlign:"center",
		navigationVAlign:"bottom",
		navigationHOffset:0,
		navigationVOffset:20,

		soloArrowLeftHalign:"left",
		soloArrowLeftValign:"center",
		soloArrowLeftHOffset:20,
		soloArrowLeftVOffset:0,

		soloArrowRightHalign:"right",
		soloArrowRightValign:"center",
		soloArrowRightHOffset:20,
		soloArrowRightVOffset:0,
				
		shadow:0,
		fullWidth:"on",
		fullScreen:"off",

		spinner:"spinner0",
		
		stopLoop:"off",
		stopAfterLoops:-1,
		stopAtSlide:-1,
		
		hideTimerBar:"on",

		shuffle:"off",
		
		autoHeight:"off",						
		forceFullWidth:"off",
								
		hideThumbsOnMobile:"on",
		hideNavDelayOnMobile:500,						
		hideBulletsOnMobile:"off",
		hideArrowsOnMobile:"off",
		hideThumbsUnderResolution:0,
		
		hideSliderAtLimit:0,
		hideCaptionAtLimit:0,
		hideAllCaptionAtLilmit:0,
		startWithSlide:0,
		videoJsPath:"rs-plugin/videojs/",
		fullScreenOffsetContainer: "",

		navigation: {
			arrows: {
				enable: true,
				style: 'zeus',
				tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title">{{title}}</span>',
		 
				width: 100,
				height: 50,
				min_width: 100,
				visibleAmount: 5,
				rtl: false,
		 
				direction: 'horizontal',
				position: 'inner',
				space: 5,
				h_align: 'center',
				v_align: 'bottom',
				h_offset: 0,
				v_offset: 20,
		 
				span: true,
				wrapper_padding: 0,
				wrapper_color: 'transparent',
				wrapper_opacity: '0',
		 
				hide_onleave: false,
				hide_onmobile: true,
				hide_under: 640,
				hide_over: 9999,
				hide_delay: 200,
				hide_delay_mobile: 1200
		 
			}
		}
	});
	// Hone page one Revolution Slider Initialize			
	jQuery('.fullwidthbanner-2').show().revolution(
	{
		dottedOverlay:"none",
		delay:9000,
		startwidth:1130,
		startheight:550,
		hideThumbs:200,

		thumbWidth:100,
		thumbHeight:50,
		thumbAmount:2,
		
		simplifyAll:"off",
		
		navigationType:"bullet",
		navigationArrows:"solo",
		navigationStyle:"preview1",
		
		touchenabled:"on",
		onHoverStop:"on",
		nextSlideOnWindowFocus:"off",
		
		swipe_threshold: 75,
		swipe_velocity: 0.7,
		swipe_min_touches: 1,
		swipe_max_touches: 1,
		drag_block_vertical: false,
								
		keyboardNavigation:"off",
		
		navigationHAlign:"center",
		navigationVAlign:"bottom",
		navigationHOffset:0,
		navigationVOffset:20,

		soloArrowLeftHalign:"left",
		soloArrowLeftValign:"center",
		soloArrowLeftHOffset:20,
		soloArrowLeftVOffset:0,

		soloArrowRightHalign:"right",
		soloArrowRightValign:"center",
		soloArrowRightHOffset:20,
		soloArrowRightVOffset:0,
				
		shadow:0,
		fullWidth:"on",
		fullScreen:"on",

		spinner:"spinner0",
		
		stopLoop:"off",
		stopAfterLoops:-1,
		stopAtSlide:-1,
		
		hideTimerBar:"on",

		shuffle:"off",
		
		autoHeight:"off",						
		forceFullWidth:"off",
								
		hideThumbsOnMobile:"off",
		hideNavDelayOnMobile:1500,						
		hideBulletsOnMobile:"off",
		hideArrowsOnMobile:"off",
		hideThumbsUnderResolution:0,
		
		hideSliderAtLimit:0,
		hideCaptionAtLimit:0,
		hideAllCaptionAtLilmit:0,
		startWithSlide:0,
		videoJsPath:"rs-plugin/videojs/",
		fullScreenOffsetContainer: ""	
	});
	
 
	
})();	