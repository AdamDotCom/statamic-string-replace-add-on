<?php
class Plugin_string extends Plugin {

  public function replace() {
    $string  = $this->fetch_param('string', '');
    $pattern  = $this->fetch_param('pattern', '');
    $replacement  = $this->fetch_param('replacement', '');
    return preg_replace($pattern, $replacement, $string);
  }
}
