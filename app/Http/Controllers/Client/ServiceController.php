<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $service = Page::where("key", "service")->firstOrFail();
        return view("client.pages.service.index", [
            "service" => $service
        ]);
    }
}
