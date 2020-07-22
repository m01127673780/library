               <!-- start section product_min ========================================================================================-->
              <section class="content_product_min m_t_b_20   " style="background-color: #f9f9f9">
                <!-- ..... --><address class="address_title m_t_30 ">  <h2>    {{trans('admin.all_news')}}</h2></a></address><!-- .... -->
                 <div class="custom_container container content_product_min"> 
                      <div class="row contact_row_product_min "> 
                        @foreach($news as $new)
                         <div class="col-md-4  m_b_20"  >
                          <a class="   " href="{{url('show/news/'.$new->id)}} ">
                             <div class="card card_product_min" >
                               <div   class="a_link_product_min_img" >
                                  <img class="posi_abs" src="{{url('public/storage').Storage::url($new->photo)}}">
                              </div>
                              <div class="card-body">
                                 <p class="card_product_min_p_name">{{$new['title_'.$lang]}} </p>
                                   <p class="  card_product_min_p"> {{$new['content_'.$lang]}} </p>
                                </div><!--card-body-->
                            </div><!--card-->
                            </a>
                        </div><!--............................................................-->
                        @endforeach
                         <div class="col-md-12  m_b_20"  > {{$news->links('vendor.pagination.bootstrap-4')}} </div>
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