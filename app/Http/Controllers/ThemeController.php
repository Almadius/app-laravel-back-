<?php

namespace App\Http\Controllers;

use App\Http\Actions\SetThemeActionInterface;
use App\Http\Requests\SetThemeRequest;
use App\Exceptions\InvalidThemeException;
use Illuminate\Support\Facades\Log;

class ThemeController extends Controller
{
    public function home()
    {
        $theme = session('theme', 'classic');
        return view("themes.$theme.home");
    }

    public function contacts()
    {
        $theme = session('theme', 'classic');
        return view("themes.$theme.contacts");
    }

    public function setTheme(SetThemeRequest $request, SetThemeActionInterface $action)
    {
        try {
            $action->execute($request->input('theme'));
            return redirect()->back()->with('success', 'Тема успешно обновлена.');
        } catch (InvalidThemeException $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['theme' => 'Недопустимая тема.']);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['theme' => 'Произошла ошибка при смене темы.']);
        }
    }
}
