<?php namespace GLITwebsite\Http\Controllers;

use GLITwebsite\Http\Requests;

use GLITwebsite\Http\Requests\SideFormContactRequest;
use Mail;
use Session;

class FormController extends Controller {

	/**
	 * The email recipients
	 * @var array
	 */
	protected static $senders = [
		'jonm@glit.edu',
//		'info@glit.edu'
	];

	/**
	 * Declare Vars
	 * @var
	 */
	protected $subject;
	protected $request;

	/**
	 * Constructor
	 * @param SideFormContactRequest $request
     */
	public function __construct(SideFormContactRequest $request)
	{
		$this->request = $request;

		$this->setSubjectSessionVariables();
	}

	/**
	 * Send all request here, redirect by form
	 * @return string|void
     */
	public function index()
	{
		return $this->redirectToFormMethod();
	}

	/**
	 * Send Side Form
	 * @return string
     */
	public function sideForm()
	{
		$this->subject = $this->formatSubject('Side Form', $this->request);
		Mail::send('emails.side_form', $this->request->input(), function($message) {
			$message->to(self::$senders)->subject($this->subject);
		});

		return "Your request has been sent! Someone will contact you shortly.";
	}

	public function requestForm()
	{
		$this->subject = $this->formatSubject('Request Form', $this->request);

		Mail::send('emails.request_form', $this->request->input(), function($message) {
			$message->to(self::$senders)->subject($this->subject);
		});

		return "Your request has been sent! Someone will contact you shortly.";
	}

	public function scheduleTour()
	{
		$this->subject = $this->formatSubject('Tour Form', $this->request);

		Mail::send('emails.tour_form', $this->request->input(), function($message) {
			$message->to(self::$senders)->subject($this->subject);
		});

		return "Your request has been sent! Someone will contact you shortly.";
	}

	public function applyOnline()
	{
		$this->subject = $this->formatSubject('Application', $this->request);
		Mail::send('emails.app_form', $this->request->input(), function($message) {
			$message->to(self::$senders)->subject($this->subject);
		});
		return "Your application has been sent! Someone will contact you shortly.";
	}

	/**
	 * Format the subject
	 *
	 * @param string $form
	 * @param $request
	 * @return string
     */
	public function formatSubject($form = '', $request)
	{
		return $form.' - '.$request->input('first_name').' '.$request->input('last_name').' '.$this->subject;
	}

	/**
	 * Set the subject based on Cookie variables
     */
	public function setSubjectSessionVariables()
	{
		$all_session_vars = Session::all();

		foreach ($all_session_vars as $key => $value) {
			switch ($key) {
				case 'dex':
					$this->subject .= '- ' . $key . ' ' . $value;
					break;
				case 'YouTube':
					$this->subject .= '- ' . $key . ' ' . $value;
					break;
				case 'Facebook':
					$this->subject .= '- ' . $key . ' ' . $value;
					break;
			}
		}
	}

	/**
	 * Redirect to appropriate form processing method
	 * @return string|void
	 */
	public function redirectToFormMethod()
	{
		if($this->request->has('form_type'))
		{
			switch ($this->request->get('form_type')) {
				case "request_info":
					return $this->requestForm();
					break;
				case "schedule_tour":
					return $this->scheduleTour();
					break;
				case "apply_online":
					return $this->applyOnline();
					break;
				default:
					return $this->sideForm();
			}
		}
		return $this->sideForm();
	}
}
