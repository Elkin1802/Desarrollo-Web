<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Proceso extends Model
{
    use HasFactory;

    protected $fillable = [

        'pro_prefijo',
        'pro_prefijo'

    ];

    public function documentos() {

        return $this->hasMany('App\Models\Doc_Documento', 'doc_id_rpoceso', 'id');
        
    }



}
