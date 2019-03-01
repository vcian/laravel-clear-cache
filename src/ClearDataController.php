<?php

namespace Vcian\Cleardata;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class ClearDataController extends Controller
{
    public function handle()
    {
        try {
            Artisan::call('cache:clear');
            Artisan::call('view:clear');
            Artisan::call('route:clear');
            Artisan::call('clear-compiled');
            Artisan::call('config:clear');
        } catch (\Exception $ex) {
            \Log::error($ex->getMessage());
        }
    }
}
