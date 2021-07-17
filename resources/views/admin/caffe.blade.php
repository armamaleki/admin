@extends('master.admin')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="col-lg-12">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">شماره</th>
                <th scope="col">تایتل</th>
                <th scope="col">نام</th>
                <th scope="col">ادرس</th>
                <th scope="col">وضعیت</th>
                <th scope="col">پاک کردن</th>
                <th scope="col">ادیت کردن</th>
            </tr>
            </thead>
            <tbody>
            @foreach($caffes as $caffe)
                <tr>
                    <th scope="row">{{$caffe->count()}}</th>
                    <td>{{$caffe->title}}</td>
                    <td>{{$caffe->name}}</td>
                    <td>{{$caffe->address}}</td>
                    <td>
                        @if($caffe->status == 1)
                            <button type="button" class="btn btn-outline-light">فعال</button>

                        @else
                            <button type="button" class="btn btn-outline-dark">غیر فعال</button>

                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-danger">پاک کردن</button>

                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-success">ادیت کردن</button>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
