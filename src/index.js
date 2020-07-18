import 'jquery'
import 'animsition'

$(document).ready(function($) {

  $('.animsition').animsition({
    inClass : 'fade-in-left',
    outClass : 'fade-out-right',
    inDuration : 1500,
    outDuration : 800,
    loading : true,
    linkElement: '.animsition-link'
  });

  $('.gallery-item').hover(function() {
    var caption = $(this).find('.gallery-caption');
    caption.css('transform', 'scaleY(1)');
  },
  function() {
    var caption = $(this).find('.gallery-caption');
    caption.css('transform', 'scaleY(0)');
  });
});
