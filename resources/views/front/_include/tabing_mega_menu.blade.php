<div class="wsmenucontainer clearfix">
    <div class="overlapblackbg"></div>



    <div class="wsmobileheader clearfix d-none  ">
        <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
        <a class="smallogo"><img src="images/sml-logo.png"  alt="" /></a>
        <a class="callusicon" href="tel:123456789"><span class="fa fa-phone"></span></a>
    </div>





    <div class="headtoppart clearfix d-none ">
        <div class="headerwp">
            <div class="headertopleft">
                <div class="address clearfix"><span><i class="fa fa-map-marker" aria-hidden="true"></i> 3982 Aspen Court, Boston, MA 02114 </span>  <a href=""><i class="fa fa-phone" aria-hidden="true"></i> 123-456-7890</a></div>
            </div>



            <div class="headertopright">
                <a class="facebookicon" title="Facebook" href="#"><i aria-hidden="true" class="fa fa-facebook"></i> <span class="mobiletext02">Facebook</span></a>
                <a class="twittericon" title="Twitter" href="#"><i aria-hidden="true" class="fa fa-twitter"></i> <span class="mobiletext02">Twitter</span></a>
                <a class="linkedinicon" title="Linkedin" href="#"><i aria-hidden="true" class="fa fa-linkedin"></i> <span class="mobiletext02">Linkedin</span></a>
                <a class="googleicon" title="Google" href="#"><i aria-hidden="true" class="fa fa-google"></i> <span class="mobiletext02">Google</span></a>
            </div>

        </div>

    </div>


    <div class="headerfull">
        <!--Main Menu HTML Code-->
        <div class="wsmain">

            <div class="smllogo"><a href="#"><img src="images/sml-logo.png" alt=""/></a></div>

            <nav class="wsmenu clearfix">
                <ul class="mobile-sub wsmenu-list">


                    <li>
                        <a href="{{url('/')}}" class="navtext">
                            <div class="    ">
                                <div class="  img" >
                                    <a href="http://localhost/my_project/articles_islamic">
                                        <img src="{{url('public/storage').Storage::url(frontend()->logo)}}" title="" class="content_img_logo_in_sidbar"></a>
                                        
                                </div><!-- content_img_logo img -->
                            </div>
                        </a>



                    </li>

























                    <li class="wssearchbar clearfix">

                        
                          @if( session('lingfront')  == 'ar')  
                          
                            <form class="topmenusearch search-form" action="{{route('search')}}" method="GET" >
                            <input class="product_name search_box" value="{{request()->input('query')}}" placeholder="  ....البحث بواسطه  عنوان المقال او المحتوى " id="query" name="query" >
                            <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
                        </form>
                          @else
                              
                            <form class="topmenusearch search-form" action="{{route('search')}}" method="GET" >
                            <input class="product_name search_box" value="{{request()->input('query')}}" placeholder="Search Articles By Title OR Content ....  " id="query" name="query" >
                            <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
                        </form>
                          
                          @endif
                        
 
                        
                        {{--                        <div id="product_list d-none">--}}
                        {{--                            <a class="dropdown-item" href="#">Action</a>--}}
                        {{--                            <a class="dropdown-item" href="#">Another action</a>--}}
                        {{--                            <a class="dropdown-item" href="#">Something else here</a>--}}
                        {{--                            {{csrf_field()}}--}}

                        {{--                        </div>--}}

                        <style>
                            #product_list .dropdown-item{
                                z-index: 99999999 !important;

                            }
                            #product_list{
                                background: #fff;
                                z-index: 99999 !important;
                            }
                            .content_section_logo_card{
                                z-index: 99999999 !important;

                            }
                        </style>
                    </li>


                    <li class="wscarticon clearfix">
                                 <a   class="d-inline"  href="{{url('/')}}">          <i class="fas fa-house-user fa-lg icon_home_page_section_search"> </i>  </a>
                                 <!--<a   class="d-inline"  href="{{ URL::current() }}">  <i class=" fas fa-sync fa-lg">      </i>  </a> -->
                        <!--<a href="#"><i class="fa fa-shopping-basket"></i> <em class="roundpoint">8</em><span class="mobiletext">Shopping Cart</span></a>-->
                    </li>

                    <li class="wsshopmyaccount clearfix"><a href="#"><i class="fa fa-align-justify">

                            </i>   @if( session('lingfront')  == 'en')  My Pages @else صفحات الموقع  @endif  <i class="fa  fa-angle-down"></i>
                            

                              
                              
             
                               
                        </a>
                        <ul class="wsmenu-submenu">
                            <!--<li>-->
                            <!--    <a href="{{url('articles')}}"><i class="fa fa-black-tie"></i>{{trans('admin.All_articles')}}</a>-->
                            <!--</li>-->
                           <li>
            <a href="{{url('news')}}"><i class="far fa-newspaper"></i>{{trans('admin.news')}}</a>
        </li>
        <li>
            <a href="{{url('events')}}"><i class="fas fa-images"></i>{{trans('admin.events')}}</a>
        </li>
        <li>
            <a href="{{url('ads')}}"><i class="fas fa-map"></i>{{trans('admin.ads')}}</a>
        </li>

                        </ul>

                    </li>












                </ul>
            </nav>



        </div>
        <!--Menu HTML Code-->
    </div>




</div>