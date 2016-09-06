<?php
namespace Nikapotomus\blog;

class View
{
    /** @var string $templates_dir */
    protected $templates_dir;

    public function __construct($templates_dir)
    {
        $this->templates_dir = $templates_dir;
    }

    public function render($template, $variables)
    {
        extract($variables, EXTR_SKIP);
        include($this->templates_dir . "/" . $template . ".php");
    }
}
