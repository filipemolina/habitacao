<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Participante;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Cores
     */

    public $cores = [

        "#BDC3C7",
        "#9B59B6",
        "#E74C3C",
        "#26B99A",
        "#3498DB",
        "#dfabe0",
        "#6818d0",
        "#227c17",
        "#21d0be",
        "#ec3be6",
        "#37f745",
        "#247af8",
        "#a7406f",
        "#FFFF00",
        "#d9b007",

    ];

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participantes = Participante::orderBy('created_at', 'asc')->with('dependentes', 'endereco')->get();

        // Vetor com as faixas de cadastro

        $faixas = $this->calculaFaixas($participantes);

        // Dados para o gráfico de inscrições semanais

        $grafico = $this->inscricoesSemanais($participantes);

        // Quantidade de inscrições por número de dependentes

        $dependentes = $this->inscricoesPorDependentes($participantes);

        // Quantidade de inscrições por bairro

        $bairros = $this->inscricoesPorBairro($participantes);

        return view('home', compact(
            'participantes', 
            'faixas', 
            'grafico', 
            'dependentes', 
            'bairros'
            )
        );
    }

    public function mudarsenha()
    {
        return view( "users.password" );
    }    


    /**
     * Calcular a porcentagem de inscrições por faixa
     */

    protected function calculaFaixas($participantes)
    {
        $faixa1 = $faixa15 = $faixa2 = $faixa3 = $faixas = [];

        foreach($participantes as $participante)
        {
            if($participante->calculaFaixa() == '1')
                $faixa1[] = $participante->id;
            elseif($participante->calculaFaixa() == '1,5')
                $faixa15[] = $participante->id;
            elseif($participante->calculaFaixa() == '2')
                $faixa2[] = $participante->id;
            elseif($participante->calculaFaixa() == '3')
                $faixa3[] = $participante->id;

            $faixas['1']  = count($faixa1)  * 100 / $participantes->count();
            $faixas['15'] = count($faixa15) * 100 / $participantes->count();
            $faixas['2']  = count($faixa2)  * 100 / $participantes->count();
            $faixas['3']  = count($faixa3)  * 100 / $participantes->count();
        }

        return $faixas;
    }

    /**
     * Calcular as posições do gráfico de inscrições semanais
     */

    protected function inscricoesSemanais($participantes)
    {
        $semanas = [];

        $cont_ite = 0;

        foreach($participantes as $participante)
        {
            // Alocar os id's dos cadastros por semana

            if($participante->created_at > date('Y-m-d h:i:s', strtotime('-1 week')))
            {
                // Alocar segundo o gênero

                if($participante->sexo == "Masculino")
                    $semanas[0]["Masculinos"][] = [$participante->id, $participante->created_at];

                if($participante->sexo == 'Feminino')
                    $semanas[0]["Femininos"][] = [$participante->id, $participante->created_at];                    

                if($participante->sexo == "Outros")
                    $semanas[0]["Outros"][] = [$participante->id, $participante->created_at];                   
            }

            elseif($participante->created_at < date('Y-m-d h:i:s', strtotime('-1 week')) && $participante->created_at > date('Y-m-d h:i:s', strtotime('-2 week')))
            {
                // Alocar segundo o gênero

                if($participante->sexo == "Masculino")
                    $semanas[1]["Masculinos"][] = [$participante->id, $participante->created_at];

                if($participante->sexo == 'Feminino')
                    $semanas[1]["Femininos"][] = [$participante->id, $participante->created_at];                    

                if($participante->sexo == "Outros")
                    $semanas[1]["Outros"][] = [$participante->id, $participante->created_at];                   
            }

            elseif($participante->created_at < date('Y-m-d h:i:s', strtotime('-2 week')) && $participante->created_at > date('Y-m-d h:i:s', strtotime('-3 week')))
            {
                // Alocar segundo o gênero

                if($participante->sexo == "Masculino")
                    $semanas[2]["Masculinos"][] = [$participante->id, $participante->created_at];

                if($participante->sexo == 'Feminino')
                    $semanas[2]["Femininos"][] = [$participante->id, $participante->created_at];                    

                if($participante->sexo == "Outros")
                    $semanas[2]["Outros"][] = [$participante->id, $participante->created_at];                   
            }

            elseif($participante->created_at < date('Y-m-d h:i:s', strtotime('-3 week')) && $participante->created_at > date('Y-m-d h:i:s', strtotime('-4 week')))
            {
                // Alocar segundo o gênero

                if($participante->sexo == "Masculino")
                    $semanas[3]["Masculinos"][] = [$participante->id, $participante->created_at];

                if($participante->sexo == 'Feminino')
                    $semanas[3]["Femininos"][] = [$participante->id, $participante->created_at];                    

                if($participante->sexo == "Outros")
                    $semanas[3]["Outros"][] = [$participante->id, $participante->created_at];                   
            }

            elseif($participante->created_at < date('Y-m-d h:i:s', strtotime('-4 week')) && $participante->created_at > date('Y-m-d h:i:s', strtotime('-5 week')))
            {
                // Alocar segundo o gênero

                if($participante->sexo == "Masculino")
                    $semanas[4]["Masculinos"][] = [$participante->id, $participante->created_at];

                if($participante->sexo == 'Feminino')
                    $semanas[4]["Femininos"][] = [$participante->id, $participante->created_at];                    

                if($participante->sexo == "Outros")
                    $semanas[4]["Outros"][] = [$participante->id, $participante->created_at];                   
            }

            $cont_ite++;

        }

        // Reordenar o array corretamente

        sort($semanas);

        // Somar as participações

        foreach($semanas as $indice => $semana)
        {
            $semanas[$indice]["Masculinos"] = [count($semana['Masculinos']), $semana["Masculinos"][1][1]];
            $semanas[$indice]["Femininos"] = [count($semana['Femininos']), $semana["Femininos"][1][1]];
            $semanas[$indice]["Outros"] = [count($semana['Outros']), $semana["Outros"][1][1]];            
        }

        $total = 0;

        foreach($semanas as $semana)
        {
            $total = $total + $semana['Masculinos'][0] +  $semana['Femininos'][0] + $semana['Outros'][0];
        }

        return $semanas;

    }

    /**
     * Função que calcula o número de inscrições agrupado por número de dependentes
     */

    protected function inscricoesPorDependentes($participantes)
    {
        // Variáveis para guardar os resultados

        $inscricoes[0] = $inscricoes[1] = $inscricoes[2] = $inscricoes[3] = $inscricoes[4] = 0;

        $porcentagens = [];

        $total = count($participantes);

        // Iterar pelos participantes e categorizá-los

        foreach($participantes as $participante)
        {

            if($participante->dependentes()->count() == 0)
                $inscricoes[0]++;

            elseif($participante->dependentes()->count() == 1)
                $inscricoes[1]++;

            elseif($participante->dependentes()->count() == 2)
                $inscricoes[2]++;

            elseif($participante->dependentes()->count() == 3)
                $inscricoes[3]++;

            elseif($participante->dependentes()->count() > 3)
                $inscricoes[4]++;

        }

        sort($inscricoes);

        // Calcular as porcentagens

        foreach($inscricoes as $faixa)
        {
            $porcentagens[] = [floor($faixa * 100 / $total), $faixa];
        }

        return $porcentagens;
    }

    /**
     * Função que calcula o número de inscrições agrupado por bairros
     */

    protected function inscricoesPorBairro($participantes)
    {
        // Variáveis para guardar os resultados

        $porcentagens = $inscricoes = [];

        $total = count($participantes);

        $cont = 0;

        // Iterar pelos participantes e agrupá-los por bairro

        foreach($participantes as $participante)
        {
            $inscricoes[$participante->endereco->bairro][] = $participante->id;
        }

        // Iterar pelo vetor criado e somar o número de participantes por bairro

        foreach($inscricoes as $indice => $bairro)
        {
            $inscricoes[$indice] = count($bairro);
        }

        // Preencher o vetor com as porcentagens

        foreach($inscricoes as $bairro => $quantidade)
        {
            $inscricoes[$bairro] = [ $quantidade * 100 / $total, $quantidade,  $this->cores[$cont]];

            $cont++;
        }

        uasort($inscricoes, [$this, 'cmp']);

        return $inscricoes;
    }

    /**
     * Helper do PHP para utilizar com a função usort (usada para ordenar vetores);
     */

    protected static function cmp($a, $b)
    {   
        if ($a[0] == $b[0]) {
            return 0;
        }
        return ($a[0] < $b[0]) ? 1 : -1;
    }
}
