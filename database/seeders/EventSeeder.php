<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            "title" => "Putnu diena",
            "date" => "2024-10-05",
            "date_untill" => null,
            "time" => "plkst. 13.00 - 15.00",
            "short_info" => null,
            "description" => '
                    <p>Puntu vērošana, pārgājiens uz Ungurezeru, muzeja apskats kā arī tējas pauze un viktorīna.</p>
                    <p>Ungurmuiža ir Rudens Eiropas Putnu vērošanas dienu 2024 dalībniece!<br>Rudens Putnu dienas ir daļa no 1993.gadā aizsāktās&nbsp;Eiropas Putnu vērošanas dienu tradīcijas jeb&nbsp;<em><a href="http://www.eurobirdwatch.eu/" rel="noreferrer noopener" target="_blank">Euro Birdwatch</a>,&nbsp;</em>ko organizē&nbsp;<a href="https://www.birdlife.org/" rel="noreferrer noopener" target="_blank"><em>BirdLife</em>&nbsp;<em>International</em></a>&nbsp;–
                        lielākā putnu aizsardzības organizācija pasaulē, kurā ietilpst arī
                        Latvijas Ornitoloģijas biedrība.&nbsp; Rudens Putnu dienās Eiropā piedalās
                        vairāk nekā 40 valstis&nbsp;un 20 000 dalībnieku, kuri vēro putnus aptuveni
                        1000 dažādos pasākumos.&nbsp;<br>Ungurmuiža aicina uz ekskursiju Ungurmuižas
                        seno ozolu parkā, kā arī pārgājienā uz Ungura ezeru, lai pieredzējušu
                        ornitologu vadībā vērotu putnu rudens migrāciju, klausītos nedaudz
                        skumjās dzērvju balsis un tikai gulbjiem raksturīgo spārnu švīkstoņu.<br>Pēc
                        pārgājiena putnu vērotājus sagaidīs omulīgais Ungurmuižas Tējas namiņš,
                        lai sasildītu ar piparmētru tēju un pacienātu ar plātsmaizi.&nbsp;<br>Putnu dienas dalībniekiem muzeja apmeklējums bez maksas.</p>
                    <p>Gaidīsim ciemos!</p>',
            "image" => "/1024/putnu-dienas.jpg",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "KJOGENSTĀSTI",
            "date" => "2024-10-26",
            "date_untill" => null,
            "time" => " plkst. 20.00",
            "short_info" => null,
            "description" => '
                        <p>2017. gada Lielajā Baltijas Rampā&nbsp;&nbsp;katra valsts tradicionāli izrādija
                        2 savu teātru izrādes, bet&nbsp;&nbsp;tās bija iestudējuši kaimiņvalstu režisori.
                        Jelgavas Student teātris uzņēma Igaunija Tartu Universitātes režisoru
                        Kalevu Kudu. Un tika iestudēta mūsdienīga versija par A. Čehova “Ķiršu
                        dārzu”. Tas lika pamatu ilgākai radošai sadarbībai starp Latvijas un
                        Igaunijas universitāšu teātriem – festivālu apmaiņas ,kopīgā vasaras
                        radošā nometne&nbsp;&nbsp;un TOP vēl viens&nbsp;&nbsp;iestudējums – KJOGENSTĀSTI..</p>
                        <p>&nbsp;2018. gadā tieši Latvijas simtgadē pirmiestudējums&nbsp;&nbsp;Japāņu viduslaiku&nbsp;&nbsp;farsam&nbsp;<em>kjogen</em>&nbsp;,kas&nbsp;&nbsp;pēc
                        sava rašanās veida NO teātra paspārnē, ļauj&nbsp;&nbsp;vilkt analoģijas ar
                        viduslaiku mistērijām un Eiropas Delartisko komēdiju.&nbsp;&nbsp;Pirmo reizi
                        latviešu valodā tiek&nbsp;&nbsp;iztulkoti šie teksti un sadarbojoties diviem
                        režisoriem Kalevam Kudu un Astrai Kacenai&nbsp;&nbsp;radās netradicionāls
                        latviskajai teātra kultūrai iestudējums&nbsp;<strong><em>KJOGENSTĀSTI.</em></strong></p>
                        <p>&nbsp;Pirmtulkojums latviešu valodā. Notika aizraujošs izpētes darbs par
                        KJOGEN specifiku runas melodiskumā,ritmikā ,aktieru kustību plastikā.
                        Režisori un aktieri salāgoja to ar latviešu valodas un tempermenta
                        atšķirībām, tuvojoties jappāniskajam kolorītam.</p>
                        <p>Izrāde ieguvusi augstākā&nbsp;&nbsp;līmeņa novērtējumu skatē “ GADA IZRĀDE-
                        2018”,piedalījusies festivālo Lietuvā ( Kupišķos) ,Igaunijā( Tartu)
                        un&nbsp;&nbsp;Latvijā .</p>
                        <p>Tai skaitā LATVIJAS AMATIERTEĀTRU SALIDOJUMĀ 2018. gadā , Festivālā
                        RĪGA SPĒLĒ TEĀTRI . Kā arī ar šo kopdarbu tika iepazīstināti Baltijas
                        valstu režisori Baltijas Mazajā Rampā “CITĀDS TEĀTRIS”&nbsp;&nbsp;2020. gadā
                        Lielvārdē.&nbsp;</p>
                        <p>2022.gadā Latvijas Biozinātņu un tehnoloģiju universitātes teātris
                        tika uzaicināts uz 1. Latviešu diasporas teātru saietu PLATS SOLIS S
                        Stokholmā, un 10. Starptautisko amatierteātru festivālu “Soli pa solim”
                        Rēzeknē –&nbsp;&nbsp;otro elpu izrādei piešķīra komponista Aleksandra Tomasa
                        Matjusona iesaistīsanās projektā ,kas tika papildināts ar muzikālām
                        miniatūram starp spēles epizodēm. Izrāde stabili dzīvo Jelgavas Studentu
                        teātra repertuārā, regulāri tiek izrādīta Jelgavā un viesizrādēs Willa
                        teātrī ,Fon Stricka vilā, Ziemermuižā u.c.</p>
                        <p>Ieeja pret ziedojumiem!</p><br>',
            "image" => "/1024/jelgavas-lbtu.jpg",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "Vēlās brokastis",
            "date" => "2024-09-22",
            "date_untill" => "2024-12-15",
            "time" => "plkst. 11.00",
            "short_info" => null,
            "description" => '
                    <p>Atgriežoties rudenim un gaisā virmojot pašu ceptas maizes un&nbsp; saldās
                    ābolu plātsmaizes smaržai, atgriežas arī Ungurmuižas vēlās brokastis!</p>
                    <p>Nesteidzīgu brīvdienu rītu iesākt aicinām ar siltiem brokastu
                    ēdieniem, iecienīto krēmzupu, putru, svaigām uzkodām un salātiem. Pavāri
                    būs sarūpējuši gardās pankūkas, neaizmirstot arī par citiem saldiem
                    našķiem, lai arī mazie viesi justos īpaši gaidīti! Citrusaugļu ūdens,
                    kafija, tēja, un, protams, Ungurmuižas siltais smiltsērkšķu-pīlādžu
                    kokteilis ir neatņemama vēlo brokastu sastāvdaļa.</p>
                    <p>Vēlās brokastis ir brīnišķīgs veids, kā satikties un pavadīt
                    brīvdienu draugu vai ģimenes lokā, vai pat nosvinēt neliels svinības!</p>
                    <p> Ungurmuiža aicina izbaudīt gardu ēdienu, sildošu dzērienu un labu atmosfēru līdz pat decembrim!</p>
                    <p>Vietu skaits ierobežots, galdiņu rezervācija pa tālr. 22007332.</p>
                    <p>Cena pieaugušajiem 30 eur, bērniem no 5 līdz 12 gadu vecumam 15 eur. </p>

                    <p>Biļetes: <a href="https://www.bilesuparadize.lv/lv/performance/31660" data-type="link" data-id="https://www.bilesuparadize.lv/lv/performance/31660">https://www.bilesuparadize.lv/lv/performance/31660</a></p>
            ',
            "image" => "/1024/brokastis.jpg",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "Dieva zīmes",
            "date" => "2024-09-07",
            "date_untill" => "2024-10-20",
            "time" => null,
            "short_info" => null,
            "description" => "
                        <p>Izstādes “Dieva Zīmes” atklāšana 7. septembrī plkst. 15:00 Ungurmuižā.</p>
                        <p>Stikls kā materiāls ir gana specifisks, bet arī paver plašas iespējas
                            radīt, gan dizaina, gan mākslas jomā. Stikla mākslas tradīcijas pasaulē
                            un Latvijā sniedzas gana tālu. Stikls kā mūsu ikdienā plaši sastopams
                            materiāls, bieži autoru izmantots arī mākslas darbu radīšanai.</p>
                        <p>No 7. septembra līdz 2024. gada 20. oktobrim Ungurmuižā skatāma
                            Vinetas Grozas un Valda Putniņa izstāde “Dieva Zīmes”. Autoru simbioze
                            kopizstādē uzsver gaismas nozīmi garīgajos un fiziskajos procesos,
                            veidojot vizuālas metaforas stiklā. Mākslas darbu ekspozīcija aicina
                            domāt par vērtību noturību, iespēju izvēlēties virzību, ātrumu un mērķi.
                            Mākslinieki veidojot, interpretējot un radot izmanto stikla materiāla
                            īpašības: izturību, gaismas caurlaidību, plastiku, trauslumu, asumu,
                            funkcionālismu. Izstāde “Dieva Zīmes” aicina sajust spēku dziļākajās
                            zemapziņas datnēs, aktivizēt latvisko kodu un izgaismo radīšanas
                            pirmsākumus divu organismu mijiedarbībā.</p>
                        <p>“Katram cilvēkam ir savs siluets, sava faktūra. Mani domu nospiedumi
                            stiklā ir faktūras un silueti, kas nes manu identitāti pasaulē,” uzskata
                            māksliniece. Vineta Groza ir Latvijas Mākslas akadēmijas Vizuāli
                            plastiskās nodaļas vadītāja, profesore kopš 2023. gada. LMA MA grāds
                            (1999) Stikla mākslas nozarē. No 1998. gada Stikla un mākslas studiju
                            centra dalībniece. Kopš 1993. gada regulāri piedalās stikla mākslas
                            izstādēs Latvijā un ārzemēs – Dānijā, Lietuvā, Igaunijā, Ukrainā,
                            Čehijā, Francijā, Somijā. 2012. gadā personālizstāde “Klasiskais stikls”
                            Rihimaki Stikla mākslas muzejā Somijā.</p>
                        <p>Valdis Putniņš kopš 2021. gada studē Latvijas Mākslas akadēmijas
                            vizuāli plastiskās mākslas stikla nodaļā. 2022. gadā absolvējis ISSP
                            laikmetīgās fotogrāfijas skolu. Piedalījies un regulāri piedalās daudzās
                            un dažādās grupu izstādēs stikla mākslā, laikmetīgajā fotogrāfijā,
                            konceptuālajā glezniecībā – gan Latvijā, gan ārzemēs.</p>
                        <p><br>Savos konceptuālajos darbos tēlnieciskas pārdomas pauž stikla
                            tektonikā, bieži tajās integrējot tekstu un fotogrāfiju. Aizrauj stikla,
                            tekstila, betona, metāla, fotogrāfijas, krāsvielu savstarpēja
                            sadzīvotspēja dažādos instalāciju formātos.</p>
            ",
            "image" => "/1024/dieva-zimes.png",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "Ungurmuižas īpašais rudens piedāvājums pārim! ",
            "date" => null,
            "date_untill" => null,
            "time" => null,
            "short_info" => "150 eur 2 personām",
            "description" => "
                        <p>150 eur 2 personām.</p>
                        <p>Nakšņošana senatnīgā muižā ar nesteidzīgām brokastīm Ungurmuižas restorānā. </p>
                        <p>Divu kārtu vakariņas katrai gaumei ar glāzi vīna.</p>
                        <p>Muzeja un izstādes apmeklējums.</p>
                        <p>Iepriekšēja rezervācija pa tālr. 22007332 vai rakstot uz info@ungurmuiza.lv</p>
            ",
            "image" => "/1024/rudens-piedavajums.jpg",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "Iepazīsti Ungurmuižu!",
            "date" => null,
            "date_untill" => null,
            "time" => null,
            "short_info" => "Ekskursija gida pavadībām un foto orientēšanās skolēniem",
            "description" => '
            <p>Skola vairs nav aiz kalniem! Īpašs piedāvājums skolēniem drēgnajās rudens un ziemas dienās no Ungurmuižas&nbsp;!&nbsp;</p>
