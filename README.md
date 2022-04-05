<b>Diegimas: </b>
norint pilnai paleisti  projektą reikia atsisiųsti arba  naudoti git (https://git-scm.com/) per CMD :
1. git clone https://github.com/ddonatas/ist20
2. cd ist20
3. composer install
5. cp .env.example .env
6. php artisan key:generate
7. sukurti DB pvz IST20_test
8. sukonfogūruoti .env DB prisijungimo duomenis  (db, user, pass)
9. php artisan migrate

<b>IST20 sudaro kelių paskaitų dalys:</b>
1. migracija ir seed su factories (book, dog, veisle)
2. standartinė autorizacija Breeze
3. duomenų išvedimas /books 
4. vertimas į kitas kalbas
5. duomenų valdymas CRUD /products
6. SoftDelete, puslapiavimas
7. Autorizacija pagal vartotojo tipą (isAdmin)
8. Bylos įkelimas ir įrašymas bylos pavadinimų į DB
9. Paiešką <i> product </i> CRUD'e
10. Cities (miestu) lentele + Seed'as.  Po migracijos : <i> php artisan db:seed --class CitiesSeeder </i>
11. panaudotas dvieju lenteliu sujungimas Join kontroleryje 
