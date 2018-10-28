<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use  Carbon\Carbon;

class ExpenseController extends Controller
{
    function expenseview()
    {
  return view('expense/view');
    }
    function expenseinsert()
{
  Expense::insert([
    'expense_Reason' => $_POST [ 'expense_Reason' ],
    'expense_Amount' =>  $_POST [ 'expense_Amount' ],
    'created_at' => Carbon::now('Asia/Dhaka')
  ]);
  return back() ->with('status', 'Expense added successfully!');

 }
 function expenselistview()
 {
   $allExpenses =  Expense::paginate(5);;
return view('expense/list', compact ('allExpenses')) ;

}
function expenseedit( $expense_id)
{
$individualExpense = Expense::select('expense_Reason', 'id', 'expense_Amount') -> findOrFail($expense_id) ;
  return view ('expense/edit', compact('individualExpense' ));
}
function expenseUpdate( )
{
  Expense::findOrFail( $_POST [ 'expense_id' ] ) -> Update([
    'expense_Reason' => $_POST [ 'expense_Reason' ],
    'expense_Amount' =>  $_POST [ 'expense_Amount' ],

  ]);
  return redirect ('home');
}
function expensedelete($expense_id )
{
  Expense::findOrFail(  $expense_id)->delete();
  return redirect ('expense/list/view');
}
}
