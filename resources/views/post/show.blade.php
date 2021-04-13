@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>title</h1>
        </div>
        <div class="card-body">
            <p class="text-muted">それはいつのはなし？</p>
            <h5>{{ $post->time}}</h5>
            <p class="text-muted">どこで？（場所）</p>
            <h5>{{ $post->place}}</h5>
            <p class="text-muted">どんな内容？（起承転、フリ、情報）</hp>
            <h5>{{ $post->content}}</h5>
            <p class="text-muted">最終的に言いたいこと（結末、オチ、感じたことなど）</p>
            <h5>{{ $post->punchline}}</h5>
        </div>
        <div class="card-body">
            <div class="user-image">
                <img src="" alt="">
            </div>
            <div class="d-flex flex-column">
                <small class="text-muted"></small>
                <small class="text-muted">{{ $post->created_at}}</small>
            </div>  
        </div>
    </div>
      
</div>
@endsection
