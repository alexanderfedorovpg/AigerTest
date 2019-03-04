<?php

namespace Widget;

use App\App as App;
use App\IWidget as IWidget;
use Widget\WidgetRenderResult as WRR;

class Widget extends App implements IWidget
{

    private static $config = [
        'Title'    => 'Select a date',
        'Value'    => '04.03.2019',
        'Language' => 'ru',
        'Readonly' => 'yes'

    ];
    public $htmlCode;
    public $jsCode;
    public $cssCode;
    public $template;

    public function __construct()
    {
        parent::__construct();

        $this->jsCode = '$(".date input").datepicker({
                                todayBtn: "linked",
                                language: $("input[name=\'widget[Language]\'").val(),
                                calendarWeeks: true,
                                todayHighlight: true
                            }).on("changeDate",function(e){
                                var result = {date:e.date};    
                                app.setWidgetOutput(result);
                            })
                             .on(\'show\', function(e){
                                $(\'.datepicker\')
                                .addClass(\'background-color-middle\')
                                .addClass(\'color-text\');
                            });
                            ';

        $this->cssCode  = '.edit_text {font-size: 1em;}';
        $this->template = 'widget/viewWidget.php';
    }

    public static function getInitialConfig():array
    {
        return self::$config;
    }

    public static function create(array $config, App $app):IWidget
    {
        $Widget          = new Widget();
        $Widget::$config = $config;

        return $Widget;
    }

    public function render():\App\IWidgetRenderResult
    {

        $this->htmlCode = $this->renderer->fetch($this->template, ['config' => self::$config]);

        return new WRR($this->htmlCode, $this->jsCode, $this->cssCode);
    }


}