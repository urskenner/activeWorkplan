<?php

namespace App\Http\Controllers;


use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Employee;
use App\Role;
use App\Contract;
use Validator;


use Illuminate\Http\Request;

class EmpController extends Controller
{

//Admin legt user an
    public function create(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
            'name' => 'required|max:255|',
            'forename' => 'required|max:255|',
            'email' => 'required|email|max:255|unique:employees',
            'roleid' => 'required|max:255|',
            'working_hours' => 'required|integer|max:255|',
        ]);

        $retailStore = DB::table('retail_store')
            ->where('retail_store.name', $request['retail_store_name'])
            ->get()[0];

        $role = Role::firstOrCreate(array(
            'name' => $request['roleid']
        ));

        $contracts = Contract::create([
            'period_of_agreement' => $request['period_of_agreement'],
            'working_hours' => $request['working_hours'],
            'classification' => $request['classification'],
            'role_id' => $role->id,

        ]);

        $thisEmployee = Employee::create([
            'name' => $request['name'],
            'forename' => $request['forename'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'retail_store_id' => $retailStore->id,
            'contract_id' => $contracts->id,
        ]);

        flash('Employee added', 'success');
        return redirect('/admin/planning-employee/' . $thisEmployee->id . '/' . $request['thisDate']);
    }


//User ändert seine eigenen Werte
    public function update(Request $request)
    {
        $employee = Employee::find(Auth::user()->id);

        $this->validate($request, [

            'forename' => 'required|max:255',
            'name' => 'required|max:255',

        ]);

        Employee::where('employees.id', $employee->id)
            ->update(array(
                'forename' => $request['forename'],
                'name' => $request['name'],
            ));

        $request->session()->flash('status', 'Task was successful!');

        flash('Change successful', 'success');
        return redirect('/employee/account/' . $request['thisDate']);
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old-password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        if (Hash::check($request['old-password'], Auth::user()->password)) {
            $user = Employee::find(Auth::user()->id);

            Employee::where('employees.id', $user->id)
                ->update(array(
                    'password' => Hash::make($request['password']),
                ));

            flash('Password change successful', 'success');
            return redirect('/employee/account/' . $request['thisDate']);
        }

        flash('Wrong password', 'danger');
        return redirect('/employee/account/' . $request['thisDate']);
    }

    public function updateEmail(Request $request)
    {
        $employee = Employee::find(Auth::user()->id);


        Employee::where('employees.id', $employee->id)
            ->update(array(
                'email' => $request['email'],
            ));

        flash('E-Mail change successful', 'success');
        return redirect('/employee/account/' . $request['thisDate']);
    }

//Admin löscht user
    public function delete(Request $request)
    {

        $employee = DB::table('employees')
            ->where('employees.id', $request['thisEmployeeId']);

        $contracts = DB::table('contract')
            ->select('contract.*')
            ->where('contract.id', $employee->get()[0]->contract_id);

        $roles = DB::table('role')
            ->select('role.*')
            ->join('contract', 'contract.role_id', '=', 'role.id')
            ->join('employees', 'employees.contract_id', '=', 'contract.id')
            ->join('retail_store', 'retail_store.id', '=', 'employees.retail_store_id')
            ->where('employees.id', $employee->get()[0]->id);

        $calendarEvent = DB::table('calendar_event')
            ->select('calendar_event.*')
            ->join('employees', 'employees.id', '=', 'time_event.employee_id')
            ->join('retail_store', 'retail_store.id', '=', 'employees.retail_store_id')
            ->where('employees.id', $employee->get()[0]->id);

        $company = DB::table('company')
            ->where('company.admin_id', Auth::user()->id)
            ->get()[0];


        $allRetailStores = DB::table('retail_store')
            ->where('retail_store.company_id', $company->id)
            ->get();

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $calendarEvent->delete();
        $employee->delete();
        $contracts->delete();
        $roles->delete();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');


        flash('Store delete successful', 'success');
        return redirect('/admin/planning-store/' . $allRetailStores[0]->id . '/' . $request['thisDate']);

    }

//Admin ändert User
    public function change(Request $request)
    {
        $employee = DB::table('employees')
            ->where('employees.id', $request['thisEmployeeId'])
            ->get()[0];

        $this->validate($request, [
            'name' => 'required|max:255|',
            'forename' => 'required|max:255|',
            'role' => 'required|max:255|',
            'working_hours' => 'required|integer|max:255|',
        ]);

        $contract = DB::table('contract')
            ->join('employees', 'employees.contract_id', '=', 'contract.id')
            ->where('employees.id', $employee->id)
            ->get()[0];

        $retailStore = DB::table('retail_store')
            ->where('retail_store.name', $request['retail_store_value'])
            ->get()[0];

        Employee::where('employees.id', $employee->id)
            ->update(array(
                'forename' => $request['forename'],
                'name' => $request['name'],
                'retail_store_id' => $retailStore->id
            ));

        Contract::where('contract.id', $employee->contract_id)
            ->update(array(
                'period_of_agreement' => $request['agreement'],
                'classification' => $request['classification'],
                'working_hours' => $request['working_hours']
            ));

        Role::where('role.id', $contract->role_id)
            ->update(array(
                'name' => $request['role'],
            ));


        flash('Employee change successful', 'success');

        return redirect('/admin/planning-employee/' . $employee->id . '/' . $request['thisDate']);


    }

    public function changeEmail(Request $request)
    {
        $employee = DB::table('employees')
            ->where('employees.id', $request['thisEmployeeId']);

        $this->validate($request, [
            'email' => 'required|email|max:255|unique:employees',
        ]);

        Employee::where('employees.id', $employee->id)
            ->update(array(
                'email' => $request['email'],
            ))[0];

        flash('E-Mail change successful', 'success');

        return redirect('/admin/planning-employee/' . $employee->id . '/' . $request['thisDate']);
    }


    public function changePassword(Request $request)
    {
        $employee = DB::table('employees')
            ->where('employees.id', $request['thisEmployeeId']);

        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
        ]);

        Employee::where('employees.id', $employee->id)
            ->update(array(
                'password' => Hash::make($request['password']),
            ))[0];

        flash('Password change successful', 'success');
        return redirect('/admin/planning-employee/' . $employee->id . '/' . $request['thisDate']);
    }
}