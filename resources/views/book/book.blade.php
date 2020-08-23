@extends('layouts.common')

@section('title','BOOKS')
    
@section('css')
    <link rel="stylesheet" href="{{ asset('css/book.css') }}">
@endsection

@section('global-nav')

@section('content')
<div class="main-contents">
    <form method="POST">
        <button type="button" class="btn btn-secondary">絞り込み</button>
        <button type="button" class="btn btn-secondary">並べ替え</button>
        <a href="/books/add"><button type="button" class="btn btn-primary">書籍追加</button></a>
    </form>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">著者</th>
                    <th scope="col">出版社</th>
                    <th scope="col">貸出状況</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                <tr scope="row">
                    <td>{{ $book->id }}</td>
                    <td><a href="/books/show?id={{$book->id}}">{{ $book->title }}</a></td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>aaa</td>
                </tr>        
            @endforeach
            </tbody>
        </table>
        {{ $books->links() }}
    </div>
</div>
@endsection
