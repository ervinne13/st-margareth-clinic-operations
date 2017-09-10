<?php

use App\Modules\MasterFile\Customer\Customer;
use App\Modules\MasterFile\Customer\CustomerCategory;
use App\Modules\System\NumberSeries\Repository\NumberSeriesRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class CustomersSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $NSRepo = App::make(NumberSeriesRepository::class);

        $customerCategories = [
                ["code" => "OPD", "display_name" => "OPD Patients"],
                ["code" => "EXT", "display_name" => "Doctors/Hospitals"],
        ];

        CustomerCategory::insert($customerCategories);

        $customers = [
                ["OPD", "OPD Local Customer", "7 Estanislao St. Lakeview Homes, Putatan, Muntinlupa City"],
                ["OPD", "PHARMA", ""],
                ["EXT", "Ospital ng Muntinlupa", "Civic Drive Filinvest Ave Corporate City, Alabang, Muntinlupa, 1780 Metro Manila"],
                ["EXT", "Asian Hospital & Medical Center", "2205 Civic Dr, Alabang, Muntinlupa, 1780 Metro Manila"],
                ["EXT", "Medical Center Muntinlupa", "Putatan, Muntinlupa, Metro Manila"]
        ];

        $customerRows = [];
        foreach ( $customers AS $customer ) {
            $customerRows [] = [
                "identifier"    => $NSRepo->claimNextAvailableNumber(Customer::NS_CODE),
                "category_code" => $customer[0],
                "display_name"  => $customer[1],
                "address"       => $customer[2]
            ];
        }

        Customer::insert($customerRows);
    }

}
