# My First Website

Welcome to my first webpage!

### Project description

The goal of this project was to learn some php and html as an introduction to web development. 

I'm a dog person, and as I didn't know what to do for my first website (and didn't want to follow a tutorial), 
I did one related to dogs. It displays random dog facts (through interaction with Dog-Facts-API-v2) , 
allows to register dogs and retrieve the dog information searching by name.

I achieved data persistence by storing data as json in plain text, which is adequate for the size of this project, 
although I might change that for an interaction with a database in the future, just to get some practice in building 
database applications.

I wanted to learn to implement a sign-up/log-in/log-out system from scratch, so it's implemented here even
thought it might not make a lot of sense for this project.
The passwords are salted using a cryptographically secure pseudorandom number generator and then hashed with sha512.
In the process I learned about session management and the Post/Redirect/Get pattern. This was undoubtedly the part
of the project I had the most fun with while learning to implement, and also the one I learnt the most with.

The site is styled with CSS and bootstrap. I'm not a designer, and I did not want to spend a lot of time 
with the design, but the site was looking a little sad. I didn't want my dog related site to
look sad, so I shamelessly stole one of the background images of WhatsApp.
