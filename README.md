### Aplikacja internetowa stworzona w oparciu o framework Laravel.

### Uruchomienie:
```
$ php artisan migrate:fresh
$ php artisan db:seed
$ php artisan serve
```

### Dane logowania administratora:
email: admin@admin.com  
hasło: admin

### Opis aplikacji:
Panel użytkownika (niedostępny dla administratora) umożliwia wyświetlanie oraz dodawanie postów przy pomocy edytora WYSIWYG Summernote. Panel ten może być wyświetlany w języku angielskim lub polskim.

Panel administratora (niedostępny dla zwykłego użytkownika) umożliwia usuwanie postów.

Podstrona "Contact" umożliwia wysłanie wiadomości e-mail na wskazany adres. Jest dostępna dla wszystkich zalogowanych użytkowników.
