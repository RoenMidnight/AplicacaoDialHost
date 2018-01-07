<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitante;
use Exception;

class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        $objReturn = new \stdClass();
        try{
            
            $data = $this->validate($request,[
                    'Nome' => 'required|max:255',
                    'Email'=> 'required|max:200|email',
                    'Telefone'=> 'required|max:15',
                    'Celular'=> 'nullable|max:15',
                    'Dt_Nascimento'=> 'required|date_format:d/m/Y',
                    'CEP' => 'nullable|max:9',
                    'Bairro' => 'nullable',
                    'Cidade' => 'nullable',
                    'UF' => 'nullable|max:2',
                    'Endereco'=> 'nullable',
                ]);
            

            $time = $request->get('Dt_Nascimento');
            $time = str_replace('/','-',$time);
            $date = date("Y-m-d",strtotime($time));

            $visitante = new Visitante;
            $visitante->Nome = $request->get('Nome');
            $visitante->Email = $request->get('Email');
            $visitante->Telefone = $request->get('Telefone');
            $visitante->Celular = $request->get('Celular');
            $visitante->Dt_Nascimento = $date;

            $visitante->CEP = $request->get('CEP');
            $visitante->Bairro = $request->get('Bairro');
            $visitante->Cidade = $request->get('Cidade');
            $visitante->UF = $request->get('UF');
            $visitante->Endereco = $request->get('Endereco');

            $visitante->save();
            
            $objReturn->success = true;

            return response()->json($objReturn);

       } catch(Exception $e){   

            $objReturn->success = false;
            $objReturn->code = $e->getCode();
           
           // return response()->json(array('error'=>array('msg'=>$e->getMessage(),'code'=>$e->getCode())));

            return json_encode($objReturn);
       } 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
