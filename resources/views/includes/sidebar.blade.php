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
        </div>
        <!-- /menu profile quick info -->
        
        <br />

         
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3 class="home fa fa-home">Home</h3>
                <ul class="nav side-menu">
                    <li><a><i class=" fa fa-user"></i>Usuário<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Cadastro de Usuário</a></li>
                            <li><a href="#">Lista de Usuário</a></li>
                            <li><a href="#">Alteração de Usuário</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
          
        
        </div>
        <!-- /sidebar menu -->
        
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small colormenu">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>