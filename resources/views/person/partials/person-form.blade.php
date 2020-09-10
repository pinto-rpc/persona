
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
      <div class="card-header">
        @if(!empty($person)) 
        Editar Persona
        @else
        Nueva Persona
        @endif
      </div>
      <div class="card-body">
        <form method="POST" action="{{ !empty($person) ? route('persons.edit', [$person->id]) : route('persons.store')}}">
          @csrf
          <div class="form-group">
            <label for="name">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ !empty($person) ? $person->name : old('name')}}" placeholder="Introducir tu nombre" required autofocus>
          </div>
          <div class="form-group">
            <label for="lastname">Apellidos</label>
          <input type="text" class="form-control" id="lastname" name="lastname" value="{{ !empty($person) ? $person->lastname : old('lastname')}}" placeholder="Introducir tu apellido" required autofocus>
          </div>
          <button type="submit" class="btn btn-primary">
            @if(!empty($person))
            Editar
            @else
            Guardar
            @endif
          </button>
        </form>
        </div>
      </div>
    </div>
  </div>
