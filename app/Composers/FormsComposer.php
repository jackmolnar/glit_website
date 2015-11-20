<?php namespace GLITwebsite\Composers;

use GLITwebsite\Repositories\ProgramRepository;
use Illuminate\Contracts\View\View;

class FormsComposer {

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
        $program_array = $this->programRepo->getDropDownArray();
        unset($program_array['Cosmetology Operator']);
        unset($program_array['Cosmetology Teacher']);
        $view->with('programs', $program_array);
    }
}