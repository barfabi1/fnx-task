# Zadanie testowe PHP

## Instalacja
Po sklonowaniu projekty należy uruchomić komendę: composer install

## Baza danych
Należy umieścić odpowiednie wartości w DATABASE_URL w pliku .env projektu:
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

Następnie należy wywołac komendę tworzącą bazę danych:
php bin/console doctrine:database:create

I utworzyć tabele zapisane w pliku migracji:
php bin/console doctrine:migrations:migrate

## Dane testowe
Wczytanie danych testowych dostarczonych do zadania odbywa się dzięki DoctrineFixturesBundle:
php bin/console doctrine:fixtures:load
