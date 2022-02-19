<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Home extends BaseController {

    public function index() {
        $data['title_for_layout'] = 'welcome to codeigniter 4 skeleton web';
        return $this->renderLayout('Layouts/Adminlte/home', $data);
    }

}
