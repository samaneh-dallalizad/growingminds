<?php

namespace App\Models;

class Donation extends Model
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $client_id;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var float
     */
    protected $amount;

    public function __construct(int $id, int $client_id, string $currency, float $amount)
    {
        $this->id = $id;
        $this->client_id = $client_id;
        $this->currency = $currency;
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getClientId(): int
    {
        return $this->client_id;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

}