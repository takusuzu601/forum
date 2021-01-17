@extends('layouts.app')

@section('content')


    <div class="card">
        <div class="card-header">ディスカッション追加</div>

        <div class="card-body">
            <form action="{{route('discussions.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">
                        タイトル
                    </label>
                    <input type="text" class="form-control" name="title" value="">
                </div>
                <div class="form-group">
                    <label for="content">
                    コンテンツ
                    </label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>

                </div>
                <div class="form-group">
                    <label for="channel">
                       チャンネル
                    </label>
                    <select name="channel" id="channel" class="form-control">
                       @foreach($channels as $channel)
                       <option value="{{$channel->id}}">{{$channel->name}}</option>
                       @endforeach
                    </select>
                </div>

                <button type="submit" style="color:#fff"; class="btn btn-success">ディスカッションを作成する</button>
            </form>
        </div>
    </div>

@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css"  crossorigin="anonymous" />
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.js"  crossorigin="anonymous"></script>
@endsection
