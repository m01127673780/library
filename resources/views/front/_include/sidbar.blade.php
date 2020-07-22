@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
<!--start  section sidbar ====================== -->

<!--Start hs Mega Menu-->
<header class="hs-menubar">

    <div class="menu-trigger   menubar_stat"> <i class=" pe-7s-menu "></i></div>
    <!--          <div class="search-trigger"> <i class="zmdi zmdi-search"></i></div>
     -->
    <div class="brand-logo sidbar_brand_logo  d-none">
        <a href="{{url('/')}}" title="{{trans('admin.home')}}" ><img src="{{url('front')}}/layout/img/logo.png" title="Your logo will be here" alt="hs Mega Menu"> </a>
    </div>
    <div class="hs-user toggle" data-reveal=".user-info">
        <!--<img src="{{url('front')}}/layout/img/user1.png" alt="Asif Mughal">'-->
       
                     @if( session('lingfront')  == 'en') 

                   <a style="color:#333" class=" " href="{{url('lang_front_ar')}}"> <i class="pe-7s-global"></i></a>
          @else
                   <a style="color:#333" class=" " href="{{url('lang_front_en')}}"> <i class="pe-7s-global" ></i></a>

          @endif
    </div>
    <div class=" btn alert-info d-none -j"  >
        {{session('lingfront')}}

        
    </div>
    <div class="grid-trigger toggle" data-reveal=".grid-items">
        <!--<i class="zmdi zmdi-view-module"></i>-->

  

              @if( session('lingfront')  == 'en')
                  <span class="word_lang_ar">
                   <a class="color_000" href="{{url('lang_front_ar')}}">
                   <!--<i class="pe-7s-global   fa-1x  "></i> -->
                   <span> عـــربى </span>
                       </a>
               </span>
                                @else
             <span class="word_lang_en ">
                   <a class="color_000" href="{{url('lang_front_en')}}">
                   <!--<i class="pe-7s-global   fa-1x  "></i>-->
                   <span>English </span>
                       </a>
               </span>
                                @endif


    </div>
    <div class="more-trigger toggle" data-reveal=".user-penal"> <i class="zmdi zmdi-more-vert"></i></div>
</header>
<section class="box-model">
    <ul class="user-penal">
        <!--<li>-->
    <!--    <a href="{{url('articles')}}"><i class="fa fa-black-tie"></i>{{trans('admin.All_articles')}}</a>-->
        <!--</li>-->
 
        
        
              @if( session('lingfront')  == 'ar')
                         <li>
            <a href="{{url('news')}}"><i class="far fa-newspaper"></i>{{trans('admin.news')}}</a>
        </li>
        <li>
            <a href="{{url('events')}}"><i class="fas fa-images"></i>{{trans('admin.events')}}</a>
        </li>
        <li>
            <a href="{{url('ads')}}"><i class="fas fa-map"></i>{{trans('admin.ads')}}</a>
        </li>
                                @else
                    <li>
            <a href="{{url('news')}}"><i class="far fa-newspaper"></i> News</a>
        </li>
        <li>
            <a href="{{url('events')}}"><i class="fas fa-images"></i> Events</a>
        </li>
        <li>
            <a href="{{url('ads')}}"><i class="fas fa-map"></i> Ads </a>
        </li>
                                @endif
    </ul>

