<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
     protected $fillable = ['expense_Reason', 'expense_Amount'];
}
