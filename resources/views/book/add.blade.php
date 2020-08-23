@extends('layouts.common')

@section('title','BOOKS - ADD')
    
@section('global-nav')

@section('content')
<div class="main-contents">
    <form action="/books/add" method="POST">
        @csrf
        <table class="table table-bordered">
            <tr><th>タイトル:</th><td><input class="form-control" type="text" name="title"></td></tr>
            <tr><th>著者:</th><td><input class="form-control" type="text" name="author"></td></tr>
            <tr><th>出版社:</th><td><input class="form-control" type="text" name="publisher"></td></tr>
            <tr><th>冊数:</th><td><input class="form-control" type="text" name="num"></td></tr>
        </table>
        <input class="btn btn-primary" type="submit" value="登録">
    </form>
</div>
<div class="pagenation">

</div>
@endsection

@section('footer')