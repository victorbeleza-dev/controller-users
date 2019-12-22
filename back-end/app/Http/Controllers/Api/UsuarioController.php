<?php

namespace App\Http\Controllers\Api;

use App\API\ApiError;
use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller{

    /**
     * @var Usuario
     */
    private $usuario;

    public function __construct(Usuario $usuario){
        $this->usuario = $usuario;
    }

    public function index(){
        $data = ['data' => $this->usuario->all()];

        return response()->json($data);
    }

    public function show(Usuario $id){
        $data = ['data' => $id];

        return response()->json($data);
    }

    public function store(Request $request){

        try{
            $usuariodata = $request->all();
            $this->usuario->create($usuariodata);

            $return = ['data' => [
                'msg' => 'Usuario criado com sucesso!'
            ]];
            return response()->json($return, 201);

        } catch (\Exception $e){
            if(config('app.debug')){
                return response()->json((ApiError::errorMessage($e->getMessage(), 1010)));
            }
            return response()->json((ApiError::errorMessage('Ocorreu um erro ao realizar a operação', 1010)));
        }

    }

    public function update(Request $request, $id){

        try{
            $usuariodata = $request->all();
            $usuario = $this->usuario->find($id);
            $usuario->update($usuariodata);

            $return = ['data' => [
                'msg' => 'Usuario atualizado com sucesso!'
            ]];
            return response()->json($return, 201);

        } catch (\Exception $e){
            if(config('app.debug')){
                return response()->json((ApiError::errorMessage($e->getMessage(), 1010)));
            }
            return response()->json((ApiError::errorMessage('Ocorreu um erro ao realizar a operação', 1010)));
        }

    }
}
