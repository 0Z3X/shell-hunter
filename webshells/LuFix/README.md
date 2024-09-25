# LuFix
Encountered filenames in the wild: `luuf.php`, `lufix.php`, `l.php`  

## Decoding
Another shell that is boringly easy to decode.
1) Replace the `eval` with an `echo` and run through the sandbox.
2) Replace the first `eval` and strip the other `eval`s. Run through sandbox once more, done.
