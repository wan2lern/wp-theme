document.addEventListener("DOMContentLoaded", function () {
    'use strict';
    
    var $ = jQuery.noConflict();
    // Varibles
    var main = $('#main'),
        menu = $('#output-menu'),
        postArr = [],
        menuArr = [],
        wpRestApiUrl = 'http://localhost/~d/wp/wp-json/wp/v2/',
        wpUrl = 'http://localhost/~d/wp/',
        url = window.location.href;

    $(".menu-item a").click(function (event) {
        event.preventDefault();
        $(this).addClass("active").siblings().removeClass('active');
        $("#toggler").removeAttr('checked');
        a
    });


    // If we are on front-page, render posts
    if (url == 'http://localhost/~d/wp/' ||  url == 'http://localhost/~d/wp/sample-page/') {
        // posts
        $.ajax({
            'url': wpRestApiUrl + 'posts'
        }).done(function (postResponse) {
            $.each(postResponse, function (index, post) {
                let postID = post.id;
                let slug = post.slug;
                let postLink = encodeURI(post.link);
                let postTitle = post.title.rendered;
                let postExcerpt = post.excerpt.rendered;
                postArr.push('<article class="post row"><div class="col-xs-12"><a class="post-link" href="' + postLink + '"><h2>' + postTitle + '</h2></a>' + postExcerpt + '</div></article>');
            });
            main.append(postArr);
        });
    } else {
        $.ajax({
            'url': wpRestApiUrl + 'posts?slug=' + url.substring(23)
        }).done(function (postResponse) {
            $.each(postResponse, function (index, post) {
                let postID = post.id;
                let content = post.content.rendered;
                let postLink = encodeURI(post.link);
                let postTitle = post.title.rendered;
                main.append('<article class="post row"><div class="col-xs-12"><a class="post-link" href="' + postLink + '" id="' + postID + '"><h2>' + postTitle + '</h2></a>' + content + '</div></article>');
            });
        });
    }

    // Render menu
    $.ajax({
        'url': wpRestApiUrl + 'pages'
    }).done(function (menuResponse) {
        // console.log(menuResponse);
        // add home link first
        menuArr.push('<li class="menu-item active" id="hem"><a href="http://localhost/~d/wp/">Välkommen</a></li>');
        $.each(menuResponse, function (index, page) {
            let menuID = page.id;
            let slug = page.slug;
            let menuLink = encodeURI(page.link);
            let menuTitle = page.title.rendered;
            if (menuLink == 'http://localhost/~d/wp/sample-page/') {
                // Link already added
            } else {
                menuArr.push('<li class="menu-item"><a href="' + menuLink + '" id="' + slug + '">' + menuTitle[0].toUpperCase() + menuTitle.substring(1) + '</a></li>');
            }
        });
        menu.append(menuArr);
    });

    // Render page
    function renderPage(theUrl) {
        $.ajax({
            'url': theUrl
        }).done(function (reponseTxt) {
            var output;
            $.each(reponseTxt, function (index, field) {
                output += '<div class="row">' + field + '</div>';
            });
            main.append(output);
        });
    }
});
