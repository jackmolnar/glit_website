@extends('templates/default')

@section('main_content')

    <div class="program_page">

        <div class="program_head">
            <div class="container">
                <div class="col-md-12 title">
                    <h1>Programs of Study</h1>
                    <div class="length">
                        Great Lakes offers many programs in the Allied Health fields that very in length and degree earned upon completion.
                    </div>
                </div>
            </div>
        </div>

        <div class="container program_body">
            <div class="col-md-8">
                <div class="btn-group-vertical" role="group">
                    @foreach($programs as $program)
                        {!! link_to_action('ProgramsController@show', $program->name, str_slug($program->name, "-"), ['class' => 'btn btn-default']) !!}
                    @endforeach
                </div>
            </div>
            <div class="col-md-4" >
                <div class="req_info_form" data-spy="affix" data-offset-top="350"  data-offset-bottom="380">
                    <div class="req_info_form_head">
                        Ready to Start<br/>Your Education?
                    </div>
                    <div class="req_info_form_body">
                        @include('includes/req_info_form')
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection