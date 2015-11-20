@extends('templates/default')

@section('main_content')

<div class="container news">
    <div class="col-md-8">
        <div class="pagination">
            {!! $news->render() !!}
        </div>
        @foreach($news as $newsItem)
            <div class="news_item">
                <div class="image">
                    @if($newsItem->image == '')
                        <img src="{!! asset('/images/news_images/default.jpg') !!}"  /> </div>
                    @else
                        <img src="{!! asset('/images/news_images/'.$newsItem->image) !!}" style="{!! $newsItem->max_size_dimension !!} {!! $newsItem->img_offset !!}" /> </div>
                    @endif
                <div class="text">
                    <h2>{!! link_to_action('NewsController@show', $newsItem->title , $newsItem->slug) !!}</h2>
                    <p class="news_date">{!! $newsItem->news_date !!}</p>
                    <p>{!! str_limit(strip_tags($newsItem->content), 200)  !!}</p>
                    <p>{!! link_to_action('NewsController@show', 'Read More >', $newsItem->slug) !!}</p>
                </div>
            </div>
        @endforeach
        <div class="pagination">
            {!! $news->render() !!}
        </div>
    </div>
    <div class="col-md-4" >
        <div class="req_info_form" data-spy="affix" data-offset-top="350" style="margin-top: 25px">
            @include('includes/req_info_form')
        </div>
    </div>

</div>
@endsection