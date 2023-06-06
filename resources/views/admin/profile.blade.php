<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Profile</title>
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
                            <h2>THÔNG TIN ADMIN</h2>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                                <tr>
                                    <th class="w-25">Name</th>
                                    <td>{{ $info_admin[0]->admin_name }}</td>
                                </tr>
                                <tr>
                                    <th class="w-25">Email</th>
                                    <td>{{ $info_admin[0]->admin_email }}</td>
                                </tr>
                                <tr>
                                    <th class="w-25">Phone</th>
                                    <td>{{ $info_admin[0]->admin_phone }}</td>
                                </tr>
                                <tr>
                                    <th class="w-25">Password</th>
                                    {{-- <td>{{ $info_admin[0]->admin_password }}</td> --}}
                                    <td>{{ str_repeat('*', strlen($info_admin[0]->admin_password)) }}</td>
                                    
                                </tr>
                                
                            
                        </table>
                    </div>

                </div>
            </div>
            @yield('admin_content')
        </section>
    </section>
</body>

</html>