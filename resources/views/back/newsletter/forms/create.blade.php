


          <div class="row">
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-newsletter-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                     }}

                                   <div class="col-md-12 content_form_ar" >


                                       <!----------------start  photo-->
                                       <div class="input-group ">
                                           <div class="custom-file">
                                               {!! Form::label('photo',trans('admin.photo_newsletter'),['class'=>'custom-file-label']) !!}
                                               {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                           </div>
                                       </div>
                                       <div class="text-center"> <img   src="{{url('default')}}/slider.png" class="img_100px"></div>
                                       <!----------------End photo-->

                                   </div><!--col-md-12 content_form_ar-->
                                   <div class="col-md-12 content_form_en" >
                                   <div class="form-group ">
                                        {!! Form::label('email',trans('admin.email')) !!}
                                        {!! Form::email('email',old('email'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group email -->

                                   </div><!--col-md-12 content_form_en-->
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-newsletter-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}
                                     </div><!--row-->
