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
Drupal.behaviors.ppp_placeholders = {
  attach: function(context, settings) {
    jQuery('#user-pass input, #user-register-form input, #user-login input').each(function () {
      var place = jQuery('label[for=' + jQuery(this).attr('id') + ']').text();
      jQuery('label[for=' + jQuery(this).attr('id') + ']').hide();
      jQuery(this).attr('placeholder', place);
    });

  }
};


})(jQuery, Drupal, this, this.document);
