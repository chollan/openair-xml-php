<?php

use OpenAir\Base\BaseCommandClass;

class InvoiceLayout extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //Name The name used for display in popups and lists.
		'created' => null, //Created Time the record was created.
		'updated' => null, //Updated Time the record was last modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}