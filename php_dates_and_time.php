<?php
//=========================================PHP Date and Time=========================================
//PHP has date() & time() built-in function to get date and time. Date and time are some of the most frequently used operations in PHP most while executing SQL queries.
//Printing today
echo date("d/m/Y"); //14/09/2023
echo date("d-m-Y"); //14-09-2023
echo date("d.m.Y"); //14.09.2023
echo date("d.M.Y/D"); //14.Sep.2023/Thu

//The means of each letter
d //Represents day of the month; two digits with leading zeros (01 or 31).
D //Represents day of the week in the text as an abbreviation (Mon to Sun).
m //Represents month in numbers with leading zeros (01 or 12).
M //Represents month in text, abbreviated (Jan to Dec).
y //Represents year in two digits (08 or 14).
Y //Represents year in four digits (2008 or 2014).

//Including or using time in date
echo date("h:i:s"); //09:07:47
echo date("M,d,Y h:i:s A"); //Sep,14,2023 09:08:02 AM
echo date("h:i a"); //09:08 am

//The means of each letter
h //Represents hour in 12-hour format with leading zeros (01 to 12).
H //Represents hour in 24-hour format with leading zeros (00 to 23).
i //Represents minutes with leading zeros (00 to 59).
s //Represents seconds with leading zeros (00 to 59).
a //Represents lowercase antemeridian and post meridian (am or pm).
A //Represents uppercase antemeridian and post meridian (AM or PM).

//With time() we can get current time as a Unix timestamp
echo time() //1694673689

//We can use date function with 2 parameters to get date and time. This meas that we need format and timestamp
$format = "F d, Y h:i:s A";
$timestamp = time();
echo date($format, $timestamp) //September 14, 2023 09:09:04 AM

//PHP mktime() Function is used to make timestamp of provided data
//Syntax:
//mktime(hour, minute, second, month, day, year)
echo mktime(18, 22, 44, 9, 14, 2023); //1694708564

//Set the default timezone to use.
date_default_timezone_set('UTC');


//Prints something like: Friday
echo date("l"); //Thursday

//More examples
echo date('l jS \of F Y h:i:s A'); //Thursday 14th of September 2023 08:56:26 AM
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)); //July 1, 2000 is on a Saturday
echo date(DATE_RFC2822); //Thu, 14 Sep 2023 08:57:34 +0200
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)); //2000-07-01T00:00:00+02:00
echo date('l \t\h\e jS'); //Thursday the 14th
echo mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")); //For Tomorrow
echo mktime(0, 0, 0, date("m")-1, date("d"),   date("Y")); //For last Month
echo mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1); //For next year
echo date("F j, Y, g:i a");                 //September 14, 2023, 9:01 am
echo date("m.d.y");                         //09.14.23
echo date("j, n, Y");                       //14, 9, 2023
echo date("Ymd");                           //20230914
echo date('h-i-s, j-m-y, it is w Day');     //05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo date('\i\t \i\s \t\h\e jS \d\a\y.');   //it is the 14th day.
echo date("D M j G:i:s T Y");               //Thu Sep 14 9:03:14 CEST 2023
echo date('H:m:s \m \i\s\ \m\o\n\t\h');     //09:09:34 m is month
echo date("H:i:s");                         //09:03:55
echo date("Y-m-d H:i:s");                   //2023-09-14 09:04:18