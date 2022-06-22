<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index()
        {
            $event=CategoryRepos::getAllCategory();
            return view('Category.indexCategory',
                [
                    'event'=>$event,
                ]);
        }

    public function create(){
        return view(
            'Category.newCategory',
            ["event"=>(object)[
                'eventid'=>'',
                'eventname'=>'',
                'image'=>'',
                'description'=>''
            ]]);
    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $event = (object)[
            'eventname' => $request->input('eventname'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
        ];

        $newid = CategoryRepos::insert($event);

        return redirect()
            ->action('CategoryController@index')
            ->with('msg', 'New class with id: '.$newid.' has been inserted');
    }

    function formValidate(Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'eventname' => ['required'
                ],
//                'image' => ['required'],
                'description' => ['required']

            ],
            [
                'eventname.required' => 'eventname can not be empty',
                'description.required' => 'description can not be empty'
            ]
        );
    }

    public function edit($eventid)
    {
        $event = CategoryRepos::getEventById($eventid); //this is always an array


        return view(
            'Category.updateCategory',
            ["event" => $event[0]]);
    }

    public function update(Request $request, $eventid)
    {
        if ($eventid != $request->input('eventid')) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryController@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $event = (object)[
            'eventid' => $request->input('eventid'),
            'eventname' => $request->input('eventname'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
        ];
        CategoryRepos::update($event);

        return redirect()->action('CategoryController@index')
            ->with('msg', 'Update Successfully');
    }

    public function confirm($eventid){
        $event = CategoryRepos::getEventById($eventid); //this is always an array

        return view('Category.deleteCategory',
            [
                'event' => $event[0]
            ]
        );
    }

    public function destroy(Request $request, $eventid)
    {
        if ($request->input('eventid') != $eventid) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryController@index');
        }

        CategoryRepos::delete($eventid);


        return redirect()->action('CategoryController@index')
            ->with('msg', 'Delete Successfully');
    }

}
