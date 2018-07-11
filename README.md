## Screenshot

<img width="1662" alt="screenshot_journal" src="https://user-images.githubusercontent.com/31956031/39628409-4beb1648-4fa9-11e8-9b01-e3a6a21d4956.png">


# Individuell - Personlig Journal
> Skapa en personlig journal med PHP & MySQL.
>> https://github.com/swedenSnow/journal

# Krav
* I inloggat läge ska man kunna se alla sina tidigare inlägg och det ska finnas ett formulär där man kan skapa ett nytt inlägg med en titel och ett innehåll. När man lägger till det nya inlägget via formuläret så laddas sidan (eller läggs till med JavaScript) om och i listan av inlägg finns det nya inlägget.
* I inloggat läge ska man även kunna ta bort ett tidigare inlägg.
* I inloggat läge ska man kunna redigera ett tillagt inlägg.
* I utloggat läge sidan ha ett inloggningsformulär där användaren kollas mot databasen om användaren finns eller inte. Om användaren existerar i databasen så ska man komma till det inloggade läget som beskrevs tidigare.
* Om man stänger ner sidan och öppnar den igen så ska man fortsätta vara inloggad och inte behöva logga in igen. Det ska även finnas en utloggningsknapp så man kan manuellt logga ut. Man ska dock inte kunna vara inloggad för evigt utan man ska bli automatiskt utloggad efter en viss tid.
* Lösenordet för användaren får inte lagras i klartext utan måste hashas innan det läggs in i databasen, lösenordet måste senare verifieras mot denna hash, detta görs med PHPs inbyggda funktioner för detta: använd `PASSWORD_BCRYPT` när du hashar dina lösenord.
* Sidan ska vara responsiv, tydligt semantisk strukturerad och användarvänlig.
* Koden ska vara korrekt indenterad, väl namngiven och kommenterad vid behov.

## Inlämning

* Lämnas in senast: **24/5 23.59**
