<?php

use OpenAir\Base\BaseCommandClass;

class BillingSplit extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'splipid' => null, //The id of the slip that was created.
		'project_billing_transactionid' => null, //The ID of the associated
		'taskid' => null, //The ID of the associated task.
		'updated' => null, //Time the record was last modified.
		'created' => null, //Time the record was created.
    ];

    function __construct()
    {
        parent::__construct();
    }
}