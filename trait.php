<?php
trait Display {
    protected function showThis($message){
        echo $message;
    }
}


class Main {

    use Display;

    public function displayData() {
     $this->showThis("Hello, from Innocent");
    }
}
(new Main())->displayData();