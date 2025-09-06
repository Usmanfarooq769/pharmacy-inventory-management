<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Permission extends Model
{
   protected $fillable = ['name', 'display_name', 'description', 'module'];
    /**
     * The roles that belong to the permission.
     */

     public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permissions', 'permission_id', 'role_id')
                    ->withTimestamps();
    }

    // Define relationship with users through custom pivot table
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_permissions', 'permission_id', 'user_id')
                    ->withTimestamps();
    }
    public function scopeByModule($query, $module)
    {
        return $query->where('module', $module);
    }

    public static function getGroupedByModule()
    {
        return self::orderBy('module')->orderBy('name')->get()->groupBy('module');
    }

    public function getDisplayNameAttribute($value)
    {
        return $value ?: ucwords(str_replace(['-', '_'], ' ', $this->name));
    }
}
