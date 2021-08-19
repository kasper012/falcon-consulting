<?php

use Gadimliestudio\Projects\Controllers\Projects;
use RainLab\Translate\Models\Message;
use RainLab\Translate\Classes\Translator;

/*
 * Adds a custom route to check for the locale prefix.
 */
App::before(function ($request) {
    if (Config::get('rainlab.translate::disableLocalePrefixRoutes', false)) {
        return;
    }

    if (App::runningInBackend()) {
        return;
    }

    $translator = Translator::instance();

    if (
        !$translator->isConfigured() ||
        !$translator->loadLocaleFromRequest() ||
        (!$locale = $translator->getLocale())
    ) {
        return;
    }

    /*
     * Register routes
     */
    Route::group(['prefix' => $locale], function () {
        Route::get('/projects_search_form', [Projects::class,'search'])->name('projects_search_form');
    });
});

/*
 * Save any used messages to the contextual cache.
 */
App::after(function ($request) {
    if (class_exists('RainLab\Translate\Models\Message')) {
        Message::saveToCache();
    }
});

