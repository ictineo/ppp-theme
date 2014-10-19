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
Drupal.behaviors.ppp_theme_blogs_portada = {
  attach: function(context, settings) {
    jQuery('.wrapper-blog .views-row .blog-top').css('overflow', 'hidden');
    jQuery('.wrapper-blog .views-row .blog-top').css('position', 'relative');
    jQuery('.wrapper-blog .field-name-field-imatge-portada').css({'position': 'absolute', 'width': '100%'}).hide();
    jQuery('.wrapper-blog .views-row').mouseenter(function () {
      jQuery(this).find('.field-name-field-imatge-portada').slideDown();
    });
    jQuery('.wrapper-blog .views-row').mouseleave(function () {
      jQuery(this).find('.field-name-field-imatge-portada').slideUp();
    });


  }
};


})(jQuery, Drupal, this, this.document);
