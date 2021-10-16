<?php

namespace App\Http\Controllers;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Foundation\Validation\ValidatesRequests;
use  App\Http\Requests\createTaskRequest;
class TaskController extends Controller

{
 use ValidatesRequests;





 protected $tasks;

 public function __construct(TaskRepository $tasks)
 {
     $this->middleware('auth');

     $this->tasks = $tasks;
 }





public function getTasks(Request $request)
{
   return view('tasks.index', [
       'tasks' => $this->tasks->forUser($request->user()),
   ]);
}




public function store(Request $request)
{
 $this->validate($request, [
   'name' => 'required|max:255',
]);

 $request->user()->tasks()->create([
   'name' => $request->name,

]);
return redirect('/');
}

  public function create()
  {
      return view('tasks.create');
  }
  
  public function update($id)
  {
    $tasks = Task::orderBy('created_at', 'asc')->get();
    $task =Task::findOrFail($id);
	
  return view('tasks.update',['tasks' => $tasks]);
  }


  public function storeUpdate( Request $request,$id)
  {
    $task =Task::findOrFail($id);
   $task->name=$request->name;
   
  $task->update(['id'=>$task->id]);
  
  return redirect('/');
  }

  public function edit($id)
  {
      $myTask =Task::find($id);
      
      return view('tasks.index',['tasks'=>$tasks]);
  }



}
