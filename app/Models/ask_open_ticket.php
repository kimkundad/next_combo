<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ask_open_ticket extends Model
{
    use HasFactory;

    public function open_tickets()
    {
      return $this->belongsTo(open_ticket::class);
    }
}
