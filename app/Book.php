<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $dates = ['created_at'];

    protected $appends = ['formatted_libraries', 'formatted_created'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function libraries()
    {
        return $this->belongsToMany(Library::class);
    }

    public function getFormattedCreatedAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

    public function getFormattedLibrariesAttribute()
    {
        if ($this->libraries->count())
        {
            $data = [];
            foreach ($this->libraries as $library)
            {
                array_push($data, $library->name);
            }
            return implode(', ', $data);
        }
        return '';
    }

}
