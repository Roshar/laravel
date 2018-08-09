<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function someMethod(Request $request)
    {
        $name = $this->request->input('name','Салман');
        $surname = $request->input('surname','Араев');

//        if (isset($_GET['name'])){
//            $name = $_GET['name'];
//        }else{
//            $name = 'Салман';
//        }


        return view('test',
            [
                'name'=>$name,
                'surname' =>$surname
            ]);
//        return $this->request->all();
    }
    public function someMethod2(Request $request, $name, $surname = null)
    {
//        $name = $this->request->input('name','Салман');
//        $surname = $request->input('surname','Араев');

//        if (isset($_GET['name'])){
//            $name = $_GET['name'];
//        }else{
//            $name = 'Салман';
//        }


        return view('test',
            [
                'name'=>$name,
                'surname' =>$surname
            ]);
//        return $this->request->all();
    }

    public function showPosts()
    {
        return view('pages.posts');
    }
}
