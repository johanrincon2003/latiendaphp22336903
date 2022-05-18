@extends('layouts.principal')

@section('contenido')
<div class="row"> 
  <h2 class="cyan-text text-accent-2">Nuevo Producto del Lichigo de Jean</h2>
</div>
    
  
  
  <div class="row">
    <form method="POST"   action="{{route('productos.store')}}"
     class="col s12">
     @csrf  
      <div class="row">
        <div class="input-field col s8">
          <input id="nombre" name="nombre" type="text" class="validate">
          <label for="nombre">Nompre de producto de la tienda de Jean</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <textarea id="desc" class="materialize-textarea" name="desc"></textarea>
        
          <label for="desc">Descripcion  </label>         
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" type="number" class="validate" name="precio">
          <label for="precio">Precio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagen de producto</span>
              <input type="file" name="imagen">
            </div>         
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8 ">
          <select name="categoria">
            <option value="" disabled selected>Eliga Categoria</option>
            @foreach ($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>

            @endforeach
          </select>
          <label>Categorias disponibles en la tienda del Jean</label>
        </div>
      </div>
    
      <div class="row">
        <div class="input-field col s8 ">
          <select name="marca">
            <option value="" disabled selected>Eliga marca</option>
            @foreach ($marcas as $marca)
              <option value="{{$marca->id}}">{{$marca->nombre}}</option>

            @endforeach
          </select>
          <label>Categorias disponibles en la tienda del Jean</label>
        </div>
      </div>


      <div class="row">
        <div class="col s8">
          <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
            <i class="material-icons right"></i>
          </button>
          </div>
        </div>
      </div>
    </form>
  </div>
        
@endsection