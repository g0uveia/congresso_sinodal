<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    public $timestamps = false;

    public function getAuthIdentifierName() {
        return 'username';
    }
    public function getAuthIdentifier() {
        return $this->username;
    }
    public function getAuthPassword() {
        return $this->password;
    }
    public function getRememberToken() {

    }
    public function setRememberToken($value) {

    }
    public function getRememberTokenName() {

    }
}
