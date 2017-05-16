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

    $('.js-toggle-element').bind('touchstart click', function() {
      toggleTarget = $("." + $(this).attr('data-toggle-element'));
      toggleElement = $(this).parent().find(toggleTarget);

      toggleElement.toggle();

      $(document).bind('touchstart click', function() {
        toggleElement.toggle();
      }).unbind('touchstart click');
    });
  }

  // Start the show
  $(document).ready(function () {
    toggleElement();
  });

})(jQuery);
