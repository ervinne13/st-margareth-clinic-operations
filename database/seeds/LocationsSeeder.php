<?php

use App\Modules\System\Location\Company;
use App\Modules\System\Location\Location;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCompanies();
        $this->createLocations();
    }

    private function createCompanies()
    {
        $companies = [
                ["SMMC", "St. Margareth Medical Clinic", "7 Estanislao St. Lakeview Homes, Putatan, Muntinlupa City"],
                ["OSMUN", "Ospital ng Muntinlupa", "Civic Drive Filinvest Ave Corporate City, Alabang, Muntinlupa, 1780 Metro Manila"],
                ["ASIAN", "Asian Hospital & Medical Center", "2205 Civic Dr, Alabang, Muntinlupa, 1780 Metro Manila"],
                ["MCM", "Medical Center Muntinlupa", "Putatan, Muntinlupa, Metro Manila"]
        ];

        $companyRows = [];
        foreach ( $companies AS $company ) {
            $companyRows[] = [
                "code"            => $company[0],
                "display_name"    => $company[1],
                "address"         => $company[2],
                "mode_of_costing" => "FIFO",
            ];
        }

        Company::insert($companyRows);
    }

    private function createLocations()
    {
        $locations = [
                ["PHARMA", "SMMC", "PHARMA"],
                ["OPD", "SMMC", "Out Patient Department"],
                ["OSMUN", "OSMUN", "Ospital ng Muntinlupa"],
                ["ASIAN", "ASIAN", "Asian Hospital & Medical Center"],
                ["MCM", "MCM", "Medical Center Muntinlupa"],
        ];

        $locationRows = [];
        foreach ( $locations AS $location ) {
            $locationRows[] = [
                "code"         => $location[0],
                "company_code" => $location[1],
                "display_name" => $location[2],
            ];
        }

        Location::insert($locationRows);
    }

}
