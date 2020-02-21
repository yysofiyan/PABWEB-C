# Berkontribusi di Proyek git

## Tujuan Pembelajaran
Setelah praktikum ini dilakukan Anda diharapkan dapat:

* Mengingat dan mendemonstrasikan beberapa perintah Git yang penting untuk melakukan pekerjaan individu/Kolaborasi.
* Mempersiapkan Git repository lokal dan online pada Github.
* Menghubungkan repository lokal dan online.


----
## Bagaimana

Berikut langkah-langkahnya secara singkat:

1. Fork it!
2. Buatlah *branch* fitur baru: `git checkout -b NIM_ANDA`
3. *Commit* perubahannya: `git commit -am 'Add some features'`
4. *Push* ke branch di *remote*: `git push origin NIM_ANDA`
5. Buat *pull request*

1. Fork proyek ini. 
2. Setelah selesai fork, maka repository akan masuk ke daftar repo milik anda.

----
## Time to GO CODE ;)

NB: gunakan `git --help` untuk melihat perintah-perintah git lainnya.

1. Cloning project yang sudah anda fork ke akun anda

        git clone <alamat-repo>

    Contoh:

        git clone git@github.com:yysofiyan/PABWEB-D.git

2. Untuk mempermudah pengembangan, hendaknya kita menambahkan repository pusat dengan lokal milik kita agar tidak terjadi konflik dengan kontributor lainnya.

        git remote add <nama-repo> <alamat-repo>

    Contoh:

        git remote add upstream git@github.com:yysofiyan/PABWEB-D.git

3. Setelah remote repositori selesai, buatlah branch baru agar tidak merusak history branch utama, dan juga untuk memudahkan racking code.

        git checkout -b <nama-cabang>

    Contoh:

        git checkout -b NIM_ANDA

4. Di cabang baru ini lah kita akan untuk melakukan perubahan kode, yang nantinya bisa kita push ke repo pusat. Untuk berpindah branch bisa kita gunakan `git checkout <nama-cabang>`, dimana `<nama-cabang>` adalah nama yang anda gunakan pada langkah sebelumnya.

5. Setelah melakukan perubahan, kita bisa lakukan commit berisi deskripsi singkat tentang perubahan yang anda lakukan. Tetapi jika ada penambahan file, bisa menggunakan perintah `git add <nama-file-baru>`, atau gunakan `git add .` untuk menambahkan semua perubahan yang ada di direktori tersebut secara rekursif. Setelah itu baru bisa kita commit.

        git commit -m "<pesan singkat>"

    Contoh:

        git commit -m "fix sample project PABWEB-D"

6. Setelah selesai melakukan commit, kita akan melakukan persiapan untuk membuat *pull request* (biasa disingkat PR) ke repo pusat. Pertama kita pindah branch kembali ke master. 

        git checkout master

7. Setelah itu, kita akan mengambil kode lagi dari pusat, untuk memastikan tidak terdapat konflik pada kontribusi kode kita. Konflik dapat terjadi jika dua atau lebih kontributor melakukan perubahan pada satu berkas, terutama jika perubahan dilakukan pada baris yang sama, terlepas dari apakah tujuan perubahan sama atau tidak.

        git fetch upstream
        git merge upstream/master

8. Dengan proses diatas, setidaknya kita telah bisa memastikan bahwa tidak ada konflik dengan repo pusat. Sekarang kita kembali ke branch lokal development kita `NIM_ANDA`.

        git checkout NIM_ANDA

9. Setelah itu, kita gabungkan cabang tersebut dengan cabang utama, sehingga kontribusi dapat dikirimkan kembali ke repositori pusat dengan perintah `git rebase <nama-branch>`.

        git rebase master

10. Sebelum push ke repositori pusat, kita akan push ke repository hasil fork di awal pembahasan tadi.

        git push origin NIM_ANDA

11. Setelah di push, kita akan melakukan pull request dan membandingkan perubahan yang telah anda lakukan terhadap repo pusat. Anda juga bisa menyisipkan pesan untuk memberitahukan developer pemilik repo pusat tentang apa yang anda lakukan. Setelah yakin terhadap perubahan yang telah anda lakukan, silahkan pilih create pull request dan menunggu tanggapan dari pemilik repo pusat.

