# email-sending app using PHP

#This is an application in PHP for sending email from the contact form of a website. When the user visits the contact page of the website, they can enter details about the email such as their name, the subject of the email, the sender's email address and the message. When they've finished filling the form, they can click the send button and the mail will be sent to the specified email address.


### Note:
Sending email using the mail() function only works when there is internet connection. Until your application is hosted on a server on the internet before it can send an email.


A basic usage of the mail() function looks like this:

"<?php
  mail("receiver@example.com","My subject","Hey there! How you doin'");
?>"

===>>> The above piece of code will actually send an email to 'receiver@example.com' with subject 'My Subject' and message 'Hey there! How you doin'' when the script is executed.


#### PHP's mail() function has the following signature:

bool mail ( string $to , string $subject , string $message, string $headers );

##### 1.) $to
Receiver's email address. As specified in the PHP docs, the receiver's email address should take the following formats

=> user@example.com
==> user@example.com, anotheruser@example.com (Sending to multiple users)
===> User <user@example.com> (Specifying the user's username)

##### 2.) $subject: 
The subject of the email to be sent

##### 3.) $message: 
The message. Each line should contain no more than 70 characters. Each line should be separated with a CRLF (\r\n). You could solve this simply by wrapping the message text around the PHP wordwrap() function. Like so:

$message = wordwrap($message, 70);


##### 4.) $headers:
This one is optional. But If you want to do some styling on the email you send, you must specify the Content-Type in the header as text/html;charset=UTF-8 to tell email clients to parse the email as HTML. 



##### Images directory contains a screenshot of email i sent


Thank you for reading
