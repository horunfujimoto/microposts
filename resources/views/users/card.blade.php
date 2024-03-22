<div class="card border border-base-300 rounded-lg" style="width: fit-content;">
    <div class="card-body bg-base-200 text-4xl">
        <h2 class="card-title">{{ $user->name }}</h2>
    </div>
    <figure>
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
    </figure>
</div>

{{-- フォロー／アンフォローボタン --}}
@include('user_follow.follow_button')