<p>Skolēni aicināti izzināt Ungurmuižu Raiskuma pagastā, kur
    interaktīvas nodarbības laikā skolēniem ir iespēja iepazīties ar muižas
    dzīvi 18. gadsimtā. Tā ir iespēja izzināt autentisku baroka laika koka
    muižas dzīvi, jo Ungurmuiža ir vienīgā muiža Latvijā, kurā saglabājušies
    oriģināli 18. gadsimta sienu gleznojumi. Nodarbības laikā skolēniem
    iespēja ne tikai aplūkot dažādos artefaktus, bet arī tos aptaustīt,
    iepazīties tuvāk ar daudzajiem muižas krājuma priekšmetiem.</p>
<p>Papildus sienu gleznojumu apskatei un priekšmetu izzināšanai, skolēni
    aicināti iepazīt senās skolas lietas. Tagadējā restorāna ēka piedāvā
    izzināt laiku, kad muižā atradās skola latviešu bērniem. Savukārt
    padomju okupācijas laikā pati muiža kalpoja kā Kūduma pamatskola, tāpēc
    viena no muižas ekspozīcijas telpām sniedz iespēju salīdzināt, kā
    mainījusies skolas dzīve un bērnu ikdiena laika gaitā.</p>
<p>Līdzās skolēni aicināti iepazīties ar muižas apkārti, kas saglabājusi
    laikmeta auru, piedāvājot gūt vēl plašāku pieredzi muižas vēsturē.
    Muižas speciālisti piedāvā izzinošā veidā ar orientēšanās spēles
    elementiem atkārtot jauniegūtās zināšanas un atklāt vēl citus faktus par
    Ungurmuižu.</p>
