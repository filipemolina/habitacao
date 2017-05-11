<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title> Habitação </title>
    
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
    <!-- css do projeto -->
        <link href="{{ asset("css/styles.css") }}" rel="stylesheet"> 

</head>

<body class="login">
<div>
<div style="background-color: #3D276B; width:100%; height:150px; text-align: center;">
<img class="logo_topo" src="{{ asset("img/logoretangular.jpg") }}">

</div>
    <div class="login_wrapper">
    	<div class="topo"></div>
        <div class="animate form login_form">
            <section class="login_content">
            	
            	{!! BootForm::open(['url' => url('/login'), 'method' => 'post']) !!}
                    
				
				<h1 style="color:#3D276B">Cadastro de Habitação</h1>

			<div style="color:#000">
				{!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Email', 'afterInput' => '<span>test</span>'] ) !!}
			</div>
			
			<div style="color:#000">
				{!! BootForm::password('password', 'Senha', ['placeholder' => 'Senha']) !!}
			</div>

				<div style="text-align: center; color:#000">
					{!! BootForm::submit('Entrar', ['class' => 'btn btn-default btn-entrar submit']) !!}
					
				</div>
                    
				<div class="clearfix"></div>
                    
				<div class="separator">
					                        
					<div class="clearfix"></div>
					<br />
                        
					<div>
						<p style="color:#3D276B">©2017 Subsecretaria da Tecnologia da Informação</p>
					</div>
				</div>
				{!! BootForm::close() !!}
            </section>
        </div>
    </div>
</div>
</body>
</html>