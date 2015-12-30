# Chat_with_CPU

## Overview

This is a very simple chat simulator that I casually whipped up within a few hours to test some of the ideas I may implement in my major project(s) in the future.  For this reason, the code is open source and you are free to do anything with it.

In this chat simulator, whenever you send a message to the "person" you are chatting (in this case, that would be the Server), the "person" (or Server) will reply to you by selecting a random statement from an array of predefined statements.  Therefore, the Server/Computer's response will not make any sense to you in most cases unless you happen to say the right thing.

If you have noticed, apart from the chat window, there is also a paragraph in italics stating when the Server updated the chat window (in reality, the "update" as stated in the text does not occur; I was merely testing if time intervals worked with AJAX).  This "updating" of the chat window occurs once every ```1000ms``` (or rather, once per second).  Of course in this test this particular piece of code is completely useless (the chat simulation would've worked as well without that once-per-second update) but in the future if I want to build a live chat application/platform where *real* people chat with each other in live time, the chat window on *both* sides of the chat will have to be updated on a regular basis (e.g. once every ```1000ms```); otherwise, when a user sends a message, the other person may not be able to see it without also typing something himself/herself which would hamper communication (which totally defeats the purpose of the app/platform itself).

This quick test also took a (tiny) bit longer than expected to complete since I ran onto a few issues, but that is probably because I am not fully familiar with AJAX and I forgot some Javascript after leaving it for PHP for so long.

Yeah, anyway, enjoy :)

## Updates

30/12/15 - The glitch mentioned previously has been fixed.  The chat window now shows chat content from previous sessions whenever it is loaded.  It was quite easy actually - took me no longer than 15 minutes to fix it :)

## Copyright

No copyright, the code is *open source*! :D

## Credits

Credits to [W3Schools](http://w3schools.com) for the tutorials on how to use AJAX with PHP and MySQL.
