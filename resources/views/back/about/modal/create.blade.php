<!-- start  Modal lg  Modal lg Create New record--------------- -->
<div class="modal fade bd-example-modal-lg" id="createNewabout" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start  Modal lg---------------- -->
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- -------------------------------------------------------}}
                    <div class="box">
                        <div class="box-titleer">
                            <center class="box-content"><h3 class="title_content">{{ trans('admin.create_new_about') }}</h3></center>
                        </div>
                        <section class="modal_massage"> @include('back.message_error') </section>
 <!-- /.----------------------------------------------------------------- -->
                             <div class="box-body">
                                     {!! Form::open(['url'=>aurl('about'),'files'=>true]) !!}
                                        <section class="">@include('back.about.forms.create')</section>

                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->                        
                     </div><!-- /.box -->

                    {{-- -----------------------------------------------------------------------------}}
                </div><!-- /.container-fluid -->
            </div><!-- /.modal-body -->

            <!--  End   Modal  lg---------------- -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog modal-lg -->
</div><!-- /.modal fade bd-example-modal-lg -->
<style>
    .modal-content{width: 120%;}
 </style>
<!-- End  Modal lg Create New record  ---------------- -->

