<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Profile;
class AddressController extends Controller
{
    public function show(Profile $states): View
    {
        $states = new Profile();
        $state = [
            'estadomexico' => 'Estado de México',
            'jalisco' => 'Jalisco',
            'michoacan' => 'Michoacán',
            'ciudadmexico' => 'Ciudad de México',
            'yucatan' => 'Yucatán',
            'bcalifornia' => 'Baja California',
            'chiapas' => 'Chiapas',
            'nleon' => 'Nuevo León',
            'guanajuato' => 'Guanajuato',
            'hidalgo' => 'Hidalgo',
            'sonora' => 'Sonora',
            'tamaulipas' => 'Tamaulipas',
            'nayarit' => 'Nayarit',
            'tlaxcala' => 'Tlaxcala',
            'qroo' => 'Quintana Roo',
            'cohauila' => 'Cohauila de Zaragoza',
            'morelos' => 'Morelos',
            'slpotosi' => 'San Luis Potosí',
            'durango' => 'Durango',
            'tabasco' => 'Tabasco',
            'chihuahua' => 'Chihuahua',
            'sinaloa' => 'Sinaloa',
            'bcaliforniasur' => 'Baja California Sur',
            'veracruz' => 'Veracruz',
            'puebla' => 'Puebla',
            'queretano' => 'Querétano',
            'oaxaca' => 'Oaxaca',
            'zacateca' => 'Zacatecas',
            'acaliente' => 'Aguascalientes',
            'colima' => 'Colima',
            'campeche' => 'Campeche',

        ];

        return view ('address');
    }
}
