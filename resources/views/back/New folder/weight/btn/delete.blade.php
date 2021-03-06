
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del_weight{{$id}}">
    <i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="del_weight{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route'=>['weights.destroy',$id],'method'=>'delete']) !!}
            <div class="modal-body">
                <p> {{trans('admin.delete_this',['name'=>session('lang')== 'ar'?$name_ar:$name_en])}}</p>
                 @if(empty($icon))
                     <img src="{{url('')}}/default/weight.png" class="img_120px">
                    @endif 
                     @if(!empty($icon))
                        <div> <img src="{{url('public/storage').Storage::url($icon)}}" class="img_100px "></div>
                    @endif



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{trans('admin.close')}}</button>
                  {!! Form::submit(trans('admin.yes'),['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
             </div>
        </div>
    </div>
</div>