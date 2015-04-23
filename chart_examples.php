<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 4/22/15
 * Time: 2:27 AM
 */

?>

<script src="js/chartjs/Chart.js">


</script>

<body>
<!-- line chart canvas element -->
<canvas id="buyers" width="1000" height="500"></canvas>
<!-- pie chart canvas element -->
<canvas id="countries" width="600" height="400"></canvas>
<!-- bar chart canvas element -->
<canvas id="income" width="600" height="400"></canvas>
<script>
    // line chart data
    var buyerData = {
        labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
        datasets : [
            {
                fillColor : "rgba(233,130,51,.35)", //orange
                strokeColor : "rgba(15,119,170,1)", //light blue
                pointColor : "rgba(9,53,90,.8)", //dark blue
                pointStrokeColor : "rgba(251,176,61,1)", //light orange
                data : [203,156,99,251,305,247,300,90,55,156,250,500]
            },
            {
                fillColor : "rgba(233,130,51,.35)", //orange
                strokeColor : "rgba(15,119,170,1)", //light blue
                pointColor : "rgba(9,53,90,.8)", //dark blue
                pointStrokeColor : "rgba(251,176,61,1)", //light orange
                data : [300,500,150,275,344,254,300,100,75,256,200,459]
            }
        ]

    }
    // get line chart canvas
    var buyers = document.getElementById('buyers').getContext('2d');
    // draw line chart
    new Chart(buyers).Line(buyerData,  {pointDotStrokeWidth : 1, pointDotRadius : 6, bezierCurveTension :.5,  scaleGridLineColor : "rgba(0,0,0,.15)"} );

    // pie chart data
    var pieData = [
        {
            value: 20,
            color:"#878BB6"
        },
        {
            value : 40,
            color : "#4ACAB4"
        },
        {
            value : 10,
            color : "#FF8153"
        },
        {
            value : 30,
            color : "#FFEA88"
        }
    ];
    // pie chart options
    var pieOptions = {
        segmentShowStroke : false,
        animateScale : true
    }
    // get pie chart canvas
    var countries= document.getElementById("countries").getContext("2d");
    // draw pie chart
    new Chart(countries).Pie(pieData, pieOptions);
    // bar chart data
    var barData = {
        labels : ["January","February","March","April","May","June"],
        datasets : [
            {
                fillColor : "#48A497",
                strokeColor : "#48A4D1",
                data : [456,479,324,569,702,600]
            },
            {
                fillColor : "rgba(73,188,170,0.4)",
                strokeColor : "rgba(72,174,209,0.4)",
                data : [364,504,605,400,345,320]
            }
        ]
    }
    // get bar chart canvas
    var income = document.getElementById("income").getContext("2d");
    // draw bar chart
    new Chart(income).Bar(barData);
</script>
</body>