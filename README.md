FM-WebDirect-Redirect
=====================

Feb 2024 Update: Replaced php with javascript to store variables and redirect. Note that you will need to whitelist any hosts that webd is able to redirect to, so at a minumum you will need to add the host where these files live.

Another common request from developers is to change where the user is directed to when logging out of a WebDirect session. The default is to return the WebDirect Launch Center, which shows available WebDirect enabled FileMaker files.

These HTML/JS files are meant to make that easier to manage and to allow for dynamically specifying the redirect location when exiting a WebDirect session. By storing a variable as a cookie and referencing it when exiting a session, we can set the location from FileMaker WebDirect and change the value as needed.

The included FileMaker file "WebDirect_Demo.fmp12" is referneced in the HTML/JS "in.html" to pass in any parameter and set the homeurl to "out.html" when exiting the session. To use the file, the default username and password is:

user: admin
pass: admin

You can test as a user when logging in via WebDirect with the following:

user: demo
pass: demo

These can be changed as needed, and taken down from your FileMaker Server when done. Update the html files to use with your own solutions.

If the HTML files are hosted on a different web server than the FileMaker Server, you will need to update the FileMaker script steps that reference "Get ( HostName )" with the address of where the files are hosted. You may also need to adjust the CORS settings to allow javascript to run.

Jonn Howell demonstrated this in his 2019 DevCon session, if you want to see his presentation. [https://support.filemaker.com/s/article/CRE01-2019?language=en_US]

Read more here: <a href="https://www.soliantconsulting.com/blog/filemaker-webdirect/">https://www.soliantconsulting.com/blog/filemaker-webdirect/</a>