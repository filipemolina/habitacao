<div class="col-md-3 left_col">
    <div class="left_col scroll-view colormenu">
        <div class="navbar nav_title colormenu" style="border: 0;">
            {{-- <a href="{{ url('/') }}" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a> --}}
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile">
            
            <div class="profile_info">
                <span>Bem Vindo!</span>
                <h2>{{ Auth::user()->name }}</h2>
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
                            Pagina Inicial
                        </a>
                    </li>
                    <li><a><i class=" fa fa-male"></i>Pesoas<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('pessoas/create') }}">Cadastro de Pessoas</a></li>
                            <li><a href="{{ url('pessoas') }}">Lista de Pessoas</a></li>
                           
                        </ul>
                    </li>
                    
                    <li><a><i class=" fa fa-user"></i>Usuário<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('users/create') }}">Cadastro de Usuário</a></li>
                            <li><a href="{{ url('users') }}">Lista de Usuário</a></li>
                           
                        </ul>
                    </li>

                    <li><a><i class=" fa fa-cog"></i>Opções<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('') }}">Alterar Senha</a></li>
                            <li><a href="{{ url('/logout') }}">Sair</a></li>
                           
                        </ul>
                    </li>
                    
                </ul>
            </div>
          
        
        </div>
        <!-- /sidebar menu -->
        
       
    </div>
</div>