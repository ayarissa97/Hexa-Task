<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return Service::latest()->get();
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(ServiceRequest $request)
    // {
    //     if($request->hasFile('image')){
    //         $file = $request->file('image')->store('services', 'public');
    //     }

    //    // $service = Service::create($request->validated() + ['image' => $file]);
    //    $service = Service::create([
    //     'title'  => $request->title,
    //     'desc'  => $request->desc,
    //     'image'  => $file,
    //    ]);

    //     return $service;
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return $service;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    // public function update(ServiceRequest $request, Service $service)
    // {
    //     if($request->hasFile('image')){
    //         $file = $request->file('image')->store('services', 'public');
    //     }else{
    //         $file = $service->image;
    //     }

    //    // $service = Service::create($request->validated() + ['image' => $file]);
    //    $service->update([
    //     'title'  => $request->title,
    //     'desc'  => $request->desc,
    //     'image'  => $file,
    //    ]);

    //     return $service;
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Service $service)
    // {
    //     $service->delete;
    //     return $service;
    // }
}
