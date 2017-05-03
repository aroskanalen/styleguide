/**
 *
 * Toggle
 *
 * This is used in Pattern Lab for presentation purposes, don't used in production.
 *
 */

(function($) {
  // Function for toggle burger navigation.
  function toggleElement() {
    $('.js-toggle-element').bind('touchstart click', function(e) {
      var toggleElement = $(".js-toggle-me", this);

      $(".js-toggle-me").toggle();
    });
  }

  // Start the show
  $(document).ready(function () {
    toggleElement();
  });

})(jQuery);
