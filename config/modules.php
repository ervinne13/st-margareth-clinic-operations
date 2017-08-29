<?php

return [
    'tree' => [
        [
            "icon"    => "fa-hospital-o",
            "name"    => "OPD",
            "modules" => [
                ["code" => "CHR", "name" => "Child Health Records", "icon" => "fa-file-archive-o", "url" => "opd/child-health-record"],
                ["code" => "EODC", "name" => "End of Day Closing", "icon" => "fa-file-archive-o", "url" => "opd/end-of-day-closing"],
                ["code" => "CIO", "name" => "Cash In & Out", "icon" => "fa-file-archive-o", "url" => "opd/cash-in-out"],
            ]
        ],
        [
            "icon"    => "fa-dollar",
            "name"    => "Sales & Purchasing",
            "modules" => [
                ["code" => "SJ", "name" => "Sales Journal", "icon" => "fa-dollar", "url" => "sales/sales-journal"],
                ["code" => "PO", "name" => "Purchase Order", "icon" => "fa-shopping-cart", "url" => "purhasing/purchase-order"],
            ]
        ],
        [
            "icon"    => "fa-book",
            "name"    => "INV & ACCTG",
            "modules" => [
                ["code" => "SOF", "name" => "Source of Fund", "icon" => "fa-dollar", "url" => "accounting/source-of-fund"],
                ["code" => "AR", "name" => "Receivable", "icon" => "fa-file-archive-o", "url" => "accounting/accounts-receivable"],
                ["code" => "AP", "name" => "Payable", "icon" => "fa-file-archive-o", "url" => "accounting/accounts-payable"],
                ["code" => "IL", "name" => "Item Ledger", "icon" => "fa-archive", "url" => "inventory/item-ledger"],
            ]
        ],
        [
            "icon"    => "fa-file",
            "name"    => "Master Files",
            "modules" => [
                ["code" => "NS", "name" => "Number Series", "icon" => "fa-sort-numeric-asc", "url" => "master-files/number-series"],
                ["code" => "V", "name" => "Vaccines", "icon" => "fa-thermometer", "url" => "master-files/vaccine"],
                ["code" => "IT", "name" => "Item Type", "icon" => "fa-file-o", "url" => "master-files/item-type"],
                ["code" => "I", "name" => "Item", "icon" => "fa-file-o", "url" => "master-files/item"],
                ["code" => "UOM", "name" => "Unit Of Measurement", "icon" => "fa-balance-scale", "url" => "master-files/uom"],
                ["code" => "CUSTCAT", "name" => "Customer Category", "icon" => "fa-user", "url" => "master-files/customer-category"],
                ["code" => "CUST", "name" => "Customer", "icon" => "fa-users", "url" => "master-files/customer"],
                ["code" => "SUP", "name" => "Supplier", "icon" => "fa-users", "url" => "master-files/supplier"],
                ["code" => "EMP", "name" => "Employee", "icon" => "fa-vcard", "url" => "master-files/employee"],
                ["code" => "COM", "name" => "Company", "icon" => "fa-home", "url" => "master-files/company"],
                ["code" => "LOC", "name" => "Location", "icon" => "fa-map-marker", "url" => "master-files/location"],
            ]
        ],
        [
            "icon"    => "fa-lock",
            "name"    => "Security",
            "modules" => [
                ["code" => "UA", "name" => "User Accounts", "icon" => "fa-user", "url" => "master-files/user"],
                ["code" => "R", "name" => "Roles", "icon" => "fa-lock", "url" => "security/role"],
            ]
        ],
    ]
];
