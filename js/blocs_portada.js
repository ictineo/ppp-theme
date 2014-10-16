/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.ppp_blocs_portada = {
  attach: function(context, settings) {
    jQuery('#content .dalt .bloc3 .view-ultims-comentaris.view-id-ultims_comentaris').hide();
    jQuery('#content .dalt .bloc3 .view-portada-ultims-usuaris.view-id-portada_ultims_usuaris').hide();
    //jQuery('#content .dalt .bloc3 .view-portada-ultims-punts.view-id-portada_ultims_punts').hide();
    jQuery('#content .dalt .bloc3 .tabs .tab-pnts').addClass('active');

    jQuery('#content .dalt .bloc3 .tabs .tab-pnts').click(function () {
      jQuery('#content .dalt .bloc3 .view').each(function () {
        jQuery(this).hide();
      });
      jQuery('#content .dalt .bloc3 .tabs .tab').each(function () {
        jQuery(this).removeClass('active');
      });
      jQuery(this).addClass('active');
      jQuery('#content .dalt .bloc3 .view-ultims-comentaris.view-id-ultims_comentaris').show();
    });
    jQuery('#content .dalt .bloc3 .tabs .tab-comm').click(function () {
      jQuery('#content .dalt .bloc3 .view').each(function () {
        jQuery(this).hide();
      });
      jQuery('#content .dalt .bloc3 .tabs .tab').each(function () {
        jQuery(this).removeClass('active');
      });
      jQuery(this).addClass('active');
      jQuery('#content .dalt .bloc3 .view-portada-ultims-usuaris.view-id-portada_ultims_usuaris').show();
    });

    jQuery('#content .dalt .bloc3 .tabs .tab-usrs').click(function () {
      jQuery('#content .dalt .bloc3 .view').each(function () {
        jQuery(this).hide();
      });
      jQuery('#content .dalt .bloc3 .tabs .tab').each(function () {
        jQuery(this).removeClass('active');
      });
      jQuery(this).addClass('active');
      jQuery('#content .dalt .bloc3 .view-portada-ultims-punts.view-id-portada_ultims_punts').show();
    });

  }
};


})(jQuery, Drupal, this, this.document);
