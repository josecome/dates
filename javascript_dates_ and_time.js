//Javascript has date, built-in function to manipulate dates and time

//With the follow function is possible to get current date and time
new Date()

//Printing date to string
new Date().toDateString(); //Fri Sep 15 2023

//With date function and parameter is possible to cast string to date
new Date(date string)

//Print current date and time
const d = new Date();
print(d); //Fri Sep 15 2023 08:42:26 GMT+0200 (CEST)

//Print date given as string parameter
const d2 = new Date("2023-06-21");
print(d2); //Wed Jun 21 2023 02:00:00 GMT+0200 (CEST)

//Date function can also called with parameters as follow
new Date(year,month)
new Date(year,month,day)
new Date(year,month,day,hours)
new Date(year,month,day,hours,minutes)
new Date(year,month,day,hours,minutes,seconds)
new Date(year,month,day,hours,minutes,seconds,ms)


//Date function can also accept milliseconds as parameter
new Date(milliseconds)

//Can also cast date as follow
const d = new Date("September 15, 2023 08:52:24"); //Fri Sep 15 2023 08:52:24 GMT+0200 (CEST)


//With date we can get any part of date value
const date = new Date();

//Getting year
date.getFullYear() //Result: 2023

//All methods
getFullYear() //Get year as a four digit number (yyyy)
getMonth() //Get month as a number (0-11)
getDate() //Get day as a number (1-31)
getDay() //Get weekday as a number (0-6)
getHours() //Get hour (0-23)
getMinutes() //Get minute (0-59)
getSeconds() //Get second (0-59)
getMilliseconds() //Get millisecond (0-999)
getTime() //Get time (milliseconds since January 1, 1970)

//Formatting date
new Date().toLocaleDateString('en-us', { weekday:"long", year:"numeric", month:"short", day:"numeric"})  //September 15, 2023

//Customized format
//We can get different parts of date and join
const date = new Date()
const year = date.getFullYear()
const month = date.getMonth() + 1
const day = date.getDay()
print([year, month, day].join('-'))

//Return universal time
getUTCDate() //Returns the UTC date
getUTCFullYear() //Returns the UTC year
getUTCMonth() //Returns the UTC month
getUTCDay() //Returns the UTC day
getUTCHours() //Returns the UTC hour
getUTCMinutes() //Returns the UTC minutes
getUTCSeconds() //Returns the UTC seconds
getUTCMilliseconds() //Returns the UTC milliseconds

//The getTimezoneOffset() method returns the difference (in minutes) between local time an UTC time:
const date = new Date()
let diff = date.getTimezoneOffset();
print(diff) //-120

//The setDate() method sets the day of a date object (1-31)
const date = new Date();
date.setDate(12);
print(date) //Tue Sep 12 2023 09:23:05 GMT+0200 (CEST)

//Adding days
const date = new Date();
date.setDate(date.getDate() + 160);
print(date) //Thu Feb 22 2024 09:24:40 GMT+0100 (CET)

//Other methods
setHours(Parameter);
setMinutes(Parameter)
setMinutes(Parameter)
setSeconds(Parameter);

//Compare Dates
//Dates can be compared using if condition
if (date_a > date_b) {
  txt = "Date a is after date b";
} else {
  txt = "Date b is after date a";
}
