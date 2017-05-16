/**
 *
 * Toggle
 *
 * This is used in Pattern Lab for presentation purposes, don't used in production.
 *
 */

(function($) {
  function clickHandler(element) {
    console.log(element);

    element.hide()
    $(document).off('touchstart click', clickHandler);
  };

  function toggleElement() {
    var toggleTarget;
    var toggleElement;

    $('.js-toggle-element').on('touchstart click', function() {
      event.stopPropagation();

      toggleTarget = $("." + $(this).attr('data-toggle-element'));
      toggleElement = $(this).parent().find(toggleTarget);

      toggleElement.toggle();

      // Register click handler after timeout.
      setTimeout(function () {
        $(document).on('touchstart click', clickHandler(toggleElement));
      });

      // $(document).bind('touchstart click', function() {
      // toggleElement.toggle();
      // }).unbind('touchstart click');
    });
  }

  // Start the show
  $(document).ready(function () {
    toggleElement();
  });

})(jQuery);
