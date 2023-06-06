@extends('dash')

@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center "style="padding: 100px">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Đăng Nhập</h3>
                        @if (Session::has('alert'))
                            <script>
                                var alertType = "{{ Session::get('alert') }}";
                                var message = "{{ Session::get('status') }}";
                                alert(message);
                            </script>
                        @endif
                        <div class="card-body">

                            <form method="POST" action="{{ route('userLogin') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control"
                                        name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                        name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                    <div>
                                        <a style="padding-right: 20px" href="{{ url('/cus_register') }}">Đăng Ký</a>
                                        <a href="{{ url('/trang-chu') }}">Trang Chủ</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
