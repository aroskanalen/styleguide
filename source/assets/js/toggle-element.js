/**
 *
 * Toggle
 *
 * This is used in Pattern Lab for presentation purposes, don't used in production.
 *
 */

(function($) {
  function toggleElement() {
    var toggleTarget;
    var toggleElement;

    $('.js-toggle-element').bind('touchstart click', function(e) {
      toggleTarget = $("." + $(this).attr('data-toggle-element'));
      toggleElement = $(this).parent().find(toggleTarget);

      toggleElement.toggle();
    });

    $("." + $('.js-toggle-element').attr('data-toggle-element-close')).bind('touchstart click', function() {
      toggleElement.toggle();
    });
  }

  // Start the show
  $(document).ready(function () {
    toggleElement();
  });

})(jQuery);
