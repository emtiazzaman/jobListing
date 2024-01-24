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
        'user_id' ,
        'experience' ,
        'job_type',
        'qualification'  ,
        'gender'  ,
        'yearly_salary',
        'vacancy',
        'description'
    ];

    //relationship to Category
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    //relationship to Category
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopeFilter($query, array $filters)
    { 
        //to check if tag get request isnt null or exist
        if( $filters['category_tag'] ?? false )
        {
            $query->where( 'category', 'like', '%'.request('category_tag'). '%'   );
        }
        else if ($filters['keyword'] ?? false ) 
        {   
            if(request('location')!='All' && request('category')!='All')
            {
                $query->where( 'job_title', 'like', '%'.request('keyword'). '%'   )
                ->where( 'location', 'like', '%'.request('location'). '%'   )
                ->where( 'category', 'like', '%'.request('category'). '%'   );
            }
            else if(request('location')=='All' && request('category')!='All')
            {
                $query->where( 'job_title', 'like', '%'.request('keyword'). '%'   )
                ->where( 'category', 'like', '%'.request('category'). '%'   );
            }
            else if(request('location')!='All' && request('category')=='All')
            {
                $query->where( 'job_title', 'like', '%'.request('keyword'). '%'   )
                ->where( 'location', 'like', '%'.request('location'). '%'   );
            }
            else{
                $query->where( 'job_title', 'like', '%'.request('keyword'). '%'   );
            }
        }
        
    }

}
