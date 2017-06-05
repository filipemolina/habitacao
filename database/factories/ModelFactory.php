<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

// use Faker\Factory as Faker;

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Participante::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	// Consertar a proporção de "outros" no sexo.

	if($faker->boolean(10))
	{
		$sexo = "Outros";
	}
	else
	{
		$sexo = $faker->randomElement(["Masculino", "Feminino"]);
	}

	$mulher_responsavel = false;

	if($sexo = "Feminino" || $sexo == "Outros")
	{
		$mulher_responsavel = $faker->boolean;
	}

	$nascimento = $faker->dateTimeBetween("-90 years", "-18 years")->format('Y-m-d');
	$idoso = false;

	if(date('Y') - date('Y', strtotime($nascimento)) >= 65)
    {
        $idoso = true;
    }

    $necessidades = $faker->boolean(10);

    if($necessidades)
    	$tipo = $faker->randomElement(['Deficiente Visual', "Deficiente Auditivo", "Cadeirante", "Síndrome de Down"]);
    else
    	$tipo = null;

	return [

		'nome'                    => $faker->name,
		'cpf'                     => $faker->cpf,
		'nis'                     => $faker->randomNumber(9), // Número de Dígitos
		'ctps'                    => $faker->randomNumber(9),
		'bolsa_familia'           => $faker->boolean,
		'sexo'                    => $sexo,
		'nascimento'              => $nascimento,
		'rg'                      => $faker->rg,
		'emissao_rg'              => $faker->date('Y-m-d', '-18 years'),
		'orgao_emissor_rg'        => $faker->randomElement(['DETRAN', 'IFP', 'Marinha do Brasil']),
		'mulher_responsavel'      => $mulher_responsavel,
		'email'                   => $faker->email,
		'renda_familiar'          => $faker->randomFloat(2, 800, 9000),
		'tempo_residencia'        => $faker->date('Y-m-d', '-1 year'),
		'necessidades_especiais'  => $necessidades, // Chance de 10% de sair True
		'tipo_deficiencia'        => $tipo,
		'idoso'                   => $idoso,
		'codigo_inscricao'        => $faker->randomNumber(4),
		'created_at'              => $faker->dateTimeBetween('-5 weeks', 'now'),
 
	];

});

$factory->define(App\Coparticipante::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [

		'nome'                    => $faker->name,
		'sexo'                    => $faker->randomElement(['Masculino', 'Feminino', 'Outros']),
		'cpf'                     => $faker->cpf,
		'nascimento'              => $faker->date('Y-m-d', '-18 years'),
		'rg'                      => $faker->rg,
		'emissao_rg'              => $faker->date('Y-m-d', '-18 years'),
		'orgao_emissor_rg'        => $faker->randomElement(['DETRAN', 'IFP', 'Marinha do Brasil']),
		'parentesco'              => $faker->randomElement(['Pai', 'Mãe', 'Filho(a)', 'Sobrinho(a)', 'Neto(a)']),
		'email'                   => $faker->email,
		'necessidades_especiais'  => $faker->boolean(10), // Chance de 10% de sair True
		'nis'                     => $faker->numerify("#### #### ####"), // Número de Dígitos
		'ctps'                    => $faker->numerify("### ### ###"),
		'bolsa_familia'           => $faker->boolean,


	];

});

$factory->define(App\Dependente::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [

		'nome'                    => $faker->name,
		'sexo'                    => $faker->randomElement(['Masculino', 'Feminino', 'Outros']),
		'nascimento'              => $faker->date('Y-m-d', '-18 years'),
		'parentesco'              => $faker->randomElement([
			'Avós', 
			'Bisavós', 
			'Bisneto(a)',
			'Companheiro(a)',
			'Cônjuge',
			'Enteado(a)',
			'Ex-esposa',
			'Filho(a)',
			'Irmão(ã)',
			'Pais',
			'Neto(a)',
			'Outras'
		]),
		'necessidades_especiais'  => $faker->boolean(10), // Chance de 10% de sair True

	];

});

$factory->define(App\Endereco::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [

		'logradouro'   => $faker->streetName,
		'numero'       => $faker->randomNumber(3),
		'complemento'  => $faker->randomElement([
			"Casa 1", 
			"Casa 2", 
			"Casa 3", 
			"Apartamento 101", 
			"Apartamento 102", 
			"Sobrado"]
		),
		'cep'          => $faker->randomNumber(5)."-".$faker->randomNumber(3),
		'bairro'       => $faker->randomElement([
			"Centro",
			"Jacutinga",
			"Juscelino",
			"Chatuba",
			"Santo Elias",
			"Coréia",
			"Santa Terezinha",
			"Edson Passos",
			"Cosmorama",
			"Banco de Areia",
			"BNH",
			"Rocha Sobrinho",
			"Industrial",
			"Alto Uruguai",
			"Vila Emil",
			]
		),

	];

});

$factory->define(App\Telefone::class, function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [

		'numero'         => "(21) ".$faker->cellphone(true, 21),
		'tipo_telefone'  => "Celular",

	];	

});

$factory->state(App\Telefone::class, 'fixo', function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [

		'numero'        => "(21) $faker->landline",
		'tipo_telefone' => "Fixo"

	];

});

$factory->state(App\Telefone::class, 'celular', function(Faker\Generator $faker) {

	$faker = Faker\Factory::create('pt_BR');

	return [

		'numero'        => "(21) ".$faker->cellphone(true, 21),
		'tipo_telefone' => "Celular"

	];

});
