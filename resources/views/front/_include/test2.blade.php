    @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp 
 <div class="container-fluid content_testimonial_slidars" >
     <div class="row">

        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                 
               @foreach($testimonial as $test)
                <div class="testimonial">
                    <p class="description">
                      {{$test['content_'.$lang]}}
                    </p>
                    <div class="pic">
                        <img src="public/storage/{{$test->photo}}" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4>{{$test['title_'.$lang]}}</h4>
                        <small>{{trans('admin.in_ll_Articles')}}</small>
                    </div>
                </div>
               @endforeach





            </div>
        </div>
    </div>
</div>


 
