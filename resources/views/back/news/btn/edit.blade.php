{{--<a href="{{ aurl('news/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}


 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_news{{ $id }}"><i class="fa fa-edit"></i></button>
<!-- Modal -->
<div id="edit_news{{ $id }}" class="modal fade" role="dialog">
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
                                     {!! Form::open(['route'=>['news.update',$id],'method'=>'put','class'=>'form_save_in_modal','files'=>true]) !!}
                                    <div class="row">
                                   <div class="col-md-12 content_form_ar" >
                                      <section>
                                        <div class="form-group -d-none ">
                                        {!! Form::label('link',trans('admin.link')) !!}
                                        {!! Form::text('link',$link,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group text3_ar -->
                                    <!----------------start  photo-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('photo',trans('admin.photo_news'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                     @if(!empty($photo))
                                         <div> <img src="{{url('public/storage').Storage::url($photo)}}" class="img_100px  "></div>
                                       @else
                                      <div class="text-center"> <img   src="{{url('default')}}/news.png" class="img_100px"></div>
                                       @endif
                                   <!----------------End photo-->
                                   </section> 
                               </div><!-- col-md-12-->

                             <!--        {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-news-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                     }} -->
                                   <div class="col-md-6 content_form_ar" >
                                    <div class="form-group ">
                                        {!! Form::label('title_ar',trans('admin.title_ar')) !!}
                                        {!! Form::text('title_ar',$title_ar,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                     <div class="form-group ">
                                        {!! Form::label('content_ar',trans('admin.content_ar')) !!}
                                        {!! Form::textarea('content_ar',$content_ar,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group content_ar -->

                                   </div><!--col-md-6 content_form_ar-->
                                   <div class="col-md-6 content_form_en" >
                                   <div class="form-group">
                                        {!! Form::label('title_en',trans('admin.title_en')) !!}
                                        {!! Form::text('title_en',$title_en,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                      <div class="form-group">
                                        {!! Form::label('content_en',trans('admin.content_en')) !!}
                                        {!! Form::textarea('content_en',$content_en,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group content_en -->

                                   </div><!--col-md-6 content_form_en-->

                                </div><!--row-->
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-news-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    <br> <br>
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->
                <!-- /.---------- -->
             		  <a href="{{ aurl('news/'.$id.'/edit') }}" class="btn btn-success "><i class="fa fa-edit"></i> {{trans('admin.edit_page')}}</a>
                       <span>
                         {!! Form::open(['route'=>['news.destroy',$id],'method'=>'delete' ,'class'=>'d-inline-block']) !!}
                         {{  Form::button(' <i class="fa fa-trash">  </i>'.trans('admin.delete_fast').'<img src="'.asset('/default/alert.gif').'" class="w_h_20px">', ['type' => 'submit', 'class' => 'btn btn-danger   btn_alert_delete_htis  '] )  }}
                         {!! Form::close() !!}
                       </span>
					<button type="button" class="btn btn-warning" data-dismiss="modal">{{ trans('admin.close') }}  <i class="fas fa-times"> </i></button>
               <!-- /.----------------------------------------------------------------- -->
            </div>
        </div>
    </div>
</div>
