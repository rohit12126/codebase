<?php namespace App\Http\Composers;

use App\Classes\SettingManager;
use Illuminate\Contracts\View\View;
class SettingComposer
{
    protected $cartManager;

    public function __construct(
        SettingManager $settingManager
    ) {
        $this->settingManager = $settingManager;
    }

    /**
     * Compose the count for cart views
     *
     * @param View $view
     * @return View
     */
    public function compose(View $view)
    {
        $setting = $this->settingManager->getSettings();
        return $view->with(
            [
                'setting' => $setting
            ]
        );
    }
}
