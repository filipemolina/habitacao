{{------------------------------------------ Renda ------------------------------------------}}

    <div class="x_panel modal-content" id="renda-familiar">
      {{-- <div class="x_title"> Renda familiar e tempo de residência em Mesquita </div> --}}
      <div class="x_title">
        
        <h2> Informações Adicionais </h2>

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
          <label class="col-md-1 control-label" for="renda_familiar">Renda</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->renda_familiar }}" id="renda_familiar" name="renda_familiar" type="text" placeholder="R$ 99.999,99" data-inputmask="'mask': 'R$ 99.999,99', 'numericInput': true" class="form-control input-md cash"><span class="obrigatorio">*</span>
          </div>

          {{-- Faixa--}}
          <label class="col-md-1 control-label" for="faixa">Faixa</label>
          <div class="col-md-2">
            <input value="" id="faixa" name="faixa" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
          </div>

          {{-- Código da Inscrição --}}
          <label class="col-md-2 control-label" for="codigo_inscricao">Código da Inscrição</label>
          <div class="col-md-2">
            <input value="{{ old('codigo_inscricao') }}" id="codigo_inscricao" name="codigo_inscricao" type="text" class="form-control input-md" disabled selected>
          </div>

        </div> {{-- FIM Renda Familiar e Faixa --}}
        
        {{-- Tempo de residência --}}
        <div class="form-group">

          {{-- Tempo de residência --}}
          <label class="col-md-1 control-label" for="inicio-residencia">Início</label>
          <div class="col-md-2">
            <input value="{{ $pessoa->tempo_residencia }}" id="inicio-residencia" name="inicio-residencia" type="date" placeholder="01 / 01 / 2000" class="form-control input-md global_data"><span class="obrigatorio">*</span>
          </div>

          {{-- Faixa--}}
          <label class="col-md-1 control-label" for="periodo">Período</label>
          <div class="col-md-2">
            <input value="" id="periodo" name="periodo" type="text" placeholder="Classificação" class="form-control input-md" disabled selected style>
          </div>

        </div> {{-- Tempo de residência --}}

      </div> {{-- FIM x_content --}}


    </div> {{-- FIM renda-familiar --}}

    </br>