@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
          <!-- ---------------------------------------------------------------- -->
              <div class="col-md-3 contact_col_slider sm_none" >
                  <div class="card card_border_none card_cat_name_slider" >
                      <div class="card-header card_header_custom card_headr_cat_name"><span>  
                      
@if( session('lingfront')  == 'en') Departments @else   الاقسام الرئيسه للمدونه   @endif
                       
                      
                      </span><i class="fa fa-th  fa-2x icon_headr_cat_name"></i></div>
                       <ul class="list-group list-group-flush ul_cat_name_slider">
                           @foreach($departments as $department)


                                <li class="list-group-item">
                                <a href="{{url('show/department/'.$department->id)}}">

                                    <i > <img class="img_icon_dep " src="{{url('public/storage').Storage::url($department->icon)}}">  </i>
                                    <span class="cat_name_slider_dep "> {{$department['dep_name_'.$lang]}}</span>
                                </a>
                                </li>

                           @endforeach
                      </ul>




<style>
    .cat_name_slider_dep{
        color: #413c3c;
        font-size: 15px;
    }
    .img_icon_dep{
        width: 38px;
        height: 30px;
         top: 19px;
         left: 8%;

    }
    .ul_cat_name_slider  {
        box-shadow: 0 1px 4px rgba(0,0,0,0.3), 0 0 20px rgba(0,0,0,0.1) inset;
        background: transparent;
        border: none!important;
        width: 100%!important;
        height: auto!important;

        color: #666;
        font-family: serif;
        width: 100%;
        font-size: 21px;
        font-weight: 100;
        max-height: 449px;
        /* width: 120px; */
        /* border: 1px solid #ccc; */
        /* font: 16px/26px Georgia, Garamond, Serif; */
        overflow: auto;

    }
    .ul_cat_name_slider .list-group-item {
        background: transparent;
    }

</style>


{{-- <nav id="mysidebarmenu" class="amazonmenu d-none">--}}
{{--  <ul>--}}
{{--      @foreach($departments as $department)--}}



{{--            <li class="list-group-item">--}}
{{--              <a href=" ">--}}
{{--                   <span class="cat_name_slider ">--}}
{{--                       {{$department['dep_name_'.$lang]}}--}}
{{--                      </a>--}}
{{--                  </span>--}}
{{--              </a>--}}
{{--              <div>--}}
{{--                  <ul>--}}
{{--                      @foreach($products as $product)--}}

{{--                      <li class="list-group-item">--}}
{{--                          <a href="{{url('show/article/'.$product->id)}}">--}}
{{--                               <span class="cat_name_slider ">--}}
{{--                                  {{$product['product_name_'.$lang]}}--}}
{{--                              </span>--}}
{{--                          </a>--}}
{{--                      </li>--}}
{{--                      @endforeach--}}
{{--                  </ul>--}}
{{--              </div>--}}
{{--          </li>--}}

{{--          @endforeach--}}
{{--          <li class="list-group-item"><a href="#"><i class="fa fa-th  "></i> اعرف نبيك   افكار دعويه  </a>--}}
{{--              <div>--}}
{{--                  <ul>--}}
{{--                      <li class="list-group-item"><a href="#"> <i class="fa fa-th  "></i> <span class="cat_name_slider ">JavaScript Kit </span></a></li>--}}
{{--                      <li class="list-group-item"><a href="#"> <i class="fa fa-th  "></i> <span class="cat_name_slider ">CSS Drive </span></a></li>--}}
{{--                      <li class="list-group-item"><a href="#"> <i class="fa fa-th  "></i> <span class="cat_name_slider ">CSS Library</a>--}}
{{--                      <li class="list-group-item"><a href="#"> <i class="fa fa-th  "></i> <span class="cat_name_slider ">Webmaster Tools</a>--}}
{{--                          <div>--}}
{{--                              <p><h3><a href="#">Image Optimizer</a></h3>--}}
{{--                              Use this tool to easily optimize regular gifs, animated gifs, jpgs, and pngs, so they load as fast as possible.--}}
{{--                              </p>--}}

{{--                              <p><h3><a href="#">FavIcon Generator</a></h3>--}}
{{--                              Generate a favicon using any regular image with this tool.--}}
{{--                              </p>--}}

{{--                              <p><h3><a href="#">Animated Gif Generator</a></h3>--}}
{{--                              Animated Gif Generator lets you easily create an animated gif by uploading a series of still images!--}}
{{--                              </p>--}}

{{--                          </div>--}}

{{--                      <li class="list-group-item"><a href="#"> <i class="fa fa-th  "></i> <span class="cat_name_slider ">PHP For the Absolute Beginner </span></a></li>--}}
{{--                  </ul>--}}
{{--              </div>--}}
{{--          </li>--}}

{{--   </ul>--}}
{{--</nav>--}}

                </div>
 <!-- ------------------------------------------------------------ -->