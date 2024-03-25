@if(Auth::check())
    @if(Auth::user()->is_favorite($micropost->id))
        {{-- お気に入りに追加済みの場合 --}}
        <form action="{{ route('favorites.destroy', $micropost->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-success">unfavorite</button>
        </form>
    @else
        {{-- お気に入りに追加していない場合 --}}
        <form action="{{ route('favorites.store', $micropost->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn">favorites</button>
        </form>
    @endif
@endif
