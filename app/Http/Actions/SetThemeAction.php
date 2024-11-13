<?php

namespace App\Http\Actions;

use App\Exceptions\InvalidThemeException;

class SetThemeAction implements SetThemeActionInterface
{
    /**
     * Выполняет установку выбранной темы.
     *
     * @param string $theme
     * @return void
     *
     * @throws InvalidThemeException
     */
    public function execute(string $theme)
    {
        $availableThemes = ['classic', 'cuba'];

        if (!in_array($theme, $availableThemes)) {
            throw new InvalidThemeException("Тема '{$theme}' недопустима.");
        }

        session(['theme' => $theme]);
    }
}
