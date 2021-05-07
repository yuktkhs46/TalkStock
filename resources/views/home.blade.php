@extends('layouts.app')

@section('content')
<!--　▼ ジャンボトロン　 -->
<div class="jumbotron">
      <div class="container" style="color:#fff;">
        <h1>とっておきのエピソードをみんなに</h1>
        <p>自分が見聞きした体験・実話・友達から聞いた面白い話...</p>
        <p>会話のネタをいつでも引き出せるようにストックしておこう！</p>
      </div>
    </div>
<!--　▲ ジャンボトロン　 -->
@if(!is_null($posts))
<div class="album py-5 ">
  <div class="container">
    <div class="row ">
      @foreach($posts as $post)
      <div class="col-md-4 d-flex">
      <div class="card  mb-4 shadow-sm d-inline-flex" style="width: 20rem;">
      <a href="{{ route('post.show', $post->id)}}" style="text-decoration: none; color:#000;">
      <h5 class="card-header">{{ $post->title}}</h5>
        <div class="card-body">
          <h6 class="card-title">{{ optional($post->category)->name }}</h6>
          <!-- <h6 class="card-title">#tag</h6> -->
          <div class="d-flex justify-content-between align-items-center " >
                <div class="user-info">
                      <div class="image-group ">
                        <img src="" alt="" height="10px" width=10px>
                      </div>
                      <div class="d-flex">
                        <img src="{{ optional($post->user)->profile_image }}" alt="" width="45px" height="45px" class="mr-2">
                        <div class="d-flex flex-column">
                          <small class="text-muted">{{ optional($post->user)->name }}</small>
                          <small class="text-muted">{{ $post->created_at}}</small>
                        </div>
                      </div>  
                </div>
                <div class="likes">
                @if($post->users()->where('user_id', Auth::id())->exists())
                    <form action="{{ route('unfavorites', $post) }}" method="POST">
                    @csrf
                      <input type="submit" value="&#xf164;いいね取り消す" class="">{{ $post->users()->count() }}
                    </form>
                @else
                    <form action="{{ route('favorites', $post) }}" method="POST">
                    @csrf
                      <input type="submit" value="&#xf164;" class="far fa-thumbs-up">{{ $post->users()->count() }}
                    </form>
                @endif
                </div>
                        
              </div>
        </div>
      </a>
      </div>
      </div> 
      @endforeach 
    </div>    
  </div>
</div>
@endif

@endsection
