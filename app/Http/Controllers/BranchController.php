<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// use App\Models\Table;
use App\Models\User;
use App\Models\City;
use App\Models\Branch;
use App\Models\Role;

class BranchController extends Controller
{
    //
    public function show_page()
    {   
        
        $users = User::where('role', 1)->get();
        $cities = City::all();
        // dd($cities);

        return view('owner.add_branch', compact('users', 'cities'));
    }

    function add(Request $request)
    {
        // dd($request->all());

        $branch = new Branch;
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->phone = $request->phone_no;
        $branch->city = $request->city;
        $branch->Online_ordering = $request->onlineorder;
        $branch->dining = $request->dinning;
        $branch->user_id = $request->user;
        $branch->save();

    }
    function show()
    {
        $branches = Branch::all();
        return view('owner.branch', compact('branches'));
    }


    function user()
    {   
        // $users = User::where('role', '>', 0)->get();
        $roles = Role::where('id', '>=', 1)->get();
        $branches = Branch::all();
        return view('owner.add_user', compact('roles', 'branches'));
    }

    function add_user(Request $request)
    {
        // dd($request->all());
        $user = new User;
        $user->name = $request->name;
        $user->branch_id = $request->branch;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->save();
    }
}
