<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Account extends Model
{
    /** @use HasFactory<\Database\Factories\AccountFactory> */
    use HasApiTokens,HasFactory,Notifiable;

}
