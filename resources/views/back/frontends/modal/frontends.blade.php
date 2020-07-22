<!-- start  Modal lg  Modal lg Create New record--------------- -->
<div class="modal fade bd-example-modal-lg" id="createNewFrontends" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start  Modal lg------------------>
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- -----------------------------------------------------------------------------}}
                    <div class="box">
                        <div class="box-header">
                            <center class="box-title"><h3 class="head_title">{{ trans('admin.frontends') }}</h3></center>
                        </div>
                        <section class="modal_massage">@include('back.message_error')</section>
                        <!--/.box-header ,'required'=>'required' -->
                        <!-- /.----------------------------------------------------------------- -->

                        <!-- /.----------------------------------------------------------------- -->
                                <div class="box-body">
                                    {!! Form::open(['url'=>aurl('frontends'),'files'=>true]) !!}
             
                                     @include('back.frontends.forms.form')
                                     {!! Form::close() !!}
                                </div> <!-- /.box-body -->
                                <!-- /.----------------------------------------------------------------- -->
                        <!-- /.----------------------------------------------------------------- -->
                     </div><!-- /.box -->
                    {{-- -----------------------------------------------------------------------------}}
                </div><!-- /.container-fluid -->
            </div><!-- /.modal-body -->
            <!--  End   Modal  lg---------------- -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog modal-lg -->
</div><!-- /.modal fade bd-example-modal-lg -->
<!-- End  Modal lg Create New record  ---------------- -->
