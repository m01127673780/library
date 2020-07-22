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
               <aside class="z_index_9"> @include('front._include.section_events')</aside>

 
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













  
 
