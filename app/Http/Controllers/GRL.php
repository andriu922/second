<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GRL extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
       return redirect('https://www.gnu.org/licenses/gpl-3.0.ru.html');
    }
}
