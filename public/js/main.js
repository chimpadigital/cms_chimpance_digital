(function ($) {
 "use strict";
	
/*---------------------
 Dropdown
--------------------- */	
	$( '.dropdown' ).each(function() {
		var _this = $( this );
		$( this ).find('a').on( 'click', function(e) {
			e.preventDefault();
			$( _this ).toggleClass( 'open' );
			var value = $( this ).text();
			$( _this ).find( '> ul > li > a' ).text( value );
		});
	});
	$('html').on( 'click', function(e) {
		if( $( e.target ).closest('.dropdown.open').length == 0 ) {
			$( '.dropdown' ).removeClass('open');
		}
        }); 
		
		
	/*---------------------
	 TOP Menu Stick
	--------------------- */
	var s = $("#sticker");
	var pos = s.position();					   
	$(window).on('scroll',function() {
		var windowpos = $(window).scrollTop();
		if (windowpos > pos.top) {
		s.addClass("stick");
		} else {
			s.removeClass("stick");	
		}
	});			
		
/* ------------------------------------------------------------------------ 
   SEARCH OVERLAP
------------------------------------------------------------------------ */
jQuery('.search-open').on('click', function(){
	jQuery('.search-inside').fadeIn();
});
jQuery('.search-close').on('click', function(){
	jQuery('.search-inside').fadeOut();
});		
 
/*----------------------------
 jQuery MeanMenu
------------------------------ */
	$('nav#dropdown').meanmenu({
		meanScreenWidth: "991",
		meanMenuContainer: ".mobile-menu-area .container",
	});	
	
/*----------------------------
 wow js active
------------------------------ */
	new WOW().init();
 
/*----------------------------
 owl active
------------------------------ */  
  $(".product-curosel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:false,
	  navigation:false,	  
	  items : 5,
	  loop: false,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  });
  
/*----------------------------
 owl active
------------------------------ */  
  $(".upcoming-curosel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
	});
	
	$(".owl-carousel").owlCarousel({
		autoPlay: false, 
	slideSpeed:3000,
	pagination:true,
	navigation:false,	  
		items : 1,
	/* transitionStyle : "fade", */    /* [This code for animation ] */
	navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		itemsDesktop : [1199,1],
	itemsDesktopSmall : [980,1],
	itemsTablet: [768,1],
	itemsMobile : [479,1],
	thumbs: true,
	thumbsPrerendered: true,
	thumbItemClass: 'owl-thumb-item',
	thumbContainerClass: 'owl-thumbs',
	thumbImage: false,
});
/*----------------------------
 owl active
------------------------------ */  
  $(".blog-curosel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,2],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });

/*----------------------------
 owl active
------------------------------ */  
  $(".brand-curosel").owlCarousel({
    autoPlay: true, 
	  slideSpeed:3000,
	  pagination:false,
	  navigation:true,	  
    items : 6,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,5],
	  itemsDesktopSmall : [980,4],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  });

/*----------------------------
 owl active
------------------------------ */  
  $(".related-curosel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:false,
	  navigation:false,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active
------------------------------ */  
  $(".testimonial-carousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	  singleItem: true,
  });
/*----------------------------
 owl active
------------------------------ */  
  $(".sale-off-carosel").owlCarousel({
      autoPlay: true, 
	  slideSpeed:3000,
	  pagination:false,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	  singleItem: true,
  });

/*----------------------------
 price-slider active
------------------------------ */  
	  $( "#slider-range" ).slider({
	   range: true,
	   min: 40,
	   max: 600,
	   values: [ 60, 570 ],
	   slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	   }
	  });
	  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - $" + $( "#slider-range" ).slider( "values", 1 ) );  
	   
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 

