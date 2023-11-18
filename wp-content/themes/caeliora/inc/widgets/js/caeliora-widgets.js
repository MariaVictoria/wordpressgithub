jQuery(document).ready(function ($) {
  $(document).on("click", ".upload_image_button", function (e) {
    e.preventDefault()
    var $button = $(this)

    var file_frame = (wp.media.frames.file_frame = wp.media({
      title: caeliora_widget_vars.image_box_title,
      library: {
        type: "image"
      },
      button: {
        text: caeliora_widget_vars.image_button
      },
      multiple: false
    }))

    file_frame.on("select", function () {
      var attachment = file_frame.state().get("selection").first().toJSON()

      $button.prev("input.image-url").val(attachment.url).change()
    })

    file_frame.open()
  })
})
