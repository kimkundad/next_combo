<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class open_ticket extends Model
{
    use HasFactory;

    public function ticket_orders()
    {
      return $this->hasMany(ticket_order::class);
    }

    public function img_open_tickets()
    {
        return $this->hasMany('App\Models\img_open_ticket', 'open_ticket_id', 'id');
    }

    public function ask_open_tickets()
    {
        return $this->hasOne('App\Models\ask_open_ticket','ticket_orders_id','id');
    }
}
