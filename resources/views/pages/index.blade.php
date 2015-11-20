@extends('templates.default')
@section('main_content')

    <div class="hero">
        <div class="caption">
            <h1>Begin a rewarding and in-demand career in the healthcare industry.</h1>
            <p>
                Great Lakes offers programs in medical and allied health fields. All programs are short in length and only feature classes that pertain to your program of choice.
            </p>
            <ul class="caption_buttons">
                <li>{!! link_to_action('ProgramsController@index', 'Explore Our Programs') !!}</li>
                <li>{!! link_to_action('PagesController@show', 'Find Out How To Enroll', 'admissions') !!}</li>
                <li>{!! link_to_action('PagesController@show', 'Financial Aid Information', 'financial-aid') !!}</li>
            </ul>
        </div>
        <div class="video">
            <video autoplay loop class="background_video">
                <source src="{!! asset('/images/youtube_sd480.mp4') !!}" type="video/mp4">
            </video>
        </div>
    </div>

    <div id="carousel" class="carousel slide carousel-fade index_carousel" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item" style="background: url(../resources/assets/images/slides/slide1.jpg)" >
            <div class="text_box">
                <h2>Begin an in-demand and rewarding career in the healthcare industry.</h2>
                <p>
                    Great Lakes offers programs in medical and allied health fields. All programs are short in length and only feature classes that pertain to your program of choice.
                </p>
            </div>
        </div>
        <div class="item" style="background: url(../resources/assets/images/slides/slide2.jpg)">
            <div class="text_box">
                <h2>Learn from experienced instructors who have spent years in the field.</h2>
                <p>
                    Our instructors are well-trained, professional, and approachable individuals, with years of experience in the fields they teach. Learn from those who have done the job themselves.
                </p>
            </div>
        </div>
        <div class="item" style="background: url(../resources/assets/images/slides/slide3.jpg)">
            <div class="text_box">
                <h2>Get hands-on training in labs that simulate real-world settings.</h2>
                <p>
                    We equip our classrooms and labs with everything students need to get a great hands-on education. Gain practical experience using the equipment that is used in the field.
                </p>
            </div>
        </div>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
    </div>

    <div class="home_page">
        <div class="row second_row">
            <div class="container">
                <div class="col-md-4 program_column">
                    <h2>Welcome to Great Lakes</h2>
                    <p>Great Lakes Institute of Technology is an accredited health care and medical career training school and a community college alternative that is located in Erie, Pennsylvania and services residents in Pennsylvania, New York, and Ohio. Programs are offered in the allied health, dental, pharmacy, surgical, ultrasound, veterinary, and massage fields.</p>
                    <p>Great Lakes Institute of Technology is dedicated to creating a student-centered environment by empowering individuals with the knowledge, practical skills, and experience necessary to reach career and life goals. The school is committed to providing quality education and training standards through a program of continuous assessment and improvement.</p>
                </div>
                <div class="col-md-4 program_column">
                    <h2>Programs We Offer</h2>
                    <ul>
                      @foreach($programs as $program)
                         <li>{!! link_to_action('ProgramsController@show', $program, str_slug($program, "-")) !!}</li>
                      @endforeach
                    </ul>
                </div>
                <div class="col-md-4 req_info_column">
                    @include('includes/req_info_form')
                </div>
            </div>
        </div>
        <div class="row third_row">
            <div class="container">
                <div class="col-md-6 testimonials">
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
                </div>
                </div>
                <div class="col-md-6 recent_news">
                    <h2>Recent News</h2>
                    <div id="recent_news_carousel" class="carousel slide testimonials" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                          <!-- Wrapper for slides -->
                          @foreach($recent_news as $key => $newsItem)
                            <div class="item
                                @if($key == 0)
                                    active
                                @endif
                            ">
                                <div class="news_item">
                                    <div class="image">
                                        @if($newsItem->image == '')
                                            <img src="{!! asset('/images/news_images/default.jpg') !!}"  /> </div>
                                        @else
                                            <img src="{!! asset('/images/news_images/'.$newsItem->image) !!}" style="{!! $newsItem->max_size_dimension !!} {!! $newsItem->img_offset !!}" /> </div>
                                        @endif
                                    <div class="text">
                                        <h3>{!! link_to_action('NewsController@show', $newsItem->title , $newsItem->slug) !!}</h3>
                                        <h4>{!! $newsItem->news_date !!}</h4>
                                        <p>{!! str_limit(strip_tags($newsItem->content), 200)  !!}</p>
                                        <p>{!! link_to_action('NewsController@show', 'Read More >', $newsItem->slug) !!}</p>
                                    </div>
                                </div>
                            </div>

                          @endforeach
                            <!-- Controls -->
                            <a class="left carousel-control" href="#recent_news_carousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#recent_news_carousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.carousel').carousel();
    </script>
@endsection