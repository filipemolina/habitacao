@extends("layouts.blank")

@section('titulo')

  Lista de Pessoas

@endsection

@push('css')

  <!-- Datatables -->
    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

@endpush

@section("main_container")


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Lista de Pessoas</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
               
        <table class="table table-striped" id="dataTable">

          <thead>
            
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>PNE</th>
                <th>Co-participante?</th>
                <th>Dependentes</th>
                <th>Bairro</th>
                <th>Ações</th>
            </tr>           

          </thead>

          <tbody>
              
            <tr>
                <td>Leandro Accioly</td> 
                <td>37</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>2</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Liara Bastos</td> 
                <td>24</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>0</td>
                <td>Centro</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Filipe Molina</td> 
                <td>29</td>
                <td>Masculino</td>
                <td>Sim</td>
                <td>Não</td>
                <td>1</td>
                <td>Juscelino</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Luciano Júnior</td> 
                <td>30</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Não</td>
                <td>3</td>
                <td>Chatuba</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Milena Araújo</td> 
                <td>25</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Não</td>
                <td>1</td>
                <td>Santa Terezinha</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Leandro Accioly</td> 
                <td>37</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>2</td>
                <td>Alto Uruguai</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Liara Bastos</td> 
                <td>24</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>0</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Filipe Molina</td> 
                <td>29</td>
                <td>Masculino</td>
                <td>Sim</td>
                <td>Não</td>
                <td>1</td>
                <td>Centro</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Luciano Júnior</td> 
                <td>30</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Não</td>
                <td>3</td>
                <td>Juscelino</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Milena Araújo</td> 
                <td>25</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Não</td>
                <td>1</td>
                <td>Chatuba</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Leandro Accioly</td> 
                <td>37</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>2</td>
                <td>Santa Terezinha</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Liara Bastos</td> 
                <td>24</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>0</td>
                <td>Coréia</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Filipe Molina</td> 
                <td>29</td>
                <td>Masculino</td>
                <td>Sim</td>
                <td>Não</td>
                <td>1</td>
                <td>Areia Branca</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Luciano Júnior</td> 
                <td>30</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Não</td>
                <td>3</td>
                <td>Alto Uruguai</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Milena Araújo</td> 
                <td>25</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Não</td>
                <td>1</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Leandro Accioly</td> 
                <td>37</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>2</td>
                <td>Centro</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Liara Bastos</td> 
                <td>24</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>0</td>
                <td>Juscelino</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Filipe Molina</td> 
                <td>29</td>
                <td>Masculino</td>
                <td>Sim</td>
                <td>Não</td>
                <td>1</td>
                <td>Chatuba</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Luciano Júnior</td> 
                <td>30</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Não</td>
                <td>3</td>
                <td>Areia Branca</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Milena Araújo</td> 
                <td>25</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Não</td>
                <td>1</td>
                <td>Coréia</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Leandro Accioly</td> 
                <td>37</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>2</td>
                <td>Alto Uruguai</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Liara Bastos</td> 
                <td>24</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>0</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Filipe Molina</td> 
                <td>29</td>
                <td>Masculino</td>
                <td>Sim</td>
                <td>Não</td>
                <td>1</td>
                <td>Centro</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Luciano Júnior</td> 
                <td>30</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Não</td>
                <td>3</td>
                <td>Chatuba</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Milena Araújo</td> 
                <td>25</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Não</td>
                <td>1</td>
                <td>Juscelino</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Leandro Accioly</td> 
                <td>37</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>2</td>
                <td>Coréia</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Liara Bastos</td> 
                <td>24</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>0</td>
                <td>Alto Uruguai</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Filipe Molina</td> 
                <td>29</td>
                <td>Masculino</td>
                <td>Sim</td>
                <td>Não</td>
                <td>1</td>
                <td>Areia Branca</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Luciano Júnior</td> 
                <td>30</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Não</td>
                <td>3</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Milena Araújo</td> 
                <td>25</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Não</td>
                <td>1</td>
                <td>Centro</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Leandro Accioly</td> 
                <td>37</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>2</td>
                <td>Coréia</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Liara Bastos</td> 
                <td>24</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>0</td>
                <td>Alto Uruguai</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Filipe Molina</td> 
                <td>29</td>
                <td>Masculino</td>
                <td>Sim</td>
                <td>Não</td>
                <td>1</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Luciano Júnior</td> 
                <td>30</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Não</td>
                <td>3</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Milena Araújo</td> 
                <td>25</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Não</td>
                <td>1</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Leandro Accioly</td> 
                <td>37</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>2</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Liara Bastos</td> 
                <td>24</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Sim</td>
                <td>0</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Filipe Molina</td> 
                <td>29</td>
                <td>Masculino</td>
                <td>Sim</td>
                <td>Não</td>
                <td>1</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Luciano Júnior</td> 
                <td>30</td>
                <td>Masculino</td>
                <td>Não</td>
                <td>Não</td>
                <td>3</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

            <tr>
                <td>Milena Araújo</td> 
                <td>25</td>
                <td>Feminino</td>
                <td>Não</td>
                <td>Não</td>
                <td>1</td>
                <td>Jacutinga</td>
                <td class="actions">
                        <a class="btn btn-success btn-xs" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-xs" href="#"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target=""><i class="fa fa-trash"></i></a>
                      </td>
            </tr>

          </tbody>

        </table>


            </div>
        </div>
    </div>

@endsection

@push('scripts')

  <!-- Datatables -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>

  @include('includes.users.scripts')

@endpush