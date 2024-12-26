<?php
namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;

class MainController extends BaseController{
    public function first(){
        return response()->json([
            'status' => 'success',
            'message' => 'welcome to Maqdis Academy',
        ]);
    }

    public function second(){
        return response()
    }
}
?>
