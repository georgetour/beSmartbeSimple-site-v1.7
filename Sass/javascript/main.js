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
    $('<iframe width="560" height="315" src="https://www.youtube.com/embed/NID3p0okzYQ"frameborder="0" allowfullscreen></iframe>').appendTo('#sublime-install');
    $('<iframe width="560" height="315" src="https://www.youtube.com/embed/fe14-21NTGU"frameborder="0" allowfullscreen> </iframe>').appendTo('#php-storm-install')

});
