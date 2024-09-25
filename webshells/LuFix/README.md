# LuFix
Encountered filenames in the wild: `luuf.php`, `lufix.php`, `l.php`  
SHA256: 0c32b8f6679f8e0821bb344c18b88fcff84c8a2b3e0fbe78ad296197fb1ed000

## Decoding
Another shell that is boringly easy to decode.
1) Replace the `eval` with an `echo` and run through the sandbox.
2) Replace the first `eval` and strip the other `eval`s. Run through sandbox once more, done.
