<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\paciente;

class pacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = DB::select('SELECT `departamentos`.`nombre_departamento`, 
        `pacientes`.`id`, `pacientes`.`numero_documento`, `pacientes`.`nombre1`, 
        `pacientes`.`nombre2`, `pacientes`.`apellido1`, `pacientes`.`apellido2`,
         `generos`.`nombre` as genero, `municipios`.`nombre_municipio`, tipos_documentos.nombre as tipo
        FROM `departamentos` 
            LEFT JOIN `pacientes` ON `pacientes`.`departamento_id` = `departamentos`.`id` 
            LEFT JOIN `generos` ON `pacientes`.`genero_id` = `generos`.`id` 
            LEFT JOIN `municipios` ON `municipios`.`departamento_id` = `departamentos`.`id`
            LEFT JOIN `tipos_documentos` ON `pacientes`.`tipo_documento_id` = `tipos_documentos`.`id` 
            WHERE pacientes.tipo_documento_id=tipos_documentos.id AND departamentos.id= pacientes.departamento_id AND pacientes.municipio_id=municipios.id and generos.id=pacientes.genero_id
            and pacientes.user_id = '.auth()->id().'');

    

    return view('home')->with(['project'=> $project]);
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
        $datos = request()->validate([
            'tipo_documento_id'=>['required','integer','max:50'],
            'numero_documento'=>['required'],
            'nombre1'=>['required','string','max:50'],
            'nombre2'=>['required','max:50'],
            'apellido1'=>['required','string','max:50'],
            'apellido2'=>['required','string','max:50'],
            'genero_id'=>['required','integer','max:50'],
            'departamento_id'=>['required','integer','max:50'],
            'municipio_id'=>['required','integer','max:50'],
        
        
           ]);
        
        
        
           DB::table('pacientes')->insert(['tipo_documento_id'=> $datos['tipo_documento_id'],'numero_documento'=> $datos['numero_documento'],
        
            'nombre1'=> $datos['nombre1'],'nombre2'=> $datos['nombre2'],'apellido1'=> $datos['apellido1'],'apellido2'=> $datos['apellido2'],
            'genero_id'=> $datos['genero_id'],'departamento_id'=> $datos['departamento_id'],'municipio_id'=> $datos['municipio_id'],'user_id'=>auth()->id()]);
        
            
           return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = DB::select('SELECT `departamentos`.`nombre_departamento`, 
        `pacientes`.`id`, `pacientes`.`numero_documento`, `pacientes`.`nombre1`, 
        `pacientes`.`nombre2`, `pacientes`.`apellido1`, `pacientes`.`apellido2`,pacientes.genero_id,pacientes.tipo_documento_id,pacientes.departamento_id,pacientes.municipio_id,
         `generos`.`nombre` as genero, `municipios`.`nombre_municipio`, tipos_documentos.nombre as tipo
        FROM `departamentos` 
            LEFT JOIN `pacientes` ON `pacientes`.`departamento_id` = `departamentos`.`id` 
            LEFT JOIN `generos` ON `pacientes`.`genero_id` = `generos`.`id` 
            LEFT JOIN `municipios` ON `municipios`.`departamento_id` = `departamentos`.`id`
            LEFT JOIN `tipos_documentos` ON `pacientes`.`tipo_documento_id` = `tipos_documentos`.`id` 
            WHERE pacientes.tipo_documento_id=tipos_documentos.id AND departamentos.id= pacientes.departamento_id AND pacientes.municipio_id=municipios.id and generos.id=pacientes.genero_id and pacientes.id = '.$id.'
            ');

    

    return view('editar')->with(['project'=> $project,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 
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
        Paciente::where('id',$id)->first()->update($request->all());

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pacientes')->delete($id);

         
        return redirect('/home');
    }
}
