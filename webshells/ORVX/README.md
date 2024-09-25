# ORVX
Encountered filenames in the wild: `ORVX-*.php`  
SHA256: `f81ea6f0e526bf54006856a7f61f45a2a3e2a7a8a8cc1ba071269d4ec498de1c`

## Decoding
This shell has the most complex encoding of all variants I've found. If you only need the password you can always find it at the end of the file in plaintext (in this file `$shellpassword="BTI3Tn8h3r"`).

The shell depends on the code being on a single line and a hidden checksum (the plaintext one in the comment is a decoy). But we can decode a few parts without tripping the checksum check, which is enough to eliminate the checksum check and decode the rest. Making a copy of the encoded file first is a good idea to make lookups during the process easier.

1) Replace the first `eval` with `echo` and the second one with `die`. Replace the `echo` and `die` function calls with the result.
2) Now the first `if` will cause the code to die, so we just remove it. And notice that the first line actually loads the script itself into the variable `$OOO0OO0O0O`. When looking for the variable you will find four places where it's used, but it's not really clear what for. Let's first format the code to be a bit more readable.
3) On line 4 we see yet another encoded value, running `echo gzinflate(base64_decode("KyrNTcosKQYA"));` in the PHP sandbox reveals that the string is `rumbits`. With that resolved we can use the sandbox again to resolve the next two variables: ```$k='rumbits'; echo $k[6].$k[1].$k[3].$k[6].$k[5].$k[0]." - ". $k[5].$k[0].$k[4].$k[2];``` which results in ```substr - trim```, so we can replace all occurrences of `$O0O0` with `substr` and `$O0` with `trim`. This eliminates `$k`, `$O0O0` and `$O0`, so we can remove the variables as well.
4) Next we resolve all uses of `$c` and sum the values. Then we remove the variable. Within the readable code we can see three uses of the function. Each time it's called with `$OOO0OO0O0O[0]` as first argument (`$a`) and `$b` determines which operation to execute. This is where we'll need the original encoded file data to do some lookups. Let's do that next.
5) Looking at the cases of the `O00OOOO00O` function, the keen eye might notice there is a case with length `40` which just so happens to be the length of a SHA1 hash. It seems tempting to look it up, but we can skip this as we'll render it useless in a later step. If you want to know, the hash starts at index 1295 (`acc...`) and has length `40`, so it is `acc58a8e12b3411055068a931bb72deb0f7e88c6`.  
   However, the first time `O00OOOO00O` is called it base64 decodes something, most likely more code. So let's lookup the that case (`197`). 
6) Again, we use the original encoded file, but this time go to character 977 (`aWYo...`) and extract the next 318 characters which yields `aWYoIWZ1bmN0aW9uX2V4aXN0cygiTzAwMDAwT09PTyIpKXtmdW5jdGlvbiBPMDAwMDBPT09PKCRhLCRiLCRjKXskZD1pbXBsb2RlKCRjKTskZD1wcmVnX3JlcGxhY2UoIi9fX2hhbHRfY29tcGlsZXIuKi8iLCIiLCRkKTtpZigkYj09aGFzaCgic2hhMSIsIiRkIikpe3JldHVybihnemluZmxhdGUoYmFzZTY0X2RlY29kZSgkYSkpKTt9ZWxzZXtkaWUoIjx0dD5zaGExIENvZGUgZXJyb3IgZGV0ZWN0ZWQ8L3R0PiIpO319fQ`. We decode that and replace line 12 with the result and do some formatting for readability.
7) Here we've got the missing `O00000OOOO` function and that turns out to deal with the SHA1 hash from step 5 which the function receives as argument `$b`, so cool, we can just eliminate the check. And we can see that `$d` isn't used anymore either, so we can eliminate that too. Looks like we're close, let's remove the unused `$b` and `$c` arguments from the function signature and call.
8) Now we can resolve the last call to `O00OOOO00O` using the original encoded file, remove the function and clean up the code (everything from `halt_compiler` to the end can be removed). This also eliminates the `$OOO0OO0O0O` variable.
9)  Now we replace the `O00000OOOO` call with `gzinflate(base64_decode(` and replace the `eval` with `echo`. And we move the `$shellpassword="BTI3Tn8h3r";` part from the end of the file to the first line.
10) Run the result in the PHP sandbox and, uuhm, more base64?
11) Find the second `eval` and replace it with `die` and run it with the sandbox. Errr, that looks like the input? Well, it's not, looking at the file end you will see differences. Turns out, this is lots of layers and repeating this X times will yield the actual code. I had no idea how many layers it would be, so I decided to use a function to unwrap it, but the `die` interferes with the `while` loop and replacing it with `eval` leads to the final `eval` rendering the HTML output, hiding the PHP from us, so I decided to do it in two steps.
12) The first time around we add this function: 
    ```php
    function decode($s) {
        $i = 0;
	    while (strpos($s, 'eval($') !== false) {
		    echo "[$i]\n";
		    eval(str_replace('eval($', '$s = ($', $s));
		    $i++;
	    }
	    die($s);
    }
    ```
    And replace our `die` with `decode`, then run everything through the sandbox. After running it we know there are another 32 layers to reach the final HTML output, so we can modify our `decode` function to compensate for that until we get the full PHP code.
13)  With the modified `decode` we can now run it one final time through the sandbox and get the final output. Note that somewhere in the process the `$shellpassword` variable got lost, so we'll just put it at the beginning of the script.
14)  Have fun exploring.
