<?php

namespace App\Http\Controllers\Admin;
use App\Model\Testimonial;
use App\DataTables\TestimonialDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TestimonialDatatable $testimonial)
    {
        $testimonial_all = Testimonial::orderBy('created_at','DESC')->paginate(6);
        // Testimonial::orderBy('id', 'desc');


       return $testimonial->render('back.testimonial.index',['title'=>trans('admin.testimonial'),'testimonial_all'=>$testimonial_all]);
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $testimonial = Testimonial::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($testimonial)
            ->addColumn('action', function ($testimonial) {
                return '<a href="#edit-'.$testimonial->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.testimonial.create',['title'=>trans('admin.create-testimonial')]);

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
                        'path'        =>'testimonial',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        Testimonial::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/testimonial');

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
                        'path'        =>'testimonial',
                        'upload_type' =>'single',
                        'delete_file' =>'',

                     ]);
                }
        Testimonial::Create($data);
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

        $testimonial = Testimonial::find($id);
        $title = trans('admin.edit');
         return view('back.testimonial.edit',compact('testimonial','title'));
    }
        public function show($id)
    {
        $testimonial = Testimonial::find($id);
       return dd ($testimonial);
        $title = trans('admin.show');
         return view('back.testimonial.edit',compact('testimonial','title'));
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
                        'path'        =>'testimonial',
                        'upload_type' =>'single',
                        'delete_file' =>Testimonial::find($id)->photo,
                    ]);
                }
 
        Testimonial::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Testimonial::find($id)->delete();
         $testimonial =  Testimonial::find($id);
         Storage::delete($testimonial->photo);
         $testimonial->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/testimonial');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Testimonial::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $testimonial =  Testimonial::find($id);
                Storage::delete($testimonial->photo);
                $testimonial->delete();
            }

        }/*if*/ else{
            // Testimonial::find(request('item'))->delete();
              $testimonial =  Testimonial::find(request('item'));
                Storage::delete($testimonial->photo);
                $testimonial->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/testimonial');
    }
}
