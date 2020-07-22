@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
   
    @include('front._include.header')
   <div class="jquery-script-center"> </div>
<!-- ----------------------------------------- -->
 <section class="d_none sm_none">
         @include('front._include.section_search_top') </section>
  <!-- start section slider ======================================================================================-->
<section class="content_slider page_show_article p_b_30 posi_r">
       <div class="custom_container container"> 
         <div class="row"> 
   @include('front._include.amazonmenu')
             </div><!--col-md-3  amazonmenu===============================-->
               <div class="col-md-9 contact_col_slider  " >
                   <div class="card card_border_none "  >
                      <div class="card-header card_header_custom card_header_slider ">

                      @include('front._include.news_bar')

                      </div>
                  </div>

               <aside class="z_index_9">
{{------------------------------------------start news show --}}


<!-- ---------------------------------------------------------------- -->
    <div class="content_section_articles section_show_this_artitecl">
        <div class="container">
            <div class="row content_footer_sections">
                <div class="col-md-12 article_large article ">
                    <div class="content_author_article d-n">
                        <div class="content_img_author">
                        </div><!--content_img_author-->
                          @if(!empty($articlefind->add_by_photo))

                           <img class="img_author" src="{{url('public/storage').Storage::url($articlefind->add_by_photo)}}">  <span class="  pont_on_line_page_show_this_article">  </span>
                       
                           @else
                           <img class="img_author" src="{{url('public/storage').'/'.$articlefind->photo}}">                    <span class="  pont_on_line_page_show_this_article">  </span>

                           @endif
                        
                        <div class="content_name_data_author">
                            <span class="name_author"><i class="fa fa-star"> </i> {{$articlefind['product_name_'.$lang]}}</span><!--name_author--> <br>
                            <span class="status_author">{{trans('admin.updated_at')}}</span> <span class="data_author">{{$articlefind->updated_at}}</span>
                            <span class="status_author">{{trans('admin.created_at')}}</span> <span class="data_author">{{$articlefind->created_at}}</span>
                        </div><!--content_img_author-->
                    </div><!--content_author_article-->
                    <article class="content_post">
                        <strong class=" "> <center>{{$articlefind['product_name_'.$lang]}}</center></strong>
                        <div class="post">{{$articlefind['description_'.$lang]}}</div>


                    </article>
                </div><!--col-md-8-->
                <div class="col-md-12 article_small article  " >
                    <!-- -------------         -->
                    {{--                        -============================================--}}
                    {{--                        -============================================--}}
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->


                        <!-- The slideshow -->
                             
                           
                            @if( $files->count() !==  1 )
                         
                      
                         <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{url('public/storage').'/'.$articlefind->photo}}" alt="Los Angeles">
                            </div>
                            @foreach ( $files as $fil)


                                @if($articlefind->id == $fil->relation_id )
                                    <div class="carousel-item  ">
                                        <img src="{{url('public/storage').'/'.$fil->full_file}}" style="width: 100%;height: 400px" alt="sub img articles">
                                    </div>

                         

                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>       @endif
                            @endforeach
                          @else
                                                      @foreach ( $files as $fil)

                                                                  <img src="{{url('public/storage').'/'.$fil->full_file}}" style="width: 100%;height: 400px" alt="sub img articles">
                            @endforeach

                          @endif
                          
                {{--                        -============================================--}}

                <!-- ----------------------------------------- -->
                </div><!--col-md-12-->
            </div><!--row content_footer_sections-->
        </div><!--container-->
    </div><!--content_section_articles-->
    <!-- -------------------------------------------------------------------------- -->
     {{------------------------------------------End   news show --}}
               </aside>

 
    </div><!--col-md-9===============================--> 
          <!-- ---------------------------------------------------------------- -->
        </div><!--row-->
        </div><!--container-->
   </section><!-- section content_slider-->

  <!-- -------------------------------------------------------------------------- -->
 <!-- End section slider ========================================================================================= -->

    <aside class="z_index_9"> @include('front._include.related')</aside>
       <aside class="z_index_9"> @include('front._include.ads')</aside>
       
    @include('front._include.footer')
    @include('front._include.sidbar')
    




    @include('front._include.footer_links')













  
 
