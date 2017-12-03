Laddningstid
=============================

Jag valde att analysera samma sidor som i färgschemaanalysen, dvs [Ryanair](https://www.ryanair.com/se/sv/), [FC Barcelona](https://www.fcbarcelona.com/) och [Bokus](https://www.bokus.com/). Jag gjorde detta eftersom jag tyckte att det var intressant att fördjupa mig mer i sidor som jag redan hade börjat analysera, och att sidorna är från tre helt olika områden och företag gav bredd och variation.

Som verktyg för att analysera sidorna använde jag Google PageSpeed och Google Chrome DevTools.

Ett kalkylark med resultatet av analyserna finns [här](https://docs.google.com/spreadsheets/d/1nK9SZmDTsmK5J7kOsZ2Mx2jlCFVnbbjm5zq2_p53xBY/edit?usp=sharing).


##Ryanair

[FIGURE src="image/ryanair.jpg"]

| Mätning | Medelvärde |
| ------- | ---------- |
| Requests | 142 |
| Load (s) | 3.9 |
| Size (MB) | 2.3 |
| PageSpeed (mobile) | 44/100 |
| Pagespeed (desktop) | 50/100 |


Google PageSpeed Insights rekommenderar:

+ Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
+ Optimera bilder
+ Utnyttja cachelagring i webbläsare
+ Aktivera komprimering
+ Prioritera synligt innehåll
+ Förminska JavaScript
+ Förminska HTML (mobil)

Enligt PageSpeed är Ryanairs sida inte optimerad och upplevs troligen som långsam av användarna. Sidan får ett lågt betyg och det finns mycket som skulle kunna förbättras.


##Barcelona FC

[FIGURE src="image/barca.jpg"]

| Mätning | Medelvärde |
| ------- | ---------- |
| Requests | 89 |
| Load (s) | 4.6 |
| Size (MB) | 1.8 |
| PageSpeed (mobile) | 53/100 |
| Pagespeed (desktop) | 59/100 |


Google PageSpeed Insights rekommenderar:

+ Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
+ Optimera bilder
+ Utnyttja cachelagring i webbläsare
+ Aktivera komprimering
+ Förminska HTML

Enligt PageSpeed är även FC Barcelonas sida inte optimerad och kan säkert upplevas som långsam av användarna. Betyget är inte lika lågt som Ryanairs men följer inte heller rekomendationerna för optimering.


##Bokus

[FIGURE src="image/bokus.jpg"]

| Mätning | Medelvärde |
| ------- | ---------- |
| Requests | 78 |
| Load (s) | 3.2 |
| Size (MB) | 0.9 |
| PageSpeed (mobile) | 77/100 |
| Pagespeed (desktop) | 80/100 |


Google PageSpeed Insights rekommenderar:

+ Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
+ Optimera bilder
+ Utnyttja cachelagring i webbläsare

I det här fallet ger PageSpeed ganska bra betyg till Bokus sida, men ger också förslag på förbättringsmöjligheter. Sidan skulle kunna tillämpa optimeringsmetoder för bättre prestanda för att inte upplevas som långsam.


## Sammanfattning

Bildoptimering och att ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten är de vanligaste rekommendationerna från Google PageSpeed både i mobil- och desktopanalyserna.

Ryanairs sida får sämst betyg från alla webbsidor som jag har analyserat. Jag blev lite förvånad över det resultatet, och att deras sida har så många möjligheter till förbättring. Man skulle tänka sig att ett sådant stort företag som är totalt beroende av internet skulle fundera lite mer på användbarheten för sin webbsida. Barcelonas sida är också dåligt optimerad, men webbsidan spelar inte lika stor roll för det som företaget gör. Bokus sida är mycket bättre optimerad än de två andra, men enligt PageSpeed finns det fortfarande möjlighet även för den sidan att förbättras.  

Jag hade inte tidigare tänkt på hur många sekunder tar för en sida att laddas ner eller hur lång tid som  jag tycker känns för lång för mig? Jag tror att upplevelsen inte bara beror på ren hastighet men också på vilken typ av sida det är och vad man vill få från den. I den här analysen var t ex Barcelonas sida lite långsammare än Ryanairs sida, men min upplevelse av Ryanairs sida var sämre eftersom jag stördes av att vara tvungen att vänta på en helt ointressant reklamannons att laddas ner under tiden som jag väntade på resultatet av en sökning av priser på biljetter.

Jag skulle rangordna webbsidorna så här:    

1. Bokus
2. FC Barcelona
3. Ryanair

**Jag valde att göra uppgiften ensam.**
