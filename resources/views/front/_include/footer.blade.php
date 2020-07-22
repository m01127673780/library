

@php
    if (empty (session('lingfront')))
    {
    $lang ='en';
    }else{
    $lang = session('lingfront');
    }
@endphp
<style>
  .content_section_name_departments_footer{
    max-height: 341px;
  
    overflow: auto;
}
.img_shipments {
 
    height: 248px;
 
}
            .img_map_footer{
            height: 160px;
            width: 131%;
            margin-top: 12px;
            }
            
           
            @media(max-width: 768px){
                
                      .img_map_footer{
         display:none;
            }   
            }

</style>
<!-- start section footer ======================================================================================-->
<section class="content_footer  ">
       <div class="  p_t_b_20">
       <div class="container">
         <div class="row content_footer_sections">  
             <div class="col-md-3 contact_col" >
              <h3 class="head_4_title_footer">{{frontend()['section_footer_contact_us_title_'.$lang]}}</h3>            
          <div class="content_foter_contact_us">
              <i class=" i_addres_title_contact_us"> {{--trans('admin.address')--}}     <i class="fas fa-lg  fa-map-marked-alt"></i>  :  </i> 
              <span>  {{frontend()['section_footer_address_'.$lang]}} </span>
          </div><!--content_foter_contact_us-->         <div class="content_foter_contact_us">
              <i class=" i_addres_title_contact_us"> {{--trans('admin.phone')--}}     <i class="fas  fa-lg fa-mobile-alt"></i>  : </i>
               <span> {{frontend()->section_footer_phone}} </span> 
          </div><!--content_foter_contact_us-->         <div class="content_foter_contact_us">
              <i class=" i_addres_title_contact_us"> {{--trans('admin.email')--}}   <i class="fas fa-lg fa-envelope-open-text"></i>  :   </i>
               <span> {{ frontend()->section_footer_email }}   </span> 
               <img src="https://staticmapmaker.com/img/google.png" class="img_map_footer">
       
 

          </div><!--content_foter_contact_us-->
                     
             </div><!--col-md-3===============================-->
                <div class="col-md-3">
              <h3 class="head_4_title_footer">  {{frontend()['section_footer_part_two_title_'.$lang]}}</h3>
                  <div  class="content_section_name_departments_footer" >
                <ul class="">
               
                         
                  <li class="li_pages_cat"> <a href="{{url('news')}}"><i class="fa fa-angle-double-right"></i>  
                   @if( session('lingfront')  == 'en') News @else    الاخبار    @endif

                  </a></li>
                  <li class="li_pages_cat"> <a href="{{url('events')}}"><i class="fa fa-angle-double-right"></i>
                     @if( session('lingfront')  == 'en') Events @else    الاحداث    @endif
                  </a></li>
                  <li class="li_pages_cat"> <a href="{{url('ads')}}"><i class="fa fa-angle-double-right"></i>
                     @if( session('lingfront')  == 'en')  Ads  @else      الاعلانات   @endif
                  </a></li>
                </ul>
              </div>
             </div><!--col-md-3===============================-->
              <div class="col-md-3">
              <h3 class="head_4_title_footer">  {{frontend()['section_footer_part_three_title_'.$lang]}}</h3>
                  <div>
                <ul class="">
             
    @foreach($departments as $department)

                                                  <li class="li_pages_cat"> <a href="{{url('show/department/'.$department->id)}}"><i class="fa fa-angle-double-right"></i>  {{$department['dep_name_'.$lang]}}</a></li>
                           @endforeach
                </ul>
              </div>
             </div><!--col-md-3===============================-->
 
                   <div class="col-md-3">
              <h3 class="head_4_title_footer">    {{frontend()['section_footer_payment_methods_title_'.$lang]}} </h3>
                  <div>
                <ul class="">
                  <li class="li_pages_cat"> <a href="https://www.paypal.com/myaccount/transfer/homepage"><i class="fa fa-angle-double-right"></i>   {{frontend()->section_footer_sen_message}} </a></li>
                  

                @if(!empty(frontend()->section_footer_img_payment_methods))
                                      <img  class="img_shipments"src="{{url('public/storage').Storage::url(frontend()->section_footer_img_payment_methods)}}">
                                  @else
                                       <img class="img_shipments"  src="{{url('default')}}/section_footer_img_payment_methods.png" >
                                  @endif 
                                   </div>
                </ul>
              </div>
             </div><!--col-md-3===============================-->
           </div><!--container--> 
      </div><!--row content_footer_sections-->
    </div><!--content_footer_section3_icons-->
        <!-- ---------------------------------------------------------------- -->
      <div class="content_footer_section3_icons">
       <div class="container">   
      <div class="row content_footer_sections">
 
 
     <div class="col-md-4"> 
              @if(!empty(frontend()->section_two_part_one_icon))
              <i class=" icons_footer3icon {{frontend()->section_two_part_one_icon}}"></i> 
              @else
               <img class="icons_footer3icon"  src="{{url('public/storage').Storage::url(frontend()->section_two_part_one_photo)}}" >

               @endif 
             <span class="span_content">
              <p class="p_1"> {{frontend()['section_two_part_one_title_'.$lang]}} </p>

           <p class="p_2">{{frontend()['section_two_part_one_content_'.$lang]}} </p>

         </span>
     </div><!--col-md-4-->
  
     <div class="col-md-4"> 
              @if(!empty(frontend()->section_two_part_two_icon))
              <i class=" icons_footer3icon {{frontend()->section_two_part_two_icon}}"></i> 
              @else
               <img class="icons_footer3icon"  src="{{url('public/storage').Storage::url(frontend()->section_two_part_two_photo)}}" >
               @endif 
             <span class="span_content">
               <p class="p_1"> {{frontend()['section_two_part_two_title_'.$lang]}} </p>
               <p class="p_2">{{frontend()['section_two_part_two_content_'.$lang]}} </p>
            </span>
     </div><!--col-md-4-->
      <div class="col-md-4"> 
                  @if(!empty(frontend()->section_two_part_three_icon))
                  <i class=" icons_footer3icon {{frontend()->section_two_part_three_icon}}"></i> 
                  @else
                   <img class="icons_footer3icon"  src="{{url('public/storage').Storage::url(frontend()->section_two_part_three_photo)}}" >
                   @endif 
                 <span class="span_content">
                   <p class="p_1"> {{frontend()['section_two_part_three_title_'.$lang]}} </p>
                   <p class="p_2">{{frontend()['section_two_part_three_content_'.$lang]}} </p>
                </span>
         </div><!--col-md-4--> 

         </div><!--container--> 
    </div><!--row content_footer_sections-->
    </div><!--content_footer_section3_icons-->
       <!-- ---------------------------------------------------------------- -->
    <div class="content_footer_copyright_social">
    <div class="container">
        <div class="row content_footer_sections">
      <div class="col-md-9">
        <p class="Copyright_footer">
              <span class="All_Rights">Copyright © 2019 .All Rights Reserved To</span>
              <a class="a_link_footer" href="badry.net">badry.net</a>
              <span> | Powered By :</span>
               <a class="a_link_footer" href="pixeL-eg.com">elsayadweb</a>
         </p>
      </div><!--col-md-6-->
      <div class="col-md-3">
        <div class="content_footer_social_media">
            <a href="{{frontend()->facebook}}"   target="_blink"  class="a_link_footer_social"><i class="fab fa-facebook-square"></i></a>
            <a href="{{frontend()->twitter}}"   target="_blink"  class="a_link_footer_social"><i class="fab fa-twitter-square"></i></a>
            <a href="{{frontend()->instagram}}"   target="_blink"  class="a_link_footer_social"><i class="fab fa-instagram-square"></i></a>
            <a href="{{frontend()->youtube}}"   target="_blink"  class="a_link_footer_social"><i class="fab fa-youtube-square"></i></a>
            <a href="{{frontend()->email}}"   target="_blink"  class="a_link_footer_social"><i class="fas fa-envelope-square"></i></a>

         </div><!--col-md-6--> 
      </div><!--col-md-6--> 
    </div><!--row content_footer_sections-->
  </div><!--container-->
  </div><!--content_footer_copyright_social-->
  <!-- -------------------------------------------------------------------------- -->
</section><!--content-footer-->
<!-- End section footer ========================================================================================= -->


