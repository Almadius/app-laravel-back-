<?php

namespace App\Http\Actions;

interface SetThemeActionInterface
{
    /**
     * Выполняет установку выбранной темы.
     *
     * @param string $theme
     * @return void
     */
    public function execute(string $theme);
}
