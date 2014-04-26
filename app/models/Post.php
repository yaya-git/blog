<?php

class Post extends \Eloquent {
    protected $fillable = [];
    
    
    protected $hidden = []; // se excluye del array los campos ejemplo: password.




    public function user(){
        return $this->belongsTo('User');
    }
    
}