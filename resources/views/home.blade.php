@extends('layouts.app')

@section('content')

<div class="album py-5 ">
  <div class="container">
    <div class="row ">
      @foreach($posts as $post)
      <div class="col-md-4 d-flex">
      <div class="card  mb-4 shadow-sm d-inline-flex" style="width: 20rem;">
        <h5 class="card-header">{{ $post->title}}</h5>
        <div class="card-body">
          <h6 class="card-title">カテゴリー</h6>
          <h6 class="card-title">#tag</h6>
          <div class="d-flex justify-content-between align-items-center " >
                <div class="image-group ">
                  <img src="" alt="" height="10px" width=10px>
                </div>
                <div class="d-flex flex-column">
                  <small class="text-muted">ユーザーネーム</small>
                  <small class="text-muted">{{ $post->created_at }}</small>
                </div>                
              </div>
        </div>
      </div>
      </div> 
      @endforeach 
    </div>    
  </div>
</div>
@endsection
