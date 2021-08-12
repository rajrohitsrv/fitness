
(function() {
	
	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	// from http://stackoverflow.com/a/11381730/989439
	function mobilecheck() {
		if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
}

	var docElem = window.document.documentElement,
		// support transitions
		support = Modernizr.csstransitions,
		// transition end event name
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		docscroll = 0,
		// click event (if mobile use touchstart)
		clickevent = mobilecheck() ? 'touchstart' : 'click';

	function init() {
		var showMenu = document.getElementById( 'showMenu' ),
			perspectiveWrapper = document.getElementById( 'perspective' ),
			container = perspectiveWrapper.querySelector( '.container' ),
			contentWrapper = container.querySelector( '.wrapper' );

		showMenu.addEventListener( clickevent, function( ev ) {
			ev.stopPropagation();
			ev.preventDefault();
			docscroll = scrollY();
			// change top of contentWrapper
			contentWrapper.style.top = docscroll * -1 + 'px';
			// mac chrome issue:
			document.body.scrollTop = document.documentElement.scrollTop = 0;
			// add modalview class
			classie.add( perspectiveWrapper, 'modalview' );
			// animate..
			setTimeout( function() { classie.add( perspectiveWrapper, 'animate' ); }, 25 );
		});

		container.addEventListener( clickevent, function( ev ) {
			if( classie.has( perspectiveWrapper, 'animate') ) {
				var onEndTransFn = function( ev ) {
					if( support && ( ev.target.className !== 'container' || ev.propertyName.indexOf( 'transform' ) == -1 ) ) return;
					this.removeEventListener( transEndEventName, onEndTransFn );
					classie.remove( perspectiveWrapper, 'modalview' );
					// mac chrome issue:
					document.body.scrollTop = document.documentElement.scrollTop = docscroll;
					// change top of contentWrapper
					contentWrapper.style.top = '0px';
				};
				if( support ) {
					perspectiveWrapper.addEventListener( transEndEventName, onEndTransFn );
				}
				else {
					onEndTransFn.call();
				}
				classie.remove( perspectiveWrapper, 'animate' );
			}
		});

		perspectiveWrapper.addEventListener( clickevent, function( ev ) { return false; } );
	}

	init();

})();