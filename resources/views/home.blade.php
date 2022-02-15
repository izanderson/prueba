@extends('layouts.app')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="d-flex justify-content-center">
            <h1 style="color:#0000FF" class=" text-center align-center">Crear Pacientes</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid col-lg-10">
       
       <div class="row">
         <div class="col-12">
           
           <div class="card">
             
             <div class="card-body">

              <form action="" method="post" >
               
                @csrf

                <div class="row">
                    <div class="col-lg-12"></div>
                  <div class="col-6">
                    
                    <label >Tipo Documento</label>
                    <select name="tipo_documento_id" id="tipo_documento_id" class="form-control">
                       <option value="1">Cedula de Ciudadania</option>
                        <option value="2">Tarjeta de identidad</option>
                    </select>
                    <label >Numero documento</label>
                    <input type="number"  class="form-control" name="numero_documento">
                     <label >Primer nombre</label>
                    <input type="text"  class="form-control" name="nombre1">
                    <label >Segundo Nombre</label>
                    <input type="text" class="form-control" placeholder="juanito" name="nombre2">

                   
                  </div>
                  <div class="col-6">
                  <label >Primer apellido</label>
                    <input type="text" class="form-control" placeholder="Gomez" name="apellido1">
                    <label >Segundo Apellido</label>
                    <input type="text" class="form-control" placeholder="perez"  name="apellido2" required>
                    <label >Genero</label>
                    <select name="genero_id" id="genero_id" class="form-control">
                       <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                   
                    @livewire('registrar')
                   
                  </div> 
                    
                  </div>
                  </div>
                  
                  <br>

                  <button class="btn  btn-outline-success btn-sm">Agregar Paciente</button>
                
              </form>
               
               
             </div>

<hr>

           </div>
         </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <div class="content-wrapper">

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
   <h1 class=" h1 text-center">Pacientes Registrados</h1>
   <div class="row justify-content-center">
     <div class="col-12 ">



<div class="container">
<div class="container-fluid">
<div class="card col-sm-12 " >
<div class="row justify-content-center ">

<div class="col-12 justify-content-center">
    <div class="nauk-info-connections">

    <div class="card-body">

<table class="table  col-12 table-responsive">

<thead>
<tr>
  <th>id</th>
    <th>Tipo Documento</th>
     <th>No. Documento</th>
     <th>Nombre Completo</th>
      
       
         <th>Genero</th>
          <th>Departamento</th>
          <th>Municipio</th>
          <th></th>
          <th></th>


</tr>
</thead>

<tbody>
<tr>

  @foreach($project as $pa) 
  <td>{{ $pa->id}}</td>
              <td>{{ $pa->tipo}}</td>
               <td>{{ $pa->numero_documento}}</td>
             
              <td>{{ $pa->nombre1}} {{ $pa->nombre2}} {{ $pa->apellido1}} {{ $pa->apellido2}}</td>
              <td>{{ $pa->genero}} </td>
              <td>{{ $pa->nombre_departamento}}</td>
              <td>{{ $pa->nombre_municipio}}</td>

  

  
  <td>
    

    <form action="{{url('/eliminar/'.$pa->id)}}" method="post">
      

      @csrf
      <div class="form-group row">
      @method('delete')
      <div class="col-md-6">
       <button  type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button> 
       </div>
    </form>
   



    
</div>

    
  </td>
  <td><a href="{{url('editar/'.$pa->id)}}">

    <button  type="submit" class="btn btn-outline-primary btn-sm">Editar</button> 
    </a></td>



</tr>
</tbody>
@endforeach
</table>



</div>
    
    </div>



       </div>
  
 </div>
</div>
 </div>
</div>
     
</div>
   </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


@endsection
