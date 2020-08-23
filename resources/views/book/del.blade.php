@extends('layouts.common')

@section('title','BOOKS - DELETE')
    
@section('global-nav')

@section('content')
<div class="main-contents">
    <form action="/books/del" method="POST">
        @csrf
        <table class="table table-bordered">
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr><th>タイトル:</th><td>{{ $form->title }}</td></tr>
            <tr><th>著者:</th><td>{{ $form->author }}</td></tr>
            <tr><th>出版社:</th><td>{{ $form->publisher }}</td></tr>
            <tr><th>ISBN:</th><td>{{ $form->isbn }}</td></tr>
            <tr><th>詳細:</th><td>{{ $form->detail }}</td></tr>
            <tr><th>冊数:</th><td>{{ $form->num }}</td></tr>
        </table>
        <input class="btn btn-primary" type="submit" value="削除">
    </form>
</div>
<div class="pagenation">

</div>
@endsection

@section('footer')