# 1. Uvod

## 1.1 Analiza sistema

Ideja sistema sportskog centra je da se osobama koje se bave sportskim aktivnostima pruži udoban i efikasan način da organizuju svoje aktivnosti. Korišćenjem ovog sistema, osobe mogu da na jednostavan način da zakažu individualni trening kod željenog trenera ili da se pridruže već postojećim grupama. Kroz ažuran web-sajt imaju mogućnost da vide rasporede treninga po salama kao i da vrše filtriranje po sportskim aktivnostima za koje su zainteresovani ili po imenu trenera.
Korisnici mogu da izvrše registraciju na web-sajt, prijavljivanje, zakazivanje treninga i plaćanja.

Prilikom zaposlenja trenera u sportskom centru mu se od strane sistem administratora otvara nalog sa posebnim privilegijama. Trener ima dodatnu opciju za menjanje postojećeg rasporeda sportskih aktivnosti koje drži kao i uvid u broj osoba koje su se prijavile da će prisustvovati treningu.

## 1.2 Učesnici sistema

- #### Korisnik
    U korisnike sistema spadaju sve osobe zainteresovane za sport. Korišćenjem našeg sistema imaju priliku da na jednostavan i lak način organizuju aktivnosti u kojima uživaju.

    - ##### Neregistrovani korisnik
    Imaju samo ograničen pristup mogućnostima sistema. Mogu da steknu uvid u raspored tekućih aktivnosti koje nas sportski klub organizuje kao i informacije o sportskom centru.

    - ##### Registrovani korisnik
    Imaju dodatnu mogućnost zakazivanja individualnih treninga kao i plaćanje usluga putem Interneta.


- #### Zaposleni:

    - #### Trener
    U zaposlene spadaju treneri koji pored održavanja samih treninga imaju i privilegije menjanja rasporeda aktivnosti, zakazivanja novih i slanja obaveštenja korisnicima.

    - #### Nutricionista
    Pruža korisnicima savete o zdravoj ishrani.

    - #### Pomoćno osoblje (recepcionar)
    Pruža mogućnost korisnicima da putem telefona ili uživo zakazu treninge i dobiju dodatne informacije. Takođe vodi računa o evidentiranju korisnika koji su došli na trening.

    - #### Uprava
    Vodi sportski klub. Rešava zahteve novih aktivnosti i nove opreme.

    - #### Administrator sistema
    Daje dozvolu ostalom osoblju za pristup određenim delovima sistema. Ima punu kontrolu nad nalozima zaposlenih i korisnika; kao i pravo da ugasi nalog odreženog korisnika sistema.


## 1.3 Korišćeni dijagrami i alati


# 2. Dijagrami

## 2.1 Glavni use-case dijagram

