


          <div class="row">
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-news-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                     }}

                                    <div class="col-md-12  " >
                                              <section>
                                                <div class="form-group ">
                                                {!! Form::label('link',trans('admin.link')) !!}
                                                {!! Form::text('link',old('link'),['class'=>'form-control' ]) !!}
                                            </div><!-- /.form-group text3_ar -->
                                            <!----------------start  photo-->
                                            <div class="input-group ">
                                                <div class="custom-file">
                                                    {!! Form::label('photo',trans('admin.photo_news'),['class'=>'custom-file-label']) !!}
                                                    {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                                </div>
                                            </div>
                                              <div class="text-center"> <img   src="{{url('default')}}/news.png" class="img_100px"></div>
                                           <!----------------End photo-->
                                           </section>
                                       </div><!-- col-md-12-->

                                   <div class="col-md-6 content_form_ar" >
                                    <div class="form-group ">
                                        {!! Form::label('title_ar',trans('admin.title_ar')) !!}
                                        {!! Form::text('title_ar',old('title_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                     <div class="form-group ">
                                        {!! Form::label('content_ar',trans('admin.content_ar')) !!}
                                        {!! Form::textarea('content_ar',old('content_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group content_ar -->
                                    <div class="form-group ">
                                        {!! Form::label('start_at',trans('admin.start_at')) !!}
                                        {!! Form::text('start_at',old('start_at'),['autocomplete'=>'off','class'=>'form-control datepicker' ]) !!}
                                    </div><!-- /.form-group start_at -->

                                     <!----------------start  photo-->
                                    <div class="input-group   ">
                                       <!--  <div class="custom-file">
                                            {!! Form::label('photo',trans('admin.photo_news'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('photo',['class'=>'custom-file-input','id'=>''] ) !!}
                                        </div> -->
                                    </div>
                                    <!----------------End photo-->
                                   </div><!--col-md-6 content_form_ar-->
                                   <div class="col-md-6 content_form_en" >
                                   <div class="form-group ">
                                        {!! Form::label('title_en',trans('admin.title_en')) !!}
                                        {!! Form::text('title_en',old('title_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                      <div class="form-group ">
                                        {!! Form::label('content_en',trans('admin.content_en')) !!}
                                        {!! Form::textarea('content_en',old('content_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group content_en -->
                                    <div class="form-group ">
                                        {!! Form::label('end_at',trans('admin.end_at')) !!}
                                        {!! Form::text('end_at',old('end_at'),['autocomplete'=>'off','class'=>'form-control   datepicker' ]) !!}
                                    </div><!-- /.form-group end_at -->

                                   </div><!--col-md-6 content_form_en-->
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-news-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}
                                     </div><!--row-->
