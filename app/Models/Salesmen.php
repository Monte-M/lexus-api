<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesmen extends Model
{
    use HasFactory;

    protected $table = 'salesmen';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'branch_id',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
