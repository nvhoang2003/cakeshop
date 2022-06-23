<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin=AdminRepos::getAllAdmin();
        return view('Admin.indexAdmin',
            [
                'admin'=>$admin,
            ]);
    }



    function formValidate(Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'username' => ['required'
                ],
//                'image' => ['required'],
                'contact' => ['required']

            ],
            [
                'username.required' => 'username can not be empty',
                'contact.required' => 'contact can not be empty'
            ]
        );
    }

    public function edit($admin)
    {
        $admin = AdminRepos::getAdminById($admin); //this is always an array


        return view(
            'Admin.updateAdmin',
            ["admin" => $admin[0]]);
    }

    public function update(Request $request, $admin)
    {
        if ($admin != $request->input('admin')) {
            //id in query string must match id in hidden input
            return redirect()->action('AdminController@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $event = (object)[
            'adminid' => $request->input('adminid'),
            'username' => $request->input('username'),
            'conytact' => $request->input('contact'),
            'email' => $request->input('email'),
        ];
        AdminRepos::update($admin);

        return redirect()->action('AdminController@index')
            ->with('msg', 'Update Successfully');
    }
}
