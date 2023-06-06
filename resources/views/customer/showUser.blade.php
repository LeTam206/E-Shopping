@extends('dash')
  
@section('content')
<div class="container" style="padding-top: 50px">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/') }}"> Back</a>
            </div>
        </div>
    </div>
    <table class="table">
        <div class="pull-left">
            <h2> Thông tin user</h2>
        </div>
        <thead>
          <tr>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">SDT</th>
            <th scope="col">Role</th>
            <th scope="col">Avatar</th>
            <th scope="col">fucntion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->phone}}</td>  
                <td>{{ $user->role}}</td> 
                <td><img class="photo" src="{{asset('public/imageUser/'. $user->image)}}" alt="User Image"></td>    
                <td>
                    <a href="{{ route('viewEdit', $user->id) }}" class="btn btn-primary">Đổi Mật Khẩu</a>
                    <a href="{{ route('fix', $user->id) }}" class="btn btn-primary">Sửa thông tin cá nhân</a>
                </td>                        
            </tr>           
          </tr>
        </tbody>
      </table>
</div>  
@endsection