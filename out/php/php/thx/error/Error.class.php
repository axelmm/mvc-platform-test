<?php

class thx_error_Error extends thx_util_Message {
	public function __construct($message, $params = null, $param = null, $pos = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("thx.error.Error::new");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::__construct($message,$params,$param);
		$this->pos = $pos;
		$GLOBALS['%s']->pop();
	}}
	public $pos;
	public $inner;
	public function setInner($inner) {
		$GLOBALS['%s']->push("thx.error.Error::setInner");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->inner = $inner;
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function toStringError($pattern = null) {
		$GLOBALS['%s']->push("thx.error.Error::toStringError");
		$__hx__spos = $GLOBALS['%s']->length;
		$prefix = Strings::format(thx_error_Error_0($this, $pattern), (new _hx_array(array($this->pos->className, $this->pos->methodName, $this->pos->lineNumber, $this->pos->fileName, $this->pos->customParams))), null, null);
		{
			$tmp = _hx_string_or_null($prefix) . _hx_string_or_null($this->toString());
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function toString() {
		$GLOBALS['%s']->push("thx.error.Error::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		try {
			{
				$tmp = Strings::format($this->message, $this->params, null, null);
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) ? $__hx__e->e : $__hx__e;
			$e = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				$ps = _hx_string_or_null($this->pos->className) . "." . _hx_string_or_null($this->pos->methodName) . "(" . _hx_string_rec($this->pos->lineNumber, "") . ")";
				haxe_Log::trace("wrong parameters passed for pattern '" . _hx_string_or_null($this->message) . "' at " . _hx_string_or_null($ps), _hx_anonymous(array("fileName" => "Error.hx", "lineNumber" => 42, "className" => "thx.error.Error", "methodName" => "toString")));
				{
					$GLOBALS['%s']->pop();
					return "";
				}
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->__dynamics[$m]) && is_callable($this->__dynamics[$m]))
			return call_user_func_array($this->__dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call <'.$m.'>');
	}
	static $errorPositionPattern = "{0}.{1}({2}): ";
	function __toString() { return $this->toString(); }
}
function thx_error_Error_0(&$__hx__this, &$pattern) {
	if(null === $pattern) {
		return thx_error_Error::$errorPositionPattern;
	} else {
		return $pattern;
	}
}
