<?php
?>


<h1 class="header">Reports</h1>

<h2 class="header">Kmom01</h2>
<h1 class="header">Hur känns det att hoppa rakt in i klasser med PHP, gick det bra?<h1>
<p class="metext">Det kändes lite ovant då det var ett tag sedan vi höll på med PHP men eftersom vi jobbat med klasser innan denna kurs så var strukturen av en klass inte lika krånglig att lära in. Olika ser det ut men det är en sak som kommer sätta sig efter ett par veckor förhoppningsvis. Sedan så var det lite krånligt med hur jag skulle lagra data mellan omladdningar av sidan, men jag löste det till slut. Så det var mitt största problem i just detta kursmoment.</p>

<h1 class="header">Berätta om dina reflektioner kring ramverk, anax-lite och din me-sida?<h1>
<p class="metext">Eftersom vi jobbat med ramverk i tidigare kurs så var det inte helt nytt. Visste på ett ungefär hur det skulle vara uppdelat så på den fronten var det inte nytt. Men att hantera det i PHP är definitivt nytt då det finns mycket som vi ska utveckla själva och strukturera annorlunda eftersom det innehåller objektorienterad PHP. Mycket att gå igenom och lära in i början då det blev lite krångligt och ovant men det kom man in i sakta men säkert under veckan och till slut så fick man ihop sin me-sida med navbar.</p>

<h1 class="header">Gick det bra att komma igång med MySQL, har du liknande erfarenheter sedan tidigare?<h1>
<p class="metext">Då vi jobbar lite smått med MySQL innan på gymnasiet så var första delen inte så jättenytt. Samt att vi jobbat lite med databaser i föregående kursers så vet man på ett ungefär hur det ska se ut men kanske inte exakt likadant. Så jag skulle säga ja att jag har erfarenhet till en grundnivå men inte utöver det.</p>

<a href="http://www.student.bth.se/~arno16/dbwebb-kurser/oophp/me/kmom01/guess/">GUESS THE NUMBER</a>


<h2 class="header">Kmom02</h2>

<h1 class="header">Hur känns det att skriva kod utanför och inuti ramverket, ser du fördelar och nackdelar med de olika sätten?</h1>
<p class="metext">Det har jag inte ens tänkt på utan jag ser varje uppgift vi gör som en ny grej att lära sig och att man kan använda sig utav det i andra delar som kanske att väva in det i ramverket om man nu vill det. Det känns bra att använda koden direkt i ramverket med då man kan använda sin kod på olika ställen.
</p>
<h1 class="header">Hur väljer du att organisera dina vyer?</h1>
<p class="metext">Min huvudsakliga katalog heter view och i den har jag fler kataloger och dem heter navbar1 samt take1. I min navbar1 katalog så har jag så ligger min navbar. I take1 katalogen så ligger de andra vyerna, de vyer som skall vara tillgängliga på sidan. Men även också min header samt footer. I min route/base.php så ligger alla sessions för vyerna.
</p>

<h1 class="header">Berätta om hur du löste integreringen av klassen Session.</h1>
<p class="metext">Min klass för uppgiften ligger under src/Session/Session.php. Sen så la jag till $app->session  = new \Ara\Session\Session(); i min index.php så den skulle hitta till min klass för att sedan kunna användas i min session vy.
Jag gjorde också en ny route-fil för mina sessions och en ny vy-fil.  Istället för att skapa flera vy-filer så hanteras de vyerna direkt i route/session.php.</p>
</p>

<h1 class="header">Berätta om hur du löste uppgiften med Tärningsspelet 100/Månadskalendern, hur du tänkte, planerade och utförde uppgiften samt hur du organiserade din kod?</h1>

<p class="metext">Jag valde att göra månadskalendern då jag inte hade någon riktigt ide om hur jag skulle ge mig på tärningsspelet. När jag läste igenom uppgiften i början av veckan så började jag direkt försöka tänka om hur man kan bygga upp koden för månadskalendern. Det blev betydligt mycket rörigare än jag hade tänkt. Fick med ganska mycket echos i klassen då jag inte visste riktigt hur jag ska utföra det på annat sätt. Testade rensa ut mycket från klassen men då blev det mycket errors och sånt så jag ändrade snabbt tillbaka. Det som var positivt med detta var att det inte blev så mycket kod i min vy. I min klass så har jag en funktion som heter Calendar() i den så kallar jag på de andra funktionerna i klassen vid de lägen då de ska användas. Man kan säga att Calendar() är min huvudsakliga funktion som hanterar de mindre delarna i min kalender. Den kallar på min funktion dayName() som är namnet på mina dagar som jag har längst upp i kalendern(Mån-sön). För att få ut antalet dagar så kollade jag om det fanns något i php-manualen och det fanns det. Det jag använda är cal_days_in_month(CAL_GREGORIAN) som ger mig rätt antal dagar per månad. I denna funktion kollar jag också om det finns någon dag som heter Sunday och om det finns så markeras dem röda. Det finns även så att jag kollar om det är nuvarande dag och den markeras som röd. Mina två sista funktioner i klassen är nextMonth() och prevMonth() som kollar om man uppnåt den 12e månaden så sätts det en counter på året och därefter visas nästa och med första månaden i året. Motsvarande gör prevMonth som kollar om man hamnar på månad 1 och har man passerat den så sätt det en counter fast med minus och man hamnar på föregående år på månad 12.
</p>

<h1 class="header">Några tankar kring SQL så här långt?</h1>
<p class="metext">För tillfället har jag faktiskt inga större tankar inom SQL, uppgiften vi gör är inte så krånglig men på vissa delar får man tänka igenom lite men annars flyter det på bra. Hoppas det vävs in mer i de huvudsakliga uppgifterna i de resterande kursmomenten.</p>



<h2 class="header">Kmom03</h2>
<p class="metext">Här skrivs det..</p>


<h2 class="header">Kmom04</h2>
<p class="metext">Här skrivs det..</p>



<h2 class="header">Kmom05</h2>
<p class="metext">Här skrivs det..</p>


<h2 class="header">Kmom06</h2>
<p class="metext">Här skrivs det..</p>



<h2 class="header">Kmom07</h2>
<p class="metext">Här skrivs det..</p>
