# Script Saver

I created this tool because while working and being in school, I found myself having scripts that I would have as "go-to" scripts and use more often than others.  
I found that I needed to either look through programs or files I have previously written or in notepad/txt files and search for the script I was looking for.  

This is so time-consuming and annoying, so I built myself a library for scripts.  

***I am still building this tool and more features and updates will be added.***  

**If you would like to use it please perform the following:**
- First clone the repo `https://github.com/j-bloom/script-saver.git`
- There is currently one repo so don't worry about checking out a different branch, just use `trunk`
- If you have a Database please feel free to use that, and make the appropriate changes in the `config.php` file. However, if you want to run this locally as a private library please perform the following steps:
  - create a MySQL database called `script_saver`
  - reproduce the "scripts" table by running
    ```CREATE TABLE `scripts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `language` varchar(255) NOT NULL,
  `development_type` varchar(255) NOT NULL,
  `task_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `script` text NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`))```

OR 

 - create a table through the UI and then run the following:  
    ```ALTER TABLE `scripts` ADD  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;```  
    in the "Run SQL Query" tab

- reproduce the "users" table by running
  ```CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`))```

OR  
  
- create the table in the UI and then run the following:  
  `ALTER TABLE users
  ADD UNIQUE (email);`

- Navigate to the folder/directory that the project is located (where you cloned the repository)
- Run the following: `php -S localhost:{port number you want to run the app on}`
  - I typically run `php -S localhost:8080`
- Navigate to http://localhost:8080/ and enjoy making your life easier by never having the search in different files trying to find that script!


## Here are some screenshots of the application
***More will be added and some will be changed as the build progresses***  
- Home Page
  ![image](https://github.com/user-attachments/assets/07d6b7a1-310b-4d70-82ff-f2d858980c71)

- List of Scripts
  ![image](https://github.com/user-attachments/assets/9793ba9f-4928-4ccb-86f7-76cfa3162022)

- Individual Script
  ![image](https://github.com/user-attachments/assets/279c69be-f61b-4128-a4ac-98f2bd74c7e7)

- Creating a new script
  ![image](https://github.com/user-attachments/assets/2b5c29b3-63da-422b-b0d1-f8e4691e40cb)

- The Error prompt when a field is forgotten
  ![image](https://github.com/user-attachments/assets/b49dae5e-df93-4ed7-b6d0-88f91d57fe06)

