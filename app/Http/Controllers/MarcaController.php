<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    protected $marca; 
    public function __construct(Marca $marca){
        $this->marca = $marca;
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = $this->marca->all();
        return response()->json($marcas, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //nome e imagem | validação de parâmetros estão na Model

        $request->validate($this->marca->rules(), $this->marca->feedback());
        //stateless | habilitar header Accept application/json

        $imagem = $request->file('imagem');
        $imagem_urn = $imagem->store('imagens', 'public');

        $marca = $this->marca->create([
            'nome' => $request->nome,
            'imagem' => $imagem_urn // salva no banco o lugar que está salva a imagem
        ]);

        return response()->json($marca, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = $this->marca->find($id);
        if($marca == null){
            return response()->json(["erro"=> "Recurso pesquisado não existe!"],404);
        }
        return response()->json($marca, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // o update deve considerar o PUT (atualização geral) e PATCH (atualização de parte do registro)

        $marca = $this->marca->find($id); //atualize dentro do 'marca' recebido todos os dados da requisição

        if($marca == null){
            return response()->json(["erro"=> "Impossível realizar a atualização. O recurso solicitado não existe!"],404);
        }

        // isola as regras de validação
        if($request->method() == "PATCH"){

            $regrasDinamicas = array();
            
            // percorre as regras e ve se se aplica
            foreach($marca->rules() as $input => $regra){
                if(array_key_exists($input, $request->all())){
                    $regrasDinamicas[$input] = $regra;
                }
            }
            $request->validate($regrasDinamicas, $this->marca->feedback());
        } else {
            $request->validate($this->marca->rules(), $this->marca->feedback());
        }

        $marca->update($request->all());
        return response()->json($marca, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = $this->marca->find($id);

        if($marca == null) {
            return response()->json(["erro"=> "Não foi possível deletar objeto, recurso indísponível"],404);
        }

        $nome = $marca->getAttribute('nome');
        $marca->delete();

        return response()->json(['msg' => "Marca $nome deletada!"], 200);
    }
}
