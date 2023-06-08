-for email verification you need to install MailHog :
MailHog is a simple and easy-to-use SMTP testing tool that allows you to catch and view emails sent from your application without actually sending them to real recipients.

 1 - Install MailHog by following the installation instructions specific to your operating system. You can find the installation instructions on the MailHog GitHub repository: https://github.com/mailhog/MailHog

 2 -  run this command in terminal :
       mailhog
       
 3 - add this in the .env file :
     MAILER_DSN=smtp://localhost:1025

