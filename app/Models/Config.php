<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'top_content',
        'top_url',
        'right_menu_content_1',
        'right_menu_url_1',
        'right_menu_content_2',
        'right_menu_url_2',
        'description_in_main_ingredients',
        'long_description_in_main_ingredients',
        'see_more_url_in_main_ingredients',
        'warning_in_footer',
        'title_in_home_page_1',
        'icon_in_home_page_1',
        'title_1_in_footer',
        'title_2_in_footer',
        'title_3_in_footer',
        'title_4_in_footer',
        'free_exchange',
        'title_in_block_1',
        'sub_title_1_in_block_1',
        'sub_title_2_in_block_1',
        'title_in_block_2',
        'sub_title_1_in_block_2',
        'sub_title_2_in_block_2',
        'title_in_block_3',
        'sub_title_1_in_block_3',
        'sub_title_2_in_block_3',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'configs';
}