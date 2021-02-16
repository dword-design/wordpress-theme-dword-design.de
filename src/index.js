import 'animsition'

import $ from 'jquery'

$(document).ready(() => {
  $('.animsition').animsition({
    inClass: 'fade-in-left',
    inDuration: 1500,
    linkElement: '.animsition-link',
    loading: true,
    outClass: 'fade-out-right',
    outDuration: 800,
  })
  $('.gallery-item').hover(
    function () {
      const caption = $(this).find('.gallery-caption')
      caption.css('transform', 'scaleY(1)')
    },
    function () {
      const caption = $(this).find('.gallery-caption')
      caption.css('transform', 'scaleY(0)')
    }
  )
})
