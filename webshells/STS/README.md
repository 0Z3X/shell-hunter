# Smart Tools Shop
Encountered filenames in the wild: `sts.php`  
SHA256: `aa69c16b7a358a8feb8414a2b3b9bf9a080051ca7dbc375dbfaa3de43444a0bf`

## Decoding
Yet another futile encoding attempt.
1) Replace the, you guessed it, `eval` with `echo` and run it through the sandbox.
2) Let's make that garbled stuff readable using CyberChef and the "Unescape string" recipe. We'll be left with a few `\xa`s and `\x9`s replace them with `\t`s and `\n`s respectively. There's still some oddities left and this will certainly not work, but it's good enough to be able to read it.
