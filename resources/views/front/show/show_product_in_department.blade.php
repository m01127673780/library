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
<section class="content_slider p_b_30 posi_r">
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

<!-- -------------------------------------------------------------------------- -->
<!-- End section slider ========================================================================================= -->
<section class="all_content_section_articales">
{{--  ===================================================--}}

    <div class="content_section_articles">
        <div class="container">
            <div class="row content_footer_sections">

                <br>



                @foreach($products_paginate as $product_pagin)
                    @if( Request::segment(3) == $product_pagin->department_id )


                            <div class="col-md-6 article_large article ">
                                <div class="content_author_article">
                                    <div class="content_img_author">
                                        <img class="img_author" src="{{url('public/storage').Storage::url($product_pagin->photo)}}">  <span class="pont_on_line">  </span>
                                    </div><!--content_img_author-->
                                    <div class="content_name_data_author">
                                        <span class="name_author">Mohamed badr</span><!--name_author--> <br>
                                        <span class=" data_author"><i class="fa fa-star"> </i>  {{trans('admin.created_at')}} {{$product_pagin->created_at}}</span>
                                        <span class=" status_author"> <i class="fa fa-calendar-alt"> </i>     {{$product_pagin['product_name_'.$lang]}}</span>
                                    </div><!--content_img_author-->
                                </div><!--content_author_article-->

                                <article class="content_post">
                                    <div class="post" >
                                        <div  class="content_article"> {{$product_pagin['description_'.$lang]}} </div>
                                        <a class="color_000" href="{{url('show/article/'.$product_pagin->id)}}"> ...الاطلاع  على المزيد  </a>
                                    </div>
                                </article>
                                <div class="m_t_20">
                                    <div class="img_this_article">
                                        <a href="{{url('show/article/'.$product_pagin->id)}}">
                                            <img src="{{url('public/storage').Storage::url($product_pagin->photo)}}" class="img_this_article_show"></a>

                                    </div>
                                </div>

                            </div><!--col-md-8-->

                        @endif


                @endforeach

      @if(($product_pagin->department_id )== Request::segment(3) )
                <div class="container p_t_b_50">
                    <div class="col-md-12">
                        {{$products_paginate->links('vendor.pagination.bootstrap-4')}}
                    </div>
                </div>
                @else
                    <div class="container p_t_b_50">
                        <div class="col-md-12">
                            <center><h4> {{trans('admin.not_found_items')}}</h4></center>
                        </div>
                    </div>
       @endif

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
@include('front._include.ads')


@include('front._include.footer')
@include('front._include.sidbar')







@include('front._include.footer_links')















