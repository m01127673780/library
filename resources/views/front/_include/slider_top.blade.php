   @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp 
 <aside>
    <div id="slider_top" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">


                    <ul class="carousel-indicators">

                          <?php
                        $i = 0;
                        ?>
                        @foreach($slider as $slid)
                            <li data-target="#slider_top" data-slide-to="{{$i}}" style="background-image:url(public/storage/{{$slid->photo}}); 
                             " class="bg_img_dots_slider">

                                <?php
                                $i++;
                                ?>
                                @endforeach
                            </li>
                    </ul>
                    <!-- The slideshow -->
                    
                    <?php
                    $slide = 0 ;
                    ?>

    <!-- ----------------------------- -->
     @foreach($slider as $slid)
       <div class="carousel-item  {{ $slide == 0 ? 'active':''}} ">
             <div class="content_img_slider posi_r">
               <img class="d-block posi_abs" src="{{url('public/storage/'.$slid->photo)}} " alt="First slide">

            </div>
              <div class=" carousel-caption head_box  wow wow bounceInUp" data-wow-duration="2s"  >
                   <a href="{{url('show/event/'.$slid->id)}}" class="color_fff">

                    <h3 >{{$slid['head_'.$lang]}}</h3>
                    <p>{{$slid['title_'.$lang]}} </p>
                  </a>
             </div>   
      </div>
    <!-- ----------------------------- -->

    <!-- ----------------------------- -->
      <?php
                    $slide = 0 ;
                    ?>
      
        <?php
                        $slide++;
                        ?>
                    @endforeach
    <!-- ----------------------------- -->
      
    
  <a class="carousel-control-prev" href="#slider_top" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider_top" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </aside>