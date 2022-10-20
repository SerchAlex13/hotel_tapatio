<x-plantilla titulo="Editar Prenda">

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="/prenda/{{ $prenda->id }}" method="POST" class="row g-3">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $prenda->nombre }}">
                    </div>
                    <div class="col-md-6">
                        <label for="tipo" class="form-label">Tipo de prenda</label>
                        <input type="text" class="form-control" name="tipo" id="tipo" value="{{ $prenda->tipo }}">
                    </div>
                    <div class="col-12">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <!-- <input type="text" class="form-control" name="descripcion" id="descripcion"> -->
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="5" cols="50">{{ $prenda->descripcion }}</textarea>
                    </div>
                    <div class="col-4">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" name="color" id="color" value="{{ $prenda->color }}">
                    </div>
                    <div class="col-md-4">
                        <label for="talla" class="form-label">Talla</label>
                        <input type="text" class="form-control" name="talla" id="talla" value="{{ $prenda->talla }}">
                    </div>
                    <div class="col-md-4">
                        <label for="tela" class="form-label">Tela</label>
                        <input type="text" class="form-control" name="tela" id="tela" value="{{ $prenda->tela }}">
                    </div>
                    <div class="col-md-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" name="precio" id="precio" value="{{ $prenda->precio }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inventario" class="form-label">Inventario</label>
                        <input type="number" class="form-control" name="inventario" id="inventario" value="{{ $prenda->inventario }}">
                    </div>
                    <div class="col-md-2 p-3">
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </div>
                    <div class="col-md-2 p-3">
                        <a href="/prenda" class="btn btn-outline-dark">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>    
    </div>

</x-plantilla>