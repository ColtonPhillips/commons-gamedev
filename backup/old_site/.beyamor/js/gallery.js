var GameModel = Backbone.Model.extend({
	
});

var GalleryCollection = Backbone.Collection.extend({

	url: function() {

		return this.document.url() + '/json';
	},

	model: GameModel	
});

var ShowcaseView = Backbone.View.extend({

	// TOM DON'T COPY-PASTA THIS, IMPOSE SOME SORT OF CODING STANDARDS YOU LAZY SON OF A BITCH
	authorList: function( authors ) {

		authors.reverse(); // because the following code reverses the order

		var s = '';

		// THE ALMIGHTY SWITCH-LOOP
		for ( var i = 0; i < authors.length; ++i ) {

			switch( i ) {

				case 0:
					s = authors[i];
					break;

				case 1:
					s = authors[i] + " and " + s;
					break;

				default:
					s = authors[i] + ", " + s;
					break;
			}
		}

		return s;
	},

	template: _.template(
					'<div class="screenshot-full-wrapper">' +
						'<img class="screenshot-full" src="<%= screenshot %>"/>' +
					'</div>' +
					'<div>' +
						'<p>' +
							'<%= title %><br/>' +
						'</p>' +
						'<p>' +
							'by <% print( this.authorList( authors ) ) %>' +
						'</p>' +
						'<div class="game-link">' +
							'[<a href="<%= link %>">Play</a>]' +
						'</div>' +
						'<% if (typeof description != "undefined" && description.length != 0 ) { %>' +
							'<div class="description">' +
								'Description: <%= description %>' +
							'</div>' +
						'<% } %>' +
						'<% if (typeof instructions != "undefined" && instructions.length != 0 ) { %>' +
							'<div class="instructions">' +
								'Instructions: <%= instructions %>' +
							'</div>' +
						'<% } %>' +
					'</div>'
	),

	render: function() {

		var el = $(this.el),
			html = this.template( this.model.toJSON() )

		var show = function() {
			el
			.html( html )
			.hide()
			.show( 250 );
		};

		// if the element is empty, immediately show it
		if ( el.html() == "" ) {

			show();
		}

		// otherwise, hide the existing content first
		else {

			el.hide( 250, show );
		}

		return this;		
	}
});

var GameView = Backbone.View.extend({

	tagName: 'div',
	className: 'game',

	authorList: function( authors ) {

		authors.reverse(); // because the following code reverses the order

		var s = '';

		// THE ALMIGHTY SWITCH-LOOP
		for ( var i = 0; i < authors.length; ++i ) {

			switch( i ) {

				case 0:
					s = authors[i];
					break;

				case 1:
					s = authors[i] + " and " + s;
					break;

				default:
					s = authors[i] + ", " + s;
					break;
			}
		}

		return s;
	},

	template: _.template(
					'<div class="screenshot-thumbnail-wrapper">' +
						'<img class="screenshot-thumbnail" src="<%= screenshot %>"/>' +
					'</div>' +
					'<div>' +
						'<%= title %><br/>' +
						'by <% print( this.authorList( authors ) ) %>' +
					'</div>'
				),

	render: function() {

		var el = $(this.el).html( this.template( this.model.toJSON() ) );

		// make sure the image is sized to its container
		var img = $( 'img', el );
		img.load( function() {
			$(this).parent().imagefit();
		} );

		// feedback for hover
		el.hover(
			function() {$(this).css( 'cursor', 'pointer' )},
			function() {$(this).css( 'cursor', 'auto' )}
		);

		// showcase on click
		var model = this.model;
		el.click( function() {
			var showcase = new ShowcaseView({
				model: model,
				el: $('#showcase')
			});
			showcase.render();
		});

		return this;
	}
});

var GalleryView = Backbone.View.extend({

	initialize: function() {

		this._gameViews = [];
	},

	render: function() {

		var gallery = this,
			galleryEl = $(this.el);

		// clear out the gallery
		galleryEl.empty();

		// add game views
		this._gameViews = [];
		this.collection.each( function( game ) {

			gallery._gameViews.push( new GameView({
				model: game
			}));
		});

		_(this._gameViews).each( function( gameView ) {
	
			var container = $( '<div class="game-container"></div>' );
			container.html( gameView.render().el );
			galleryEl.append( container );
		});
	}
});

var collectionData = [
	{
		title: 'DavidClarke.exe',		
		authors: ['David Clarke'],
		description: 'Now with music!',
		instructions: '',
		link: 'http://www.mediafire.com/?tqty3dnp3a1j6w4',
		screenshot: 'http://uvicgamedev.com/img/Games/DCexe.jpg'
	},

	{
		title: 'PixelWars',		
		authors: ['Jayden Dubord-Goulet'],
		description: '',
		instructions: '',
		link: 'http://www.mediafire.com/?5awd4r5d7f5pgpf',
		screenshot: 'http://uvicgamedev.com/img/Games/PixelWars.jpg'
	},

	{
		title: 'Poncho',		
		authors: ['Nicolas', 'Brandon', 'Jake'],
		description: '',
		instructions: 'Z to jump' +
				      'X to shoot' +
		              'R to restart' +
		              'arrow keys to move' +
		              'getting near enemies or bullets will kill you' +
		              'you must defeat all the enemies and reach the niche at top right without getting killed',
		link: 'http://code.google.com/p/globalgamejam2012poncho/',
		screenshot: 'http://uvicgamedev.com/img/Games/Poncho.jpg'
	}
];

var galleryCollection = new GalleryCollection( collectionData );
var galleryView = new GalleryView({
	collection: galleryCollection,
	el: $( '#gallery' )
});
galleryView.render();
