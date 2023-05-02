@extends('frontend.layouts.Master')

@section('content')

<section class="login-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 horizontal-center">
                <form action="" class="lulu-form center">
                    @csrf
                <h3 class="center mb-3">Login</h3>
                    <input type="email" placeholder="Email" name="email" class="block mb-3">
                    <input type="password" name="password" id="" placeholder="Password" name="password" class="block mb-3">
                    <button type="submit" class="login-submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
