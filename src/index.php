<?php
namespace WebModule;

class Context {
    private $siteID;
    private $pageID;
    public function __construct($siteID, $pageID) {
        $this->siteID = $siteID;
        $this->pageID = $pageID;
    }

    public function siteID() {
        return $this->siteID;
    }
    public function pageID() {
        return $this->pageID;
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