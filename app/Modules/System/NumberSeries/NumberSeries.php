<?php

namespace App\Modules\System\NumberSeries;

use App\Modules\System\Module\Module;
use Illuminate\Database\Eloquent\Model;

class NumberSeries extends Model
{

    public $incrementing  = false;
    protected $table      = "number_series";
    protected $primaryKey = "code";
    protected $fillable   = [
        "code",
        "module_code",
        "year_prefix_format",
        "effective_date",
        "starting_number",
        "ending_number",
        "last_number_used",
        "last_number_series_used",
        "last_date_used"
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['effective_date', 'last_date_used'];

    public function module()
    {
        return $this->belongsTo(Module::class, "module_code");
    }

    public function scopeCode($query, $code)
    {
        return $query->where("code", $code);
    }

}
