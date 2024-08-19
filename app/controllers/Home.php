<?php
class Home {
    public function index() {
       
        $viewPath = '../app/views/home/index.html';
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "View não encontrada: " . $viewPath;
        }
    }
}
