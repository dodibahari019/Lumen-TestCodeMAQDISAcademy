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
            'message' => 'berhasil',
            'id_setoran' => 58,
            'id_user' => 3441,
            'id_juz' => 30,
        ]);
    }

    public function deleteData(Request $request)
    {
        return response()->json([
            'data' => 0,
            'status' => 'berhasil hapus',
        ]);
    }

    public function deleteData(Request $request)
    {
        // Biasanya, Anda akan mendapatkan ID dari parameter, misalnya dari route
        // Namun di sini, kita anggap data berhasil dihapus dan mengembalikan data statis
        $data = [
            'message' => 'berhasil',
            'id_setoran' => 58,
            'id_user' => 3441,
            'id_juz' => 30
        ];

        return response()->json($data);
    }
}
?>
