<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Product</title>
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
                            <h2>TẤT CẢ SẢN PHẨM</h2>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{ route('product.create') }}" class="btn btn-success d-block ms-auto w-50">Thêm</a>
                        </div>
                    </div>

                    <div class="card-body text-dark">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th>Image</th>
                                    <th width="30%">Name</th>
                                    <th width="15%">Manufacturer</th>
                                    <th width="15%%">Price</th>
                                    <th width="20%%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allProducts as $item)
                                <tr>
                                    <td class="my-auto">{{ $item->id }}</td>
                                    <td>
                                        <img src="{{ asset($item->image) }}" alt="Product" class="img-flui w-5"
                                            style="width: 5em">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->manufacturer }}</td>
                                    <td>
                                        @if ($item->price == null )
                                            Chưa có
                                        @else
                                            {{ $item->price }} VND
                                        @endif
                                        
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ url('admin/product/' . $item->id . '/edit') }}"
                                                class="btn btn-warning me-2">Sửa</a>
                                            <form action="{{ url('/admin/product/' . $item->id) }}" method="post">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>

                                {{-- <img src="{{ asset($item->image) }}" alt="Product" class="img-flui w-75 mt-2"> --}}





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