# Persiapan Awal

## Tujuan Pembelajaran

Setelah praktikum ini dilakukan Anda diharapkan dapat:

* Mengingat dan mendemonstrasikan beberapa perintah `Git` yang penting untuk melakukan pekerjaan individu.
* Mempersiapkan `Git repository` lokal dan online pada `Github`.
* Menghubungkan `repository lokal` dan `online.`
* Menginstall Git Sesuai Sistem Operasi.

## Install Git dan Konfigurasi Awal

1. #### Cara Install Git di Linux

Instalasi Git pada Distro keluarga Debian dapat menggunakan perintah `apt`

```shellscript
sudo apt install git

atau

sudo apt-get install git

pada Fedora

yum install git
```

2. #### Cara Install Git di Windows

Instalasi Git di Windows memang tidak seperti di *Linux/Mac* yang ketik perintah langsung terinstal.

Kita harus men-download dulu, kemudian melakukan instalasi *next>next>finish.*

Tapi dalam instalasi tersebut, ada pilihan yang harus diperhatikan agar perintah *git dapat dikenali di CMD.*

* Download Git
  
Silahkan buka website resminya Git (git-scm.com). Kemudian unduh Git sesuai dengan arsitektur komputer kita. Kalau menggunakan 64bit, unduh yang 64bit. Begitu juga kalau menggunakan 32bit.

