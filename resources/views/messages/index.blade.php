@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-3">
            <h3>online users</h3>
            <hr>
            <h5 id="no-online-users">No Online Users</h5>
            <ul class="list-group" id="online-users">
               
              </ul>
        </div>
        <div class="col-md-9 d-flex flex-column" style="height: 80vh">
            <div class="h-100 bg-white mb-4 p-5" id="chat" style="overflow-y: scroll">

               @foreach ($messages as $message)
                    <div class="mt-4 w-50 text-white p-4 rounded {{ Auth::id()==$message->user_id ? 'float-right bg-primary':'float-left bg-success' }}">
                        <span>{{ $message->user->name }}</span>
                        <p>{{ $message->body }}</p>
                    </div>
                    <div class="clearfix"></div>
                @endforeach  

            </div>

            <form action="" class="d-flex">
                <input type="text" name="" id="chat-text" data-url="{{ route('messages.store') }}" class="form-control" style="margin-right: 10px">
                <button type="submit" class="btn btn-primary">Send</button>
            </form>

        </div>
    </div>
</div>
    
@endsection