<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel tile fixed_height_320">
        <div class="x_title">
            <h2>Dependentes</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-eye"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <h4>Quantidade de Dependentes por Inscrito</h4>
            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>Sem Dependentes</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-padrao" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $dependentes[0][0] }}%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>{{ $dependentes[0][1] }}</span>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>1 Dependente</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-padrao" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $dependentes[1][0] }}%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>{{ $dependentes[1][1] }}</span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>2 Dependentes</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-padrao" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $dependentes[2][0] }}%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>{{ $dependentes[2][1] }}</span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>3 Dependentes</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-padrao" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $dependentes[3][0] }}%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>{{ $dependentes[3][1] }}</span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>Mais de 3 Dependentes</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-padrao" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $dependentes[4][0] }}%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>{{ $dependentes[4][1] }}</span>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>