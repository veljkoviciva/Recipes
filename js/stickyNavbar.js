
//   var $navbar = $("#navbar");
  
//   AdjustHeader(); // Incase the user loads the page from halfway down (or something);
//   $(window).scroll(function() {
//       AdjustHeader();
//   });
  
//   function AdjustHeader(){
//     if ($(window).scrollTop() > 60) {
//       if (!$navbar.hasClass("navbar-fixed-top")) {
//         $navbar.addClass("navbar-fixed-top");
//       }
//     } else {
//       $navbar.removeClass("navbar-fixed-top");
//     }
//   }

var fixmeTop = $('.probaNavbara').offset().top;       // get initial position of the element

$(window).scroll(function() {                  // assign scroll event listener

    var currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll >= fixmeTop) {           // apply position: fixed if you
        $('.probaNavbara').css({                      // scroll to that element or below it
            position: 'fixed',
            top: '0',
            left: '0'
        });
    } else {                                   // apply position: static
        $('.probaNavbara').css({                      // if you scroll above it
            position: 'static'
        });
    }

});