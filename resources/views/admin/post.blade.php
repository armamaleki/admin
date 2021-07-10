@extends('master.admin')
@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="col-lg-6">
        <form action="og">
            <div class="form-group">
                <label class="form-control-label" for="input-address">تایتل</label>
                <input name="title" id="input-address" class="form-control" placeholder="تایتل" type="text">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="input-address">تصویر</label>
                <input name="pic" id="input-address" class="form-control" placeholder="تایتل" type="file">
            </div>
            <div class="form-group">
                <label class="form-control-label">About Me</label>
                <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
            </div>
        </form>
    </div>
    <div class="col-lg-6">s</div>

@endsection
