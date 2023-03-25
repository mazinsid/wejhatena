<!DOCTYPE html>
<html lang="en" dir="rtl">

@include('layout.head')

<body>
    <!--=====================================
                    HEADER PART START
        =======================================-->
    @include('layout.header')
    <!--=====================================
                    HEADER PART END
        =======================================-->


    <!--=====================================
                    SIDEBAR PART START
        =======================================-->

    <!--=====================================
                    SIDEBAR PART END
        =======================================-->


    <!--=====================================
                    MESSAGE PART START
        =======================================-->
    <section class="message-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-4">

                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="message-inbox">
                        <div class="inbox-header">
                            <div class="inbox-header-profile">
                                <a class="inbox-header-img" href="#">
                                    <img src="{{ asset('images/avatar/01.jpg') }}" alt="avatar">
                                </a>
                                <div class="inbox-header-text">
                                    <h5><a href="#">{{ $room->advertiser->name }}</a></h5>
                                    {{-- <span>active now</span> --}}
                                </div>
                            </div>
                            <ul class="inbox-header-list">
                                <li><a href="#" title="Delete" class="fas fa-trash-alt"></a></li>
                                <li><a href="#" title="Report" class="fas fa-flag"></a></li>
                                <li><a href="#" title="Block" class="fas fa-shield-alt"></a></li>
                            </ul>
                        </div>
                        <ul class="inbox-chat-list">
                            @foreach ($messages as $message)
                                @if (Auth::user()->id != $message->sender_id)
                                    <li class="inbox-chat-item">
                                        <div class="inbox-chat-img">
                                            <img src="{{ asset('images/avatar/01.jpg') }}" alt="avatar">
                                        </div>


                                        <div class="inbox-chat-content">
                                            <div class="inbox-chat-text">
                                                <p>{{ $message->message }}</p>
                                                <div class="inbox-chat-action">
                                                    <a href="#" title="Remove" class="fas fa-trash-alt"></a>
                                                    <a href="#" title="Forward" class="fas fa-forward"></a>
                                                </div>
                                            </div>
                                            <small class="inbox-chat-time">{{ $message->created_at }}</small>
                                        </div>

                                    </li>
                                @else
                                    <li class="inbox-chat-item my-chat">
                                        <div class="inbox-chat-img">
                                            <img src="{{ asset('images/avatar/02.jpg') }}" alt="avatar">
                                        </div>
                                        <div class="inbox-chat-content">
                                            <div class="inbox-chat-text">
                                                <p>{{ $message->message }}</p>
                                                {{-- <div class="inbox-chat-action">
                                            <a href="#" title="Remove" class="fas fa-trash-alt"></a>
                                            <a href="#" title="Forward" class="fas fa-forward"></a>
                                        </div> --}}
                                            </div>
                                            <small class="inbox-chat-time">{{ $message->created_at }}</small>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="inbox-chat-form">
                            <form action="{{ route('add.message') }}" method="POST">
                                @csrf
                                <input name="sender_id" value="{{ Auth::user()->id }}" hidden>
                                <input name="room_id" value="{{ $room->id }}" hidden>
                                <textarea placeholder="Type a Message" name="message" id="chat-emoji"></textarea>
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    MESSAGE PART END
        =======================================-->


    <!--=====================================
                    JS LINK PART START
        =======================================-->
    <!-- VENDOR -->
    @include('layout.script')
    <!--=====================================
                    JS LINK PART END
        =======================================-->
</body>

</html>