/*---------------------
 countdown
--------------------- */
	$('[data-countdown]').each(function() {
	  var $this = $(this), finalDate = $(this).data('countdown');
	  $this.countdown(finalDate, function(event) {
		$this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
	  });
	});	
	
	
	/*----- cart-plus-minus-button -----*/	
	 $(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
	  $(".qtybutton").on("click", function() {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
		  var newVal = parseFloat(oldValue) + 1;
		} else {
		   // Don't allow decrementing below zero
		  if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
			} else {
			newVal = 0;
		  }
		  }
		$button.parent().find("input").val(newVal);
	  });  	

	  
/*-------------------------
  showlogin toggle function
--------------------------*/
	 $( '#showlogin' ).on('click', function() {
        $( '#checkout-login' ).slideToggle(900);
     }); 
	
/*-------------------------
  showcoupon toggle function
--------------------------*/
	 $( '#showcoupon' ).on('click', function() {
        $( '#checkout_coupon' ).slideToggle(900);
     });
	 
/*-------------------------
  Create an account toggle function
--------------------------*/
	 $( '#cbox' ).on('click', function() {
        $( '#cbox_info' ).slideToggle(900);
     });
	 
/*-------------------------
  Create an account toggle function
--------------------------*/
	 $( '#ship-box' ).on('click', function() {
        $( '#ship-box-info' ).slideToggle(1000);
     });	  
	
 
})(jQuery);


// owl carousel thums
/*! owl.carousel2.thumbs - v0.1.8 | (c) 2016 @gijsroge | MIT license | https://github.com/gijsroge/OwlCarousel2-Thumbs */
/**
 * Thumbs Plugin
 * @version 2.0.0
 * @author Gijs RogÃ©
 * @license The MIT License (MIT)
 */
