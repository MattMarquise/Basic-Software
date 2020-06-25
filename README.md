# Basic-Software
This is a simplistic business management software using PHP, HTML, CSS, JS, and MYSQL. No frameworks. 

# USAGE
To run this software you will need to:
* Download each of the files.
* Create a DB. For reference I used mysql so the code is already set up for it.
  * Create a DB name
  * Create three tables with the names `customerList`, `orderList`, and `users`.
    * In the **customerList** table, add these fields: `id`, `customerId`, `customerName`, `email`, `mailAddress`, and `phoneNum`.
    * In the **orderList** table, add these fields: `id`, `customerName`, `email`, `orderInfo`, `quantity`, `price`, `shipAddress`, and `dateAdded`.
    * In the **users** table, add these fields: `id`, `userName`, `displayName`, `password`, and `created_at`.
    
  * Enter your DB info in the **cofig.php** file, as well as on line 131 in **ordersArchive.php** and line 168 in **customersInfo.php**.
* Input some random test data directly into your DB to check to see if you've properly connected your DB to the software files.

