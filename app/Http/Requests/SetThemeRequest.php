<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetThemeRequest extends FormRequest
{
    /**
     * Определяет, авторизован ли пользователь выполнять этот запрос.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Правила валидации для запроса.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'theme' => 'required|in:classic,cuba',
        ];
    }

    /**
     * Сообщения об ошибках для правил валидации.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'theme.required' => 'Тема должна быть выбрана.',
            'theme.in' => 'Выбранная тема недопустима.',
        ];
    }
}
