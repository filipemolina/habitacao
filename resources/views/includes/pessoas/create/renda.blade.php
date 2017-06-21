{{------------------------------------------ Renda ------------------------------------------}}

    <div class="x_panel modal-content" id="renda-familiar">
      {{-- <div class="x_title"> Renda familiar e tempo de residência em Mesquita </div> --}}
      <div class="x_title"> 

        <h2>Informações Adicionais</h2>
        
        <ul class="nav navbar-right panel_toolbox">
            
              <li>
                <a class="collapse-link" data-toggle="tooltip" title="Reduzir / Expandir"><i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i></a>
              </li>

            </ul>

        <div class="clearfix"></div>


      </div>
      
      <div class="x_content">

        {{-- Renda Familiar, Tempo de residência e Faixa --}}
        <div class="form-group">

          {{-- Renda Familiar --}}
          <label class="col-md-1 control-label" for="renda_familiar" data-toggle="tooltip" title="Renda familiar total">Renda</label>
          <div class="col-md-2">
            <input value="{{ old('renda_familiar') }}" id="renda_familiar" name="renda_familiar" type="text" placeholder="R$ 99.999,99" data-inputmask="'mask': 'R$ 99.999,99', 'numericInput' : true" class="form-control input-md cash"><span class="obrigatorio">*</span>
          </div>

          {{-- Faixa--}}
          <label class="col-md-1 control-label" for="faixa">Faixa</label>
          <div class="col-md-2">
            <input value="{{ old('faixa') }}" id="faixa" name="faixa" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
          </div>

          {{-- Código da Inscrição --}}
          <label class="col-md-2 control-label" for="codigo_inscricao">Código da Inscrição</label>
          <div class="col-md-2">
            <input value="{{ old('codigo_inscricao') }}" id="codigo_inscricao" name="codigo_inscricao" type="text" class="form-control input-md">
          </div>

        </div> {{-- FIM Renda Familiar e Faixa --}}
        
        {{-- Tempo de residência --}}
        <label class="col-md-1 control-label" for="inicio-residencia" data-toggle="tooltip" title="Data de moradia inicial">Início</label>
        <div class="col-md-2">
          <input value="{{ old('tempo_residencia') }}" id="inicio-residencia" name="tempo_residencia" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global_data" > <span class="obrigatorio">*</span>
        </div>

        {{-- Período--}}
        <label class="col-md-1 control-label" for="periodo" data-toggle="title" title="Tempo de moradia em Mesquita">Período</label>
        <div class="col-md-2">
          <input value="{{ old('periodo') }}" id="periodo" name="periodo" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
        </div>

        {{-- Bairro Preferencial--}}
        <label class="col-md-2 control-label" for="bairro_preferencial" data-toggle="title" title="Tempo de moradia em Mesquita">Bairro Preferencial</label>
        <div class="col-md-2">
          <input value="{{ old('bairro_preferencial') }}" id="bairro_preferencial" name="bairro_preferencial" type="text" class="form-control input-md">
        </div>
      </div> {{-- FIM x_content --}}

  </div>

</br>