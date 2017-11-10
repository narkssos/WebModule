<?php
namespace WebModule;

final class Context {
    private $domain;
    private $siteID;
    private $pageID;
    private $pageName;
    private $mode;
    private $part;
    public function __construct($domain, $siteID, $pageID, $pageName,$mode="staging",$part=false) {
        $this->domain = $domain;
        $this->siteID = $siteID;
        $this->pageID = $pageID;
        $this->pageName = $pageName;
        $this->mode = $mode;
        $this->part = $part;
    }
    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->{$key};
        } else {
            return null; // or throw an exception
        }
    }
    public function __set($key, $value)
    {
        return; // or throw an exception
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