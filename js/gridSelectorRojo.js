/**
 * gridSelectorRojo.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
;( function( window ) {
	
	'use strict';

	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}

	function gridSelectorRojo( el, options ) {	
		this.el = el;
		this.options = extend( this.defaults, options );
		this._init();
	}

	gridSelectorRojo.prototype = {
		defaults : {
			rows : 5,
			columns : 5,
			maxcolumns : 5,
			onClick : function() { return false; }
		},
		_init : function() {
			this.trigger =  this.el.querySelector( 'span.gt-gridRojo-icon' );
			this.gridItems = Array.prototype.slice.call( this.el.querySelectorAll( 'div.gt-gridRojo-select > div' ) );
			this._setRowsColumns( this.options.rows, this.options.columns );
			this.maxcolumns = this.options.maxcolumns;
			this.gridItems.forEach( function( el, i ) {
				classie.add( el, 'gt-gridRojo-selected' );
			} );
			this._initEvents();
		},
		_initEvents : function() {
			
			var self = this;

			if( Modernizr.touch ) {
				this.trigger.addEventListener( 'click', function( ev ) { classie.add( self.el, 'gt-gridRojo-control-open' ); } );
			}

			this.gridItems.forEach( function( el, i ) {
				el.addEventListener( 'mouseover', function(ev) {
					self._highlightGridItems( self.gridItems.indexOf( this ) );
				} );

				el.addEventListener( 'click', function(ev) {
					self._selectGridItems( self.gridItems.indexOf( this ) );
					if( Modernizr.touch ) {
						classie.remove( self.el, 'gt-gridRojo-control-open' );
					}
				} );
			} );

		},
		_highlightGridItems : function( pos ) {

			// item's row and column
			var self = this,
				itemRow = Math.floor( pos / this.options.maxcolumns ),
				itemColumn = pos - itemRow * this.options.maxcolumns;

			this.gridItems.forEach( function( el, i ) {
				// el's row and column
				var elpos = self.gridItems.indexOf( el ),
					elRow = Math.floor( elpos / self.options.maxcolumns ),
					elColumn = elpos - elRow * self.options.maxcolumns;

				if( elRow <= itemRow && elColumn <= itemColumn) {
					classie.add( el, 'gt-gridRojo-hover' );
				}
				else {
					classie.remove( el, 'gt-gridRojo-hover' );
				}
			} );

		},
		_selectGridItems : function( pos ) {
			var self = this;
			this.gridItems.forEach( function( el, i ) {
				if( classie.has( el, 'gt-gridRojo-hover' ) ) {
					classie.add( el, 'gt-gridRojo-selected' );
				}
				else {
					classie.remove( el, 'gt-gridRojo-selected' );
				}
			} );
			var r = this.rows = Math.floor( pos / this.options.maxcolumns ),
				c = this.columns = pos - this.rows * this.options.maxcolumns;
			
			this._setRowsColumns( r + 1, c + 1 );
			this.options.onClick();
		},
		_setRowsColumns : function( rows, columns ) {
			this.rows = rows;
			this.columns = columns;
		}
	}

	// add to global namespace
	window.gridSelectorRojo = gridSelectorRojo;

} )( window );