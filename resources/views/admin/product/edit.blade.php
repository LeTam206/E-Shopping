<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Edit Manufacturer</title>
</head>
<body>
    @include('admin_layout')
    <section id="main-content">
        <section class="wrapper mt-4">
            <div class="card">
                <div class="card-header">
                    <h2>Chỉnh Sửa Hãng Sản Xuất</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{ asset($product->image) }}" alt="Product" class="img-flui w-75 mt-2">
                        </div>
                        <div class="col-sm-8">
                            <form action="{{ url('admin/product/' . $product->id) }}" method="post"
                                enctype="multipart/form-data">
                                {!!csrf_field()!!}
                                @method('PATCH')
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" value="{{ $product->name }}">

                                <label for="name" class="mt-2">Price:</label>
                                <input type="text" class="form-control" name="price" value="{{ $product->price }}">

                                <label for="name" class="mt-2">Description:</label>
                                <textarea class="form-control" rows="5" id="description" name="description">
                                                        {{ $product->description }}
                                                    </textarea>

                                <label for="manufacturer" class="mt-2">Manufacturer:</label> <br>
                                <select name="manufacturer" id="manufacturer" class="form-select">
                                    @foreach ( $allManu as $item)
                                    @if( $item->name == $product->manufacturer )
                                    <option value="{{ $product->manufacturer }}" selected>{{
                                        $product->manufacturer }}</option>
                                    @else
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <input type="file" name="image" id="image" class="form-control mt-3">
                                <button type="submit" class="btn btn-warning mt-3">Sửa</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            @yield('admin_content')
        </section>
    </section>
</body>

</html>
