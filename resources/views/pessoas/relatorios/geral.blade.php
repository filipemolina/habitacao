@extends('layouts.pdf')

@section('conteudo')

	{{-------------------------- Cabeçalho --------------------------}}

	<div style="max-width: 100%">
		
		<div style="float: left;">
			<img style="width: 100px;" src="img/brasao.png" alt="">
		</div>

		<div style="display: block; float: left; font-weight: bold; font-size: 25px; width: 86%; text-align: center; margin-left: -100px;">
			Prefeitura Municipal de Mesquita
		</div>

		<br><br>

		<div style="display: block; float: left; width: 86%; text-align: center; font-size: 20px; margin-left: -100px;">
			Secretaria Municipal de Urbanismo e Meio Ambiente
		</div>

		<div style="clear: both;"></div>

	</div>

	<div style="max-width: 100%">
		
		<h2 style="text-align: center;">RELATÓRIO</h2>

	</div>

	<div style="max-width: 100%">

		<table style=" width: 100%;">
			
			<tr style="background: black; color: white; text-align: center">
				<th style="border: 1px solid black">Nome</th>
				<th style="border: 1px solid black">Idade</th>
				<th style="border: 1px solid black">Sexo</th>
				<th style="border: 1px solid black">PNE</th>
				<th style="border: 1px solid black">Co-participante</th>
				<th style="border: 1px solid black">Dependentes</th>
				<th style="border: 1px solid black">Bairro</th>
			</tr>

			<tr>
				<td style="border: 1px solid black; text-align: center">José</td>
				<td style="border: 1px solid black; text-align: center">29</td>
				<td style="border: 1px solid black; text-align: center">Masculino</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">Sim</td>
				<td style="border: 1px solid black; text-align: center">2</td>
				<td style="border: 1px solid black; text-align: center">Centro</td>
			</tr>

			<tr>
				<td style="border: 1px solid black; text-align: center">Tício</td>
				<td style="border: 1px solid black; text-align: center">33</td>
				<td style="border: 1px solid black; text-align: center">Masculino</td>
				<td style="border: 1px solid black; text-align: center">Sim</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">1</td>
				<td style="border: 1px solid black; text-align: center">Coréia</td>
			</tr>

			<tr>
				<td style="border: 1px solid black; text-align: center">Mévio</td>
				<td style="border: 1px solid black; text-align: center">24</td>
				<td style="border: 1px solid black; text-align: center">Masculino</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">Sim</td>
				<td style="border: 1px solid black; text-align: center">0</td>
				<td style="border: 1px solid black; text-align: center">Jacutinga</td>
			</tr>

			<tr>
				<td style="border: 1px solid black; text-align: center">Ziquifrida</td>
				<td style="border: 1px solid black; text-align: center">18</td>
				<td style="border: 1px solid black; text-align: center">Feminino</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">3</td>
				<td style="border: 1px solid black; text-align: center">Chatuba</td>
			</tr>

			<tr>
				<td style="border: 1px solid black; text-align: center">Dorotéia</td>
				<td style="border: 1px solid black; text-align: center">48</td>
				<td style="border: 1px solid black; text-align: center">Feminino</td>
				<td style="border: 1px solid black; text-align: center">Sim</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">3</td>
				<td style="border: 1px solid black; text-align: center">Edson Passos</td>
			</tr>

			<tr>
				<td style="border: 1px solid black; text-align: center">Carine</td>
				<td style="border: 1px solid black; text-align: center">29</td>
				<td style="border: 1px solid black; text-align: center">Feminino</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">1</td>
				<td style="border: 1px solid black; text-align: center">Chatuba</td>
			</tr>

			<tr>
				<td style="border: 1px solid black; text-align: center">Astrogildo</td>
				<td style="border: 1px solid black; text-align: center">18</td>
				<td style="border: 1px solid black; text-align: center">Masculino</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">Não</td>
				<td style="border: 1px solid black; text-align: center">2</td>
				<td style="border: 1px solid black; text-align: center">Santa Terezinha</td>
			</tr>

		</table>

		</table>

		</table>

		</table>

	</div>

@endsection
