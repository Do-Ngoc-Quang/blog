<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    public function view_blogs (){
        $user_id_current = Auth::id();
        $user = User::all();

        $blogs = Blogs::all();
        $categories = Categories::all();
        $page_blogs = Blogs::paginate(5);
        return view('admin.blogs',['blogs'=>$page_blogs,'page'=>$page_blogs, 'categories' => $categories, 
                                                    'users'=>$user, 'user_id_current'=>$user_id_current]);
    }

    public function create_blog (Request $request){
        $blogs = new Blogs;

        $blogs->cate_id = $request['cate_id'];
        $blogs->blog_name = $request['blog_name'];
        $blogs->blog_content = $request['blog_content'];
        $img_temp = pathinfo($request->blog_main_image->getClientOriginalName());
        $request->blog_main_image->storeAs('public/upload_images/',$img_temp['basename']);
        $blogs->blog_main_image = $img_temp['basename'];

        $blogs->save();
        $successs = 'Blog create successfully.';
        return redirect('/blogs')->with('success', $successs);
    }

    public function edit_blog(Request $request, $id){
        $blogs = Blogs::find($id);

        $blogs->cate_id = $request['new_cate_id'];
        $blogs->blog_name = $request['new_blog_name'];
        $blogs->blog_content = $request['new_blog_content'];

        $blogs->save();
        $successs = 'Update successfully.';
        return redirect('/blogs')->with('success', $successs);
    }

    public function delete_blog($id){
        $blogs = Blogs::find($id);
        $blogs->blog_main_image!=""?Storage::delete('public/upload_images/'.$blogs->blog_main_image):"";
        $blogs->delete();

        $successs = 'Delete successfully.';
        return redirect('/blogs')->with('success', $successs);
    }
}