<p>Nodarbības saturs un norise tiks pielāgota konkrētai skolēnu vecuma grupai.</p>
<p>Piedalāmies arī “Latvijas skolas soma” programmā:&nbsp;</p>
<p><a href="https://latvijasskolassoma.lv/norise/izzinosa-nodarbiba-ka-dzivoja-laudis-ungurmuiza/">https://latvijasskolassoma.lv/norise/izzinosa-nodarbiba-ka-dzivoja-laudis-ungurmuiza/ </a></p>



<figure>
    <table>
        <tbody>
            <tr>
                <td>Ieeja 1 pers.</td>
                <td>3 eur</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Gida pakalpojums</td>
                <td>30 eur</td>
                <td>Līdz 10 pers.&nbsp;15 eur</td>
            </tr>
            <tr>
                <td>Ieeja 1 pers. (+tēja un plātsmaize)</td>
                <td>5 eur</td>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
</figure><br>',
            "image" => "/1024/ekskursija.jpg",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "Apceļosim Latvijas pilis un muižas!",
            "date" => "2024-06-01",
            "date_untill" => "2024-10-26",
            "time" => null,
            "short_info" => null,
            "description" => '
                    <div itemprop="text">
                        <p>Apceļosim Latvijas pilis un muižas!</p>
                        <p>Latvijas puļu un muižu izzināšana ir kā ceļojums vairāku gadsimtu
                            garumā, sniedzot iespēju iepazīt mūsu kultūras mantojumu, izdzīvot
                            vēsturiskus notikumus un atklāt arhitektūru un māksu daudzveidību.</p>
                        <p>Latvijas Piļu un muižu asociācija arī šogad aicina piedalīties akcijā
                            “Apceļosim Latvijas pilis un muižas 2024” un no 1. jūnija līdz 26.
                            oktobrim doties iepazīt 63 kultūrvēsturiskos objektus visā Latvijā, arī
                            Ungurmuižu . Accijns laikā ceļotājiem ir iespēja krāt zīmogu burtus,
                            kurus var saņemt vai atrast katrā no 63 objektiem. Aktīvākie ceļotāji,
                            kas no sakrātajiem burtiem būs atminējuši vārdus un sakrājuši vismaz 10
                            brutos, būs iespēja piedalīties balvu izlozē.</p>
                        <p>Vairāk informāciju meklē: <a href="https://www.pilis.lv/lv/">www.pilis.lv</a> vai Facebook kontā: <a href="https://www.facebook.com/LPMAsociacija">Latvijas piļu un muižu asociācija</a></p>
                    </div>
            ',
            "image" => "/1024/apcelosim.jpg",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "Pētniecības darbi Ungurmuižā ",
            "date" => null,
            "date_untill" => null,
            "time" => null,
            "short_info" => null,
            "description" => '
            <div itemprop="text">
  <p>Ungurmuiža tiek pētīta no visām pusēm, modernas tehnoloģijas palīdz izprast unikālās vietas vēsturi.</p>



  <p>Greifsvaldes Universitātes Baltijas jūras reģiona muižu pētniecības
      centrs veic izpētes darbus trīs muižās un pilīs Latvijā – Ungurmuižā,
      Rundāles pils dārzā un Zlēku muižā.</p>



  <p>Greifsvaldes universitātes pētniecības projekts ir veltīts muižu ēku
      izpētei, kas tapušas pēc viduslaiku beigām, kopš 1500. gada. Baltijas
      jūras reģiona unikālajā kultūrainavā šīs ēkas joprojām ieņem ļoti</p>
  <p><a></a>nozīmīgu vietu. Lielā skaitā tās atrodamas desmit valstīs,
      precīzāk, daļā no Vācijas, Polijā, tādos Krievijas* apgabalos kā
      Kaļiņingrada, Ingermanlande un Karēlija, tāpat Baltijas valstīs Lietuvā,
      Latvijā, Igaunijā, kā arī Somijā, Zviedrijā, Dānijā un Norvēģijā.</p>



  <p>Lai gan arhitektūras vēsturnieki Baltijas jūras reģiona muižas jau
      uztver kā kopumu ar specifiskām vienojošām iezīmēm, izpratne un apziņa
      par kopēju kultūrvēsturisku ainavu minēto kaimiņvalstu muižu
      pārvaldīšanā vēl tikai pakāpeniski veidojas. Patiesībā šo kompleksu
      veidolā skaidri identificējamas kā saturiskas, tā formālas saiknes un
      eiropeiskas starpkultūru ietekmes. Projekta vadošā organizācija ir
      Greifsvaldes Universitāte, un to vienādās daļās finansē Zinātnes,
      kultūras, federālo un Eiropas lietu ministrija
      Mēklenburgas-Priekšpomerānijā un Federālās valdības komisārs kultūras un
      mediju jautājumos. Trīs gadus ilgajā finansēšanas posmā pētījumu fokusā
      būs rūpīgi atlasīti 18. gadsimta objekti, kas liecina par muižu un to
      ēku ziedu laikiem Baltijas jūras reģionā. Objekti atrodas teritorijā,
      kurā ietilpst daļa no Vācijas, Polija, Baltijas valstis Lietuva, Latvija
      un Igaunijas, kā arī Somija, Zviedrija, Dānija un Norvēģija.</p>



  <p>Dažādu muižu celtniecībā un interjeru veidošanā iesaistīto arhitektu
      un mākslinieku sadarbības tīkli ir tikai viens no nosaukto starpkultūru
      saikņu piemēriem. Pagaidām trūkst salīdzinošu pētījumu par ainavu mākslu
      un muižu ēkām kā teritoriālās vēstures daļu, kas balstītos kopējā
      datubāzē. Tādēļ šis projekts ir uzskatāms par pilotprojektu visos
      aspektos. Finansēšanas laikā projekta ietvaros tiks izveidota mūsdienu
      zinātnes standartiem un jaunākajām tehnoloģijām atbilstoša pētniecības
      vide. Lai šo mērķi sasniegtu, tiks izmantotas dažādas metodes un
      tehnoloģiskie procesi, kas komandai palīdzēs izpētīt ne tikai mākslas
      vēstures jautājumus. Papildus pilnībā neskartām muižas ēkām pētījumos
      iekļauti arī atsevišķi drupu stāvoklī esoši objekti. Līdzās rezultātiem,
      kas iegūti ar attēlveides metodēm, plānots apkopot visus pieejamos
      dokumentus, arhīvu ierakstus, plānus un mutvārdu vēstures datus par
      izvēlētajām ēkām un īpašumiem. Strukturēta datu apkopošana notiek vidē,
      kuras pamatā ir dažādi MediaWiki paplašinājumi. Šāds risinājums ļaus
      projektā izmantot iecienītas bezmaksas lietojumprogrammas, kurās balstās
      arī Wikidata. Vienlaikus tiek veidotas papildinātas atlasīto objektu
      datu kopas FAIR principu izpratnē.</p>



  <p>Projekta īstenošanas laikā būs iespējams veikt datu pieprasījumus un
      integrēt tos savās sistēmās. Turklāt būs iespējams nodrošināt pagaidu
      piekļuvi ārējiem lietotājiem, lai viņi veidotu savas datu kopas vai
      papildinātu esošās datu kopas sabiedriskās zinātnes izpratnē. Tādā veidā
      projekta dalībnieki vēlas sniegt savu ieguldījumu visaptverošajā idejā
      par saistītiem brīvas pieejas datiem zinātnē un humanitārajās zinātnēs.</p>



  <p>* Piezīme: Ņemot vērā kara agresiju Ukrainā, ir pārtraukta visu veidu sadarbība ar Krieviju.</p>



  <p>Trīs gadu perioda mērķis:</p>



  <p>• datu apkopošana par visām muižām Baltijas jūras reģionā kopumā un detalizēta dokumentācija par</p>



  <p>aptuveni 20 izvēlētiem atsauces objektiem</p>



  <p>• rezultātu prezentēšana, izmantojot lietotājam draudzīgu tīmekļa vietni</p>



  <p>• pastāvīga jaunu rezultātu prezentēšana konferencēs, semināros un izstādēs</p>



  <p>• piemērotu pēcāk izmantošanas koncepciju un lietotņu identificēšana (lietotnes, papildinātā realitāte)</p>
  <p>• projekta pievienošana jau esošām un izveidotām pētniecības iniciatīvām Baltijas jūras reģionā, lai</p>
  <p>veidotu ilgtspējīgu sadarbības tīklu</p>
  <p>• iespējamu turpmāko, no šī projekta izrietošo projektu un pētniecības projektu potenciāla izpēte</p>
  <p>Tīmekļa vietne: <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fcdfi.uni-greifswald.de%2F...%2Fresearch-centre-for%3Ffbclid%3DIwAR0RzXyypdyfwgzwTbO_B9YngDGzePOggV9PLzcjFoMbSzTKmCBGtQ30wD8&amp;h=AT3P3pFZZbDr0lRl6S_C2ommrI7AtHECktB-dJ0pF-n8puHTIu5pVH11yuONDOm0zTXcVxZLkNbsqhNAZLfo3HCT6CcCNzunVf1rmUxy2j8JZ5eBgI6ega35e9EoGQ5LJg&amp;__tn__=-UK-R&amp;c[0]=AT3M8Pdcp11n5P967ZQUkk81rvX23hLP9su-obWruq0QWrIO21zxjEUYVxpFFFJIATnzUYZrbp_HxpzMyzDo5FD3bugTvwFpIyHNNIOeivZ2NfPUh9B-uKF4epFqb7xG8MK9zO9oqNjnH37AWEboO5_hjIijd8FpO0XeUmDU8zNINvOpqFkFRD-5hWlS-fWrBJAIe-1mCvU_WvH-6MqY6FQ3HCBz1q4p7zHN9ba4pqQqi-rDl8ylsqxo62QMuLAhmn3nB4Yv0AOQqFrnSTRBs-MYI-jcQThae88Hi_H6Y50" rel="noreferrer noopener" target="_blank">https://cdfi.uni-greifswald.de/…/research-centre-for</a>… sea-region/</p>

  <p>Lai vāktu datus, tiks veiktas arheoloģiskās izpētes Zlēku muižā un Ungurmuižā. Papildus pieprasītas</p>
  <p>Rundāles pils dārza zonas. Kā profesionālas mērīšanas metodes piedāvāti zemes penetrācijas radaru,</p>
  <p>magnētiskās izpētes, dronu lidojumus un lāzerskenēšanas metodes.</p>
  <p>Projekta partneri: tālizpētes un ģeoinformācijas apstrādē Vīnes Arheoloģijas zinātnes institūts un “Geosphere Austria”.</p>
  <p>Neviena no mērīšanas metodēm nav invazīva, tās neietekmē objektu stāvokli un tiks veiktas par projekta</p>
  <p>finansiālajiem līdzekļiem.</p>
  <p>Tīmekļa vietnes:</p>
  <p><a href="https://vias.univie.ac.at/en/mission/">https://vias.univie.ac.at/en/mission/</a></p>
  <p><a href="https://www.geosphere.at/">https://www.geosphere.at/</a></p>
  <p><a href="https://www.facebook.com/hashtag/ungurmui%C5%BEa?__eep__=6&amp;__cft__[0]=AZWNfjWxW1rjNjCVJo6d0oXSrm70TbLUsi-x22Ixbi3x9gQjsRVjWlyhpVX9qeV39s_QvplA54doUHoz4BFVoSxpnDrTMVAc7dcfLMdyoNY6n4xR1dAZKANhOZz4YsBOPBjHtULtnmBfKw6EWHi5baaVMgokCx3OI3-8ASHS0iwY5arKBKDzRuW7pDJDxNBICMFBFqvGIwUqVxxPzeQy0jj4kw1whMXS3ZCEPCvTvHYy3IOZsc1VybjJYi11lu43Eg6UUumyAViCamMU_b0Tu65i&amp;__tn__=*NK-R">#Ungurmuiža</a><a href="https://www.facebook.com/hashtag/ungurmuiza?__eep__=6&amp;__cft__[0]=AZWNfjWxW1rjNjCVJo6d0oXSrm70TbLUsi-x22Ixbi3x9gQjsRVjWlyhpVX9qeV39s_QvplA54doUHoz4BFVoSxpnDrTMVAc7dcfLMdyoNY6n4xR1dAZKANhOZz4YsBOPBjHtULtnmBfKw6EWHi5baaVMgokCx3OI3-8ASHS0iwY5arKBKDzRuW7pDJDxNBICMFBFqvGIwUqVxxPzeQy0jj4kw1whMXS3ZCEPCvTvHYy3IOZsc1VybjJYi11lu43Eg6UUumyAViCamMU_b0Tu65i&amp;__tn__=*NK-R">#Ungurmuiza</a><a href="https://www.facebook.com/hashtag/turismscesis?__eep__=6&amp;__cft__[0]=AZWNfjWxW1rjNjCVJo6d0oXSrm70TbLUsi-x22Ixbi3x9gQjsRVjWlyhpVX9qeV39s_QvplA54doUHoz4BFVoSxpnDrTMVAc7dcfLMdyoNY6n4xR1dAZKANhOZz4YsBOPBjHtULtnmBfKw6EWHi5baaVMgokCx3OI3-8ASHS0iwY5arKBKDzRuW7pDJDxNBICMFBFqvGIwUqVxxPzeQy0jj4kw1whMXS3ZCEPCvTvHYy3IOZsc1VybjJYi11lu43Eg6UUumyAViCamMU_b0Tu65i&amp;__tn__=*NK-R">#TurismsCesis</a><a href="https://www.facebook.com/hashtag/c%C4%93sis?__eep__=6&amp;__cft__[0]=AZWNfjWxW1rjNjCVJo6d0oXSrm70TbLUsi-x22Ixbi3x9gQjsRVjWlyhpVX9qeV39s_QvplA54doUHoz4BFVoSxpnDrTMVAc7dcfLMdyoNY6n4xR1dAZKANhOZz4YsBOPBjHtULtnmBfKw6EWHi5baaVMgokCx3OI3-8ASHS0iwY5arKBKDzRuW7pDJDxNBICMFBFqvGIwUqVxxPzeQy0jj4kw1whMXS3ZCEPCvTvHYy3IOZsc1VybjJYi11lu43Eg6UUumyAViCamMU_b0Tu65i&amp;__tn__=*NK-R">#Cēsis</a><a href="https://www.facebook.com/hashtag/turismspargauja?__eep__=6&amp;__cft__[0]=AZWNfjWxW1rjNjCVJo6d0oXSrm70TbLUsi-x22Ixbi3x9gQjsRVjWlyhpVX9qeV39s_QvplA54doUHoz4BFVoSxpnDrTMVAc7dcfLMdyoNY6n4xR1dAZKANhOZz4YsBOPBjHtULtnmBfKw6EWHi5baaVMgokCx3OI3-8ASHS0iwY5arKBKDzRuW7pDJDxNBICMFBFqvGIwUqVxxPzeQy0jj4kw1whMXS3ZCEPCvTvHYy3IOZsc1VybjJYi11lu43Eg6UUumyAViCamMU_b0Tu65i&amp;__tn__=*NK-R">#TurismsPargauja</a><a href="https://www.facebook.com/hashtag/rundale?__eep__=6&amp;__cft__[0]=AZWNfjWxW1rjNjCVJo6d0oXSrm70TbLUsi-x22Ixbi3x9gQjsRVjWlyhpVX9qeV39s_QvplA54doUHoz4BFVoSxpnDrTMVAc7dcfLMdyoNY6n4xR1dAZKANhOZz4YsBOPBjHtULtnmBfKw6EWHi5baaVMgokCx3OI3-8ASHS0iwY5arKBKDzRuW7pDJDxNBICMFBFqvGIwUqVxxPzeQy0jj4kw1whMXS3ZCEPCvTvHYy3IOZsc1VybjJYi11lu43Eg6UUumyAViCamMU_b0Tu65i&amp;__tn__=*NK-R">#Rundale</a><a href="https://www.facebook.com/hashtag/rundalespils?__eep__=6&amp;__cft__[0]=AZWNfjWxW1rjNjCVJo6d0oXSrm70TbLUsi-x22Ixbi3x9gQjsRVjWlyhpVX9qeV39s_QvplA54doUHoz4BFVoSxpnDrTMVAc7dcfLMdyoNY6n4xR1dAZKANhOZz4YsBOPBjHtULtnmBfKw6EWHi5baaVMgokCx3OI3-8ASHS0iwY5arKBKDzRuW7pDJDxNBICMFBFqvGIwUqVxxPzeQy0jj4kw1whMXS3ZCEPCvTvHYy3IOZsc1VybjJYi11lu43Eg6UUumyAViCamMU_b0Tu65i&amp;__tn__=*NK-R">#Rundalespils</a><a href="https://www.facebook.com/hashtag/researchcentreformanorsinthebaltic?__eep__=6&amp;__cft__[0]=AZWNfjWxW1rjNjCVJo6d0oXSrm70TbLUsi-x22Ixbi3x9gQjsRVjWlyhpVX9qeV39s_QvplA54doUHoz4BFVoSxpnDrTMVAc7dcfLMdyoNY6n4xR1dAZKANhOZz4YsBOPBjHtULtnmBfKw6EWHi5baaVMgokCx3OI3-8ASHS0iwY5arKBKDzRuW7pDJDxNBICMFBFqvGIwUqVxxPzeQy0jj4kw1whMXS3ZCEPCvTvHYy3IOZsc1VybjJYi11lu43Eg6UUumyAViCamMU_b0Tu65i&amp;__tn__=*NK-R">#ResearchCentreforManorsintheBaltic</a><a href="https://www.facebook.com/hashtag/visitcesis?__eep__=6&amp;__cft__[0]=AZWNfjWxW1rjNjCVJo6d0oXSrm70TbLUsi-x22Ixbi3x9gQjsRVjWlyhpVX9qeV39s_QvplA54doUHoz4BFVoSxpnDrTMVAc7dcfLMdyoNY6n4xR1dAZKANhOZz4YsBOPBjHtULtnmBfKw6EWHi5baaVMgokCx3OI3-8ASHS0iwY5arKBKDzRuW7pDJDxNBICMFBFqvGIwUqVxxPzeQy0jj4kw1whMXS3ZCEPCvTvHYy3IOZsc1VybjJYi11lu43Eg6UUumyAViCamMU_b0Tu65i&amp;__tn__=*NK-R">#VisitCesis</a></p>
  <p>(aprīlis, 2023)</p>
