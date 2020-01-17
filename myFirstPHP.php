<!doctype html>
    <html>
        <head>
            <title>Hello World</title>
        </head>
        
        <body>
            <?php
                // This is my first PHP document, which displays some data in the web browser
                
                // Assign my name as a string into the variable labeled myName
                $myName = 'Vu Truong';
            
                // Assign 53870 numeric value into the variable named randomNumber
                $randomNumber = 53870;
            
                // Assign the name of the web browser and operating system of the user accessing the file into the variable named userAgent (Unit Objective 2)
                $userAgent = $_SERVER['HTTP_USER_AGENT'];
            
                // Assign the file name of the currently running script into the variable named fileName (Unit Objective 3)
                $fileName = $_SERVER['PHP_SELF'];
            
                //Assign the IP address from which the user is viewing the current page into the variable named ipAddress (Unit Objective 3)
                $ipAddress = $_SERVER['REMOTE_ADDR']; 

                // Displaying variables 
                echo $myName;
                echo $randomNumber.'<br>';
                echo $userAgent.'<br>';
                echo $fileName.'<br>';
                echo $ipAddress.'<br>';
            ?>
        </body>
    </html>