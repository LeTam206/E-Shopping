@extends('admin_layout')
@section('admin_content')
    <div style="padding-top: 100px" class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh Sách Người Dùng
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                </div>
                <div class="col-sm-4">
                </div>
                <form action="{{url('/search')}}" type="get">
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="Search" name="query" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="submit">Search</button>
                             
                            </span>
                        </div>
                    </div> 
                </form>
                
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    
                                </label>
                            </th>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Tên Người Dùng</th>
                            <th>Email</th>
                            <th>Số Điện Thoại</th>
                            <th>role</th>
                            <th>Quản lí</th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp 
                        @foreach ($user as $value)
                            <tr>
                                <td>
                                </td>
                                <td>{{ $i++ }}</td>
                                <th>{{$value->id}}</th>
                                <td><span class="text-ellipsis">{{ $value->name }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->email }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->phone }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->role }}</span></td>
                                <form action="{{ route('destroy1', $value->id) }}" method="POST">
                                    <td>
                                        <a href="{{ route('show', $value->id) }}" class="btn btn-primary">Show</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                        @endforeach
                    </tbody>
                   
                </table>
                
            </div>
        </div>
        {{ $user->links() }}
    </div>
    
    @endsection