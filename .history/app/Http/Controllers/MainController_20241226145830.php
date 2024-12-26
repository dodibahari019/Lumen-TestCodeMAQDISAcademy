<?php
namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MainController extends BaseController{
    public function first(){
        return response()->json([
            'status' => 'success',
            'message' => 'welcome to Maqdis Academy',
        ]);
    }

    public function second(Request $request){
        return response()->json([
            'data'=> 100,
            'status' => "berhasil",
        ]);
    }

    public function fourth(Request $request){
        return response()->json([
   "message": "berhasil",
   "id_setoran": 58,
   "id_user": 3441,
   "id_juz": 30,
}
        ])
    }
}
?>
