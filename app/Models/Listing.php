<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    # you can also do this in the appserviceprovider which is in App/providers
    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'tags', 'description'];


    public function scopeFilter($query, array $filters) {

        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%')
            ->orWhere('company', 'like', '%' . request('search') . '%')
            ->orWhere('location', 'like', '%' . request('search') . '%')
            ->orWhere('email', 'like', '%' . request('search') . '%')
            ->orWhere('website', 'like', '%' . request('search') . '%');
        }
    }

    // relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
