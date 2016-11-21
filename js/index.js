/* 
 * This is the main JavaScript file which loads all dependencies
 * It fetches posts from the database with the WP REST API
 * The content is rendered with React
 * Created by cr8gr8designs - Homepage: http://cr8gr8designs.com - Contact: mail@cr8gr8designs
 * © 2016 MSPECS
 */
import jQuery from 'jquery';
import React from 'react';
import ReactDOM from 'react-dom';
import Header from './components/header.js';
import Single from './components/single.js';
import Loop from './components/loop.js';
import Footer from './components/footer.js';

// When the DOM is loaded, run code inside
document.addEventListener("DOMContentLoaded", function () {
    var $ = jQuery.noConflict();

    // Varibles
    var main = $('#main'),
        menu = $('#output-menu'),
        postArr = [],
        menuArr = [],
        wpRestApiUrl = 'http://localhost/~d/wp/wp-json/wp/v2/',
        wpUrl = 'http://localhost/~d/wp/',
        url = window.location.href;

    // Set (link = href) ? ' active': '';
    $('.menu-item a').click(function (event) {
        event.preventDefault();
        $(this).closest('li').addClass("active").siblings().removeClass('active');
        $('#toggler').removeAttr('checked');
    });


    $('.post-link').each(function (e) {
        // serve page
    });
    
    // If we are on front-page, render posts
    if (url == wpUrl ||  url == wpUrl + 'sample-page/') {
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
                postArr.push('<article class="post row"><div class="col-xs-12"><a class="post-link" href="' + postLink + '" id="' + postID + '"><h2>' + postTitle + '</h2></a>' + postExcerpt + '</div></article>');
            });
            main.append(postArr);
        });
        // ..otherwise we are on single post/page
    } else {
        $.ajax({
            // get post by slug, which is the title in lowercase/concatenated with a dash (-)
            'url': wpRestApiUrl + 'posts?slug=' + url.substring(23)
        }).done(function (postResponse) {
            $.each(postResponse, function (index, links) {
                let linkID = links.id;
                let author = links.author;
                let content = links.content.rendered;
                let linkHref = encodeURI(links.link);
                let linkTitle = links.title.rendered;
                main.append('<article class="post row"><div class="col-xs-12"><a class="post-link" href="' + linkHref + '" id="' + linkID + '"><h2 class="post-title">' + linkTitle + '</h2>' + getAuthor(author) + content + '</div></article>');
            });
        });
    }
    
    function getAuthor(id) {
        $.ajax({
            'url': wpRestApiUrl + 'users/' + id
        }).done(function (postResponse) {
            console.log(wpRestApiUrl + 'users/' + id)
            var author = '';
            $.each(postResponse, function (index, user) {
                let userID = user.id;
                let name = user.name;
                let userLink = encodeURI(user.link);
                author = '<p class="author"><a class="post-link" href="' + userLink + '" id="' + userID + '">' + name + '</p>';
            });
            return 
        });
    }

    // Render menu
    $.ajax({
        'url': wpRestApiUrl + 'pages'
    }).done(function (menuResponse) {
        // add home link first
        menuArr.push('<li class="menu-item active" id="hem"><a href="http://localhost/~d/wp/">Välkommen</a></li>');
        $.each(menuResponse, function (index, page) {
            let menuID = page.id;
            let slug = page.slug;
            let menuLink = encodeURI(page.link);
            let menuTitle = page.title.rendered;
            if (menuLink == wpUrl + 'sample-page/' || menuLink == wpUrl) {
                // Link already added
            } else {
                menuArr.push('<li class="menu-item"><a href="' + menuLink + '" id="' + slug + '">' + menuTitle[0].toUpperCase() + menuTitle.substring(1) + '</a></li>');
            }
        });
        menu.append(menuArr);
    });  
});
