<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Add Manufacturer</title>
    <style>
        .error {
            padding-top: 5px;
            color: red
        }
    </style>
</head>

<body>
    @include('admin_layout')
    <section id="main-content">
        <section class="wrapper mt-4">
            <div class="card">
                <div class="card-header">
                    <h2>Thêm Sản Phẩm</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="name">Nhập tên sản phẩm: <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
                        @error('name')
                        <div class="error">Vui lòng nhập trường này từ 1 đến 50 ký tự !</div>
                        @enderror

                        <label for="price" class="mt-3">Nhập giá sản phẩm:</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="Nhập giá sản phẩm">

                        <label for="description" class="mt-3">Nhập mô tả sản phẩm:</label>
                        <textarea class="form-control" rows="5" id="description" name="description" placeholder="Nhập mô tả sản phẩm"></textarea>

                        <label for="manufacturer" class="mt-3">Chọn hãng sản xuất:<span style="color: red">*</span></label>
                        <select name="manufacturer" id="manufacturer" class="form-select">
                            <option value="" disabled selected>Chọn 01 hãng sản xuất</option>
                            @foreach ( $allManu as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('manufacturer')
                        <div class="error">Vui lòng chọn 1 hãng sản xuất!</div>
                        @enderror

                        <label for="image" class="mt-3">Chọn hình ảnh sản phẩm:<span style="color: red">*</span></label>
                        <input type="file" name="image" id="image" class="form-control">

                        @error('image')
                        <div class="error">Vui lòng chọn 1 hình ảnh!</div>
                        @enderror
                        <button type="submit" class="btn btn-success mt-3">Thêm</button>
                    </form>
                </div>
            </div>




            @yield('admin_content')
        </section>
    </section>
</body>

</html>