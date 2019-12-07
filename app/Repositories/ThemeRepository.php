<?php

namespace App\Repositories;
use App\Theme;

class ThemeRepository extends CommonRepository
{
    public function __construct(Theme $theme) {
        $this->model = $theme;
    }

    public function show_list(){
        $result = $this->model->all();
        return $result;
    }
}
