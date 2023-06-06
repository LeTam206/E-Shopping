<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Manufacturer</title>
    <style>
        th,
        td,
        tr {
            color: #000 !important;
        }
    </style>
</head>

<body>
    @include('admin_layout')
    <section id="main-content">
        <section class="wrapper mt-4">
            {{-- Header of content --}}
            <div class="content-header">
                @if (Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header px-0 py-3">
                        <div class="col-sm-9">
                            <h2>TẤT CẢ HÃNG SẢN XUẤT</h2>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{ route('manufacturer.create') }}" class="btn btn-success d-block ms-auto w-50">Thêm</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allManu as $manu)
                                <tr>
                                    <td>{{$manu->id}}</td>
                                    <td>{{$manu->name}}</td>
                                    <td>{{$manu->created_at}}</td>
                                    <td>
                                        <div class="d-flex text-center">
                                            <a href="{{ url('admin/manufacturer/' . $manu->id . '/edit') }}"
                                                class="btn btn-warning">Sửa</a>
                                            <form action="{{ url('admin/manufacturer/' . $manu->id) }}" method="post"
                                                class="ms-2">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            @yield('admin_content')
        </section>
    </section>
</body>

</html>