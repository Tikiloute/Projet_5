<?php

require_once('models/MainManager.model.php');

class MainController{

    private $mainManager;

    public function __construct()
    {
        $this->mainManager = new MainManager();
    }

    private function newPage($data)
    {
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }

    public function home()
    {
        $_SESSION["alert"] = [
            "message" => "exemple de message d'alerte",
            "type" => "alert-success"
        ];

        $datass = $this->mainManager->getDataX();
        $data_page = [
            "page_description" => "Accueil du site",
            "page_title" => "Accueil",
            "datas" => $datass,
            "view" => "views/accueil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->newPage($data_page);
        print_r($datass);
    }

    public function page1()
    {
        $_SESSION["alert"] = [
            "message" => "exemple de message d'alerte",
            "type" => "alert-danger"
        ];

        $data_page = [
            "page_description" => "Page 1",
            "page_title" => "Page 1",
            "view" => "views/page1.view.php",
            "template" => "views/common/template.php"
        ];
        $this->newPage($data_page);
    }

    public function page2()
    {
        $data_page = [
            "page_description" => "Page 2",
            "page_title" => "Page 2",
            "view" => "views/page2.view.php",
            "template" => "views/common/template.php"
        ];
        $this->newPage($data_page);
    }

    public function page3()
    {
        $data_page = [
            "page_description" => "Page 3",
            "page_title" => "page 3",
            "view" => "views/page3.view.php",
            "template" => "views/common/template.php"
        ];
        $this->newPage($data_page);
    }

    public function pageError(string $msg) :void
    {
        $data_page = [
            "page_description" => "Page de gestion des erreurs",
            "page_title" => "Page de gestion des erreurs",
            "msg" => $msg,
            "view" => "views/erreur.view.php",
            "template" => "views/common/template.php"
        ];
        $this->newPage($data_page);
    }

}