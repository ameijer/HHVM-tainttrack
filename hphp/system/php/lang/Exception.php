<?php

// This doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.exception.php )
 *
 * Exception is the base class for all Exceptions.
 *
 */
class Exception {
  protected $message = '';  // exception message
  private $string = '';     // php5 has this, we don't use it
  protected $code = 0;      // user defined exception code
  protected $file;          // source filename of exception
  protected $line;          // source line of exception
  private $trace;           // full stacktrace
  private $previous = null;

  private static $traceOpts = 0;

  /**
   * This cannot be implemented in __construct, because a derived class may
   * implement its own __construct, losing the stacktrace. The runtime has
   * special logic to call the __init__ method before
   * calling __construct just to make sure $this->trace is always populated.
   */
  final function __init__() {
    if (isset($this->trace)) {
      return;
    }
    $this->initTrace();
  }

  private function __check_init($context) {
    if (!isset($this->trace)) {
      trigger_error($context.': exception object not initialized', E_WARNING);
      return false;
    } else {
      return true;
    }
  }


  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/exception.construct.php )
   *
   * Constructs the Exception.
   *
   * @message    mixed   The Exception message to throw.
   * @code       mixed   The Exception code.
   * @previous   mixed   The previous exception used for the exception
   *                     chaining.
   */
  function __construct($message = '', $code = 0, Exception $previous = null) {
    $this->message = $message;
    $this->code = $code;
    $this->previous = $previous;
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/exception.getmessage.php )
   *
   * Returns the Exception message.
   *
   * @return     mixed   Returns the Exception message as a string.
   */
  function getMessage() {
    return $this->message;
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/exception.getprevious.php )
   *
   * Returns previous Exception (the third parameter of
   * Exception::__construct()).
   *
   * @return     mixed   Returns the previous Exception if available or NULL
   *                     otherwise.
   */
  final function getPrevious() {
    return $this->previous;
  }

  final function setPrevious(Exception $previous) {
    $this->previous = $previous;
  }

  final function setPreviousChain(Exception $previous) {
    $cur = $this;
    $next = $cur->getPrevious();
    while ($next instanceof Exception) {
      $cur = $next;
      $next = $cur->getPrevious();
    }
    $cur->setPrevious($previous);
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/exception.getcode.php )
   *
   * Returns the Exception code.
   *
   * @return     mixed   Returns the exception code as integer in Exception
   *                     but possibly as other type in Exception descendants
   *                     (for example as string in PDOException).
   */
  function getCode() {
    return $this->code;
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/exception.getfile.php )
   *
   * Get the name of the file the exception was created.
   *
   * @return     mixed   Returns the filename in which the exception was
   *                     created.
   */
  final function getFile() {
    if (!$this->__check_init(__METHOD__)) {
      return null;
    }
    return $this->file;
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/exception.getline.php )
   *
   * Get line number where the exception was created.
   *
   * @return     mixed   Returns the line number where the exception was
   *                     created.
   */
  final function getLine() {
    if (!$this->__check_init(__METHOD__)) {
      return null;
    }
    return $this->line;
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/exception.gettrace.php )
   *
   * Returns the Exception stack trace.
   *
   * @return     mixed   Returns the Exception stack trace as an array.
   */
  final function getTrace() {
    if (!$this->__check_init(__METHOD__)) {
      return null;
    }
    return $this->trace;
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/exception.gettraceasstring.php )
   *
   * Returns the Exception stack trace as a string.
   *
   * @return     mixed   Returns the Exception stack trace as a string.
   */
  final function getTraceAsString() {
    if (!$this->__check_init(__METHOD__)) {
      return null;
    }
    $i = 0;
    $s = "";
    foreach ($this->getTrace() as $frame) {
      if (!is_array($frame)) continue;
      $s .= "#$i " .
        (isset($frame['file']) ? $frame['file'] : "") . "(" .
        (isset($frame['line']) ? $frame['line'] : "") . "): " .
        (isset($frame['class']) ? $frame['class'] . $frame['type'] : "") .
        $frame['function'] . "()\n";
      $i++;
    }
    $s .= "#$i {main}";
    return $s;
  }

  /* Overrideable */
  // formated string for display
  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/exception.tostring.php )
   *
   * Returns the string representation of the exception.
   *
   * @return     mixed   Returns the string representation of the exception.
   */
  function __toString() {
    $res = "";
    $lst = array();
    $ex = $this;
    while ($ex != null) {
      $lst[] = $ex;
      $ex = $ex->previous;
    }
    $lst = array_reverse($lst);
    foreach ($lst as $i => $ex) {
      if ($i > 0) {
        $res .= "\n\nNext ";
      }
      $res .= "exception '" . get_class($ex) . "' with message '" .
        $ex->getMessage() . "' in " . $ex->getFile() . ":" .
        $ex->getLine() . "\nStack trace:\n" . $ex->getTraceAsString();
    }
    return $res;
  }

  /**
   * Derived classes may override the methods below if different behavior
   * for initializing the trace is desired
   */
  protected function initTrace() {
    $this->trace = debug_backtrace(static::getTraceOptions());
    // Remove top stack frames up to and including Exception::__init__,
    // set the 'file' and 'line' properties appropriately
    while (!empty($this->trace)) {
      $top = array_shift($this->trace);
      if (isset($top['class']) && isset($top['function']) &&
          strcasecmp($top['class'], 'exception') === 0 &&
          strcasecmp($top['function'], '__init__') === 0) {
        if (isset($top['file'])) $this->file = $top['file'];
        if (isset($top['line'])) $this->line = $top['line'];
        return;
      }
    }
  }

  public static function getTraceOptions() {
    return self::$traceOpts;
  }

  public static function setTraceOptions($opts) {
    self::$traceOpts = (int)$opts;
  }
}