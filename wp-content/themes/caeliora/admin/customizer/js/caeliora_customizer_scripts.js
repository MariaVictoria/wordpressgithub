jQuery(document).ready(function ($) {
  "use strict"

  $(".accordion-section li[id$='_tog']").click(function () {
    $(".wrapper, .customize-control-description", this).click(function (event) {
      event.stopPropagation()
    })
    $(this).find(".wrapper").toggleClass("show")
    $(this).find(".customize-control-title").toggleClass("show")
    $(this).find(".customize-control-description").toggleClass("show")
    $(this).toggleClass("caeliora-open")
  })

  /* Color Palette */
  $("li.repeater-row").each(function () {
    var theColorIs = $(this).find(".wp-color-result").css("background-color")
    $(this).css("background-color", theColorIs)
  })
})
