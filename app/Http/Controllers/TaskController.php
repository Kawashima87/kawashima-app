<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Tag;
use App\Models\TaskTag;
use App\Models\User;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//!データの一覧表示 index
    {
        $tasks = Task::all();
        // $tags = Tag::all();
        return view('todo.index',compact($tasks));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//!新規作成用フォームの表示 create
    {
        $tasks = Task::with('tags')->sorted()->get();
        $tags = Tag::orderBy('name')->get();
        return view('todo.index',compact('tasks','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//!データの新規保存 store
    {
        $validated = $request->validate([
            'title'      => ['required','string','max:100'],
            'tag_ids'    => ['nullable','array'],
            'tag_ids.*'  => ['integer','exists:tags,id'],
        ]);

        $nextSort = (Task::max('sortNumber')??0) + 1;

        $task = Task::create([
            'title'      => $validated['title'],
            'sortNumber' => $nextSort,
        ]);

        $task->tags()->sync($validated['tag_ids']??[]);//多対多の紐付け

        return redirect()->route('todo.index')->with('message','タスクを登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//!データの個別表示 show
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//!データの編集用フォームの表示 edit
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//!データの更新 update
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//!データの削除 destroy
    {
        //
    }
}
