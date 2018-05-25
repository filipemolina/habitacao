{{---------------------------------- Dependentes ------------------------------------}}

    <div class="x_panel modal-content" id="dependentes">
      
      <div class="x_title">
        
        <h2> Dependentes </h2>

        <ul class="nav navbar-right panel_toolbox">

          <li>
                <a class="remover" data-toggle="tooltip" title="Remover todos os dependentes"><i class="fa fa-times btn btn-pn-circulo btn-cor-perigo"></i></a>
          </li>
          
          <li>
            <a name="submit" value="clonar" data-toggle="tooltip" title="Adicionar dependente" class="clonar">
              <i class="fa fa-plus btn btn-pn-circulo btn-cor-padrao"></i>
            </a>
          </li>
          
          <li>
            <a class="collapse-link removezoom" data-toggle="tooltip" title="Reduzir / Expandir">
              <i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i>
            </a>
          </li>

        </ul>

        <div class="clearfix"></div>
      
      </div> {{-- FIM x_title --}}

      <div class="x_content">


        {{-- Diferente da página de criação, esse índice deve iniciar em 0, pois o próprio php irá --}}
        {{-- criar cada item e atualizar o contador --}}

        <?php $i = 0; ?>
          
        @forelse($pessoa->dependentes as $dependente)

            <div class="x_panel @if($i==0) panel_dependentes @else clone_dependentes @endif">
            
              {{-- Nome --}}
              <div class="form-group">
                <label class="col-md-1 control-label" for="dependentes[{{ $i }}][nome]">Nome</label>
                <div class="col-md-7">
                  <input value="{{ $dependente->nome }}" name="dependentes[{{ $i }}][nome]" id="dependentes[{{ $i }}][nome]" type="text" placeholder="Informe o nome" class="form-control input-md"><span class="obrigatorio">*</span>
                </div>

                <label class="col-md-1 control-label" for="dependentes.0.parentesco" data-toggle='tooltip' title="Parentesco">Parent.</label>
                <div class="col-md-2">
                  <select name="dependentes[{{ $i }}][parentesco]" id="dependentes[{{ $i }}][parentesco]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" >
                    <option value="" >Selecione...</option>
                    <option value="1"  @if($dependente->parentesco == "Avós")  selected="selected" @endif>Avô(ó)</option>
                    <option value="2"  @if($dependente->parentesco == "Bisavós")  selected="selected" @endif>Bisavô(ó)</option>
                    <option value="3"  @if($dependente->parentesco == "Bisneto(a)")  selected="selected" @endif>Bisneto(a)</option>
                    <option value="4"  @if($dependente->parentesco == "Companheiro(a)")  selected="selected" @endif>Companheiro(a)</option>
                    <option value="5"  @if($dependente->parentesco == "Cônjuge")  selected="selected" @endif>Cônjuge</option>
                    <option value="6"  @if($dependente->parentesco == "Enteado(a)")  selected="selected" @endif>Enteado(a)</option>
                    <option value="7"  @if($dependente->parentesco == "Ex-esposa")  selected="selected" @endif>Ex-esposa</option>
                    <option value="8"  @if($dependente->parentesco == "Filho(a)")  selected="selected" @endif>Filho(a)</option>
                    <option value="9"  @if($dependente->parentesco == "Irmão(ã)")  selected="selected" @endif>Irmão(ã)</option>
                    <option value="10" @if($dependente->parentesco == "Neto(a)") selected="selected" @endif>Neto(a)</option>
                    <option value="11" @if($dependente->parentesco == "Pais") selected="selected" @endif>Pais</option>
                    <option value="12" @if($dependente->parentesco == "Outras") selected="selected" @endif>Outras</option>
                  </select><span class="obrigatorio">*</span>
                </div>
              </div>
            
              {{-- Data de Nascimento, Sexo, Deficiente --}}
              <div class="form-group">

              {{-- Data de Nascimento --}}
              <label class="col-md-1 control-label" for="dependentes[{{ $i }}][nascimento]" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>  
              <div class="col-md-2">
                <input value="{{ $dependente->nascimento }}" name="dependentes[{{ $i }}][nascimento]" type="date" placeholder="01/01/2000" class="form-control input-md global-data"><span class="obrigatorio">*</span>
              </div>

              {{-- Sexo   --}}
              <label class="col-md-1 control-label" for="dependentes[{{ $i }}][sexo]">Sexo</label>
              <div class="col-md-2">
                <select name="dependentes[{{ $i }}][sexo]" id="dependentes[{{ $i }}][sexo]" type="text" placeholder="Sexo" class="form-control input-md" >
                  <option value="">Selecione...</option>
                  <option value="Masculino" @if($dependente->sexo == "Masculino") selected="selected" @endif>Masculino</option>
                  <option value="Feminino" @if($dependente->sexo == "Feminino") selected="selected" @endif>Feminino</option>
                  <option value="Outros" @if($dependente->sexo == "Outros") selected="selected" @endif>Outros</option>
                </select><span class="obrigatorio">*</span>
              </div>

              {{-- Deficiente --}}
              <label class="col-md-1 control-label" for="dependentes[{{ $i }}][necessidades_especiais]" data-toggle="tooltip" title="Portador de necessidade especial">Deficiente</label>
              <div class="col-md-2">
                <select name="dependentes[{{ $i }}][necessidades_especiais]" id="dependentes[{{ $i }}][necessidades_especiais]" type="text" placeholder="Necessidades Especiais" class="form-control pne_dependentes input-md" >
                  <option value=""  @if(!$dependente->necessidades_especiais) selected @endif>Selecione...</option>
                  <option value="1" @if($dependente->necessidades_especiais == "1") selected="selected" @endif>Sim</option>
                  <option value="0" @if($dependente->necessidades_especiais == "0") selected="selected" @endif>Não</option>
                </select><span class="obrigatorio">*</span>
              </div>

              <div class="col-md-2">

              <select name="dependentes[{{ $i }}][tipo_deficiencia]" type="text" class="form-control tipo_deficiencia input-md" disabled><span class="obrigatorio">*</span>
                <option value="" 
                    @if(is_null($dependente->tipo_deficiencia))
                       disabled selected 
                    @endif>Tipos...
                </option>

                <option value="Microcefalia" 
                    @if($dependente->tipo_deficiencia == "Microcefalia") 
                        selected="selected" 
                    @endif>Microcefalia
                </option>

                <option value="Deficiência Física" 
                    @if($dependente->tipo_deficiencia == "Deficiência Física") 
                        selected="selected" 
                    @endif>Física
                </option>

                <option value="Deficiência Auditiva" 
                    @if($dependente->tipo_deficiencia == "Deficiência Auditiva") 
                        selected="selected" 
                    @endif>Auditiva
                </option>

                <option value="Deficiência Visual" 
                    @if($dependente->tipo_deficiencia == "Deficiência Visual") 
                        selected="selected" 
                    @endif>Visual
                </option>

                <option value="Deficiência Mental" 
                    @if($dependente->tipo_deficiencia == "Deficiência Mental") 
                        selected="selected" 
                    @endif>Mental
                </option>

                <option value="Deficiência Mùltipla" 
                    @if($dependente->tipo_deficiencia == "Deficiência Mùltipla") 
                        selected="selected" 
                    @endif>Mùltipla
                </option>             

              </select>
            </div>
            
            </div>  {{-- FIM Data de Nascimento, Sexo, Deficiente --}}
                
            <div class="col-md-11"></div>
            <button name="submit" value="excluir" data-toggle="tooltip" title="Remover dependente" class="btn btn-pn-circulo btn-cor-perigo excluir" selected><i class="fa fa-times"></i></button>

            </div> {{-- FIM panel_dependentes --}}

            <?php $i++; ?>

        @empty

            <div class="x_panel panel_dependentes ">
        
              {{-- Nome --}}
              <div class="form-group">
                <label class="col-md-1 control-label" for="dependentes[0][nome]">Nome</label>
                <div class="col-md-8">
                  <input value="" name="dependentes[0][nome]" id="dependentes[0][nome]" type="text" placeholder="Informe o nome" class="form-control input-md" >
                </div>

                <label class="col-md-1 control-label" for="dependentes.0.parentesco">Parentesco</label>
                <div class="col-md-2">
                  <select name="dependentes[0][parentesco]" id="dependentes[0][parentesco]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" >
                    <option value="">Selecione...</option>
                    <option value="1" >Avô(ó)</option>
                    <option value="2" >Bisavô(ó)</option>
                    <option value="3" >Bisneto(a)</option>
                    <option value="4" >Companheiro(a)</option>
                    <option value="5" >Cônjuge</option>
                    <option value="6" >Enteado(a)</option>
                    <option value="7" >Ex-esposa</option>
                    <option value="8" >Filho(a)</option>
                    <option value="9" >Irmão(ã)</option>
                    <option value="10">Neto(a)</option>
                    <option value="11">Pais</option>
                    <option value="12">Outras</option>
                  </select>
                </div>
              </div>
            
              {{-- Data de Nascimento, Sexo, Deficiente --}}
              <div class="form-group">

              {{-- Data de Nascimento --}}
              <label class="col-md-1 control-label" for="dependentes[0][nascimento]">Nascimento</label>  
              <div class="col-md-2">
                <input value="" name="dependentes[0][nascimento]" type="date" placeholder="01/01/2000" class="form-control input-md global_data" >
              </div>

              {{-- Sexo   --}}
              <label class="col-md-1 control-label" for="dependentes[0][sexo]">Sexo</label>
              <div class="col-md-2">
                <select name="dependentes[0][sexo]" id="dependentes[0][sexo]" type="text" placeholder="Sexo" class="form-control input-md" >
                  <option value="">Selecione...</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                  <option value="Outros">Outros</option>
                </select>
              </div>

              {{-- Deficiente --}}
              <label class="col-md-1 control-label" for="dependentes[0][necessidades_especiais]">Deficiente</label>
              <div class="col-md-2">
                <select name="dependentes[0][necessidades_especiais]" id="dependentes[0][necessidades_especiais]" type="text" placeholder="Necessidades Especiais" class="form-control pne_dependentes input-md" >
                  <option value="">Selecione...</option>
                  <option value="1">Sim</option>
                  <option value="0">Não</option>
                </select>
              </div>

              <div class="col-md-2">

                <select name="dependentes[0][tipo_deficiencia]" type="text" class="form-control tipo_deficiencia input-md" ><span class="obrigatorio">*</span>
                  
                    <option value="">Tipos...</option>
                    <option value="Microcefalia">Microcefalia</option>
                    <option value="Deficiência Física">Física</option>
                    <option value="Deficiência Auditiva">Auditiva</option>
                    <option value="Deficiência Visual">Visual</option>
                    <option value="Deficiência Mental">Mental</option>
                    <option value="Deficiência Mùltipla">Múltipla</option>             

                </select>
              </div>
            
            </div>  {{-- FIM Data de Nascimento, Sexo, Deficiente --}}
              
            <div class="col-md-11"></div>
            <button name="submit" value="excluir" data-toggle="tooltip" title="Remover dependente" class="btn btn-pn-circulo btn-cor-perigo excluir" selected style="display:none;"><i class="fa fa-times"></i></button>

          </div> {{-- FIM panel_dependentes --}}

        @endforelse

        <div class="div-clone"></div> {{-- Clonagem da div panel_dependentes --}}

      </div>  {{-- Fim x_content --}}

    </div> {{-- FIM Dependentes  --}}