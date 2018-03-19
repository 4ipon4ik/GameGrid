<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galvenā</title>
    <?php Template_class::getLibs(); ?>
    <script>
        $(function () {
            $("#8").attr("class","active");
        });
    </script>
</head>
<body>
<?php Template_class::getNavigation() ?>
<div class="container-fluid text-center main">
    <div class="row content">
        <div class="col-sm-2">
            <p><a href="#">Ziņas</a></p>
            <p><a href="#">Navi</a></p>
            <p><a href="#">Gācija</a></p>
            <p><a href="#">Visādi jaukumi</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Laipni lūgti spēļu fanu portālā!</h1>
            <p>Spelufans.lv  ir veidots kā platforma gan spēļu cienītājiem, gan to izstrādātājiem. Resurss agrīnā stadijā tika veidots ar ideju sakļaut populārāko spēļu cienītājus, izvietojot spēļu serverus, kur tie var satikties un spēlēt kopā. Šoreiz mērķis ir nedaudz mainīts - dot uzsvaru uz kopienas informētību un tās saliedētību.</p>
            <p>Šodien, svinot vietnes atklāšanu, spēļu cienītāji var viens ar otru komunicēt un dalīties ar atgadījumiem spēlēs, publicēt ekrānšāviņus, pārdomas, mūziku, vai diskutēt par spēlēm. Spēļu izstrādātāji var dalīties ar izstrādātajām spēlēm, informāciju par to izstrādes procesu un apmainīties pieredzē ar citiem izstrādātājiem.</p>
            <p>Papildus kopienas sajūtai biedriem tiek dota iespēja uzzināt par jaunumiem spēļu industrijā, atvieglot nākošās spēles izvēli, sekojot līdzi redakcijas veidotajiem spēļu apskatiem. Arī Strike redakcija ir entuziastiski spēļu cienītāji, kas saprot mūsdienu spēlētāju problēmas, piemēram, nepieciešamību atrast spēļu biedrus. Tieši sādam nolūkam tiek aktīvi izstrādāta sistēma, kas sapulcina spēlēt gribētājus, dod iespēju spēlēt kopā ar spelufans.lv biedriem.</p>
            <p>Portāls atblastīs pašmāju lietotāju Twitch un YouTube kanālus, atvēlot atsevišķu sadaļu, veidos regulārus konkursus, kur varēs piedalīties un iegūt dažādas balvas ikviens gribētājs. Izlemjot atbalstīt Strike.lv portāla darbību, lietotāji var iegādāties PRO konta abonamentu un iegūt papildus privilēģijas, dalību pasākumos, katru mēnesi piedalīties izlozē ar iespēju papildināt savu krāšņo spēļu tematikas T-kreklu kolekciju.</p>
            <p>Aktuālākie jaunumi atspoguļosies arī podkāstu un Twitch raidījumu formātā. Skatītājiem tiks dota iespēja piedalīties izlozēs un laimēt arī vērtīgas balvas raidījuma norises laikos. Tiem, kas nepaspēs noskatīties tiešraides, raidījumu ieraksti tiks publicēti spelufans.lv YouTube kanālā.</p>
        </div>
        <div class="col-sm-2">
            <div class="well">
                <p>Reklāma</p>
            </div>
            <div class="well">
                <p>Reklāma</p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid">
    Artūrs Kirņickis EDP1 Inc. 2017-2018.gads
</footer>
</body>
</html>