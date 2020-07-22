
 @php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
       <!-- ---------------------------------------------------------------- -->
       @foreach($products_paginate as $product_pagin)
      <div class="content_section_articles">
        <div class="container">
           <div class="row content_footer_sections">
               <div class="col-md-12 article_large article ">
                   <div class="content_author_article">

                      {{--                       -----------------------}}
                           @if(!empty($product_pagin->add_by_photo))

                       <div class="content_img_author">
                           <img class="img_author" src="{{url('public/storage').Storage::url($product_pagin->add_by_photo)}}">  <span class="pont_on_line">  </span>
                       </div><!--content_img_author-->
                       <div class="content_name_data_author">
                           <span class="name_author">{{$product_pagin['add_by_'.$lang]}}</span><!--name_author--> <br>
                           {{--                       -----------------------}}
                           @else
                               {{--                       -----------------------}}

                               <div class="content_img_author">
                                   <img class="img_author" src="{{url('public/storage').Storage::url(frontend()->section_footer_img_about)}}">  <span class="pont_on_line">  </span>
                               </div><!--content_img_author-->
                               <div class="content_name_data_author">
                                   <span class="name_author">{{frontend()['section_footer_about_'.$lang]}}</span><!--name_author--> <br>
                                   {{--                       -----------------------}}
                           @endif

                           <span class=" data_author"><i class="fa fa-star"> </i>  {{trans('admin.created_at')}} {{$product_pagin->created_at}}</span>
                           <span class=" status_author"> <i class="fa fa-calendar-alt"> </i>     {{$product_pagin['product_name_'.$lang]}}</span>
                       </div><!--content_img_author-->
                   </div><!--content_author_article-->

               </div>
               <div class="col-md-8 article_large article ">

                   <article class="content_post">
                        <div class="post" >
                          <div  class="content_article"> {{$product_pagin['description_'.$lang]}} </div>

                            <a class="color_000" href="{{url('show/article/'.$product_pagin->id)}}">  
                            @if( session('lingfront')  == 'en')  read more ... @else    ...الاطلاع  على المزيد    @endif
  </a>
               </div>
                        </article>
                   <center class="m_t_20">
{{--                       <a href="" class="btn btn-primary"> عرض  </a>--}}
{{--                       <a href="" class="btn btn-success"> عرض سريع   </a></center>--}}
               </div><!--col-md-8-->
           <div class="col-md-4 article_small article "> 
<!-- -------------         -->
 <div class="img_this_article">
      <a href="{{url('show/article/'.$product_pagin->id)}}">
          <img src="{{url('public/storage').Storage::url($product_pagin->photo)}}" class="img_this_article_show"></a>

    </div>
<!-- ----------------------------------------- -->
             </div><!--col-md-6-->   
      </div><!--row content_footer_sections-->
    </div><!--container-->
  </div><!--content_section_articles-->
      @endforeach
          <div class="container">
          <div class="col-md-12">
              {{$products_paginate->links('vendor.pagination.bootstrap-4')}}
          </div>
          </div>
  <!-- -------------------------------------------------------------------------- -->