(function ($, window, document, undefined) {
	'use strict';

	/**
	 * Creates the thumbs plugin.
	 * @class The thumbs Plugin
	 * @param {Owl} carousel - The Owl Carousel
	 */
	var Thumbs = function (carousel) {


			/**
			 * Reference to the core.
			 * @protected
			 * @type {Owl}
			 */
			this.owl = carousel;


			/**
			 * All DOM elements for thumbnails
			 * @protected
			 * @type {Object}
			 */
			this._thumbcontent = [];


			/**
			 * Instance identiefier
			 * @type {number}
			 * @private
			 */
			this._identifier = 0;


			/**
			 * Return current item regardless of clones
			 * @protected
			 * @type {Object}
			 */
			this.owl_currentitem = this.owl.options.startPosition;


			/**
			 * The carousel element.
			 * @type {jQuery}
			 */
			this.$element = this.owl.$element;


			/**
			 * All event handlers.
			 * @protected
			 * @type {Object}
			 */
			this._handlers = {
					'prepared.owl.carousel': $.proxy(function (e) {
							if (e.namespace && this.owl.options.thumbs && !this.owl.options.thumbImage && !this.owl.options.thumbsPrerendered && !this.owl.options.thumbImage) {
									if ($(e.content).find('[data-thumb]').attr('data-thumb') !== undefined) {
											this._thumbcontent.push($(e.content).find('[data-thumb]').attr('data-thumb'));
									}
							} else if (e.namespace && this.owl.options.thumbs && this.owl.options.thumbImage) {
									var innerImage = $(e.content).find('img');
									this._thumbcontent.push(innerImage);
							}
					}, this),

					'initialized.owl.carousel': $.proxy(function (e) {
							if (e.namespace && this.owl.options.thumbs) {
									this.render();
									this.listen();
									this._identifier = this.owl.$element.data('slider-id');
									this.setActive();
							}
					}, this),

					'changed.owl.carousel': $.proxy(function (e) {
							if (e.namespace && e.property.name === 'position' && this.owl.options.thumbs) {
									this._identifier = this.owl.$element.data('slider-id');
									this.setActive();
							}
					}, this)
			};

			// set default options
			this.owl.options = $.extend({}, Thumbs.Defaults, this.owl.options);

			// register the event handlers
			this.owl.$element.on(this._handlers);
	};


	/**
	 * Default options.
	 * @public
	 */
	Thumbs.Defaults = {
			thumbs: true,
			thumbImage: false,
			thumbContainerClass: 'owl-thumbs',
			thumbItemClass: 'owl-thumb-item',
			moveThumbsInside: false
	};


	/**
	 * Listen for thumbnail click
	 * @protected
	 */
	Thumbs.prototype.listen = function () {

			//set default options
			var options = this.owl.options;

			if (options.thumbsPrerendered) {
					this._thumbcontent._thumbcontainer = $('.' + options.thumbContainerClass);
			}

			//check what thumbitem has been clicked and move slider to that item
			$(this._thumbcontent._thumbcontainer).on('click', this._thumbcontent._thumbcontainer.children(), $.proxy(function (e) {

					// find relative slider
					this._identifier = $(e.target).closest('.' + options.thumbContainerClass).data('slider-id');

					// get index of clicked thumbnail
					var index = $(e.target).parent().is(this._thumbcontent._thumbcontainer) ? $(e.target).index() : $(e.target).closest('.'+options.thumbItemClass).index();

					if (options.thumbsPrerendered) {
							// slide to slide :)
							$('[data-slider-id=' + this._identifier + ']').trigger('to.owl.carousel', [index, options.dotsSpeed, true]);
					} else {
							this.owl.to(index, options.dotsSpeed);
					}

					e.preventDefault();
			}, this));
	};


	/**
	 * Builds thumbnails
	 * @protected
	 */
	Thumbs.prototype.render = function () {

			//set default options
			var options = this.owl.options;

			//create thumbcontainer
			if (!options.thumbsPrerendered) {
					this._thumbcontent._thumbcontainer = $('<div>').addClass(options.thumbContainerClass).appendTo(this.$element);
			} else {
					this._thumbcontent._thumbcontainer = $('.' + options.thumbContainerClass + '');
					if(options.moveThumbsInside){
							this._thumbcontent._thumbcontainer.appendTo(this.$element);
					}
			}

			//create thumb items
			var i;
			if (!options.thumbImage) {
					for (i = 0; i < this._thumbcontent.length; ++i) {
							this._thumbcontent._thumbcontainer.append('<button class=' + options.thumbItemClass + '>' + this._thumbcontent[i] + '</button>');
					}
			} else {
					for (i = 0; i < this._thumbcontent.length; ++i) {
							this._thumbcontent._thumbcontainer.append('<button class=' + options.thumbItemClass + '><img src="' + this._thumbcontent[i].attr('src') + '" alt="' + this._thumbcontent[i].attr('alt') + '" /></button>');
					}
			}
	};


	/**
	 * Updates active class on thumbnails
	 * @protected
	 */
	Thumbs.prototype.setActive = function () {

			// get startslide
			this.owl_currentitem = this.owl._current - (this.owl._clones.length / 2);
			if (this.owl_currentitem === this.owl._items.length) {
					this.owl_currentitem = 0;
			}

			//set default options
			var options = this.owl.options;

			// set relative thumbnail container
			var thumbContainer = options.thumbsPrerendered ? $('.' + options.thumbContainerClass + '[data-slider-id="' + this._identifier + '"]') : this._thumbcontent._thumbcontainer;
			thumbContainer.children().filter('.active').removeClass('active');
			thumbContainer.children().eq(this.owl_currentitem).addClass('active');
	};


	/**
	 * Destroys the plugin.
	 * @public
	 */
	Thumbs.prototype.destroy = function () {
			var handler, property;
			for (handler in this._handlers) {
					this.owl.$element.off(handler, this._handlers[handler]);
			}
			for (property in Object.getOwnPropertyNames(this)) {
					typeof this[property] !== 'function' && (this[property] = null);
			}
	};

	$.fn.owlCarousel.Constructor.Plugins.Thumbs = Thumbs;

})(window.Zepto || window.jQuery, window, document);