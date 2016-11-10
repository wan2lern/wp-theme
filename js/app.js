$(".menu-item").click(function () {
    $(this).addClass("active").siblings().removeClass('active');
    $("#toggler").removeAttr('checked');
});

var main = $('#main'),
    menu = $('#menu'),
    postArr = [],
    menuArr = [],
    postURL = 'http://localhost/~d/wp/wp-json/wp/v2/posts',
    menuURL = 'http://localhost/~d/wp/wp-json/wp/v2/pages';


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
        if(postLink === 'http://localhost/~d/wp') {
            
        }
        postArr.push('<article class="post"><a href="' + postLink + '"><h2>' + postTitle + '</h2></a>' + '<p>' + postContent + '</p></article>');
    });
    main.append(postArr);
});

// menu
$.ajax({
    'url': menuURL
}).done(function (menuResponse) {
    // console.log(menuResponse);
    menuArr.push('<li class="menu-item active"><a href="http://localhost/~d/wp/">Välkommen Till MSPECS</a></li>');
    $.each(menuResponse, function (index, page) {
        let menuID = page.id;
        let menuLink = encodeURI(page.link);
        let menuTitle = page.title.rendered;
        if(menuLink == 'http://localhost/~d/wp/') {
            // 
        } else {
            menuArr.push('<li class="menu-item"><a href="' + menuLink + '">' + menuTitle + '</a></li>');
        }
    });
    menu.append(menuArr);
});
