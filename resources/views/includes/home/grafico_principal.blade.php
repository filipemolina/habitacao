<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="dashboard_graph x_panel">

        {{---------------------------------- Gráfico Principal ----------------------------------}}

        <div class="row x_title">
            <div class="col-md-6">
                <h3>Inscrições <small> Separadas por gênero</small></h3>
            </div>

            <ul class="nav navbar-right panel_toolbox">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle relatorio" data-ordem="sexo" role="button" aria-expanded="false"><i class="fa fa-eye" style="color: #3D276B"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="col-md-9 col-sm-9 col-xs-12">
            <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
            <div style="width: 100%;">
                <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
            </div>
        </div>

        {{---------------------------------- Faixas de Inscrição ----------------------------------}}

        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="x_title">
                <h2>Faixas de Inscrição</h2>
                <div class="clearfix"></div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-6">
                <div>
                    <p>Faixa 1 <span class="pequeno">(Até R$ 1.800,00)</span></p>
                    <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                            <div class="progress-bar bg-padrao" role="progressbar" data-transitiongoal="{{ $faixas["1"] or 0 }}"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Faixa 1,5 <span class="pequeno">(De R$ 1.800,01 até R$ 2.600,00)</span></p>
                    <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                            <div class="progress-bar bg-padrao" role="progressbar" data-transitiongoal="{{ $faixas["15"] or 0 }}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-6">
                <div>
                    <p>Faixa 2 <span class="pequeno">(De R$ 2.600,01 até R$ 4.000,00)</span></p>
                    <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                            <div class="progress-bar bg-padrao" role="progressbar" data-transitiongoal="{{ $faixas["2"] or 0}}"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Faixa 3 <span class="pequeno">(De R$ 4.000,01 até R$ 9.000,00)</span></p>
                    <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                            <div class="progress-bar bg-padrao" role="progressbar" data-transitiongoal="{{ $faixas["3"] or 0 }}"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="clearfix"></div>
    </div>
</div>