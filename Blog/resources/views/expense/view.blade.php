@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
@endif
                <div class="card-header">
Add Expense
                </div>

                <div class="card-body">
                  <form class="form" action=" {{ url('expense/insert')  }} " method="post">
                    @csrf

  <label for="">Expense Reason</label>
  <input class="form-control" type="text" name="expense_Reason" >

  <label for="">Expense Amount</label>
  <input class="form-control" type="text" name= "expense_Amount" > <br>

  <button class="btn btn-success" type="submit">Submit </button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
