# PHP MVC Library Manager

## Opis projekta
MVC Library Manager je jednostavna web aplikacija razvijena u PHP-u koristeći MVC (Model - View - Controller) arhitekturu.  
Aplikacija omogućava upravljanje knjigama i njihovim kategorijama kroz CRUD operacije.

Projekt je rađen kao projektni zadatak iz predmeta Softver inženjering.

---

## Korištene tehnologije
- PHP
- MySQL
- HTML
- CSS
- Bootstrap 5
- JavaScript
- XAMPP

---

## Funkcionalnosti
- prikaz svih knjiga
- dodavanje nove knjige
- uređivanje knjige
- brisanje knjige
- povezivanje knjiga sa kategorijama
- JavaScript potvrda pri brisanju
- validacija forme

---

## MVC struktura

Projekt je organizovan kroz sljedeće foldere:

- `config/`
- `controllers/`
- `models/`
- `views/`
- `public/`

---

## Baza podataka

Baza podataka se zove `mvc_library`.

Sadrži dvije povezane tabele:
- `categories`
- `books`

Veza između tabela ostvarena je preko stranog ključa `category_id`.

---

## Pokretanje projekta

1. Pokrenuti Apache i MySQL u XAMPP-u.
2. Otvoriti phpMyAdmin.
3. Kreirati bazu podataka pod nazivom `mvc_library`.
4. Importovati SQL fajl `mvc_library.sql`.
5. Kopirati projekat u `htdocs` folder.
6. Otvoriti aplikaciju u browseru
   
---

## Autor
Nela Ćurović
