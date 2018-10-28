@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
List Expense
                </div>

                <div class="card-body">
                  <table class="table table-striped">
                    <tr>
                      <th> SL</th>
                      <th> ID</th>
                      <th>Expense Reason</th>
                      <th>Expense Amount</th>
                      <th>Created At </th>
                      <th>Last Update time</th>


                      <th>Action</th>

                    </tr>
                    @php
                     $flag = 0;
                    @endphp
                    @foreach( $allExpenses as $expense)

                              <tr>
                                <td> {{ ++$flag }}</td>
                                <td> {{ ($allExpenses->currentPage()-1)*$allExpenses->count()+$flag }}</td>
                                <td> {{ $expense -> expense_Reason }}</td>
                                <td> {{ $expense ->  expense_Amount }}</td>
                                <td> {{ $expense ->  created_at  }}</td>
                                <td>
                                @if($expense ->  updated_at)
                                {{$expense ->  updated_at }}
                              @else
                              --------------
                            @endif</td>

                                <td>
                                  <a href="{{ url('expense/edit') }}/{{ $expense->id }}">Edit</a>
                                  | <a href="{{ url('expense/delete') }}/{{ $expense->id }}"> Delete </a>
                                </td>


                              </tr>

                    @endforeach



                  </table>

                  {{ $allExpenses->links() }}

                  <p>Total Expense: </p>

                  <br/>
                  <p>Element No. in this page: </p>
                  {{  $allExpenses->count() }} <br/>

              <p>Page no: </p>    {{  $allExpenses->currentPage() }} <br>
        <p>Total ELement input: </p>      {{  $allExpenses->total() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
