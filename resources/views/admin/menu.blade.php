@extends('master.admin')


@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="col">
        <form action="{{route('menu.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">نام منو</label>
                <input type="text" class="form-control" id=""  placeholder="کافه جنگل">
                <small id="emailHelp" class="form-text text-muted">نام منو د رقسمت بالایی منو قرار میگیرد</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">محصولات</label>
                <input type="text" class="form-control" id=""
                       placeholder="چای ساده">
                <small id="emailHelp" class="form-text text-muted">نام محصول مورد نظر خود را وارد کنید</small>
            </div>
            <div class="form-group">
                <label for="">توضیحات مربوط به هر محصول</label>
                <textarea name="product_discretion" class="form-control" id="" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="">تصویر محصولات</label>
                <input type="file" name="product_pic" class="form-control-file" id="">
            </div>
            <div class="form-group">
                <label for="">یک گراند منو</label>
                <input type="file" name="image" class="form-control-file" id="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">قیمت</label>
                <input type="text" class="form-control" id="" aria-describedby="emailHelp"
                       placeholder="12.000">
                <small id="emailHelp" class="form-text text-muted">قیمت هر محصول را وارد کنید</small>
            </div>
            <div class="form-gro">
                <input class="btn btn-outline-success btn-block" type="submit" value="ارسال منو">
            </div>
        </form>
    </div>
{{-------------------------add menu-----------------------}}
    <div class="col">

    </div>
{{--_-------------------show menu--------------------}}
@endsection
