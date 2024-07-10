<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tag');
    }
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
