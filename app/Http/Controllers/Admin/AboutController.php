<?php

namespace App\Http\Controllers\Admin;
use App\Model\About;
use App\DataTables\AboutDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AboutDatatable $about)
    {
        $about_all = About::orderBy('created_at','DESC')->paginate(6);
        // About::orderBy('id', 'desc');


       return $about->render('back.about.index',['title'=>trans('admin.about'),'about_all'=>$about_all]);
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $about = About::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($about)
            ->addColumn('action', function ($about) {
                return '<a href="#edit-'.$about->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('back.about.create',['title'=>trans('admin.create-about')]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$this->validate(request(),[
            'title_ar'                 =>'sometimes|nullable',
            'title_en'                 =>'sometimes|nullable',
            'content_ar'               =>'sometimes|nullable',
            'content_en'               =>'sometimes|nullable',
            'start_at'                 =>'sometimes|nullable',
            'end_at'                   =>'sometimes|nullable',
            'link'                     =>'sometimes|nullable',
            'photo'                    =>'sometimes|nullable|'.v_image(),
        ],[
            'title_ar'                 =>trans('admin.title_ar'),
            'title_en'                 =>trans('admin.title_en'),
            'content_ar'                 =>trans('admin.content_ar'),
            'content_en'                 =>trans('admin.content_en'),
            'start_at'                 =>trans('admin.start_at'),
            'end_at'                 =>trans('admin.end_at'),
            'link'                     =>trans('admin.link'),
            'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'about',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        About::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/about');

    }
    public function quick_store(Request $request)
    {
              $data =$this->validate(request(),[
                  'title_ar'                 =>'sometimes|nullable',
                  'title_en'                 =>'sometimes|nullable',
                  'content_ar'                 =>'sometimes|nullable',
                  'content_en'                 =>'sometimes|nullable',
                  'start_at'                 =>'sometimes|nullable',
                  'end_at'                 =>'sometimes|nullable',
                  'link'                     =>'sometimes|nullable',
                  'photo'                    =>'sometimes|nullable|'.v_image(),
              ],[
                  'title_ar'                 =>trans('admin.title_ar'),
                  'title_en'                 =>trans('admin.title_en'),
                  'content_ar'                 =>trans('admin.content_ar'),
                  'content_en'                 =>trans('admin.content_en'),
                  'start_at'                 =>trans('admin.start_at'),
                  'end_at'                 =>trans('admin.end_at'),
                  'link'                     =>trans('admin.link'),
                  'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'about',
                        'upload_type' =>'single',
                        'delete_file' =>'',

                     ]);
                }
        About::Create($data);
        session()->flash('successhome', trans('admin.record_added') );
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $about = About::find($id);
        $title = trans('admin.edit');
         return view('back.about.edit',compact('about','title'));
    }
        public function show($id)
    {
        $about = About::find($id);
       return dd ($about);
        $title = trans('admin.show');
         return view('back.about.edit',compact('about','title'));
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
$data =$this->validate(request(),[
            'title_ar'                 =>'sometimes|nullable',
            'title_en'                 =>'sometimes|nullable',
            'content_ar'                 =>'sometimes|nullable',
            'content_en'                 =>'sometimes|nullable',
          'start_at'                 =>'sometimes|nullable',
          'end_at'                 =>'sometimes|nullable',
            'link'                     =>'sometimes|nullable',
            'photo'                    =>'sometimes|nullable|'.v_image(),
         ],[
            'title_ar'                 =>trans('admin.title_ar'),
            'title_en'                 =>trans('admin.title_en'),
            'content_ar'                 =>trans('admin.content_ar'),
            'content_en'                 =>trans('admin.content_en'),
            'start_at'                 =>trans('admin.start_at'),
            'end_at'                 =>trans('admin.end_at'),
            'link'                     =>trans('admin.link'),
            'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'about',
                        'upload_type' =>'single',
                        'delete_file' =>About::find($id)->photo,
                    ]);
                }
 
        About::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // About::find($id)->delete();
         $about =  About::find($id);
         Storage::delete($about->photo);
         $about->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/about');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // About::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $about =  About::find($id);
                Storage::delete($about->photo);
                $about->delete();
            }

        }/*if*/ else{
            // About::find(request('item'))->delete();
              $about =  About::find(request('item'));
                Storage::delete($about->photo);
                $about->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/about');
    }
}
