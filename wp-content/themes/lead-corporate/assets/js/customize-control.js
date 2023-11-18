/**
 * Scripts within the customizer controls window.
 *
 * Contextually shows the color hue control and informs the preview
 * when users open or close the front page sections section.
 */

(function( $, api ) {
    wp.customize.bind('ready', function() {
    	// Show message on change.
        var lead_corporate_settings = ['lead_corporate_slider_num', 'lead_corporate_services_num', 'lead_corporate_projects_num', 'lead_corporate_testimonial_num', 'lead_corporate_blog_section_num', 'lead_corporate_reset_settings', 'lead_corporate_testimonial_num', 'lead_corporate_partner_num'];
        _.each( lead_corporate_settings, function( lead_corporate_setting ) {
            wp.customize( lead_corporate_setting, function( setting ) {
                var wildbusinessNotice = function( value ) {
                    var name = 'needs_refresh';
                    if ( value && lead_corporate_setting == 'lead_corporate_reset_settings' ) {
                        setting.notifications.add( 'needs_refresh', new wp.customize.Notification(
                            name,
                            {
                                type: 'warning',
                                message: localized_data.reset_msg,
                            }
                        ) );
                    } else if( value ){
                        setting.notifications.add( 'reset_name', new wp.customize.Notification(
                            name,
                            {
                                type: 'info',
                                message: localized_data.refresh_msg,
                            }
                        ) );
                    } else {
                        setting.notifications.remove( name );
                    }
                };

                setting.bind( wildbusinessNotice );
            });
        });

        /* === Radio Image Control === */
        api.controlConstructor['radio-color'] = api.Control.extend( {
            ready: function() {
                var control = this;

                $( 'input:radio', control.container ).change(
                    function() {
                        control.setting.set( $( this ).val() );
                    }
                );
            }
        } );


         // Sortable sections
        jQuery( 'ul.lead-corporate-sortable-list' ).sortable({
            handle: '.lead-corporate-drag-handle',
            axis: 'y',
            update: function( e, ui ){
                jQuery('input.lead-corporate-sortable-input').trigger( 'change' );
            }
        });

        // Sortable sections
        jQuery( "body" ).on( 'hover', '.lead-corporate-drag-handle', function() {
            jQuery( 'ul.lead-corporate-sortable-list' ).sortable({
                handle: '.lead-corporate-drag-handle',
                axis: 'y',
                update: function( e, ui ){
                    jQuery('input.lead-corporate-sortable-input').trigger( 'change' );
                }
            });
        });

        /* On changing the value. */
        jQuery( "body" ).on( 'change', 'input.lead-corporate-sortable-input', function() {
            /* Get the value, and convert to string. */
            this_checkboxes_values = jQuery( this ).parents( 'ul.lead-corporate-sortable-list' ).find( 'input.lead-corporate-sortable-input' ).map( function() {
                return this.value;
            }).get().join( ',' );

            /* Add the value to hidden input. */
            jQuery( this ).parents( 'ul.lead-corporate-sortable-list' ).find( 'input.lead-corporate-sortable-value' ).val( this_checkboxes_values ).trigger( 'change' );

        });

        // Deep linking for counter section to about section.
        jQuery('.lead-corporate-edit').click(function(e) {
            e.preventDefault();
            var jump_to = jQuery(this).attr( 'data-jump' );
            wp.customize.section( jump_to ).focus()
        });

    });
})( jQuery, wp.customize );
