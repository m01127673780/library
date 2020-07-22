@if(count($errors->all()) > 0)

    <span class="btn btn-danger message_error  message_alert_error  text-left message content_alert_eroor pos_r" >
                    <!--<button class="w_28px_h_28px_custom button_close_alert_eroor btn-danger  "   > <i class="fa fa-times"></i> </button> -->

        <ol >
           
            @foreach($errors->all() as $error)
                <div class=" "> <img class="w_18px_h_18px "src="{{url('default')}}/d_like6.png" >{{$error}}<img class="w_18px_h_18px "src="{{url('default')}}/sad7.png" >  
                   </div>
            @endforeach
        </ol>
    </span>
@endif