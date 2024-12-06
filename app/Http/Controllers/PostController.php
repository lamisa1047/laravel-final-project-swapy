<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{

    public function filestore(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');  // Make sure these match form field names
        $post->author = $request->input('author');
        $post->condition = $request->input('condition');
        $post->save();

        return redirect('/');
    }
    public function showlist()
    {
        return view('page.list', ['posts' => Post::all()]);
    }
    public function home()
    {
        return view('page.home',['posts' => Post::all()]);
    }
    public function delete($id)
{
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('list');
}

}
