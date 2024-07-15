// ------- Go to top -------
mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {  if (document.body.scrollTop > 250  || document.documentElement.scrollTop > 250) {
    mybutton.style.display = "block";
}else {
    mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE     and Opera
}

// ------- Btn Search -------
$(document).ready(function () {
    $('.icon').click(function () { 
        $('.search').css({'background': '#fff', 'width': '95%'});
        $('#body #menu_top .menu ul').hide();
    });
});

// ------- Question And Answer -------
$(document).ready(function () {
    $('.ques').click(function(){
        // Check if the clicked question's answer is already visible
        if (!$(this).next('.answer').is(':visible')) {
            // If not visible, slide up all other answers and toggle the clicked answer
            $('.answer').slideUp();
            $(this).next('.answer').slideDown();
        } else {
            // If already visible, just slide up the clicked answer
            $(this).next('.answer').slideUp();
        }
    });

    // Active Menu
    // $('#body #menu_top .menu ul').click(function () { 
    //     $('#body #menu_top .menu ul a').addClass('active');
        
    // });
});