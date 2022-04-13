<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    //
    protected $guarded = [];
    protected $appends = ['withdraw_id'];

    public function status()
    {
        if ($this->status < 0)
        {
            return "<span class='badge light badge-danger'>Canceled</span>";
        }elseif($this->status == 0)
        {
            return "<span class='badge light badge-warning'>Pending</span>";
        }
        return "<span class='badge light badge-success'>Successful</span>";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getWithdrawIdAttribute()
    {
        return "NSB0".$this->id.'XCP10';
    }


}
