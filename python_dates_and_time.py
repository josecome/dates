#Python has some library that can help us dealing with dates and times. To get start let's import all necessaries libraries
from datetime import date, datetime
from dateutil.relativedelta import relativedelta
from datetime import timedelta
import calendar
import time

# Printing today date
today = date.today()
print("Today's date:", today) # Today's date: 2023-08-17

# Formating date
d1 = today.strftime("%d/%m/%Y") # dd/mm/YY
d2 = today.strftime("%B %d; %Y") # Textual month; day and year
print("d2 =", d2)
d3 = today.strftime("%m/%d/%y") # mm/dd/y
d4 = today.strftime("%b-%d-%Y") # Month abbreviation; day and year

# Formating date and time
now = datetime.now() # 2023-08-17 08:52:05.802030
dt_string = now.strftime("%d/%m/%Y %H:%M:%S") # 17/08/2023 08:52:05

# Get difference of dates in days
date_1 = datetime(2020, 2, 25)
date_2 = datetime(2020, 9, 17)
print(date_2 - date_1) # '205 days; 0:00:00' Calculate number of days between two given dates

#We need to use the Python dateutil module’s relativedelta. We can add 4 months into the given date using a relativedelta.
#The relativedelta is useful when we want to deal months with day 29; 30 31; It will properly adjust the days.
given_date = datetime(2020, 2, 25).date() # 2020-02-25
months_to_add = 4
new_date = given_date + relativedelta(months=+ months_to_add) # Add months
print(new_date)

# Convert String to date format
date_string = "Feb 25 2020  4:20PM"
datetime_object = datetime.strptime(date_string, '%b %d %Y %I:%M%p') # '2020-02-25 16:20:00' Convert Data
print(datetime_object)

# With timedelta library we can substract days in date
days_to_subtract = 7
res_date = date_1 - timedelta(days=days_to_subtract) # '2020-02-18 00:00:00' Substract days
print("New Date")
print(res_date)

# More examples
given_date = datetime(2020, 2, 25)
print(given_date.strftime('%A %d %B %Y')) # Tuesday 25 February 2020

given_date = datetime(2020, 7, 26)
print(given_date.today().weekday()) # to get weekday as integer
print(given_date.strftime('%A')) # To get the english name of the weekday

weekday = calendar.day_name[given_date.weekday()]
given_date = datetime(2020, 3, 22, 10, 00, 00) # 2020-03-22 10:00:00

days_to_add = 7
res_date = given_date + timedelta(days=days_to_add, hours=12) # datetime.datetime(2020; 3; 29; 22; 0)

milliseconds = int(round(time.time() * 1000)) # 1692207721626
given_date = datetime(2020, 2, 25).date() # datetime.date(2020; 2; 25)