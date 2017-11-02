<?php
namespace WebModule;

class Context {
    private $domain;
    private $siteID;
    private $pageID;
    private $pageName;
    public function __construct($domain, $siteID, $pageID, $pageName) {
        $this->domain = $domain;
        $this->siteID = $siteID;
        $this->pageID = $pageID;
        $this->pageName = $pageName;
    }
    public function domain() {
        return $this->domain;
    }
    public function siteID() {
        return $this->siteID;
    }
    public function pageID() {
        return $this->pageID;
    }
    public function pageName() {
        return $this->pageName;
    }
}

interface IComponent{
    function render(Context $context);
}


class TestComponent implements IComponent{

    function render(Context $context)
    {
       return "<div>simple</div>";
    }
}
?>