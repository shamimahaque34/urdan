@extends('front.master')

@section('title')
    Checkout
@endsection

@section('body')
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Checkout </h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>Checkout </li>
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
    <div class="checkout-main-area pb-100 pt-100">
        <div class="container">
            <div class="checkout-wrap pt-30">
                <form action="{{ route('checkout-form') }}" method="post" id="checkoutForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing-info-wrap">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Phone <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                            <input type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Address <abbr class="required" title="required">*</abbr></label>
                                            <textarea name="address" id="" class="billing-address col-form-label" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="your-order-area">
                                <h3>Your order</h3>
                                <div class="your-order-wrap gray-bg-4">
                                    <div class="your-order-info-wrap">
                                        <div class="your-order-info">
                                            <ul>
                                                <li>Product <span>Total</span></li>
                                            </ul>
                                        </div>
                                        <div class="your-order-middle">
                                            <ul>
                                                @foreach($products as $product)
                                                    <li>{{ $product->name }} X {{ $product->quantity }} <span>BDT {{ $product->price * $product->quantity }} </span></li>
                                                @endforeach

                                            </ul>
                                        </div>

                                        <div class="your-order-info order-total">
                                            <ul>
                                                <li>Total <span>BDT {{ number_format($total) }} </span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="payment-method">

                                        <div class="pay-top sin-payment">
                                            <input id="payment-method-3" class="input-radio" checked type="radio" value="cash" name="payment_method">
                                            <label for="payment-method-3">Cash on delivery </label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                            </div>
                                        </div>
                                        <div class="pay-top sin-payment">
                                            <input id="payment-method-3" class="input-radio" type="radio" value="card" name="payment_method">
                                            <label for="payment-method-3">CARD </label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="Place-order btn-hover">
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('checkoutForm').submit()">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