</div><br>
            ',
            "image" => "/1024/peti.jpg",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "",
            "date" => null,
            "date_untill" => null,
            "time" => null,
            "short_info" => null,
            "description" => "",
            "image" => "/1024/",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "Uzsākts Ungurmuižas kapličas restaurācijas projekts",
            "date" => null,
            "date_untill" => null,
            "time" => null,
            "short_info" => null,
            "description" => '
            <div itemprop="text">
    <p>Ungurmuiža (Valsts aizsardzības Nr.: 6261) ir unikāls 18.gs. Latvijas
        kultūras un vēstures piemineklis, vienīgais Baroka koka ēku komplekss
        Latvijā, kas daudzu gadu gaitā ir soli pa solim kopta un kļuvusi par
        iecienītu tūristu apskates objektu, tradīcijām bagātu kultūras pasākumu
        norises vietu, tāpēc vēlamies it īpaši uzsvērt šīs vietas vēsturisko un
        arhitektūras nozīmību, atstājot paliekošu un kvalitatīvi veiktu darbu –
        liecību nākamajām paaudzēm. Tikpat unikāla ir šī kompleksa daļa –
        Kampenhauzenu dzimtas kapliča (Valsts aizsardzības Nr. 6271). 1760g.
        celtā Ungurmuižas kapliča kā pirmā šāda veida būve pie muižām, kļuvusi
        par prototipu, kura ietekmi jūt daudzās Vidzemes kapliču būvēs. Aleja,
        saukta par “Melno aleju” savieno muižas dzīvojamo jeb Kungu māju un
        kapliču, harmoniski cauri ainavu parkam sasaistot pēdējo atdusas vietu
        ar dzimtas mājām. Dzimtas kapos guldīti fon Kampenhauzenu dzimtas
        locekļi līdz pat 1942.gadam. </p>



    <p>Ar VKKF atbalstu uzsākts kapličas atjaunošanas projekts. 1.kārtā
        paredzēta arhīva materiālu apkopošana par kapliču (NKMP PDC, CVMM),
        Kapličā esošo akmens, ģipša, metāla daļu inventarizācija (akmens
        fragmentu šķirošana, foto fiksācija, materiāla un saglabātības stāvokļa
        fiksēšana), Cēsu Vēstures un mākslas muzeja krājumā esošo kapličas
        akmens fragmentu materiāla un saglabātības stāvokļa fiksēšana, kapličas
        saglabātības stāvokļa apsekošana. Projektu realizēs restaurators Edgars
        Purviņš.</p>



    <p>Par Kampenhauzenu ģimenes kapliču:</p>



    <p>Kapliča celta no apmesta ķieģeļu mūra, uz laukakmeņu un ķieģeļu mūra
        pamatiem un cokola. Ēkas plāns ir tuvu kvadrātam, tomēr austrumu un
        rietumu fasāde ir nedaudz platāka (9,16m), Z un D fasādes platums 8,4m.
        Galvenās fasādes antablementa arhitrāvu balsta stūru pilastri ar
        kapiteļiem, virs kuriem novietota izteiksmīgi profilēta mūra dzega.
        Ieejas portāls celts no ozolkoka. Saglabājušies sānu pilastri (bez
        bāzēm), arhivolts ar slēgakmeni un dzega virs tā. Pilastru bāzes
        īpatnējā veidā bijušas analogas to kapiteļiem. Portāla augšdaļa ar dzegu
        un volūtām (spriežot pēc atšķirīga materiāla – priedes koka) un
        atšķirīgiem krāsu slāņiem, nomainīta 19.gs. Lai koka daļas pasargātu no
        nokrišņiem, volūtas pārsedza ar skārdu. Skārda jumts sākotnēji bijis
        zaļā krāsā. &nbsp;</p>



    <p>Sākotnējais krāsojums balstās uz 18.gs. kontrasta principu. Sienu
        pamattonis bijis rozā, bet galvenās fasādes durvis, stūra pilastri un
        atsevišķas koka detaļas – melnas. “aklo” logu rāmji reljefās daļas –
        sarkanas. Vēlākais fasāžu krāsojums ienesa galvenās ārēji redzamās
        pārmaiņas kapličas arhitektūrā – 19.gs. krāsojums bijis dzeltenais okera
        ar balto. 20.gs.jumts bijis nokrāsots sarkanbrūns.</p>



    <p>Ungurmuižas kapličai ir 18.gs.memoriālo celtņu arhitektūrai
        raksturīga izteikta orientācija uz galveno fasādi, atstājot pārējās trīs
        fasādes iespējami vienkāršotas. Kapliču pārsedz krusta velve, kas
        apmesta ar kaļķu javu un rotāta centrālajā daļā ar profilētu apmali,
        kura ietver ventilācija lūku. Apbedījumi parasti veikti tieši smiltīs,
        vairākos slāņos. Pelēkās un melnās cementa flīzes, kas pašreiz vēl
        atrodamas kapličā, liktas 20.gs. sākumā, sākotnējā grīda nav
        saglabājusies.</p>



    <p>Starp frontona volūtām senāk atradies vara vai misiņa skārdā darināts
        fon Kampenhauzenu un fon Štrālbornu alianses ģerbonis (pazudis pēc Otrā
        Pasaules kara). Gleznotājs Georgs Ditrihs Hinšs, Ungurmuižas 18.gs,
        vidus interjeru sienu gleznojumu autors, piedalījies arī kapličas
        noformējuma darbos, apsudrabojot un apzeltot fon Kampenhauzenu un fon
        Štrālbornu alianses ģerboni kapličas fasādē.</p>



    <p>Nozīmīga fasādes sastāvdaļa, kas izceļ barokāli simetrisko
        kompozīciju, ir abās pusēs esošie “aklie” logi. Lai gan šāds paņēmiens
        nav retums, to parasti veido ar krāsojumu, retāk sastopama ir šāda
        imitācija materiālā. Barokālā ēkas jumta kupols beidzas ar skārdā
        veidotu smilšu pulksteni (tas atjaunots 1978.g, un atšķiras no
        oriģināla).</p>



    <p>Skats no kapličas uz muižas dzīvojamo māju veidots kā pēdējais
        dzimtas mirušo skats uz savu dzīves vietu. Kapličas aizmugurē atrodas
        galvenokārt muižas kalpotāju un hernhūtiešu apbedījumi. Uzmanības
        cienīgi ir muižas cēlāja, ģenerālleitnanta Baltazara fon Kampenhauzena
        vedeklas Sofijas Eleonoras epitāfijas meti, kas saglabājušies dzimtas
        arhīvā Mārburgā, tie ir vienīgie zināmie kapa pieminekļu projekti tā
        laika Latvijas teritorijā.</p>



    <p>1917.g. krievu karavīri Ungurmuižas kapličai uzlauzuši grīdu un
        izrakņājuši apbedījumus. Bojāts arī muižas cēlāja ģenerālleitnanta
        Baltazara fon Kampenhauzena kapa piemineklis. Arī pēc Otrā pasaules kara
        kapliča tika postīta vairākkārt.</p>



    <p>1939.g. 16.oktobrī pirms Kampenhauzenu ģimenes aizbraukšanas no
        Latvijas sastādīts sīks apraksts ar apbedījumiem, papildināts 1923.g.
        sastādītais saraksts.</p>



    <p>1974.g.vasarā Ievas un Imanta Lancmaņu vadībā veikta kapličas apsekošana, dokumentācija.</p>



    <p>1976.g. tiek pabeigts kapličas restaurācijas projekts, no 1978. –
        1980.g. tiek veikta kapličas restaurācija. 1997.g. restaurācijas
        nometnes ietvaros&nbsp; veikti atsevišķi kapličas restaurācijas darbi –
        atjaunots ārējais apmetums un arhitektoniskās detaļas, attīrītas
        oriģinālās grīdas flīzes, sagatavots pamats to atkārtotai ieklāšanai,
        pārkrāsotas koka detaļas, attīrīti un atjaunoti kapličas ažūrie dzelzs
        vārti un slēģu apkalumi., sakopta āra teritorija.</p>



    <p>2003. gadā kapliča daļēji atjaunota, koptas skatu perspektīvas uz
        kunga māju un aleju parka virzienā, taču vairāk restaurācijas darbi
        nenotiek. Tiek kopta kapličas apkārtne, attīrītas kapu plāksnes. Kapliča
        šobrīd atrodas kritiskā stāvoklī, un tai nepieciešama atjaunošana.</p>



    <p>(jūnijs, 2022.)</p>
