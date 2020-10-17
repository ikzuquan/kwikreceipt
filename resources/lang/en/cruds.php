<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
        ],
    ],
    'currency'       => [
        'title'          => 'Currency',
        'title_singular' => 'Currency',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'code'                      => 'Code',
            'code_helper'               => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'enabled'                   => 'Enabled',
            'enabled_helper'            => ' ',
            'precision'                 => 'Precision',
            'precision_helper'          => ' ',
            'symbol'                    => 'Symbol',
            'symbol_helper'             => ' ',
            'symbol_first'              => 'Symbol First',
            'symbol_first_helper'       => ' ',
            'thousand_seperator'        => 'Thousand Seperator',
            'thousand_seperator_helper' => ' ',
            'decimal_mark'              => 'Decimal Mark',
            'decimal_mark_helper'       => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'setting'        => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'company_name'          => 'Company Name',
            'company_name_helper'   => ' ',
            'address'               => 'Address',
            'address_helper'        => ' ',
            'tel'                   => 'Tel',
            'tel_helper'            => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'fax'                   => 'Fax',
            'fax_helper'            => ' ',
            'currency'              => 'Currency',
            'currency_helper'       => ' ',
            'receipt_prefix'        => 'Receipt Prefix',
            'receipt_prefix_helper' => ' ',
            'number_digit'          => 'Number Digit',
            'number_digit_helper'   => ' ',
            'next_number'           => 'Next Number',
            'next_number_helper'    => ' ',
            'notes'                 => 'Notes',
            'notes_helper'          => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'receipt'        => [
        'title'          => 'Receipts',
        'title_singular' => 'Receipt',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'customer_name'         => 'Customer Name',
            'customer_name_helper'  => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'address'               => 'Address',
            'address_helper'        => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'date'                  => 'Date',
            'date_helper'           => ' ',
            'payment_method'        => 'Payment Method',
            'payment_method_helper' => ' ',
            'description'           => 'Description',
            'description_helper'    => ' ',
            'amount'                => 'Amount',
            'amount_helper'         => ' ',
            'discount'              => 'Discount',
            'discount_helper'       => ' ',
            'paid'                  => 'Paid',
            'paid_helper'           => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
            'reference'             => 'Reference',
            'reference_helper'      => ' ',
            'balance'               => 'Balance',
            'balance_helper'        => ' ',
        ],
    ],
];
