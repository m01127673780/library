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
                <div class="content_search  ">
                    @if(($products_search->total())  == 0 )

                        <div class="container  ">
                            <div class="col-md-12">
                            </div>
                        </div>
                    @else
                        <div class="container  ">
                            <div class="col-md-12">
                                <center>
                                    <span> {{trans('admin.found_items_for_search')}}  ( " {{request()->input('query')}} ")   =></span>
                                    <span>
                                        <span> {{trans('admin.result_number')}}</span>=
                                          <span> ({{$products_search->total()}})</span>

                                    </span>
                                </center>
                            </div>
                        </div>
                    @endif

                    {{--------------start table Respons---------}}
                    <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
                        @if(($products_search->total()) >= 1)
                            <thead class="thead-dark">
                            <tr>
                                <th>{{trans('admin.name')}}</th>
                                <th>{{trans('admin.description')}}</th>
                                <th>{{trans('admin.photo_article')}}</th>
                            </tr>
                            </thead>
                        @endif
                        <tbody>
                        @foreach($products_search as $product_search)
                            <tr class="show_tr_in_table"  >
                                <td>
                                    <a href="{{url('show/article/'.$product_search->id)}}"> {{$product_search['product_name_'.$lang]}}</a>
                                </td>
                                <td class="show_description_in_table-">
                                    <a href="{{url('show/article/'.$product_search->id)}}">  {{str_limit($product_search['description_'.$lang],100)}}</a>
                                </td>
                                <td class=" ">
                                    <a href="{{url('show/article/'.$product_search->id)}}">
                                        <img class="show_img_in_table" src="public/storage/{{$product_search->photo}} ">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @if(($products_search->total()) >= 1)

                        <div class="container p_t_b_50">
                            <div class="col-md-12">
                                {{$products_search->appends(request()->input())->links('vendor.pagination.bootstrap-4')}}
                            </div>
                        </div>
                    @else
                        <div class="container p_t_b_50">
                            <div class="col-md-12">
                                <center>
                                    <h4> ( " {{request()->input('query')}} ") {{trans('admin.not_found_items_for_search')}}</h4>
                                    <h4>
                                        <span> {{trans('admin.result_number')}}</span>
                                        <span></span>=
                                        <span> ({{$products_search->total()}})</span>

                                    </h4>
                                </center>
                            </div>
                        </div>
                    @endif
                    {{--------------End   table Respons---------}}

                </div><!--content_search-->
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















