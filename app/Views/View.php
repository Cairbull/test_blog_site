<?php

namespace App\Views;

use Smarty\Smarty;

class View
{
    public function __construct(
        private Smarty $smarty,
    ) {}

    public function render(string $template, array $data = []): void
    {
        $this->smarty->assign($data);
        $this->smarty->display($template);
    }
}
