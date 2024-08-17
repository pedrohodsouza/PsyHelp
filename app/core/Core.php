<?php
class Core {
    protected $currentController = 'Home';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();
        
        if (isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->currentController = $url[0];
            unset($url[0]);
        }
        
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        if (isset($url[1]) && method_exists($this->currentController, $url[1])) {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
