@extends('layouts.app') 

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-left">新規投稿</h2>
                    
                    <form method="POST" action="{{ route('post.store')}}" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                        <div class="form-group">
                            <label class="control-label">タイトル</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label class="control-label">カテゴリー</label>
                            <select class="form-control" name="category_id">
                            
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ optional($category)->name }}</option>
                                @endforeach
                           
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">それはいつの話？</label>
                            <input class="form-control" type="text" name="time">
                        </div>
                        <div class="form-group">
                            <label class="control-label">どこで？（場所）</label>
                            <input class="form-control" type="text" name="place">
                        </div>
                        <div class="form-group">
                            <label class="control-label">どんな内容？（起承転・フリ・情報...etc）</label>
                            <textarea class="form-control" name="content" rows="15"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">最終的言いたいこと（結末・オチ・感じたこと...etc）</label>
                            <textarea class="form-control" name="punchline" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">このメモを公開しますか？（とっておきのエピソードをみんなに教えてあげよう！）</label>
                            <div class="radio" name="post_status">
                                <label><input type="radio" name="radio">はい</label>
                                <label><input type="radio" name="radio">いいえ</label>
                            </div>
                        </div>
                        
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="登録">
                    </form>
            </div>
        </div>
    </div>
@endsection
