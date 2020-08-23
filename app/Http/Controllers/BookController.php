<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    // 一覧表示
    public function index(Request $request) {
        $books = DB::table('books')->paginate(10);
        return view('book.book', ['books' => $books]);
    }

    public function post(Request $request) {
        $books = DB::table('books')->get();
        return view('book.book', ['books' => $books]);
    }

    // 詳細画面への遷移
    public function show(Request $request) {
        $form = DB::table('books')->where('id', $request->id)->first();        
        return view('book.show', ['form' => $form]);
    }

    // 追加画面への遷移
    public function add() {
        return view('book.add');
    }

    // 追加処理
    public function create(Request $request) {
        $param = [
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'num' => $request->num,
        ];
        
        //DB::insert('insert into books (title,author,publisher,num) values (:title, :author, :publisher, 1)', $param);
        DB::table('books')->insert($param);
        return redirect('/books');
    }

    // 編集画面への遷移
    public function edit(Request $request) {
        //$param = ['id' => $request->id];
        //$book = DB::select('select * from books where id = :id', $param);
        $book = DB::table('books')->where('id', $request->id)->first();
        return view('book.edit', ['form' => $book]);
    }

    // 更新処理
    public function update(Request $request) {
        $param = [
            'id' => $request->id,
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'isbn' => $request->isbn,
            'detail' => $request->detail,
            'num' => $request->num,
        ];
        //DB::update('update books set title = :title, author = :author, publisher = :publisher, isbn = :isbn, detail = :detail, num = :num where id = :id', $param);
        DB::table('books')->where('id', $request->id)->update($param);
        return redirect('/books');
    }

    // 削除画面への遷移
    public function delete(Request $request) {        
        //$param = ['id' => $request->id];
        //$book = DB::select('select * from books where id = :id', $param);
        $book = DB::table('books')->where('id', $request->id)->first();
        return view('book.del', ['form' => $book]);
    }

    // 消去処理
    public function remove(Request $request) {
        //$param = ['id' => $request->id];
        //DB::delete('delete from books where id = :id', $param);
        DB::table('books')->where('id', $request->id)->delete();
        return redirect('/books');
    }
}
