@php
    if (empty (session('lingfront')))
    {
    $lang ='en';
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
<section class="content_slider p_b_30 posi_r"> 
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
    <div class="content_section_articles">
        <div class="container">
            <div class="row content_footer_sections">
                <div class="col-md-6 article_large article ">
                    <div class="content_author_article d-n">
                        <div class="content_img_author">
                            <img class="img_author" src="{{url('public/storage').'/'.$sliderfind->photo}}">  <span class="pont_on_line">  </span>
                        </div><!--content_img_author-->
                        <div class="content_name_data_author">
                            <span class="name_author"><i class="fa fa-star"> </i> {{$sliderfind['head_'.$lang]}}</span><!--name_author--> <br>
                            <span class="status_author">{{trans('admin.updated_at')}}</span> <span class="data_author">{{$sliderfind->updated_at}}</span>
                            <span class="status_author">{{trans('admin.created_at')}}</span> <span class="data_author">{{$sliderfind->created_at}}</span>
                        </div><!--content_img_author-->
                    </div><!--content_author_article-->
                    <article class="content_post">
                        <div class="text-center m_t_100"> {{$sliderfind['head_'.$lang]}} </div>
                        <hr>
                        <div class="text-center m_t_100"> {{$sliderfind['title_'.$lang]}}</div>
                    </article>
                </div><!--col-md4--->
                <div class="col-md-6 article_small article ">
                    <!-- -------------         -->
                    <div class="img_this_article">
                        <a href="#">  <img src="{{url('public/storage').'/'.$sliderfind->photo}}" class="img_this_article" style="height: 422px"></a>

                    </div>
                    <!-- ----------------------------------------- -->
                </div><!--col-md-6-->
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
 
    <aside class="z_index_9"> @include('front._include.popular')</aside>
       <aside class="z_index_9"> @include('front._include.ads')</aside>
       
    @include('front._include.footer')
    @include('front._include.sidbar')
    




    @include('front._include.footer_links')













  
 
