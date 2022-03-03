<div class="free_form">
    <form action="{{ url('/freesearch') }}" method="POST">
        {{ Form::token() }}
        <div class="form-group">
            <label for="search_word">フリーワード検索</label>
            <input type="text" class="form-control" name="where">
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="Radios" value="lang" checked>
            <label class="form-check-label">
                言語やフレームワークなどから検索
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="Radios" value="overview">
            <label class="form-check-label">
                会社概要から検索
            </label>
        </div>
        <button type="submit" class="btn btn--yellow btn--cubic"> 検索 </button>
    </form>
</div>
