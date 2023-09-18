<?php

//Carbon package simplify the way we deal with data in PHP. To use Carbon we put the below line in the top of the file

use Carbon\Carbon;

//To get current time we can call one of this 2 options
$current = Carbon::now();
$current2 = new Carbon();

//To get today
$today = Carbon::today();

//Formatting
$current_date_time = Carbon::now()->toDateTimeString(); //Result: 2023-09-14 10:00:00
$current_timestamp = Carbon::now()->timestamp; //Result: 1694708564

//To get yesterday
$yesterday = Carbon::yesterday();

//To get tomorrow
$tomorrow = Carbon::tomorrow();

//With createFromDate() function we can add the follow parameters: $year, $month, $day, $tz (time zone):
Carbon::createFromDate($year, $month, $day, $tz);

//Also can be added time zone as parameters
Carbon::createFromTime($hour, $minute, $second, $tz);

//Manipulating the Date and Time

//Get current date
$current = Carbon::now();

//Now you can add 42 days to current date
$trialExpires = $current->addDays(42);

//Also is possible to add years


//It is possible to create date from parameters of integers
$dt = Carbon::create(2023, 9, 14, 0);

//Print created date
echo $dt->toDateTimeString();

//Also is possible to add year or even years
echo $dt->addYear();
echo $dt->addYears(2);
echo $dt->subYear();
echo $dt->subYears(2);

//Adding and substract month or months
echo $dt->addMonth();
echo $dt->addMonths(24);
echo $dt->subMonth();
echo $dt->subMonths(24);

//Adding and substract day and days
echo $dt->addDay();
echo $dt->addDays(29);
echo $dt->subDay();
echo $dt->subDays(29);

//Adding and substract week and weeks days
echo $dt->addWeekday();
echo $dt->addWeekdays(4);
echo $dt->subWeekday();
echo $dt->subWeekdays(4);

//Adding and substract week and weeks
echo $dt->addWeek();
echo $dt->addWeeks(3);
echo $dt->subWeek();
echo $dt->subWeeks(3);

//Adding and substract hour and hours
echo $dt->addHour();
echo $dt->addHours(24);
echo $dt->subHour();
echo $dt->subHours(24);
//Adding and substract minute and minutes
echo $dt->addMinute();
echo $dt->addMinutes(61);
echo $dt->subMinute();
echo $dt->subMinutes(61);

//Adding and substract second and seconds
echo $dt->addSecond();
echo $dt->addSeconds(61);
echo $dt->subSecond();
echo $dt->subSeconds(61);

//Print parameters from Carbon::now()
$dt = Carbon::now();
echo $dt->year;
echo $dt->month;
echo $dt->day;
echo $dt->hour;
echo $dt->second;
echo $dt->dayOfWeek;
echo $dt->dayOfYear;
echo $dt->weekOfMonth;
echo $dt->daysInMonth;

//Parse string to date
$date = "2023-09-14 10:00:00";
$date_from_string = new Carbon($date);


//Difference between two dates
$date = "2023-09-14 10:00:00";
$datework = new Carbon($date);

//Difference between dates
$date1 = Carbon::now();
$date2 = Carbon::now();
$diff = $date1->diffInDays($date2);