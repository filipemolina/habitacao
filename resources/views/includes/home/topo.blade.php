<!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-users"></i> Total de Inscritos</span>
            <div class="count">{{ $participantes->count() }}</div>
            <span class="count_bottom"><i class="dourado">4% </i> de aumento</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-wheelchair-alt"></i> Total de Deficientes</span>
            <div class="count">{{ $participantes->where('necessidades_especiais', 1)->count() }}</div>
            <span class="count_bottom"><i class="dourado"><i class="fa fa-sort-asc"></i>3% </i> de aumento</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-mars"></i> Total de Homens</span>
            <div class="count">{{ $participantes->where('sexo', 'Masculino')->count() }}</div>
            <span class="count_bottom"><i class="dourado"><i class="fa fa-sort-asc"></i>34% </i> de aumento</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-venus"></i> Total de Mulheres</span>
            <div class="count">{{ $participantes->where('sexo', 'Feminino')->count() }}</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> de redução</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-intersex"></i> Total de Outros</span>
            <div class="count">{{ $participantes->where('sexo', 'Outros')->count() }}</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> de redução</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-shopping-bag"></i> Insc. no Bolsa Família</span>
            <div class="count">{{ $participantes->where('bolsa_familia', 1)->count() }}</div>
            <span class="count_bottom"><i class="dourado"><i class="fa fa-sort-asc"></i>34% </i> de aumento</span>
        </div>
    </div>
<!-- /top tiles -->