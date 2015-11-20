<div class="footer">

    <div class="container">
        <div class="col-md-4">
            <p class="nap">
                Great Lakes Institute of Technology<br/>
                5100 Peach Street<br/>
                Erie, Pennsylvania 16509
            </p>
            <div class="accreditation">
                <div class="text">
                    Great Lakes is Accredited by the Accrediting Commission of Career Schools and Colleges
                </div>
                <div class="accsc_logo">
                    <img src="{!! asset('/images/accsc_logo.png') !!}" alt="Accrediting Commission of Career Schools and Colleges" />
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="nap">Navigation</h3>
            <ul class="navigation">
                  <li>{!! link_to_action('PagesController@show', 'Admissions', 'admissions') !!}</li>
                  <li>{!! link_to_action('PagesController@show', 'Student Services', 'student-services') !!}</li>
                  <li>{!! link_to_action('PagesController@show', 'Financial Aid', 'financial-aid') !!}</li>
                  <li>{!! link_to_action('PagesController@show', 'Job Placement', 'job-placement') !!}</li>
                  <li>{!! link_to_action('PagesController@show', 'About Great Lakes', 'about-great-lakes') !!}</li>
                  <li>{!! link_to_action('NewsController@index', 'News') !!}</li>
                  <li>{!! link_to_action('ConsumerInfoController@index', 'Consumer Info') !!}</li>
            </ul>
        </div>
        <div class="col-md-4">
            <div class="social_icons">
                <h3 class="nap" style="margin-bottom: 30px">Social</h3>
                <a class="facebook" href="https://www.facebook.com/greatlakesinstituteoftechnology"></a>
                <a class="googleplus" href="https://plus.google.com/+GlitEdu/posts"></a>
            </div>
        </div>
    </div>

</div>