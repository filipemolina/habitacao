<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Habitação | Erro 404 </title>
    
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
    <!-- css do projeto -->
    <link href="{{ asset("css/styles.css") }}" rel="stylesheet"> 
</head>

<body class="nav-md color_special3">
<div class="container">
    <div class="main_container">
        <!-- page content -->
        <div class="color_special1" style="width:100%; height:150px; text-align: center;">
            <img class="logo_topo" src="{{ asset("img/logoretangular.jpg") }}">
        </div>
        <div class="col-md-12">
            <div class="col-middle">
                <div class="text-center">
                    <h1 class="error-number">Página não localizada</h1>
                    <p>ERRO 404</p>
                    <h3>Pedimos desculpas pelo erro, mas a página deseja não foi encontrada</h3>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <table class="table text-left">
                            <thead>
                                Talvez não seja possível exibir a página solicitada devido à um dos seguintes motivos:
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">*</th>
                                    <td class="bg-primary">A página que procura possívelmente não existe</td>
                                </tr>
                                <tr>
                                    <th scope="row">*</th>
                                    <td class="table-info">O link de favoritos está desatualizado</td>
                                </tr>
                                <tr>
                                    <th scope="row">*</th>
                                    <td class="table-active">Um mecanismo de busca que possua uma referência inadequada</td>
                                </tr>
                                <tr>
                                    <th scope="row">*</th>
                                    <td class="table-info">A URL foi digitada incorretamente</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                    <h3>
                        <a href="http://localhost:8000" class="btn btn-cor-padrao-hover" >Clique aqui</a>, para retornar a página inicial.
                    </h3>
                    <p>
                        Caso o problema persista,<a href="http://suporte.mesquita.rj.gov.br" class="btn-sm btn-cor-padrao-hover">clique aqui</a>, para entrar em contato com a equipe de desenvolvimento
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset("js/jquery.min.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("js/bootstrap.min.js") }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset("js/gentelella.min.js") }}"></script>

</body>
</html>