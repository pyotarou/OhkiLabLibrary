<div class="list">
    <form method="POST">
        <button type="button" class="btn btn-secondary">絞り込み</button>
        <button type="button" class="btn btn-secondary">並べ替え</button>
    </form>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">著者</th>
                    <th scope="col">貸出状況</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                <tr scope="row">
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>aaa</td>
                </tr>        
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="pagenation">

</div>