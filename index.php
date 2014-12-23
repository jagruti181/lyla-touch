<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>Lyla</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link href="lib/ionic/css/ionic.css" rel="stylesheet">
    <link href="lib/ionic/css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- IF using Sass (run gulp sass first), then uncomment below and remove the CSS includes above
    <link href="css/ionic.app.css" rel="stylesheet">
    -->
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js"></script>
    <!-- ionic/angularjs js -->
    <script src="lib/ionic/js/ionic.bundle.js"></script>
    <script>
        var isMobile = {
            Android: function () {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function () {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function () {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function () {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function () {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function () {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };

        if (!isMobile.any()) {
            window.location = "http://www.lylaloves.co.uk"+window.location.hash;
        }
    </script>
    <!-- cordova script (this will be a 404 during development) -->
    <!--    <script src="cordova.js"></script>-->

    <!-- your app's js -->
    <script src="js/app.js"></script>
    <script src="js/controllers.js"></script>
    <script src="js/services.js"></script>
    <script src="js/jstorage.js"></script>

</head>

<body ng-app="starter" animation="slide-left-right-ios7">
    <!-- 
      The nav bar that will be updated as we navigate between views.
    -->
    <ion-nav-bar class="bar-stable bar-royal nav-title-slide-ios7">
        <ion-nav-back-button class="button-icon icon  ion-ios7-arrow-thin-left">
        </ion-nav-back-button>
    </ion-nav-bar>
    <!-- 
      The views will be rendered in the <ion-nav-view> directive below
      Templates are in the /templates folder (but you could also
      have templates inline in this html file if you'd like).
    -->
    <ion-nav-view></ion-nav-view>
</body>

</html>
