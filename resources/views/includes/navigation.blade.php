<nav class="navbar navbar-default">
      <div class="container">
            <div class="navbar-header">
              {!! link_to_action('PagesController@index', '', null, ['class' => 'navbar-brand']) !!}
                <div class="btn-group btn-group-justified mobile_buttons" role="group" data-spy="affix" data-offset-top="150">
                    <div class="btn-group" role="group">
                        <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nav
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>{!! link_to_action('ProgramsController@index', 'Programs', 'programs') !!}</li>
                            <li>{!! link_to_action('PagesController@show', 'Admissions', 'admissions') !!}</li>
                            <li>{!! link_to_action('PagesController@show', 'Student Services', 'student-services') !!}</li>
                            <li>{!! link_to_action('PagesController@show', 'Financial Aid', 'financial-aid') !!}</li>
                            <li>{!! link_to_action('PagesController@show', 'Job Placement', 'job-placement') !!}</li>
                            <li>{!! link_to_action('PagesController@show', 'About Great Lakes', 'about-great-lakes') !!}</li>
                            <li>{!! link_to_action('NewsController@index', 'News') !!}</li>
                            <li>{!! link_to_action('ConsumerInfoController@index', 'Consumer Info') !!}</li>
                        </ul>
                    </div>
                    <a type="button" class="btn btn-default"><i class="glyphicon glyphicon-phone"></i> Call</a>
                    <a type="button" class="btn btn-default" href="{{ action("PagesController@show", 'request-info') }}"><i class="glyphicon glyphicon-envelope"></i> Info</a>
                    <a type="button" class="btn btn-default" href="https://www.google.com/maps?saddr=My+Location&daddr=Great+Lakes+Institute+of+Technology"><i class="glyphicon glyphicon-map-marker"></i> Find</a>
                </div>
            </div>
            <div class="navbar-contact pull-right">
                <h2><i class="glyphicon glyphicon-earphone"></i> 814.864.6666</h2>
                <div class="btn-group btn-group-sm">
                    <a href="{{ action("PagesController@show", 'request-info') }}" class="btn btn-success" role="button"><i class="glyphicon glyphicon-envelope"></i> Request Info</a>
                    <a href="https://www.google.com/maps?saddr=My+Location&daddr=Great+Lakes+Institute+of+Technology" target="_blank" class="btn btn-success" role="button"><i class="glyphicon glyphicon-map-marker"></i> Directions</a>
                </div>
            </div>
      </div>



      <div id="navbar" class="navbar-collapse collapse" data-spy="affix" data-offset-top="150" >
            <ul class="nav navbar-nav navbar-center">
                <li class="dropdown">
                  <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Programs</a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                  @foreach($programs as $program)
                     <li role="presentation">{!! link_to_action('ProgramsController@show', $program, str_slug($program, "-")) !!}</li>
                  @endforeach

                  </ul>
                </li>

                  <li>{!! link_to_action('PagesController@show', 'Admissions', 'admissions') !!}</li>
                  <li>{!! link_to_action('PagesController@show', 'Student Services', 'student-services') !!}</li>
                  <li>{!! link_to_action('PagesController@show', 'Financial Aid', 'financial-aid') !!}</li>
                  <li>{!! link_to_action('PagesController@show', 'Job Placement', 'job-placement') !!}</li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">About</a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                        <li>{!! link_to_action('PagesController@show', 'About Great Lakes', 'about-great-lakes') !!}</li>
                        <li>{!! link_to_action('NewsController@index', 'News') !!}</li>
                        <li>{!! link_to_action('ConsumerInfoController@index', 'Consumer Info') !!}</li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">Contact</a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
                        <li>{!! link_to_action('PagesController@show', 'Reqest More Information', 'request-info') !!}</li>
                        <li>{!! link_to_action('PagesController@show', 'Schedule a Tour', 'schedule-tour') !!}</li>
                        <li>{!! link_to_action('PagesController@show', 'Apply Online', 'apply-online') !!}</li>
                    </ul>
                  </li>
            </ul>
      </div><!--/.nav-collapse -->
</nav>