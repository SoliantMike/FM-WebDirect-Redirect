FM-WebDirect-Redirect
=====================

Another common request from developers is to change where the user is directed to when logging out of a WebDirect session. The default is to return the WebDirect Launch Center, which shows available WebDirect enabled FileMaker files. 

These PHP files are meant to make that easier to manage and to allow for dynamically specifying the redirect location when exiting a WebDirect session. By storing a PHP session variable and referencing it when exiting a session, we can set the location from FileMaker WebDirect and change the value as needed.

The included FileMaker file "WebDirect_Demo.fmp12" is referneced in the PHP script "in.php" to pass in any parameter and set the homeurl to "out.php" when exiting the session. To use the file, the default username and password is:

user: admin
pass: admin

You can test as a user when logging in via WebDirect with the following:

user: demo
pass: demo

These can be changed as needed, and taken down from your FileMaker Server when done. Update the php to use with your own solutions.

If the PHP files are hosted on a different web server than the FileMaker Server, you will need to update the FileMaker script steps that reference "Get ( HostName )" with the address of where the PHP files are hosted.

John Howell demonstrated this in his 2019 DevCon session, if you want to see his presentation. [https://support.filemaker.com/s/article/CRE01-2019?language=en_US]

Read more here: <a href="https://www.soliantconsulting.com/blog/">https://www.soliantconsulting.com/blog/</a>

(blog post coming soon)
