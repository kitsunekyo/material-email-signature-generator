<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/forms-min.css">
        <link rel="stylesheet" href="css/buttons-min.css">
        <link href='http://fonts.googleapis.com/css?family=Voces' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </head>
    <body id="main-body">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container card hoverable">
            <div class="row valign-wrapper sig-header">
                <div class="col s6 valign top-logo-img">
                    <img src="img/top-logo.png">
                </div>
                <p class="title col s6 valign">Signature Generator</p>
            </div>
            <form class="form" action="sig.php">
            <div class="card-content">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="name" id="name" onblur="firstFunction()">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">business</i>
                        <input type="text" name="position" id="position" onblur="posFunction()">
                        <label for="position">Position</label>                    
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="text" name="email" id="email" onblur="posFunction()">
                        <label for="email">Email</label>                    
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i> 
                        <input type="text" name="work" id="work" onblur="workFunction()">
                        <label for="work">Telefon (Office)</label>                    
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">stay_current_portrait</i>
                        <input type="text" name="cell" id="cell" onblur="cellFunction()">
                        <label for="cell">Telefon (Privat)</label>                    
                    </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="waves-effect waves-light btn">Generate</button>
                </div>
            </form>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
