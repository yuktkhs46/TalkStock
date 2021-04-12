@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-left">新規投稿</h2>
                <form  method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form>
                        <div class="form-group">
                            <label class="control-label">タイトル</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">カテゴリー</label>
                            <select class="form-control">
                                <option>選択肢1</option>
                                <option>選択肢2</option>
                                <option>選択肢3</option>
                                <option>選択肢4</option>
                                <option>選択肢5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">それはいつの話？</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">どこで？（場所）</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">どんな内容？（起承転・フリ・情報...etc）</label>
                            <textarea class="form-control" name="comment" rows="15"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">最終的言いたいこと（結末・オチ・感じたこと...etc）</label>
                            <textarea class="form-control" name="comment" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">このメモを公開しますか？（とっておきのエピソードをみんなに教えてあげよう！）</label>
                            <div class="radio">
                                <label><input type="radio" name="radio">はい</label>
                                <label><input type="radio" name="radio">いいえ</label>
                            </div>
                        </div>
                        
                    
                        <input type="submit" class="btn btn-primary" value="登録">
                    </form>
                    {{ csrf_field() }}
                    
                    
                
                </form>
            </div>
        </div>
    </div>
@endsection

@endsection
