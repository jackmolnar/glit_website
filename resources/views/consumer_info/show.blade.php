@extends('templates/default')

@section('main_content')

    <div class="program_page generic_page consumer_info">

        <div class="program_head">
            <div class="container">
                <div class="col-md-12 title">
                    <h1>Consumer Information</h1>
                    <div class="subtext">
                        Here you can find links to consumer information specific to each program, along with the schools catalog and Consumer Information Guide.
                    </div>
                </div>
            </div>
        </div>

        <div class="container program_body">
            <div class="row">
                {!! link_to_action('ConsumerInfoController@index', "<= Back", null) !!}
            </div>
            <div class="col-md-10 col-md-offset-1">
                @include("consumer_info.templates.{$template}")
            </div>
        </div>

    </div>

@endsection