<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use App\Http\Service\Applications\ApplicationService;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function __construct(
        private readonly ApplicationService $service
    )
    {
    }

    public function index()
    {
        return response()->json($this->service->getIndex());
    }

    public function store(StoreApplicationRequest $request)
    {
        //
    }

    public function show(Application $application)
    {
        //
    }

    public function edit(Application $application)
    {
        //
    }

    public function update(UpdateApplicationRequest $request, Application $application)
    {
        //
    }

    public function destroy(Application $application)
    {
        //
    }
}
