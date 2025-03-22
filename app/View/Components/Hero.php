<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data['states'] = [
            ['name' => 'Acre', 'UF' => 'AC'],
            ['name' => 'Alagoas', 'UF' => 'AL'],
            ['name' => 'Amapá', 'UF' => 'AP'],
            ['name' => 'Amazonas', 'UF' => 'AM'],
            ['name' => 'Bahia', 'UF' => 'BA'],
            ['name' => 'Ceará', 'UF' => 'CE'],
            ['name' => 'Distrito Federal', 'UF' => 'DF'],
            ['name' => 'Espírito Santo', 'UF' => 'ES'],
            ['name' => 'Goiás', 'UF' => 'GO'],
            ['name' => 'Maranhão', 'UF' => 'MA'],
            ['name' => 'Mato Grosso', 'UF' => 'MT'],
            ['name' => 'Mato Grosso do Sul', 'UF' => 'MS'],
            ['name' => 'Minas Gerais', 'UF' => 'MG'],
            ['name' => 'Pará', 'UF' => 'PA'],
            ['name' => 'Paraíba', 'UF' => 'PB'],
            ['name' => 'Paraná', 'UF' => 'PR'],
            ['name' => 'Pernambuco', 'UF' => 'PE'],
            ['name' => 'Piauí', 'UF' => 'PI'],
            ['name' => 'Rio de Janeiro', 'UF' => 'RJ'],
            ['name' => 'Rio Grande do Norte', 'UF' => 'RN'],
            ['name' => 'Rio Grande do Sul', 'UF' => 'RS'],
            ['name' => 'Rondônia', 'UF' => 'RO'],
            ['name' => 'Roraima', 'UF' => 'RR'],
            ['name' => 'Santa Catarina', 'UF' => 'SC'],
            ['name' => 'São Paulo', 'UF' => 'SP'],
            ['name' => 'Sergipe', 'UF' => 'SE'],
            ['name' => 'Tocantins', 'UF' => 'TO'],
        ];

        return view('components.hero', $data);
    }
}
