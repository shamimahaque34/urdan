<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('front.includes.meta')
    <title>@yield('title')</title>
    @include('front.includes.css')
</head>

<body>
<div class="main-wrapper main-wrapper-2">
   @include('front.includes.header')
    @yield('body')
    @include('front.includes.footer')
    <!-- Product Modal start -->
    <div class="modal fade quickview-modal-style" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><i class=" ti-close "></i></a>
                </div>
                <div class="modal-body">
                    <div class="row gx-0">
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="modal-img-wrap">
                                <img id="modalImage" src="{{ asset('/') }}assets/images/product/quickview.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="product-details-content quickview-content">
                                <h2 id="modalName">New Modern Chair</h2>
                                <div class="product-details-price">
                                    <span class="old-price" id="modalRegularPrice">$25.89 </span>
                                    <span class="new-price" id="modalSellingPrice">$20.25</span>
                                </div>
                                <div class="product-details-review">
                                    <div class="product-rating">
                                        <i class=" ti-star"></i>
                                        <i class=" ti-star"></i>
                                        <i class=" ti-star"></i>
                                        <i class=" ti-star"></i>
                                        <i class=" ti-star"></i>
                                    </div>
                                    <span>( 1 Customer Review )</span>
                                </div>
                                <p id="modalShortDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare tincidunt neque vel semper. Cras placerat enim sed nisl mattis eleifend.</p>
                                <div class="product-details-action-wrap">
                                    <div class="product-quality">
                                        <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="1">
                                    </div>
                                    <div class="single-product-cart btn-hover">
                                        <a href="#">Add to cart</a>
                                    </div>
                                    <div class="single-product-wishlist">
                                        <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="single-product-compare">
                                        <a title="Compare" href="#"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Modal end -->
    @include('front.includes.mobile-menu')
</div>
@include('front.includes.script')
@if(Session::has('message'))
    <script>
        $(document).ready(function () {
            toastr.success('{{ Session::get('message') }}');
        })
    </script>
@endif
</body>
</html>
