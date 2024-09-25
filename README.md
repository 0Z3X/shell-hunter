# shell-hunter

If you have come to this repo because of an abuse report, you are in the right place. I assume you are looking for a way to detect infections on your servers, so let me give you a quick start.  

If you can't wait, have a look at the `detect.php` script and read it to be sure it is safe to execute. Yes, I know you don't have the time, but you should really make a habit of NOT skipping this step. For everyone's safety. Once complete the script will provide you with all known infected files in the user's account (which implies that you have to run the script under each user account you want to test). Feel free to optimize the script and make a PR. 

## Infection Mechanism Unknown
You might have received an abuse report for a couple of your servers, but that doesn't mean your other servers are clean. Currently it is unknown how servers get infected, but by the looks of it it is an infection of the host spreading to the vhosts. Whilst I found a lot of webshells without password, in none of them I could see files not belonging to the user, so I couldn't check for infections of the host itself. But if I find an infected vhost, I usually find lots of others on the same host.

In the code of the webshells I see instructions to download `https://raw[.]githubusercontent[.]com/hekerprotzy/rootshell/main/auto.tar.gz` which contains several exploits such as pwnkit which suggests a possible infection way from a vhost via privilege escalation onto the host.

## How Do You Know All Of This?
I followed a trail from a phishing mail which led me to a server hosting 50+ phishing campaigns and 4 other servers hosting parts of at least 2, possibly more, malwares. One of the servers providing a piece of the malware had an open shell on it which I found by accident. And it happened to have a collection of different webshells on it which all seem to stem from the same project (maybe Yanz Webshell) but use different brandings. I started to reverse engineer the shells in the hope that the code would reveal hints towards the author. Instead I found several one-stop marketplaces for scammers, phishers, and so on. Selling access to webshells is just one of their products, sold for $3 to $5 a pop. I found a way how I can get the domains of the webshells for sale and as of the last update of this file there are regularly new webshells being added, so the report you have received might not be the last as I'm continuously monitoring these marketplaces. I'm trying however, to make summaries as much as possible rather than mailing you for every single host I come across.

## Details About The Shells
In the `webshells` directory you can find the original versions of the shells (`*.encoded.php`) as well as the decoded versions of them (`*.decoded.php`). The decoded version will not necessarily execute correctly, the goal was only to get readable code, not executable scripts. However, for each one I have included instructions how to do the decoding yourself and in the subdirectory `decoding_steps` a file for each step of the decoding process.  

The original versions are unaltered and can be used to create hashes to look for. But that approach will miss a lot of shells as the passwords do change between "campaigns" and sometimes per server, and users can change them which renders a hash useless. In the `detect.php` script you can see that I use hashes and filename patterns for detection.

Navigate to the directory of a shell for more information about the shell.

## Recommended Tools
Many, if not all, shells download payloads or have the capability to do so. I have not thoroughly examined them, so you should not consider any of them safe to run. If you want to test their code I would strongly recommend to use [Online PHP Sandbox](https://onlinephp.io/). And for decoding stuff [CyberChef](https://cyberchef.org/) is very useful.
