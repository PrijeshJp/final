<!DOCTYPE html>
<html lang="en" class="no-js">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include "script.php";
    ?>
</head>
<body>
    <div class="se-pre-con"></div>
    <?php
        include "nav.php";
    ?>
    <section class="bgiot g-bg-position--center backdrop-60px" style="max-height: 40vh;">
        <div class="container g-position--overlay g-text-center--xs">

        </div>
    </section>
    <!--========== END PROMO BLOCK ==========-->

    <!--========== PAGE CONTENT ==========-->
    <!-- Mockup -->
    <!-- <div class="container g-margin-t-o-150--xs">
        <div class="center-block s-mockup-v1">
            <img class="img-responsive" src="img/newImg/iot.png" alt="sf Image">
        </div>
    </div> -->
    <div class="container blogpad">
        <div class="">
            <h2 class="text-left wow spacebtm animated" style="visibility: visible;">Minuscule’s IoT Projects</h2>
            <div class="col-sm-12 wow spacebtm animated" style="visibility: visible;">
                    <ul class="text-left lead">
                        <li>Setup IoT devices in geographically distributed locations and started gathering data through cloud</li>
                        <li>Processed huge volume of data for data analysis and decision making recommendations</li>
                        <li>We have used <span>Apache QuickSight </span>to visualize batch data stored in <span>AWS S3</span></li>
                        <li>Created dashboards using multiple technologies based on our NoSQL expertise
                            <ul>
                                <li><span>Elastic Search </span>is used for storing near real-time data from distributed IoT devices</li>
                                <li>User <span>Kibana </span>for visualizing the data analysis</li>
                            </ul>
                        </li>
                        <li>We have used Analytics Engines like Apache Spark to analyze huge volume of data exist in Elastic Map Reducer</li>
                    </ul>
            </div>
            <div class="col-sm-12 spacebtm animated" >
                <h2 class="text-left wow" style="visibility: visible;">IoT Expertise</h2>
                <p class="lead">Our primary goal is to collect IOT data from various sources and provide a customizable dashboard to visualize the progress in cloud.</p>
                <ul class="text-left lead">
                    <li><span>IOT devices can send and fetch data via AWS IOT which enables</span>
                        <ul>
                            <li>To connect devices to AWS Services and other devices</li>
                            <li>Secure data and interactions</li>
                            <li>Process and act upon device data</li>
                            <li>Enable applications to interact with devices even when they are offline</li>
                        </ul>
                    </li>
                </ul>
                <p class="lead">We are using <span>AWS Device Shadowing</span> to control IoT devices using Mobile application which helps us to set the required state even if the device is in offline state.
                Once IoT topic collects the data via <span>MQTT protocol</span>, it sends the data to <span>AWS Lambda</span> for processing inputs and communicate with other devices via different Topic.
            </div>
            <div class="col-sm-12 wow spacebtm animated" style="visibility: visible;">
                <h2 class="text-left wow" style="visibility: visible;">IoT Data & Analytics – Elastic Search</h2>
                <div class="col-sm-7">
                    <ul>
                        <li>Distributed analytics engine capable of parsing JSON data based on index mapping and retrieve data near real time. </li>
                        <li>Helps us to track any events occurring in any organization. </li> 
                        <li>Index per date has been created to track all events</li>
                        <li>It helps us to remove past index in a easy way instead of relaying on TTL feature</li>
                        <li>Use Kibana dashboard to represent the data in visual format.</li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <img src="img/logos/elastic.png" alt="Elastic" class="responsive">
                </div>
            </div>
            <div class="col-sm-12  wow spacebtm animated" style="visibility: visible;">
                <h2 class="text-left wow" style="visibility: visible;">IoT Data & Analytics</h2>
                <h3>Firehose Delivery Stream & Amazon QuickSight</h3>
                <div class="col-sm-6">
                    <p class="lead">Incoming data from the Firehose delivery stream is fed into an Analytics application that provides an easy way to process the data in real time using standard SQL queries.</p>
                </div>
                <div class="col-sm-6">
                    <p class="lead">Analytics allows writing standard SQL queries to extract specific components from the incoming data stream and perform real-time ETL on it which is loaded in Amazon QuickSight to create a monitoring dashboard and check if the devices are over-heating or cooling down during use</p>              
                </div>
            </div>
            <div class="col-sm-12 wow spacebtm animated" style="visibility: visible;">
                <div class="col-sm-6">
                    <p class="lead">Redirecting all IoT related data to S3 and doing analytics using Apache Spark via AWS Elastic MapReduce. This approach gives us a channel to do analysis of millions of records in an effective way. </p>
                </div>
                <div class="col-sm-6">
                    <p class="lead">It creates an avenue to do ML. </p>
                    <img src="img/mockups/logos1.png" alt="logos" class="responsive">
                </div>
            </div>
            <div class="col-sm-12  wow spacebtm animated" style="visibility: visible;">
                <h2 class="text-left wow" style="visibility: visible;">IoT Flow Chart</h2>
                <img src="img/1920x1080/flow.png" alt="flowchart" class="responsive">
            </div>
        </div>
    </div>
</body>

<?php
    include "footer.php";
?>
</html>