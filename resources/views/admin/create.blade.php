@extends('layouts.app') 

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-left">カテゴリー登録</h2>
                    
                    <form method="POST" action="{{ route('admin.store')}}" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                        <div class="form-group">
                            <label class="control-label">タイトル</label>
                            <input class="form-control" type="text" name="name">
                        </div>                
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="登録">
                    </form>
            </div>
        </div>
    </div>
@endsection
