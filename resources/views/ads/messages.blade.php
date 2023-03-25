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
                    <div class="message-filter">
                        <div class="message-filter-group">
                            <select class="select">
                                <option value="">{{ __('message.all message') }}</option>
                                <option value="">{{ __('message.read message') }}</option>
                                <option value="">{{ __('message.unread message') }}</option>
                            </select>
                            {{-- <button class="message-filter-btn"><i class="fas fa-search"></i></button> --}}
                        </div>
                        {{-- <form class="message-filter-src">
                            <input type="text" placeholder="Search for Username">
                        </form> --}}
                        <ul class="message-list">
                            {{-- <li class="message-item unread">
                                <a href="message.html" class="message-link">
                                    <div class="message-img active">
                                        <img src="images/avatar/01.jpg" alt="avatar">
                                    </div>
                                    <div class="message-text">
                                        <h6>miron mahmud <span>now</span></h6>
                                        <p>How are you my best frie...</p>
                                    </div>
                                    <span class="message-count">4</span>
                                </a>
                            </li> --}}
                            @foreach ($rooms as $room)
                                <li class="message-item">
                                    <a href="#" class="message-link message_detels" id="message_detels">
                                        <div class="message-img active">
                                            <img src="{{ asset('images/avatar/03.jpg') }}" alt="avatar">
                                        </div>
                                        <input value="{{ $room->id }}" id="room_id" hidden>
                                        <input value="{{ Auth::user()->id }}" id="user_id" hidden>
                                        <div class="message-text">
                                            <h6>
                                                @if (Auth::user()->id == $room->advertiser_id)
                                                    {{ $room->user->name }}
                                                @endif {{ $room->advertiser->name }}

                                            </h6>
                                            <p><span></span>{{ $room->lastMessage->message }}</p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="message-inbox">
                        <div class="inbox-header">
                            <div class="inbox-header-profile">
                                <a class="inbox-header-img" href="#">
                                    <img src="{{ asset('images/avatar/01.jpg') }}" alt="avatar">
                                </a>
                                <div class="inbox-header-text">
                                    <h5><a href="#" id="sender_name"></a></h5>
                                    <span>active now</span>
                                </div>
                            </div>
                            <ul class="inbox-header-list">
                                <li><a href="#" title="Delete" class="fas fa-trash-alt"></a></li>
                                <li><a href="#" title="Report" class="fas fa-flag"></a></li>
                                <li><a href="#" title="Block" class="fas fa-shield-alt"></a></li>
                            </ul>
                        </div>
                        <ul class="inbox-chat-list">
                            <li class="inbox-chat-item">
                                <div class="inbox-chat-img">
                                    <img src="{{ asset('images/avatar/01.jpg') }}" alt="avatar">
                                </div>


                                <div class="inbox-chat-content">
                                    <div class="inbox-chat-text">
                                        <p id="message-receive"></p>

                                    </div>
                                    <small class="inbox-chat-time">feb 02, 3:15 AM</small>
                                </div>

                            </li>
                            <li class="inbox-chat-item my-chat">
                                <div class="inbox-chat-img">
                                    <img src="{{ asset('images/avatar/02.jpg') }}" alt="avatar">
                                </div>
                                <div class="inbox-chat-content">
                                    <div class="inbox-chat-text">
                                        <p id="message-sender"></p>
                                        {{-- <div class="inbox-chat-action">
                                            <a href="#" title="Remove" class="fas fa-trash-alt"></a>
                                            <a href="#" title="Forward" class="fas fa-forward"></a>
                                        </div> --}}
                                    </div>
                                    <small class="inbox-chat-time">5 minutes ago!</small>
                                </div>
                            </li>
                        </ul>
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
<script type="text/javascript">
    $("#message_detels").click(function() {
        var room_id = $("#room_id").val();
        var user_id = $("#user_id").val();
        $.getJSON("/message/room/" + room_id, function(jsonData) {
            var ep = '';
            console.log(jsonData[1])
            sender_name = jsonData[1];
            $.each(jsonData[0], function(i, data) {
                ep += data.message;
                user = data.sender_id;

            });
            if (user == user_id) {
                $("#message-sender").text(ep);
            } else {
                $("#message-receive").text(ep);
            }
            $("#sender_name").text(sender_name);
        });
    });
</script>

</html>
