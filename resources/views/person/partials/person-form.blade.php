
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
      <div class="card-header">
        Nueva Persona
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('persons.store')}}">
          @csrf
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Introducir tu nombre" required autofocus>
          </div>
          <div class="form-group">
            <label for="lastname">Apellidos</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Introducir tu apellido" required autofocus>
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
