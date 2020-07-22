<?php

namespace App\Http\Controllers\Admin;
use App\Model\Ads;
use App\DataTables\AdsDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdsDatatable $ads)
    {
        $ads_all = Ads::orderBy('created_at','DESC')->paginate(6);
        // Ads::orderBy('id', 'desc');


       return $ads->render('back.ads.index',['title'=>trans('admin.ads'),'ads_all'=>$ads_all]);
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $ads = Ads::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($ads)
            ->addColumn('action', function ($ads) {
                return '<a href="#edit-'.$ads->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.ads.create',['title'=>trans('admin.create-ads')]);

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
                        'path'        =>'ads',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        Ads::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/ads');

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
                        'path'        =>'ads',
                        'upload_type' =>'single',
                        'delete_file' =>'',

                     ]);
                }
        Ads::Create($data);
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

        $ads = Ads::find($id);
        $title = trans('admin.edit');
         return view('back.ads.edit',compact('ads','title'));
    }
        public function show($id)
    {
        $ads = Ads::find($id);
       return dd ($ads);
        $title = trans('admin.show');
         return view('back.ads.edit',compact('ads','title'));
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
                        'path'        =>'ads',
                        'upload_type' =>'single',
                        'delete_file' =>Ads::find($id)->photo,
                    ]);
                }
 
        Ads::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/ads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Ads::find($id)->delete();
         $ads =  Ads::find($id);
         Storage::delete($ads->photo);
         $ads->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/ads');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Ads::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $ads =  Ads::find($id);
                Storage::delete($ads->photo);
                $ads->delete();
            }

        }/*if*/ else{
            // Ads::find(request('item'))->delete();
              $ads =  Ads::find(request('item'));
                Storage::delete($ads->photo);
                $ads->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/ads');
    }
}
