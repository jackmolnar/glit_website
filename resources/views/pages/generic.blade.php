@extends('templates/default')

@section('main_content')

    <div class="program_page generic_page">

        <div class="program_head">
            <div class="container">
                <div class="col-md-5 title">
                    <h1>{!! $page_data->title !!}</h1>
                    @if($page_data->sub_text != '')
                        <div class="subtext">
                            {!! $page_data->sub_text !!}
                        </div>
                    @endif
                </div>
                <div class="col-md-7 image">
                    @if($page_data->primary_img != '')
                        <img src="{!! asset('/images/'.$page_data->primary_img) !!}" alt="{!! $page_data->primary_img_alt !!}" />
                    @endif
                </div>
            </div>
        </div>

        <div class="container program_body">
            <div class="col-md-8">
                {!! $page_data->primary_text !!}
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