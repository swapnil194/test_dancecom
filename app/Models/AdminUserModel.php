<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUserModel extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $table       = 'users'; 
    protected $guard_name  = 'admin';
}
