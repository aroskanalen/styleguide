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

    $('.js-toggle-element').on('touchstart click', function() {
      toggleTarget = $("." + $(this).attr('data-toggle-element'));
      toggleElement = $(this).parent().find(toggleTarget);

      // Hide alle open elements
      toggleTarget.hide();

      // Show current element
      toggleElement.show();

      // Register click handler after timeout.
      setTimeout(function() {
        $(document).on('touchstart click', function () {
          toggleElement.hide();
        })
      });

      // Remove event
      $(document).off('touchstart click');
    });
  }

  // Start the show
  $(document).ready(function () {
    toggleElement();
  });

})(jQuery);
