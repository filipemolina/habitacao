<script>

    $(document).ready(function() {

        /////////////////////////// Flot

        var data = [
            @foreach($grafico as $indice => $posicao)
                [{{ $indice }}, {{ $posicao['Masculinos'][0] }}],
            @endforeach
        ];
        var data2 = [
            @foreach($grafico as $indice => $posicao)
                [{{ $indice }}, {{ $posicao['Femininos'][0] }}],
            @endforeach
        ];
        var data3 = [
            @foreach($grafico as $indice => $posicao)
                [{{ $indice }}, {{ $posicao['Outros'][0] }}],
            @endforeach
        ];
        var dataset = [
            { 
                data: data, 
                label: "&nbsp;Homens&nbsp;&nbsp;&nbsp;&nbsp;",
                color: "#3498DB",
                bars : {
                    order: 1,
                    barWidth: 0.25,
                    align: "left",
                }
            },
            {
                data: data2,
                label: "&nbsp;Mulheres&nbsp;&nbsp;&nbsp;&nbsp;",
                color: "#DBCCAA",
                bars : {
                    order: 2,
                    barWidth: 0.25,
                    align: "left",
                }
            },
            { 
                data: data3, 
                label: "&nbsp;Outros&nbsp;&nbsp;&nbsp;&nbsp;",
                color: "#CCCCCC",
                bars : {
                    order: 3,
                    barWidth: 0.25,
                    align: "left",
                }
            },
        ];
        var ticks = [
            @foreach($grafico as $indice => $posicao)
                [{{ $indice }}, "{{ $posicao['Masculinos'][1]->format('d/m/Y') }}"], 
            @endforeach
        ];

        var options = {
            series: {
                bars: {
                    show: true
                }, 
                lines: {
                    fill: true,
                    show: false
                },
                splines: {
                    show: false,
                    fill: true,
                    tension: 0,
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
              @foreach($bairros as $bairro => $value)

                "{{ $bairro }}",

              @endforeach
            ],
            datasets: [{
              data: [
                @foreach($bairros as $bairro)

                    "{{ $bairro[0] }}",

                @endforeach
                ],
              backgroundColor: [
                @foreach($bairros as $bairro => $valores)

                    "{{ $valores[2] }}",

                @endforeach
              ],
            }]
          },
          options: options
        });

        /////////////////////////// Donut

        /////////////////////////// Chamada dos relatórios

        $("a.relatorio").click(function(e){

            e.preventDefault();

            var ordem = $(this).data('ordem');
            var cabecalhos = [];

            // Montar os cabeçalhos de acordo com o relatório

            if(ordem == 'sexo')
                cabecalhos = [
                    {
                        tipo : 'nome',
                        titulo : "Nome",
                    },
                    {
                        tipo : 'idade',
                        titulo : "Idade",
                    },
                    { 
                        tipo : 'sexo',
                        titulo : "Sexo",
                    },
                    { 
                        tipo: 'cpf',
                        titulo : "CPF",
                    },
                    { 
                        tipo : 'telefone_fixo',
                        titulo : "Telefone Fixo",
                    }
                ];

            if(ordem == 'dependentes')
                cabecalhos = [
                    {
                        tipo : 'nome',
                        titulo : "Nome",
                    },
                    {
                        tipo : 'idade',
                        titulo : "Idade",
                    },
                    { 
                        tipo : 'sexo',
                        titulo : "Sexo",
                    },
                    { 
                        tipo: 'cpf',
                        titulo : "CPF",
                    },
                    { 
                        tipo : 'dependentes',
                        titulo : "Dependentes",
                    }, 
                    {
                        tipo : 'telefone_fixo',
                        titulo : 'Telefone Fixo',
                    }
                ];

            if(ordem == 'bairro')
                cabecalhos = [
                    {
                        tipo : 'nome',
                        titulo : "Nome",
                    },
                    {
                        tipo : 'idade',
                        titulo : "Idade",
                    },
                    { 
                        tipo : 'sexo',
                        titulo : "Sexo",
                    },
                    { 
                        tipo: 'cpf',
                        titulo : "CPF",
                    },
                    { 
                        tipo : 'bairro',
                        titulo : "Bairro",
                    },
                    { 
                        tipo :'telefone_fixo',
                        titulo : "Telefone Fixo",
                    }
                ];

            // Colocar a ordem escolhida no formulário

            $("input#ordem").val(ordem);

            // Colocar todos os cabeçalhos no relatório

            for (var i = 0; i < cabecalhos.length; i++) {
                
                var input = $("<input>")
                    .attr('type', 'hidden')
                    .attr('name', 'cabecalhos['+cabecalhos[i].tipo+']')
                    .val(cabecalhos[i].titulo);

                $("form#form-relatorios-ajax").append($(input));
            }

            $("form#form-relatorios-ajax").submit();

        });

    });
</script>