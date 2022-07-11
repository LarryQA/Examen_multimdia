/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );

const abrir = document.querySelector('.abrir-barra');
abrir.addEventListener('click', abrirBarraLateral);

function abrirBarraLateral(){
	
	if(document.getElementById("id-bar").offsetWidth == 0){
		if(matchMedia("(min-width: 320px && max-width: 480px)").matches){
			document.getElementById("id-bar").style.padding ='0 1% 1% 1%'
			document.getElementById("id-bar").style.width ='55%'
			document.querySelector('.principal').style.width ='45%'
		}
		if(matchMedia("(min-width: 481px && max-width: 768px)").matches){
			document.getElementById("id-bar").style.padding ='0 1% 1% 1%'
			document.getElementById("id-bar").style.width ='40%'
			document.querySelector('.principal').style.width ='60%'
		}
		if(matchMedia("(min-width: 769px && max-width: 1024px)").matches){
			document.getElementById("id-bar").style.padding ='0 1% 1% 1%'
			document.getElementById("id-bar").style.width ='25%'
			document.querySelector('.principal').style.width ='75%'
		}
		if(matchMedia("(min-width: 1025px)").matches){
			document.getElementById("id-bar").style.padding ='0 1% 1% 1%'
			document.getElementById("id-bar").style.width ='20%'
			document.querySelector('.principal').style.width ='80%'
		}
		if(matchMedia("(min-width: 1431px)").matches){
			document.getElementById("id-bar").style.padding ='0 1% 1% 1%'
			document.getElementById("id-bar").style.width ='20%'
			document.querySelector('.principal').style.width ='80%'
		}
		var x = document.getElementById("show")
		x.style.width = "0"
		document.getElementById("show2").style.width ='100%'
	}
	else{
		document.getElementById("id-bar").style.width ='0'
		document.getElementById("id-bar").style.padding ='0'
		document.querySelector('.principal').style.width ='100%'
		var x = document.getElementById("show")
		x.style.width = "45%"
		
		if(matchMedia("(min-width: 1025px)").matches || matchMedia("(min-width: 1431px)").matches){
			document.getElementById("show2").style.width ='45%'
		}
		else{
			document.getElementById("show2").style.width ='100%'

		}
	
	}
	
}

function cerrarBarraLateral(){
	document.getElementById("id-bar").style.width ='0'
	document.getElementById("id-bar").style.padding ='0'
	document.getElementById("id-content").style.width ='100%'
}

const btn_info = document.getElementById("btn-info")
const btn_cont = document.getElementById("btn-cont")
const cont_info = document.getElementById("cont-info")
const cont_cont = document.getElementById("cont-cont")

let op = 1

const cambiar_op = () => {

	op == 1 ? (
		btn_info.classList.value = 'li-activo',
		cont_info.classList.value = 'cont cont-active'
	):
	(
		btn_info.classList.value = 'li-norm',
		cont_info.classList.value = 'cont'
	)

	op == 2 ? (
		btn_cont.classList.value = 'li-activo',
		cont_cont.classList.value = 'cont cont-active'
	):
	(
		btn_cont.classList.value = 'li-norm',
		cont_cont.classList.value = 'cont'
	)

}
btn_info.addEventListener( 'click', ()=> {
	op = 1;
	cambiar_op();
}
)
btn_cont.addEventListener( 'click', ()=> {
	op = 2;
	cambiar_op();
}
)



