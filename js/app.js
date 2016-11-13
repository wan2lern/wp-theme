document.addEventListener("DOMContentLoaded", function () {
    var $ = jQuery.noConflict();
    $(".menu-item").click(function () {
        $(this).addClass("active").siblings().removeClass('active');
        $("#toggler").removeAttr('checked');
    });

    var main = $('#main'),
        menu = $('#menu'),
        postArr = [],
        menuArr = [],
        postURL = 'http://localhost/~d/wp/wp-json/wp/v2/posts',
        menuURL = 'http://localhost/~d/wp/wp-json/wp/v2/pages',
        url = window.location.href;


    // If we are on front-page
    if(url == 'http://localhost/~d/wp/') {
        // posts
        $.ajax({
            'url': postURL
        }).done(function (postResponse) {
            console.log(postResponse);
            $.each(postResponse, function (index, post) {
                let postID = post.id;
                let postLink = encodeURI(post.link);
                let postTitle = post.title.rendered;
                let postContent = post.content.rendered;
                postArr.push('<article class="post"><a href="' + postLink + '"><h2>' + postTitle + '</h2></a>' + '<p>' + postContent + '</p></article>');
            });
            main.append(postArr);
        });
    // ..else render url
    } /*else {
        renderPage(url);
    }*/
    

    // menu
    $.ajax({
        'url': menuURL
    }).done(function (menuResponse) {
        // console.log(menuResponse);
        // add home link first
        menuArr.push('<li class="menu-item active"><a href="http://localhost/~d/wp/">Välkommen</a></li>');
        $.each(menuResponse, function (index, page) {
            let menuID = page.id;
            let menuLink = encodeURI(page.link);
            let menuTitle = page.title.rendered;
            if (menuLink == 'http://localhost/~d/wp/') {
                // Link already added 
            } else {
                menuArr.push('<li class="menu-item" onclick="renderPage(' + menuLink + ')"><a href="' + menuLink + '">' + menuTitle + '</a></li>');
            }
        });
        menu.append(menuArr);
    });

    /*function renderPage(currentURL) {
        $.ajax({
            'url': currentURL
        }).done(function (postResponse) {
            $('#main').load(postResponse);
        });
    }*/
});
