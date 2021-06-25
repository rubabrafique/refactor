**Code Refactoring Task**

## Thoughts on Code

Booking repository is a bit complex due to mulitple if conditions and quries to other models. It is having other models queries that can be done via their repective models.

It's good that using BaseRepository class to reduce duplication.

Notification function are moved to notifications helper and time convertion function move to CommonHelper. Repositories should have data access logics for its model not for anything else. 

Commented code has been removed as git will have all history and we can get previous code from there so no need to place commented code.


## How I try to refector the code?

**1.** I created RequestHelper class and used in BookingController distanceFeed function to reduce function lenght.

**2.** Created TranslatorRepository and UserRepository to use them in BookingRepository so that repective Model queries used from 
thrir repositry. 