<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Exception;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return request('keyword');
        
        if(request('keyword')){
            $posts = Post::where('body', 'Like', '%'. request('keyword') . '%')->get();
        } else{
            $posts = Post::orderBy('id', 'DESC')->get();
        }
        
        return view("index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            $validated = request()->validate([
                'postIsi'   => 'required',
                'lablePost'  => 'required',
                'attachment'     => 'mimes:doc,docx,xls,xlsx,ppt,pptx,pdf,jpeg,jpg,png|max:2048',
            ]);


            Post::create([
                'body' => $request->postIsi,
                'lable' => $request->lablePost,
                'attachment' => $request->file('attachment')->move('files', $request->file('attachment')->hashName())
            ]);
        } catch (Exception $e) {
            return 'gagal';
        }

        return redirect()->route('index')->with('status', 'Berhasil Lapor!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::where('id', $id)->firstOrFail();
        return view("show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function removeAttachment($path)
    {  
      if(\File::exists(public_path($path))){
        \File::delete(public_path($path));
      }else{
        dd('File not found');
      }
    }

    public function destroy($id)
    {
        //
        $post = Post::where('id', $id)->firstOrFail();
        $pathAttachment = $post->attachment;
        $this->removeAttachment($pathAttachment);
        $post->delete();

        return redirect()->route('index')->with('status', 'Berhasil Menghapus Lapor!');
    }
}
