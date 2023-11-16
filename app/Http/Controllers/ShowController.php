<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Categories;
use App\Models\Blogs;
use App\Models\Visits;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function push_data_index (){
        // auto count visit
        $visits = new Visits;
        $visits->save();

        $categories = Categories::all();
        $blogs_header = Blogs::all();

        $blogs = Blogs::orderByDesc('created_at')->paginate(3);
        $page = Blogs::paginate(3);

        $blogs_clients = Blogs::orderByDesc('created_at')->paginate(6);

        return view('client.index',['blogs'=>$blogs, 'blogs_clients'=>$blogs_clients, 'page'=>$page, 
                                                    'categories'=>$categories, 'blogs_header'=>$blogs_header]);
    }

    public function push_data_category(){
        $categories = Categories::all();
        $categories_all = Categories::all();
        $blogs_header = Blogs::all();
        $blogs = Blogs::orderByDesc('created_at')->get();
        return view('client.category',['categories_all'=>$categories_all, 'categories'=>$categories, 
                                                            'blogs'=>$blogs, 'blogs_header'=>$blogs_header]);
    }

    public function push_data_blog ($id){
        $categories = Categories::all();
        $blogs_header = Blogs::all();
        $blogs = Blogs::all();
        $blog_id = $id;

        return view('client.blog-details',['blogs'=>$blogs, 'blog_id'=>$blog_id, 
                                'categories'=>$categories, 'blogs_header'=>$blogs_header]);
    }

    public function push_data_contact(){
        $categories = Categories::all();
        $blogs_header = Blogs::all();
        return view('client.contact',['categories'=>$categories, 'blogs_header'=>$blogs_header]);
    }

    public function push_data_aboutme(){
        $user_id_current = Auth::id();
        $user_current = User::find($user_id_current);

        $categories = Categories::all();
        $blogs_header = Blogs::all();
        return view('client.aboutme',['categories'=>$categories,
                    'blogs_header'=>$blogs_header, 'user_current'=>$user_current]);
    }
}
