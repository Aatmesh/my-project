
// $(document).ready(function () {

//     $('ul li #link').on('click', function (e) {
//         // debugger
//         e.preventDefault();
//         var offset = 0;
//         var target = this.hash;
//         if ($(this).data('offset') != undefined) offset = $(this).data('offset');

//         $('html, body,section ').stop().animate({

//             'scrollTop': $(target).offset().top - 80

//         }, 500, 'swing', function () {

//         });
//     });

// });
// $(document).ready(function () {
//     $('a[href^="#"]').click(function () {
//         var target = $(this.hash);
//         if (target.length == 0) target = $('a[name="' + this.hash.substr(1) + '"]');
//         if (target.length == 0) target = $('html');
//         $('html, body, section').animate({ scrollTop: target.offset().top - 100 }, 1000);
//         return false;
//     });
// });