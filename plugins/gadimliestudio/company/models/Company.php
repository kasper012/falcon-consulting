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
      'trainings',
      'consulting_areas',
      'partner_description',
      'history_title',
      'history_text',
      'history_second_text',
      'strategy_title',
      'strategy_text',
      'metrics_title',
      'project_title_text',
      'project_description',
      'about_title',
      'about_subtitle',
      'about_text',
      'about_second_text',
      'about_btn_url',
      'about_btn_txt',
      'services_title',
      'services_subtitle',
      'services_text',
      'blog_title',
      'blog_suptitle',
      'blog_text',
      'team_title',
      'team_suptitle',
      'team_text',
      'partner_title',
      'partner_suptitle',
      'partner_text',
      'values',
      'socials'

    ];    

    public $settingsCode = 'gadimliestudio_company_settings';

    public $settingsFields = 'fields.yaml';

}
