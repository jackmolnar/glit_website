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
            <div class="col-md-8">
                <ul>
                    @foreach($programs as $program)
                        <li>{!! link_to_action('ConsumerInfoController@show', $program, str_slug($program)) !!} </li>
                    @endforeach
                </ul>
                <hr/>
                <h3>{!! link_to_asset('linked_docs/2015-2016_GLIT_catalog.pdf', 'Download a PDF of our School Catalog.') !!}</h3>
                <h3>{!! link_to_asset('linked_docs/2015-2016_GLIT_catalog.pdf', 'Download a PDF of our Consumer Information Guide.') !!}</h3>
            </div>
            <div class="col-md-4" >
                <div class="req_info_form" >
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