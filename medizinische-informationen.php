<?php
$PAGE_TITLE = 'Medizinische Informationen und Artikel | Praxis für Gefässmedizin';
$PAGE_DESC  = 'Publikationen, Vorträge und wissenschaftliche Artikel von Dr. med. et phil. Janine Dörffler-Melly zu Angiologie, Thrombose und Gefässmedizin.';
require __DIR__ . '/includes/header.php';

$artikel = [
    "Doerffler-Melly J and Neuhuber W.L. Rectospinal neurons: Evidence for a direct projection from the enteric to the central nervous system in the rat. Neurosci Lett. 1988;92(2):121-5.",
    "Zaugg-Vesti B, Dörffler-Melly J, Spiegel M, Wen S, Franzeck U.K. and Bollinger A. Lymphatic capillary pressure in patients with primary lymph edema. Microvasc Res. 1993;46(2):128-34.",
    "Wen S, Dörffler-Melly J, Herrig I, Schiesser M, Franzeck UK and Bollinger A. Fluctuation of skin lymphatic capillary pressure in controls and in patients with primary lymphedema. Int J Microcirc Clin Exp. 1994;14(3):139-43.",
    "Franzeck UK, Dörffler-Melly J, Hussain MA, Wen S, Froesch ER and Bollinger A. Effects of subcutaneous insulin-like growth factor-I infusion on skin microcirculation. Int J Microcirc Clin Exp. 1995;15(1):10-3.",
    "Dörffler-Melly J, Lüscher TF, Wenk M, Wen S, Bollinger A and Franzeck UK. Endothelin-1 and cold provocation in health, primary Raynaud's phenomenon, and Progressive Systemic Sclerosis. Microvasc Res. 1996;52(2):193-7.",
    "Dörffler-Melly J, D Schild, Bollinger A and Franzeck UK. Diurnal and long-term variations of lymph capillary pressure in healthy subjects. 1997;30(3):122-7.",
    "Geisinger T, Dörffler-Melly J and Otto R. Optimierung des farbkodierten Dopplersignals (FKDS) der Pfortader mit einem Echokontrastmittel – ein kasuistischer Beitrag. Endoskopie heute, 1997;2:230-234.",
    "Dörffler-Melly J, Schwarte LA, Ince C, and Levi M. Mouse models of arterial and venous thromboembolism. Basic Res Cardiol. 2000;95(6):503-9.",
    "Levi M, Dörffler-Melly J, and Badimon L. Usefulness and limitations of animal models of venous thrombosis. Thromb Haemost 2001;86:1331-3.",
    "Dörffler-Melly J, de Jonge E, de Pont Anne-Cornelie, Meijers J, Büller HR, Levi M. Lack of systemic bioavailability after subcutaneous low molecular weight heparin in critically ill patients on vasopressor medication. Lancet 2002;359:849-50.",
    "Levi M, Dorffler-Melly J, Reitsma P, Buller H, Florquin S, van der Poll T, Carmeliet P. Aggravation of endotoxin-induced disseminated intravascular coagulation and cytokine activation in heterozygous protein-C-deficient mice. Blood. 2003 Jun 15;101(12):4823-7.",
    "Dörffler-Melly J, Schmidli J, Mahler F. Antikoagulation und Antiaggregation beim Patienten mit PAVK. Ther Umsch. 2003 Jan;60(1):36-42.",
    "Dorffler-Melly J, Koopman MM, Adam DJ, Buller HR, Prins MH. Antiplatelet agents for preventing thrombosis after peripheral arterial bypass surgery. Cochrane Database Syst Rev. 2003;(3):CD000535.",
    "Dorffler-Melly J, de Kruif M, Schwarte LA, Franco RF, Florquin S, Spek CA, Ince C, Reitsma PH, ten Cate H. Functional thrombomodulin deficiency causes enhanced thrombus growth in a murine model of carotid artery thrombosis. Basic Res Cardiol. 2003 Nov;98(6):347-52.",
    "Dorffler-Melly J, Buller HR, Koopman MM, Prins MH. Antithrombotic agents for preventing thrombosis after infrainguinal arterial bypass surgery. Cochrane Database Syst Rev. 2003;(4):CD000536.",
    "Bounameaux H, Bomeli T, de Moerloose P, Dörffler-Melly J, Fritschy D, Hohlfeld P, et al. Anwendung von niedermolekularen Heparinen in vier umstrittenen klinischen Situationen. Swiss Med Forum 2003;3:1074–8.",
    "Dorffler-Melly J, Koopman MM, Prins MH, Buller HR. Antiplatelet and anticoagulant drugs for prevention of restenosis/reocclusion following peripheral endovascular treatment. Cochrane Database Syst Rev. 2005 Jan 25;(1):CD002071.",
    "Chopard P, Dorffler-Melly J, Hess U, Wuillemin WA, Hayoz D, Gallino A, Bachli EB, Canova CR, Isenegger J, Rubino R, Bounameaux H. Venous thromboembolism prophylaxis in acutely ill medical patients: definite need for improvement. J Intern Med. 2005 Apr;257(4):352-7.",
    "Wenaweser P, Dorffler-Melly J, Imboden K, Windecker S, Togni M, Meier B, Haeberli A, Hess OM. Stent thrombosis is associated with an impaired response to antiplatelet therapy. J Am Coll Cardiol. 2005 Jun 7;45(11):1748-52.",
    "Dorffler-Melly J, Mahler F, Do DD, Triller J, Baumgartner I. Adjunctive abciximab improves patency and functional outcome in endovascular treatment of femoropopliteal occlusions: initial experience. Radiology. 2005 Dec;237(3):1103-9.",
    "Dörffler-Melly J. Diagnostic strategies in deep venous thrombosis. Kardiovaskuläre Medizin 2006;9:110–115.",
    "Dörffler-Melly J. Clinical significance of risk assessment for the prevention of venous thromboembolism. Kardiovaskuläre Medizin 2006;9:94–100.",
    "Wuillemin W.A, Wirz, Welte S, Dörffler-Melly J, Bounameaux H. Prophylaxe venöser Thromboembolien – Beispiele für Praxisempfehlungen. Schweiz Med Forum 2007;7:198–204.",
    "Jaccard Y, Walther S, Anderson S, Tauber M, Kummer O, Baumgartner R, Diehm N, Dorffler-Melly J, Baumgartner I. Influence of secondary infection on amputation in chronic critical limb ischemia. Eur J Vasc Endovasc Surg. 2007 May;33(5):605-9.",
    "Dorffler-Melly J, Amann-Vesti B. Diagnosis and treatment of acute pulmonary embolism. Herz. 2007 Feb;32(1):35-41.",
];
?>

