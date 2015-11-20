@extends('templates/default')

@section('main_content')

    <div class="program_page">

        <div class="program_head">
            <div class="container">
                <div class="col-md-5 title">
                    <h1 {!! (strlen($program_data->title) > 18 ? "style='font-size: 36px'" : '') !!}>{!! $program_data->title !!}</h1>
                    <div class="length" {!! (strlen($program_data->title) > 18 ? "style='font-size: 18px'" : '') !!}>
                        {!! $program_data->length !!} - {!! $program_data->degree !!}
                    </div>
                </div>
                <div class="col-md-7 image">
                    <img src="{!! asset('/images/program_images/heads/'.$program_data->primary_img) !!}" alt="{!! $program_data->primary_img_alt !!}" />
                </div>
            </div>
        </div>

        <div class="container program_body">
            <div class="col-md-8">
                {!! $program_data->primary_text !!}

                @if($program_data->vtour != '')
                    <hr>
                    <h2>Virtual Tour Video</h2>
                    <p>{!! $program_data->vtour !!}</p>
                @endif

                @if(count($testimonial_data))
                    <hr>
                    <h2>Testimonials</h2>
                    <div id="carousel-example-generic" class="carousel slide testimonials" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                          <!-- Wrapper for slides -->
                          @foreach($testimonial_data as $key => $testimonial)
                            <div class="item
                                @if($key == 0)
                                    active
                                @endif
                            ">
                                <div class="image">
                                    <img src="{!! asset('/images/program_images/testimonials/'.$testimonial->image) !!}" style="{!! $testimonial->max_size_dimension !!} {!! $testimonial->img_offset !!}"/>
                                </div>
                                <div class="text">
                                    <h3>{!! $testimonial->name !!} - {!! $testimonial->position_title !!}</h3>
                                    <h4>{!! $testimonial->company !!}</h4>
                                    <p>{!! $testimonial->testimonial !!}</p>
                                </div>
                            </div>
                          @endforeach
                    </div>


                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                @endif
            </div>
            <div class="col-md-4 req_info_column" >
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