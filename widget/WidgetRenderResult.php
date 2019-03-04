<?php

namespace Widget;

class WidgetRenderResult implements \App\IWidgetRenderResult
{

    private $linksJS = [
        'https://code.jquery.com/jquery-3.3.1.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.ru.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker-en-CA.min.js',
    ];
    private $linksCSS = [
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css',
    ];

    public $htmlCode = '';
    public $jsCode = '';
    public $cssCode = '';

    public function __construct($htmlCode, $jsCode, $cssCode)
    {

        $this->htmlCode = $htmlCode;
        $this->jsCode   = $jsCode;
        $this->cssCode  = $cssCode;
    }

    public function getHTMLCode():string
    {

        return $this->htmlCode;
    }

    public function getCSSCode():string
    {
        return $this->cssCode;
    }

    public function getJSCode():string
    {

        return $this->jsCode;
    }

    public function getCSSFiles():array
    {
        return $this->linksCSS;
    }


    public function getJSFiles():array
    {
        return $this->linksJS;
    }

}