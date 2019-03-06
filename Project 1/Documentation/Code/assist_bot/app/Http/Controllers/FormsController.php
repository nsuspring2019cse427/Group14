<?php

namespace App\Http\Controllers;

use App\Form;
use App\FormTag;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();
        return view('backEnd.forms.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('backEnd.forms.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'file'=>'required',
            'tags'=>'required',
        ]);
        $form = new Form;
        $form->title = $request->title;
        $form->description = $request->description;
        if(File::exists(Input::file('file'))){
            Storage::putFile('public', $request->file('file'));
            $form->file = $request->file('file')->hashName();
        }
        $form->save();
        foreach ($request->tags as $tagID){
            $formTag = new FormTag;
            $formTag->form_id = $form->id;
            $formTag->tag_id = $tagID;
            $formTag->save();
        }
        return redirect()->back()->with('success', 'Successfully Created');
    }


    public function search(Request $request)
    {
        //return $request->all();

        $forms = Form::with('tag')
            ->whereHas('tag', function ($query) use ($request){
                $query->where('name', 'like', '%'.$request->q.'%'); //->whereIn('name', explode(' ', $request->q))
            })
            ->get();
        if($forms != '[]'){
            $data = '';
            foreach ($forms as $form){
                $array = explode('.', $form->file);
                $data .= '<div class="col-lg-4" ><a href="'.route('forms.download',$form->id).'"><div class="box_feat" id="icon_1">
						<img src="'.url('storage/'.end($array).'.png').'" width="100%" height="200">
						<h3>'.$form->title.'</h3>
					</div></a>
				</div>';
            }
            $count=count($forms);
        } else {
            $data = '<div style="width: 100%;text-align: center;"><h2>Not Found!!</h2></div>';
            $count=0;
        }
        return response()->json(['result'=>$data, 'count'=>$count]);

    }


    public function download($id)
    {
        $form = Form::findOrFail($id);
        $array = explode('.', $form->file);
        return Storage::download('public/'.$form->file, 'form.'.end($array));
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
    public function destroy($id)
    {
        //
    }
}
