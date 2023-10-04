<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        $memo1 = Memo::paginate(6);
        return view('main',[
            'memo1' => $memo1]);
    }

    public function register()
    {
        return view('register');
    }

    public function storeData(Request $request)
    {
        $data = $request->only(['kind', 'jap_pron', 'jap_lang', 'jap_mean']);
        Memo::create($data);

        return redirect('/');

    }


}
