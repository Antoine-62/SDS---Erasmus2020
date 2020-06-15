# Erasmus2020 SDS project : CELA

CELA is a web application wich will help Erasmus students to complete their Learning Agreement.

## Roles and responsabilities

* Antoine (Scrum Master and member of the Development team) is responsible for :  
1. making sure that communication works
2. making sure that the team organises every Scrum events (Sprint planning, Daily Scrum ...) with their time-box.
3. making sure that artifacs (product backlog) are transparency are understood by everyone
4. help the scrum teams to understand scrum
5. help the product owner to do the product backlog (ensuring the porduct owner knows how to arrange the Product Backlog to maximize value)
6. Coaching (and not managing) the development team
7. work on the product increment during each sprint (as a member of development team)

* Sila and Huseyin (Development team) are responsible for :
1. Making a defintion of "done"
2. help the product owner for the product backlog
3. Collaborate with the product owner to elaborate a sprint backlog
4. Define a sprint goal during the planning sprint
5. Work on the product increment during each sprint

* Sholpan (Product owner) is responsible for :
1. Maximizing the value of the product resulting from work of the development team
2. Managing the product backlog (clearly express items, ordering the product backlog ...)
3. Collaborate with development team and teachers to evolve the product backlog
4. Collaborate with development team to select item for spring backlog

## Communication strategy

During the project, the scrum team will use WhatsApp to communicate.  
To communicate with the teachers, the Scrum Team will use email.  
Naturally, we will do the sprint review by using zoom.

## Installation manual
**Requirement :** To run the application, you will need to have a local web server such as xampp or wampserver on your machine. In this description, we'll explain how to install the application with wampserver and xampp. 

### Retrieve the project
#### With Xampp
In your Xampp directory, go to the htdocs directory, create a new folder called "cela", then clone the project in this directory with following link :
```
git clone https://github.com/Antoine-62/SDS---Erasmus2020.git
```
Next, run Xampp (with *xampp-control.exe* located in the Xampp directory, launch apache and mysql modules).

#### With Wampserver
In your Wamp64 directory, go to the www directory, create a new folder called "cela", then clone the project in this directory with the link located in Xampp part.   
Then, run wamp64.
### Create the Database
#### With phpMyAdmin
Go to phpMyAdmin, then create a new database called **cela**, then import the script *cela.sql*, located in the script directory of the project. It will create the tables of our applications with some rows.

### Visit the website
Now that we have our project in the local web server and created our database, we can run visit our application on the following url :
```
http://localhost/cela
```
