@extends('layout.app')

@section('content')
      <!-- cart -->
      <div class="container" style="padding: 50px 0">
        <div class="cart">
            <!-- <div class="cart_top"> -->
              <!-- <div class="top">
                <i class="fa-solid fa-cart-shopping"></i>
              </div>
              <div class="top">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="top">
                <i class="fa-regular fa-credit-card"></i>
              </div> -->
            <!-- </div> -->
            <div class="container" style="padding-top: 20px;">
              <div class="cart_content row">
                <div class="col-md-8 cart_content_left">
                  <table border="1" style="width: 100%; text-align: center;">
                    <tr>
                      <th colspan="7" style="background-color: crimson; color: #fff; font-size: 30px;">Giỏ Hàng</th>
                    </tr>
                    <tr>
                      <th>Hình</th>
                      <th>Tên Sản Phẩm</th>
                      <th>Giá</th>
                      <th>Số Lượng</th>
                      <th>Thành Tiền</th>
                      <th>Sửa</th>
                      <th>Xóa</th>
                    </tr>

                    <!-- Sản Phẩm -->
                    @php
                        $total = 0;
                        $count = 0;
                    @endphp
                    @isset($carts)
                      @foreach ($carts as $cart)
                      @php
                        $total += $cart->total;
                        $count += $cart->count;
                      @endphp
                      <tr>
                        <td><img src="./uploads/product/{{ $cart->product_image }}" alt="food1" style="height: 100px; width: 100px"></td>
                        <td>{{ $cart->product_name }}</td>
                        <td>{{ number_format($cart->product_price) }} VNĐ</td>
                        <form action="/edit-cart/{{ $cart->cart_id }}" method="get">
                        <td><input min="1" type="number" name="qty" id="qty" value="{{ $cart->count }}" style="text-align: center; width: 50px;"></td>
                        <input type="hidden" name="product_id" value="{{$cart->id}}">
                        <td>{{ number_format($cart->product_price *  $cart->count) }} VNĐ</td>
                          <td><button type="submit" style="background-color: green; color: #fff; ; font-weight: bold; border-radius: 5px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                        </form>

                        <td><a href="/delete-cart/{{ $cart->cart_id }}"><button style="background-color: red; color: #fff; font-weight: bold; border-radius: 5px"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a></td>
                      </tr>
                      @endforeach
                    @endisset
                    
                    {{-- <tr>
                      <td><img src="./images/f1.png" alt="food1" style="height: 100px"></td>
                      <td>Hamburger</td>
                      <td>$20</td>
                      <td><input type="number" name="qty" id="qty" value="4" style="text-align: center;"></td>
                      <td>$80</td>
                      <td><button style="background-color: red; color: #fff; font-weight: bold;">X</button></td>
                    </tr>
                    <tr>
                      <td><img src="./images/f1.png" alt="food1" style="height: 100px"></td>
                      <td>Hamburger</td>
                      <td>$20</td>
                      <td><input type="number" name="qty" id="qty" value="4" style="text-align: center;"></td>
                      <td>$80</td>
                      <td><button style="background-color: red; color: #fff; font-weight: bold;">X</button></td>
                    </tr> --}}
                  </table>
                </div>

                <div class="col-md-4 cart_content_right">
                  <table  style="width: 100%; margin: 25px 0;">
                    <tr>
                      <th colspan="2">Tổng Tiền Giỏi Hàng</th>
                    </tr>

                    <tr style="padding: 15px 0;">
                      <td>Tổng Sản Phẩm: </td>
                      <td><p>{{ $count }}</p></td>
                    </tr>

                    <tr style="padding: 15px 0;">
                      <td>Tổng Tiền: </td>
                      <td><p style="font-weight: bold"> {{ number_format($total) }} VNĐ</p></td>
                    </tr>

                  </table>
                  <div class="cart_content_right_button" style="text-align: center;">
                    <a href="/menu"><button style="background-color: #000; color: #fff; border-radius: 5px; font-weight: bold; padding: 5px;">Tiếp Tục Mua Sắm</button></a>
                    @guest 
                    <a href="/login"><button style="background-color: #fff; color: #000; border-radius: 5px; font-weight: bold; padding: 5px;">Thanh Toán</button></a>
                    @else
                    <a href="/book"><button style="background-color: #fff; color: #000; border-radius: 5px; font-weight: bold; padding: 5px;">Thanh Toán</button></a>
                    @endguest
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
@endsection