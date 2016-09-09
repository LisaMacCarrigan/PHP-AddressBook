# PHP-AddressBook

#### An address book. 09.09.2016

#### By **Lisa MacCarrigan**

## Description

This is an address book application where you can store contact information for people you know.

## Specifications

#### 1. A user enters their first name and last name, selects 'Add', and is taken to a different page at the URL /create_contact, which displays their name.

* Example Input: First Name: Lisa
                 Last Name: MacCarrigan
* Example Output: You created a contact!
                  Full Name: Lisa MacCarrigan

#### 2. A user enters their phone number, selects 'Add', and is taken to a different page at the URL /create_contact, which displays their phone number.

* Example Input: Phone: 1112223333
* Example Output: You created a contact!
                  Full Name: Lisa MacCarrigan
                  Phone: 1112223333

#### 3. A user enters values for their Street, City, State, and Zipcode, selects 'Add', and is taken to a different page at the URL /create_contact, which displays these values.

* Example Input: Phone: 1112223333
* Example Output: You created a contact!
                  Full Name: Lisa MacCarrigan
                  Phone: 1112223333
                  Street: 215 Programmer Drive
                  City: Philadelphia
                  State: PA
                  Zipcode: 19122

## Setup/Installation Requirements

If editing:
* Clone this repository: https://github.com/LisaMacCarrigan/PHP-AddressBook.git
* OPEN project folder ('PHP-AddressBook') in Code Editor of choice
* Install and Configure PHP development environment - Please visit http://goo.gl/JDBJ0p for easy-to-follow instructions by Epicodus. In general, you will need to:
    * Download and Install 'MAMP' by visiting: https://www.mamp.info/en/downloads/. (Note: 'MAMP' comes pre-installed on MAC OS X)
    * Download and Install PHP package manager called 'Composer'
    * Inside of Terminal window, from the top level of your project folder, RUN the install command: > composer install
    * Inside of Terminal window, within the project's "web" folder, RUN the command: > php -S localhost:8000. Then, in a web browser, visit: http://localhost:8000/

## Known Bugs

No known bugs.

## Support and contact details

For comments or questions, please email Lisa.MacCarrigan@gmail.com

## Technologies Used

* HTML
* PHP
* Silex (PHP micro-framework)
* Twig (PHP template engine)
<!-- * CSS
* Bootstrap version 3.3.7. -->

### License

*This application is licensed under the MIT license*

Copyright (c) 2016 **Lisa MacCarrigan**
