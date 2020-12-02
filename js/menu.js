(function (){
    //
    if (!sessionStorage.hasOwnProperty('currentTab')){
        sessionStorage['currentTab'] = '#studentForm';
        $(`.nav-link[href="${sessionStorage['currentTab']}`).addClass('active');
        $(`${sessionStorage['currentTab']}`).addClass('show active');
    } else {
        $(".nav-link").each(function(){
            $(this).removeClass('active')
        });
        $(".tab-pane").each(function(){
            $(this).removeClass('active');
            $(this).removeClass('show')
        });

        $(`.nav-link[href="${sessionStorage['currentTab']}`).addClass('active');
        $(`${sessionStorage['currentTab']}`).addClass('show active');
    }

    $(".nav-link").click(function(){
        $(".nav-link").each(function(){
            $(this).removeClass('active')
        });
        $(".tab-pane").each(function(){
            $(this).removeClass('active');
            $(this).removeClass('show')
        });

        $(this).addClass('active');

        const linkHref = $(this).attr('href');
        sessionStorage['currentTab'] = linkHref;
        $(sessionStorage['currentTab']).addClass('show active');
        console.log(sessionStorage)
    })
})()

