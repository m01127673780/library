<!-- --------------------------------------------------------------------------------------- -->
   @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp 
          <!-- partial:index.partial.html -->
<div class="bn-breaking-news  " id="newsticker">
    <div class="bn-label"> @if( session('lingfront')  == 'en')HOt News @else  اخبار ساخنه @endif </div>
    
                                
    <div class="bn-news">
        <ul>
           



     @foreach($news as $new)
      <li class="">
          <a href="{{url('show/news/'.$new->id)}}">
             <i class="fa fa-th  "> </i>
              <strong class="cat_name_slider ">
                {{$new['title_'.$lang]}}
             </strong>
             <span class="cat_name_slider ">
                {{$new['content_'.$lang]}}
             </span>
           </a>
     </li>
                          
                          @endforeach

<!-- 
                 <li class=""><a href="{{url('news')}}"> <i class="fa fa-th  "> </i> <span class="cat_name_slider ">

          
          </a></li>
            <li class=""><a href="{{url('news')}}"> <i class="fa fa-th  "> </i> <span class="cat_name_slider "> أعلنت وزارة الصحة والسكان، اليوم الإثنين، عن خروج 97 من المصابين بفيروس كورونا من مستشفيات العزل والحجر الصحي، وذلك بعد تلقيهم الرعاية الطبية اللازمة وتمام شفائهم وفقًا لإرشادات منظمة الصحة العالمية، ليرتفع إجمالي المتعافين من الفيروس إلى 2172 حالة حتى اليوم. وأوضح الدكتور خالد مجاهد، مستشار وزيرة الصحة والسكان لشئون الإعلام والمتحدث الرسمي للوزارة، أن عدد الحالات التي تحولت نتائج تحاليلها معمليًا من إيجابية إلى سلبية لفيروس كورونا (كوفيد-19) ارتفع ليصبح 2655 حالة، من ضمنهم الـ 2172</a></li>
            <li class=""><a href="{{url('news')}}"> <i class="fa fa-th  "> </i> <span class="cat_name_slider ">1.3. Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></li>
            <li class=""><a href="{{url('news')}}"> <i class="fa fa-th  "> </i> <span class="cat_name_slider ">1.4. Lorem simply dummy text of the printing and typesetting industry</a></li>
            <li class=""><a href="{{url('news')}}"> <i class="fa fa-th  "> </i> <span class="cat_name_slider ">1.5. Ipsum is simply dummy of the printing and typesetting industry</a></li>
            <li class=""><a href="{{url('news')}}"> <i class="fa fa-th  "> </i> <span class="cat_name_slider ">1.6. Lorem Ipsum simply dummy text of the printing and typesetting industry</a></li>
            <li class=""><a href="{{url('news')}}"> <i class="fa fa-th  "> </i> <span class="cat_name_slider ">1.7. Ipsum is simply dummy text of the printing typesetting industry</a></li>
 -->
        </ul>
    </div>
    <div class="bn-controls">
        <button><span class="bn-arrow bn-prev"></span></button>
        <button><span class="bn-action"></span></button>
        <button><span class="bn-arrow bn-next"></span></button>
    </div>
</div>
<!-- partial -->
<!-- --------------------------------------------------------------------------------------- -->
