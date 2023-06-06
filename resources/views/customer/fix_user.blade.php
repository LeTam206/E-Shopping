@extends('dash')
<div class="container">
    <div class="row justify-content-center " style="padding: 50px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sửa thông tin user') }}</div>

                <form action="{{ route('update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif --}}
                    <div class="form-group mb-3">
                        <p> Tên Người dùng</p>
                        <input type="text" placeholder="" id="name" value="{{ $user->name }}"
                            class="form-control" name="name" required autofocus>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <p>Email</p>
                        <input type="text" placeholder="" id="email" value="{{ $user->email }}"
                            class="form-control" name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <p>SDT</p>
                        <input type="text" placeholder="" id="phone" value="{{ $user->phone }}"
                            class="form-control" name="phone" required autofocus>
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <select class="form-select"id="role "name="role" aria-label="Default select example" required autofocus>
                     
                        <option value="khách Hàng">Khách Hàng</option>
                     
                      </select>
                    {{-- <div class="form-group mb-3">
                        <p>Address</p>
                        <input type="text" placeholder="" id="address" value="{{ $user->address}}"
                            class="form-control" name="address" required autofocus>
                        @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div> --}}
                    {{-- <div class="form-group mb-3">
                        <p> Chọn hình ảnh</p>
                        <input type="file" placeholder="" id="image" class="form-control"
                          value="{{ $user->image }}"name="image" required>
                        <span class="text-danger"></span>
                    </div> --}}

                    <div class="card-footer">
                        <button type="submit" class="btn btn-dark btn-block">Sửa</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
