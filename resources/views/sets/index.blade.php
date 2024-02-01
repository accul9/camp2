<nav class="bg-slate-500">ここは暫定のナビゲーター</nav>
<main>
    <h1>今日はどんなセットの気分？</h1>
    <p>テスト</p>
</main>

@foreach ($sets as $set)
    <p>{{ $set->set_name }}</p>
    <div><a href="{{ route('sets.show', $set) }}"><img src="{{ asset($set->set_image) }}" alt="Set Image"></a></div>
@endforeach
