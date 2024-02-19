@extends('website.layouts.app')
@section('title')
    {!! __('Chat') !!}
@endsection
@section('styles')
    <style>
        .chat-scrollable {
            max-height: 400px; /* Define your desired height */
            overflow-y: auto;
        }
    </style>
@endsection
@section('content')
    <section class="message-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="chat-area">
                        <!-- chatlist -->
                        <div class="chatlist">
                            <div class="modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="chat-header">
                                        <h5>{{__('All conversations')}}</h5>
                                        <i class="fa fa-caret-down"></i>
                                    </div>

                                    <div class="modal-body chat-scrollable">
                                        <!-- chat-list -->
                                        <div class="chat-lists">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="Open" role="tabpanel" aria-labelledby="Open-tab">
                                                    <!-- chat-list -->
                                                    <div class="chat-list">
                                                        @foreach($offers as $one)
                                                            <a href="{{route('chat',['offer_id'=>$one->id])}}" class="content box @if($offer && $one->id == $offer->id)selected @endif">
{{--                                                                    @dd($one->unit->user)--}}
                                                                    <h3>{{$one->unit->description}}</h3>
                                                                    @if(auth()->user()->type =='client')
                                                                        <p>{{optional(optional($one->unit)->user)->name}}</p>
                                                                        @else
                                                                        <p>{{optional(optional($one->order)->user)->name}}</p>
                                                                    @endif

                                                            </a>
                                                        @endforeach



                                                    </div>
                                                    <!-- chat-list -->
                                                </div>

                                            </div>

                                        </div>
                                        <!-- chat-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- chatlist -->

                        <!-- chatbox -->
                        <div class="chatbox">
                            <div class="modal-dialog-scrollable">
                                <div class="modal-content">
                                    @if($offer)
                                    <div class="msg-head">
                                        <span class="chat-icon"><i class="fa fa-angle-left back"></i></span>
                                        <div class="content">
                                            <div class="row head-row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="content">
                                                                <small>{{__('Cost')}}</small>
                                                                <h6>{{$offer->price}} {{__('SAR')}}</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="content">
                                                                <small>{{__('Distance to the mosque')}}</small>
                                                                <h6> {{(int) $offer->unit->distance}} {{__('Meters')}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 btns">
                                                    @if($offer->order)
                                                    <a  href="{{route('orders.show',$offer->order->id)}}" class="btn btn-default" >{{__('All details')}}</a>
                                                    @endif
                                                    @if($offer && $offer->status == \App\Models\Offer::NEW_OFFER)

                                                    <a href="{{route('orders.accept',$offer->id)}}" class="btn btn-mabet">{{__('Accept offer')}}</a>
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="modal-body">
                                        <div class="msg-body">
                                            <ul id="messages-ul">
                                                @if($offer)
                                                <li>
                                                    <div class="alert alert-success text-center mt-5 mb-4">~ بداية المحادثة بينك وبين مالك الوحدة السكنية ~</div>
                                                </li>
                                                    @foreach($offer->messages as $message)
                                                        <li class="@if($message->sender_id == auth()->id()) repaly @else sender @endif">
                                                            <p>{{$message->text}}</p>
                                                            <span class="time">{{$message->created_at->format('h:i a')}}</span>
                                                        </li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </div>
                                    </div>
                                    @if($offer && $offer->status == \App\Models\Offer::NEW_OFFER)
                                        <div class="send-box">
                                            <form id="chat-message">
                                                <input type="hidden" id="offer_id" name="offer_id" value="{{$offer->id}}">
                                                <input type="text" id="text" name="text" class="form-control" aria-label="message…" placeholder="اكتب رسالتك...">

                                                <button id="submitMessage" type="button"><img src="asset/images/send-2.png" class="img-fluid"></button>
                                            </form>

                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- chatbox -->

                </div>
            </div>
        </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.3/jquery.scrollTo.min.js"></script>

    @if($offer)

    <script>
        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;
        var pusher = new Pusher('bbc610262f3ce7937b30', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('{{$offer->id}}');
        channel.bind('chat', function(data) {
            // console.log(data);
            var senderClass = '';
            if(data.sender_id == {{auth()->id()}}){
                senderClass = 'repaly';
            }else{
                senderClass = 'sender';
            }
            var message = '<li class="'+senderClass+'">'
                +'<p>'+data.text+'</p>'
                +'<span class="time">'+data.time+'</span>'
                +'</li>';

            $('#messages-ul').append(message);
            $('#text').val('');
            $('.modal-body').scrollTo('100%');

        });
    </script>
    <script>
        jQuery(document).ready(function() {
            $(".chat-list a").click(function() {
                $(".chatbox").addClass("showbox");
                return false;
            });

            $(".chat-icon").click(function() {
                $(".chatbox").removeClass("showbox");
            });
        });


        $(function() {
            var ChatDiv = $('.chatbox .modal-body');
            var height = ChatDiv[0].scrollHeight;
            ChatDiv.scrollTop(height);
        });
    </script>
    <script>
        // Listen for keypress event on the text input field
        $('#text').keypress(function(event) {
            // Check if the Enter key (key code 13) is pressed
            if (event.which === 13) {
                // Prevent the default form submission behavior
                event.preventDefault();

                // Perform your AJAX request here
                sendMessage();
            }
        });

        // Listen for click event on the submit button
        $('#submitMessage').click(function() {
            // Perform your AJAX request here
            sendMessage();
        });

        document.getElementById('submitMessage').addEventListener('click', function() {
            sendMessage();
        });

        function sendMessage() {
            var formData = new FormData(document.getElementById('chat-message'));

            // Make AJAX request
            $.ajax({
                url: "{{ route('chat.message') }}", // Replace 'route.name' with the actual route name
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Handle success response
                    // console.log(response);
                    //action here
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    $('#response').html('Error: ' + xhr.status);
                }
            });
        }
    </script>

    @endif

@endsection
