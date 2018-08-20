<?php

namespace App\Prices;


use Carbon\Carbon;

class Booking
{

    private $typeId;
    private $startDate;
    private $endDate;


    public function isCabinCharter(): bool
    {
        return $this->typeId === PricingConstant::CABIN_CHARTER_ID;
    }

    public function isHourly() : bool
    {
        return $this->startDate->diffInDays($this->endDate) === 0;
    }

    public function getDate()
    {
        return Carbon::now();//this can be any date this is just example
    }

}
