<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kjmtrue\VietnamZone\Models\Ward;

class Company extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'tax_code',
        'logo',
        'favicon',
        'email',
        'map',
        'map_url',
        'hotline',
        'phone_number',
        'delivery_phone_number',
        'zalo_phone_number',
        'delivery_housenumber_street',
        'delivery_ward_id',
        'housenumber_street',
        'ward_id',
        'facebook_url',
        'zalo_url',
        'twitter_url',
        'youtube_url',
        'bank_name',
        'account_no',
        'survey_title',
        'survey_content',
        'survey_featured_image',
        'survey_img_1',
        'survey_img_2',
        'survey_img_3',
        'why_buy_in',
        'script_header',
        'script_body',
        'script_footer',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'companies';

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }

    public function deliveryWard()
    {
        return $this->belongsTo(Ward::class, 'delivery_ward_id', 'id');
    }
}