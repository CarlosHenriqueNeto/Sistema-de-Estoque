<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutosFornecedor extends Model
{
    use HasFactory;

    protected $table = "produto_fornecedor";

    protected $primarykey = "id";
    protected $fillable = ['id_produto','id_fornecedor'];
}
