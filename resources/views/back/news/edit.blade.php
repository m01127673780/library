@extends('back.index')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper content_wrapper_datatable">
            <!-- Content Header (Page contenter) -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card card_dark">
                            <div class="card-contenter">
                                <h3 class="card-title">{{$title}}</h3>
                            </div>
                        @include('back.message')
                        <!-- /.card-contenter -->
                         <div class="card-body form_dark">
                         <!-- /.----------------------------------------------------------------- -->
                             <div class="box-body">
                                    {!! Form::open(['url'=>aurl('news/'.$news->id),'method'=>'put','files'=>true]) !!}
                                   <div class="row">
                             <!--        {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-news-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                     }} -->
                                 <div class="col-md-12  " >
                                      <section>
                                        <div class="form-group  d-none">
                                        {!! Form::label('link',trans('admin.link')) !!}
                                        {!! Form::text('link',$news->link,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group text3_ar -->
                                    
                                    <!----------------start  photo-->
                                    <div class="input-group ">

                                        <div class="custom-file">
                                            {!! Form::label('photo',trans('admin.photo_news'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>


                                          @if(!empty($news->photo))
                                              <div> <img src="{{url('public/storage').Storage::url($news->photo)}}" class="img_100px  "></div>
                                          @else
                                              <div class="text-center"> <img   src="{{url('default')}}/slider.png" class="img_100px"></div>
                                      @endif

                                   <!----------------End photo-->
                                   </section> 
                               </div><!-- col-md-12-->



                                   <div class="col-md-6 content_form_ar" >
                                       <div class="form-group ">
                                           {!! Form::label('title_ar',trans('admin.title_ar')) !!}
                                           {!! Form::text('title_ar',$news->title_ar,['class'=>'form-control']) !!}
                                       </div><!-- /.form-group title_ar -->
                                       <div class="form-group ">
                                        {!! Form::label('content_ar',trans('admin.content_ar')) !!}
                                        {!! Form::textarea('content_ar',$news->content_ar,['class'=>'form-control']) !!}
                                    </div><!-- /.form-group content_en -->
                                     <div class="form-group ">
                                           {!! Form::label('start_at',trans('admin.start_at')) !!}
                                           {!! Form::text('start_at',$news->start_at,['class'=>'form-control']) !!}
                                       </div><!-- /.form-group start_at -->
                                       
                                   </div><!--col-md-6 content_form_ar-->
                                   <div class="col-md-6 content_form_en" >
                       

                                     <div class="form-group ">
                                        {!! Form::label('title_en',trans('admin.title_en')) !!}
                                        {!! Form::text('title_en',$news->title_en,['class'=>'form-control']) !!}
                                    </div><!-- /.form-group title_en -->

                                       <div class="form-group ">
                                           {!! Form::label('content_en',trans('admin.content_en')) !!}
                                           {!! Form::textarea('content_en',$news->content_en,['class'=>'form-control']) !!}
                                       </div><!-- /.form-group content_en -->

                                             <div class="form-group ">
                                           {!! Form::label('end_at',trans('admin.end_at')) !!}
                                           {!! Form::text('end_at',$news->end_at,['class'=>'form-control']) !!}
                                       </div><!-- /.form-group end_at -->
                                       
                                   </div><!--col-md-6 content_form_en-->
                                </div><!--row-->
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-news-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->
                            </div> <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
   @endsection