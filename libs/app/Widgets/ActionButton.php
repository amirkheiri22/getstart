<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class ActionButton extends AbstractWidget
{
    public $reloadTimeout = 300;

    protected $config = [
        'link'=>'#',
        'class'=>'btn-success',
        'title'=>'default',
    ];

    public function run()
    {
        return view('widgets.action_button', [
            'config' => $this->config,
        ]);
    }
}
