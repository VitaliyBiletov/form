(function (){
    $(".nav-link").click(function(){
        $(".nav-link").each(function(){
            $(this).removeClass('active')
        })
        $(".tab-pane").each(function(){
            $(this).removeClass('active')
            $(this).removeClass('show')
        })
        $(this).addClass('active')
        const linkHref = $(this).attr('href');
        $(`${linkHref}`).addClass('show active');
    })
})()

