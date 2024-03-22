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
        // 認証済みユーザが、自分以外の投稿をお気に入り登録する
        $micropost = Micropost::findOrFail($micropostId);
        
        if ($micropost->user_id !== \Auth::id()) {
            \Auth::user()->favorite($id);
        }
        
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * お気に入り解除
     */
    public function destroy($id)
    {
        // 認証済みユーザが、自分以外の投稿のお気に入りを解除する
        $micropost = Micropost::findOrFail($micropostId);
        
        if ($micropost->user_id !== \Auth::id()) {
            \Auth::user()->unfavorite($id);
        }
        
        // 前のURLへリダイレクトさせる
        return back();
    }
}