google.load("jquery", "1");

google.setOnLoadCallback(function() {

  $("input#email").focus(function () {
    $(this).val("");
  });

  $("input#email").blur(function () {
    $(this).val("Enter your Email Address");
  });

  $.each($("span.md5hash"), function () {
    var elem = $(this);
    $.ajax({ type: "GET",
             dataType: 'jsonp',
             url: "http://feeds.delicious.com/v2/json/urlinfo/"+$(this).html(),
             success: function(data){
               if (data.length > 0) {
                 elem.next().prepend(data[0].total_posts + " ");
               }
             }
          });
  });

  $("select[name=archive_dropdown]").change(function () {
    if ($(this).val().length > 0) {
      location.href = $(this).val();
    }
  });

});