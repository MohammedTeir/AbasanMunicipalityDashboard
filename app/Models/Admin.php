<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function image(){
        return $this->morphOne(Image::class , 'imageable');
    }

    public function getLastLoginAttribute()
    {

        $lastLogin = new Carbon($this->last_login_at);
        $now = Carbon::now();

        if ($this->last_login_at == null) {
            return 'Never logged in';
        }

        // Check if the last login was less than a minute ago
        if ($now->diffInSeconds($lastLogin) < 60) {
            return 'active now';
        }

        // Check if the last login was less than an hour ago
        if ($now->diffInMinutes($lastLogin) < 60) {
            return $now->diffInMinutes($lastLogin) . ' mins ago';
        }

        // Check if the last login was less than a day ago
        if ($now->diffInHours($lastLogin) < 24) {
            return $now->diffInHours($lastLogin) . ' hours ago';
        }

        // Check if the last login was less than a week ago
        if ($now->diffInDays($lastLogin) < 7) {
            return $now->diffInDays($lastLogin) . ' days ago';
        }

        // Check if the last login was less than a month ago
        if ($now->diffInWeeks($lastLogin) < 4) {
            return $now->diffInWeeks($lastLogin) . ' weeks ago';
        }

        // Otherwise, return the date in a readable format
        return $lastLogin->format('M jS, Y');

    }


    public function getImageUrlAttribute(){

        if ($this->image) {
            return url(Storage::url($this->image->url));
        } else {
            return null;
        }
    }

    public function getStatusBadgeAttribute()
    {
        switch ($this->status) {
            case 'active':
                return '<div class="badge bg-success text-white fw-bold" data-order="active">Active</div>';
            case 'disabled':
                return '<div class="badge bg-warning text-white fw-bold" data-order="disabled">Disabled</div>';
            case 'deleted':
                return '<div class="badge bg-danger text-white fw-bold" data-order="deleted">Deleted</div>';
            default:
                return '';
        }
    }

    public function getJoinedDateAttribute()
    {
        return $this->created_at->format('d M Y, g:i a');
    }

    public function getLastLoginFormatAttribute()
    {
        $datetime = new DateTime($this->last_login_at);
        return $datetime->format('d M Y, g:i a');
    }

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->withTrashed()->where($field ?? $this->getRouteKeyName(), $value)->firstOrFail();
    }

}

