<?php
namespace App\Models;

use App\DB\DB;

class Client extends Model
{

    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $donations;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->donations = DB::getDonations($this->id);

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getDonations(): array
    {
        return $this->donations;
    }

}