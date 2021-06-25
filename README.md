# robotic_Arm_Control
A webpage to control a robotic arm with 6 engines. 
This repository is a part of the training at Smart Methods, and it is to control a robotic arm with 6 engines. 
<br>
Content:
Index.php page has 6 sliders which represent the values to be entered by the end-user to control the arm these values range from 0-180. Then we have a save button which stores the values and the status of 0 which is the off state for the arm in the database. Then the user should press the start button then they will be directed to another page which will show the results that should be read by the end-user.

<br>
connect.php page is used to connect to the database.
updatedb.php page is used when the user click save in index.php page and it will update the values in the database with the current values of the sliders which will be received using get method. 

<br>
startarm.php page is used to read the last values entered when clicking start in index.php page and it will show the values of the engines starting from engine 1 to engine6 separated by a comma and the status of the arm if it is off it will be 0 if it is on it will be 1. 
<br>


Database has 8 columns 6 for the engines values 1 for the state and 1 for the entry which is always 1. 
The user needs to use xampp or a program with similar functions and host the database where they need to import the provided file etable.sql so, the first entry is created and to be updated. 
 
