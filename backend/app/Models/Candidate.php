<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['job_id', 'name', 'email', 'phone', 'skill_set'];

    protected $dates = ['deleted_at'];

    public function Job()
    {
        return $this->hasMany(Job::class, 'job_id', 'id');
    }
}
