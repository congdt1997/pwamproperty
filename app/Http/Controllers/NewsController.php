<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function getList()
    {
        $news = News::all();
        return view('admin.news.list', ['news'=>$news]);
    }

    public function getAdd()
    {
        return view('admin.news.add');
    }
    public function postAdd(Request $request)
    {
        $this -> validate($request,
            [
                'title' => 'required|min:3',
                'content1' => 'required|min:3',
                'content2' => 'required|min:3'
            ],[
                'title.required'=>'You must input this field!!!',
                'title.min'=>'You must more than 3 characters!',
                'content1.required'=>'You must input this field!!!',
                'content1.min'=>'You must more than 3 characters!',
                'content2.required'=>'You must input this field!!!',
                'content2.min'=>'You must more than 3 characters!',
            ]);
        $news = new News();
        $news -> title = $request -> title;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/images/upload/news', $image);
            $news -> image = $image;
        }else{
            $news -> image = "";
        }
        $news -> content = $request -> content1;
        if($request -> hasFile('image2'))
        {
            $file = $request -> file('image2');
            $image2 = $file ->getClientOriginalName();
            $file -> move('admin_asset/images/upload/news', $image2);
            $news -> image2 = $image2;
        }else{
            $news -> image2 = "";
        }
        $news -> content2 = $request -> content2;
        $news -> save();
        return redirect('admin/news/add')->with('notification', 'Add successfully');
    }
    public function getEdit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit',['news'=>$news]);
    }
    public function postEdit(Request $request,$id)
    {
        $news = News::find($id);
        $this -> validate($request,
            [
                'title' => 'required|min:3',
                'content1' => 'required|min:3',
                'content2' => 'required|min:3'
            ],[
                'title.required'=>'You must input title field!!!',
                'title.min'=>'You must more than 3 characters!',
                'content1.required'=>'You must input content field!!!',
                'content1.min'=>'You must more than 3 characters!',
                'content2.required'=>'You must input content field!!!',
                'content2.min'=>'You must more than 3 characters!',
            ]);
        $news -> title = $request -> title;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/images/upload/news', $image);
            $news -> image = $image;
        }
        $news -> content = $request -> content1;
        if($request -> hasFile('image2'))
        {
            $file = $request -> file('image2');
            $image2 = $file ->getClientOriginalName();
            $file -> move('admin_asset/images/upload/news', $image2);
            $news -> image2 = $image2;
        }
        $news -> content2 = $request -> content2;
        $news -> save();
        return redirect('admin/news/list')->with('notification', 'Add successfully');
    }

    public function getDelete($id)
    {
        $news = News::find($id);
        $news -> delete();
        return redirect('admin/news/list')->with('notification', 'Delete successfully');
    }
}
