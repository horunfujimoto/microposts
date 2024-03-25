<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Micropost;

class FavoritesController extends Controller
{
    /**
     * お気に入り登録
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 特定の投稿をお気に入りする
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * お気に入り解除
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 特定の投稿をお気に入り解除する
        \Auth::user()->unfavorite($id);
        
        // 前のURLへリダイレクトさせる
        return back();
    }
}