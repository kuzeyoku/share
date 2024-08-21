<?php

namespace App\Http\Controllers\Admin;

use Throwable;
use App\Models\Reference;
use Illuminate\Support\Facades\View;
use App\Services\Admin\ReferenceService;
use App\Http\Requests\GeneralStatusRequest;
use App\Http\Requests\Reference\StoreReferenceRequest;
use App\Http\Requests\Reference\UpdateReferenceRequest;

class ReferenceController extends Controller
{
    public function __construct(private ReferenceService $service)
    {
        View::share([
            'route' => $service->route(),
            'folder' => $service->folder(),
            "module" => $service->module()
        ]);
    }

    public function index()
    {
        $items = $this->service->all();
        return view(themeView("admin", "{$this->service->folder()}.index"), compact("items"));
    }


    public function create()
    {
        return view(themeView("admin", "{$this->service->folder()}.create"));
    }

    public function store(StoreReferenceRequest $request)
    {
        try {
            $this->service->create($request->validated());
            return redirect()
                ->route("admin.{$this->service->route()}.index")
                ->withSuccess(__("admin/alert.default_success"));
        } catch (Throwable $e) {
            return back()
                ->withInput()
                ->withError(__("admin/alert.default_error"));
        }
    }

    public function edit(Reference $reference)
    {
        return view(themeView("admin", "{$this->service->folder()}.edit"), compact("reference"));
    }

    public function update(UpdateReferenceRequest $request, Reference $reference)
    {
        try {
            $this->service->update($request->validated(), $reference);
            return redirect()
                ->route("admin.{$this->service->route()}.index")
                ->withSuccess(__("admin/alert.default_success"));
        } catch (Throwable $e) {
            return back()
                ->withInput()
                ->withError(__("admin/alert.default_error"));
        }
    }

    public function statusUpdate(GeneralStatusRequest $request, Reference $reference)
    {
        try {
            $this->service->statusUpdate($request->validated(), $reference);
            return back()
                ->withSuccess(__("admin/alert.default_success"));
        } catch (Throwable $e) {
            return back()
                ->withError(__("admin/alert.default_error"));
        }
    }

    public function destroy(Reference $reference)
    {
        try {
            $this->service->delete($reference);
            return redirect()
                ->route("admin.{$this->service->route()}.index")
                ->withSuccess(__("admin/alert.default_success"));
        } catch (Throwable $e) {
            return back()
                ->withError(__("admin/alert.default_error"));
        }
    }
}
