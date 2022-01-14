@extends('layout')
@section('content')
	 <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Trang tìm kiếm</h2>

                        

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="section-bar clearfix">
                     <h4>Tag tìm kiếm: {{$tag}}</h4>
                  </div>
                @php 
                    $count = count($product);
                  @endphp
                  @if($count==0)
                      <div class="col-md-12">
                        <div class="card mb-12 box-shadow">
                          <div class="card-body">
                            <p>Không tìm thấy sản phẩm nào...</p>
                          </div>
                        </div>
                      </div>
                  @else
                    @foreach ($product as $key => $dulieu)
                        
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                              {{--   Hiển thị mặc định --}}
                                    <div class="productinfo text-center">
                                        <a href="{{ route('chi_tiet_san_pham',$dulieu->product_slug) }}">
                                            <img src="{{ asset('uploads/'.$dulieu->product_image) }}" alt="" width="200" height="150">
                                            <h4>
                                            {{$dulieu->product_content}}
                                            </h4>
                                            <h3>{{number_format($dulieu->product_price,0,',','.').' '.'VNĐ'}}</h3>
                                            
                                        </a>                                       
                                    </div>
                               {{--  Phần trượt --}}
                               <a href="{{ route('chi_tiet_san_pham',$dulieu->product_slug) }}">
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            
                                                <p>@php
                                                  $tomtat = substr($dulieu->product_desc, 0,300);
                                                    @endphp                                                       
                                                {!!$tomtat."..."!!} 
                                                </p>
                                               <h4 style="color:white;">{{number_format($dulieu->product_price,0,',','.').' '.'VNĐ'}}</h4>
                                                 
                                           
                                        </div>
                                    </div>
                                     </a>
                                </div>
                                <div class="choose productinfo text-center">
                                    
                                        
                                <form>
                                    @csrf
                                    <input type="hidden" value="{{$dulieu->id}}" class="cart_product_id_{{$dulieu->id}}">
                                    <input type="hidden" value="{{$dulieu->product_content}}" class="cart_product_name_{{$dulieu->id}}">
                                    <input type="hidden" value="{{$dulieu->product_quantity}}" class="cart_product_quantity_{{$dulieu->id}}">                 
                                    <input type="hidden" value="{{$dulieu->product_image}}" class="cart_product_image_{{$dulieu->id}}">
                                    <input type="hidden" value="{{$dulieu->product_price}}" class="cart_product_price_{{$dulieu->id}}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{$dulieu->id}}">
                                    <button type="button" class="btn btn-default add-to-cart" data-id_product="{{$dulieu->id}}" 
                                            name="add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</button>
                                </form>   
                                    
                                </div>
                            </div>
                        </div>
                   
                    @endforeach
                    @endif    
                       
                    </div><!--features_items-->
                  
                    
@endsection