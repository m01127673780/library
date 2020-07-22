{{--<a href="{{ aurl('newsletter/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}


 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_newsletter{{ $id }}"><i class="fa fa-edit"></i></button>
<!-- Modal -->
<div id="edit_newsletter{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><apan class="btn btn-danger">&times;</apan></button>
                {{--                <h4 class="modal-title">{{ trans('admin.close') }}</h4>--}}
            </div>                 

            <div class="modal-body">
                <!-- /.----------------------------------------------------------------- -->
  <!-- /.----------------------------------------------------------------- -->
                             <div class="box-body">
                                     {!! Form::open(['route'=>['newsletter.update',$id],'method'=>'put','class'=>'form_save_in_modal','files'=>true]) !!}
                                    <div class="row">


                             <!--        {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-newsletter-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                     }} -->
                                   <div class="col-md-12 content_form_ar" >
                                       <!----------------start  photo-->
                                       <div class="input-group ">
                                           <div class="custom-file">
                                               {!! Form::label('photo',trans('admin.photo_newsletter'),['class'=>'custom-file-label']) !!}
                                               {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                           </div>
                                       </div>
                                       @if(!empty($photo))
                                           <div> <img src="{{url('public/storage').Storage::url($photo)}}" class="img_100px  "></div>
                                       @else
                                           <div class="text-center"> <img   src="{{url('default')}}/newsletter.png" class="img_100px"></div>
                                   @endif
                                   <!----------------End photo-->
                                   </div><!--col-md-12 content_form_ar-->
                                   <div class="col-md-12 content_form_en" >
                                   <div class="form-group">
                                        {!! Form::label('email',trans('admin.email')) !!}
                                        {!! Form::text('email',$email,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group email -->

                                   </div><!--col-md-12 content_form_en-->

                                </div><!--row-->
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-newsletter-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    <br> <br>
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->
                <!-- /.---------- -->
             		  <a href="{{ aurl('newsletter/'.$id.'/edit') }}" class="btn btn-success "><i class="fa fa-edit"></i> {{trans('admin.edit_page')}}</a>
                       <span>
                         {!! Form::open(['route'=>['newsletter.destroy',$id],'method'=>'delete' ,'class'=>'d-inline-block']) !!}
                         {{  Form::button(' <i class="fa fa-trash">  </i>'.trans('admin.delete_fast').'<img src="'.asset('/default/alert.gif').'" class="w_h_20px">', ['type' => 'submit', 'class' => 'btn btn-danger   btn_alert_delete_htis  '] )  }}
                         {!! Form::close() !!}
                       </span>
					<button type="button" class="btn btn-warning" data-dismiss="modal">{{ trans('admin.close') }}  <i class="fas fa-times"> </i></button>
               <!-- /.----------------------------------------------------------------- -->
            </div>
        </div>
    </div>
</div>
