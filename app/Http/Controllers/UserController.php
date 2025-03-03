<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\UserModel;
class UserController extends Controller
{
    // public function user($id,$name){
    //     return view('user')
    //         ->with('id',$id)
    //         ->with('name',$name);
    // }
    //

    public function index(){
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'Nama' => 'Manager'
        //     ]
        // );
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //
        //     ],
        // );
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2

            ],
        );
        $user->save();

        //
        // $user = UserModel::fisrtOrNe(
        //     [
        //         'username' => 'manager',
        //         'Nama' => 'Manager'
        //     ]
        // );

        // $data = [
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];
        // UserModel::create($data);
        // UserModel::insert($data);
        //
        //  $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);
        //
        // UserModel::find(7)->delete();
        // $user = UserModel::all();
        return view('user',['data' => $user]);
    }
}
