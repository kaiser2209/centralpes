<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $pos = array("<span class='squad-table-pos squad-table-Goalkeeper' title='Goleiro'>GO</span>",
    "<span class='squad-table-pos squad-table-Defender' title='Lateral Direito'>LD</span>",
    "<span class='squad-table-pos squad-table-Defender' title='Lateral Direito'>LE</span>",
    "<span class='squad-table-pos squad-table-Defender' title='Lateral Direito'>ZC</span>",
    "<span class='squad-table-pos squad-table-Midfielder' title='Lateral Direito'>VOL</span>",
    "<span class='squad-table-pos squad-table-Midfielder' title='Lateral Direito'>MLG</span>",
    "<span class='squad-table-pos squad-table-Midfielder' title='Lateral Direito'>MLD</span>",
    "<span class='squad-table-pos squad-table-Midfielder' title='Lateral Direito'>MLE</span>",
    "<span class='squad-table-pos squad-table-Midfielder' title='Lateral Direito'>MAT</span>",
    "<span class='squad-table-pos squad-table-Forward' title='Lateral Direito'>PTD</span>",
    "<span class='squad-table-pos squad-table-Forward' title='Lateral Direito'>PTE</span>",
    "<span class='squad-table-pos squad-table-Forward' title='Lateral Direito'>SA</span>",
    "<span class='squad-table-pos squad-table-Forward' title='Lateral Direito'>CA</span>");

}
