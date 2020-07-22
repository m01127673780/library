<?php

namespace App\Http\Controllers\Admin;
use App\Model\Newsletter;
use App\DataTables\NewsletterDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NewsletterDatatable $newsletter)
    {
        $newsletter_all = Newsletter::orderBy('created_at','DESC')->paginate(6);
        // Newsletter::orderBy('id', 'desc');


       return $newsletter->render('back.newsletter.index',['title'=>trans('admin.newsletter'),'newsletter_all'=>$newsletter_all]);
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $newsletter = Newsletter::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($newsletter)
            ->addColumn('action', function ($newsletter) {
                return '<a href="#edit-'.$newsletter->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.newsletter.create',['title'=>trans('admin.create-newsletter')]);

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
            'email'        =>'required|email|unique:newsletters',
            'photo'                    =>'sometimes|nullable|'.v_image(),
        ],[
            'email'                     =>trans('admin.email'),
            'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'newsletter',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        Newsletter::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/newsletter');

    }
    public function quick_store(Request $request)
    {
              $data =$this->validate(request(),[
                  'email'        =>'required|email|unique:admins',
                  'photo'                    =>'sometimes|nullable|'.v_image(),
              ],[
                  'email'                     =>trans('admin.email'),
                  'photo'                    =>trans('admin.photo'),
        ],[
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'newsletter',
                        'upload_type' =>'single',
                        'delete_file' =>'',

                     ]);
                }
        Newsletter::Create($data);
        session()->flash('successhome', trans('admin.record_added') );
        return redirect('/');
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

        $newsletter = Newsletter::find($id);
        $title = trans('admin.edit');
         return view('back.newsletter.edit',compact('newsletter','title'));
    }
        public function show($id)
    {
        $newsletter = Newsletter::find($id);
       return dd ($newsletter);
        $title = trans('admin.show');
         return view('back.newsletter.edit',compact('newsletter','title'));
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
            'email'                    =>'required|email|unique:admins',
            'photo'                    =>'sometimes|nullable|'.v_image(),
         ],[
            'email'                    =>trans('admin.email'),
            'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'newsletter',
                        'upload_type' =>'single',
                        'delete_file' =>Newsletter::find($id)->photo,
                    ]);
                }
 
        Newsletter::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/newsletter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Newsletter::find($id)->delete();
         $newsletter =  Newsletter::find($id);
         Storage::delete($newsletter->photo);
         $newsletter->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/newsletter');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Newsletter::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $newsletter =  Newsletter::find($id);
                Storage::delete($newsletter->photo);
                $newsletter->delete();
            }

        }/*if*/ else{
            // Newsletter::find(request('item'))->delete();
              $newsletter =  Newsletter::find(request('item'));
                Storage::delete($newsletter->photo);
                $newsletter->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/newsletter');
    }
}
