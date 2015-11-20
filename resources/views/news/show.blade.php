@extends('templates/default')

@section('main_content')

<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "28b25345-4656-48b9-bf62-bd150500fc41", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<div class="news">
    <div class="title_bar">
        <div class="container">
            <h1>{!! $newsItem->title !!}</h1>
            <p>Posted On {!! $newsItem->news_date !!}</p>
        </div>
    </div>
    <div class="share_bar">
        <div class="container">
            <span class='st_facebook_vcount' displayText='Facebook'></span>
            <span class='st_twitter_vcount' displayText='Tweet'></span>
            <span class='st_linkedin_vcount' displayText='LinkedIn'></span>
            <span class='st_pinterest_vcount' displayText='Pinterest'></span>
            <span class='st_googleplus_vcount' displayText='Google +'></span>
        </div>
    </div>
    <div class="container">
        <div class="col-md-8 body">
            <div class="image">
                <img src="{!! asset('/images/news_images/'.$newsItem->image) !!}"  />
            </div>
            <div class="text">
                {!! $newsItem->content !!}
            </div>
        </div>
        <div class="col-md-4" >
            <div class="req_info_form" data-spy="affix" data-offset-top="350">
                @include('includes/req_info_form')
            </div>
        </div>

    </div>
</div>
@endsection