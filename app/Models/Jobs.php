<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'name',
        'job_title',
        'logo'  ,
        'location',
        'category' ,
        'category_id' ,
        'experience' ,
        'job_type',
        'qualification'  ,
        'gender'  ,
        'yearly_salary',
        'vacancy',
        'description'
    ];

    //relationship to Category
    public function user()
    {
        return $this->belongsTo(user::class,'category_id');
    }



}
