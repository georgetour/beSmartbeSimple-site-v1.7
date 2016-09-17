$(document).ready(function() {

    //A function that on click will scroll smoothly where we want
    //with scrollTo.js used in our html file
    $(".scroll").click(function(e){
        e.preventDefault();
        $('html,body').scrollTo(this.hash,this.hash);
    });
    

    //With those clicks we are removing the previous classes for themes
    //and we add the class we want for theme
    $('#darkButton').click(function() {
        $('body').removeClass('lightTheme defaultTheme').addClass('darkTheme');
        $('.forkMe').attr('src','images/fork-me-right-black.png')
    });

    $('#lightButton').click(function() {
        $('body').removeClass('darkTheme defaultTheme').addClass('lightTheme');
        $('.forkMe').attr('src','images/fork-me-right-green.png')
    });

    $('#defaultButton').click(function() {
        $('body').removeClass('darkTheme lightTheme').addClass('defaultTheme');
        $('.forkMe').attr('src','images/fork-me-right-blue.png')
    });
    
    //Embed youtube videos
    /*
    $('<iframe width="560" height="315" src="https://www.youtube.com/embed/NID3p0okzYQ"frameborder="0" allowfullscreen></iframe>').appendTo('#sublime-install');
    $('<iframe width="560" height="315" src="https://www.youtube.com/embed/fe14-21NTGU"frameborder="0" allowfullscreen> </iframe>').appendTo('#php-storm-install')
    */

    //A function that will create the embed videos from youtube with their porperties
    //to each id so they can be defer parsed
    function createObject() {
        var i = document.createElement("object");
        i.data = "https://www.youtube.com/embed/NID3p0okzYQ";
        i.title = "Installing SASS for sublime text";
        i.scrolling = "auto";
        i.frameborder = "0";
        i.width = "560px";
        i.height = "315px";
        i.allowfullscreen;

        var k = document.createElement("object");
        k.data = "https://www.youtube.com/embed/fe14-21NTGU";
        k.title = "PHP storm file watchers";
        k.scrolling = "auto";
        k.frameborder = "0";
        k.width = "560px";
        k.height = "315px";
        k.allowfullscreen;

        document.getElementById("sublime-install").appendChild(i);
        document.getElementById("php-storm-install").appendChild(k);


    };
    if (window.addEventListener) window.addEventListener("load", createObject, false);
    else if (window.attachEvent) window.attachEvent("onload", createObject);
    else window.onload = createObject;



});
