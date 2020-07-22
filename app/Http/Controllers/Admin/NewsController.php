<?php

namespace App\Http\Controllers\Admin;
use App\Model\News;
use App\DataTables\NewsDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NewsDatatable $news)
    {
        $news_all = News::orderBy('created_at','DESC')->paginate(6);
        // News::orderBy('id', 'desc');


       return $news->render('back.news.index',['title'=>trans('admin.news'),'news_all'=>$news_all]);
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $news = News::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($news)
            ->addColumn('action', function ($news) {
                return '<a href="#edit-'.$news->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.news.create',['title'=>trans('admin.create-news')]);

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
                        'path'        =>'news',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        News::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/news');

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
                        'path'        =>'news',
                        'upload_type' =>'single',
                        'delete_file' =>'',

                     ]);
                }
        News::Create($data);
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

        $news = News::find($id);
        $title = trans('admin.edit');
         return view('back.news.edit',compact('news','title'));
    }
        public function show($id)
    {
        $news = News::find($id);
       return dd ($news);
        $title = trans('admin.show');
         return view('back.news.edit',compact('news','title'));
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
                        'path'        =>'news',
                        'upload_type' =>'single',
                        'delete_file' =>News::find($id)->photo,
                    ]);
                }
 
        News::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // News::find($id)->delete();
         $news =  News::find($id);
         Storage::delete($news->photo);
         $news->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/news');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // News::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $news =  News::find($id);
                Storage::delete($news->photo);
                $news->delete();
            }

        }/*if*/ else{
            // News::find(request('item'))->delete();
              $news =  News::find(request('item'));
                Storage::delete($news->photo);
                $news->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/news');
    }
}
