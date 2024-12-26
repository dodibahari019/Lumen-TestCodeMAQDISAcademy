<?php
namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;

class MainController extends BaseController{
    public function index(){
        return response()->json([
            'status' => 'success',
            'message' => ''
        ]);
    }
}
?>