<section class="pagehero" style="background-image:url('assets/img/rsz_2rsz_1adobestock_278381432.jpg')">
    <div class="container pagehero__inner">
        <div class="breadcrumb"><a href="index.php">Home</a> / Medizinische Informationen und Artikel</div>
        <h1>Medizinische Informationen und Artikel</h1>
        <p class="pagehero__sub">Publikationen, Vorträge und wissenschaftliche Beiträge von Dr. med. et phil. Janine Dörffler-Melly.</p>
    </div>
</section>

<section class="article">
    <div class="container">
        <div class="pubs">
            <h2>Artikel &amp; Publikationen</h2>
            <ol>
                <?php foreach ($artikel as $a): ?>
                    <li><?= htmlspecialchars($a) ?></li>
                <?php endforeach; ?>
            </ol>

            <h2>Abstracts / Kongressbeiträge (Auswahl)</h2>
            <ol>
                <li>Dörffler-Melly J, Vesti B, Spiegel M, Franzeck UK, Bollinger A. Lymphatic capillary pressure in patients with primary lymphedema. 16th World Congress of the International Union of Angiology, September 1992.</li>
                <li>Dörffler-Melly J et al. Fluoreszenz-Mikrolymphographie und Druckmessung in kutanen Lymphkapillaren. IX. Gemeinsame Jahrestagung der Deutschen, Österreichischen und Schweizerischen Gesellschaft für Angiologie, Zürich, August 1993.</li>
                <li>Dörffler-Melly J et al. Tagesschwankungen des kutanen Lymphkapillardruckes bei Gesunden. IX. Gemeinsame Jahrestagung für Angiologie, Zürich, August 1993.</li>
                <li>Dörffler-Melly J et al. Wirkung von subkutan appliziertem IGF-I auf das Diffusionsverhalten von Na-Fluorescein. 8. Jahrestagung der Schweizerischen Gesellschaft für Mikrozirkulation, Lausanne 1994.</li>
                <li>Choragiewicz B, Dörffler J, Cornelius A, Otto R. Results of percutaneous transluminal angioplasty (including stenting) of the lower limbs. IV. Wissenschaftliche Tagung der Deutsch-Polnischen Radiologischen Gesellschaft, September 1996.</li>
                <li>Franzeck UK, Dörffler-Melly J, Costanzo U and Bollinger A. Lymphatic capillary pressure in patients with secondary lymphedema. Int J Microcirc 16 (1996), Suppl.1, 191.</li>
                <li>Dörffler-Melly J et al. Heparin-coated erythrocytes attenuate thrombus growth and thrombin generation in a rabbit jugular vein thrombosis model. ASH Meeting 1999.</li>
                <li>Dörffler-Melly J et al. Thrombomodulin-deficiency results in enhanced host defense and increased survival in a murine model of peritonitis. ASH Meeting 1999.</li>
                <li>Dörffler-Melly J et al. Thrombomodulin deficiency causes enhanced thrombus growth in a murine model of carotid thrombosis. 19th World Congress of the International Union of Angiology 2000.</li>
                <li>Levi M, Dörffler-Melly J et al. Aggravation of endotoxin-induced disseminated intravascular coagulation in protein-C-deficient mice. XVII. Congress of the ISTH, Paris 2001.</li>
                <li>Dörffler-Melly J et al. Funktioneller Thrombomodulinmangel führt zu vermehrtem Thrombuswachstum. 12. Gemeinsame Jahrestagung für Angiologie, Bern 2001.</li>
                <li>Dörffler-Melly J et al. Early Systolic Peak (ESP) – ein zuverlässiger Parameter zum Ausschluss einer Nierenarterienstenose. Dreiländertreffen für Ultraschall, Bregenz 2003.</li>
                <li>Dörffler-Melly J, Mahler F, Do DD, Triller J, Baumgartner I. Adjunctive abciximab improves patency and functional outcome. American Heart Association, New Orleans 2004.</li>
                <li>Husmann M et al. (mit Dörffler-Melly J). Endovascular revascularization improves endothelial function in patients with peripheral atherosclerotic disease. American Heart Association, Dallas 2005.</li>
            </ol>

            <h2>Präsentation</h2>
            <ol><li>Diabetes und PAVK</li></ol>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
