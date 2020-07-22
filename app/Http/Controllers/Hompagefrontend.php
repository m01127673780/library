<?php

namespace App\Http\Controllers;
use App\File;
use App\Model\Newsletter;
use App\Model\Product;
use App\Frontend;
use App\Model\Department;
use App\Model\Ads;
use App\Model\News;
use App\Model\About;
use App\Model\Testimonial;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
class Hompagefrontend extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */







    public function index()
    {
        // ...................................
    // $products_last_record = DB::table('products')->orderBy('id', 'DESC')->first();
         $products_last_record            = Product::orderBy('created_at','DESC')->paginate(10);
         $products_first_record           = Product::orderBy('created_at','ASC')->paginate(10);
         $products_paginate               = Product::orderBy('created_at','ASC')->paginate(50);
         $products                        = Product::all();
         $last_products                        = Product::all();

         $products_paginate_footer_one        = Product::orderBy('created_at','DESC')->paginate(12);
           $products_paginate_footer_two      = Product::orderBy('created_at','ASC')->paginate(12);
          
       // ...................................
        $products                         = Product::all();
        $frontends                        = Frontend::all();
        $slider                           = Slider::all();
        $news                              = News::all();
        $ads                              = Ads::all();
        $abouts                           = About::all();
        $testimonial                      = Testimonial::all();
        $departments                      = Department::all();
        $departments_paginate             = Department::orderBy('created_at','DESC')->paginate(5);
        // session()->forget('lingfront');
          return view('front.index',[
            'departments'                 =>$departments,
            'slider'                      =>$slider,
            'news'                        =>$news,
            'ads'                         =>$ads,
            'abouts'                      =>$abouts,
            'testimonial'                 =>$testimonial,
            'products'                    =>$products,
            'products_last_record'        =>$products_last_record,
            'products_first_record'       =>$products_first_record,
            'frontends'                   =>$frontends,
            'products_paginate'           =>$products_paginate,
            'departments_paginate'        =>$departments_paginate,
            'products_paginate_footer_one'          =>$products_paginate_footer_one,
            'products_paginate_footer_two'          =>$products_paginate_footer_two,

         ]);


    }




