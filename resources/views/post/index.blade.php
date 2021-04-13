@extends('layouts.app')

@section('content')
<div class="album py-5 ">
  <div class="container">
  @foreach($posts as $post) 
    <div class="card" style="">
        <div class="card-header d-flex justify-content-between">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->created_at }}</p>
        </div>
        <div class="card-body row d-flex justify-content-between">
            <p class="col-4">カテゴリー</p>
            <p class="col-2">❤️</p>
        </div>
        <div class="card-body row d-flex justify-content-between">
            <p col="col-8">＃タグ</p>
            <div class="col-4 operation d-flex justify-content-end">
                <a href="" class="pr-3"><i class="fas fa-edit"></i></a>
                <a href=""><i class="fas fa-trash-alt"></i></a>
            </div>
        </div>
　　 </div> 
    @endforeach
  </div>
</div>
@endsection