 
                                                  <div id="product_info" class="container tab-pane fade"><br>
                                                       <center>{{ trans('admin.product_info') }}</center>
                                                       <aside class="content_tab_info  tab_product_info">
                                                       <div class="row">
                                                           <div class="col-md-6 content_form_ar" >
                                                               <div class="form-group">
                                                                   {!! Form::label('product_name_ar',trans('admin.product_name_ar')) !!}
                                                                   {!! Form::text('product_name_ar',$products->product_name_ar,['class'=>'form-control','class'=>'form-control' ]) !!}
                                                               </div><!-- /.form-group product_name_en -->

                                                           </div><!--col-md-6 content_form_ar-->

                                                               <div class="col-md-6 content_form_en" >
                                                               <div class="form-group">
                                                                   {!! Form::label('product_name_en',trans('admin.product_name_en')) !!}
                                                                   {!! Form::text('product_name_en',$products->product_name_en,['class'=>'form-control','class'=>'form-control' ]) !!}
                                                               </div><!-- /.form-group product_name_en -->
                                                               </div><!--col-md-6 content_form_ar-->

                                                           <div class="col-md-12 content_form_ar" >
                                                               <div class="form-group">
                                                                   {!! Form::label('description_ar',trans('admin.description_ar')) !!}
                                                                   {!! Form::textarea('description_ar',$products->description_ar,['class'=>'form-control','class'=>'form-control' ]) !!}
                                                               </div><!-- /.form-group description_ar -->
                                                              <div class="form-group">
                                                                   {!! Form::label('description_en',trans('admin.description_en')) !!}
                                                                   {!! Form::textarea('description_en',$products->description_en,['class'=>'form-control','class'=>'form-control' ]) !!}
                                                               </div><!-- /.form-group description_en -->

                                                           </div>

                                                                       <div class="col-md-12  " >
                                                                           <div class="form-group">
                                                                               {!! Form::label('add_by_ar',trans('admin.add_by_ar')) !!}
{{--                                                                               <center> <h3>{{trans('admin.add_by_photo')}}</h3> </center>--}}
                                                                               <div class="dropzone" id="add_by_photo"></div>
                                                                           </div><!-- /.form-group add_by_ar -->
                                                                       </div>   <!--col-lg-12-->
                                                                <div class="col-md-6  " >
                                                                           <div class="form-group">
                                                                               {!! Form::label('add_by_ar',trans('admin.name_add_by_ar')) !!}
                                                                               {!! Form::text('add_by_ar',$products->add_by_ar,['class'=>'form-control','class'=>'form-control' ]) !!}
                                                                           </div><!-- /.form-group add_by_ar -->
                                                                       </div>   <!--col-lg-6-->
                                                                    <div class="col-md-6  " >
                                                                           <div class="form-group">
                                                                               {!! Form::label('add_by_en',trans('admin.name_add_by_en')) !!}
                                                                               {!! Form::text('add_by_en',$products->add_by_en,['class'=>'form-control','class'=>'form-control' ]) !!}
                                                                           </div><!-- /.form-group add_by_en -->
                                                                       </div>   <!--col-lg-6-->



                                                           @include('back.products.tabs.department')

                                                       </div><!--row-->
                                                       </aside><!--content_tab_info product_info-->                                                  </div>