![#1](https://phoenixnap.com/kb/wp-content/uploads/2019/12/download-git-for-windows.png)

* Klik dua kali file installer untuk penginstal.
  
![#2](https://phoenixnap.com/kb/wp-content/uploads/2019/12/location-git-windows-download.png)

* Izinkan aplikasi untuk melakukan perubahan pada perangkat Anda dengan mengklik `Yes` pada dialog Kontrol Akun Pengguna yang terbuka.

![#3](https://phoenixnap.com/kb/wp-content/uploads/2019/12/start-git-installation-process-windows.png)

* Tinjau Lisensi Publik Umum GNU, dan ketika Anda siap untuk menginstal, klik Berikutnya .

![#4](https://phoenixnap.com/kb/wp-content/uploads/2019/12/read-and-accept-git-license-agreement.png)

*  Installer akan meminta Anda untuk memilih lokasi pemasangan. Biarkan **default**, kecuali Anda punya alasan untuk mengubahnya, dan klik **Next**.

![#5](https://phoenixnap.com/kb/wp-content/uploads/2019/12/select-git-installation-location.png)

*  Layar pemilihan komponen akan muncul. Biarkan **default** kecuali Anda memiliki kebutuhan khusus untuk mengubahnya dan klik **Next**.

![#6](https://phoenixnap.com/kb/wp-content/uploads/2019/12/git-installation-component-selection-screen.png)

* Installer akan menawarkan untuk membuat folder menu. Cukup klik **Next**.

![#7](https://phoenixnap.com/kb/wp-content/uploads/2019/12/select-git-start-folder-shortcuts.png)

* **Pilih editor teks** yang ingin Anda gunakan dengan **Git**. Gunakan menu drop-down untuk memilih Notepad ++ (Saya sarankan pakai editor text [`VISUAL STUDIO CODE`](https://code.visualstudio.com)) dan klik **Next** .

* Langkah instalasi ini memungkinkan Anda untuk mengubah **PATH environment**. **PATH** adalah kumpulan direktori default yang disertakan saat Anda menjalankan perintah dari baris perintah. **Biarkan ini pada pilihan tengah (disarankan)** dan klik **Next**.

![#8](https://phoenixnap.com/kb/wp-content/uploads/2019/12/adjust-git-path-enviorment.png)

* *Server Certificates, Line Endings and Terminal Emulators* Opsi selanjutnya terkait dengan sertifikat server. Sebagian besar pengguna harus menggunakan default. Jika Anda bekerja di lingkungan **Active Directory**, Anda mungkin perlu beralih ke sertifikat Windows Store. **Klik Next**.

![#9](https://phoenixnap.com/kb/wp-content/uploads/2019/12/use-openssl-library-server-verification-git-windows.png)

* Pilihan berikutnya mengubah akhir baris. Dianjurkan agar Anda memilih pilihan **default.** Ini terkait dengan cara data diformat dan mengubah opsi ini dapat menyebabkan masalah. **Klik Next**.

![#10](https://phoenixnap.com/kb/wp-content/uploads/2019/12/configure-line-ending-conversions-git-on-windows.png)

* **Pilih terminal Emulator** yang ingin Anda gunakan. Direkomendasikan **MinTTY default**, untuk fitur-fiturnya. **Klik Next**.

![#11](https://phoenixnap.com/kb/wp-content/uploads/2019/12/configure-terminal-emulator-git-bash.png)

* **Opsi Kustomisasi Tambahan** Opsi default direkomendasikan, namun langkah ini memungkinkan Anda untuk memutuskan opsi tambahan mana yang ingin Anda aktifkan. Jika Anda menggunakan `symbolic links`, yang seperti pintasan untuk baris perintah, centang kotak. **Klik Next**.

![#12](https://phoenixnap.com/kb/wp-content/uploads/2019/12/configure-extra-options-git-install-windows.png)

* Bergantung pada versi Git yang Anda pasang, mungkin menawarkan untuk menginstal fitur eksperimental. Opsi untuk memasukkan opsi interaktif ditawarkan. Kecuali jika Anda ingin berexperimental, untuk opsi ini biarkan tidak dicentang dan **klik Instal** .

![#13](https://phoenixnap.com/kb/wp-content/uploads/2019/12/configure-experimental-options-git-windows-installation.png)

* *Complete Git Installation Process*: Setelah instalasi selesai, centang kotak untuk melihat **Release Notes atau Launch Git Bash**, lalu klik Finish .

![#14](https://phoenixnap.com/kb/wp-content/uploads/2019/12/complete-git-install-windows.png)

* How to Launch Git in Windows

```text
Git memiliki dua mode penggunaan - bash scripting shell (or command line) and a graphical user interface (GUI).
```

* Launch Git Bash Shell
  
Untuk launch `Git Bash,` buka menu `Start Windows` , ketik `git bash` dan tekan Enter (atau klik ikon aplikasi).

![#15](https://phoenixnap.com/kb/wp-content/uploads/2019/12/start-git-bash-windows.png)

* Launch Git GUI

Untuk launch `Git GUI`, buka menu Start Windows , ketik `git gui` dan tekan Enter (atau klik ikon aplikasi).

![#16](https://phoenixnap.com/kb/wp-content/uploads/2019/12/start-gui-git-windows.png)

Setelah itu coba periksa versi yang terinstall dengan perintah:

`git version`

Pada laptop saya, versi yang terinstall adalah versi `2.24.1`

![git version](Snapshoot/git-version.png)

----

 ## Connecting to a Remote Repository

----

* Mulailah dengan `Terminal/command-prompt` atau `shell` favorit Anda. Jika menggunakan Windows, jalankan `Git Bash` atau `cmd` (hanya berlaku jika Anda telah menambahkan path Git yang dapat dieksekusi ke dalam PATH *environment Variable*). 
  
* Jika menggunakan OS berbasis Unix (Linux atau Mac OS), dapat menggunakan `shell` yang disediakan di OS, misalkan bash, [zsh](https://ohmyz.sh)

```diff
- NOTE 👁‍🗨
```

###### Meskipun dimungkinkan untuk menggunakan aplikasi berbasis GUI, misalkan built-in Git GUI, GitKraken, VsCode,SourceTree atau aplikasi lainya, saya sangat menyarankan untuk menggunakan perintah `Git dari shell`.

###### Shell adalah lingkungan denominator umum terendah yang tersedia untuk Anda selama pengembangan Web, terutama ketika harus menerapkan aplikasi Web ke remote server. Akan berguna juga untuk mengetahui perintah-perintah shell atau Git, ketika kita tidak dapat memiliki lingkungan grafis. Plus, mengeksekusi perintah dengan mengetik jauh lebih cepat daripada point-and-click pada GUI.

untuk mengetahui apakah git sudah benar ter-install atau tidak, bisa melakukan pengecekan melalui `terminal/cmd` dengan mengetikan kata `git`. Jika hasil keluaran seperti pada Gambar berikut, maka instalasi berhasil.

![cek-git](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;6.27.16&#32;PM.png)

Ada beberapa konfigurasi awal yang harus dupersiapkan sebelum mulai menggunakan Git, seperti `nama dan email`. Silahkan lakukan konfigurasi dengan perintah berikut ini.

```markdown
git config --global user.name "username"
git config --global user.email "email"
```

**Contoh:**

 ```markdown
git config --global user.name "user_anda"
git config --global user.email "A3.xxxx@mhs.stmik-sumedang.ac.id"
```
Kemudian periksa konfigurasinya dengan perintah:

```markdown
git config --list
```
Apabila berhasil tampil seperti code berikut ini, berarti konfigurasi anda berhasil.

```bash
credential.helper=osxkeychain
user.name=yysofiyan
user.email=example@outlook.com
user.namel=yysofiyan
core.excludesfile=/Users/yysofiyan/.gitignore_global
~
~
~
(END)
```
Konfigurasi `core.editor core.excludesfile` bersifat opsional. Sedangkan `name dan email wajib`.

- [x] **Membuat Akun Github**

- [x] Akses Github melalui web browser dan masukkan URL : [github.com](https://github.com/)
- [x] Pilih menu Sign Up, isikan data username, email address dan password anda. Lalu Verify account anda. Password, Username, dan Email tidak boleh sama dengan pengguna lain (Saya sarankan Pakai Email Kampus)
- [x] Buat Format username : dengan `NIM_ANDA`
- [x] Selanjutnya pilih Pricing Plan -> Pilih yang Free -> Pilih Continue. 
- [x] Lalu isi kuisioner tentang diri anda. Jika sudah selesai, pilih Submit atau bisa klik skip this test.
- [x] Selamat, anda sudah resmi menjadi pengguna Github. 

```diff
- NOTE 👁‍🗨
```
###### Dalam penggunaan Git ada dua cara, pertama dengan menggunakan` Terminal/Command Prompt` dan kedua menggunakan `Git Desktop`. Pada praktikum ini, setiap contoh penggunaan git dengan menggunakan `Terminal/Command Prompt`.

- [x] **Working Locally**

Sebelum mulai menggunakan `Git`, ada beberapa perintah dasar yang harus diketahui seperti di bawah ini:

- [x] `Git init`: Untuk membuat repository pada folder lokal
- [x] `Git status`: Untuk mengetahui status dari repository Lokal, apakah ada file yang ditambahkan/dihilangkan dan dimodifikasi.
- [x] `Git diff`: untuk mengetahui list code yang dilakukan perubahan.
- [x] `Git add`: untuk menambahkan file ke repository local
- [x] `Git commit`: untuk menyimpan perubahan yang dilakukan
- [x] `Git push`: untuk mengirimkan perubahan dari repository local setelah melakukan commit ke remote repository
- [x] `Git branch`: untuk melihat seluruh branch yang ada pada repository
- [x] `Git checkout`: untuk menukar branch yang aktif dengan branch yang lainnya
- [x] `Git merge`: untuk menggabungkan branch yang aktif dengan branch yang dipilih. 
- [x] `Git clone`: untuk membuat Salinan repository

1. Langkah selanjutnya, buat sebuah folder `repository project`. Pada contoh ini, saya menggunakan nama folder dengan menggunakan nomor NIDN ( Nomor Induk Dosen Nasional)`“0416078903”`. Silahkan anda menggunakan `Nomor NIM anda masing-masing`.

![#1](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;7.51.09&#32;PM.png)

###### *memilih folder project*

Kemudian drag folder tersebut ke `Terminal/command Prompt` atau open with git bash

![#2](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;7.55.40&#32;PM.png)

Langkah selanjutnya adalah sebagai berikut:

ketik perintah 

```git
1. git init
```

![#3](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;7.58.18&#32;PM.png)

`Git init` akan menghasilkan `folder .git` sebagai tanda jika repository local sudah dibuat.` Folder .git ini bersifat hidden`

```git
2. git status
```
![#4](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;8.03.21&#32;PM.png)

Pada Gambar di atas, menunjukan belum ada file yang ditambahkan. Selanjutnya, tambahkan file `*.txt` pada folder `“0416078903” (silahkan di sesuaikan dengan folder kalian)`. 

![#5](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;8.10.10&#32;PM.png)

Lalu lakukan 

```git
3. git status
```
kembali, hasilnya akan seperti pada gambar di bawah ini

![#6](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;8.13.34&#32;PM.png)

Hasil dari `git status` terlihat jika ada `file baru` yang belum ditambahkan ke dalam `repository local`. File tersebut dengan nama `hello.rtf`. seperti yang sudah dijelaskan sebelumnya, git status akan menampilkan file baru atau file yang dimodifikasi dengan `warna merah`. File tersebut harus ditambahkan ke dalam `repository local` dengan menggunakan perintah `git add` seperti pada langkah selanjutnya.

```git
4.git add *
```

Tanda `*` pada git add adalah untuk menambahkan semua file ke dalam `repository`. Bisa saja hanya menuliskan nama file nya saja, seperti `git add hello.rtf`. setelah melakukan `git add`, lakukan pengecekan dengan melakukan perintah `git status`. Hasil dari `git status`, nama file yang berhasil ditambahkan akan berwarna hijau seperti pada gambar di bawah ini.

![#7](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;8.28.07&#32;PM.png)

```git
5. git commit
```
![#8](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;8.33.14&#32;PM.png)

##### Sederhananya, `commit` berarti perubahan yang baru saja Anda lakukan di `lokal repository`. Perubahan dapat terdiri dari `menambahkan, mengubah, atau menghapus satu atau lebih file`

Setelah Anda selesai menulis `pesan commit`, konfigurasikan `author `yang berisi `nama dan email` dengan menggunakan perintah seperti di bawah ini:

```git
➜  0416078903 (master) ✔ git config --global user.name "yysofiyan"
➜  0416078903 (master) ✔ git config --global user.email "yanyan@stmik-sumedang.ac.id"
➜  0416078903 (master) ✔ 
```

```git
6. git log
   ```
![#9](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;8.52.47&#32;PM.png)

`Git log` berfungsi untuk menampilkan `history dari commit yang telah dilakukan`. Semua commit yang telah dilakukan akan ditampilkan seperti pada Gambar di atas. Jika terdapat perubahan kembali pada folder “0416078903” seperti menambahkan file baru atau melakukan modifikasi pada file `“hello.rtf”`, maka untuk menambahkan pada repository local lakukan perintah di mulai dari git status hingga git commit.

<!---------------------------------------------------------------->
Anda baru saja membuat `Git repository lokal` dan mulai melacak perubahan pada file dalam repository. Jika Anda akan membagi pekerjaan Anda dengan tutor Anda atau teman lain, Anda harus memiliki repository yang dapat diakses melalui Internet. Untuk melakukannya, Anda perlu menempatkan salinan `lokal repository` Anda dalam `layanan hosting Git online` bernama `Github`.

1. Buka Github (https://github.com) menggunakan web browser favorit Anda.
2. Gunakan akun yang sudah anda buat.
3. Buat `repository` baru bernama `NIM_ANDA` dan masuk ke halaman repository. Pastikan Anda mengatur visibilitas ke `Publik`. Kemudian `Create Repository`

![#10](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;9.20.33&#32;PM.png)

4. Temukan bagian bernama `URL`. Perhatikan bahwa ada dua jenis `URL` : `HTTPS` dan `SSH`. Catat URL untuk `HTTPS`. Lihat gambar berikut :

![#11](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;9.28.37&#32;PM.png)

5. Perbarui `Git repository` `lokal Anda` sehingga `commit` Anda nanti dapat disimpan di Github juga. Gunakan perintah `git remote add` dan gunakan URL kloning sebagai argumen untuk perintah : `git remote add origin <CLONEURL>`

**Contoh:**

```git
git remote add origin https://github.com/yysofiyan/0416078903.git
```
![#12](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;9.40.32&#32;PM.png)

##### `git remote add origin` memberitahu repositori lokal untuk menambahkan `path bernama origin` yang menunjuk ke URL yang diberikan. Dengan mengkonfigurasi path ini di lokal repository, Anda akan dapat menyimpan commit Anda ke online repository juga menggunakan perintah `git push`.

6. Untuk menyimpan *commit* Anda ke dalam *online repository* Anda di Github, jalankan perintah `git push`. Anda harus menentukan *remote* path dan *remote branch* yang akan diunggah (atau di-**push**).

```git
git push -u <REMOTE_NAME> <DEFAULT_BRANCH>
```

**Contoh:**

```git
git push -u origin master
```

![#13](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;9.48.42&#32;PM.png)

##### `git push` memberitahu Git untuk mendorong *commit* di cabang **master** lokal Anda ke *repository* yang ditunjuk oleh remote **origin**. opsi `-u` memastikan panggilan **git push** berikutnya akan dikirim ke cabang **master** dari **path origin**.

7. Periksa halaman **Github repository** Anda. Anda akan melihat bahwa file-file Anda telah disimpan dan dapat diakses di Github.

![#14](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;9.58.50&#32;PM.png)


# Referensi 🔥

1. [hackernoon.com](https://hackernoon.com/top-5-free-courses-to-learn-git-and-github-best-of-lot-2f394c6533b0)
2. [coderomeos.org](https://www.coderomeos.org/how-to-use-github-simple-github-tutorial-for-beginners)
3. [git-scm.com](https://git-scm.com/)
4. [github.guides](https://guides.github.com/)
5. [Command cheatsheet](https://training-github.com/kit/downloads/github-gitcheat-sheet.pdf)
6. [Interactive git tutorial](https://try.github.io/levels/1/challenges/1)
7. [Visual/interactive cheatsheet](http://ndpsoftware.com/git-cheatsheet.html)
8. [phoenixnap.com/](https://phoenixnap.com/kb/)