## Telepítési Útmutató:

Az alábbi parancsokat szükséges lefuttatni az alkalmazás fő könyvtárában:

1. composer install
2. php artisan key:generate
3. npm install
4. npm run
5. php artisan migrate:fresh --seed
6. php artisan serve

Ezután a böngészőböl a 127.0.0.1:8000 címen elérhető az alkalmazás.
Teszt felhasnzáló adatai:
-Email: test@test.com
-Jelszó: password

## Megjegyzés:
Az egyszerűbb telepítés érdékében a .env illetve a *.sqlite fájlokat kivettem a gitignore-ból..

