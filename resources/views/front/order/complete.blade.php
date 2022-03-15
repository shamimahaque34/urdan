@extends('front.master')

@section('title')
    0rder complete page
@endsection

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h2 class="text-center">Order Placed successfully. Thanks for your order.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('front-js')
    <script>
        $(function (){
            window.setTimeout(function (){
                window.location.href = "{{ url('/') }}";
            },2000)
        });
    </script>
@endsection
