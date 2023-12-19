<?php

namespace App\Http\Controllers;

use App\Models\ai_posts;
use App\Models\category;
use Illuminate\Http\Request;

class AiPostsController extends Controller
{
    
    public function result(Request $request)
    {
        
        $q = $request['search']?? "";
        if( $q != ""){
            $ai_posts = ai_posts::where('title', 'LIKE', "%$q%")->orWhere('post_content', 'LIKE', "%$q%")->paginate(10);
        }
        else{
           
        $ai_posts = ai_posts::orderBy('created_at', 'desc')->paginate(10);

        }
        $category = category::all();
        $data = compact('q', 'ai_posts', 'category');
        return view('questions')->with($data);
    }

   
    public function create()
    {
        return view('/Questions');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
             'post_content' => 'required'
        ]);

        $ai_posts = new ai_posts;
        $ai_posts->title = $request->title;
        $ai_posts->post_content = $request->post_content;
        // $ai_posts->categories_id = $request->categories_id;
        $ai_posts->save();
        return redirect()->route('discussview');
    
    }

    public function details($id)
    {

        $detail['data'] = ai_posts::find($id);

        // return view('details', $detail);
    }

    public function edit($id)
    {
        $ai_posts['postData'] = ai_posts::find($id);
        return view('editPost', $ai_posts);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $ai_posts = ai_posts::find($id);
        
        $ai_posts->title = $request->title;
        $ai_posts->post_content = $request->post_content;
        // $ai_posts->category_id = $request->category_id;
        $ai_posts->save();
        return redirect()->route('discussview');
    }

     public function destroy($id)
    {
        $ai_posts = ai_posts::find($id);
        $ai_posts->delete();
        return redirect()->route('discussview');
    }

   

}