<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Payroll;
use App\Models\Employee;
use App\User;

class PayrollController extends Controller
{

        
    public function paygroup_index(){
      
        $payroll = Payroll::all()[0];
        
    	$employees_with_payroll = Employee::where('payroll_id',1)->count();
    		  
      	return view('hrms.payroll.paygroup.index',compact('payroll','employees_with_payroll'));
    }
 
    public function paygroup_show() {

    	$payroll = Payroll::all()[0];
        
        return view('hrms.payroll.paygroup.show',compact('payroll'));
    }
 
    public function showEmployee(Request $request) {
 
        if($request->input('department')){
            
            if($request->input('department') == 'All Department'){
                
                $dep = $request->input('department');

                $emp_data = Employee::all();

                return view('hrms.payroll.paygroup.table_generator', compact('emp_data'));

            } else {
                
                $dep = $request->input('department');

                $emp_data = Employee::where('department', $dep)->get();
           
                return view('hrms.payroll.paygroup.table_generator', compact('emp_data'));
            }

        }
        else {
            
            $payroll = Payroll::find(1);
            
            $emp_data = $payroll->employee_payroll;
            
            return view('hrms.payroll.paygroup.employee_list',compact('payroll','emp_data'));
        }
    }

    public function edit_payroll($id) {

        $payroll = Payroll::find($id);

        return view('hrms.payroll.paygroup.payroll_update', compact('payroll'));
        
    }

    public function update_payroll(Request $request) {
        
        $payroll = Payroll::find($request->id);

        $payroll->name = $request->input('name');
        $payroll->code = $request->input('code');
        $payroll->value = $request->input('value');
        $payroll->save();
        
        return redirect(url('payroll-show'));        
        
    }

    public function remove_employee(Request $request) {
         
        $emp = User::find($request->id);
        $delete = $emp->delete();
        return response()->json($delete); 
    }


}
