<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forumPosts = ForumPost::all();
        return view('forum.index', ['forumPosts' => $forumPosts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$language =  Language::selectLanguage();
        //return view('forum.create', ['language' => $language]);
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required|min:10',
            'body' => 'required|min:20',

        ]);

        $newPost = ForumPost::create([
            'title' => $request->title,
            'body'  => $request->body,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function show(ForumPost $forumPost)
    {
        return view('forum.show', ['forumPost' => $forumPost]);
    }

    public function showUserPosts(ForumPost $forumPosts)
    {
        $forumPosts = ForumPost::select()->where('user_id', Auth::user()->id)->get();

        return view('forum.user-posts', ['forumPosts' => $forumPosts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumPost $forumPost)
    {
        return view('forum.edit', ['forumPost' => $forumPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumPost $forumPost)
    {
        $request->validate([

            'title' => 'required|min:10',
            'body' => 'required|min:20',

        ]);

        $forumPost->update([
            'title' => $request->title,
            'body'  => $request->body,
        ]);

        return redirect(route('forum.user-posts', $forumPost->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumPost $forumPost)
    {
        $forumPost->delete();
        return redirect(route('forum.user-posts'));
    }
}
