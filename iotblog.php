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
    <?php
        include "nav.php";
    ?>
      <!--========== PROMO BLOCK ==========-->
      <img src="img/1920x1080/IoT-Graphic.jpg" class="img-responsive res">
    <!--========== END PROMO BLOCK ==========-->
    <div class="container blogpad">
        <div class="">
            <h2 class="text-left wow spacebtm animated" style="visibility: visible;">Minuscule’s IoT Projects</h2>
            <div class="col-sm-12 wow spacebtm animated" style="visibility: visible;">
                    <ul class="text-left lead">
                        <li class="fontSizeChange">Setup IoT devices in geographically distributed locations and started gathering data through cloud</li>
                        <li class="fontSizeChange">Processed huge volume of data for data analysis and decision making recommendations</li>
                        <li class="fontSizeChange">We have used <span>Apache QuickSight </span>to visualize batch data stored in <span>AWS S3</span></li>
                        <li class="fontSizeChange">Created dashboards using multiple technologies based on our NoSQL expertise
                            <ul>
                                <li class="fontSizeChange"><span>Elastic Search </span>is used for storing near real-time data from distributed IoT devices</li>
                                <li class="fontSizeChange">User <span>Kibana </span>for visualizing the data analysis</li>
                            </ul>
                        </li>
                        <li class="fontSizeChange">We have used Analytics Engines like Apache Spark to analyze huge volume of data exist in Elastic Map Reducer</li>
                    </ul>
            </div>
            <div class="col-sm-12 spacebtm animated" >
                <h2 class="text-left wow" style="visibility: visible;">IoT Expertise</h2>
                <p class="lead fontSizeChange">Our primary goal is to collect IOT data from various sources and provide a customizable dashboard to visualize the progress in cloud.</p>
                <ul class="text-left lead">
                    <li class="fontSizeChange"><span>IOT devices can send and fetch data via AWS IOT which enables</span>
                        <ul>
                            <li class="fontSizeChange">To connect devices to AWS Services and other devices</li>
                            <li class="fontSizeChange">Secure data and interactions</li>
                            <li class="fontSizeChange">Process and act upon device data</li>
                            <li class="fontSizeChange">Enable applications to interact with devices even when they are offline</li>
                        </ul>
                    </li>
                </ul>
                <p class="lead fontSizeChange">We are using <span>AWS Device Shadowing</span> to control IoT devices using Mobile application which helps us to set the required state even if the device is in offline state.
                Once IoT topic collects the data via <span>MQTT protocol</span>, it sends the data to <span>AWS Lambda</span> for processing inputs and communicate with other devices via different Topic.
            </div>
            <div class="col-sm-12 wow spacebtm animated" style="visibility: visible;">
                <h2 class="text-left wow" style="visibility: visible;">IoT Data & Analytics – Elastic Search</h2>
                <div class="col-sm-7">
                    <ul>
                        <li class="fontSizeChange">Distributed analytics engine capable of parsing JSON data based on index mapping and retrieve data near real time. </li>
                        <li class="fontSizeChange">Helps us to track any events occurring in any organization. </li> 
                        <li class="fontSizeChange">Index per date has been created to track all events</li>
                        <li class="fontSizeChange">It helps us to remove past index in a easy way instead of relaying on TTL feature</li>
                        <li class="fontSizeChange">Use Kibana dashboard to represent the data in visual format.</li>
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
                    <p class="lead fontSizeChange">Incoming data from the Firehose delivery stream is fed into an Analytics application that provides an easy way to process the data in real time using standard SQL queries.</p>
                </div>
                <div class="col-sm-6">
                    <p class="lead fontSizeChange">Analytics allows writing standard SQL queries to extract specific components from the incoming data stream and perform real-time ETL on it which is loaded in Amazon QuickSight to create a monitoring dashboard and check if the devices are over-heating or cooling down during use</p>              
                </div>
            </div>
            <div class="col-sm-12 wow spacebtm animated" style="visibility: visible;">
                <div class="col-sm-6">
                    <p class="lead fontSizeChange">Redirecting all IoT related data to S3 and doing analytics using Apache Spark via AWS Elastic MapReduce. This approach gives us a channel to do analysis of millions of records in an effective way. </p>
                </div>
                <div class="col-sm-6">
                    <p class="lead fontSizeChange">It creates an avenue to do ML. </p>
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