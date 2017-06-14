<div class="col-md-3 left_col color_special1 modal-content vidro" style="margin-top: 5px; margin-left: none;">
    <div class="left_col scroll-view color_special1">
        <div class="navbar nav_title" style="border: 0;">
           <a href="{{ url('/') }}" class="site_title"><i class="fa fa-home"></i> <span>Habitação</span></a>
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile">
            
            <div class="profile_info">
                <span>Bem-Vindo!</span>
                <h2>{{ Auth::user()->name }} ({{Auth::user()->admin}})</h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /menu profile quick info -->
        
        <br />


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
             
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ url("/") }}">
                            <i class="fa fa-home"></i>
                            Página Inicial
                        </a>
                    </li>
                    <li><a><i class=" fa fa-users"></i>Pessoas<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('pessoas/create') }}">Cadastro</a></li>
                            <li><a href="{{ url('pessoas') }}">Lista</a></li>
                           
                        </ul>
                    </li>

                    @if(Auth::user()->admin == "Master")
                    
                        <li><a><i class=" fa fa-user"></i>Usuários<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('users/create') }}">Cadastro</a></li>
                                <li><a href="{{ url('users') }}">Lista</a></li>
                               
                            </ul>
                        </li>

                        <li><a href="{{ url('pessoas/relatorios') }}"><i class=" fa fa-clipboard"></i>Relatórios</a>
                            {{-- <ul class="nav child_menu">
                                <li><a href="{{ url('#') }}">Geral</a></li>
                                <li><a href="{{ url('#') }}">Por Idade</a></li>
                                <li><a href="{{ url('#') }}">Por Sexo</a></li>
                                <li><a href="{{ url('#') }}">Por Dependentes</a></li>
                                <li><a href="{{ url('#') }}">Por Bairro</a></li>
                            </ul> --}}
                            
                        </li>

                    @endif

                    <li><a><i class=" fa fa-cog"></i>Opções<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('mudarsenha') }}">Alterar Senha</a></li>
                            <li><a href="{{ url('/logout') }}">Sair</a></li>
                           
                        </ul>
                    </li>
                    
                </ul>
            </div>
                      
        
        </div>
        <!-- /sidebar menu -->
        
       
    </div>
</div>