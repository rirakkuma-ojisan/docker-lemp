<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    /**
     * URLパラメータで受け取ったタスクモデルを
     * そのままreturnするだけです。
     * ※これでLaravelが勝手にjson形式のレスポンスを返却します
     *
     * @param Task $task
     * @return void
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * json形式のデータを受け取ることを想定しています
     */
    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return $task;
    }
}
