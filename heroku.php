<!DOCTYPE html>
<html lang="en" class="no-js">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Heroku Solutions | Minuscule Technologies</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <?php
        include "script.php";
    ?>
</head>

<!-- Body -->
<body>
    <?php
        include ("nav.php");
    ?>
    <!--========== PROMO BLOCK ==========-->
    <section class="bgblog" >
    </section>
    <!--========== END PROMO BLOCK ==========-->
    <!--========== PAGE CONTENT ==========-->
    <div class="container blogpad">
        <div class="wow fadeInDown animated " style="visibility: visible; animation-name: fadeInDown;">
            <h2><span class="item active">Heroku - Salesforce integrated Solution</span></h2>
        </div>
        <div class="skill-wrap clearfix">
            <div class="wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <p class="lead">
                    We at Minuscule Technologies have done a solution on <b>Heroku</b> which interfaced with <b>Salesforce</b> and other applications. Following are the high-level details of our solution.
                    <br><br>
                    The <b>Hybrid App</b> solution is for an Application that has Web/App solution and we have done using and <b>OAuth 2.0</b>.
                    <br><br>
                    The entire application is hosted on Heroku platform and this application fetches the customer data from Salesforce Account Object with HerokuPostgres as its data layer. This application can be integrated with any Salesforce standard/Custom objects bi-directionally.
                    <br><br>
                    Build pack used - <b>Java, NodeJS buildpack</b><br>
                    Database - <b>HerokuPostgres</b><br>
                    Security - <b>OAuth </b>
                    <br><br>
                    Technically, the mobile app is a responsive and Hybrid app that works in multiple devices i.e. Android, iOS and Web browsers.
                    <br>
                    <ul>
                        <li>The Web application supports responsive UI and can run as standalone app in Linux, Windows and Mac </li>
                        <li>The app is done on <b><i>JAVA, AngularJS </i></b>and uses <b><i>Heroku PostgreSQL</i></b> as a backend</li>
                        <li>Mobile app has been developed on Ionic 2 with Angular 2 and this helps us to reuse the same code base to build Android and iOS Applications</li>
                        <li><b><i>OAuth2.0</i></b> is being used in the security module</li>
                        <li>Web server notifies mobile app using Firebase cloud messaging to manage notifications, handling remote configs and gathering analytics</li>
                        <li>We are using <b><i>Heroku Connect</i></b> to communicate with <b><i>Salesforce </i></b>to gather all custom objects associated with the Application</li>
                        <li>High-level solution diagram as below</li>
                    </ul>
                    <br><br>
                </p>
            </div>
        </div>
        <!--section-->
    </div>
    <!--========== END PAGE CONTENT ==========-->
    <?php
        include "footer.php";
    ?>
</body>
<!-- End Body -->
