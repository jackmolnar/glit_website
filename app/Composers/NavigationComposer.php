<?php namespace GLITwebsite\Composers;

use GLITwebsite\Repositories\ProgramRepository;
use Illuminate\Contracts\View\View;

class NavigationComposer {

    /**
     * @var ProgramRepository
     */
    private $programRepo;

    function __construct(ProgramRepository $programRepo)
    {
        $this->programRepo = $programRepo;
    }

    public function compose(View $view)
    {
        $view->with('programs', $this->programRepo->getDropDownArray());
    }
}