@extends('dash')

<div class="container">
<div class="row justify-content-center " style="padding: 50px">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Đổi Mật khẩu') }}</div>
            <form action="{{ route('update-password') }}" method="POST">
                @csrf
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="oldPasswordInput" class="form-label">Old Password</label>
                        <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                            placeholder="Nhập mật khẩu cũ">
                        @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="newPasswordInput" class="form-label">New Password</label>
                        <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                            placeholder="Nhập mật khẩu mới">
                        @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                        <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                            placeholder="Nhập lại mật khẩu">
                    </div>

                </div>

                <div class="card-footer">
                    <button class="btn btn-success">Submit</button>
                    <a href="{{ url('/trang-chu') }}">Trang Chủ</a>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
