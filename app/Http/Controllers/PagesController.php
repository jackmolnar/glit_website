<?php namespace GLITwebsite\Http\Controllers;

use GLITwebsite\Repositories\NewsRepository;
use GLITwebsite\Repositories\PageRepository;
use GLITwebsite\Repositories\ProgramRepository;
use Illuminate\Support\Facades\View;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/
    /**
     * @var ProgramRepository
     */
    private $programRepo;
    /**
     * @var PageRepository
     */
    private $pageRepo;
    /**
     * @var NewsRepository
     */
    private $newsRepo;

    private static $special_pages = [
        'request-info',
        'schedule-tour',
        'apply-online'
    ];

    /**
     * Create a new controller instance.
     *
     * @param ProgramRepository $programRepo
     * @param PageRepository $pageRepo
     * @param NewsRepository $newsRepo
     * @return \GLITwebsite\Http\Controllers\PagesController
     */
	public function __construct(ProgramRepository $programRepo, PageRepository $pageRepo, NewsRepository $newsRepo)
	{
		$this->middleware('guest');
        $this->programRepo = $programRepo;
        $this->pageRepo = $pageRepo;
        $this->newsRepo = $newsRepo;
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

        $programs = $this->programRepo->getDropDownArray();
        $testimonials = $this->programRepo->getAllTestimonials();
        $recent_news = $this->newsRepo->getRecentNews();
		return view('pages.index', ['programs' => $programs, 'testimonial_data' => $testimonials, 'recent_news' => $recent_news]);
	}

    public function show($slug)
    {
        switch ($slug){
            case 'request-info':
                return view('pages.request_info');
            case 'schedule-tour':
                return view('pages.schedule_tour');
            case 'apply-online':
                return view('pages.apply_online');
        }

        $page_data = $this->pageRepo->getPageData($slug);
        return view('pages.generic', ['page_data' => $page_data]);
    }

}
