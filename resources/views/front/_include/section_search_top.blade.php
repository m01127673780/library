
 
  <!-- start section slider ======================================================================================-->
<section class="content_section_up    custom_container container   "> 
       <div class=" "> 
         <div class="row"> 

                <div class="col-md-7    " > 
               <i class="fab fa-whatsapp fa-1x  icon_whatsapp_up "></i> 
               <i class="pe-7s-call   fa-1x  "></i> 
               <span class="data_section_up">        +201113993001</span>
               <span class="data_section_up">  <i class="pe-7s-mail-open-file  fa-1x  "></i>       MohamedBadr@articals.com</span>
               <span class="data_section_up ">   <a href="{{url('events')}}" class="color_fff">     Locators </a> <i class="pe-7s-map-marker   fa-1x  "></i>  </span>
              </div><!--col-md-9===============================-->

               <div class="col-md-5    " > 
                  <span class="data_section_up">  <i class="pe-7s-users  fa-1x  "></i>                             @if( session('lingfront')  == 'en')  welcome visitors  @else    مرحبا بالزوار       @endif
    </span>


                                @if( session('lingfront')  == 'en')
                   <span class="data_section_up">
                   <a class="color_fff" href="{{url('lang_front_ar')}}">
                   <i class="pe-7s-global   fa-1x  "></i>   <span>عربى </span>
                       </a>
               </span>
                                @else
                       <span class="data_section_up">
                   <a class="color_fff" href="{{url('lang_front_en')}}">
                   <i class="pe-7s-global   fa-1x  "></i>   <span>English </span>
                       </a>
               </span>
                                @endif


               <span class="data_section_up">      <i class="pe-7s-cash  fa-1x  "></i>   EGP </span> 
                <span class="data_section_up">      <i class=" fas fa-hand-holding-usd    fa-1x  "></i>  US </span>  
                 </div><!--col-md-5  ===============================-->

 
          <!-- ---------------------------------------------------------------- -->
 
        </div><!--row-->
        </div><!--container-->
   </section><!-- section content_section_up-->
  <!-- -------------------------------------------------------------------------- -->
 <!--  ========================================================================================= -->
   <!-- start section select2 ======================================================================================-->
  <section class="  p_b_30 posi_r content_section_logo_card ">
      @include('front._include.tabing_mega_menu')
  </section>
  <!-- section content_section_up-->
  <!-- -------------------------------------------------------------------------- -->
 <!-- End section select2 ========================================================================================= -->
  