@extends('layouts.common')

@section('title','BOOKS - EDIT')
    
@section('global-nav')

@section('content')
<div class="main-contents">
    <form action="/books/edit" method="POST">
        @csrf
        <table class="table table-bordered">
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr><th>タイトル:</th><td><input class="form-control" type="text" name="title" value="{{ $form->title }}"></td></tr>
            <tr><th>著者:</th><td><input class="form-control" type="text" name="author" value="{{ $form->author }}"></td></tr>
            <tr><th>出版社:</th><td><input class="form-control" type="text" name="publisher" value="{{ $form->publisher }}"></td></tr>
            <tr><th>ISBN:</th><td><input class="form-control" type="text" name="isbn" value="{{ $form->isbn }}"></td></tr>
            <tr><th>詳細:</th><td><input class="form-control" type="text" name="detail" value="{{ $form->detail }}"></td></tr>
            <tr><th>冊数:</th><td><input class="form-control" type="text" name="num" value="{{ $form->num }}"></td></tr>
        </table>
        <input class="btn btn-primary" type="submit" value="更新">
    </form>
</div>
<div class="pagenation">

</div>
@endsection

@section('footer')