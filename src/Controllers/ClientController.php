<?php

namespace App\Controllers;

use App\DB\DB;
use App\Exceptions\ClientNotFoundException;

class ClientController extends Controller
{
    /**
     * @param string $name
     * @return false|string
     * @throws ClientNotFoundException
     */
    public function getByName(string $name)
    {
        $this->validate([
            "name" => $name
        ], [
            "name" => "required|minLen:2|maxLen:10|regex:/^[[:alpha:]][[:alnum:]]+/"
        ]);

        $client = DB::getClient($name);
        return json_encode($client);
    }
}