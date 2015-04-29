<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 4/26/15
 * Time: 7:26 PM
 */
?>

<html>
<script src="js/chartjs/Chart.js">


</script>
<body>
<!-- line chart canvases -->
<input type="button" value="toggle" onclick="hide()">
<canvas id="buyers" width="1000" height="500" style="position:absolute; float: left;"></canvas>
<canvas id="buyers2" width="1000" height="500" style="visibility: hidden; position: absolute; float: left;"></canvas>
<script>
    // line chart1 data
    var buyerData = {
        labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
        datasets : [
            {
                fillColor : "rgba(233,130,51,.35)", //orange
                strokeColor : "rgba(15,119,170,1)", //light blue
                pointColor : "rgba(9,53,90,.8)", //dark blue
                pointStrokeColor : "rgba(251,176,61,1)", //light orange
                data : [203,156,99,251,305,247,300,90,55,156,250,500]
            }
        ]

    }
    // get line chart canvas
    var buyers = document.getElementById('buyers').getContext('2d');
    // draw line chart
    new Chart(buyers).Line(buyerData,  {pointDotStrokeWidth : 1, pointDotRadius : 6, bezierCurveTension :.5,  scaleGridLineColor : "rgba(0,0,0,.15)"} );

    // avg line chart data
    var buyerData2 = {
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
    var buyers2 = document.getElementById('buyers2').getContext('2d');
    // draw line chart
    new Chart(buyers2).Line(buyerData2,  {pointDotStrokeWidth : 1, pointDotRadius : 6, bezierCurveTension :.5,  scaleGridLineColor : "rgba(0,0,0,.15)"} );

    //hiding function
    function hide(){
            if (document.getElementById('buyers').style.visibility == "hidden") {
                document.getElementById('buyers').style.visibility = "visible";
            }
            else{
                document.getElementById('buyers').style.visibility = "hidden";
            }
        if (document.getElementById('buyers2').style.visibility == "hidden") {
            document.getElementById('buyers2').style.visibility = "visible";
        }
        else{
            document.getElementById('buyers2').style.visibility = "hidden";
        }


        }

    </script>

    </body>
</html>