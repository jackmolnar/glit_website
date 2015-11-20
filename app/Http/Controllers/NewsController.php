<?php namespace GLITwebsite\Http\Controllers;

use GLITwebsite\Http\Requests;
use GLITwebsite\Http\Controllers\Controller;

use GLITwebsite\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsController extends Controller {

    /**
     * @var NewsRepository
     */
    private $newsRepo;

    function __construct( NewsRepository $newsRepo)
    {
        $this->newsRepo = $newsRepo;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $allNews = $this->newsRepo->getAllNews('thumb', 'desc', 'id', true);

        $allNews->setPath(url('news'));

        return view('news/index', ['news' => $allNews]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$newsItem = $this->newsRepo->getNewsItem($slug);
        return view('news/show', ['newsItem' => $newsItem]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
