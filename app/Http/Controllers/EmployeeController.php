<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Devision;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $employees = Employee::with('devision'); // Initialize $employees

        if($request->has('search')){
            $search = '%' . $request->search . '%'; 
            $employees = $employees->where('name', 'like', $search)
            ->orWhere('email', 'like', $search)
            ->orWhere('address', 'like', $search)
            ->orWhere('position', 'like', $search);
        }
        
        $employees = $employees->paginate(20)->withQueryString(); // Fetch the results
        
        return view('employee.index', compact('employees'), ['title' => 'Dashboard']);
    }
    public function create()
    {
        $devisions = Devision::get();
        return view('employee.create', compact('devisions'), ['title' => 'Add Employee']);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Employee::create($input);

        return redirect()->route('employee');
    }

    public function edit(Request $request, Employee $employees)
    {
        $devisions = Devision::get();
        $employees = Employee::with('devision')->find($employees->id);
        return view('employee.update', compact('employees', 'devisions'), ['title' => 'Edit Employee']);
    }

    public function update(Request $request, Employee $employees)
    {
        $input = $request->all();
        $employees->update($input);

        return redirect()->route('employee');
    }

    public function delete(Employee $employees)
    {
        $employees->delete();

        return back();
    }
}