<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;


class Question extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::orderedUuid();
        });
    }

    use Notifiable;

    protected $fillable = [
        
    ];

    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }

    public function answers(){
        return $this->hasMany('App\Answer','question_id','id');
    }

}
