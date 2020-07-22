

<script type="text/javascript">
    $(document).ready(function(){
        $('.select2').select2();

        $('#newsticker').breakingNews({
            position : 'fixed-top',
            borderWidth: 3,
            // height: 45,
            themeColor: '#276FBF'
        });
    });
    // ----------------------------------
    $('.owl_carousel_related', function(event) {
        setTimeout(function(){
            var activeEls = $('.owl-item.active').eq(3);
            setCarouselCaption( activeEls );
        },1);
    });
    $('.owl_carousel_related').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        margin:10,
        nav:true,
        dots:true,
        // rtl:'ltr',
        smartSpeed:2000,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    // --------------------------
    // ----------------------------------

    $('#testimonial-slider').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        margin:10,
        nav:true,
        dots:true,
        smartSpeed:2000,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    // --------------------------
    $('.owl_carousel_brands').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        margin:10,
        nav:true,
        dots:false,
        smartSpeed:2000,

        responsive:{
            0:{
                items:4
            },
            600:{
                items:6
            },
            1000:{
                items:8
            }
        }
    });
    // ------------------------------------------------------owl_carousel_soqu
    $('.owl_carousel_soqu').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        margin:10,
        nav:true,
        dots:false,
        smartSpeed:2000,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:8
            }
        }
    });
    // ------------------------------------------------------owl_carousel_soqu2
    $('.owl_carousel_soqu2').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        margin:10,
        nav:true,
        dots:false,
        smartSpeed:3000,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:8
            }
        }
    });
    // ------------------------------------------------------
    $('.owl_carousel_adds').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        margin:0,
        nav:false,
        dots:false,
        smartSpeed:3000,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });


    $('.content_btn_proudact span').click(function () {
        $(this).addClass('active_btn_product').siblings().removeClass('active_btn_product')
        var p = $(this).data('role');
        $('.contact_row_product_min .contact_col_product_min').hide();
        $('.contact_row_product_min').contents().filter('#' + p).fadeIn();
        // console.log(p)






    });
</script>


<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

<!-- -------------------------- start  btn_to_top-->

<script src="{{url('front')}}/layout/plugins/btn_to_top/jquery-backToTop.js"></script>
<script src="{{url('front')}}/layout/js/script.js"></script>

<script>var $button = $.backToTop({theme: 'fawesome'});</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- -------------------------- End btn_to_top-->

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="vendor/select2/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();

    });
</script>
<style>
    .select2-container--default .select2-selection--single {

        position: absolute;
        width: 100%!important;
        height: 45px!important;
        /*---------------*/
        width: 100%;
        position: relative;
        float: right;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        border: 0;
        padding: 0;
        margin: 0;
        text-indent: 15px;
        font-size: 12px;
        height: 42px;
        z-index: 2;
        outline: none;
        color: #7d7d7d;
        background-color: #e9ebef;
        -webkit-transition: all 0.7s ease 0s;
        -moz-transition: all 0.7s ease 0s;
        -o-transition: all 0.7s ease 0s;
        transition: all 0.7s ease 0s;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
    }
    .content_select2_section_up  {
        line-height: 3.8;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #000 !important;

    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 43px;
    }
</style>
<script type='text/javascript'>
    $(document).ready(function() {
        $(".gry, .blue, .green, .red, .orange, .yellow, .purple, .pink, .whitebg, .tranbg").on("click", function() {
            $(".headerfull")
                .removeClass()
                .addClass('headerfull pm_' + $(this).attr('class') );
        });

        $(".blue-grdt, .gry-grdt, .green-grdt, .red-grdt, .orange-grdt, .yellow-grdt, .purple-grdt, .pink-grdt").on("click", function() {
            $(".headerfull")
                .removeClass()
                .addClass('headerfull pm_' + $(this).attr('class') );
        });
    });
</script>
<script type="text/javascript" src="{{url('front')}}/layout/plugins/tabing_mega_menu/js/webslidemenu.js"></script>
<script type="text/javascript">
    $(document).on('click','#add_newsletter',function () {
        // create  vars
        var form = $('#form_newsletter').serialize();
        var url  =  $('#form_newsletter').attr('action');
        $.ajax({
            url:url,
            dataType:'json',
            data:form,
            type:'POST',
            beforeSend: function(){

            },success: function(data)
            {
                if(status == 'ok'){
                 $(".content_alert_success").removeClass('d-none');
                 $(".content_alert_error").addClass('d-none');
            }
            },
            error: function(data_error,exception)
            {
                $(".content_alert_success").addClass('d-none');
                $(".alert_error").removeClass('d-none');

                // alert(exception);
                if(exception == 'error')
                {
                    $(".content_alert_error").removeClass('d-none');

                    var error_list = '';

                    $('.alert_error ').html(data_error.responseJSON.message);

                    $.each(data_error.responseJSON.errors,function(index,v) {
                         error_list += '<span>'+v+'</span>';

                    });
                     $('.alert_error').html(error_list);
                 }


            }//erorr
                $(".message.btn-danger").fadeOut(4000);
                $(".button_close_alert_eroor").fadeOut(4000);
                $(".message_alert_error").fadeOut(4000);

        });
        return  false;
    });//document

</script>
<script type='text/javascript'>
{{--    $(document).ready(function() {--}}
{{--        //-----------------------------start search--}}
{{--        $('#product_name').keyup(function() {--}}
{{--            var query = $(this).val();--}}
{{--            if(query != '')--}}
{{--            {--}}
{{--                var _token = $('input[name="_token"]').val();--}}


{{--                $.ajax({--}}
{{--                    url:"{{route('autocomplete.fetch')}}",--}}
{{--                    method:'POST',--}}
{{--                    data:{query:query , _token:_token},--}}
{{--                    success: function(data)--}}
{{--                    {--}}
{{--                        $('#product_list').fadeIn();--}}
{{--                        $('#product_list').html(data);--}}

{{--                    }// End success--}}

{{--                });// End ajax--}}
{{--            } // End if query--}}
{{--        });//keyup--}}
{{--//-----------------------------End   search--}}
{{--    });//document--}}


</script>

<style>
    body {
        font-family: 'Amiri',serif;
        font-size: 16px;
     }
    .topmenusearch input{
        width: 86%!important;
    }
  .wsmenu-list > li.wscarticon a {
    padding: 0 66px 0 0;
    text-align: center;
     border-left:none!important 
     border-right: none!important 
}
.icon_home_page_section_search  {
     font-size: 24px;
     padding-left: 11px;
}
    @media (max-width:768px)  {

        .topmenusearch input{
            width: 100%!important;
        }
    }
</style>
</body>
</html>