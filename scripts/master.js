// @codekit-prepend "instafeed.min.js"
// @codekit-prepend "spin.min.js"
// @codekit-prepend "dug.js"
// @codekit-prepend "jquery.simplyScroll.min.js"

jQuery(document).ready(function($){

  var opts = {
    lines: 9, // The number of lines to draw
    length: 6, // The length of each line
    width: 3, // The line thickness
    radius: 9, // The radius of the inner circle
    corners: 1, // Corner roundness (0..1)
    rotate: 0, // The rotation offset
    direction: 1, // 1: clockwise, -1: counterclockwise
    color: '#fff', // #rgb or #rrggbb or array of colors
    speed: 1, // Rounds per second
    trail: 60, // Afterglow percentage
    shadow: false, // Whether to render a shadow
    hwaccel: false, // Whether to use hardware acceleration
    className: 'spinner', // The CSS class to assign to the spinner
    zIndex: 2e9, // The z-index (defaults to 2000000000)
    top: 'auto', // Top position relative to parent in px
    left: 'auto' // Left position relative to parent in px
  };
  var target = document.getElementById('instagram_spinner');
  var spinner = new Spinner(opts).spin(target);

  var feed = new Instafeed({
    get: 'user',
    target: 'feed',
    userId: 540147357,
    limit: 15,
    accessToken: '540147357.467ede5.5fb2637c85e04b04b307cbd7009e6b60',
    resolution: 'low_resolution',
    after: function() {
      $("#instagram_list").simplyScroll({
        speed: 1,
        frameRate: 20,
        orientation: 'horizontal',
        direction: 'forwards',
        customClass: 'instagram_scroller'
      });

      $('#instagram_spinner').remove();
    }
  });

  feed.run();

});