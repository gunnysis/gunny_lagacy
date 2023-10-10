<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Jenssegers\Agent\Agent;

class Controller extends BaseController
{
    public function index()
    {
        $memo1 = Memo::paginate(6);
        return view('main',[
            'memo1' => $memo1]);
    }
    public function memo()
    {

        $memo1 = Memo::paginate(6);

        return view('memo',[
            'memo1' => $memo1]);
    }

    public function register()
    {
        return view('register');
    }

    public function listen()
    {
        $agent = new Agent();
        if ($agent->isTablet()) {
            $count = 6;
        } elseif ($agent->isMobile()) {
            $count = 2;
        } else {
            $count = 10;
        }
        $videos = Video::paginate($count);
        return view('listen',[
            'videos' => $videos]);
    }

    public function storeData(Request $request)
    {
        $data = $request->only(['kind', 'jap_pron', 'jap_lang', 'jap_mean']);
        Memo::create($data);

        return redirect('/');

    }

    public function searchKind(Request $request)
    {
        // HTTP POST 요청에서 데이터 추출
        $selectedOption = $request->input('selectedOption');
        // Memo 모델에서 데이터 조회
        $memo1 = Memo::where('kind', '=', $selectedOption)->paginate(6);

        return view('main',[
            'memo1' => $memo1],);
    }
}
