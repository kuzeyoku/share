<?php

namespace App\Services;

use Artesaos\SEOTools\Facades\SEOTools;

class SeoService
{
    public static function set(object|array|null $item = null)
    {
        $themeAsset = ThemeService::getThemeAssets();
        SEOTools::opengraph()->addProperty('type', 'website');
        if (is_object($item)) {
            SEOTools::setTitle($item->title);
            SEOTools::setDescription($item->meta_description);
            SEOTools::opengraph()->addImage($themeAsset->cover);
            SEOTools::twitter()->setImage($themeAsset->cover);
        } elseif (is_array($item)) {
            SEOTools::setTitle($item["title"]);
            SEOTools::setDescription($item["description"]);
            SEOTools::opengraph()->addImage($themeAsset->cover);
            SEOTools::twitter()->setImage($themeAsset->cover);
        } else {
            SEOTools::setTitle(config("general.title", config("app.name")));
            SEOTools::setDescription(config("general.description"));
        }
    }
}
