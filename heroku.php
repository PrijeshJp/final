<?php
    include ("nav.php");
?>
<!-- Body -->
<body>
    <!--========== END HEADER ==========-->

    <!--========== PROMO BLOCK ==========-->
    <section class="bgblog" >
        <!-- <div class="container g-position--overlay g-text-center--xs">
            <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
                <h1 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md">More Than A Just A Blog</h1>
            </div>
        </div> -->
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
        <!--/.our-skill--><!-- our-team -->
        <!--section-->
    </div>
    <!--========== END PAGE CONTENT ==========-->
    <?php
        include "footer.php";
    ?>

    <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
    <!-- Vendor -->
    <script type="text/javascript" src="vendor/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
    <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="vendor/vidbg.min.js"></script>
    <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="vendor/waypoint.min.js"></script>
    <script type="text/javascript" src="vendor/counterup.min.js"></script>
    <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

    <!-- General Components and Settings -->
    <script type="text/javascript" src="js/global.min.js"></script>
    <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
    <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
    <script type="text/javascript" src="js/components/portfolio-4-col-slider.min.js"></script>
    <script type="text/javascript" src="js/components/counter.min.js"></script>
    <script type="text/javascript" src="js/components/swiper.min.js"></script>
    <script type="text/javascript" src="js/components/wow.min.js"></script>
    <!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->
