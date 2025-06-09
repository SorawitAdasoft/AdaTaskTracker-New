<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ModuleController extends BaseController
{
    /**
     * Render view ภายใน layout หลัก
     */
    protected function render(string $view, array $data = [], string $layout = 'layouts.master')
    {
        $content = view($view, $data)->render();

        return view($layout, array_merge($data, [
            'content' => $content,
        ]));
    }
}
