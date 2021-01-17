@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">通知</div>

        <div class="card-body">
            <ul class="list-group">
          @foreach($notifications as $notification)
                <li class="list-group-item">
                  @if($notification->type==='Forum\Notifications\NewReplyAdded')
                      新しい返信がディスカッションに追加されました
                      <strong>{{$notification->data['discussion']['title']}}</strong>
                      <a href="{{route('discussions.show',$notification->data['discussion']['slug'])}}" class="btn float-right btn-sm btn-info">
                      　　詳細を見る
                      </a>
                  @endif

                   @if($notification->type==='Forum\Notifications\NReplyMarkedAsBestReply')
                      your reply to the discussion <strong>{{$notification->data['discussion']['title']}}</strong>was marked as best reoly.

                                            <a href="{{route('discussions.show',$notification->data['discussion']['slug'])}}" class="btn float-right btn-sm btn-info">
                      　　詳細を見る
                      </a>
                   @endif
                </li>
                  @endforeach
            </ul>
        </div>
    </div>

@endsection
