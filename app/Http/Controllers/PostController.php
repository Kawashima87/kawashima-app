<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//!データの一覧表示 index
    {
        // $posts = Post::all(); //カラムごとにインスタンスを生成し、値を入れている
        $posts = Post::where('user_id',auth()->id())->get();
        $posts = Post::with('user')->get();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//!新規作成用フォームの表示 create
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//!データの新規保存 store
    {
        Gate::authorize('test');//ログインid=1ユーザーのみフォームから登校したデータを保存できるゲート制限。
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body'  => 'required|max:400',
        ]);
        $validated['user_id'] = auth()->id();  //auth()->idは、ログインしているユーザーのID
        $post = Post::create($validated);
        return back()->with('message','保存しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)//!データの個別表示 show
    {
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)//!データの編集用フォームの表示 edit
    {
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)//!データの更新 update
    {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body'  => 'required|max:400',
        ]);
        $validated['user_id'] = auth()->id();
        $post->update($validated);
        return back()->with('message','更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Post $post)//!データの削除 destroy
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
