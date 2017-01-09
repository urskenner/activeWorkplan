<?php

/* --------------------------- WORKPLAN ------------------------------- */
Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('employee')->user();

    return redirect('/employee/employee-workplan/' . (new DateTime())->format('d-m-Y'));
})->name('home');


Route::get('/employee-workplan/{date}', function ($urlDate) {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('employee')->user();

    $thisEmployee = oneEmployee(Auth::user()->id);

    $manyTimeEvent = timeEventOfEmployee($thisEmployee->id);
    $manyWorktimeEvent = worktimeFixOfEmployee($thisEmployee->id);
    $manyAlldayEvent = alldayEventOfEmployee($thisEmployee->id);

    $week = getWeekArray($urlDate);

    return view('employee.employee-workplan')
        ->with('manyTimeEvent', $manyTimeEvent)
        ->with('manyWorktimeEvent', $manyWorktimeEvent)
        ->with('manyAlldayEvent', $manyAlldayEvent)
        ->with('week', $week);
})->name('home');


/* --------------------------- PLANNING ------------------------------- */

Route::get('/employee-planning/{date}', function ($urlDate) {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('employee')->user();

    $category = allCategory();

    $thisEmployee = oneEmployee(Auth::user()->id);
    $manyTimeEvent = timeEventOfEmployee($thisEmployee->id);
    $manyAlldayEvent = alldayEventOfEmployee($thisEmployee->id);

    $week = getWeekArray($urlDate);

    return view('employee.employee-planning')
        ->with('manyTimeEvent', $manyTimeEvent)
        ->with('manyAlldayEvent', $manyAlldayEvent)
        ->with('category', $category)
        ->with('week', $week);
})->name('home');


/* --------------------------- ACCOUNT ------------------------------- */

Route::get('/employee-account/{date}', function ($urlDate) {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('employee')->user();

    $thisEmployee = oneEmployee(Auth::user()->id);
    $thisRetailStore = thisRetailStore($thisEmployee->retail_store_id);
    $company = oneCompany($thisRetailStore->company_id);
    $address = oneAddress($thisRetailStore->address_id);

    $week = getWeekArray($urlDate);

    return view('employee.employee-account')
        ->with('thisEmployee', $thisEmployee)
        ->with('company', $company)
        ->with('thisRetailStore', $thisRetailStore)
        ->with('address', $address)
        ->with('week', $week);
})->name('home');


/* --------------------------- Formulare ------------------------------- */

Route::post('/changeEmp', 'EmpController@update');

Route::post('/alldayEventCreate', 'EventController@addAlldayEvent');
Route::post('/timeEventCreate', 'EventController@addTimeEvent');
Route::post('/alldayEventDelete', 'EventController@deleteAlldayEvent');
Route::post('/timeEventDelete', 'EventController@deleteTimeEvent');




/* --------------------------- FOOTER ------------------------------- */

Route::get('/contact/{date}', function ($urlDate) {
    $week = getWeekArray($urlDate);
    return view('employee.contact')
        ->with('week', $week);
});

Route::get('/impressum/{date}', function ($urlDate) {
    $week = getWeekArray($urlDate);
    return view('employee.impressum')
        ->with('week', $week);
});

Route::get('/protection/{date}', function ($urlDate) {
    $week = getWeekArray($urlDate);
    return view('employee.protection')
        ->with('week', $week);
});





