Static

Static digunakan untuk mengakses class tanpa menginstansi (new Object) terlebihh dahulu.
dengan static kita langsung saja dapat mengakses dengan cara 

NAMACLASS::$VARIABLE;

dalam penggunaan static method kita tidak dapat menggunakan this
melainkan kita harus menggunakan self::VARIABLE untuk pengambilan variable luar method

Static Keyword secara umum
-member yang terikat dengan class, bukan dengan object
-Nilai Static akan selalu tetap meskipun object di instansi berulang kali
-membuat kode menjadi 'procedural'
-biasanya digunakan untuk membuat fungsi bantuan / helper
-atau di gunakan di class-class utility pada framework
