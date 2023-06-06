@extends('dash')
@section('content')
<div style="background: beige">
    <main class="signup-form" style="padding: 100px" >
        <div class="cotainer">
            <div class="row justify-content-center">              
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Đăng ký Tài Khoản User</h3>
                        <div class="card-body">
                            
                            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                        required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
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
                                    <input type="password" placeholder="confirmed" id="password" class="form-control"
                                        name="password_confirmation" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="number" placeholder="phone" id="phone" class="form-control"
                                        name="phone" required>
                                    @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="file" placeholder="image" id="image" class="form-control"
                                        name="image" required>
                                    @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>   
                                <select class="form-select"id="role "name="role" aria-label="Default select example" required autofocus>                               
                                    <option value="Khách Hàng">Khách Hàng</option>                                  
                                  </select>
                                </div>     
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember Me</label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                    <div>
                                        <a style="padding-right: 50px" href="{{url('/cus_login')}}">Đăng Nhập</a>
                                        <a href="{{url('/trang-chu')}}">Trang Chủ</a>
                                    </div>                               
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection