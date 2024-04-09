<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class ticket_order extends Model
{
    use HasFactory;

  
    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function open_tickets()
    {
        return $this->belongsTo('App\Models\open_ticket','open_ticket','id');
    }

    public function close_tickets()
    {
        return $this->belongsTo('App\Models\close_ticket','close_ticket','id');
    }

    public function add_tickets()
    {
        return $this->belongsTo('App\Models\add_ticket','add_ticket','id');
    }

}
