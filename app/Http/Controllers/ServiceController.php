<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        $services = Service::all();
        return view('admin.service', compact('services'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function edit()
    {
        return view('admin.edit');
    }
    public function delete()
    {
        return view('admin.delete');
    }
}
