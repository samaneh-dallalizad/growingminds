<?php


namespace App\DB;


use App\Exceptions\ClientNotFoundException;
use App\Models\Client;
use App\Models\Donation;

class DB
{
    /**
     * @param $name
     * @return Client
     * @throws ClientNotFoundException
     */
    public static function getClient($name): Client
    {
        $clients = json_decode(file_get_contents(__DIR__ . '/clients.json'));
        foreach ($clients as $client) {
            if ($client->name == $name) {
                return new Client($client->id, $client->name);
            }
        }
        throw new ClientNotFoundException("Cannot find client.");
    }

    /**
     * @param $client_id
     * @return array
     */
    public static function getDonations($client_id): array
    {
        $donations = json_decode(file_get_contents(__DIR__ . '/donations.json'));
        $ret = [];
        foreach ($donations as $donation) {
            if ($donation->client_id == $client_id) {
                $ret[] = new Donation($donation->id, $donation->client_id, $donation->currency, $donation->amount);
            }
        }
        return $ret;
    }
}