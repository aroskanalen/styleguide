/**
 *
 * Toggle
 *
 * This is used in Pattern Lab for presentation purposes, don't used in production.
 *
 */

(function($) {
  function clickHandler(element) {
    element.hide();

    $(document).off('touchstart click', clickHandler);
  }

  function toggleElement() {
    var toggleTarget;
    var toggleElement;

    $('.js-toggle-element').on('touchstart click', function() {
      toggleTarget = $("." + $(this).attr('data-toggle-element'));
      toggleElement = $(this).parent().find(toggleTarget);

      toggleElement.toggle();

      // Register click handler after timeout.
      setTimeout(function() {
        $(document).on('touchstart click', clickHandler(toggleElement));
      }, 500);

    });
  }

  // Start the show
  $(document).ready(function () {
    toggleElement();
  });

})(jQuery);
