<div style="max-height: 60vh; overflow-y: auto;">
    @foreach ($promptList as $prompt)
        <div class="mt-2">
            <div class="card py-0" onclick="pickPrompt(this)">
                <div class="card-body card-prompt">
                    <h4 class="card-title">{{$prompt->title}}</h4>
                    <p class="card-text">{{$prompt->content}}</p>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $promptList->onEachSide(1)->links('pagination::bootstrap-4') }}
</div>