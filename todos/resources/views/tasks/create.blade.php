@extends('layouts.app')
      @section('content')
      @include('tasks.errors')
      <div class="container">
        <h3>Добавить запись</h3>
      

 <div class="row">
       <div class="col-md-12">
              {!! Form::open(['route'=>['tasks.store']]) !!}
       <div class="form-group">
<input type="text" class="form-control" name="name" value="{{old('name')}}">

<button class ="btn btn-success">Добавить</button>
       </div> 
       {!! Form::close() !!}
       </div> 
       </div>   
</div>
@endsection
 