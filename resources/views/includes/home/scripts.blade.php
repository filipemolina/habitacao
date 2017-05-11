<script>

    $(document).ready(function() {

        /////////////////////////// Flot

        //******* 2012 Average Temperature - BAR CHART
        var data = [[0, 11],[1, 15],[2, 25],[3, 24],[4, 13],[5, 18]];
        var data2 = [[0, 6],[1, 25],[2, 10],[3, 30],[4, 2],[5, 38]];
        var dataset = [
            { 
                data: data, 
                color: "#3D276B" 
            },
            {
                data: data2,
                color: "#DBCCAA"
            }
        ];
        var ticks = [[0, "01 de Maio"], [1, "29 de Abril"], [2, "22 de Abril"], [3, "15 de Abril"],[4, "08 de Abril"], [5, "01 de Abril"]];

        var options = {
            series: {
                bars: {
                    show: false
                }, 
                lines: {
                    fill: true,
                    show: false
                },
                splines: {
                    show: true,
                    fill: true,
                    tension: 0.4
                }
            },
            bars: {
                align: "center",
                barWidth: 0.9
            },
            xaxis: {
                axisLabel: "Datas",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10,
                ticks: ticks
            },
            yaxis: {
                axisLabel: "Inscrições",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 3,
                tickFormatter: function (v, axis) {
                    return v;
                }
            },
            legend: {
                noColumns: 0,
                labelBoxBorderColor: "#000000",
                position: "nw"
            },
            grid: {
                hoverable: true,
                borderWidth: 0,
                backgroundColor: { colors: ["#ffffff", "#EDF5FF"] }
            }
        };

        $.plot($("#canvas_dahs"), dataset, options);

        function gd(year, month, day) {
            return new Date(year, month, day).getTime();
        }

        var previousPoint = null, previousLabel = null;

        $.fn.UseTooltip = function () {
            $(this).bind("plothover", function (event, pos, item) {
                if (item) {
                    if ((previousLabel != item.series.label) || (previousPoint != item.dataIndex)) {
                        previousPoint = item.dataIndex;
                        previousLabel = item.series.label;
                        $("#tooltip").remove();

                        var x = item.datapoint[0];
                        var y = item.datapoint[1];

                        var color = item.series.color;

        //console.log(item.series.xaxis.ticks[x].label);                

        showTooltip(item.pageX,
            item.pageY,
            color,
            "<strong>" + item.series.label + "</strong><br>" + item.series.xaxis.ticks[x].label + " : <strong>" + y + "</strong> °C");
        }
        } else {
            $("#tooltip").remove();
            previousPoint = null;
        }
        });
        };

        function showTooltip(x, y, color, contents) {
            $('<div id="tooltip">' + contents + '</div>').css({
                position: 'absolute',
                display: 'none',
                top: y - 40,
                left: x - 120,
                border: '2px solid ' + color,
                padding: '3px',
                'font-size': '9px',
                'border-radius': '5px',
                'background-color': '#fff',
                'font-family': 'Verdana, Arial, Helvetica, Tahoma, sans-serif',
                opacity: 0.9
            }).appendTo("body").fadeIn(200);
        }

        $("#canvas_dahs").UseTooltip();
        
        /////////////////////////// Flot

        /////////////////////////// Donut

        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Santa Terezinha",
              "Chatuba",
              "Jacutinga",
              "Juscelino",
              "Centro"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });

        /////////////////////////// Donut

    });
</script>