</div><br>
            ',
            "image" => "/1024/kaplica.jpg",
            "published" => true,
            "order_number" => null,
        ]);
        Event::create([
            "title" => "Kāzas Ungurmuižā",
            "date" => null,
            "date_untill" => null,
            "time" => null,
            "short_info" => "Vienīgajā baroka koka muižā Latvijā ar 300 gadus senu vēsturi",
            "description" => '
            <p>Ungurmuiža – vieta kāzām un laulību ceremonijām netālu no
    Cēsīm</p>



<p>Muiža zem ozoliem – tas ir pirmais priekšstats ikkatram,
    kas ierodas Ungurmuižā. Vienīgā baroka koka muiža Latvijā atrodas īpašā vietā,
    kur senatnes auras apvītās koka ēkas, liepas un milzu ozoli stāsta mīlestības
    stāstus trīs gadsimtu garumā. Muižu rotā 18.gadsimta koka sienu gleznojumi, un
    viens no tiem – eņģelis, pauž svarīgus vārdus, kas vienojuši ģimenes cauri
    gadsimtiem – “Uzticība, mīlestība, vienotība ”.</p>



<p>Kungu mājas svinību zāle, terase vai muižas parks ar
    romantisko Tējas namiņu ir lieliska vieta skaistākajiem dzīves mirkļiem – kāzu
    svinībām, laulību ceremonijām un kāzu pieturvietām. </p>



<p>Ja esat senu latvisku tradīciju cienītāji, ozolu parks ir
    kā radīts līdzināšanas ceremonijai!</p>



<p>Pēc ceremonijas piedāvājam saskandināt šampanieša glāzes,
    aplūkot seno ēku un uzrakstīt mīlestības apliecinājumu turpat zem senajiem
    ozoliem. </p>



<p>Ungurmuižas kompleksā piedāvājam:</p>



<ul>
    <li>banketu telpas līdz 60 personām </li>
    <li>laulību ceremonijas vietu uz muižas terases un senajā muižas parkā;</li>
    <li>8 guļamistabas (26 gultasvietas), 30 papildus gultasvietas uz matračiem;</li>
</ul>



<p><strong>Ungurmuižas
        restorāns</strong> radīts tiem, kas novērtē gardu maltīti no
    vietējiem sezonas produktiem un gadsimtiem senas receptes. Tiksimies un
    uzklausīsim vēlmes, lai Jūsu īpašā diena būtu izdevusies! </p>



<p>Mums ir izveidojusies cieša sadarbība ar profesionālim
    kāzu rīkotājiem, dekoratoriem, mūziķiem; labprāt padalīsimies ar pieredzi.</p>



<p>Laulību ceremonijas dokumentālo pusi sakārtot palīdzēs Cēsu novada
    Dzimtsarakstu nodaļa (tālr.,64120282; 64122555; 29194633, e-pasts: <a href="mailto:dzimtsaraksti@pargaujasnovads.lv">dzimtsaraksti@cesunovads.lv</a> ) un laipni atbildēs uz Jūsu jautājumiem jau iepriekš, lai Jūsu īpašajā dienā vairs nebūtu nekādu satraukumu!</p>
            ',
            "image" => "/1024/kazas.jpg",
            "published" => true,
            "order_number" => null,
        ]);

        Event::create([
            "title" => "Restaurācijas darbi Ungurmuižā turpinās",
            "date" => null,
            "date_untill" => null,
            "time" => null,
            "short_info" => "",
            "description" => '
<div itemprop="text">
    <p>2022./2023.gada mijā Ungurmuižā tika pabeigts vēl viens ievērības
        cienīgs restaurācijas projekts – sienas gleznojums “Aina ar ganu”. </p>



    <p>Ungurmuižā fragmentāri saglabājusies unikāla 18.gadsimta koka apbūves
        sienu glezniecība, kuras autors ir G.D. Hinšs. Gleznojumi šobrīd
        eksponēti dažādā tehniskā stāvoklī, ar VKKF atbalstu veikti nozīmīgi
        restaurācijas darbi vairākās telpās. Pēc 1762.g. pārbūves, muižas
        gleznojumu autors Hinšs atjaunojis krāsojumus “Viesu kambarī”. Muižas
        īpašnieku pēcteča Hansa fon Kampenhauzena (1903.-1989.) atmiņās uzsvērta
        šī telpa un gleznojums. Tas pelna īpašu uzmanību, taču līdz šim palicis
        novārtā. Sienu sedz pārkrāsojuma un noņemtā apmetuma netīrumu slānis,
        kas liedz pilnībā saskatīt unikālo gleznojumu. Restauratore Natālija
        Jātniece uzsver šī fragmenta unikalitāti, grafisko, bet tajā pašā laikā
        ļoti telpisko gleznojumu, kas liecina par G.D.Hinša spēju daudzveidību.</p>



    <p>Katalogā “Muiža zem ozoliem. Ungurmuižas kungu mājas interjers”(aut.
        I. Lancmanis, I. Lancmane) teikts: “Gleznojums krasi atšķiras no pārējām
        baroka stilā veidotajām dekorācijām muižā. Sienu plaknes krāsotas liepu
        lapu zaļumā un dalītas vertikālos panno laukumos, ko ietver iluzoras
        profilu apmales un plastiskas ziedu grupas. Skicējošā manierē laukumos
        iegleznotas pastorālas ainas ar ganiem un dārzniecēm, suņiem, aitām un
        stārķiem. Viss gleznojums ir monohroms, izpildīts grizaja paņēmienā zaļā
        kolorītā, vienīgi 3cm platas zeltītas joslas starp panno laukumiem
        iezīmē vertikālu dalījumu “tapešu” slejās. Līdz mūsu dienām vecajās
        vietās saglabājušies tikai daži apgleznotie sienu posmi, citi kā
        kokmateriāls pārceļojuši uz blakustelpu sienām. Šis gleznojums paliktu
        neatpazīts kā Hinša darbs, ja neatrastos daži seni foto uzņēmumi ar
        podiņu krāsns atliekām, kuras apgleznojis minētais autors, un kura
        gleznotie motīvi un tehnika redzami “viesu kambarī”.</p>



    <p>Restaurējot Ungurmuižas unikālos sienu gleznojumus, mūsu pamatmērķis
        ir saglabāt ļoti vērtīgu 18.gadsimta kultūrvēsturisko koka muižas
        būvniecības piemēru, kam Latvijā nav analogu, veicinot tā prestižu un
        kultūrvēsturisko pārmantošanu nākamajām paaudzēm. Gleznojumi šobrīd
        eksponēti dažādā tehniskā stāvoklī (fragmentāri atsegti no vēlāku laika
        periodu uzslāņojumiem – 19.gs. apmetuma kārtas izveides virs
        apgleznotajiem baļķiem, 20.gs. 50-jos gados pārvietotie apgleznotie
        starpsienu posmi). 2000.-2002.gdemontēti, apgleznotie guļbaļķu elementi
        pārvietoti sākotnējās vietās, atkal komplektējot vēsturisko sienu
        gleznojumu kompozīcijas. Apmeklētājus piesaista gleznojumi, uzdodot
        jautājumus par restaurācijas procesu.</p>



    <p>Restaurācijas darbu vadītāja ir restauratore, stājglezniecības
        meistars, monumentālās glezniecības speciālists Natālija Jātniece,
        restauratore ar daudzu gadu darba pieredzi un garantētu darbu izpildes
        kvalitāti. Otrs restaurators – Irbe Grīnberga. Restauratores
        piedalījušās Ungurmuižas restaurācijas agrākajos darbos.</p>



    <p>2024.gadā, apteicoties VKKF atbalstam, darbs pie restaurācijas turpināsies.</p>



    <p>Restaurācija notiek ar VKKF finansiālu atbalstu.</p>
</div>
                ',
            "image" => "/1024/restauracija.jpg",
            "published" => true,
            "order_number" => null,
        ]);
    }
}
