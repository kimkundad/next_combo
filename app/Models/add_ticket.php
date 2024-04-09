<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_ticket extends Model
{
    use HasFactory;

    public function ticket_orders()
    {
      return $this->hasMany(ticket_order::class);
    }

    public function img_add_tickets()
    {
        return $this->hasMany('App\Models\img_add_ticket', 'add_ticket_id', 'id');
    }
}
