$(document).ready(function (e) {
    $("#forma").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "pictureRecipe.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data)
            {
                $("#targetSlika").html(data);
            },
              error: function(data)
            {
                console.log("error");
              console.log(data);
            }
       });
    }));
});