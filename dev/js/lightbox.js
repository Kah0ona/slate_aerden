jQuery(document).ready(function($) {
  $('body').on('click', "a.lightbox", function(e) {
    e.preventDefault();
    var lightbox;
    var elt = e.currentTarget;
    var lbImageHref = $(elt).attr("href");

    if ($("#lightbox").length) {
      $("#lightbox-img").html("<img src='" + lbImageHref + "' />");
      $("#lightbox").show();
    } else {
      lightbox =
        "<div id='lightbox'>" +
        "<p>Klik om te sluiten</p>" +
        "<div id='lightbox-img'>" +
        "<img src='" + lbImageHref + "' />" +
        "</div>" +
        "</div>";

      $("body").append(lightbox);
    }
  });

  $(document).on("click", "#lightbox", function() {
    $(this).hide();
  });
});
