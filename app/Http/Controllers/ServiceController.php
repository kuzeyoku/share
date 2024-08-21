<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\SeoService;

class ServiceController extends Controller
{
    public function index()
    {
        SeoService::set();
        $service = Service::active()->order()->get();
        return view("service.index", compact("service"));
    }

    public function show(Service $service)
    {
        SeoService::set($service);
        $otherServices = Service::whereKeyNot($service->id)->get();
        return view("service.show", compact("service", "otherServices"));
    }
}
