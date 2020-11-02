@extends('layout.main')
@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					URL SHORTENER
				</span>
                <div class="container">
                    <div class="row">
                        <div class="login150-form validate-form p-b-33 p-t-5">
                                <div class="alert alert-success" dir="rtl">
                                    <p>لینک با موفقیت ایجاد شد.</p>
                                </div>
                            @foreach ($backs as $back)
                                <li class=”task-item”><?= $back ?></li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
