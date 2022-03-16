<?php

/* Template Name: zakladni-informace */

require_once 'functions.php';

get_header();
global $wp;

$id = get_The_ID();
$page = get_page($id);

?>

<div class="basic-info-title">
    <h1><?= the_title()?></h1>
</div>
<div class="basic-info-adresa">
    <h2>Adresa:</h2>
    <img src='<?= get_stylesheet_directory_uri()?> /assets/images/qr_adresaGJK.jpg' class="qr_code" alt="qr_code" />
    <div class="basic-info-text">
        <p>Gymnázium Jana Keplera<br>Parléřova 2/118<br>169 00 Praha 6 - Hradčany</p>
    </div>
</div>
<div class="basic-info-mapa">
    <h2>Mapa:</h2>
    <a href="https://mapy.cz/zakladni?source=firm&id=362431&q=GJK&l=0&x=14.387236&y=50.087805&z=18">Najdete nás zde</a>
    <img src='<?= get_stylesheet_directory_uri() ?> /assets/images/mapa.png' class="mapa" alt="mapa" />
    <div class="basic-info-coordinates">
        <p>50°5’16.099″N, 14°23’14.049″E</p>
        <p>N 50°5.26832′, E 14°23.23415′</p>
        <p>50.0878053N, 14.3872358E</p>
    </div>
</div>
<div class="basic-info-doprava">
    <h2>Dopravní spojení:</h2>
    <ul>
        <li>MHD zastávka tramvaje č. 22 Pohořelec nebo tramvaje č. 25 Hládkov</li>
        <li>Parkování je možné bezprostředně v okolí školy</li>
        <li>Pokud jedete autobusem z Hradčanské, můžete vystoupit na Patočkově ul. u tunelu nebo na Malovance</li>
    </ul>
</div>
<div class="basic-info-idnetifikacni-udaje">
    <h2>Identifikační údaje:</h2>
    <p>IČO 61388246</p>
    <p>IZO 061388246</p>
    <p>REDIZO 600005691</p>
</div>
<div class="basic-info-telefony">
    <h2>Telefony:</h2>
    <p>Ústředna s možností provolby: 233 352 546</p>
    <p>Ředitel: 233 352 593</p>
    <p>Školní jídelna Scolarest: 220 511 622</p>
    <p>Pověřenec pro ochranu osobních údajů (GDPR): 212 812 470</p>
</div>
<div class="basic-info-vnitrni-linky">
    <h2>Vnitřní linky (možnost předvolby):</h2>
    <p>23 Ředitel (Ivana Landsingerová, pověřená řízením školy)</p>
    <p>22 Účetní + ekonom (Eva Kaslová)</p>
    <p>21 Hospodářka školy (Monika Příplatová)</p>
    <p>20 Pověřenec pro ochranu osobních údajů (GDPR) (Marcela Grabmüllerová)</p>
    <p>10 Školník (Petr Týřl), uklízečky</p>
</div>
<div class="basic-info-email">
    <h2>E-mailové adresy:</h2>
    <p>GJK jsou ve formátu: <em>příjmení bez diakritiky</em>@gjk.cz</p>
</div>
<div class="basic-info-data">
    <h2>Datová schránka:</h2>
    <p>a99zagh</p>
</div>
<div class="basic-info-obory">
    <h2>Studijní obory (KKOV):</h2>
    <p>7941K41 Čtyřleté gymnázium pro absolventy ZŠ</p>
    <p>7941K81 Osmileté gymnázium pro absolventy 5. tříd ZŠ</p>
    <br>
    <p>Gymnázium Jana Keplera patří ke středním školám se specifickým pojetím vzdělávání a výchovy, jak to umožňuje výuka podle vlastního školního vzdělávacího programu „<a href="https://sites.google.com/a/gjk.cz/svp/">Per aspera ad astra!</a>“, která na škole běží již od roku 2005.</p>
</div>

<?php

get_footer();

?>
