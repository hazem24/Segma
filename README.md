# Segma
### H3 Simple and Secure PHP  Framework For Small Projects.
### H4 Features :-
##### H5 1. MVC Structure.
1. Filter Data And Santize It.
2. intelligent Upload File System.
3. Ready With Commands Pattern.
4. Ready With Mapper Patterns.
5. Csrf Protection.
6. Session Protection (Fixation-Hijacking).
7. PHP Mailer.
8. Multi Lang.

# Example For Upload Text File.
```
$uploadTextFile = new UploadTextFile("Destination Is Here !");
$uploadTextFile->intelligentUpload("Salt","Something Unique","Success Msg"); // Done :) Without Search Of Global $_FILES Or If Statement Just Two Lines !

```