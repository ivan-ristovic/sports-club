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

#### [Use-Case: Online registracija korisnika](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Online%20registracija%20korisnika.txt)
#### [Use-Case: Online zakazivanje treninga](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Online%20zakazivanje%20treninga.txt)
#### [Use-Case: Online otkazivanje treninga](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Online%20otkazivanje%20individualnih%20treninga.txt)
#### [Use-Case: Online placanje usluga](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Online%20pla%C4%87anje%20usluga.txt)
#### [Use-Case: Online zakazivanje sportskog pregleda](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Online%20zakazivanje%20sportskog%20pregleda.txt)
#### [Use-Case: Online otkazivanje sportskog pregleda]()
#### [Use-Case: Planiranje kalendara aktivnosti]()
#### [Use-Case: Anketa - predlaganje novih sportskih aktivnosti]()

### Korisnik i recepcionar
#### [Use-Case: Uzivo registracija korisnika](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Uzivo%20registracija%20korisnika.txt)
#### [Use-Case: Uzivo zakazivanje treninga](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Uzivo%20zakazivanje%20treninga.txt)
#### [Use-Case: Uzivo otkazivanje treninga](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/U%C5%BEivo%20otkazivanje%20treninga.txt)
#### [Use-Case: Uzivo placanje usluga](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Uzivo%20placanje%20usluga.txt)
#### [Use-Case: Uzivo zakazivanje sportskog pregleda](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/U%C5%BEivo%20zakazivanje%20sportskog%20pregleda.txt)

### Recepcionar
#### [Use-Case: Evidentiranje dolazaka korisnika na trening]()
#### [Use-Case: Pravljenje platnog spiska]()

### Nutricionista
#### [Use-Case: Online zakazivanje sastanka sa nutricionistom]()
#### [Use-Case: Uzivo zakazivanje sastanka sa nutricionistom]()

### Trener
#### [Use-Case: Rezervacija termina](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Rezervacija%20termina.txt)
#### [Use-Case: Otkazivanje termina]()
#### [Use-Case: Azuriranje termina](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/A%C5%BEuriranje%20termina%20treninga.txt)
#### [Use-Case: Izmena licnog dela web-sajta]()
#### [Use-Case: Postavljanje informacija na grupu za grupni sport]()
#### [Use-Case: Pravljenje zahteva za novu operemu]()

### Sistemski administrator
#### [Use-Case: Registracija trenera](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Dodavanje%20novog%20trenera.txt)
#### [Use-Case: Brisanje naloga]()
#### [Use-Case: Ubacivanje nove sportske aktivnosti](https://github.com/ivan-ristovic/sportski-klub/blob/master/usecases/Ubacivanje%20novog%20sportskog%20programa.txt)
#### [Use-Case: Brisanje sportske aktivnosti]()
#### [Use-Case: Postavljanje informacija na sajt]()

### Uprava
#### [Use-Case: Obrada zahteva za novu opremu]()
#### [Use-Case: Obrada zahteva za nove sportske aktivnosti]()
