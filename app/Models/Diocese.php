<?php
/**
 * Created by : Franklin Innocent F.
 * Email : franklininnocent.fs@gmail.com
 * Date: 1/10/2022
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diocese extends Model {
    use HasFactory;

    protected $table = 'diocese';
    protected $primaryKey = 'id';
    protected $fillable = ['country_id', 'state_id','diocese_name', 'active','active'];

}
