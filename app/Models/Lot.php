<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
class Lot extends Model
{
    use HasFactory;
    //Table name
    protected $table = 'auction_lot';
    //Primary key
    public $primaryKey = 'id';
    //Time Stamps
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
