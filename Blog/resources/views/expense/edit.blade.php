@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
Edit Expense
                </div>

                <div class="card-body">
                  <form class="form" action=" {{ url('/expense/Update')  }} " method="post">
                    @csrf

  <label for="">Expense Reason</label>
  <input class="form-control" type="hidden" name="expense_id" value="{{ $individualExpense -> id}}" >
  <input class="form-control" type="text" name="expense_Reason" value="{{ $individualExpense -> expense_Reason}}" >

  <label for="">Expense Amount</label>
  <input class="form-control" type="text" name= "expense_Amount" value= "{{ $individualExpense -> expense_Amount}}" > <br>

  <button class="btn btn-warning" type="submit">Update </button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
