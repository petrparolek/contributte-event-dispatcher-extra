<?php declare(strict_types = 1);

namespace Contributte\Events\Extra\Event\Application;

use Nette\Application\IResponse;
use Nette\Application\UI\Presenter;
use Symfony\Contracts\EventDispatcher\Event;

class PresenterShutdownEvent extends Event
{

	/** @var Presenter */
	private $presenter;

	/** @var IResponse */
	private $response;

	public function __construct(Presenter $presenter, IResponse $response)
	{
		$this->presenter = $presenter;
		$this->response = $response;
	}

	public function getPresenter(): Presenter
	{
		return $this->presenter;
	}

	public function getResponse(): IResponse
	{
		return $this->response;
	}

}
