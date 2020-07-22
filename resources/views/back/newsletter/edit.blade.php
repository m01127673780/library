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
                                    {!! Form::open(['url'=>aurl('ads/'.$ads->id),'method'=>'put','files'=>true]) !!}
                                   <div class="row">
                             <!--        {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-ads-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                     }} -->
                                 <div class="col-md-12  " >
                                      <section>
                                        <div class="form-group  d-none">
                                        {!! Form::label('link',trans('admin.link')) !!}
                                        {!! Form::text('link',$ads->link,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group text3_ar -->
                                    
                                    <!----------------start  photo-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('photo',trans('admin.photo_ads'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                          @if(!empty($ads->photo))
                                              <div> <img src="{{url('public/storage').Storage::url($ads->photo)}}" class="img_100px  "></div>
                                          @else
                                              <div class="text-center"> <img   src="{{url('default')}}/slider.png" class="img_100px"></div>
                                      @endif

                                   <!----------------End photo-->
                                   </section> 
                               </div><!-- col-md-12-->



                                   <div class="col-md-12 content_form_ar" >
                                       <div class="form-group ">
                                           {!! Form::label('email',trans('admin.email')) !!}
                                           {!! Form::email('email',$ads->email,['class'=>'form-control']) !!}
                                       </div><!-- /.form-group email -->

                                   </div><!--col-md-12 content_form_ar-->

                                </div><!--row-->
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-ads-h"> </i> ' ,
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