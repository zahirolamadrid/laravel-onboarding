<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AddressController extends Controller
{
    public function show(): View
    {
        $states = [
            'estado-de-mexico' => 'Estado de México',
            'jalisco' => 'Jalisco',
            'michoacan' => 'Michoacán',
            'ciudadmexico' => 'Ciudad de México',
            'yucatan' => 'Yucatán',
            'baja-california' => 'Baja California',
            'chiapas' => 'Chiapas',
            'nuevo-leon' => 'Nuevo León',
            'guanajuato' => 'Guanajuato',
            'guerrero' => 'Guerrero',
            'hidalgo' => 'Hidalgo',
            'sonora' => 'Sonora',
            'tamaulipas' => 'Tamaulipas',
            'nayarit' => 'Nayarit',
            'tlaxcala' => 'Tlaxcala',
            'quintana-roo' => 'Quintana Roo',
            'cohauila-de-Zaragoza' => 'Cohauila de Zaragoza',
            'morelos' => 'Morelos',
            'san-luis-de-potosi' => 'San Luis Potosí',
            'durango' => 'Durango',
            'tabasco' => 'Tabasco',
            'chihuahua' => 'Chihuahua',
            'sinaloa' => 'Sinaloa',
            'baja-california-sur' => 'Baja California Sur',
            'veracruz' => 'Veracruz',
            'puebla' => 'Puebla',
            'queretaro' => 'Querétaro',
            'oaxaca' => 'Oaxaca',
            'zacateca' => 'Zacatecas',
            'aguas-calientes' => 'Aguascalientes',
            'colima' => 'Colima',
            'campeche' => 'Campeche',

        ];

        return view('address', compact('states'));
    }
}
