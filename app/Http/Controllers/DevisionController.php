<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Devision;
use App\Models\Employee;
use Illuminate\Http\Request;

class DevisionController extends Controller
{
    public function index(Devision $devision, Employee $employee)
    {
        $devisions = Devision::get();
        $employees = Employee::get();
        return view('devision.index', compact('devisions', 'employees'), ['title' => 'Devision']);
    }

    public function create()
    {
        return view('devision.create', ['title' => 'Devision Create']);
    }

    public function store(Request $request)
    {
        Devision::create($request->all());

        return redirect()->route('devision');
    }

    public function delete(Employee $employee)
    {
        $employee->delete();

        return back();
    }


    public function devisionChance(Request $request)
    {   $employeeId = $request['add_employee'];
        $employee = Employee::find($employeeId);
        // validasi
        $input = $request->validate([
            'devision_id' => 'required|integer',
        ]);

        $employee->update([
            'devision_id' => $input['devision_id']
        ]);

        return redirect()->route('devision');
    }
}
