<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu color_special2">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars" style="color: white;"></i></a>
            </div>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                       
                        {{ Auth::user()->name }}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="{{ url('/mudarsenha') }}" style="background-color: white;"><i class="fa fa-lock pull-right"></i>Alterar Senha</a></li>
                        <li><a href="{{ url('/logout') }}" style="background-color: white;"><i class="fa fa-sign-out pull-right"></i>Sair</a></li>
                    </ul>
                </li>
                
               
            </ul>
        </nav>
    </div>
    {{-- <div class="clearfix"></div> --}}
</div>
<!-- /top navigation -->