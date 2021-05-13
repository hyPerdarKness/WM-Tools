# Webmaster Araçları Scripti

Küçük çaplı webmaster araçları sitesi açmak için aradığınız script işte burada. Scriptin yönetici paneli yoktur. Script kullanımı vs. ile ilgili soruları cevaplandırabilirim ancak düzenleme, ekleme/çıkarma gibi konularda destek vermeyeceğim.

## Bilmeniz Gerekenler

1- Sitenin sağ üst kısımda bulunan link 1/2/3/4 kısmını düzenlemek yada kaldırmak için dist/navbar.php dosyasına bakın.

2- SQL dosyasında 2 adet tablo vardır. tools_ayarlar tablosunda site adı, keywords, description ve sayaç kodu ekleyebileceğiniz sütunlar mevcuttur.

3- tools_title tablosunda olduğu gibi kullanacaksanız bir değişiklik yapmanıza gerek yoktur. Script açık kaynaktır, istediğiniz gibi kullanabilirsiniz.

4- Tüm işlemlerde Google Recapthca v2 doğrulama vardır. Google Recapthca v2 keylerinizi edindikten sonra dist/autoload.php dosyasının 73. ve 74. satırlarında yer alan $sitekey ve $secret değişkenlerine yazın.

5- Link kısaltma işlevinde api kullanılmaktadır. Detaylı açıklamayı site içeriği kısmına yazdım.

## Veritabanı Ayarları

dist/sysconf.php dosyasını düzenleyin;
```php
$dbhost = "localhost";
$dbuser = "root"; //Veritabanı Kullanıcı Adı
$dbpass = ""; //Veritabanı Şifresi
$dbdata = "veritabani"; //Veritabanı Adı
```

## Site İçeriği

- Anasayfa

Siteye ziyaret eden kişinin ip adresi alınıp " whois.pwhois.org " sitesinden derlenen bilgiler ziyaretçiye gösterilir.

- IP Bul

Yazılan alan adının ip adresini gösterir.

- Link Kısaltma

Bu sayfa kisaurl.net adresi üzerinde yer alan api ile çalışıyor.
Siteye üye olup api kodunu elde edebilirsiniz. Daha sonra dist/ajax.php içerisinde 139. satırda " api adresi buraya gelecek " yazan yere
siteden aldığınız url'yi yazarsanız bu sayfada çalışacaktır.

- Whois

Yazılan alan adının whois bilgilerini gösterir.

- Mail Ayıklama

Bu sayfa html kodları içerisinde yer alan e-mail adreslerinin çıktısı verir.
Bir sitede gördüğünüz e-mail listesini tek tek uğraşmak yerine kaynak kodunu buraya yapıştırıp, sayfadaki tüm e-mail adreslerini elde edebilirsiniz.

- Kelime Hesaplayıcı

Textarea içerisine yazılanların sayısal hesabını yapmaktadır. Microsoft Word programında olan sözcük hesabı gibi.

- Site Araçları

Bu başlık altında;

  - Site Hız Testi -> saniye cinsinden site erişim hızını ölçmektedir.
  - Site Erişim Kontrolü -> site açık/kapalı kontrolü yapmaktadır.
  - Site HTTP Bilgisi -> site http/https(Hyper Text Transfer Protocol) protokolünden alınan bilgileri gösterir.
  - Site DNS Bilgileri -> sitenin dns kayıtlarını gösterir. 

bulunmaktadır.

- Şifreleme Araçları

Bu başlık altında;

  - HTML Şifreleme -> js desteği ile şifreleme yapar.
  - Base64 Şifreleme -> php base64 encode/decode yapar.
  - MD5-SHA1 Şifreleme -> php md5-sha1 şifreleme yapar.
  - Şifre Oluşturucu -> belirtilen sayı kadar rastgele şifre oluşturur.

bulunmaktadır.

## Kurulum

Veritabanı oluşturup, sysconf.php dosyasına bilgileri girdikten sonra ana dizinde yer alan " wmtools.sql " dosyasını phpMyAdmin ile içeri aktarın.