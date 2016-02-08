$(function() {


    // Main menu  ----------------------------	
    // sets active class to menu link if submenu is active ----------------------------
    if ($("ul.submenu li a").hasClass("active")) {
        $("ul.submenu li a").parent().parent().parent().find("a").first().addClass("active");
    }
    var dir = -260;
    $(document.body).on("click", ".toggle", function() {
        dir = dir === 0 ? -260 : 0;
        $(".nav").stop().animate({
            left: dir
        }, 'fast');
        if (dir == 0) {
            $("#darkmask").fadeIn();
            $(".nav").addClass('shadow');
        } else {
            $("#darkmask").fadeOut();
            $(".nav").removeClass('shadow');
        }
        $('.searchfield input').val('');
        $('.searchfield input').keyup();
    });
    $(".nav .submenu").hide();
    $(".nav ul > li > a").click(function(e) {
        if ($(this).parent().find("ul.submenu li.sub").length > 0) {
            e.preventDefault();

            if ($(this).hasClass("menu-closed")) {

                $('.menu-open').click();

                $(this).removeClass("menu-closed");
                $(this).addClass("menu-open");
            } else {

                $(this).removeClass('menu-open');
                $(this).addClass("menu-closed");
            }
            $(this).parent().find("ul.submenu").slideToggle();

        } else {
            e.preventDefault();
            $('#preload').fadeIn(200);
            content = $(this).attr('href');
            getContent(content);
            History.pushState({
                state: 1,
                rand: Math.random()
            }, null, "?" + lang + "&" + content);
            console.log('update   ' + $(this).attr('href'));
            dir = -260;
            $(".nav").stop().animate({
                left: dir
            }, 'fast');
            $("#darkmask").fadeOut();
        }
    });
    $(".nav ul.submenu li.sub").each(function(i, el) {
        $(this).parent().parent().find("a").first().addClass("hassub menu-closed");
    });
})