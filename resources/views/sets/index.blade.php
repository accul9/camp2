<nav class="bg-slate-500">ここは暫定のナビゲーター</nav>
<main class="">
    <h1 class="">今日はどんなセットの気分？</h1>
    <div>
        @foreach ($sets as $set)
            <p>{{ $set->set_name }}</p>
            <div><a href="{{ route('sets.show', $set) }}"><img src="{{ asset($set->set_image) }}" alt="Set Image"></a>
            </div>
        @endforeach
    </div>
</main>
