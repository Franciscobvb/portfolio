<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class departamentos extends Authenticatable{
    protected $connection = 'nikkenla_marketing';
    protected $table = 'control_states';

    public $incrementing = false;
    public $timestamps = false;
}