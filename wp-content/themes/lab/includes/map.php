<?php

//Carte Dynamique Page contact

$address = '1625 Hennepin Ave, Minneapolis, MN';
    
echo '<iframe frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>';