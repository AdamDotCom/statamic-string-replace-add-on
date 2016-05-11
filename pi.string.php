<?php
class Plugin_string extends Plugin {

  public function replace() {
    $string  = $this->fetchParam('string', null, false, false, false);
    $pattern  = $this->fetchParam('pattern', '');
    $replacement  = $this->fetchParam('replacement', '');
    return preg_replace($pattern, $replacement, $string);
  }
}
