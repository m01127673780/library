
@if(empty ($photo))
 <img  src="{{ asset( 'default/news.png')}} "  class="img_50px" >
@else
 <div> <img src="{{url('public/storage').Storage::url($photo)}}" class="img_50px  "></div>
@endif