</section>
<nav class="hs-navigation  " style="">
    <ul class="nav-links">

        <style>
            .content_action_btn_next_pre_ref  {
                color: #000;
                position: absolute;
                top: 7px;
                font-size: 17px;
                left: 16px;
            }
            .btn_next_pre_ref  a{
                color: #000;
                top: 10px;
                left: 10px;
            }
        </style>
        <li class="has-child content_action_btn_next_pre_ref" >


            <script>
                function goBack() {
                    window.history.back();}
            </script>
            {{--                 <a  class="d-inline btn_next_pre_ref" href="{{ URL:: previous() }}">  <i class="fas fa-exchange-alt"></i></a>--}}
            <a  class="d-inline btn_next_pre_ref" title="{{trans('admin.previous')}}" href="{{ URL:: previous() }}">  <i class="fas fa-retweet"></i></a>
            <a class="d-inline btn_next_pre_ref"  title="{{trans('admin.goback')}}"  onclick="goBack()" >  <i class="fas fa-arrow-left"></i></a>
            {{--                 <a  class="d-inline btn_next_pre_ref"  href="{{ URL::current() }}">  <i class="zmdi zmdi-rotate-cw"></i></a>--}}
            <a  class="d-inline btn_next_pre_ref"  title="{{trans('admin.relode')}}"  href="{{ URL::current() }}">  <i class="fas fa-sync-alt"></i></a>
            {{--                 <a  class="d-inline btn_next_pre_ref"  href="{{url('/')}}">  <i class="zmdi zmdi-home"></i></a>--}}
            <a  class="d-inline btn_next_pre_ref"  title="{{trans('admin.previous')}}"  href="{{url('/')}}">  <i class="fas fa-house-user"></i></a>


        </li>
   
              @if( session('lingfront')  == 'ar') 
                <form class="topmenusearch search-form" action="{{route('search')}}" method="GET" >
                    <input class="product_name search_box" value="{{request()->input('query')}}" placeholder="{{trans('admin.search_articles_by_title')}}" id="query" name="query" >
                    <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
                </form>
              @else    
                 <form class="topmenusearch search-form" action="{{route('search')}}" method="GET" >
                            <input class="product_name search_box" value="{{request()->input('query')}}" placeholder="  Search Articles By Title Or Content....     " id="query" name="query" >
                        <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
                </form>
        @endif

        {{--  start About my mohamed Elsayade dev --}}

        <li class="has-child">
               <span class="its-parent">
               <span class="icon">
{{--                   <i class="zmdi zmdi-device-hub"></i> --}}
                 <a href="#" class="d-inline a_link_depe_by_sid_bar">   <img class="img_icon_dep " src="http://cracky-eg.com/lernquranonline/public/default/developed_by2.png"></a>
               </span>   @if( session('lingfront')  == 'ar')
                       
  {{trans('admin.about_me_dev')}} 
                        @else
                         About   programmer 
                        @endif</span>
                  
                  
             
                  
       
                  
            <ul class="its-children">
           


              @if( session('lingfront')  == 'ar')

                <li class="has-child">
                    <span class="its-parent">  <i class="zmdi zmdi-device-hub"></i> {{trans('admin.Some_of_our_works')}}</span>
                    <ul class="its-children">
                        <li><a href="http://cracky-eg.com">cracky-eg.com</a> </li>
                        <li><a href="https://inception-ec.com/">inception-ec.com</a> </li>
                        <li><a href="http://cracky-eg.com/lernquranonline/public">lernquranonline.com</a> </li>
                        <li class="has-child">
                            <span class="its-parent"> <i class="zmdi zmdi-device-hub"></i>{{trans('admin.info_company_dev')}} </span>
                            <ul class="its-children">

                                <p class="color_000  " style="margin:0 10px!important; ">
                                    {{trans('admin.about_me_dev_content')}}
                                    <i class="fas fa-barcode"> </i>
                                    <i class="fas fa-laptop"> </i>

                                </p>

                            </ul>
                        </li>
                        @else
                                 <li class="has-child">
                    <span class="its-parent">  <i class="zmdi zmdi-device-hub"></i> Some of our works</span>
                    <ul class="its-children">
                        <li><a href="http://cracky-eg.com">cracky-eg.com</a> </li>
                        <li><a href="https://inception-ec.com/">inception-ec.com</a> </li>
                        <li><a href="http://cracky-eg.com/lernquranonline/public">lernquranonline.com</a> </li>
                        <li class="has-child">
                            <span class="its-parent"> <i class="zmdi zmdi-device-hub"></i> company info  </span>
                            <ul class="its-children">

                                <p class="color_000  " style="margin:0 10px!important; ">
                                         Engineer: Muhammad Saeed Faraj Yaqoub Al Sayyad Web. We offer everything new in the world of programming and design

                                    <i class="fas fa-barcode"> </i>
                                    <i class="fas fa-laptop"> </i>

                                </p>

                            </ul>
                        </li>
                        @endif
                    </ul>
                </li>

            </ul>
        </li>

        {{--  End    About my mohamed Elsayade dev--}}
        @foreach($departments as $department)


            <li class="has-child">
               <span class="its-parent">
               <span class="icon">
{{--                   <i class="zmdi zmdi-device-hub"></i> --}}
                  <a href="{{url('show/department/'.$department->id)}}" class="d-inline a_link_depe_by_sid_bar">   <img class="img_icon_dep " src="{{url('public/storage').Storage::url($department->icon)}}"></a>
               </span>{{$department['dep_name_'.$lang]}}</span>
                <ul class="its-children">
                    @foreach($products as $product)
                        @if ( $product->department_id == $department->id)
                            <li><a href="{{url('show/article/'.$product->id)}}"> {{$product['product_name_'.$lang]}}</a> </li>

                        @endif


                    @endforeach

                    @if ( $product->department_id != $department->id)
                        <li>
                          <br>   <span class="color_000    " style="      margin-left:10px;  ">
                                
                                   @if( session('lingfront')  == 'ar')  {{trans('admin.not_found_items_sidbar')}}   @else Currently there are no articles here @endif 
                                 </span><br> <br> 
                        </li>
                    @endif

                </ul>
            </li>
    @endforeach

    <!--//has-child-->
    </ul>
</nav>
<!--End hs Mega Menu-->


<!--start  section sidbar ====================== -->

<!--start sidbar -------------------------------------------- -->

<script src="{{url('front')}}/layout/plugins/menu/js/jquery.hsmenu.min.js"></script>
<!--Material Design Iconic Font-->
<script> $(document).ready(function () {
        $(".hs-menubar").hsMenu();
        $('.menu-trigger').on('click', function(){
            // $(".icon_menubar").removeClass('fa-align-justify');
            $(".icon_menubar").toggleClass('fa-times');
            $(".menubar_stat").toggleClass('menubar_move');

        });
        if ( $( '.hs-navigation' ).hasClass( "open" ) ) {


        }

        if ($('.hs-navigation').hasClass('open')){
            $(".menubar_move").addClass('ripple-out');

        } else {
            $(".menubar_move").removeClass('ripple-out');

        }



    });
</script>

<!--End   sidbar -------------------------------------------- -->