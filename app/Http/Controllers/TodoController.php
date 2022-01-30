<?php
namespace App\Http\Controllers;

use App\Models\Todo;
use domain\Facades\TodoFacade;
use Illuminate\Http\Request;

class TodoController extends ParentController
{   
    // protected $task;

    // public function __construct(){
    //       $this-> task = new Todo();
    // }

    public function index(){

        $response['tasks'] =  TodoFacade::all();
       // dd($response);
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request){
       // dd($request);
       TodoFacade::store($request->all());
       // $this->task->title=request->title;
       // $this->task->save();
       return redirect()->back();
       // return redirect()->route('todo');  
    }

    public function delete($task_id){
            // dd($task_id);
            TodoFacade::delete($task_id);
            return redirect()->back();
    }

    public function done($task_id){
          TodoFacade::done($task_id);
            return redirect()->back();
    }
}
