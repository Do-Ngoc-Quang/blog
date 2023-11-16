<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function view_categories(){
        $user_id_current = Auth::id();
        $user = User::all();

        $category = Categories::all();
        $page = Categories::paginate(6);
        return view('admin.categories',['category'=>$page,'page'=>$page, 'users'=>$user, 'user_id_current'=>$user_id_current]);
    }

    public function create_category(Request $request){
        $categories = new Categories;

        $categories->name = $request['name'];
        $categories->description = $request['description'];

        $categories->save();
        $successs = 'Category create successfully.';
        return redirect('/categories')->with('success', $successs);
    }

    public function edit_category(Request $request, $id){
        $categories = Categories::find($id);

        $categories->name = $request['new-name'];
        $categories->description = $request['new-description'];

        $categories->save();
        $successs = 'Update successfully.';
        return redirect('/categories')->with('success', $successs);
    }

    public function delete_category($id){
        $categories = Categories::find($id);
        $categories->delete();

        $successs = 'Delete successfully.';
        return redirect('/categories')->with('success', $successs);
    }
}
