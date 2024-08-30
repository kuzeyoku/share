<?php

namespace App\Http\Controllers;

use App\Services\SeoService;
use App\Services\ContactService;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function index()
    {
        SeoService::set();
        return view('contact');
    }

    public function send(ContactRequest $request)
    {
        try {
            ContactService::sendMail($request);
            return back()
                ->withSuccess(__("front/contact.send_success"));
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->withError($e->getMessage());
        }
    }
}
