<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;

/**
 * Fired when the virtual machine stopped on breakpoint or exception or any other stop criteria.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PausedEvent implements \JsonSerializable
{
	/**
	 * Call stack the virtual machine stopped on.
	 *
	 * @var CallFrame[]
	 */
	public $callFrames;

	/**
	 * Pause reason.
	 *
	 * @var string
	 */
	public $reason;

	/**
	 * Object containing break-specific auxiliary properties.
	 *
	 * @var object|null
	 */
	public $data;

	/**
	 * Hit breakpoints IDs
	 *
	 * @var string[]|null
	 */
	public $hitBreakpoints;

	/**
	 * Async stack trace, if any.
	 *
	 * @var StackTrace|null
	 */
	public $asyncStackTrace;

	/**
	 * Scheduled async task id.
	 *
	 * @var string
	 */
	public $scheduledAsyncTaskId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->callFrames)) {
			$instance->callFrames = [];
			foreach ($data->callFrames as $item) {
				$instance->callFrames[] = CallFrame::fromJson($item);
			}
		}
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		if (isset($data->data)) {
			$instance->data = $data->data;
		}
		if (isset($data->hitBreakpoints)) {
			$instance->hitBreakpoints = [];
			foreach ($data->hitBreakpoints as $item) {
				$instance->hitBreakpoints[] = (string)$item;
			}
		}
		if (isset($data->asyncStackTrace)) {
			$instance->asyncStackTrace = StackTrace::fromJson($data->asyncStackTrace);
		}
		if (isset($data->scheduledAsyncTaskId)) {
			$instance->scheduledAsyncTaskId = (string)$data->scheduledAsyncTaskId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->callFrames !== null) {
			$data->callFrames = [];
			foreach ($this->callFrames as $item) {
				$data->callFrames[] = $item->jsonSerialize();
			}
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		if ($this->hitBreakpoints !== null) {
			$data->hitBreakpoints = [];
			foreach ($this->hitBreakpoints as $item) {
				$data->hitBreakpoints[] = $item;
			}
		}
		if ($this->asyncStackTrace !== null) {
			$data->asyncStackTrace = $this->asyncStackTrace->jsonSerialize();
		}
		if ($this->scheduledAsyncTaskId !== null) {
			$data->scheduledAsyncTaskId = $this->scheduledAsyncTaskId;
		}
		return $data;
	}
}