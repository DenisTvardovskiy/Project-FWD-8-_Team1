jQuery(document).ready(function( $ ) {
      //Gallery controls
        $(".item").magnificPopup({
          type : "image",
          gallery : {
            enabled : true
          },
          removalDelay: 300,
          mainClass: 'mfp-fade'
        });
    });    