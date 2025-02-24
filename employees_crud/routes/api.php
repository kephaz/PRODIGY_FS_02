<?php

use App\Filament\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();

});

Route::get('/employees', function(){
    $employees = Employee::orderBy('last_name', 'ASC')->get();
    return EmployeeResource::collection($employees);
});



