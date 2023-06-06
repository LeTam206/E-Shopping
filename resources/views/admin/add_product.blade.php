@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                THÊM SẢN PHẨM
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form">
                        <div class="form-group">
                            <label for="productName">Tên Sản Phẩm</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="descriptionProduct">Mô Tả Sản Phẩm</label>
                            <textarea style="resize: none" rows="5" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hãng Sản Xuất</label>
                            <select class="form-control input-sm m-bot15">
                                <option>Apple</option>
                                <option>Samsung</option>
                                <option>Oppo</option>
                                <option>Nokia</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection
