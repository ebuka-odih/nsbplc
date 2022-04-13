<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function status()
    {
        if ($this->status < 0)
        {
            return "<span class='badge light badge-danger'>Declined</span>";
        }
        elseif($this->status == 0)
        {
            return "<span class='badge light badge-warning'>Pending</span>";
        }
        return "<span class='badge light badge-success'>Successful</span>";
    }


}