//
//   function fetch(Request $request) {
//        if($request->get('query'))
//        {
//            $query =$request->get('query');
//               $data= DB::table('products')->where('product_name_en','LIKE','%{$query}%')->get();
//              $output = '<ul class="dropdown-menu">';
//              foreach ($data as $row){
//                  $output.='<li><a href="#">'.$row->product_name_en.'</a></li>';
//                  $output.='</ul>';
//                  echo $output;
//              }
//
//
//        }
//   }



    public function search(Request $request)
    {
        // ...................................
        $request->validate([
            'query' => 'required|min:3',
        ]);
        $query =$request->get('query');
//        $products = Product::search($query)->paginate(10);

        // ...................................
        $frontends = Frontend::all();
         $products                        = Product::all();

        $products_search   = Product::where('product_name_en','like',"%$query%")
                                                                                ->orWhere('product_name_ar','like',"%$query%")
                                                                                ->orWhere('description_en','like',"%$query%")
                                                                                 ->paginate(4);


        $news = News::orderBy('created_at', 'ASC')->paginate(6);
        $ads = Ads::all();
        $abouts = About::all();
        $departments = Department::all();
        $departments_paginate = Department::orderBy('created_at', 'DESC')->get();
        // session()->forget('lingfront');
        return view('front.search_results', [
            'departments' => $departments,
            'news' => $news,
             'ads' => $ads,
            'abouts' => $abouts,
            'products' =>$products,
            'products_search' =>$products_search,
            'frontends' => $frontends,
            'departments_paginate' => $departments_paginate,

        ]);

    }







    public function show_article($id)
    {
        // ...................................

        // ...................................
        $frontends = Frontend::all();
        $articlefind            = Product::find($id);
        $files              = File::all();
        $products                         = Product::all();

        // $productfind   = Product::where('id',$productfind->id)->first();

        $news = News::orderBy('created_at', 'ASC')->paginate(6);
        $ads = Ads::all();
        $abouts = About::all();
        $departments = Department::all();
        $departments_paginate = Department::orderBy('created_at', 'DESC')->paginate(5);
        // session()->forget('lingfront');
        return view('front.show.article', [
            'departments' => $departments,
            'news' => $news,
            'articlefind' => $articlefind,
            'files' => $files,
            'ads' => $ads,
            'abouts' => $abouts,
            'frontends' => $frontends,
            'departments_paginate' => $departments_paginate,
            'products'                    =>$products,


        ]);

    }
    public function newsletter_store_front(Request $request)
    {
        if ($request->ajax())
        {


        $data_newsletter =$this->validate(request(),[
            'email'        =>'required|email|unique:newsletters',
            'photo'                    =>'sometimes|nullable|'.v_image(),
        ],[
            'email'                     =>trans('admin.email'),
            'photo'                    =>trans('admin.photo'),
        ],[
        ]);
        if(request()->hasFile('photo')){
            $data_newsletter['photo']  = Up()->Upload([
                'file'        =>'photo',
                'path'        =>'newsletter',
                'upload_type' =>'single',
                'delete_file' =>'',

            ]);
        }

        Newsletter::Create($data_newsletter);
//        session()->flash('successhome_front', trans('admin.record_added') );
        return  request()->email ;
        }
    }
     // --------------------------start page News --------------------
     public function news()
    { 
        // ...................................
         $products_last_record            = Product::orderBy('created_at','DESC')->paginate(10);
         $products_first_record           = Product::orderBy('created_at','ASC')->paginate(10);
         $products_first_record           = Product::orderBy('created_at','ASC')->paginate(10);
         $products_paginate               = Product::paginate(30);
         $products                        = Product::all();
         $last_products                        = Product::all();
         
         $products_paginate_footer_one        = Product::orderBy('created_at','DESC')->paginate(12);
         $products_paginate_footer_two      = Product::orderBy('created_at','ASC')->paginate(12);
       // ...................................
        $products                         = Product::all();
        $frontends                        = Frontend::all();
        $slider                           = Slider::all();
        $news                              = News::orderBy('created_at','ASC')->paginate(6);
        $ads                              = Ads::all();
        $abouts                           = About::all();
        $testimonial                      = Testimonial::all();
        $departments                      = Department::all();
        $departments_paginate             = Department::orderBy('created_at','DESC')->paginate(5);
        // session()->forget('lingfront');
        return view('front.news',[
        'departments'                 =>$departments,
        'slider'                      =>$slider,
        'news'                        =>$news,
        'ads'                         =>$ads,
        'abouts'                      =>$abouts,
        'testimonial'                 =>$testimonial,
        'products'                    =>$products,
        'products_last_record'        =>$products_last_record,
        'products_first_record'       =>$products_first_record,
        'frontends'                   =>$frontends,
        'products_paginate'           =>$products_paginate,
        'departments_paginate'        =>$departments_paginate,
        'products_paginate_footer_one'          =>$products_paginate_footer_one,
        'products_paginate_footer_two'          =>$products_paginate_footer_two,

         ]);


    }
    /////////////start show_news /////////////
    public function show_news($id)
    {
        // ...................................

        // ...................................
         $frontends = Frontend::all();
         $newsfind            = News::find($id);

        $news = News::orderBy('created_at', 'ASC')->paginate(6);
        $ads = Ads::all();
        $products                        = Product::all();
        $abouts = About::all();
        $departments = Department::all();
        $departments_paginate = Department::orderBy('created_at', 'DESC')->paginate(5);
        // session()->forget('lingfront');
        return view('front.show.news', [
            'departments' => $departments,
             'news' => $news,
             'newsfind' => $newsfind,
             'ads' => $ads,
             'products' => $products,
             'abouts' => $abouts,
              'frontends' => $frontends,
             'departments_paginate' => $departments_paginate,

        ]);

    }

    // --------------------------End   page News --------------------


    // --------------------------start page News --------------------
     public function events()
    { 
        // ...................................
 
        // ...................................
        $frontends                        = Frontend::all();
        $sliders                           = Slider::orderBy('created_at','ASC')->paginate(6);
        $news                              = News::orderBy('created_at','ASC')->paginate(6);
        $ads                              = Ads::all();
        $abouts                           = About::all();
        $testimonial                      = Testimonial::all();
        $departments                      = Department::all();
        $products                        = Product::all();
        $last_products                        = Product::all();
        $departments_paginate             = Department::orderBy('created_at','DESC')->paginate(5);
        // session()->forget('lingfront');
        return view('front.events',[
        'departments'                 =>$departments,
        'sliders'                      =>$sliders,
        'news'                        =>$news,
        'ads'                         =>$ads,
        'products'                    =>$products,

        'frontends'                   =>$frontends,
 
         ]);


    }
    public function show_slider($id)
    {
        // ...................................

        // ...................................
        $frontends = Frontend::all();
        $sliderfind = Slider::find($id);
        $products                        = Product::all();

        $news = News::orderBy('created_at', 'ASC')->paginate(6);
        $ads = Ads::all();
        $abouts = About::all();
        $departments = Department::all();
        $departments_paginate = Department::orderBy('created_at', 'DESC')->paginate(5);
        // session()->forget('lingfront');
        return view('front.show.slider', [
            'departments' => $departments,
            'news' => $news,
            'sliderfind' => $sliderfind,
            'ads' => $ads,
            'abouts' => $abouts,
            'products' =>$products,
            'frontends' => $frontends,
            'departments_paginate' => $departments_paginate,

        ]);

    }

    // --------------------------End   page events --------------------

    // --------------------------start page ads --------------------
     public function ads()
    { 
        // ...................................
 
        // ...................................
        $frontends                        = Frontend::all();
        $sliders                           = Slider::orderBy('created_at','ASC')->paginate(6);
        $news                              = News::orderBy('created_at','ASC')->paginate(6);
        $ads                              = Ads::orderBy('created_at','ASC')->paginate(9);
        $abouts                           = About::all();
        $testimonial                      = Testimonial::all();
        $departments                      = Department::all();
        $departments_paginate             = Department::orderBy('created_at','DESC')->paginate(5);
        $products                        = Product::all();
        $last_products                        = Product::all();
        $products                        = Product::all();

        // session()->forget('lingfront');
        return view('front.ads',[
        'departments'                 =>$departments,
        'sliders'                      =>$sliders,
        'news'                        =>$news,
        'ads'                         =>$ads,
        'products'                         =>$products,

        'frontends'                   =>$frontends,
 
         ]);


    }
    public function show_ads($id)
    {
        // ...................................

        // ...................................
        $frontends = Frontend::all();
        $adsfind = Ads::find($id);
        $products                        = Product::all();
        $last_products                        = Product::all();

        $news = News::orderBy('created_at', 'ASC')->paginate(6);
        $ads = Ads::all();
        $abouts = About::all();
        $departments = Department::all();
        $departments_paginate = Department::orderBy('created_at', 'DESC')->paginate(5);
        // session()->forget('lingfront');
        return view('front.show.ads', [
            'departments' => $departments,
            'news' => $news,
            'adsfind' => $adsfind,
            'ads' => $ads,
            'abouts' => $abouts,
            'frontends' => $frontends,
            'departments_paginate' => $departments_paginate,
            'products'                         =>$products,

        ]);

    }
    // --------------------------End   page ads --------------------



 // -----------------------------------start article_details
    public function article_details()
    { 
        return view('front.article_details',[        
         ]);

    }
  // -----------------------------------End  article_details

  


 // -----------------------------------start news
 
  // -----------------------------------End  news


    public function lang_front_ar()
    {
         session()->forget('lingfront');
         session()->put('lingfront','ar');
        return back();

    }

    public function lang_front_en()
    {
         session()->forget('lingfront');
        session()->put('lingfront','en');
        return back();
    }








     /* Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
// -----------  start show 
    public function show(Product $productfind, $id)
    {
         $productfind            = Product::find($id);
         $products               = Product::all();
          $products_paginate      = Product::orderBy('created_at','DESC')->paginate(20); 
          $products_paginate_footer_one      = Product::orderBy('created_at','DESC')->paginate(13);
           $products_paginate_footer_two      = Product::orderBy('created_at','ASC')->paginate(13);
          
          
         $all_products           = Product::orderBy('created_at','DESC')->paginate(30);
         $products               = Product::orderBy('created_at','DESC')->paginate(16);
         $frontends              = Frontend::all();
          $sliders_all            = Slider::orderBy('created_at','DESC')->paginate(6);
         $departments            = Department::all();
         $departments_paginate    = Department::orderBy('created_at','DESC')->paginate(5);

        // $productfind   = Product::where('id',$productfind->id)->first();
        return view('front.show',[
            'productfind'=>$productfind,
// ----------------
             'departments'             =>$departments,
             'departments_paginate'     =>$departments_paginate,
             'sliders_all'               =>$sliders_all,
            'products'                   =>$products,
            'all_products'               =>$all_products,
            'products'                    =>$products,
            'frontends'                  =>$frontends,
            'products_paginate'          =>$products_paginate,
            'products_paginate'          =>$products_paginate,
            'products_paginate_footer_one'          =>$products_paginate_footer_one,
            'products_paginate_footer_two'          =>$products_paginate_footer_two,


        ]);

            
           // 'productfind_modal'=>$productfinds_modal,


         
    }

// ----------- End start show
// -----------  start show 


    public function show_department()
    {
        // ...................................
        // $products_last_record = DB::table('products')->orderBy('id', 'DESC')->first();
        $products_last_record            = Product::orderBy('created_at','DESC')->paginate(10);
        $products_first_record           = Product::orderBy('created_at','ASC')->paginate(10);
        $products_paginate               = Product::orderBy('created_at','DESC')->paginate(10);
        $products                        = Product::all();
        $last_products                        = Product::all();

        $products_paginate_footer_one        = Product::orderBy('created_at','DESC')->paginate(12);
        $products_paginate_footer_two      = Product::orderBy('created_at','ASC')->paginate(12);

        // ...................................
        $products                         = Product::all();
        $frontends                        = Frontend::all();
        $slider                           = Slider::all();
        $news                              = News::all();
        $ads                              = Ads::all();
        $abouts                           = About::all();
        $testimonial                      = Testimonial::all();
        $departments                      = Department::all();
        $departments_paginate             = Department::orderBy('created_at','DESC')->paginate(5);
        // session()->forget('lingfront');
        return view('front.show.show_product_in_department',[
            'departments'                 =>$departments,
            'slider'                      =>$slider,
            'news'                        =>$news,
            'ads'                         =>$ads,
            'abouts'                      =>$abouts,
            'testimonial'                 =>$testimonial,
            'products'                    =>$products,
            'products_last_record'        =>$products_last_record,
            'products_first_record'       =>$products_first_record,
            'frontends'                   =>$frontends,
            'products_paginate'           =>$products_paginate,
            'departments_paginate'        =>$departments_paginate,
            'products_paginate_footer_one'          =>$products_paginate_footer_one,
            'products_paginate_footer_two'          =>$products_paginate_footer_two,

        ]);


    }
// ----------- End start show_department 
// -----------  start show 
    public function show_all_products_page ()
    {
         $products               = Product::all();
          $products_paginate      = Product::orderBy('created_at','DESC')->paginate(20); 
          $products_paginate_show_all_product      = Product::orderBy('created_at','DESC')->paginate(70); 
          $products_paginate_footer_one      = Product::orderBy('created_at','DESC')->paginate(13);
           $products_paginate_footer_two      = Product::orderBy('created_at','ASC')->paginate(13);
          
          
         $all_products           = Product::orderBy('created_at','DESC')->paginate(30);
         $products               = Product::orderBy('created_at','DESC')->paginate(16);
         $frontends              = Frontend::all();
          $sliders_all            = Slider::orderBy('created_at','DESC')->paginate(6);
         $departments            = Department::all();
         $departments_paginate    = Department::orderBy('created_at','DESC')->paginate(5);

         return view('front.page_show_all_products',[
// ----------------
             'departments'             =>$departments,
             'departments_paginate'     =>$departments_paginate,
             'sliders_all'               =>$sliders_all,
            'products'                   =>$products,
            'all_products'               =>$all_products,
            'products'                    =>$products,
            'frontends'                  =>$frontends,
            'products_paginate'          =>$products_paginate,
            'products_paginate_show_all_product'          =>$products_paginate_show_all_product,
            'products_paginate_footer_one'          =>$products_paginate_footer_one,
            'products_paginate_footer_two'          =>$products_paginate_footer_two,


        ]);

            
           // 'productfind_modal'=>$productfinds_modal,


         
    }

// ----------- End start show 


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**

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
