NOTE : BELUM BERHASIL. MOHON DI PELAJARI LAGI
https://www.youtube.com/watch?v=Jaa1afOUfS8&list=PLFIM0718LjIWvxxll-6wLXrC_16h_Bl_p&index=14

Abstract Class (erat dengan konsep Inheritance)
-sebuah kelas yang tidak dapat di instansiasi
-Kelas 'abstrak'
-Mendefinisikan interface untuk kelas lain yang menjadi turunannya
-Berperan sebagai 'kerangka dasar' untuk kelas turunannya
-Memiliki minimal 1 method abstrak
-digunakan dalam 'Inheritance' untuk memaksakan implementasi method abstrak yang sama untuk semua kelas turunannya
-Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
-kelas abstrak boleh memiliki property / method reguler
-kelas abstrak boleh memiliki property / static method


Method Abstract
-Hanya ditulis interface nya saja tidak ada Code Block
-Implementasinya ada di kelas turunannya

Contoh Kelas Abstrak

class Mobil Extends Kendaraan
class Laptop Extends Komputer
class Email Extends Komunikasi


WHY Abstract class?
-Merepresentasikan ide atau konsep dasar
-"Composition over Inheritance"
-Salah satu cara menerapkan Polymorphysm
-Sentralisasi logic
-Mempermudah pengerjaan tim (krn memiliki base Class)