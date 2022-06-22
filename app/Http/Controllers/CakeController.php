<?php

namespace App\Http\Controllers;

use App\Repository\CakeRepos;
use App\Repository\CategoryRepos;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function index()
    {
        $cake=CakeRepos::getAllCake();
        return view('Cake.indexCake',
            [
                'cake'=>$cake,
            ]);
    }

    public function create(){
        $event =CategoryRepos::getAllCategory();
    return view(

        'Cake.newCake',
        [
            "cake"=>(object)[
            'cakeid'=>'',
            'event'=>'',
            'cakename'=>'',
            'flavor'=>'',
            'price'=>'',
            'expiry'=>'',
            'image'=>'',
            'size'=>''
        ],
            "event"=>$event
        ]);
}

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $cake = (object)[
            'cakename' => $request->input('cakename'),
            'flavor' => $request->input('flavor'),
            'price' => $request->input('price'),
            'expiry'=>$request->input('expiry'),
            'image'=>$request->input('image'),
            'size'=>$request->input('size'),
            'event'=>$request->input('event')
        ];

        $newid = CakeRepos::insert($cake);

        return redirect()
            ->action('CakeController@index')
            ->with('msg', 'New cake with id: '.$newid.' has been inserted');
    }

    function formValidate (Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'cakename' => ['required'],
                'flavor' => ['required'],
                'price'=>['required'],
                'expiry'=>['required'],
                'size'=>['required'],
                'event'=>['gt:0']
            ],
            [
                'cakename.required' => 'cakename can not be empty',
                'flavor.required' => 'flavor can not be empty',
                'price.required'=>'price can not be empty',
                'expiry.required'=>'expiry can not be empty',
                'size.required'=>'size can not be empty',
                'event.gt'=>'Please choose event cake'
            ]
        );
    }



}
