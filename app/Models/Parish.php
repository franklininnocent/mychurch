<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parish extends Model {
    use HasFactory;

    protected $table = 'parish';
    protected $primaryKey = 'id';
    protected $fillable = ['parish_name', 'is_substation','address_line1', 'address_line2', 'place',
        'post_code','district_name','country_id','state_id','diocese_id', 'active'];

    public function diocese() {
        return $this->belongsTo('App\Models\Diocese', 'diocese_id')
            ->where('active', '=', true);
    }
}
