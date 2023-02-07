<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class DokumenAsset extends Model
{
    use LogsActivity;
    use HasFactory;
    protected static $logName = 'DokumenAsset';
    protected static $logFillable = true;
    protected $fillable = ['fileName', 'filePath', 'note', 'fileSize',  'asset_id'];
    protected $table = 'dokumen_assets';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('DokumenAsset')
            ->logOnly(['fileName', 'note', 'asset_id'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(
                fn(string $eventName) => "This model has been {$eventName}"
            );
    }
}
