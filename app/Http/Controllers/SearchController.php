<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $r)
    {
        $citizens =  Citizen::all();
        if ($r->item) {
            $citizens = Citizen::query()
                ->where('full_name', 'LIKE', '%' . $r->item . '%')
                ->orWhere('phone', 'LIKE', '%' . $r->item . '%')
                ->orWhere('gender', 'LIKE', '%' . $r->item . '%')
                ->orWhere('address', 'LIKE', '%' . $r->item . '%')

                ->orderBy('id', 'DESC')->paginate(10);
        }

        return view('citizens.index', compact('citizens'));
    }
}
