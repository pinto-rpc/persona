<div class="row justify-content-center">
  <div class="col-md-8">
    @if(!empty($persons))
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($persons as $person)
          <tr>
            <th scope="row">{{$person->id}}</th>
            <td>{{$person->name}}</td>
            <td>{{$person->lastname}}</td>
            <td>
            <form method="POST" action="{{ route('persons.destroy', [$person->id]) }}">
              @csrf
              {{ method_field('DELETE')}}
              <button type="sumit" class="btn btn-danger">
                Eliminar
              </button>
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif
  </div>
</div>



