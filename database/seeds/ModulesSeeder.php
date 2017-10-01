<?php

use App\Modules\System\Module\Module;
use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $modules = [
            //  Security
            ["code" => "UA", "max_access_level" => 3, "display_name" => "User Account"],
            ["code" => "R", "max_access_level" => 3, "display_name" => "Role"],
            //  Master Files (Logistics)
            ["code" => "COM", "max_access_level" => 3, "display_name" => "Company"],
            ["code" => "LOC", "max_access_level" => 3, "display_name" => "Location"],
            //  Master Files (System)
            ["code" => "NS", "max_access_level" => 3, "display_name" => "Number Series"],
            ["code" => "CUSTCAT", "max_access_level" => 3, "display_name" => "Customer Category"],
            ["code" => "CUST", "max_access_level" => 3, "display_name" => "Customer"], //  will use customer accounts as debtor as well            
            ["code" => "SUP", "max_access_level" => 3, "display_name" => "Supplier"], //  will use supplier accounts as creditor as well
            ["code" => "EMP", "max_access_level" => 3, "display_name" => "Employee"],
            //  Master Files (Inventory)
            ["code" => "IT", "max_access_level" => 3, "display_name" => "Item Type"],
            ["code" => "I", "max_access_level" => 3, "display_name" => "Item"],
            //  Modules (Purchasing & Sales)
            ["code" => "PO", "max_access_level" => 3, "display_name" => "Purchase Order"],
            ["code" => "SJ", "max_access_level" => 3, "display_name" => "Sales Journal"],
            //  Modules (Operations)
            ["code" => "EODC", "max_access_level" => 3, "display_name" => "End of Day Closing"],
            ["code" => "CHR", "max_access_level" => 3, "display_name" => "Child Health Records"],
            //  Accounting
            ["code" => "IL", "max_access_level" => 1, "display_name" => "Item Ledger"],
            ["code" => "AR", "max_access_level" => 1, "display_name" => "Accounts Receivable"],
            ["code" => "AP", "max_access_level" => 1, "display_name" => "Accounts Payable"],
            //  Modules (Cash Flow)
            ["code" => "SOF", "max_access_level" => 3, "display_name" => "Soure of Fund"],
            ["code" => "CIO", "max_access_level" => 3, "display_name" => "Cash In & Out"],
        ];

        Module::insert($modules);
    }

}
