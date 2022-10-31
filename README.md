
# Hotel-Ordering-Application
 
## Abstract:
The food sector is extremely labour-intensive, and the cost of hiring the right people to accomplish the job is the most significant expense. One option to cut costs is to employ contemporary technology to automate some of the jobs that would otherwise be done by humans. We suggest an "Online Food Ordering System" in this project. An online food ordering system can be defined as software that allows restaurant businesses to accept and manage orders placed over the internet. The technique can be utilised in any industry that delivers meals. Because the entire process of processing orders is automated, this simplifies the food ordering procedure for both the client and the restaurant. The goal of this project is to create a Web-based ordering food application that includes New Order, Order History, Restaurant Profile, Order Status, Order Tracking, and Reviews/Feedbacks. This technique will enable hotels and restaurants to expand their company by lowering personnel costs. Customers pay with their credit cards, albeit they can be served even before making a cash or credit card payment. Our online ordering systems generally consist of 2 main components. First is a website for hungry customers to view the restaurant's dishes and place an online order. Second is an admin management interface for the restaurants to receive and manage the customer's orders.

## :heavy_check_mark: Modules:

1) Login/Sign UP
2) Online ordering  
3) Searching a restaurant
4) Payment
5) Order Tracking
6) Review/Rate a Restaurant/Food

## Forms used: 

* Signup Form
  * Admin Register form
  * Customer Register form
  * Delivery Agent Register form
* Login Form
  * Customer form
  * Forgot Password form
  * Delivery Agent form
  * Admin Form
  * OTP Form
* Address Form
  * Customer Addres form
  * Restaurant Address form
* Payment Form
  * Transfer details form
  * type of transfer form
* Feedback Form
  * Restaurant feedback form
  * Delivery Agent feedback form
  * Website feedback form

## Reports to be generated:                     
1) Transactions Report: Reviewing this report will allow to track production, see staff errors, calculate the loss of revenue
2) Food Report: Reviewing this report will allow us to track the most ordered ,least ordered and the categories .
3) Customer Report: Reviewing this report will allow us to track the customer details and their respective orders.
4) Average Daily Rate: Reviewing this report will allow you to benchmark your property.
5) User Feedback Report : Reviewing this report will allow us to improve the quality as well the service.

## Software tools for Building the App : 
* Visual Studio Code
* MariaDB Server (for MySQL)
* Reactjs

## Hardware tools for Building the App :
* Processor
* RAM
* Storage -SSD/HDD
* Monitor


## Tables:

Master Tables:

Customer Table : To Track the Customers who ordered the particular food.

            Customer_id (PK)

Employee Table : To track details of the employee.

            Employee_id (PK)

Menu Table : To track the quantity of the food.

            Menu_id (PK)

            Supplier Table : To track the number of suppliers and to keep track of the ordered food in  a particular hotel.

            Supplier_id (PK)

 

 ---------------------------------------------

 

Transaction Tables:

Payment Table : To have detailed information regarding the Payment made by the customer.

Payment_id (PK)

            Customer_id (FK)

            Order_id (FK)

            Food_id (FK)

            Supplier_id (FK)

            Payment_id (FK)  

---------------------------------------------------



OrderFood Table :  To track the details of the food to be delivered

            Order_id (PK)

            Payment_id (FK)

            Customer_id (FK)

---------------------------------------------------



Admin Table : To  Manage interface for the restaurants to receive and manage the customer's orders.

            Admin_id (PK)

            Customer_id (FK)

            Order_id (FK)

            Food_id (FK)

            Supplier_id (FK)

            Payment_id (FK)  

            Employee_id (FK)



----------------------------------------------------

 

 

Login Table: Add new users to the application and allow access using Customer id and Password.

            Customer Id (FK)

            Admin Id(FK)

            Password
            
            
## Requirements
1.Customer:  

* Search Foods/Restaurants 
* Offers Section (High to Low Discount)
* Filter based on food types i.e., Beverages, Snacks, Meals etc..,
* Find Food/restaurant closer to his/her location
* List of Popular Foods
* Enter the location(Update)
* Status of the Order(View)
* Feedback(update)
 
2.Restaurants:

* Specifies the menu item present in the particular restaurant.(Modify)
* Add quantity when available (Modify)
* Delete quantity when not available (Modify)
* Enter the determined prize (Modify)
* Mentioning the opening and closing time of the Restaurant (Modify)
* Monthly payment details and billing system for that restaurant's purchase.(View)
* Contract details per year between the restaurant and Delivery Company.(View)
* Images of the Restaurants(update)
 
3.Delivery Agent:

* Location of the Restaurant(View)
* Location of the Customer(View)
* Ordered time(View)
* Payment status made by the customer should be updated.(Update)
* Status of the Order(Modify)Delivered,Onprogress,dispatch from Restaurant,yet to Dispatch.
* Feedback(view)

## Contributors:

1) B Vignesh
2) Oviya B
3) Raghul K B
4) V Devakumar
5) V Nithin Krishna
