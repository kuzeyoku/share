<?php

namespace App\Services\Admin;

use App\Models\Popup;
use App\Enums\ModuleEnum;
use Illuminate\Database\Eloquent\Model;

class PopupService extends BaseService
{

    public function __construct(Popup $popup)
    {
        parent::__construct($popup, ModuleEnum::Popup);
    }

    public function create($request)
    {
        $request = [
            "type" => $request->type,
            "video" => $request->video,
            "url" => $request->url,
            "status" => $request->status,
            "setting" => json_encode([
                "time" => $request->time ?? 0,
                "width" => $request->width ?? 600,
                "closeOnEscape" => $request->closeOnEscape,
                "closeButton" => $request->closeButton,
                "overlayClose" => $request->overlayClose,
                "pauseOnHover" => $request->pauseOnHover,
                "fullScreenButton" => $request->fullScreenButton,
                "color" => $request->color ?? "#88A0B9",
            ])
        ];
        return parent::create($request);
    }

    public function update($request, Model $popup)
    {
        $request = [
            "type" => $request->type,
            "video" => $request->video,
            "url" => $request->url,
            "status" => $request->status,
            "setting" => json_encode([
                "time" => $request->time ?: 0,
                "width" => $request->width ?: 600,
                "closeOnEscape" => $request->closeOnEscape,
                "closeButton" => $request->closeButton,
                "overlayClose" => $request->overlayClose,
                "pauseOnHover" => $request->pauseOnHover,
                "fullScreenButton" => $request->fullScreenButton,
                "color" => $request->color ?? "#88A0B9",
            ])
        ];
        return parent::update($request, $popup);
    }
}