![](https://raw.githubusercontent.com/ivan-ristovic/sportski-klub/master/dijagrami/diagram-svi-usecaseovi.png)


# 3. Use-Cases

### Korisnik

#### Use-Case: Online registracija korisnika

* **Učesnici**:
    - Neregistrovani korisnik: Zeli da se registruje u sportski klub kako bi imao priliku da zakaze trening.


* **Preduslovi**:
    - Web-sajt je u funkciji.
    - Korisnik ima pristup internetu.


* **Postuslovi**:
    - Korisniku je napravljen nalog na sistemu.
    - Baza korisnika je azurirana.


* **Osnovni tok**:
    1. Korisnik odlazi na deo web-sajta za registraciju novih korisnika.
    2. Korisnik unosi potrebne podatke i kliknuo je na polje “Registruj se”.
    3. Sistem vrsi validaciju podataka.
    4. Sistem cuva unete podatke i obelezava nalog kao privremeni.
    5. Sistem salje e-mail korisniku sa linkom za potvrdu registracije, obavestava ga i ceka na potvrdu.
    6. Korisnik proverava mail i potvrdjuje registraciju prateci link za potvrdu.
    7. Sistem obelezava da je nalog aktiviran.
    8. Sistem obavestava korisnika da je nalog uspesno kreiran.


* **Alternativni tok**:
    3. Neuspesna verifikacija podataka: Sistem obavestava korisnika na kom polju verifikacija nije uspela. Slucaj upotrebe se nastavlja na koraku 2.
    5. Link za potvrdu registracije je istekao: Korisnik nije potvrdio registraciju u predvidjenom roku. Sistem brise informacije o korisniku. Slucaj upotrebe se zavrsava.
    6. Korisnik nije dobio mail I obavestava sistem da mu ga ponovo posalje. Slucaj upotrebe se nastavlja na koraku 5.


* **Specijalni zahtevi**:
    Nema


* **Dodatne informacije**:
    Potrebni podaci za registraciju korisnika su:
    - Ime
    - Prezime
    - Username
    - E-mail
    - Lozinka
    - Polje za proveru lozinke
    - Captcha.


#### Use-Case: Online zakazivanje treninga

* **Učesnici**:
    - Korisnik: želi da uz malo napora izabere program kom želi da se priključi i zakaže trening.


* **Preduslovi**:
    - Web-sajt je u funkciji.
    - Korisnik ima pristup internetu.
    - Korisnik je registrovan na sajtu.


* **Postuslovi**:
    - Korisnik je dobio konfirmaciju da je njegov trening zakazan.
    - Centar je dobio informaciju o zakazanom treningu.


* Osnovni tok:
    1. Korisnik se prijavljuje na svoj profil na web-sajtu.
    2. Korisnik odlazi na deo stranice za zakazivanje treninga.
    3. Korisnik bira trenera kod kog želi da zakaže individualni trening.
    4. Sistem korisniku prikazuje spisak termina trenera.
    5. Korisnik bira slobodan termin i klikće na dugme "Zakaži trening".
    6. Sistem umanjuje broj uplaćenih treninga korisniku.
    7. Sistem ažurira kalendare korisnika i trenera.
    8. Sistem obaveštava korisnika da je njegov trening zakazan.
    9. Sistem obaveštava trenera da je zakazan novi trening.


* Alternativni tok:
    6. Korisnik nema uplaćenih individualnih treninga. Sistem obaveštava korisnika da nema uplaćene treninge i nudi mu opciju da uplati treninge. Slučaj upotrebe se završava.


* Specijalni zahtevi: /

* Dodatne informacije: /

#### Use-Case: Online otkazivanje treninga
#### Use-Case: Online placanje treninga
#### Use-Case: Online zakazivanje sportskog pregleda
#### Use-Case: Online placanje sportskog pregleda
#### Use-Case: Planiranje kalendara aktivnosti
#### Use-Case: Anketa - predlaganje novih sportskih aktivnosti

### Korisnik i recepcionar
#### Use-Case: Uzivo registracija korisnika
#### Use-Case: Uzivo zakazivanje treninga
#### Use-Case: Uzivo otkazivanje treninga
#### Use-Case: Uzivo placanje
#### Use-Case: Uzivo zakazivanje sportskog pregleda
#### Use-Case: Uzivo placanje sportskog pregleda

### Recepcionar
#### Use-Case: Evidentiranje dolazaka korisnika na trening
#### Use-Case: Pravljenje platnog spiska

### Nutricionista
#### Use-Case: Online zakazivanje sastanka sa nutricionistom
#### Use-Case: Uzivo zakazivanje sastanka sa nutricionistom

### Trener
#### Use-Case: Rezervacija termina
#### Use-Case: Otkazivanje termina
#### Use-Case: Azuriranje termina
#### Use-Case: Izmena licnog dela web-sajta
#### Use-Case: Postavljanje informacija na grupu za grupni sport
#### Use-Case: Pravljenje zahteva za novu operemu

### Sistemski administrator
#### Use-Case: Registracija trenera
#### Use-Case: Brisanje naloga
#### Use-Case: Ubacivanje nove sportske aktivnosti
#### Use-Case: Brisanje sportske aktivnosti
#### Use-Case: Postavljanje informacija na sajt

### Uprava
#### Use-Case: Obrada zahteva za novu opremu
#### Use-Case: Obrada zahteva za nove sportske aktivnosti
