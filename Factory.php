<?php

namespace App\Prices;


class Factory
{

    public static function create(Booking $booking): \HasPrice
    {
        if ($booking->isHourly()){
            return new Hourly();
        }

        if ($booking->isCabinCharter()){
            return new Cabin();
        }

        return new Normal();
    }
}
