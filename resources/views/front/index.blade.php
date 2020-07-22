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
    @include('front._include.section_search_top')</section>
<!-- start section slider ======================================================================================-->
<section class="content_slider   posi_r">
    <div class="custom_container container">
        <div class="row">
            @include('front._include.amazonmenu')
        </div><!--col-md-3  amazonmenu===============================-->
        <div class="col-md-9 contact_col_slider  " >
            <div class="card card_border_none "  >
                <div class="card-header card_header_custom card_header_slider ">

                    @include( 'front._include.news_bar')

                </div>
            </div>
            @include('front._include.slider_top')


        </div><!--col-md-9===============================-->
        <!-- ---------------------------------------------------------------- -->
    </div><!--row-->
    </div><!--container-->
</section><!-- section content_slider-->
@include('front._include.ads')

<!-- -------------------------------------------------------------------------- -->
<!-- End section slider ========================================================================================= -->
<section class="all_content_section_articales">
                                                   <div class="col-md-12 lib_header_bg color_trans">   </div> 

{{--  ===================================================--}}
    <div class="content_section_articles">
        <div class="container">
            <div class="row content_footer_sections">
                <div class="col-lg-12 bg_raf_larg">  </div> 
                     @foreach($departments as $department)
                                <div class="col-md-12 lib_header_bg_name_dep "> 
                                <a href="{{url('show/department/'.$department->id)}}">  <img class="img_icon_dep " src="{{url('public/storage').Storage::url($department->icon)}}"> 
                                {{$department['dep_name_'.$lang]}}
                                </a>
                                </div> 
                @foreach($products_paginate as $product_pagin)
                      @if(($product_pagin->department_id )==  $department->id )
                             <div class="col-md-3 article_large article " >
                                <div class="  ">
                                    <div class=" ">
                                        <a href="{{url('show/article/'.$product_pagin->id)}}">
                                            <img src="{{url('public/storage').Storage::url($product_pagin->photo)}}" class="img_this_article_show">
                                        </a>
                                        <p class="content_img_raf"> </p>
                                    </div>
                                </div>
                            </div><!--col-md-8-->

                         @endif


                @endforeach
                  @endforeach

      @if(($product_pagin->department_id )==  $department->id )
                <div class="container p_t_b_50 d-none">
                    <div class="col-md-12">
                        {{$products_paginate->links('vendor.pagination.bootstrap-4')}}
                    </div>
                </div>
                @else
                    <div class="container p_t_b_50  d-none">
                        <div class="col-md-12">
                            <center><h4> {{trans('admin.not_found_items')}}</h4></center>
                        </div>
                    </div>
       @endif

                 <div class="container p_t_b_50">
                    <div class="col-md-12">
                        {{$products_paginate->links('vendor.pagination.bootstrap-4')}}
                    </div>
                </div>
                
                 <div class="col-lg-12 bg_raf_larg">  </div> 

            </div><!--row content_footer_sections-->
        </div><!--container-->
    </div><!--content_section_articles-->
<style>
    .content_author_article .content_name_data_author{
        float: right!important;
    }
    .all_content_section_articales .content_section_articles .img_author{
        margin-top: 1px!important;
    }
     .content_author_article{
        width: 80%;
    }
    .content_section_articles .article_large
    {
        margin: 54px 0;

    }
</style>
    {{--  ===================================================--}}
</section>

    @include('front._include.about')
     @include('front._include.test2')
        @include('front._include.newsletter')
@include('front._include.footer')
@include('front._include.sidbar')







@include('front._include.footer_links')











