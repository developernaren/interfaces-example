<?php

namespace App\Prices;


class Boat
{


    public function handle(Booking $booking)
    {

        $price = Factory::create($booking);

        $price->setDates($booking->getDate());
        //you can set other things that can be set here
        //like lanuages and others

        if($price instanceof \HasSeason){
            //this does not have to be booking instance that provides the season
            //it can be other things. this is just and example
            $price->setSeason($booking->getSeason());
        }


        if($price instanceof \HasSkipper){
            //skipper can come from anything
            //other classes can be set like I have set the booking class here
            $price->addSkipper($skipper);
        }

        //this reduces code duplication
        //and also makes the dependency higher level(inversion of control)

    }


}
