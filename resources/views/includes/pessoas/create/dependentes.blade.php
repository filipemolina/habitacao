{{------------------------------------------ Dependentes ----------------------------------------}}
         
    <div class="x_panel modal-content" id="dependentes">
      
      <div class="x_title">
        
        <h2> Dependentes </h2>

        <ul class="nav navbar-right panel_toolbox">

          <li>
            <a class="collapse-link" data-toggle="tooltip" title="Reduzir / Expandir"><i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i></a>
          </li>

          <li>
            <a name="submit" value="clonar" data-toggle="tooltip" title="Adicionar dependente" class="clonar">
              <i class="fa fa-plus btn btn-pn-circulo btn-cor-padrao"></i>
            </a>
          </li>

        </ul>

        <div class="clearfix"></div>

      </div>
      
      <div class="x_content">
        
        <div class="x_panel panel_dependentes">
      
          {{-- Nome --}}
          <div class="form-group">
            <label class="col-md-1 control-label" for="dependentes[0][nome]">Nome</label>
            
            <div class="col-md-7">
              <input value="{{ old('dependentes.0.nome') }}" name="dependentes[0][nome]" id="dependentes[0][nome]" type="text" placeholder="Informe o nome" class="form-control input-md"><span class="obrigatorio">*</span>
            
            </div>

            <label class="col-md-1 control-label" for="dependentes.0.parentesco" data-toggle="tooltip" title="Parentesco">Parent.</label>

            <div class="col-md-2">
              <select name="dependentes[0][parentesco]" id="dependentes[0][parentesco]" type="text" placeholder="Necessidades Especiais" class="form-control input-md" > <span class="obrigatorio">*</span>
                <option value="" disabled @if(!old('dependentes.0.parentesco')) selected @endif>Selecione...</option>
                <option value="1" @if(old('dependentes.0.parentesco') == "1") selected="selected" @endif>Avô(ó)</option>
                <option value="2" @if(old('dependentes.0.parentesco') == "2") selected="selected" @endif>Bisavô(ó)</option>
                <option value="3" @if(old('dependentes.0.parentesco') == "3") selected="selected" @endif>Bisneto(a)</option>
                <option value="4" @if(old('dependentes.0.parentesco') == "4") selected="selected" @endif>Companheiro(a)</option>
                <option value="5" @if(old('dependentes.0.parentesco') == "5") selected="selected" @endif>Cônjuge</option>
                <option value="6" @if(old('dependentes.0.parentesco') == "6") selected="selected" @endif>Enteado(a)</option>
                <option value="7" @if(old('dependentes.0.parentesco') == "7") selected="selected" @endif>Ex-esposa</option>
                <option value="8" @if(old('dependentes.0.parentesco') == "8") selected="selected" @endif>Filho(a)</option>
                <option value="9" @if(old('dependentes.0.parentesco') == "9") selected="selected" @endif>Irmão(ã)</option>
                <option value="10" @if(old('dependentes.0.parentesco') == "10") selected="selected" @endif>Neto(a)</option>
                <option value="11" @if(old('dependentes.0.parentesco') == "11") selected="selected" @endif>Pais</option>
                <option value="12" @if(old('dependentes.0.parentesco') == "12") selected="selected" @endif>Outras</option>
              
              </select><span class="obrigatorio">*</span>
            </div>
          </div>
        
          {{-- Data de Nascimento, Sexo, Necesidades Especias --}}
          <div class="form-group">

          {{-- Data de Nascimento --}}
          <label class="col-md-1 control-label" for="dependentes[0][nascimento]" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>  
          <div class="col-md-2">
            <input value="{{ old('dependentes.0.nascimento') }}" name="dependentes[0][nascimento]" type="date" placeholder="01/01/2000" class="form-control input-md global_data" > <span class="obrigatorio">*</span>
          </div>

          {{-- Sexo   --}}
          <label class="col-md-1 control-label" for="dependentes[0][sexo]">Sexo</label>
          <div class="col-md-2">
            <select name="dependentes[0][sexo]" id="dependentes[0][sexo]" type="text" placeholder="Sexo" class="form-control input-md">
              <option value="" disabled @if(!old('dependentes.0.sexo')) selected @endif>Selecione...</option>
              <option value="Masculino" @if(old('dependentes.0.sexo') == "Masculino") selected="selected" @endif>Masculino</option>
              <option value="Feminino" @if(old('dependentes.0.sexo') == "Feminino") selected="selected" @endif>Feminino</option>
              <option value="Outros" @if(old('dependentes.0.sexo') == "Outros") selected="selected" @endif>Outros</option>
            </select><span class="obrigatorio">*</span>
          </div>

          {{-- Necessidades especias --}}

          <label class="col-md-1 control-label" for="dependentes[0][necessidades_especiais]" data-toggle="tooltip" title="Portador de necessidade especial">Deficiente</label>
            <div class="col-md-2">
              <select name="dependentes[0][necessidades_especiais]" type="text" class="form-control pne_dependentes input-md" >
                <option value="" disabled selected @if(!old('dependentes.0.necessidades_especiais')) selected @endif>Selecione...</option>
                <option value="1" @if(old('dependentes.0.necessidades_especiais') == "1") selected="selected" @endif>Sim</option>
                <option value="0" @if(old('dependentes.0.necessidades_especiais') == "0") selected="selected" @endif>Não</option>
              </select><span class="obrigatorio">*</span>
            </div>

            <div class="col-md-2">

              <select name="dependentes[0][tipo_deficiencia]" type="text" class="form-control tipo_deficiencia input-md" ><span class="obrigatorio">*</span>
                <option value="" 
                    @if(!old('dependentes.0.tipo_deficiencia')) 
                        disabled selected 
                    @endif>Tipos...
                </option>

                <option value="Microcefalia" 
                    @if(old('dependentes.0.tipo_deficiencia') == "Microcefalia") 
                        selected="selected" 
                    @endif>Microcefalia
                </option>

                <option value="Deficiência Física" 
                    @if(old('dependentes.0.tipo_deficiencia') == "Deficiência Física") 
                        selected="selected" 
                    @endif>Física
                </option>

                <option value="Deficiência Auditiva" 
                    @if(old('dependentes.0.tipo_deficiencia') == "Deficiência Auditiva") 
                        selected="selected" 
                    @endif>Auditiva
                </option>

                <option value="Deficiência Visual" 
                    @if(old('dependentes.0.tipo_deficiencia') == "Deficiência Visual") 
                        selected="selected" 
                    @endif>Visual
                </option>

                <option value="Deficiência Mental" 
                    @if(old('dependentes.0.tipo_deficiencia') == "Deficiência Mental") 
                        selected="selected" 
                    @endif>Mental
                </option>

                <option value="Deficiência Mùltipla" 
                    @if(old('dependentes.0.tipo_deficiencia') == "Deficiência Mùltipla") 
                        selected="selected" 
                    @endif>Mùltipla
                </option>             

              </select>
            </div>
        </div> {{-- FIM Data de Nascimento, Sexo, Necessidades especias --}}
          
        <div class="col-md-11"></div>
        <button name="submit" value="excluir" data-toggle="tooltip" title="Remover dependente" class="btn btn-circulo btn-cor-perigo glyphicon glyphicon-trash excluir" selected style="display:none;"></button>

        </div> {{-- FIM panel_dependentes --}}

        <div class="div-clone"></div> {{-- Clonagem da div panel_dependentes --}}

      </div> {{-- FIM x_content --}}
    </div> {{-- FIM Dependentes --}}