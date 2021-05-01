@extends('layouts.app')

@section('content')
<div class="album py-5 ">
  <div class="container">
  @foreach($posts as $post) 
  @if(Auth::user()->id == $post->user_id)
    <div class="card" style="">
        <div class="card-header d-flex justify-content-between">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->created_at }}</p>
        </div>
        <div class="card-body row d-flex justify-content-between">
            <p class="col-4">{{ optional($post->category)->name }}</p>
            <div class="col-4 operation d-flex justify-content-end">
                <p class="col-2"><i class="far fa-thumbs-up"></i>{{ $post->users()->count() }}</p>
                <a href="{{ route('post.edit', [$post->id])}}" class="pr-3"><i class="fas fa-edit"></i></a>
                <form action="{{ route('post.destroy', $post) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit">
                      <i class="fas fa-trash-alt"></i>
                  </button>
                </form>
                
            </div>
        </div>
  
     </div> 
     @endif
    @endforeach
  </div>
</div>
@endsection