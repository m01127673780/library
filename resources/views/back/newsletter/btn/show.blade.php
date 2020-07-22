{{--<a href="{{ aurl('newsletter/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#show_newsletter{{ $id }}"><i class="fa fa-eye"></i></button>
<!-- Modal -->
<div id="show_newsletter{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><apan class="btn btn-danger">&times;</apan></button>
                {{--                <h4 class="modal-title">{{ trans('admin.close') }}</h4>--}}
            </div>
             <div class="modal-body">
                 <!-- /.----------------------------------------------------------------- ,'disabled'=>'disabled' -->
                             <div class="box-body">
                                     {!! Form::open(['route'=>['newsletter.update',$id],'method'=>'put','class'=>'form_save_in_modal','files'=>true]) !!}
                                    <div class="row">


                                   <div class="col-md-12 content_form_ar" >


                                     <!----------------start  photo-->
                                     @if(!empty($photo))
                                         <div class="text-center"> <img src="{{url('public/storage').Storage::url($photo)}}" class="img_100px  "></div>
                                       @else
                                      <div class="text-center"> <img   src="{{url('default')}}/slider.png" class="img_100px"></div>

                                       @endif
                                   <!----------------End photo-->
                                   </div><!--col-md-12 content_form_ar-->
                                   <div class="col-md-12 content_form_en" >
                                   <div class="form-group ">
                                        {!! Form::label('email',trans('admin.email')) !!}
                                        {!! Form::email('email',$email,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group email -->

                                   </div><!--col-md-12 content_form_en-->
                                </div><!--row-->
                                    
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
