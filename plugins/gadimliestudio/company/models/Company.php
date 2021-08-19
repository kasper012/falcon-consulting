<?php namespace Gadimliestudio\Company\Models;

use Model;
/** *
*Company Model
 */
class Company extends Model
{
    public $implement = [
      'System.Behaviors.SettingsModel',
      'RainLab.Translate.Behaviors.TranslatableModel'
    ];


    public $translatable = [
      'address',
      'excerpt',
      'about',
      'counters',
      'team',
      'docs',
      'faq',
      'partner_description',
      'history_title',
      'history_text',
      'history_second_text',
      'strategy_title',
      'strategy_text',
      'metrics_title',
      'project_title_text',
      'project_description',


    ];    

    public $settingsCode = 'gadimliestudio_company_settings';

    public $settingsFields = 'fields.yaml';

}
