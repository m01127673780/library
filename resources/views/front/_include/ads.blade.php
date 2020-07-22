
<!-- start section adds ======================================================================================-->
<section class="content_adds m_b_20 ">
       <div class="custom_container container">
         <div class="row"> 
      <!-- --------------------------------------------------------------- -->
          <div class="owl-carousel owl-theme owl_carousel_adds">
                 
                       @foreach($ads as $ad)
                          <div class="item">
                          <a href="{{url('show/ads/'.$ad->id)}}">
                              <div class="single-adds"><img src="{{url('public/storage/'.$ad->photo)}} " alt="img_adds"> </div>
                          </a>
                          </div>
                          @endforeach
       
          </div><!--owl-carousel owl_carousel_adds-->
             <!-- --------------------------------------------------------------- -->
      </div><!--row-->
    </div><!--container-->
  </div><!--content_adds-->
  <!-- -------------------------------------------------------------------------- -->
</section><!--content-adds--> 
<!-- End section adds ================================================================================================= -->

