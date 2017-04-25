/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var menuContainer, toggle;

	toggle = document.getElementById('menu-switch');
	menuContainer = document.getElementById( 'mobile-site-navigation' );

	toggle.onclick = function() {
		if ( -1 !== menuContainer.className.indexOf( 'mobile-slide-open' ) ) {
			menuContainer.className = menuContainer.className.replace( ' mobile-slide-open', '' );
			toggle.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			menuContainer.className += ' mobile-slide-open';
			toggle.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};
} )();
