# Segma
###  Simple and Secure PHP  Framework For Small Projects.
###  Features :-
0. #### MVC Structure.
1. Filter Data And Santize It.
2. intelligent Upload File System.
3. Ready With Commands Pattern.
4. Ready With Mapper Patterns.
5. Csrf Protection.
6. Session Protection (Fixation-Hijacking).
7. PHP Mailer.
8. Multi Lang.
9. Query Builder.
10. Mysql Support.
11. Cache System.
#### And More !

# Example For Upload Text File.
```
$uploadTextFile = new UploadTextFile("Destination Is Here !");
$uploadTextFile->intelligentUpload("Salt","Something Unique","Success Msg"); // Done :) Without Search Of Global $_FILES Or If Statement Just Two Lines !

```