<html>
    <head>
        <script type="text/javascript">
            window.onload = function () {
                var dataLength = 0;
                var data = [];
                var updateInterval = 500;
                updateChart();
            
                var chart = new CanvasJS.Chart("chart", {
                    title: {
                        text: "Nodes"
                    },
                    axisX: {
                        title: "X",
                    },
                    axisY: {
                        title: "Y",
                    },
                    data: [{type: "line", dataPoints: data}],
                });
                
            function updateChart() {
                    $.getJSON("data.php", function (result) {
                        if (dataLength !== result.length) {
                            for (var i = dataLength; i < result.length; i++) {
                                data.push({
                                    x: parseInt(result[i].x),
                                    y: parseInt(result[i].y)
                                });
                            }
                            dataLength = result.length;
                            chart.render();
                        }
                    });
                }
            
        
                setInterval(function () {
                    updateChart()
                }, updateInterval);
            }
        </script>
        <script type="text/javascript" src="assets/script/canvasjs.min.js"></script>
        <script type="text/javascript" src="assets/script/jquery-2.2.3.min.js"></script>
    </head>
    <body>
        <div id="chart" style="width: 500px;height: 300px;">
        </div>



    </body>
</html>