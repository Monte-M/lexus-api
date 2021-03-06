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
        'year',
        'branch_id',
        'salesmen_id'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function salesmen()
    {
        return $this->belongsTo(Salesmen::class);
    }
}
