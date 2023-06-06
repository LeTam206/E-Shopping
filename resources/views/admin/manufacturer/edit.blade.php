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
                    <input type="text" class="form-control" name="name" id="name" value="{{ $manu->name }}">
                        <button type="submit" class="btn btn-warning mt-3">Sửa</button>
                    </form>
                </div>
            </div>
            @yield('admin_content')
        </section>
    </section>
</body>
</html>
