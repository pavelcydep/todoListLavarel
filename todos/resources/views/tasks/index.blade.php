
     @extends('layouts.app')
      @section('content')
      <div class="container">
        <h3>Мои заметки</h3>
        <a href="{{route('tasks.create')}}" class="btn btn-success">Сделать заметку</a>
    <table class="table">
  <thead>
    <tr>
      <td>ID</td>
      <td>Название</td>
      <td>Запись</td>
    </tr>
  </thead>
  <tbody>
  @foreach ($tasks as $task)
    <tr>
      
      <td>{{ $task->id }}</td>
      <td>{{ $task->name }}</td>
      <td>
        <div class="btn-group me-2">

      <a href="{{url('update/'.$task->id)}}">
      <i class="bi bi-pen-fill"></i>
      </a>
      </div>
      <div class="btn-group me-2">
      <form action="{{ url('task/'.$task->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}

            <button  class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></button>
</div>
            
        </form>
      </td>
    </tr>
    @endforeach
   
  </tbody>

 

</table>




</div>
@endsection
 
