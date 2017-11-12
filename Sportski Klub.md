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

#### Online registracija korisnika

- **Učesnici**:
    - Neregistrovani korisnik: Zeli da se registruje u sportski klub kako bi imao priliku da zakaze trening.


- **Preduslovi**:
    - Web-sajt je u funkciji.
    - Korisnik ima pristup internetu.


- **Postuslovi**:
    - Korisniku je napravljen nalog na sistemu.
    - Baza korisnika je azurirana.


- **Osnovni tok**:
	1. Korisnik odlazi na deo web-sajta za registraciju novih korisnika.
	2. Korisnik unosi potrebne podatke i kliknuo je na polje “Registruj se”.
	3. Sistem vrsi validaciju podataka.
	4. Sistem cuva unete podatke i obelezava nalog kao privremeni.
	5. Sistem salje e-mail korisniku sa linkom za potvrdu registracije, obavestava ga i ceka na potvrdu.
	6. Korisnik proverava mail i potvrdjuje registraciju prateci link za potvrdu.
	7. Sistem obelezava da je nalog aktiviran.
	8. Sistem obavestava korisnika da je nalog uspesno kreiran.


- **Alternativni tok**:
	3. Neuspesna verifikacija podataka: Sistem obavestava korisnika na kom polju verifikacija nije uspela. Slucaj upotrebe se nastavlja na koraku 2.
	5. Link za potvrdu registracije je istekao: Korisnik nije potvrdio registraciju u predvidjenom roku. Sistem brise informacije o korisniku. Slucaj upotrebe se zavrsava.
	6. Korisnik nije dobio mail I obavestava sistem da mu ga ponovo posalje. Slucaj upotrebe se nastavlja na koraku 5.


- **Specijalni zahtevi**:
    Nema


- **Dodatne informacije**:
	Potrebni podaci za registraciju korisnika su:
	- Ime
	- Prezime
	- Username
	- E-mail
	- Lozinka
	- Polje za proveru lozinke
	- Captcha.


#### Online zakazivanje treninga
#### Online otkazivanje treninga
#### Online placanje treninga
#### Online zakazivanje sportskog pregleda
#### Online placanje sportskog pregleda
#### Planiranje kalendara aktivnosti
#### Anketa - predlaganje novih sportskih aktivnosti

### Korisnik i recepcionar
#### Uzivo registracija korisnika
#### Uzivo zakazivanje treninga
#### Uzivo otkazivanje treninga
#### Uzivo placanje
#### Uzivo zakazivanje sportskog pregleda
#### Uzivo placanje sportskog pregleda

### Recepcionar
#### Evidentiranje dolazaka korisnika na trening
#### Pravljenje platnog spiska

### Nutricionista
#### Online zakazivanje sastanka sa nutricionistom
#### Uzivo zakazivanje sastanka sa nutricionistom

### Trener
#### Rezervacija termina
#### Otkazivanje termina
#### Azuriranje termina
#### Izmena licnog dela web-sajta
#### Postavljanje informacija na grupu za grupni sport
#### Pravljenje zahteva za novu operemu

### Sistemski administrator
#### Registracija trenera
#### Brisanje naloga
#### Ubacivanje nove sportske aktivnosti
#### Brisanje sportske aktivnosti
#### Postavljanje informacija na sajt

### Uprava
#### Obrada zahteva za novu opremu
#### Obrada zahteva za nove sportske aktivnosti
