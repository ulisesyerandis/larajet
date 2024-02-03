<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $workerList = worker::all(); 
        return view('worker.index')->with('worker', $workerList);
    //   return \response()->json($this->studentService->index($request));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $worker = new Worker();
        $worker->name = $request->input('name');
        $worker->save();
        return redirect('/worker');
        // return response()->json($worker);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $worker = Worker::find($id);
        // if(!$worker)
        // {
        //     return response()->json(['message'=>'Could not find worker'],404);
        // }
        // return $worker;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $worker = Worker::find($id);
    return view('worker.edit')->with('worker', $worker);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $worker = Worker::find($id);
        if(!$worker)
        {
            return response()->json(['message'=>'Could not find worker'],404);
        }
        $worker->name = $request->input('name');
        $worker->save();
        return redirect('/worker');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $worker = Worker::find($id);
        if(!$worker)
        {
            return response()->json(['message'=>'Could not find worker'],404);
        }
        $deletedWorker = $worker;
        $worker->delete();
        return redirect('/worker');
    }
}
