<!DOCTYPE html>
<html lang="en">
<head>
 

  <title> 🏛 المكتبة الإلكترونيّة للكتب المجانية</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="{{url('front')}}/layout/js/jquery.min.js"></script> 
   <!--start  test menue -------------------------------------------- -->
@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
    <!--Main Menu File-->
    <link rel="stylesheet" type="text/css" media="all" href="{{url('front')}}/layout/plugins/tabing_mega_menu/css/webslidemenu.css" />
    <!--Main Menu File-->

    <!--For Demo Only (Remove below css file and Javascript) -->
    <link rel="stylesheet" type="text/css" media="all" href="{{url('front')}}/layout/plugins/tabing_mega_menu/css/demo.css" />
   <!--End    test menue -------------------------------------------- -->
            <link rel="icon" type="image/png" sizes="16x16" href="{{url('public/storage').Storage::url(frontend()->icon)}}"   >

   <!--start selsct  2 -------------------------------------------- -->
 <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

 <!--start selsct  2 -------------------------------------------- -->
 <!--start sidbar -------------------------------------------- -->
          <link rel="stylesheet" href="{{url('front')}}/layout/plugins/menu/material-design/css/material-design-iconic-font.css" />
          <link rel="stylesheet" href="{{url('front')}}/layout/plugins/menu/css/hs-menu.min.css"/>
 
 <!--End   sidbar -------------------------------------------- -->
 <!--start amazonmenu-------------------------------------------- -->
<link rel="stylesheet" type="text/css" href="{{url('front')}}/layout/plugins/amazonmenu/amazonmenu.css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{url('front')}}/layout/plugins/amazonmenu/amazonmenu.js"></script>
<script>

jQuery(function(){
  amazonmenu.init({
    menuid: 'mysidebarmenu'
  })
})
</script>
 <!--End   amazonmenu-------------------------------------------- -->
 <!-- -------------------------- start btn_to_top-->

<link href="{{url('front')}}/layout/plugins/btn_to_top/dist/jquery-backToTop.min.css" rel="stylesheet" type="text/css">
  <!-- -------------------------- End btn_to_top-->
 <!-- --------------------------wow js -->
  <link rel="stylesheet" href="{{url('front')}}/layout/plugins/wow_js/css/libs/animate.css">
 <script src="{{url('front')}}/layout/plugins/wow_js/dist/wow.js"></script>
    <!-- 
 <script type="text/javascript" src="https://cdn.boomcdn.com/libs/wow-js/1.3.0/wow.js"></script>
 <script type="text/javascript" src="https://cdn.boomcdn.com/libs/wow-js/1.3.0/wow.min.js"></script> -->
               <script>
              new WOW().init();
              </script>
 <link rel="stylesheet" type="text/css" href="">
 <!--End   wow js -------------------------------------------- -->
 
 
       <link rel="stylesheet" href="{{url('front')}}/layout/css/font-awesome.min.css">


        <link rel="stylesheet" href="{{url('front')}}/layout/css/bootstrap.min.css">

    <script src="{{url('front')}}/layout/js/bootstrap.min.js"></script>

        <!-- <script src="{{url('front')}}/layout/js/jquery.min.js"></script> -->
              <script src='https://tevratgundogdu.com/works/ideabox-breaking-news-ticker/demo/js/jquery-3.3.1.min.js'></script>



 <!-- ----------------------------------------------------------------------------------------- -->
<!-- Optional - Adds useful class to manipulate icon font display -->
    <link rel="stylesheet" href="{{url('front')}}/layout/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{url('front')}}/layout/css/helper.css">
  
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>

 <!-- ----------------------------------------------------------------------------------------- -->

<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
   <!-- ----------------------------------------------------------------------------------------- -->
 <link rel="stylesheet" href="{{url('front')}}/layout/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{url('front')}}/layout/css/owl.theme.default.min.css">
 <!-- ----------------------------------------------------------------------------------------- -->
 <script src="{{url('front')}}/layout/js/owl.carousel.min.js"></script>
 <!-- ----------------------------------------------------------------------------------------- -->
    <!-- ----------------------------------------- -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            var availableTags = [
                "",
                @foreach($products as $product)
                     "{{$product->product_name_ar}}",
                     "{{$product->product_name_en}}",
 
                @endforeach
            ];
            $( "#query" ).autocomplete({
                source: availableTags
            });
        } );
    </script>
    {{-----------------------------------------------}}
     @include('front._include.style')


 

 
</head>
<body>