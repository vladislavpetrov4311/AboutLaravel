<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Service\Post\Service;

class GetClearDataController extends Controller {

    public function __invoke(Service $service) {
        return response()->json($service->GetClearData());
    }
}