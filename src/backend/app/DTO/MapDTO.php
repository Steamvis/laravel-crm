<?php

namespace App\DTO;

use App\Models\Car\Car;

/**
 * Class MapDTO
 * @package App\DTO
 */
class MapDTO
{
    private Car     $car;
    private string  $apiCode;
    private float   $latitude;
    private float   $longitude;
    private bool    $isStartRoute;
    private bool    $isEndRoute;

    public function __construct(
        Car $car,
        string $apiCode,
        float $latitude,
        float $longitude,
        bool $isStartRoute,
        bool $isEndRoute
    ) {
        $this->car = $car;
        $this->apiCode = $apiCode;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->isStartRoute = $isStartRoute;
        $this->isEndRoute = $isEndRoute;
    }

    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->car;
    }

    /**
     * @return string
     */
    public function getApiCode(): string
    {
        return $this->apiCode;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return bool
     */
    public function isStartRoute(): bool
    {
        return $this->isStartRoute;
    }

    /**
     * @return bool
     */
    public function isEndRoute(): bool
    {
        return $this->isEndRoute;
    }
}
