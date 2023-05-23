# İkinci El İlanlar Uygulaması

Bu web tabanlı uygulama, kullanıcıların ikinci el ürünlerini ilan etmelerine ve diğer kullanıcıların ilanları görüntülemesine olanak sağlar. Uygulama, PHP, MySQL, HTML ve Bootstrap kullanılarak geliştirilmiştir.

## Özellikler

- Kullanıcı girişi ve oturum yönetimi: Kullanıcılar kayıt olabilir, oturum açabilir ve şifreli bir şekilde giriş yapabilir. Oturum açıkken ilan ekleyebilir, düzenleyebilir ve silebilirler.
- İlan ekleyebilme: Kullanıcılar, ikinci el ürünlerini ilan olarak ekleyebilirler. İlanlar ürün adı, açıklama, fiyat ve satıcı bilgilerini içerir.
- İlanları listeleme: Kullanıcılar, tüm ilanları görüntüleyebilir ve ilanların detaylarına erişebilir.
- İlanları düzenleme: Kullanıcılar, kendi ilanlarını düzenleyebilir ve güncelleyebilir.
- İlanları silme: Kullanıcılar, kendi ilanlarını silebilirler.
- Kullanıcı profili: Kullanıcılar, kendi profillerini düzenleyebilir ve kullanıcı bilgilerini güncelleyebilir.

## Kurulum

1. Bu repoyu klonlayın veya zip olarak indirin.
2. İndirdiğiniz dosyaları web sunucusuna veya local sunucunuzun kök dizinine taşıyın.
3. `config.php` dosyasını açın ve veritabanı bağlantı bilgilerini güncelleyin.
4. MySQL veritabanında, `users` ve `products` tablolarını içeren bir veritabanı oluşturun. Tabloların yapısını `database.sql` dosyasında bulabilirsiniz.
5. Tarayıcınızda uygulamaya erişmek için ilgili URL'yi ziyaret edin.

## Kullanım

1. İlk olarak, kayıt olmanız gerekmektedir. Kayıt işlemi için kullanıcı adı ve şifre girilmelidir.
2. Kayıt olduktan sonra, oturum açabilirsiniz. Giriş yaparken kullanıcı adı ve şifre gerekmektedir.
3. Oturum açtıktan sonra, ilan ekleyebilir, düzenleyebilir ve silebilirsiniz. Ayrıca diğer kullanıcıların ilanlarını görüntüleyebilirsiniz.
4. İlanları listeleyerek, ilanların detaylarına ulaşabilirsiniz. Düzenleme ve silme işlemleri için ilgili düğmelere tıklayabilirsiniz.

## Katkıda Bulunma

Eğer projeye katkıda bulunmak isterseniz, lütfen [GitHub repo](https://github.com/KullaniciAdiniz/proje-adi) üzerinden bir "fork" oluşturun ve pull talepleriyle katkılarınızı gönderin.

