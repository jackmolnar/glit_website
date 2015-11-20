<h2> Request More Information</h2>
<div class="errors"></div>
{!! Form::open(['class' => 'form-inline', 'id' => 'contact_form', 'action' => 'FormController@index']) !!}
<table>
    <tr>
        <td>{!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}</td>
        <td>{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}</td>
        <td>{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}</td>
    </tr>
    <tr >
        <td>May we text message you?</td>
        <td><select style="float:left;" class="form-control half_size" name="text_message_yes"><option value="Yes">Yes</option><option value="No">No</option></select></td>
    </tr>
    <tr>
        <td colspan="2">{!! Form::textarea('visitor_message', null, ['class' => 'form-control', 'placeholder' => 'Message'] ) !!}</td>
    </tr>
    <tr>
        <td colspan="2" class="program_dropdown">{!! Form::label('program', 'Program of Interest') !!}<br/>
            {!! Form::select('programs[]', $programs, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
        </td>
    </tr>
    <tr>
        <td colspan="2" class="program_dropdown">{!! Form::submit('Get Info', ['class' => 'btn btn-success', 'id' => 'form_button']) !!}
        </td>
    </tr>
</table>
{!! Form::close() !!}