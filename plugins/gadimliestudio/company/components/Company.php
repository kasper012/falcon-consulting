<?php namespace Gadimliestudio\Company\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Company\Models\Company as Settings;
use October\Rain\Database\Model;

class Company extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Компания',
            'description' => 'Использовaние данных компании',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $settings = Settings::instance();
        $company = new Model();
        $company->name = $settings->name;
        


        $company->documents = $settings->documents;

        $company->partners = $settings->partners;
        $company->about = $settings->about;
        $company->faq = $settings->faq;

        $company->excerpt = $settings->excerpt;
        $company->image = $settings->image;
        $company->video = $settings->video;
        $company->telephone = $settings->telephone;
        $company->pochta = $settings->pochta;
        $company->address = $settings->address;
        $company->gmaps = $settings->gmaps;
        $company->socials = $settings->socials;
        $company->counters = $settings->counters;
        $company->team = $settings->team;
        $company->docs = $settings->docs;
        $company->partner_description = $settings->partner_description;


        $company->history_title = $settings->history_title;
        $company->history_image = $settings->history_image;
        $company->history_text = $settings->history_text;
        $company->history_logos = $settings->history_logos;
        $company->history_second_text = $settings->history_second_text;
        $company->strategy_title = $settings->strategy_text;
        $company->strategy_text = $settings->strategy_text;
        $company->strategy_image = $settings->strategy_image;
        $company->metrics_title = $settings->metrics_title;
        
        
        $company->project_title_text = $settings->project_title_text;
        $company->project_description = $settings->project_description;



        $company->careers = $settings->careers;

        
        $company->careers_description = $settings->careers_description;

        $this->page['company'] = $company;
    }
}
