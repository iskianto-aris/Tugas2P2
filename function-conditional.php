<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php 

        echo "<h3> Soal No 1 Greetings </h3>";
        /* 
            Soal No 1
            Greetings
            Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

            contoh: greetings("abduh");
            Output: "Halo Abduh, Selamat Datang di Sanbercode!"
        */

        // Code function di sini
        function greetings ($nama) {
            echo "Halo ".$nama.", Selamat datang di Sanbercode!<br>";
        }

        // Hapus komentar untuk menjalankan code!
        greetings("Bagas");
        greetings("Wahyu");
        greetings("Abdul");

        echo "<br>";
        
        echo "<h3>Soal No 2 Reverse String</h3>";
        /* 
            Soal No 2
            Reverse String
            Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
            Function reverseString menerima satu parameter berupa string.
            NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

            reverseString("abdul");
            Output: ludba
            
        */
 
        // Code function di sini 
        function reverseString($nama){
            $stringLength = strlen($nama);
            $newString = "";
            for($i=$stringLength-1; $i>=0; $i--){
                $newString .= $nama[$i];
            }
            echo $newString."<br>";
        }


        // Hapus komentar di bawah ini untuk jalankan Code
        reverseString("abduh");
        reverseString("Sanbercode");
        reverseString("We Are Sanbers Developers");
        echo "<br>";

        echo "<h3>Soal No 3 Palindrome </h3>";
        /* 
            Soal No 3 
            Palindrome
            Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
            Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
            Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
            NB: 
            Contoh: 
            palindrome("katak") =>  output : true
            palindrome("jambu") => output : false
            NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
            
        */


        // Code function di sini
        function palindrome($kata){
            $balik = "";
            for($i = strlen($kata)-1; $i>=0; $i--) {
                $balik .= $kata[$i];
            }
            if($balik == $kata)
                echo "true";
            else
                echo "false";
        }
        
        // Hapus komentar di bawah ini untuk jalankan code
        echo "civic ==> ";
        palindrome("civic"); // true
        echo "<br>nababan ==> ";
        palindrome("nababan") ; // true
        echo "<br>jambaban ==> ";
        palindrome("jambaban"); // false
        echo "<br>racecar ==> ";
        palindrome("racecar"); // true
    ?>
</body>
</html>
