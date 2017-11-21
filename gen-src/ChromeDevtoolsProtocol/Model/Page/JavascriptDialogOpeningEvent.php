<?php
namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when a JavaScript initiated dialog (alert, confirm, prompt, or onbeforeunload) is about to open.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class JavascriptDialogOpeningEvent implements \JsonSerializable
{
	/**
	 * Frame url.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Message that will be displayed by the dialog.
	 *
	 * @var string
	 */
	public $message;

	/**
	 * Dialog type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Default dialog prompt.
	 *
	 * @var string|null
	 */
	public $defaultPrompt;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->defaultPrompt)) {
			$instance->defaultPrompt = (string)$data->defaultPrompt;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->defaultPrompt !== null) {
			$data->defaultPrompt = $this->defaultPrompt;
		}
		return $data;
	}
}