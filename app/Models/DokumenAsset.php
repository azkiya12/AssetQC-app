<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenAsset extends Model
{
    use HasFactory;
    protected $fillable = ['fileName', 'filePath', 'note', 'fileSize',  'asset_id'];
    protected $table = 'dokumen_assets';
}
