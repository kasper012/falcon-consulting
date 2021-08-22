<?php namespace Gadimliestudio\Sliders\Models;

use Model;
/** *
*Sliders Model
 */
class sliders extends Model
{
    public $implement = [
      'System.Behaviors.SettingsModel',
      'RainLab.Translate.Behaviors.TranslatableModel'
    ];


    public $translatable = [
      
      'slider',
      'gallery'

    ];    

    public $settingsCode = 'gadimliestudio_sliders_settings';

    public $settingsFields = 'fields.yaml';

}