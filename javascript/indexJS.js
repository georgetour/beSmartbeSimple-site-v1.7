$(document).ready(function () {

    //Let's pass the id we ll use to variables
    var mainPage = $('#mainPage');
    var services = $('#services');
    var portfolio = $('#portfolio');
    var about = $('#about');
    var contactUs = $('#contactUs');

    //Storing to variables the ids that gonna be removed
    //show only what we want to appear
    var onlyMainPage = '#showServices,#showPortfolio,#showAbout,#showContactUs';
    var onlyServices = '#showMainPage,#showPortfolio,#showAbout,#showContactUs';
    var onlyPortfolio = '#showMainPage,#showServices,#showAbout,#showContactUs';
    var onlyAbout = '#showMainPage,#showPortfolio,#showServices,#showContactUs';
    var onlyContactUs = '#showMainPage,#showPortfolio,#showAbout,#showServices';


    //Hide staff for starting page
    $('#showServices').hide(0);
    $('#showPortfolio').hide(0);
    $('#showAbout').hide(0);
    $('#showContactUs').hide(0);

    //Let's create a variable that will store the path with the
    //# symbol, including the # symbol
    var request = window.location.hash;

    //According to path we will show only the path
    switch(request){
        case '#services':
            showOnly('#showServices','#showMainPage');
            break;
        case '#portfolio':
            showOnly('#showPortfolio','#showMainPage');
            break;
        case '#about':
            showOnly('#showAbout','#showMainPage');
            break;
        case '#contactUs':
            showOnly('#showContactUs','#showMainPage');
            break;

        default:
            showOnly('#showMainPage');
    }




    //We are saying in first parameter  show the ID we want
    // and make hidden all others with second parameter
    function showHideAnimation(show,hide) {
        $(show).animate({left: '0px'},350).show(500);
        $(hide).animate({right: '250px'},450).hide(650);
    }

    //What we want to be shown when someones visits the link
    function showOnly(showOnly,hideServices){
        $(hideServices).hide();
        $(showOnly).show();
    }


    //On click in menu bar of each link the animation will
    //execute and show the page link
    $(services).on('click',function () {
        showHideAnimation('#showServices',onlyServices);

    });

    $(portfolio).on('click',function () {
        showHideAnimation('#showPortfolio',onlyPortfolio);
    });

    $(about).on('click',function () {
        showHideAnimation('#showAbout',onlyAbout)

    });


    $(contactUs).on('click',function () {
        showHideAnimation('#showContactUs',onlyContactUs)

    });

    $(mainPage).on('click',function () {
        showHideAnimation('#showMainPage',onlyMainPage)

    });














//Hiding from html the error message
    $('#error').hide();

    //Creating empty string variable to use in error id  message below
    var errorMessage = "";

    //Flag variuable to cntrol when form wil be submitted
    var flag = 0;

    $('#contact').submit(function (event) {

        //Pattern for only letters and numbers
        function validation(gameTitle) {
            var pattern = /^\s*[a-zA-Z0-9,\s]+\s*$/;
            return pattern.test(gameTitle);

        }

        //Pattern for email only
        function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        }




        if (!validation($('#gameTitle').val())||(!validation($('#suggestedBy').val()))) {
            event.preventDefault();
            errorMessage = 'Only letters and numbers please';
            $('#error').html(errorMessage);
            $('#error').show();
            $('#error').fadeOut(3000);
            flag = 1;
        }
        if (!isValidEmailAddress($('#email').val())) {
            event.preventDefault();
            errorMessage = 'Give correct email';
            $('#error').html(errorMessage);
            $('#error').show();
            $('#error').fadeOut(3000);
            flag = 2;
        }




        else if(flag==0){
            $('#subscribeForm').submit();
        }



    })
  


});