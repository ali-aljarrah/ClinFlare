$(document).ready(function () {

    if(document.getElementById("current-date")) {
        document.getElementById("current-date").innerHTML = new Date().getFullYear();
    }

    $('.loader').fadeOut();
    setTimeout(() => {
        $('.loader').removeClass('show');
    }, 1500);

    $('#menu-btn').click(function () {
        $(this).toggleClass('active');

        $('.mobile-menu').toggleClass('show');
    });

    var url = location.pathname;

    if(url == '/clingflare_pro') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-platform-link').addClass('active');
        $('#sm-platform-link').addClass('active');
        $('#lg-clingflare-pro-link').addClass('active');
        $('#sm-clingflare-pro-link').addClass('active');
    } else if (url == '/bot_detection') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-platform-link').addClass('active');
        $('#sm-platform-link').addClass('active');
        $('#lg-bot-detection-link').addClass('active');
        $('#sm-bot-detection-link').addClass('active');
    } else if (url == '/integrations') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-platform-link').addClass('active');
        $('#sm-platform-link').addClass('active');
        $('#lg-integrations-link').addClass('active');
        $('#sm-integrations-link').addClass('active');
    } else if (url == '/security') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-platform-link').addClass('active');
        $('#sm-platform-link').addClass('active');
        $('#lg-security-link').addClass('active');
        $('#sm-security-link').addClass('active');
    } else if (url == '/payment_fraud') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-solutions-link').addClass('active');
        $('#sm-solutions-link').addClass('active');
        $('#lg-payment-fraud-link').addClass('active');
        $('#sm-payment-fraud-link').addClass('active');
    } else if (url == '/account_takeover') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-solutions-link').addClass('active');
        $('#sm-solutions-link').addClass('active');
        $('#lg-account-takeover-link').addClass('active');
        $('#sm-account-takeover-link').addClass('active');
    } else if (url == '/account_sharing_prevention') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-solutions-link').addClass('active');
        $('#sm-solutions-link').addClass('active');
        $('#lg-account-sharing-prevention-link').addClass('active');
        $('#sm-account-sharing-prevention-link').addClass('active');
    } else if (url == '/paywall') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-solutions-link').addClass('active');
        $('#sm-solutions-link').addClass('active');
        $('#lg-paywall-link').addClass('active');
        $('#sm-paywall-link').addClass('active');
    } else if (url == '/ecommerce') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-solutions-link').addClass('active');
        $('#sm-solutions-link').addClass('active');
        $('#lg-ecommerce-link').addClass('active');
        $('#sm-ecommerce-link').addClass('active');
    } else if (url == '/buy_now_pay_later') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-solutions-link').addClass('active');
        $('#sm-solutions-link').addClass('active');
        $('#lg-buy-now-pay-later-link').addClass('active');
        $('#sm-buy-now-pay-later-link').addClass('active');
    } else if (url == '/gaming') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-solutions-link').addClass('active');
        $('#sm-solutions-link').addClass('active');
        $('#lg-gaming-link').addClass('active');
        $('#sm-gaming-link').addClass('active');
    } else if (url == '/cryptocurrency') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-solutions-link').addClass('active');
        $('#sm-solutions-link').addClass('active');
        $('#lg-cryptocurrency-link').addClass('active');
        $('#sm-cryptocurrency-link').addClass('active');
    } else if (url == '/sdk_libraries') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-developoers-link').addClass('active');
        $('#sm-developoers-link').addClass('active');
        $('#lg-sdk-libraries-link').addClass('active');
        $('#sm-sdk-libraries-link').addClass('active');
    } else if (url == '/opensource_vs_pro') {
        $('.site-menu .nav-link').removeClass('active');
        $('.site-menu .mobile-link').removeClass('active');
        $('#lg-developoers-link').addClass('active');
        $('#sm-developoers-link').addClass('active');
        $('#lg-pensource-vs-pro-link').addClass('active');
        $('#sm-pensource-vs-pro-link').addClass('active');
    }

      // Copy to clipboard event
      $('.copyElement').click(function(e) {
        e.preventDefault();

        var elemntParent = $(this).parent();
        var contentToCopy = elemntParent.find('pre code').text();

        navigator.clipboard.writeText(contentToCopy);

        $(this).text('Copied!');

        setTimeout(() => {
            $(this).text('Copy');
        }, 1500);
    });

});