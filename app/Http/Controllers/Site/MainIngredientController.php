<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\MainIngredient\MainIngredientService;
use App\Http\Services\Brand\BrandService;
use App\Http\Services\Config\ConfigService;
use Illuminate\Http\Request;

class MainIngredientController extends Controller
{
    protected $mainIngredientService;
    protected $brandService;
    protected $configService;

    public function __construct(MainIngredientService $mainIngredientService, BrandService $brandService, ConfigService $configService)
    {
        $this->mainIngredientService = $mainIngredientService;
        $this->brandService = $brandService;
        $this->configService = $configService;
    }

    public function show()
    {
        $mainIngredients = $this->mainIngredientService->getAllMainIngredients();
        $brands = $this->brandService->getAllBrands();
        $config = $this->configService->getConfigInformationBySelectAttributes(['long_description_in_main_ingredients', 'description_in_main_ingredients']);

        return view('site.mainIngredient.show', [
            'mainIngredients' => $mainIngredients,
            'brands' => $brands,
            'config' => $config,
        ]);
    }
}
