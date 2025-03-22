<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Advertises extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct() {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $advertiseList = [
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Bola de Futebol Americano Wilson', 'price' => 'R$ 138,61', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Tênis vans Baby - 1 ano', 'price' => 'R$ 189,99', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Controle PS4 - Preto', 'price' => 'R$ 275,00', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Teste', 'Volkswagen Fusca 68', 'price' => 'R$ 2.000', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Volkswagen Polo 2015 - Azul', 'price' => 'R$32.450,00', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Camisas sociais masculinas', 'price' => 'R$32,50', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Bola de Basquete Spalding - NBA', 'price' => 'R$250,32', 'href' => '#']
        ];

        return view('components.advertises', ['advertiseList' => $advertiseList]);
    }
}
