<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = [
        'make',
        'model',
        'engine',
        'price',
        'branch_id',

    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
