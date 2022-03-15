@extends('front.master')

@section('title')
    Urdan - View cart page
@endsection

@section('body')
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Cart</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1">
            <img src="{{ asset('/') }}assets/images/banner/breadcrumb-1.png" alt="">
        </div>
        <div class="breadcrumb-img-2">
            <img src="{{ asset('/') }}assets/images/banner/breadcrumb-2.png" alt="">
        </div>
    </div>
    <div class="cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table-content">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="width-thumbnail"></th>
                                    <th class="width-name">Product</th>
                                    <th class="width-price"> Price</th>
                                    <th class="width-quantity">Quantity</th>
                                    <th class="width-subtotal">Subtotal</th>
                                    <th class="width-remove"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartProducts as $cartProduct)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{ asset($cartProduct->attributes->image) }}" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <h5><a href="#">{{ $cartProduct->name }}</a></h5>
                                            </td>
                                            <td class="product-cart-price"><span class="amount">BDT {{ $cartProduct->price }}</span></td>
                                            <td class="cart-quality">
                                                <div class="product-quality">
                                                    <input class="cart-plus-minus-box input-text qty text" name="qty" value="{{ $cartProduct->quantity }}">
                                                </div>
                                            </td>
                                            <td class="product-total"><span>BDT {{ $cartProduct->price * $cartProduct->quantity }}</span></td>
                                            <td class="product-remove"><a href="{{ route('remove-product-from-cart',['id' => $cartProduct->id]) }}"><i class=" ti-trash "></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Total</td>
                                        <td><b>{{ $total }}</b></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update btn-hover">
                                    <a href="{{ route('/') }}">Continue Shopping</a>
                                </div>
                                <div class="cart-clear-wrap">

                                    <div class="cart-clear btn-hover">
                                        <a href="{{ route('checkout') }}">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
