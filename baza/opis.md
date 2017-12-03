# Baza sportskog centra

## Opis

Baza sportkog centra sadrži informacije o:
    1. zaposlenima u sportskom centru (trenerima, lekarima, nutricionistima, recepcionarima i sistemskim administratorima),
    2. korisnicima
    3. aktivnostima koje se održavaju u sportskom centru kao i informacije o učesnicima u njima,
    4. uplatama korisnika za usluge sportskog centra.

### Opis entiteta

Baza sadrži sledeće entitete:
a) nezavisni:
    - zaposleni
    - korisnik
    - aktivnost
    - spisak sala
b) zavisni:
    - trener (zavisi od zaposlenog)
    - lekar (zavisi od zaposlenog)
    - nutricionista (zavisi od zaposlenog)
    - recepcionar (zavisi od zaposlenog)
    - sistemski administrator (zavisi od zaposlenog)
    - grupna aktivnost (zavisi od aktivnosti)
    - individualna aktivnost (zavisi od aktivnosti)
    - grupni rezervisan termin (zavisi od rezervisanog termina)
    - individualni rezervisan termin (zavisi od rezervisanog termina)
c) agregirani:
    - drži (veza: trener - aktivnost)
    - rezervisan termin (veza: drži - spisak sala)
    - kalendar (veza: korisnik - rezervisan termin)
    - prisustvuje (veza: korisnik - grupni rezervisan termin)
    - zakazan individualni trening (veza: korisnik - individualni rezervisan termin)
    - uplata (veza: korisnik - aktivnost)
    - uplata razgovora (veza: korisnik - nutricionista)
    - uplata pregleda (veza: korisnik - lekar)

## Zaposleni
Sadrži opste informacije o svim zaposlenima u sportskom centru.
Zaposlenog karakteriše:
- id
- ime
- prezime
- telefon

### Sistemski admin
Sistemski administrator je zaposlen u sportskom centru.
- id zaposlenog

### Recepcionar
Recepcionar je zaposlen u sportskom centru.
- id zaposlenog

### Trener
Trener je zaposleni u sportskom centru.
- id zaposlenog

### Lekar
Lekar je zaposlen u sportskom centru.
- id zaposlenog

### Nutricionista
Nutricionista je zaposlen u sportskom centru.
- id zaposlenog

## Aktivnost
Trener može držati više različitih aktivnosti. Jednu aktivnost može držati više različitih trenera.
Aktivnost karakteriše:
- id aktivnosti

### Individualna
Individualna aktivnost je vrsta aktivnosti.
- id aktivnosti

### Grupna
Grupna aktivnost je vrsta aktivnosti.
- id aktivnosti

## Sala
Sadrži infomacije o svim salama u okviru sportkog centra.
Salu karakteriše:
- id
- kapacitet

## Korisnik
Sadrži informacije o registrovanim korisnicima sportskog centra.
Korisnika karakteriše:
- id
- broj treninga

## Uplata
Korisnik može uplatiti više aktivnosti ali ne mora uplatiti nijednu. Jedna aktivnost može imati od 0 do više uplata.
Uplatu karakteriše:
- id
- broj_treninga
- datum
- period

## Rezervisan termin
Mogu se rezervisati termini za aktivnosti po salama koje drže treneri. Jedan termin karakteriše:
- id
- datum
- vreme

### Termin za individualne aktivnosti

### Termin za grupne aktivnosti

## Kalendar
Rezervisani termini od strane jednog korisnika se prikazuju u njegovom personalizovanom kalendaru.

## Prisustvuje
Sadrži informacije o prisustvovanju korisnika nekoj grupnoj aktivnosti centra.
- id korisnika
- id grupnog rezervisanog termina

## Zakazana individualna aktivnost
Korisnici mogu zakazati termin za individualne aktivnosti. Jedno zakazivanje karakteriše:
- došao

## Grupa prisustvuje
Korisnik može da prisustvuje terminu za grupne aktivnosti.

## Uplata razgovora
Sadrži informacije o uplatama korisnika za razgovore sa nutricionistom. Jedan korisnik može uplatiti više termina.
Uplatu razgovora karakteriše:
- id korisnika
- id nutricioniste

## Uplata pregleda
Sadrži informacije o uplatama korisnika za sportski pregled. Jedan korisnik može uplatiti više termina.
Uplatu pregleda karakteriše:
- id korisnika
- id lekara
