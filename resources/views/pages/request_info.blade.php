@extends('templates/default')

@section('main_content')

    <div class="program_page generic_page request_info_page">

        <div class="program_head">
            <div class="container">
                <div class="col-md-12 title">
                    <h1>Request More Information</h1>
                    <div class="subtext">
                        We would be glad to send you additional information about the school or any of our programs. Please complete all sections of this form and click submit.
                    </div>
                </div>
            </div>
        </div>

        <div class="container request_info_page">
            <div class="col-md-8 col-md-offset-2">
                <div class="well">
                    {!! Form::open(['id' => 'contact_form', 'action' => 'FormController@index', 'class' => 'form-inline']) !!}
                            {!! Form::text('first_name', null, ['class' => 'form-control half-size', 'placeholder' => 'First Name']) !!}
                            {!! Form::text('last_name', null, ['class' => 'form-control half-size', 'placeholder' => 'Last Name']) !!}
                            {!! Form::text('phone', null, ['class' => 'form-control half-size', 'placeholder' => 'Phone Number']) !!}
                            {!! Form::text('email', null, ['class' => 'form-control half-size', 'placeholder' => 'Email']) !!}
                            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                            {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) !!}
                            {!! Form::text('state', null, ['class' => 'form-control half-size', 'placeholder' => 'State']) !!}
                            {!! Form::text('zip', null, ['class' => 'form-control half-size', 'placeholder' => 'Zip Code']) !!}
                            May we text message you?
                            <select style="float:left;" class="form-control half_size" name="text_message_yes"><option value="Yes">Yes</option><option value="No">No</option></select>
                            {!! Form::textarea('visitor_message', null, ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => 5] ) !!}
                            {!! Form::label('program', 'Program of Interest') !!}<br/>
                                <ul class="list-group checked-list-box">
                                    @foreach($programs as $program)
                                        <li class="list-group-item">{{ $program }}</li>
                                    @endforeach
                                </ul>
                                {!! Form::hidden('form_type', 'request_info') !!}
                                {!! Form::submit('Get Info', ['class' => 'btn btn-success', 'id' => 'form_button']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="errors"></div>
            </div>
        </div>

    </div>
@endsection