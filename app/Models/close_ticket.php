<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class close_ticket extends Model
{
    use HasFactory;

    public function ticket_orders()
    {
      return $this->hasMany(ticket_order::class);
    }

    public function img_close_tickets()
    {
        return $this->hasMany('App\Models\img_close_ticket', 'close_ticket_id', 'id');
    }

    public function ask_close_tickets()
    {
        return $this->hasOne('App\Models\ask_close_ticket','ticket_orders_id','id');
    }
}

