<?php
class Home {
    public function index() {
       
        $viewPath = '../app/views/home/index.php';
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "View não encontrada: " . $viewPath;
        }
    }
}
