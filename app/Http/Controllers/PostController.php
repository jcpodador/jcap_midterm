<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts() {
        $posts = Post::all();
        return view('dashboard', compact('posts'));
    }

    public function postsInCategory(Category $category) {

        $posts = Post::where('category_id', $category->id)->get();

        return view('postsincategory', compact('posts', 'category'));
    }

    public function postsOfAuthor(User $user) {

        $posts = Post::where('user_id', $user->id)->get();

        return view('postsofauthor', compact('posts', 'user'));
    }

    public function authors() {
        $users = User::all();
        return view('authors', compact('users'));
    }

    public function createpost() {
        return view('create');
    }

    public function storepost(Request $request) {
        $this->validate($request, [
            'category_id' => 'required|numeric',
            'post' => 'required',
        ]);

        Post::create([
            'user_id'   => auth()->user()->id,
            'category_id' => $request->category_id,
            'post'      => $request->post
        ]);

        return redirect('/dashboard');
    }

}
