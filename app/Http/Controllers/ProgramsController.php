<?php namespace GLITwebsite\Http\Controllers;

use GLITwebsite\Http\Requests;
use GLITwebsite\Http\Controllers\Controller;

use GLITwebsite\Repositories\ProgramRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProgramsController extends Controller {


    /**
     * @var ProgramRepository
     */
    private $programRepo;

    function __construct(ProgramRepository $programRepo)
    {
        $this->programRepo = $programRepo;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$programs = $this->programRepo->getActivePrograms();
		return view('programs.index')->with('programs', $programs);
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
	public function show($id)
	{
		if($id == 'cosmetology-operator' || $id == 'cosmetology-teacher') return redirect('http://erie.toniguy.edu');

        $program_data = $this->programRepo->getProgramData($id);
        $testimonial_data = $this->programRepo->getProgramTestimonials($program_data->id);
        return view('programs.program_page', ['program_data' => $program_data, 'testimonial_data' => $testimonial_data]);
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
