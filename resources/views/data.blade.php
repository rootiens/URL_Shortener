@extends('layout.main')
@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					URL SHORTENER
				</span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="post">
                    @csrf
                    @if(session()->has('error'))
                        <div class="alert alert-warning">
                            <p>{{ session()->get('error') }}</p>
                        </div>
                    @endif
                    <div class="wrap-input100 " data-validate="url slug">
                        <input class="input100" type="text" id="code" name="code" placeholder="ادرس کوتاه شده">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="full url">
                        <input class="input100" type="text" id="fullurl" name="fullurl" placeholder="لینک طولانی">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button type="submit" class="login100-form-btn">
                            ایجاد لینک کوتاه
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
