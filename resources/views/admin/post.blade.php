@extends('master.admin')
@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-control-label" for="input-address">تایتل</label>
                    <input name="title" id="input-address" class="form-control" placeholder="تایتل" type="text">
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="input-address">تصویر</label>
                    <input name="pic" id="input-address" class="form-control" type="file">
                </div>
                <div class="form-group">
                    <label class="form-control-label">نوشته شما </label>
                    <textarea name="body" rows="4" class="form-control"
                              placeholder="برنامه نویسی یکی از پر در امد ترین شغل های دنییاست.."></textarea>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        ارسال
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0">
                    <label class="form-check-label" for="exampleRadios2">
                        پیش نویس
                    </label>
                </div>
                <div class="form-check">
                    <input type="submit" class="btn btn-outline-success" value="ارسال پست">
                </div>

            </form>
        </div>
        <div class="col-lg-6">
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">شماره</th>
                    <th scope="col">تایتل</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">پاک کردن</th>
                    <th scope="col">ادیت کردن</th>
                    <th scope="col">تصویر</th>
                    <th scope="col">نویسنده</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>
                            @if($post->status==1)
                                <button type="button" class="btn btn-outline-light">ارسال شده</button>

                            @else
                                <button type="button" class="btn btn-outline-light">پیش نویس</button>

                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">Danger</button>

                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-success">Success</button>


                        </td>
                        <td><img src="/images/{{$post->pic}}"
                                 style="border-radius: 50%;border: 1px solid #ddd;  width: 50px; height:50px;" alt="">
                        </td>
                        <td>{{$post->user->name}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
