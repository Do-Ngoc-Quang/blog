<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;
use App\Models\Blogs;
use App\Models\Contacts;
use App\Models\Visits;

class DashboardController extends Controller
{
    public function view_user(){
        $user_id_current = Auth::id();
        $user = User::all();
        return view('',['users'=>$user], ['user_id_current'=>$user_id_current]);
    }
    public function view_dashboard(){
        $user_id_current = Auth::id();
        $user = User::all();

        $total_categories = Categories::count();
        $total_blogs = Blogs::count();
        $total_contacts = Contacts::count();
        $total_visits = Visits::count();
        return view('admin.index',['total_categories'=>$total_categories, 'total_blogs'=>$total_blogs, 
                                        'total_contacts'=>$total_contacts, 'total_visits'=>$total_visits,
                                        'users'=>$user, 'user_id_current'=>$user_id_current]);
    }
}
