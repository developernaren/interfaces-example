<?php

interface HasPrice
{


    //this interface can have general things a price can have
    //like languages and others
    //if the language has its own implementation it can be extracted into an interface,
    //but I think it is fine for the moment
    public function setDates($dates);


}
