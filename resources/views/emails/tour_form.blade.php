
<b>Tour Date:</b> {{ $tour_date }}
<br/>
<br/>
<b>Alternative Date:</b> {{ $alt_date }}
<br/>
<br/>
<b>First Name:</b> {{ $first_name }}
<br/>
<br/>
<b>Last Name:</b> {{ $last_name }}
<br/>
<br/>
<b>Phone:</b> {{ $first_name }}
<br/>
<br/>
<b>Text Message?</b> {{ $text_message_yes }}
<br/>
<br/>
<b>Email:</b> {{ $email }}
<br/>
<br/>
<b>Address:</b> {{ $address }} - {{ $city }}, {{ $state }}
<br/>
<br/>
<b>Message:</b> {!! $visitor_message !!}
<br/>
<br/>
<b>Programs of Interest:</b>
<br/>
@if(isset($programs))
    @foreach($programs as $program)
        {{ $program }}<br/>
    @endforeach
@endif
