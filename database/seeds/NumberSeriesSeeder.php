<?php

use App\Modules\System\NumberSeries\NumberSeries;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NumberSeriesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $numberSeriesList = [
                ["CHR", "CHR"],
                ["C", "CUST"],
                ["S", "SUP"],
        ];

        $numberSeriesRows = [];
        foreach ( $numberSeriesList AS $numberSeries ) {
            $numberSeriesRows[] = [
                "code"                => $numberSeries[0],
                "module_code"         => $numberSeries[1],
                "effective_date"      => Carbon::now(),
                "year_prefix_format"  => "y",
                "uses_code_as_prefix" => true,
                "starting_number"     => 0,
                "ending_number"       => 99999,
                "last_number_used"    => 0,
            ];
        }

        NumberSeries::insert($numberSeriesRows);
    }

}
