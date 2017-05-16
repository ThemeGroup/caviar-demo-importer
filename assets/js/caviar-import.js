jQuery( document ).ready( function( $ ) {
	"use strict";

	var caviar_demo_import = {
		init: function() {
			this.$progress = $( '#caviar-demo-import-progress' );
			this.$log = $( '#caviar-demo-import-log' );
			this.$importer = $( '#caviar-demo-importer' );
			this.steps = ['content', 'customizer', 'widgets', 'sliders'];

			if ( ! this.$importer.length ) {
				return;
			}

			/**
			 * The first step: download content file
			 */
			this.download( caviar_demo_import.steps.shift() );
		},

		download: function( type ) {
			caviar_demo_import.log( 'Downloading ' + type + ' file' );

			$.get(
				ajaxurl,
				{
					action: 'caviar_demo_import_download_file',
					type: type,
					demo: caviar_demo_import.$importer.find( 'input[name="demo"]' ).val(),
					_wpnonce: caviar_demo_import.$importer.find( 'input[name="_wpnonce"]' ).val()
				},
				function( response ) {
					if ( response.success ) {
						caviar_demo_import.import( type );
					} else {
						caviar_demo_import.log( response.data );

						if ( caviar_demo_import.steps.length ) {
							caviar_demo_import.download( caviar_demo_import.steps.shift() );
						} else {
							caviar_demo_import.configTheme();
						}
					}
				}
			).fail( function() {
				caviar_demo_import.log( 'Failed' );
			} );
		},

		import: function( type ) {
			caviar_demo_import.log( 'Importing ' + type );

			var data = {
					action: 'caviar_demo_import_import',
					type: type,
					_wpnonce: caviar_demo_import.$importer.find( 'input[name="_wpnonce"]' ).val()
				};
			var url = ajaxurl + '?' + $.param( data );
			var evtSource = new EventSource( url );

			evtSource.addEventListener( 'message', function ( message ) {
				var data = JSON.parse( message.data );

				switch ( data.action ) {
					case 'updateTotal':
						console.log( data.delta );
						break;

					case 'updateDelta':
						console.log(data.delta);
						break;

					case 'complete':
						evtSource.close();
						caviar_demo_import.log( type + ' has been imported successfully!' );

						if ( caviar_demo_import.steps.length ) {
							caviar_demo_import.download( caviar_demo_import.steps.shift() );
						} else {
							caviar_demo_import.configTheme();
						}

						break;
				}
			} );

			evtSource.addEventListener( 'log', function ( message ) {
				var data = JSON.parse( message.data );
				caviar_demo_import.log( data.message );
			});
		},

		configTheme: function() {
			$.get(
				ajaxurl,
				{
					action: 'caviar_demo_import_config_theme',
					demo: caviar_demo_import.$importer.find( 'input[name="demo"]' ).val(),
					_wpnonce: caviar_demo_import.$importer.find( 'input[name="_wpnonce"]' ).val()
				},
				function( response ) {
					if ( response.success ) {
						caviar_demo_import.generateImages();
					}

					caviar_demo_import.log( response.data );
				}
			).fail( function() {
				caviar_demo_import.log( 'Failed' );
			} );
		},

		generateImages: function() {
			$.get(
				ajaxurl,
				{
					action: 'caviar_demo_import_get_images',
					_wpnonce: caviar_demo_import.$importer.find( 'input[name="_wpnonce"]' ).val()
				},
				function( response ) {
					if ( ! response.success ) {
						caviar_demo_import.log( response.data );
						caviar_demo_import.log( 'Import completed!' );
						caviar_demo_import.$progress.find( '.spinner' ).hide();
						return;
					} else {
						var ids = response.data;

						if ( ! ids.length ) {
							caviar_demo_import.log( 'Import completed!' );
							caviar_demo_import.$progress.find( '.spinner' ).hide();
						}

						caviar_demo_import.log( 'Starting generate ' + ids.length + ' images' );

						caviar_demo_import.generateSingleImage( ids );
					}
				}
			);
		},

		generateSingleImage: function( ids ) {
			if ( ! ids.length ) {
				caviar_demo_import.log( 'Import completed!' );
				caviar_demo_import.$progress.find( '.spinner' ).hide();
				return;
			}

			var id = ids.shift();

			$.get(
				ajaxurl,
				{
					action: 'caviar_demo_import_generate_image',
					id: id,
					_wpnonce: caviar_demo_import.$importer.find( 'input[name="_wpnonce"]' ).val()
				},
				function( response ) {
					caviar_demo_import.log( response.data + ' (' + ids.length + ' images left)' );

					caviar_demo_import.generateSingleImage( ids );
				}
			);
		},

		log: function( message ) {
			caviar_demo_import.$progress.find( '.text' ).text( message );
			caviar_demo_import.$log.prepend( '<p>' + message + '</p>' );
		}
	};


	caviar_demo_import.init();
} );
