<?php
class Plugin_string extends Plugin {

  public function replace() {
    $string  = $this->fetch_param('string', '');
    $pattern  = $this->fetch_param('pattern', '');
    $replacement  = $this->fetch_param('replacement', '');
    return preg_replace($pattern, $replacement, $string);
  }

  public function trim() {
	  $string = $this->fetch_param('string');
	  $trim_at = $this->fetch_param('trim_at');
	  $parts = explode($trim_at,$string);
	  return $parts['0'];
  }
  
}
