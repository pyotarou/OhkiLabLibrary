@extends('layouts.common')

@section('title','BOOKS - DETAIL')
    
@section('global-nav')

@section('content')
<div class="main-contents">
    <a href="/books/"><button type="button" class="btn btn-primary">戻る</button></a>
    <form action="###" method="POST">
        @csrf
        <table class="table table-bordered table-dark">
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr><th>タイトル:</th><td><input class="form-control" type="text" name="title" value="{{ $form->title }}"></td></tr>
            <tr><th>著者:</th><td><input class="form-control" type="text" name="author" value="{{ $form->author }}"></td></tr>
            <tr><th>出版社:</th><td><input class="form-control" type="text" name="publisher" value="{{ $form->publisher }}"></td></tr>
            <tr><th>ISBN:</th><td><input class="form-control" type="text" name="isbn" value="{{ $form->isbn }}"></td></tr>
            <tr><th>詳細:</th><td><input class="form-control" type="text" name="detail" value="{{ $form->detail }}"></td></tr>
            <tr><th>冊数:</th><td><input class="form-control" type="text" name="num" value="{{ $form->num }}"></td></tr>
        </table>
        <button class="btn btn-primary" type="submit" formaction="/books/edit">更新</button>
        <button class="btn btn-primary" type="submit" formaction="/books/del">削除</button>
    </form>
</div>
@endsection

@section('footer')