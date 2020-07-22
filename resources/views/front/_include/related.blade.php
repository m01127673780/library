



 <!-- start section product_min ========================================================================================-->
<section class="content_product_min m_t_b_20   " style="background-color: #f9f9f9">
  <!-- ..... --><address class="address_title m_t_30 ">  <h2>مقالات مشابهه</h2></a></address><!-- .... -->
   <div class="custom_container container content_product_min">
        <div class="row contact_row_product_min owl-carousel owl-theme owl_carousel_related">
            @foreach($products as $product)
                <!-- --------------------------------------------------------------- -->
                            @if(($articlefind->department_id) === $product->department_id)
                <div class="   m_b_20"  >
                    <div class="card card_product_min" >
                        <a href="" class="a_link_product_min_img" >
                            <img class="posi_abs" src="{{url('public/storage').Storage::url($product->photo)}}">
                        </a>
                        <div class="card-body">
                            <p class="card_product_min_p_name">{{$product['product_name_'.$lang]}} </p>
                            <p class="    description_content">
                                {{$product['description_'.$lang]}}
                            </p>
                            {{--                   <center><p><span class="card_product_min_price">120.00</span><span class="card_product_min_price_through price_through">120.00</span><span class="card_product_min_discrption">outstock</span></p></center>--}}
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--............................................................-->
                @endif<!--/. $department->id) == '15' -->
            @endforeach

                    <!-- **************************************************************************************** -->
                   </div><!--row-->
                </div><!--container-->
              </div><!--content_product_min-->
              <!-- -------------------------------------------------------------------------- -->
            </section><!--content-product_min--->
      </div><!--row-->
    </div><!--container-->
  </div><!--content_brands-->
  <!-- -------------------------------------------------------------------------- -->
</section><!--content-brands-->
<!-- End section BRANDS ==================================================-->