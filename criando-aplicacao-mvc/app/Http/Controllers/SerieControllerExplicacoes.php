<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class SerieControllerExplicacoes extends Controller
{
    public function index(Request $request)
    {
        // funçaõ res
        // através da váriavel request (do tipo request) chamo metódo get procurando o valor da chave id (que está na minha url da minha forma: http://127.0.0.1:8000/series?id=1, então retorna na página o valor 1)
        // return $request->get('id');
        // return $request->method() retorna o método usado para essa requisição, no caso o verbo http (get, post, delete...);
        // return $request->url() retorna a url atual =  http://127.0.0.1:8000/series;
        // return redirect('https://google.com') dizendo que quando fazer uma requisição para este método index, a resposta dele, será chamar a função redirect(que vai te direcionar para outra url) e como parâmetro estamos passando a url do google, então, acessei este metódo, minha url será alterada para a url do google
        $series = [
            "Breaking Bad",
            "Game of Thrones",
            "Duna: a profecia",
            "The Sopranos"
        ];

        $html = "<ul>";

        foreach ($series as $serie) {
            $html .= "<li>$serie</li>" . PHP_EOL;
        }

        $html .= "</ul>";

        /*
        * em controllers trabalhamos apenas com retornos (pois caso dê algum erro, ele já seja exibido diretamente, onde, como anteriormente estava sendo passado um echo ao chamar esse método, seria mostrado o conteúdo do echo juntamente do erro que o método estaria retornando, e quero apenas o erro) 
        * neste caso como estamos apenas retornando uma string, ele já exibe diretamente na página
        * por debaixo dos panos ele verifica a melhor maneira de retornar aquele dado, no caso, como é uma string, ele apenas exibe normalmente, caso fosse um array passado aqui, ele retornaria em formato de json (ele ia converter o array para um json) e exibir na tela neste formato, assim como objetos etc.
        */
        return $html;
    }
}
