<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Asset extends Model
{
    use HasFactory;
    use LogsActivity;
    protected static $logName = 'Asset';
    protected static $logFillable = true;
    protected $fillable = [
        'asset_taq', 'name', 'model', 'serial', 'condition', 'warranty_months', 'receipt_date', 'purchase_date', 'purchase_cost', 'order_no', 'photo', 'notes', 'category_id', 'manufaktur_id', 'location_id', 'status_id', 'user_id', 'supplier_id'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Asset')
            ->logOnly(['asset_taq', 'name', 'model', 'serial', 'condition', 'warranty_months', 'receipt_date', 'purchase_date', 'purchase_cost', 'order_no', 'photo', 'notes', 'category_id', 'manufaktur_id', 'location_id', 'status.name'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(
                fn(string $eventName) => "This model has been {$eventName}"
            );
    }

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id', 'id')->withDefault(['name' => '-']);
    }

    public function manufaktur()
    {
        return $this->belongsTo(manufaktur::class,'manufaktur_id', 'id')->withDefault(['name' => '-']);
    }

    public function location()
    {
        return $this->belongsTo(location::class,'location_id', 'id')->withDefault(['name' => '-']);
    }

    public function status()
    {
        return $this->belongsTo(status::class,'status_id', 'id')->withDefault(['name' => '-']);
    }

    public function supplier()
    {
        return $this->belongsTo(supplier::class, 'supplier_id', 'id')->withdefault(['name'=> '-']);
    }

    public function documents()
    {
        return $this->hasMany(DokumenAsset::class);
    }

    
}
