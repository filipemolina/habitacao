@extends("layouts.blank")

@section('titulo')

	Cadastro de Pessoas

@endsection

@push('stylesheets')

<link href="{{ asset("css/pessoas.css") }}" rel="stylesheet">

@endpush

@section('main_container')

<div class="x_title"><h2> Lista de Pessoas </h2></div>

<div id="main" class="container-fluid">
     
     <div id="top" class="row">


{{--------------------------------------- TOPO ----------------------------------------------}}

{{-- Título a ser definido --}}
      <div class="col-md-3">
        <h2>Título</h2>
      </div>

 {{-- Pesquisa --}}
    <div class="col-md-6">
        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>

{{-- Botão a ser definido --}}
    <div class="col-md-3">
    	<a href="add.html" class="btn btn-primary pull-right h2">Novo Item</a>
	</div>
 
     </div> {{-- FIM TOPO --}}






{{-- -------------------------------------------LISTA ----------------------------------------}}
     
     <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Header 1</th>
                    <th>Header 2</th>
                    <th>Header 3</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
 
                <tr>
                    <td>1001</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                    <td>Jes</td>
                    <td>01/01/2015</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                    </td>
                </tr>
 
            </tbody>
         </table>
 
     </div>
 </div> {{-- FIM LISTA --}}


 {{------------------------------------------- PAGINAÇÂO ------------------------------------}}

 <div id="bottom" class="row">
    <div class="col-md-12">
         
        <ul class="pagination">
            <li class="disabled"><a>&lt; Anterior</a></li>
            <li class="disabled"><a>1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
        </ul><!-- /.pagination -->
 
    </div>
{{-- </div> FIM PAGINAÇÂO --}}


 
     <hr />
     <div id="list" class="row">
     
     </div> <!-- /#list -->
 
     <div id="bottom" class="row">
     
     </div> <!-- /#bottom -->
 </div>  <!-- /#main -->

 @endsection