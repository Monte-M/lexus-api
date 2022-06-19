<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';

    protected $primaryKey = 'id';

    protected $fillable = [
        'branch',
        'city',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function salesmen()
    {
        return $this->hasMany(Salesmen::class);
    }
}
