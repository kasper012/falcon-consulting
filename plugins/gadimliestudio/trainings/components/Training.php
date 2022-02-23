<?php namespace Gadimliestudio\Trainings\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Trainings\Models\Training as ModelsTraining;

class Training extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Training Component',
            'description' => 'Trainings'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $trainings = ModelsTraining::all();
        $this->page['trainings'] = $trainings;
    }
}
