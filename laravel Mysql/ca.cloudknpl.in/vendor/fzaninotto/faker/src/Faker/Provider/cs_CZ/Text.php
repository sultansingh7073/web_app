<?php

namespace Faker\Provider\cs_CZ;

class Text extends \Faker\Provider\Text
{
    public function realText($maxNbChars = 200, $indexSize = 2)
    {
        $text = parent::realText($maxNbChars, $indexSize);
        $text = str_replace('„', '', $text);

        return str_replace('“', '', $text);
    }

    /**
     * License: PD old 70
     *
     * Title: Krakatit
     * Author: Karel Čapek
     * Release Date: 25. 12. 1923 – 15. 4. 1924
     * Language: Czech
     *
     * @see https://cs.wikisource.org/wiki/Krakatit
     * @var string
     *
     * Karel Čapek
     * KRAKATIT
     * Znění tohoto textu vychází z díla Krakatit tak, jak bylo vydáno v Československém spisovateli v roce 1982
     * (ČAPEK, Karel. Továrna na absolutno ; Krakatit. 12. vyd. Továrny na absolutno, 16. vyd. Krakatitu. Praha :
     * Československý spisovatel, 1982. 476 s. Spisy, sv. 3.).
     * Další díla Karla Čapka naleznete online na www stránkách Městské knihovny v Praze: www.mlp.cz/karelcapek.
     * Elektronické publikování díla Karla Čapka je společným projektem Městské knihovny v Praze,
     * Společnosti bratří Čapků, Památníku Karla Čapka a Českého národního korpusu.
     */
    protected static $baseText = <<<'EOT'
I.
S večerem zhoustla mlha sychravého dne. Je ti, jako by ses protlačoval řídkou
vlhkou hmotou, jež se za tebou neodvratně zavírá. Chtěl bys být doma. Doma, u
své lampy, v krabici čtyř stěn. Nikdy ses necítil tak opuštěn.
Prokop si razí cestu po nábřeží. Mrazí ho a čelo má zvlhlé potem slabosti;
chtěl by si sednout tady na té mokré lavičce, ale bojí se strážníků. Zdá se
mu, že se motá; ano, u Staroměstských mlýnů se mu někdo vyhnul obloukem jako
opilému. Nyní tedy vynakládá veškeru sílu, aby šel rovně. Teď, teď jde proti
němu člověk, má klobouk do očí a vyhrnutý límec. Prokop zatíná zuby, vraští
čelo, napíná všechny svaly, aby bezvadně přešel. Ale zrovna na krok před
chodcem se mu udělá v hlavě tma a celý svět se s ním pojednou zatočí; náhle
vidí zblízka, zblizoučka pár pronikavých očí, jak se do něho vpíchly, naráží
na něčí rameno, vypraví ze sebe cosi jako „promiňte“ a vzdaluje se s
křečovitou důstojností. Po několika krocích se zastaví a ohlédne; ten člověk
stojí a dívá se upřeně za ním. Prokop se sebere a odchází trochu rychleji; ale
nedá mu to, musí se znovu ohlédnout; a vida, ten člověk ještě pořád stojí a
dívá se za ním, dokonce samou pozorností vysunul z límce hlavu jako želva. „Ať
kouká,“ myslí si Prokop znepokojen, „teď už se ani neohlédnu.“ A jde, jak
nejlépe umí; náhle slyší za sebou kroky. Člověk s vyhrnutým límcem jde za ním.
Zdá se, že běží. A Prokop se v nesnesitelné hrůze dal na útěk.
Svět se s ním opět zatočil. Těžce oddychuje, jektaje zuby opřel se o strom a
zavřel oči. Bylo mu strašně špatně, bál se, že padne, že mu praskne srdce a
krev vyšplíchne ústy. Když otevřel oči, viděl těsně před sebou člověka s
vyhrnutým límcem.
„Nejste vy inženýr Prokop?“ ptal se člověk, patrně už poněkolikáté.
„Já… já tam nebyl,“ pokoušel se Prokop cosi zalhávat.
„Kde?“ ptal se muž.
„Tam,“ řekl Prokop a ukazoval hlavou kamsi k Strahovu. „Co na mně chcete?“
„Copak mne neznáš? Já jsem Tomeš. Tomeš z techniky, nevíš už?“
„Tomeš,“ opakoval Prokop, a bylo mu k smrti jedno, jaké to je jméno. „Ano,
Tomeš, to se rozumí. A co – co mi chcete?“
Muž s vyhrnutým límcem uchopil Prokopa pod paží. „Počkej, teď si sedneš,
rozumíš?“
„Ano,“ řekl Prokop a nechal se dovést k lavičce. „Já totiž… mně není dobře,
víte?“ Náhle vyprostil z kapsy ruku zavázanou jakýmsi špinavým cárem.
„Poraněn, víte? Zatracená věc.“
„A hlava tě nebolí?“ řekl člověk.
„Bolí.“
„Tak poslouchej, Prokope,“ řekl člověk. „Teď máš horečku nebo co. Musíš do
špitálu, víš? Je ti zle, to je vidět. Ale aspoň se hleď upamatovat, že se
známe. Já jsem Tomeš. Chodili jsme spolu do chemie. Člověče, rozpomeň se!“
„Já vím, Tomeš,“ ozval se Prokop chabě. „Ten holomek. Co s ním je?“
„Nic,“ řekl Tomeš. „Mluví s tebou. Musíš do postele, rozumíš? Kde bydlíš?“
„Tam,“ namáhal se mluvit Prokop a ukazoval někam hlavou. „U… u Hybšmonky.“
Náhle se pokoušel vstát. „Já tam nechci! Nechoďte tam! Tam je – tam je –“
„Co?“
„Krakatit,“ zašeptal Prokop.
„Co je to?“
„Nic. Neřeknu. Tam nikdo nesmí. Nebo – nebo –“
„Co?“
„Ffft, bum!“ udělal Prokop a hodil rukou do výše.
„Co je to?“
„Krakatoe. Kra-ka-tau. Sopka. Vul-vulkán, víte? Mně to… natrhlo palec. Já
nevím, co…“ Prokop se zarazil a pomalu dodal: „To ti je strašná věc, člověče.“
Tomeš se pozorně díval, jako by něco očekával. „Tak tedy,“ začal po chvilce,
„ty ještě pořád děláš do třaskavin?“
„Pořád.“
„S úspěchem?“
Prokop vydal ze sebe cosi na způsob smíchu. „Chtěl bys vědět, že? Holenku, to
není jen tak. Není – není jen tak,“ opakoval klátě opile hlavou. „Člověče, ono
to samo od sebe samo od sebe –“
„Co?“
„Kra-ka-tit. Krakatit. Krrrakatit. A ono to samo od sebe – Já nechal jen
prášek na stole, víš? Ostatní jsem smetl dododo-do takové piksly. Zu-zůstal
jen poprašek na stole, – a najednou –“
„– to vybuchlo.“
„Vybuchlo. Jen takový nálet, jen prášek, co jsem utrousil. Ani to vidět
nebylo. Tuhle – žárovka – kilometr dál. Ta to nebyla. A já – v lenošce, jako
kus dřeva. Víš, unaven. Příliš práce. A najednou… prásk! Já letěl na zem. Okna
to vyrazilo a – žárovka pryč. Detonace jako – jako když bouchne lydditová
patrona. Stra-strašná brizance. Já – já nejdřív myslel, že praskla ta por-
porcená – ponce – por-ce-lánová, polcelánová, porcenálová, poncelár, jak se to
honem, to bílé, víte, izolátor, jak se to jmenuje? Kře-mi-čitan hlinitý.“
„Porcelán.“
„Piksla. Já myslel, že praskla ta piksla, se vším všudy. Tak rozškrtnu sirku,
a ona tam je celá, ona je celá, ona je celá. A já – jako sloup – až mně sirka
spálila prsty. A pryč – přes pole – potmě – na Břevnov nebo do Střešovic – Aa
někde mě napadlo to slovo. Krakatoe. Krakatit. Kra-ka-tit. Nene, tak to
nenenebylo. Jak to bouchlo, letím na zem a křičím Krakatit. Krakatit. Pak jsem
na to zapomněl. Kdo je tu? Kdo – kdo jste?“
„Kolega Tomeš.“
„Tomeš, aha. Ten všivák! Přednášky si vypůjčoval. Nevrátil mně jeden sešit
chemie. Tomeš, jak se jmenoval?“
„Jiří.“
„Já už vím, Jirka. Ty jsi Jirka, já vím. Jirka Tomeš. Kde máš ten sešit?
Počkej, já ti něco řeknu. Až vyletí to ostatní, je zle. Člověče, to rozmlátí
celou Prahu. Smete. Odfoukne, ft! Až vyletí ta por-ce-lánová dóze, víš?“
„Jaká dóze?“
„Ty jsi Jirka Tomeš, já vím. Jdi do Karlína. Do Karlína nebo do Vysočan, a
dívej se, až to vyletí. Běž, běž honem!“
„Proč?“
„Já toho nadělal cent. Cent Krakatitu. Ne, asi – asi patnáct deka. Tam nahoře,
v té por-ce-lánové dózi. Člověče, až ta vyletí – Ale počkej, to není možné, to
je nesmysl,“ mumlal Prokop chytaje se za hlavu.
„Nu?“
„Proč – proč – proč to nevybuchlo také v té dózi? Když ten prášek – sám od
sebe – Počkej, na stole je zin-zinkový plech – plech – Od čeho to na stole
vybuchlo? Poč-kej, buď tiše, buď tiše,“ drtil Prokop a vrávoravě se zvedl.
„Co je ti?“
„Krakatit,“ zabručel Prokop, udělal celým tělem jakýsi otáčivý pohyb a svalil
se na zem v mrákotách.


II.

První, co si Prokop uvědomil, bylo, že se s ním všechno otřásá v drnčivém
rachotu a že ho někdo pevně drží kolem pasu. Hrozně se bál otevřít oči;
myslel, že se to na něj řítí. Ale když to neustávalo, otevřel oči a viděl před
sebou matný čtyřúhelník, kterým se sunou mlhavé světelné koule a pruhy. Neuměl
si to vysvětlit; díval se zmateně na uplývající a poskakující mátohy, trpně
odevzdán ve vše, co se s ním bude dít. Pak pochopil, že ten horlivý rachot
jsou kola vozu a venku že míjejí jenom svítilny v mlze; a unaven tolikerým
pozorováním zavřel opět oči a nechal se unášet.
„Teď si lehneš,“ řekl tiše hlas nad jeho hlavou; „spolkneš aspirin a bude ti
líp. Ráno ti přivedu doktora, ano?“
„Kdo je to,“ ptal se Prokop ospale.
„Tomeš. Lehneš si u mne, Prokope. Máš horečku. Kde tě co bolí?“
„Všude. Hlava se mi točí. Tak, víš –“
„Jen tiše lež. Uvařím ti čaj a vyspíš se. Máš to z rozčilení, víš. To je
taková nervová horečka. Do rána to přejde.“
Prokop svraštil čelo v námaze vzpomínání. „Já vím,“ řekl po chvíli
starostlivě. „Poslyš, ale někdo by měl tu pikslu hodit do vody. Aby
nevybuchla.“
„Bez starosti. Teď nemluv.“
„A… já bych snad mohl sedět. Nejsem ti těžký?“
„Ne, jen lež.“
„– – A ty máš ten můj sešit chemie,“ vzpomněl si Prokop najednou.
„Ano, dostaneš jej. Ale teď klid, slyšíš?“
„Já ti mám tak těžkou hlavu –“
Zatím drkotala drožka nahoru Ječnou ulicí. Tomeš slabounce hvízdal nějakou
melodii a díval se oknem. Prokop sípavě dýchal s tichým sténáním. Mlha smáčela
chodníky a vnikala až pod kabát svým sychravým slizem; bylo pusto a pozdě.
„Už tam budeme,“ řekl Tomeš nahlas. Drožka se čerstvěji rozhrčela na náměstí a
zahnula vpravo. „Počkej, Prokope, můžeš udělat pár kroků? Já ti pomohu.“
S námahou vlekl Tomeš svého hosta do druhého patra, Prokop si připadal jaksi
lehký a bez váhy, a nechal se skoro vynést po schodech nahoru; ale Tomeš silně
oddechoval a utíral si pot.
„Viď, jsem jako nitě,“ divil se Prokop.
„Nu ovšem,“ mručel udýchaný Tomeš odemykaje svůj byt.
Prokopovi bylo jako malému dítěti, když jej Tomeš svlékal. „Má maminka,“ začal
něco povídat, „když má maminka, to už je, to už je dávno, tatínek seděl u
stolu, a maminka mne nosila do postele, rozumíš?“
Pak už byl v posteli, přikryt po bradu, jektal zuby a díval se, jak se Tomeš
točí u kamen a rychle zatápí. Bylo mu do pláče dojetím, lítostí a slabostí, a
pořád brebentil; uklidnil se, až dostal na čelo studený obkladek. Tu se tiše
díval po pokoji; bylo tu cítit tabák a ženu.
„Ty jsi kujón, Tomši,“ ozval se vážně. „Pořád máš holky.“
Tomeš se k němu obrátil. „Nu, a co?“
„Nic. Co vlastně děláš?“
Tomeš mávl rukou. „Mizerně, kamaráde. Peníze nejsou.“
„Flámuješ.“
Tomeš jen potřásl hlavou.
„A je tě škoda, víš?“ začal Prokop starostlivě. „Ty bys mohl – Koukej, já
dělám už dvanáct let.“
„A co z toho máš?“ namítl Tomeš příkře.
„No, sem tam něco. Prodal jsem letos třaskavý dextrin.“
„Zač?“
„Za deset tisíc. Víš, nic to není, hloupost. Taková pitomá bouchačka, pro
doly. Ale kdybych chtěl –“
„Je ti už líp?“
„Krásně mi je. Já jsem ti našel metody! Člověče, jeden nitrát ceru, to ti je
vášnivá potvora; a chlor, chlor, tetrastupeň chlordusíku se zapálí světlem.
Rozsvítíš žárovku, a prásk! Ale to nic není. Koukej,“ prohlásil náhle
vystrkuje zpod pokrývky hubenou, děsně zkomolenou ruku. „Když něco vezmu do
ruky, tak… v tom cítím šumět atomy. Zrovna to mravenčí. Každá hmota mravenčí
jinak, rozumíš?“
„Ne.“
„To je síla, víš? Síla v hmotě. Hmota je strašně silná. Já… já hmatám, jak se
to v ní hemží. Drží to dohromady… s hroznou námahou. Jak to uvnitř rozvikláš,
rozpadne se, bum! Všechno je exploze. Když se rozevře květina, je to exploze.
Každá myšlenka, to je takové prasknutí v mozku. Když mně podáš ruku, cítím,
jak v tobě něco exploduje. Já mám takový hmat, člověče. A sluch. Všechno šumí,
jako šumivý prášek. To jsou samé malinkaté výbuchy. Mně ti tak hučí v hlavě…
Ratatata, jako strojní puška.“
„Tak,“ řekl Tomeš, „a teď spolkni tuhleten aspirin.“
„Ano. Třa-třaskavý aspirin. Perchlorovaný acetylsalicylazid. To nic není.
Člověče, já jsem našel exotermické třaskaviny. Každá látka je vlastně
třaskavina. Voda… voda je třaskavina. Hlína… a vzduch jsou třaskaviny. Peří,
peří v peřině je taky třaskavina. Víš, zatím to má jen teoretický význam. A já
jsem našel atomové výbuchy. Já – já – já jsem udělal alfaexploze. Roz-pad-ne
se to na plus plus částice. Žádná termochemie. De-struk-ce. Destruktivní
chemie, člověče. To ti je ohromná věc, Tomši, čistě vědecky. Já ti mám doma
tabulky… Lidi, kdybych já měl aparáty! Ale já mám jen oči… a ruce… Počkej, až
to napíšu!“
„Nechce se ti spát?“
„Chce. Jsem – dnes – unaven. A co tys pořád dělal?“
„Nu, nic. Život.“
„Život je třaskavina, víš? Prásk, člověk se narodí a rozpadne se, bum! A nám
se zdá, že to trvá bůhvíkolik let, viď? Počkej, já jsem teď něco spletl, že?“
„Docela v pořádku, Prokope. Možná že zítra udělám bum. Nebudu-li mít totiž
peníze. Ale to je jedno, starouši, jen spi.“
„Já bych ti půjčil, nechceš?“
„Nech. Na to bys nestačil. Snad ještě můj tatík –“ Tomeš mávl rukou.
„Tak vidíš, ty máš ještě tatínka,“ ozval se Prokop po chvíli s náhlou
měkkostí.
„Nu ano. Doktor v Týnici.“ Tomeš vstal a přecházel po pokoji. „Je to mizérie,
člověče, mizérie. Mám to nahnuté, nu! A nestarej se o mne. Já už – něco
udělám. Spi!“
Prokop se utišil. Polozavřenýma očima viděl, jak Tomeš sedá ke stolku a hrabe
se v nějakých papírech. Bylo mu jaksi sladko naslouchat šustění papíru a
tichému hukotu ohně v kamnech. Člověk skloněný u stolku opřel hlavu o dlaně a
snad ani nedýchal; a Prokopovi bylo, že leží doma a vidí svého staršího
bratra, svého bratra Josefa; učí se z knížek elektrotechnice a bude zítra
dělat zkoušku; a Prokop usnul horečným spánkem.


III.

Zdálo se mu, že slyší hukot jakoby nesčetných kol. „To je nějaká továrna,“
myslel si a běžel po schodech nahoru. Zničehonic se ocitl před velikými
dveřmi, kde stálo na skleněné tabulce: Plinius. Zaradoval se nesmírně a vešel
dovnitř. „Je tu pan Plinius?“ ptal se nějaké slečinky u psacího stroje. „Hned
přijde,“ řekla slečinka, a tu k němu přistoupil vysoký oholený muž v cutawayi
a s ohromnými kruhovými skly na očích. „Co si přejete?“ řekl.
Prokop se zvědavě díval do jeho neobyčejně výrazné tváře. Mělo to britskou
hubu a vypouklé rozježděné čelo, na skráni bradavici zvící šestáku a bradu
jako filmový herec. „Vy – vy – račte být – Plinius?“
„Prosím,“ řekl vysoký muž a krátkým gestem mu ukázal do své pracovny.
„Jsem velmi… je mi… ohromnou ctí,“ koktal Prokop usedaje.
„Co si přejete?“ přerušil ho vysoký muž.
„Já jsem rozbil hmotu,“ prohlásil Prokop. Plinius nic; hrál si jen s ocelovým
klíčkem a zavíral těžká víčka pod skly.
„To je totiž tak,“ začal Prokop překotně. „V-v-všecko se rozpadá, že? Hmota je
křehká. Ale já udělám, že se to rozpadne najednou, bum! Výbuch, rozumíte? Na
padrť. Na molekuly. Na atomy. Ale já jsem rozbil také atomy.“
„Škoda,“ řekl Plinius povážlivě.
„Proč – jaká škoda?“
„Škoda něco rozbít. I atomu je škoda. Nu tak dál.“
„Já… rozbiju atom. Já vím, že už Rutherford… Ale to byla jen taková páračka se
zářením, víte? To nic není. To se musí en masse. Jestli chcete, já vám
rozbourám tunu bismutu; rozštípne to ce-celý svět, ale to je jedno. Chcete?“
„Proč byste to dělal?“
„Je to… vědecky zajímavé,“ zmátl se Prokop. „Počkejte, jakpak bych vám to… To
je – to je vám ne-smír-ně zajímavé.“ Chytil se za hlavu. „Počkejte, mně
praskne hla-va; to bude – vědecky – ohromně zajímavé, že? Aha, aha,“ vyhrkl s
úlevou, „já vám to vyložím. Dynamit – dynamit trhá hmotu na kusy, na balvany,
ale benzoltrioxozonid ji roztrhá na prášek; udělá jen malou díru, ale
rrrozdrtí hmotu nana-na submikroskopickou padrť, rozumíte? To dělá detonační
rychlost. Hmota nemá čas ustoupit; nemůže se už ani roz-rozhrnout, roztrhnout,
víte? A já… jjjá jsem stupňoval detonační rychlost. Argonozonid.
Chlorargonoxozonid. Tetrargon. A pořád dál. Pak už ani vzduch nemůže ustoupit;
je stejně tuhý jako… jako ocelová deska. Roztrhá se na molekuly. A pořád dál.
A najednou vám… od jisté rychlosti… začne brizance děsně stoupat. Roste…
kvadraticky. Já koukám jako blázen. Odkud se to bere? Kde kde kde se najednou
vzala ta energie?“ naléhal Prokop zimničně. „Tak řekněte.“
„Nu, třeba v atomu,“ mínil Plinius.
„Aha,“ prohlásil Prokop vítězně a utřel si pot. „Tady je ten vtip. Jednoduše v
atomu. Ono to… vrazí atomy do sebe… a… sss… serve betaplášť… a jádro se musí
rozpadnout. To je alfaexploze. Víte, kdo jsem? Já jsem první člověk, který
překročil koeficient stlačitelnosti, pane. Já jsem našel atomové výbuchy. Já…
já jsem vyrazil z bismutu tantal. Poslyšte, víte vy, kolik je vy-výkonu v
jednom gramu rtuti? Čtyři sta dvaašedesát miliónů kilogramometrů. Hmota je
děsně silná. Hmota je regiment, který přešlapuje na místě: ráz dva, ráz dva;
ale dejte ten pravý povel, a regiment vyrazí v útok, en evant! To je výbuch,
rozumíte? Hurá!“
Prokop se zarazil vlastním křikem; v hlavě mu bušilo tak, že přestal cokoli
vnímat. „Promiňte,“ řekl, aby zamluvil rozpaky, a hledal třesoucí se rukou své
pouzdro na cigára. „Kouříte?“
„Ne.“
„Již staří Římané kouřili,“ ujišťoval Prokop a otevřel pouzdro; byly tam samé
těžké patrony. „Zapalte si,“ nutil, „to je lehoučký Nobel Extra.“ Sám ukousl
špičku tetrylové patrony a hledal sirky. „To nic není,“ začal, „ale znáte
třaskavé sklo? Škoda. Poslyšte, já vám mohu udělat výbušný papír. Napíšete
psaní, někdo to hodí do ohně a prásk! celý barák se sesype. Chcete?“
„K čemu?“ ptal se Plinius zvedaje obočí.
„Jen tak. Síla musí ven. Já vám něco povím. Kdybyste chodil po stropě, tak co
vám z toho vznikne? Já především kašlu na valenční teorie. Všecko se dá dělat.
Slyšíte, jak to venku rachotí? To slyšíte růst trávu: samé výbuchy. Každé
semínko je třaskavá kapsle, která vyletí. Puf, jako raketa. A ti hlupáci si
myslí, že není žádná tautomerie. Já jim ukážu takovou merotropii, že budou z
toho blázni. Samá laboratorní zkušenost, pane.“
Prokop cítil s hrůzou, že žvaní nesmysly; chtěl tomu uniknout a mlel tím
rychleji, pleta páté přes deváté. Plinius vážně kýval hlavou; dokonce komihal
celým tělem hlouběji a pořád hlouběji, jako by se klaněl. Prokop drmolil
zmatené formule a nemohl se zastavit, poule oči na Plinia, který se komihal s
rostoucí rychlostí jako stroj. Podlaha pod ním se začala houpat a zvedat.
„Ale tak přestaňte, člověče,“ zařval Prokop zděšen a probudil se. Místo Plinia
viděl Tomše, který neobraceje se od stolku bručel: „Nekřič, prosím tě.“
„Já nekřičím,“ řekl Prokop a zavřel oči. V hlavě mu hučelo rychlými a
bolestnými tepy.
Zdálo se mu, že letí přinejmenším rychlostí světla; nějak se mu svíralo srdce,
ale to dělá jen Fitzgerald-Lorentzovo zploštění, řekl si; musím být placatý
jako lívanec. A najednou se proti němu vyježí nesmírné skleněné hranoly; ne,
jsou to jenom nekonečné hladce vybroušené roviny, jež se protínají a
prostupují v břitkých úhlech jako krystalografické modely; a proti jedné
takové hraně je hnán úžasnou rychlostí. „Pozor,“ zařval sám na sebe, neboť v
tisícině vteřiny se musí roztříštit; ale tu již bleskově odletěl zpět a rovnou
proti hrotu obrovského jehlanu; odrazil se jako paprsek a byl vržen na
skleněně hladkou stěnu, smeká se podle ní, sviští do ostrého úhlu, kmitá
šíleně mezi jeho stěnami, je hozen pozpátku nevěda proti čemu, zas odmrštěn
dopadá bradou na ostrou hranu, ale v poslední chvíli ho to odhodí vzhůru; nyní
si roztřískne hlavu o euklidovskou rovinu nekonečna, ale již se řítí střemhlav
dolů, dolů do tmy; prudký náraz, bolestné cuknutí v celém těle, ale hned zas
se zvedl a dal se na útěk. Uhání labyrintickou chodbou a za sebou slyší dupot
pronásledovatelů; chodba se úží, svírá se, její stěny se přirážejí k sobě
děsným a neodvratným pohybem; i dělá se tenký jako šídlo, zatajuje dech a
upaluje v bláznivé hrůze, aby tudy proběhl, než ho ty stěny rozdrtí. Zavřelo
se to za ním s kamenným nárazem, zatímco sám svistí do propasti podle ledově
čišící zdi. Strašný úder, a ztrácí vědomí; když procitl, vidí, že je v černé
tmě; hmatá po slizkých kamenných stěnách a křičí o pomoc, ale z jeho úst
nevychází zvuku; taková je tu tma. Jektaje hrůzou klopýtá po dně propasti;
nahmatá postranní chodbu, i vrhá se do ní; jsou to vlastně. schody, a nahoře,
nekonečně daleko svítá malinký otvor jako v šachtě; běží tedy nahoru po
nesčíslných a strašně příkrých stupních; ale nahoře není než plošinka,
lehoučká plechová platforma drnčící a chvějící se nad závratnou hlubinou, a
dolů se šroubem točí jen nekonečné schůdky ze železných plátů. A tu již za
sebou slyšel supění pronásledovatelů. Bez sebe hrůzou se řítil a točil po
schůdkách dolů, a za ním železně řinčí a rachotí dupající zástup nepřátel. A
najednou vinuté schody se končí ostře v prázdnu. Prokop zavyl, rozpřáhl ruce a
pořád ještě víře padal do bezdna. Hlava se mu zatočila, neviděl už a neslyšel;
váznoucíma nohama běžel nevěda kam, drcen strašným a slepým puzením, že musí
kamsi dorazit, než bude pozdě. Rychleji a rychleji ubíhal nekonečným
koridorem; čas od času míjel semafor, na kterém pokaždé vyskočila vyšší
číslice: 17, 18, 19. Najednou pochopil, že běhá v kruhu a ta čísla že udávají
počet jeho oběhů. 40, 41. Popadla ho nesnesitelná hrůza, že přijde pozdě a že
se odtud nedostane; svištěl zběsilou rychlostí, takže se semafor jenom mihal
jako telegrafní tyče z rychlíku; a ještě rychleji! nyní už semafor ani
neubíhá, nýbrž stojí na jednom místě a odpočítává bleskovou rychlostí tisíce a
desettisíce oběhů, a nikde není východ z té chodby, a chodba je na pohled
rovná a lesklá jako hamburský tunel, a přece se vrací kruhem; Prokop vzlyká
děsem: to je Einsteinův vesmír, a já musím dojít, než bude pozdě! Náhle zazněl
strašný výkřik, a Prokop ustrnul: je to hlas tatínkův, někdo ho vraždí; i jal
se obíhat ještě rychleji, semafor zmizel, udělala se tma; Prokop tápal po
stěnách a nahmatal zamčené dveře, a za nimi je slyšet to zoufalé bědování a
rány pokáceného nábytku. Řva hrůzou zarývá Prokop nehty do dveří, štípe je a
rozškrabává; vytrhal je po třískách a našel za nimi staré známé schody, jež ho
denně vedly domů, když byl maličký; a nahoře dusí se tatínek, někdo ho škrtí a
smýká jím po zemi. Křiče vyletí Prokop nahoru, je doma na chodbě, vidí konve a
chlebovou skříň maminčinu a pootevřené dveře do kuchyně, a tam uvnitř chroptí
a prosí tatínek, aby ho nezabíjeli; někdo mu tluče hlavou o zem; chce mu jít
na pomoc, ale nějaká slepá, bláznivá moc ho nutí, aby tady na chodbě běhal
dokola, pořád rychleji dokolečka a chechtal se jíkavě, zatímco uvnitř skomírá
a dusí se tatínkovo sténání. A neschopen vykročit ze závratného bludného
kruhu, řítě se stále rychleji ryčel Prokop šíleným smíchem hrůzy.
Tu se probudil zalit potem a jektaje zuby. Tomeš mu stál u hlav a dával mu na
rozžhavené čelo nový chladivý obklad.
„To je dobře, to je dobře,“ mumlal Prokop, „já už nebudu spát.“ I ležel tiše a
díval se na Tomše, jak sedí u lampy. Jirka Tomeš, říkal si, a počkejme, pak
kolega Duras, a Honza Buchta, Sudík, Sudík, Sudík, a kdo ještě? Sudík, Trlica,
Trlica, Pešek, Jovanovič, Mádr, Holoubek, co nosil brejle, to je náš ročník na
chemii. Bože, a který je tamhleten? Aha, to je Vedral, ten padl v roce
šestnáct, a za ním sedí Holoubek, Pacovský, Trlica, Šeba, celý ročník. A tu
slyšel najednou: „Pan Prokop bude kolokvovat.“
Lekl se nesmírně. U katedry sedí profesor Wald a tahá se suchou ručičkou za
vousy, jako vždy. „Povězte,“ praví profesor Wald, „co víte o třaskavinách.“
„Třaskaviny třaskaviny,“ začíná Prokop nervózně, „jejich výbušnost záleží na
tom, že že že se náhle vyvine veliký objem plynu, který který se vyvine z
mnohem menšího objemu výbušné masy… Prosím, to není správné.“
„Jak to?“ táže se Wald přísně.
„Já já já jsem našel alfavýbuchy. Výbuch totiž nastane rozpadem atomu.
Částečky atomu se rozletí – rozletí –“
„Nesmysl,“ přeruší ho profesor. „Není žádných atomů.“
„Jsou jsou jsou,“ drtil Prokop. „Prosím, já já já to dokážu –“
„Překonaná teorie,“ bručí profesor. „Nejsou vůbec žádné atomy, jsou jenom
gumetály. Víte, co je to gumetál?“
Prokop se zapotil úlekem. Toho slova nikdy v životě neslyšel. Gumetál? „To
neznám,“ vydechl stísněně.
„Tak vidíte,“ řekl suše Wald. „A pak si troufáte dělat kolokvium. Co víte o
Krakatitu?“
Prokop se nesmírně zarazil. „Krakatit,“ šeptal, „to je… to je úplně nová
třaskavina, která… která dosud…“
„Čím se zanítí? Čím? Čím exploduje?“
„Hertzovými vlnami,“ vyhrkl Prokop s úlevou.
„Jak to víte?“
„Protože mně zničehonic vybuchla. Protože… protože nebyl žádný jiný impuls. A
protože –“
„Nu?“
„… její syn-syntéza… se mně povedla za-za-za… vysokofrekvenční oscilace. Není
to dosud vyvyvysvětleno; ale já myslím, že – – že to byly nějaké
elektromagnetické vlny.“
„Byly. Já to vím. Teď napište na tabuli chemicky vzorec Krakatitu.“
Prokop vzal kus křídy a načmáral na tabuli svůj vzorec.
„Přečtěte.“
Prokop odříkal vzorec nahlas. Tu vstal profesor Wald a řekl najednou jakýmsi
docela jiným hlasem: „Jak? Jak je to?“
Prokop opakoval formuli.
„Tetrargon?“ ptal se profesor rychle. „Pb kolik?“
„Dvě.“
„Jak se to dělá?“ tázal se hlas podivně blízce. „Postup! Jak se to dělá? Jak?…
Jak se dělá Krakatit?“
Prokop otevřel oči. Nad ním se skláněl Tomeš s tužkou a zápisníkem v ruce a
bez dechu se díval na jeho rty.
„Co?“ mumlal Prokop neklidně. „Co chceš? Jak… jak se to dělá?“
„Něco se ti zdálo,“ řekl Tomeš a schoval zápisník za zády. „Spi, člověče,
spi.“


IV.

Teď jsem něco vyžvanil, uvědomoval si Prokop jasnějším cípem mozku; ale jinak
mu to bylo svrchovaně lhostejno; chtělo se mu jen spát, nesmírně spát. Viděl
jakýsi turecký koberec, jehož vzor se bez konce přesunoval, prostupoval a
měnil. Nebylo to nic, a přece ho to jaksi rozčilovalo; i ve spaní zatoužil
vidět znovu Plinia. Snažil se vybavit si jeho podobu; místo toho měl před
sebou ohavnou zešklebenou tvář, jež skřípala žlutými vyžranými zuby, až se
drtily, a pak je po kouskách vyplivovala. Chtěl tomu uniknout; napadlo ho
slovo „rybář“, a hle, zjevil se mu rybář nad šedivou vodou i s rybami v
čeřenu; řekl si „lešení“, a viděl skutečné lešení do poslední skoby a vazby.
Dlouho se bavil tím, že vymýšlel slova a pozoroval obrázky jimi promítnuté;
ale pak, pak už si živou mocí nemohl na žádné slovo vzpomenout. Namáhal se
usilovně, aby našel aspoň jedno jediné slovo nebo věc, ale marně; tu ho zalila
hrůza bezmoci studeným potem. Musím postupovat metodicky, umínil si; začnu zas
od začátku, nebo jsem ztracen. Šťastně si vzpomněl na slovo „rybář“, ale
zjevil se mu hliněný prázdný galon od petroleje; bylo to děsné. Řekl si
„židle“, a ukázal se mu s podivnou podrobností dehtovaný tovární plot s
trochou smutné zaprášené trávy a rezavými obručemi. To je šílenství, řekl si s
mrazivou jasností; to je, pánové, typická pomatenost, hyperofabula ugongi
dugongi Darwin. Tu se mu tento odborný název zazdál neznámo proč ukrutně
směšný, a dal se do hlasitého, zrovna zalykavého smíchu, jímž se probudil.
Byl úplně zpocen a odkopán. Díval se horečnýma očima na Tomše, který chvatně
přecházel po pokoji a házel nějaké věci do kufříku; ale nepoznával ho.
„Poslyšte, poslyšte,“ začal, „to je k smíchu, poslyšte, tak počkejte, to
musíte, poslyšte –“ Chtěl říci jako vtip ten podivuhodný odborný název, a sám
se smál předem; ale živou mocí si nemohl vzpomenout, jak to vlastně bylo, i
rozmrzel se a umkl.
Tomeš si oblékl ulstr a narazil čepici; a když už bral kufřík, zaváhal a sedl
si na pelest k Prokopovi. „Poslyš, starouši,“ řekl starostlivě, „já teď musím
odejet. K tátovi, do Týnice. Nedá-li mně peníze, tak – se už nevrátím, víš?
Ale nic si z toho nedělej. Ráno sem přijde domovnice a přivede ti doktora,
ano?“
„Kolik je hodin?“ ptal se Prokop netečně.
„Čtyři… Čtyři a pět minut. Snad… ti tu nic neschází?“
Prokop zavřel oči, odhodlán nezajímat se už o nic na světě. Tomeš ho pečlivě
přikryl, a bylo ticho.
Náhle otevřel oči dokořán. Viděl nad sebou neznámý strop a po jeho kraji běží
neznámý ornament. Sáhl rukou po svém nočním stolku, a hmátl do prázdna.
Obrátil se polekán, a místo svého širokého laboratorního pultu vidí nějaký
cizí stolek s lampičkou. Tam, kde bývalo okno, je skříň; kde stávalo umyvadlo,
jsou jakési dveře. Zmátl se tím vším nesmírně; nedovedl pochopit, co se s ním
děje, kde se octl, a přemáhaje závrať usedl na posteli. Pomalu si uvědomil, že
není doma, ale nemohl si vzpomenout, jak se sem dostal. „Kdo je to,“ zeptal se
hlasitě nazdařbůh, stěží hýbaje jazykem. „Pít,“ ozval se po chvíli, „pít!“
Bylo trýznivé ticho. Vstal z postele a trochu vrávoravě šel hledat vodu. Na
umyvadle našel karafu a pil z ní dychtivě; a když se vracel do postele,
podlomily se mu nohy a usedl na židli, nemoha dále. Seděl snad hodně dlouho;
pak ho roztřásla zima, neboť se celý polil vodou z karafy, a přišlo mu líto
sebe sama, že je kdesi a neví sám kde, že ani do postele nedojde a že je tak
bezradně a bezmocně sám; tu propukl v dětský vzlykavý pláč.
Když se trochu vyplakal, bylo mu v hlavě jasněji. Dokonce mohl dojít až k
posteli a ulehl jektaje zuby; a sotva se zahřál, usnul mrákotným spánkem beze
snu.
Když se probudil, byla roleta vytažena do šedivého dne a v pokoji trochu
pouklizeno; nedovedl pochopit, kdo to udělal, ale jinak se pamatoval na vše,
na včerejší explozi, na Tomše i na jeho odjezd. Zato ho třeštivě bolela hlava,
bylo mu těžko na prsou a drásavě ho mučil kašel. Je to špatné, říkal si, je to
docela špatné; měl bych jít domů a lehnout si. Vstal tedy a začal se pomalu
strojit chvílemi odpočívaje. Bylo mu, jako by mu něco drtilo hrozným tlakem
prsa. Usedl pak netečný ke všemu a těžce dýchal.
Tu krátce, jemně zazněl zvonek. Vzchopil se s námahou a šel otevřít. Na prahu
v chodbě stála mladá dívka s tváří zastřenou závojem.
„Bydlí tady… pan Tomeš?“ ptala se spěšně a stísněně.
„Prosím,“ řekl Prokop a ustoupil jí z cesty; a když, trochu váhajíc, těsně
podle něho vcházela dovnitř, zavála na něj slabounká a spanilá vůně, že
rozkoší vzdychl.
Posadil ji vedle okna a usedl proti ní, drže se zpříma, jak nejlépe dovedl.
Cítil, že samým úsilím vypadá přísně a strnule, což uvádělo do nesmírných
rozpaků jeho i dívku. Hryzala si pod závojem rty a klopila oči; ach, líbezná
hladkost tváře, ach, ruce malé a hrozně rozčilené! Náhle zvedla oči, a Prokop
zatajil dech omámen úžasem; tak krásná se mu zdála.
„Pan Tomeš není doma?“ ptala se dívka.
„Tomeš odejel,“ řekl Prokop váhavě. „Dnes v noci, slečno.“
„Kam?“
„Do Týnice, k svému otci.“
„A vrátí se?“
Prokop pokrčil rameny.
Dívka sklopila hlavu a její ruce s něčím zápasily. „A řekl vám, proč – proč –“
„Řekl.“
„A myslíte, že – že to udělá?“
„Co, slečno?“
„Že se zastřelí.“
Prokop si bleskem vzpomněl, že viděl Tomše ukládat revolver do kufříku. ,Možná
že zítra udělám bum,‘ slyšel jej znovu drtit mezi zuby. Nechtěl nic říci, ale
vypadal asi velmi povážlivě.
„Ó bože, ó bože,“ vypravila ze sebe dívka, „ale to je strašné! Řekněte,
řekněte –“
„Co, slečno?“
„Kdyby – kdyby někdo mohl za ním jet! Kdyby mu někdo řekl – kdyby mu dal –
Vždyť by to nemusel udělat, chápete? Kdyby někdo za ním ještě dnes jel –“
Prokop se díval na její zoufalé ruce, jež se zatínaly a spínaly.
„Já tam tedy pojedu, slečno,“ řekl tiše. „Náhodou… mám snad v tu stranu
nějakou cestu. Kdybyste chtěla – já –“
Dívka zvedla hlavu. „Skutečně,“ vyhrkla radostně, „vy byste mohl –?“
„Já jsem jeho… starý kamarád, víte?“ vysvětloval Prokop. „Chcete-li mu něco
vzkázat… nebo poslat… já ochotně…“
„Bože, vy jste hodný,“ vydechla dívka.
Prokop se slabě začervenal. „To je maličkost, slečno,“ bránil se. „Náhodou…
mám zrovna volný čas… stejně chci někam jet, a vůbec –“ Mávl v rozpacích
rukou. „To nestojí za řeč. Udělám všecko, co chcete.“
Dívka se zarděla a honem se dívala jinam. „Ani nevím, jak bych… vám měla
děkovat,“ řekla zmateně. „Mně je tak líto, že… že vy… Ale je to tak důležité –
A pak, vy jste jeho přítel – Nemyslete si, že já sama –“ Tu se přemohla a
upřela na Prokopa čiré oči. „Já mu něco musím poslat. Od někoho jiného. Já vám
nemohu říci –“
„Není třeba,“ řekl Prokop rychle. „Já mu to dám, a je to. Já jsem tak rád, že
mohu vám… že mohu jemu… Prší snad?“ ptal se náhle dívaje se na její zrosenou
kožišinku.
„Prší.“
„To je dobře,“ mínil Prokop; myslel totiž na to, jak příjemně by chladilo,
kdyby na tu kožišinku směl položit čelo.
„Já to tu nemám,“ řekla vstávajíc. „Bude to jen malý balíček. Kdybyste mohl
počkat… Já vám to přinesu za dvě hodiny.“
Prokop se velmi strnule uklonil; bál se totiž, že ztratí rovnováhu. Ve dveřích
se obrátila a pohlédla na něj upřenýma očima. „Na shledanou.“ A byla ta tam.
Prokop usedl a zavřel oči. Krupičky deště na kožišince, hustý a orosený závoj;
zastřený hlas, vůně, neklidné ruce v těsných, maličkých rukavičkách; chladná
vůně, pohled jasný a matoucí pod sličným, pevným obočím. Ruce na klíně, měkké
řasení sukně na silných kolenou, ach, maličké ruce v těsných rukavicích! Vůně,
temný a chvějící se hlas, líčko hladké a pobledlé. Prokop zatínal zuby do
chvějících se rtů. Smutná, zmatená a statečná. Modrošedé oči, oči čisté a
světelné. Ó bože, ó bože, jak se tiskl závoj k jejím rtům!
Prokop zasténal a otevřel oči. Je to Tomšova holka, řekl si se slepým vztekem.
Věděla kudy jít, není tu poprvé. Snad tady… zrovna tady v tom pokoji – –
Prokop si v nesnesitelné trýzni vrýval nehty do dlaní. A já hlupák se nabízím,
že pojedu za ním! Já hlupák, já mu ponesu psaníčko! Co – co – co mi je vůbec
po ní?
Tu ho napadla spásná myšlenka. Uteku domů, do svého laboratorního baráku tam
nahoře. A ona, ať si sem přijde! ať si pak dělá, co chce! Ať – ať – ať si jede
za ním sama, když… když jí na tom záleží –
Rozhlédl se po pokoji; viděl zválenou postel, zastyděl se a ustlal ji, jak byl
zvyklý doma. Pak se mu nezdála dost slušně ustlaná, přestlal ji, rovnal a
hladil, a pak už rovnal všechno všudy, uklízel, pokoušel se pěkně zřasit i
záclony, načež usedl s hlavou zmotanou a hrudí drcenou bolestným tlakem a
čekal.


V.

Zdálo se mu, že jde ohromnou zelinářskou zahradou; kolem dokola nic než samé
zelné hlávky, ale nejsou to hlávky, nýbrž zešklebené a olezlé, krhavé a
blekotající, nestvůrné, vodnaté, trudovité a vyboulené hlavy lidské; vyrůstají
z hubených košťálů a lezou po nich odporné zelené housenky. A hle, přes pole k
němu běží dívka se závojem na tváři; zvedá trochu sukni a přeskakuje lidské
hlávky. Tu vyrůstají zpod každé z nich nahé, úžasně tenké a chlupaté ruce a
sahají jí po nohou a po sukních. Dívka křičí v šílené hrůze a zvedá sukni
výše, až nad silná kolena, obnažuje bílé nohy a snaží se přeskočit ty
chňapající ruce. Prokop zavírá oči; nesnese pohled na její bílé silné nohy, a
šílí úzkostí, že ji ty zelné hlávky zhanobí. Tu vrhá se na zem a uřezává
kapesním nožem první hlávku; ta zvířecky ječí a cvaká mu vyžranými zuby po
rukou. Nyní druhá, třetí hlávka; Kriste Ježíši, kdy skosí to ohromné pole, než
se dostane k dívce zápasící tam na druhé straně nekonečné zahrady? Zběsile
vyskakuje a šlape po těch příšerných hlavách, rozdupává je, kope do nich;
zaplete se nohama do jejich tenkých, přísavných pracek, padá, je uchopen,
rván, dušen, a vše mizí.
Vše mizí v závratném víření. A náhle se ozve zblízka zastřený hlas: „Nesu vám
ten balíček.“ Tu vyskočil a otevřel oči, a před ním stojí děvečka z Hybšmonky,
šilhavá a těhotná, se zmáčeným břichem, a podává mu cosi zabaleného v mokrém
hadru. To není ona, trne bolestně Prokop, a rázem vidí vytáhlou smutnou
prodavačku, která mu dřevěnými tyčinkami roztahuje rukavice. To není ona,
brání se Prokop, a vidí naduřelé dítě na křivičných nožkách, jež – jež – jež
se mu nestoudně nabízí! „Jdi pryč,“ křičí Prokop, a tu se mu zjeví pohozená
konev uprostřed záhonu povadlé a slimáky prolezlé kapusty a nemizí přes
všechno jeho úsilí.
Vtom tiše zazněl zvonek jako tiknutí ptáčka. Prokop se vrhl ke dveřím a
otevřel; na prahu stála dívka se závojem, tiskla k ňadrům balíček a
oddychovala. „To jste vy,“ řekl Prokop tiše a (neznámo proč) nesmírně dojat.
Dívka vešla, dotkla se ho ramenem; její vůně dechla na Prokopa trýznivým
opojením.
Zůstala stát uprostřed pokoje. „Prosím vás, nehněvejte se,“ mluvila tiše a
jakoby spěchajíc, „že jsem vám dala takové poslání. Vždyť ani nevíte, proč –
proč já – Kdyby vám to dělalo nějaké potíže –“
„Pojedu,“ vypravil ze sebe Prokop chraptivě.
Dívka upřela na něj zblízka své vážné, čisté oči. „Nemyslete si o mně nic
zlého. Já mám jenom strach, aby pan… aby váš přítel neudělal něco, co by
někoho… někoho jiného do smrti trápilo. Já mám k vám tolik důvěry… Vy ho
zachráníte, že?“
„Nesmírně rád,“ vydechl Prokop nějakým nesvým a rozechvěným hlasem; tak ho
opojovalo nadšení. „Slečno, já… co budete chtít…“ Odvracel oči; bál se, že
něco vybleptne, že je snad slyšet, jak mu bouchá srdce, a styděl se za svou
těžkopádnost.
I dívku zachvátil jeho zmatek; hrozně se zarděla a nevěděla kam s očima.
„Děkuju, děkuju vám,“ pokoušela se také jaksi nejistým hlasem, a silně mačkala
v rukou zapečetěný balíček. Nastalo ticho, jež působilo Prokopovi sladkou a
mučivou závrať. Cítil s mrazením, že dívka letmo zkoumá jeho tvář; a když k ní
náhle obrátil oči, viděl, že se dívá k zemi a čeká, připravena, aby snesla
jeho pohled. Prokop cítil, že by měl něco říci, aby zachránil situaci; místo
toho jen hýbal rty a chvěl se na celém těle.
Konečně pohnula dívka rukou a zašeptala: „Ten balíček –“ Tu zapomněl Prokop,
proč schovává pravou ruku za zády, a sáhl po tlusté obálce. Dívka zbledla a
couvla. „Vy jste poraněn,“ vyhrkla. „Ukažte!“ Prokop honem schovával ruku. „To
nic není,“ ujišťoval rychle, „to… to se mi jen trochu zanítila… zanítila
taková ranka, víte?“
Dívka, docela bledá, zasykla, jako by sama cítila tu bolest. „Proč nejdete k
lékaři?“ řekla prudce. „Vy nemůžete nikam jet! Já… já pošlu někoho jiného!“
„Vždyť už se to hojí,“ bránil se Prokop, jako by mu brali něco drahého.
„Jistě, to už je… skoro v pořádku, jen škrábnutí, a vůbec, to je nesmysl; proč
bych nejel? A pak, slečno, v takové věci… nemůžete poslat cizího člověka,
víte? Vždyť to už ani nebolí, hleďte,“ a zatřepal pravou rukou.
Dívka stáhla obočí přísnou soustrastí. „Vy nesmíte jet! Proč jste mi to
neřekl? Já – já – já to nedovolím! Já nechci –“
Prokop byl docela nešťasten. „Hleďte, slečno,“ spustil horlivě, „to jistě nic
není; já jsem na to zvyklý. Podívejte se, tady,“ a ukázal jí levou ruku, kde
mu scházel skoro celý malík a kloub ukazováčku naduřel uzlovitou jizvou. „To
už je takové řemeslo, víte?“ Ani nepozoroval, že dívka couvá s blednoucími rty
a dívá se na pořádný šrám jeho čela od oka k vlasům. „Udělá to prásk, a je to.
Jako voják. Zvednu se a běžím útokem dál, rozumíte? Nic se mně nemůže stát.
Nu, dejte sem!“ Vzal jí z ruky balíček, vyhodil do výše a chytil. „Žádná
starost, pane. Pojedu jako pán. Víte, já, já už jsem dávno nikde nebyl. Znáte
Ameriku?“
Dívka mlčela a hleděla na něho se zachmuřeným obočím.
„Ať si říkají, že mají nové teorie,“ drmolil Prokop horečně; „počkejte, já jim
to dokážu, až vyjdou mé výpočty. Škoda že tomu nerozumíte; já bych vám to
vyložil, vám věřím, vám věřím, ale jemu ne. Nevěřte mu,“ mluvil naléhavě,
„mějte se na pozoru. Vy jste tak krásná,“ vydechl nadšeně. „Tam nahoře já
nikdy s nikým nemluvím. Je to jen taková bouda z prken, víte? Haha, vy jste se
tak bála těch hlávek! Ale já vás nedám, o to nic; nebojte se ničeho. Já vás
nedám.“
Pohlížela na něho s očima rozšířenýma hrůzou. „Vy přece nemůžete odejet!“
Prokop zesmutněl a zmalátněl. „Ne, na to nesmíte dát, co mluvím. Povídal jsem
nesmysly, že? Já jsem jenom chtěl, abyste nemyslela na tu ruku. Abyste se
nebála. To už přešlo.“ – Přemohl své vzrušení, byl tuhý a zakaboněný samým
soustředěním. „Pojedu do Týnice a najdu Tomše. Dám mu ten balíček a řeknu, že
to posílá slečna, kterou zná. Je to tak správně?“
„Ano,“ řekla dívka váhavě, „ale vy přece nemůžete –“
Prokop se pokusil o prosebný úsměv; jeho těžká, rozjizvená tvář náhle docela
zkrásněla. „Nechte mne,“ řekl tiše, „vždyť je to – je to – pro vás.“
Dívka zamžikala očima; bylo jí skoro do pláče prudkým pohnutím. Mlčky kývla a
podávala mu ruku. Zvedl svou beztvarou levici; pohlédla na ni zvědavě a silně
ji stiskla. „Já vám tolik děkuju,“ řekla rychle, „sbohem!“
Ve dveřích se zastavila a chtěla něco říci; mačkala v ruce kliku a čekala –
„Mám mu… vyřídit… pozdrav?“ optal se Prokop s křivým úsměvem.
„Ne,“ vydechla a rychle na něj pohlédla. „Na shledanou.“
Dveře za ní zapadly. Prokop se na ně díval, bylo mu najednou na smrt těžko a
chabě, hlava se mu točila, a stálo ho nesmírné usilí, aby učinil jediný krok.


VI.

Na nádraží bylo mu čekati půldruhé hodiny. Sedl si na chodbě a chvěl se zimou.
V poraněné ruce mu pulsovala ukrutná bolest; zavíral oči, a tu se mu zdálo, že
ta bolavá ruka roste, že je veliká jako hlava, jako tykev, jako hrnec na
vyváření prádla, a že v celém jejím rozsahu palčivě cuká živé maso. Přitom mu
bylo mdlo k dávení a na čele mu ustavičně vyrážel studený pot úzkosti. Nesměl
se podívat na špinavé, poplivané, zablácené dlážky chodby, aby se mu nezvedal
žaludek. Vyhrnul si límec a polo snil, pomalu přemáhán nekonečnou
lhostejností. Zdálo se mu, že zas je vojákem a leží poraněn v širém poli; kde
– kde to pořád bojují? Tu zazněl mu do uší prudký zvon a někdo volal: „Týnice,
Duchcov, Moldava, nastupovat!“
Nyní už tedy sedí ve vagóně u okna a je mu nezřízeně veselo, jako by někoho
přelstil nebo někomu utekl; teď, holenku, už jedu do Týnice a nic mne nemůže
zadržet. Skoro se chechtal radostí, uvelebil se ve svém koutě a s náramnou
čilostí pozoroval své spolucestující. Naproti němu sedí nějaký krejčík s
tenkým krkem, hubená černá paní, pak člověk s divně bezvýraznou tváří; vedle
Prokopa strašně tlustý pán, kterému se nemůže nějak břicho vejít mezi nohy, a
snad ještě někdo, to už je jedno. Prokop se nesmí dívat z okna, protože mu to
dělá závrať. Ratata ratata ratata vybuchuje vlak, vše drnčí, bouchá, otřásá se
samou horlivostí spěchu. Krejčíkovi se klátí hlava napravo nalevo, napravo
nalevo; černá paní jaksi podivně a ztuhle hopkuje na místě, bezvýrazná tvář se
třese a kmitá jako špatný snímek ve filmu. A tlustý soused, to je kupa rosolu,
jež se houpe, otřásá, poskakuje nesmírně směšným způsobem. Týnice, Týnice,
Týnice, skanduje Prokop s údery kol; rychleji! rychleji! Vlak se ohřál samým
chvatem, je tu horko, Prokop se potí žárem; krejčík má nyní dvě hlavy na dvou
tenkých krcích, obě hlavy se třesou a narážejí na sebe, až to drnčí. Černá
paní výsměšně a urážlivě hopkuje na svém sedadle; tváří se naschvál jako
dřevěná loutka. Bezvýrazná tvář zmizela; sedí tam trup s rukama mrtvě
složenýma na klíně, ruce neživě poskakují, ale trup je bezhlavý.
Prokop sbírá všechny své síly, aby se na to pořádně podíval; štípe se do nohy,
ale nic platno, trup je dál bezhlavý a mrtvě se poddává otřesům vlaku.
Prokopovi je z toho děsně úzko; šťouchá loktem tlustého souseda, ale ten se
jen rosolovitě chvěje, a Prokopovi se zdá, že se mu to tlusté tělo bezhlase
chechtá. Nemůže se už na to dívat; obrací se k oknu, ale tam zničehonic vidí
lidskou tvář. Neví zprvu, co je na ní tak zarážejícího; pozoruje ji
vytřeštěnýma očima a poznává, že to je jiný Prokop, který na něho upírá oči s
děsivou pozorností. Co chce? zhrozil se Prokop. Proboha, nezapomněl jsem ten
balíček v Tomšově bytě? Hmatá honem po kapsách a najde obálku v náprsní kapse.
Tu se tvář v okně usmála a Prokopovi se ulevilo. Odvážil se dokonce pohlédnout
na bezhlavý trup; a vida, on si ten člověk jen přetáhl pověšený svrchník přes
hlavu a spí pod ním. Prokop by to udělal také, ale bojí se, aby mu někdo
nevytáhl z kapsy tu zapečetěnou obálku. A přece jde na něho spaní, je
nesnesitelně unaven; nikdy by si nedovedl představit, že je možno být tak
unaven. Usíná, vyrve se z toho vytřeštěně a opět usíná. Černá paní má jednu
hopkující hlavu na ramenou a druhou drží na klíně oběma rukama; a co se
krejčíka týče, sedí místo něho jen prázdné, beztělé šaty, z nichž čouhá
porcelánová palička. Prokop usíná, ale pojednou se z toho vytrhne v horlivé
jistotě, že je v Týnici; snad to někdo venku volal, neboť vlak stojí.
Vyběhl tedy ven a viděl, že už je večer; dva tři lidé vystupují na malinkém
blikajícím nádraží, za nímž je neznámá a mlhavá tma. Řekli Prokopovi, že do
Týnice musí jet poštou, je-li na ní ještě místo. Poštovní vůz, to byl jen
kozlík a za ním truhlík na zásilky; a na kozlíku už seděl pošťák a nějaký
pasažér.
„Prosím vás, vemte mne do Týnice,“ řekl Prokop.
Pošťák potřásl hlavou v nekonečném smutku. „Nejde,“ odpověděl po chvíli.
„Proč… jak to?“
„Není už místo,“ řekl pošťák zrale.
Prokopovi vstoupily do očí slzy samou lítostí. „Jak je tam daleko… pěšky?“
Pošťák účastně přemýšlel. „No, hodinu,“ řekl.
„Ale já… nemohu jít pěšky! Já musím k doktoru Tomšovi!“ protestoval Prokop
zdrcen.
Pošťák uvažoval. „Vy jste… jako… pacient?“
„Mně je zle,“ zamumlal Prokop; skutečně se chvěl slabostí a zimou.
Pošťák přemýšlel a potřásal hlavou. „Když to nejde,“ ozval se konečně.
„Já se vejdu, já… kdyby byl jen kousek místa, já…“
Na kozlíku ticho; jen pošťák se drbal ve vousech, až to chrastělo; pak neřekl
slova a slezl, dělal něco na postraňku a mlčky odešel do nádraží. Pasažér na
kozlíku se ani nepohnul.
Prokop byl tak vyčerpán, že si musel sednout na patník. Nedojdu, cítil
zoufale; zůstanu tady, až… až…
Pošťák se vracel z nádraží a nesl prázdnou bedničku. Nějak ji vpravil na
plošinu kozlíku a rozvážně ji pozoroval. „Tak si tam sedněte,“ řekl posléze.
„Kam?“ ptal se Prokop.
„No… na kozlík.“
Prokop se dostal na kozlík tak nadpřirozeně, jako by ho vynesly nebeské síly.
Pošťák zas dělal cosi na řemení, a teď sedí na bedničce s nohama visícíma dolů
a bere opratě. „Hý,“ povídá.
Kůň nic. Jenom se zachvěl.
Pošťák nasadil jakési tenké, hrdelní „rrr“. Kůň pohodil ocasem a pustil
hlasitý pšouk.
„Rrrrr.“
Pošta se rozjela. Prokop se křečovitě chytil nízkého zábradlíčka; cítil, že je
nad jeho síly udržet se na kozlíku.
„Rrrrr.“ Zdálo se, že ten vysoký hrčivý zpěv nějak galvanizuje starého koně.
Běžel kulhavě, pohazoval ocasem a při každém kroku pouštěl slyšitelné větry.
„Rrrrrrrr.“ Šlo to alejí holých stromů; byla černočerná tma, jen kmitavý
proužek světla z lucerny se smýkal po blátě. Prokop ztuhlými prsty svíral
zábradlíčko; cítil, že už vůbec nevládne svému tělu, že nesmí spadnout, že
bezmezně slábne. Nějaké osvětlené okno, alej, černá pole. „Rrrr.“ Kůň vytrvale
pšukal a klusal pleta nohama toporně a nepřirozeně, jako by byl už dávno
mrtev.
Prokop se úkosem podíval na svého spolucestujícího. Byl to děda s krkem
ovázaným šálou; pořád něco žvýkal, překusoval, žmoulal a zase vyplivoval. A tu
si Prokop vzpomněl, že tu podobu už viděl. Byla to ta ohavná tvář ze sna, jež
skřípala vyžranými zuby, až se drtily, a pak je po kouskách vyplivovala. Bylo
to divné a strašné.
„Rrrrr.“ Silnice se obrací, motá se do kopce a zase dolů. Nějaký statek, je
slyšet psa, člověk jde po silnici a povídá „dobrý večer“. Domků přibývá, jde
to do kopce. Pošta zatáčí, vysoké „rrrr“ náhle ustane a kůň se zastaví.
„Tak tady bydlí doktor Tomeš,“ povídá pošťák.
Prokop chtěl něco říci, ale nemohl; chtěl se pustit zábradlí, ale nešlo to,
protože mu prsty křečovitě ztuhly.
„No, už jsme tady,“ povídá pošťák znovu. Ponenáhlu křeče povolí a Prokop slézá
z kozlíku, chvěje se na celém těle. Jakoby popaměti otvírá vrátka a zvoní u
dveří. Uvnitř zuřivý štěkot, a mladý hlas volá: „Honzíku, ticho!“ Dveře se
otevrou, a stěží hýbaje jazykem ptá se Prokop: „Je pan doktor doma?“
Chvilku ticho; pak řekl mladý hlas: „Pojďte dál.“
Prokop stojí v teplé světnici; na stole je lampa a večeře, voní to bukovým
dřívím. Starý pán s brejličkami na čele vstává od svého talíře, jde k
Prokopovi a povídá: „Tak copak vám schází?“
Prokop se mračně upomínal, co tu vlastně chce. „Já… totiž…,“ začal, „je váš
syn doma?“
Starý pán se pozorně díval na Prokopa. „Není. Co vám je?“
„Jirka… Jiří,“ m ručel Prokop, „já jsem… jeho přítel a nesu mu… mám mu dát…“
Lovil v kapse zapečetěnou obálku. „Je to… důležitá věc a… a…“
„Jirka je v Praze,“ přerušil ho starý pán. „Člověče, sedněte si aspoň!“
Prokop se nesmírně podivil. „Vždyť říkal… říkal, že jede sem. Já mu musím
dát…“ Podlaha se pod ním zakymácela a počala se naklánět.
„Aničko, židli,“ křikl starý pán podivným hlasem.
Tu ještě zaslechl Prokop tlumený výkřik a poroučel se na zem. Zalila ho
nesmírná temnota, a pak již nebylo nic.


VII.

Nebylo nic; jen jako kdyby se časem protrhly mlhy, zjevil se vzorek malované
stěny, řezaná římsa skříně, cíp záclony či frýzek stropu; nebo se naklonila
nějaká tvář jakoby nad otvorem studně, ale nebylo vidět jejích rysů. Něco se
dělo, někdo časem svlažil horké rty nebo pozvedal bezvládné tělo, ale vše
mizelo v plynoucích útržcích snění. Byly to krajiny, kobercové vzory,
diferenciální počty, ohnivé koule, chemické formule; jen časem něco vyplulo
navrch a stalo se na okamžik jasnějším snem, aby se to vzápětí zas rozplynulo
v širokotokém bezvědomí.
Konečně přišla chvíle, kdy procitl; viděl nad sebou teplý a bezpečný strop se
štukovým frýzkem; našel očima své vlastní hubené, mrtvě bílé ruce na květované
přikrývce; za nimi objevil pelest postele, skříň a bílé dveře: vše nějak milé,
tiché a už známé. Neměl ponětí, kde je; chtěl o tom uvažovat, ale měl nemožně
slabou hlavu, vše se mu opět počalo mást, i zavřel oči a odpočíval v odevzdané
chabosti.
Dveře tichounce zavrzly. Prokop otevřel oči a posadil se na posteli, jako by
ho něco zvedlo. A ono u dveří stojí děvče, vytáhlé nějak a světlé, má
jasňoučké oči náramně udivené, ústa pootevřená překvapením a tiskne k prsoum
bílé pláténko. Nehýbe se rozpačitá, mrká dlouhými řasami a její růžový čumáček
se počíná nejistě, plaše usmívat.
Prokop se zachmuřil; usilovně hleděl něco říci, ale měl v hlavě docela
prázdno; hýbal nehlasně rty a pozoroval dívku jaksi přísnýma a vzpomínavýma
očima.
„Gúnúmai se, anassa,“ splynulo mu náhle a bezděčně se rtů, „theos ny tis é
brotos essi? Ei men tis theos essi, toi úranon euryn echúsin, Artemidi se egó
ge, Dios kúré megaloio, eidos te megethos te fyén t’anchista eďskó.“ A dále,
verš za veršem, řinulo se božské pozdravení, jímž Odysseus oslovil Nausikau.
„Proboha prosím tě, paní! Jsi božstvo či smrtelný člověk? Jestližes některá z
bohyň, co sídlí na nebi širém, s Artemidou bych já, jež velkého Dia je dcera,
krásou a vzrůstem těla i velkostí nejspíš tě srovnal. Jsi-li však některá z
lidí, co mají na zemi sídlo, třikrát blaženi jsou tvůj otec i velebná matka,
třikrát blaženi bratři, neb jistě jim nadmíru srdce pokaždé rozkoší blahou se
pro tebe rozhřívá v hrudi, kdykoli zří, jak takový květ jde do kola k tanci.“
Dívka bez hnutí, jako zkamenělá, naslouchala tomuto po. zdravu v neznámé řeči;
a na jejím hladkém čele bylo tolik zmatku, její oči tak dětsky a polekaně
mžikaly, že Prokop zdvojnásobil horlivost Odyssea na břeh vyvrženého, sám jer
nejasně chápaje smysl slov.
„Keinos ďau peri kéri makartatos,“ odříkával rychle. „Avšak nad jiné ten se
pocítí blaženým v srdci, který zvítězí dary a tebe si odvede domů, neboť dosud
nikdy jsem takého člověka nezřel ze všech mužů ni žen; já s úžasem na tebe
hledím.“
Sebas m’echei eisoroónta. Děvče se silně zardělo, jako by rozumělo pozdravu
řeckého hrdiny; neobratný a líbezný zmatek jí vázal údy, a Prokop, spínaje
ruce na pokrývce, mluvil, jako by se modlil.
„Déló dé pote,“ pokračoval spěšně, „jenom na Délu jednou, blíž oltáře jasného
Foiba, palmový mladý strůmek jsem viděl ze země růsti, – neboť i tam jsem
přišel a množství lidu šlo se mnou na cestě té, z níž trampoty zlé mi vzejíti
měly. Tam jsem právě tak stál, pln úžasu, když jsem jej viděl, dlouho, vždyť
takový kmen se nezrodil ze země dosud. Tak teď tobě se divím a žasnu a bojím
se hrozně dotknout se kolenou tvých, ač velký smutek mě tísní.“
Deidia ďainós: ano, bál se hrozně, ale i dívka se bála a tiskla k prsoum bílé
prádlo a neodvracela očí z Prokopa, jenž chvátal vypovědět svou trýzeň:
„Včera, až v dvacátý den, jsem ušel třpytnému moři, do doby té jsem vlnou byl
hnán a prudkými větry od výspy Ógygie, teď sem mě zas uvrhlo božstvo, abych tu
též snad zakusil strast, vždyť sotva se, tuším, skončí, a množství běd mi
bohové přisoudí ještě.“
Prokop těžce vzdychl a pozvedl úděsně vyhublé ruce. „Alla, anass‘, eleaire!
Avšak slituj se, paní, vždyť vytrpěv útrapy mnohé, nejdřív přišel jsem k tobě
– z těch druhých nikoho neznám lidí, co v krajině té a v městě své obydlí
mají. Do města cestu mi ukaž, dej roucho, bych tělo si zakryl, jestližes
vzala, sem jdouc, snad nějaký na prádlo obal.“
Nyní se dívčí tvář poněkud vyjasnila, vlahé rty se pootevřely; snad Nausikaá
promluví, ale Prokop chtěl jí ještě požehnati za ten obláček líbezného
soucitu, kterým růžovělo její líčko. „Soi de theoi tosa doien, hosa fresi sési
menoinás: bozi pak račte ti dát, čeho ve své mysli si žádáš, muže i dům, a
přidejtež vám i svorného ducha, vzácný to dar, – vždyť lepšího nic ni krasšího
není, než když smýšlením svorni svou domácnost společně vedou žena i muž, jak
odpůrcům v žal, tak na radost velkou všechněm příznivcům svým, a nejvíc to
pocítí sami.“ [* Překlad O. Vaňorného (1921)]
Poslední slova Prokop už skoro jen dýchal; sám stěží rozuměl tomu, co
odříkává, vytékalo to plynně a bez vůle z nějakého neznámého kouta paměti;
bylo tomu skoro dvacet let, co se jakžtakž probíral sladkou melodií šestého
zpěvu. Působilo mu až fyzickou úlevu nechávat to volně odtékat; dělalo se mu v
hlavě lehčeji a jasněji, bylo mu skoro blaženě v té plihé a libé slabosti, a
tu se mu zachvěl na rtech rozpačitý úsměv.
Dívka se usmála, pohnula sebou a řekla: „Nu tak?“ Udělala krůček blíž a dala
se do smíchu. „Co jste to povídal?“
„Já nevím,“ děl Prokop nejistě.
Tu se rozlétly nedovřené dveře a do pokoje vrazilo něco malého a chundelatého,
kviklo radostí a skočilo Prokopovi na postel.
„Honzíku,“ křikla dívka polekaně, „jdeš dolů!“ Ale psisko už olízlo Prokopovu
tvář a v náruživé radosti se zachumlávalo do přikrývek. Prokop si sáhl na
tvář, aby se otřel, a s úžasem pocítil pod rukou plnovous. „Co-copak,“ koktal
a umlkl údivem. Psisko bláznilo; kousalo s překypující něhou Prokopovy ruce,
pištělo, funělo, a tumáš! mokrou mordou se mu dostalo až na prsa.
„Honzíku,“ křičela dívka, „ty jsi blázen! Necháš pána!“ Přiběhla k posteli a
vzala psíka do náruče. „Bože, Honzíku, ty jsi hlupák!“
„Nechte ho,“ žádal Prokop.
„Vždyť máte bolavou ruku,“ namítalo děvče s velikou vážností, tisknouc k
prsoum zápasícího psa.
Prokop se podíval nechápavě na svou pravici. Od palce přes dlaň táhla se
široká jizva, pokrytá novou, tenoučkou, červenou kožkou příjemně svědící.
„Kde… kde to jsem?“ podivil se.
„U nás,“ řekla s náramnou samozřejmostí, jež Prokopa ihned uspokojila. „U
vás,“ opakoval s úlevou, ač neměl ponětí, kde to je. „A jak dlouho?“
„Dvacátý den. A pořád –,“ chtěla něco říci, ale spolkla to. „Honzík spával s
vámi,“ dodala spěšně a zarděla se neznámo proč, chovajíc psa jako malé dítě.
„Víte o tom?“
„Nevím,“ vzpomínal Prokop. „Copak jsem spal?“
„Pořád,“ vyhrkla. „Už jste se mohl vyspat.“ Tu postavila psa na zem a
přiblížila se k posteli. „Je vám líp?… Chtěl byste něco?“
Prokop zakroutil hlavou; nevěděl o ničem, co by chtěl. „Kolik je hodin?“ ptal
se nejistě.
„Deset. Já nevím, co smíte jíst; až přijde tati… Tati bude tak rád… Chtěl
byste něco?“
„Zrcadlo,“ řekl Prokop váhavě.
Dívka se zasmála a vyběhla. Prokopovi hučelo v hlavě; pořád se hleděl
rozpomenout a pořád mu vše unikalo. A už je tu děvče, něco povídá a podává mu
zrcátko. Prokop chce zvednout ruku, ale bůhsámví proč to nejde; děvče mu
vkládá držadlo mezi prsty, ale zrcátko padá na pokrývku. Tu zbledlo děvče,
nějak se znepokojilo a samo mu nastavilo zrcadlo k očím. Prokop se dívá, vidí
docela zarostlé tváře a obličej skoro neznámý; hledí a nemůže pochopit, a tu
se mu roztřásly rty.
„Lehněte si, hned si zas lehněte,“ káže mu drobounký hlásek skoro plačící, a
rychlé ruce mu nastavují podušku. Prokop se sváží naznak a zavírá oči; jen
chvilinku si zdřímnu, myslí si, a udělalo se libé, hluboké ticho.


VIII.

Někdo ho zatahal za rukáv. „Nu, nu,“ povídá ten někdo, „už bychom nemuseli
spát, co?“ Prokop otevřel oči a viděl starého pána, má růžovou pleš a bílou
bradu, zlaté brejličky na čele a náramně čilý koukej. „Už nespěte, velectěný,“
povídá, „už toho je dost; nebo se probudíte na onom světě.“
Prokop si chmurně prohlížel starého pána; chtělo se mu totiž dřímat. „Co
chcete?“ ozval se vzdorovitě. „A… s kým mám tu čest?“
Starý pán se dal do smíchu. „Prosím, doktor Tomeš. Vy jste mne neráčil dosud
vzít na vědomí, co? Ale nic si z toho nedělejte. Tak co, jak se máme?“
„Prokop,“ ozval se nemocný nevlídně.
„Tak, tak,“ povídal doktor spokojeně. „A já jsem si myslel, že jste Šípková
Růženka. A teď, pane inženýre,“ řekl čile, „se na vás musíme podívat. No,
neškareďte se.“ Vyeskamotoval mu z podpaží teploměr a libě zachrochtal.
„Třicet pět osm. Človíčku, vy jste jako moucha. Musíme vás nakrmit, co?
Nehýbejte se.“
Prokop cítil na prsou hladkou pleš a studené ucho, jak mu jezdí od ramene k
rameni, od břicha k hrdlu za povzbuzujícího broukání.
„No, sláva,“ řekl konečně doktor a nasadil si brejle na oči. „Napravo vám to
drobátko rachotí, a srdce – no, to se urovná, že?“ Naklonil se k Prokopovi,
drbal ho prsty ve vlasech a přitom mu palcem zvedal a zase zatlačoval oční
víčka. „Nespat už, víme?“ mluvil a přitom mu něco zkoumal na zorničkách.
„Dostaneme knížky a budeme číst. Sníme něco, vypijeme skleničku vína a –
nehýbejte se! Já vás neukousnu.“
„Co mně je?“ ptal se Prokop nesměle.
Doktor se vztyčil. „No, nic už. Poslechněte, kde jste se tady vzal?“
„Kde tady?“
„Tady, v Týnici. Sebrali jsme vás na podlaze a… Odkud jste, člověče, přišel?“
„Já nevím. Z Prahy, ne?“ vzpomínal Prokop.
Doktor potřásl hlavou. „Vlakem z Prahy! Se zápalem mozkových blan! Měl jste
rozum? Víte, co to vůbec je?“
„Co?“
„Meningitis. Spací forma. A k tomu zápal plic. Čtyřicet celých, he? Kamaráde,
s něčím takovým se nejezdí na výlety. A víte, že – nu, ukažte honem pravou
ruku!“
„To… to bylo jen škrábnutí,“ hájil se Prokop.
„Pěkné škrábnutí. Otrava krve, rozumíte? Až budete zdráv, řeknu vám, že jste
byl… že jste byl osel. Odpusťte,“ řekl s důstojným rozhořčením, „málem bych
byl řekl něco horšího. Vzdělaný člověk, a neví, že toho má v sobě na trojí
exitus! Jak jste se vůbec mohl držet na nohou?“
„Já nevím,“ šeptal Prokop zahanbeně.
Doktor chtěl hubovat dál, ale zavrčel jen a mávl rukou. „A jak se cítíte?“
začal přísně. „Trochu pitomý, ne? Žádná paměť, co? A tady, tady nějak,“ ťukal
si na čelo, „nějaký slabý, že?“
Prokop mlčel.
„Tak tedy, pane inženýre,“ spustil doktor. „Z toho si nic nedělat. Nějaký
čásek to potrvá, co? Rozumíte mi? Nesmíte si namáhat hlavu. Nemyslet. To se
vrátí… po kouskách. Jen přechodná porucha, slabá amence, rozumíte mi? To
přejde samo od sebe, co? Rozumíte mi?“
Doktor křičel, potil se a rozčiloval se, jako by se hádal s hluchoněmým.
Prokop se na něj pozorně díval, a ozval se klidně: „Já tedy zůstanu
slabomyslný?“
„Ale ne, ne,“ rozčiloval se doktor. „Naprosto vyloučeno. Ale prostě… po
nějakou dobu… porucha paměti, roztržitost, únava a takové ty příznaky,
rozumíte mi? Poruchy v koordinaci, chápete? Odpočívat. Klid. Nic nedělat.
Velectěný, děkujte pánubohu, že jste to vůbec přečkal.“
„Přečkal,“ ozval se po chvíli a radostně zatroubil do kapesníku. „Poslechněte,
takový případ jsem ještě neměl. Vy jste sem přišel pěkně v deliriu, praštil
jste sebou na zem, a finis, poroučím se vám. Co jsem měl s vámi dělat? Do
nemocnice je daleko, a holka nad vámi tento, brečela… a vůbec, přišel jste
jako host k… Jirkovi, k synovi, no ne? Tak jsme si vás tu nechali, rozumíte
mi? Nu, nám to nevadí. Ale takového zábavného hosta jsem ještě neviděl. Dvacet
dní prospat, pěkně děkuju! Když vám kolega primář řezal ruku, ani jste se
neráčil probudit, co? Tichý pacient, namouduši. No, to už je jedno. Jen když
jste z toho venku, člověče.“ Doktor se plácl hlučně do stehna. „U čerta,
nespěte už! Pane, hej, pane, mohl byste usnout nadobro, slyšíte? U všech
všudy, hleďte se trochu přemáhat! Nechte toho, slyšíte?“
Prokop chabě kývl; cítil, že se nějaké závoje přetahují mezi ním a
skutečností, že se vše obestírá, kalí a tichne.
„Andulo,“ slyšel zdáli rozčilený hlas, „víno! dones víno!“ Nějaké rychlé
kroky, hovor jakoby pod vodou, a chladivá chuť vína mu stékala do hrdla.
Otevřel oči a viděl nad sebou skloněné děvče. „Nesmíte spát,“ povídá děvče
rozechvěně, a její předlouhé řasy mžikají, jako když srdce tluče.
„Já už nebudu,“ omlouvá se Prokop pokorně.
„To bych si vyprosil, velectěný,“ lomozil doktor u pelestě. „Přijede sem z
města primář extra na konzultaci; ať vidí, že my felčaři venku taky něco
umíme, no ne? Musíte se pěkně držet.“ S neobyčejnou obratností zvedl Prokopa a
shrnul mu za záda polštáře. „Tak, teď bude pán sedět; a spaní si nechá až po
obědě, že? Já musím do ordinace. A ty, Ando, si tady sedni a něco žvaň; jindy
ti huba jede jako trakař, co? A kdyby chtěl spát, zavolej mne; já už si to s
ním vyřídím.“ Ve dveřích se obrátil a zavrčel: „Ale… mám radost, rozumíte? Co?
Tak pozor!“
Prokopovy oči se svezly na dívku. Seděla opodál, ruce v klíně, a při bohu
nevěděla, o čem mluvit. Tak, teď zvedla hlavu a pootevřela ústa; slyšme, co z
ní vyletí; ale zatím se jenom zastyděla, spolkla to a sklopila hlavu ještě
níž; je vidět jen dlouhé řasy, jak se chvějí nad líčkem.
„Tati je tak prudký,“ ozvala se konečně. „On je tak zvyklý křičet… vadit se… s
pacienty…“ Látka jí bohužel došla; zato – jako na zavolanou – ocitla se jí v
prstech zástěra a nechala se dlouho a všelijak zajímavě skládat, za pozorného
mžikání ohnutých řas.
„Co to řinčí?“ optal se Prokop po delší době.
Obrátila hlavu k oknu; má pěkné světlé vlasy, jež jí ozařují čelo, a šťavnaté
světélko na vlhké puse. „To jsou krávy,“ povídá s úlevou. „Tam je panský dvůr,
víte? Tenhle dům taky patří k panství. Tati má koně a kočárek… Jmenuje se
Fricek.“
„Kdo?“
„Ten kůň. Vy jste nebyl nikdy v Týnici, že? Tady nic není. Jen aleje a pole…
Dokud byla živa maminka, tak tu bylo veseleji; to sem jezdil náš Jirka… Už tu
nebyl přes rok; pohádal se s tatim a… ani nepíše. Ani se o něm u nás nesmí
mluvit – Vídáte ho často?“
Prokop rozhodně zavrtěl hlavou.
Děvče vzdychlo a zamyslilo se. „On je… já nevím. Takový divný. Jen tu chodil s
rukama v kapsách a zíval… Já vím, že tu nic není; ale přec… Tati je taky rád,
že jste zůstal u nás,“ zakončila rychle a trochu nesouvisle.
Někde venku se chraptivě a směšně rozkřikl mladý kohoutek. Najednou se tam
dole strhlo jakési slepičí rozčilení, bylo slyšet divoké „ko-ko-ko-“ a vítězně
kvikající štěkot psiska. Děvče vyskočilo. „Honzík honí slepice!“ Ale hned si
zase sedla, odhodlána ponechat slípky jejich osudu. Bylo příjemné a jasné
ticho.
„Já nevím, o čem povídat,“ řekla po chvíli s nejkrásnější prostotou. „Já vám
přečtu noviny, chcete?“
Prokop se usmál. A už tu byla s novinami a pustila se odvážně do úvodníku.
Finanční rovnováha, státní rozpočet, nekrytý úvěr… Líbezný a nejistý hlásek
odříkával klidně ty nesmírně vážné věci, a Prokopovi, jenž naprosto
neposlouchal, bylo lépe, než kdyby hluboce spal.


IX.

Nyní už smí Prokop na nějakou hodinku denně vylézt z postele; dosud táhne nohy
všelijak a bohužel není s ním mnoho řeči; říkejte si mu co chcete, většinou
odpoví nějak skoupě a přitom se omlouvá plachým úsměvem.
Dejme tomu v poledne – je teprve začátek dubna – sedává v zahrádce na lavičce;
vedle něho ježatý teriér Honzík se směje na celé kolo pod svými mokrými
fořtovskými vousy, neboť je zřejmě pyšný na svou funkci společníka, a samou
radostí se oblízne a mhouří oči, když ho zjizvená Prokopova levička pohladí po
teplé huňaté hlavě. V tu hodinu obyčejně doktor vyběhne z ordinace, čepička mu
sem tam jezdí po hladké pleši, sedne na bobek a sází zeleninu; tlustými
krátkými prsty rozmílá hrudky prsti a pozorně vystýlá lůžko mladých klíčků. Co
chvíli se začne rozčilovat a bručí; zapíchl někde do záhonku svou lulku a
nemůže ji najít. Tu se Prokop zvedne a s divinací detektiva (neboť čte v
posteli detektivky) zamíří rovnou k ztracené faječce. Čehož Honzík užije k
tomu, aby se hlučně otřepal.
V tu hodinu chodívá Anči (neboť tak a nikoliv Andula si přeje být jmenována)
zalévat tatínkovy záhony. V pravé ruce nese konev, levá plave ve vzduchu;
stříbrná prška šumí do mladé hlíny, a naskytne-li se nablízku Honzík, dostane
ji na zadek nebo na pitomou veselou hlavu; tu zoufale kvikne a hledá ochranu u
Prokopa.
Celé ráno se trousí do ordinace pacienti. Chrchlají v čekárně a mlčí, každý
mysle jen na své utrpení. Někdy se ozve z ordinace strašný křik, když doktor
tahá zub nějakému kloučeti. Tu se zase Anči v panice zachrání k Prokopovi,
bledá a zrovna bez sebe, úzkostně mžiká krásnými řasami a čeká, až strašná
událost přejde. Konečně kluk ubíhá ven s táhlým vytím, a Anči nějak nešikovně
zamlouvá svou útlocitnou zbabělost.
Ovšem něco jiného je, když před doktorovým domem zastaví vůz vystlaný slámou a
dva strejci opatrně vynášejí po schodech těžce raněného člověka. Má rozdrcenou
ruku nebo zlomenou nohu nebo hlavu roztříštěnou kopytem; studený pot se mu
řine po hrozně bledém čele, a tiše, s hrdinným sebepřemáháním sténá. Na celý
dům lehne tragické ticho; v ordinaci se bez hluku odehrává něco těžkého,
tlustá veselá služka chodí po špičkách, Anči má oči plné slz a prsty se jí
třesou. Doktor vrazí do kuchyně, s křikem žádá rum, víno nebo vodu, a
dvojnásobnou hrubostí zakrývá mučivý soucit. A ještě celý den potom nemluví a
vzteká se a bouchá dveřmi.
Ale je také veliký svátek, slavný výroční trh venkovské doktořiny: očkování
dětí. Sta maminek houpá své bečící, řvoucí, spící uzlíčky, je toho plná
ordinace, chodba, kuchyně i zahrádka; Anči je jako blázen, chtěla by chovat,
houpat a převíjet všechny ty bezzubé, uřvané, ochmýřené děti v nadšeném
záchvatu kybelického mateřství. I starému doktorovi se nějak okázaleji svítí
pleš, od rána chodí bez brejlí, aby nepolekal ty haranty, a oči mu plavou
únavou a radostí.
Jindy uprostřed noci rozčileně zařinčí zvonek. Pak bručí ve dveřích nějaké
hlasy, doktor hubuje a kočí Jozef musí zapřahat. Někde ve vsi za svítícím
okénkem přichází na svět nový člověk. Až ráno se doktor vrací, unavený, ale
spokojený, a na deset kroků smrdí karbolem; ale takhle ho má Anči nejraději.
Pak jsou tu ještě jiné osobnosti: tlustá řehtavá Nanda v kuchyni, která po
celý den zpívá a řinčí a ohýbá se smíchem. Dále vážný kočí Jozef s visutými
kníry, historik; čte pořád dějepisné knížky a rád vykládá dejme tomu o
husitských válkách nebo o historických tajemnostech kraje. Dále panský
zahradník, náramný holkář, který denně zaskočí do doktorovy zahrady, očkuje mu
růže, stříhá keře a uvádí Nandu do nebezpečných záchvatů smíchu. Dále zmíněný
chlupatý a rozjařený Honzík, jenž provází Prokopa, honí blechy a slepice a
zmíry rád jezdí na kozlíku doktorova kočárku. Fric, to je starý rap trochu
šedivějící, přítel králíků, rozšafný a dobrosrdečný kůň; pohladit jeho teplé a
citlivé nozdry, to je prostě vrchol příjemnosti. Dále brunátný adjunkt ze
dvora, zamilovaný do Anči, která si z něho ve spojení s Nandou ukrutně střílí.
Ředitel ze dvora, starý lišák a zloděj, jenž chodí s doktorem hrát v šachy;
doktor se rozčiluje, zuří a prohrává. A jiné místní osobnosti, mezi nimiž
neobyčejně nudný a politicky interesovaný civilní geometr otravuje Prokopa
právem kolegiality.
Prokop mnoho čte nebo se tváří, jako by četl. Jeho zjizvená, těžká tvář mnoho
nepovídá, zejména ne o zoufalém a tajném zápasu s porouchanou pamětí. Zvláště
poslední pracovní léta mnoho utrpěla; nejjednodušší vzorce a procesy jsou ty
tam, a na okraji knížek si píše Prokop kusé formule, které se mu vynořují v
hlavě, když na ně nejméně myslí. Pak se sebere a jde hrát s Anči kulečník;
neboť je to hra, při které se mnoho nemluví. I na Anči padá jeho kožená a
neproniknutelná vážnost; hraje soustředěně, míří s přísně staženým obočím, ale
když koule zamíří naschvál jinam, otevře údivem ústa a mokrým jazejčkem jí
ukazuje správnou cestu.
Večery u lampy. Nejvíc toho napovídá doktor, nadšený přírodovědec bez
jakýchkoliv znalostí. Zejména jej okouzlují poslední záhady světa:
radioaktivita, nekonečnost prostoru, elektřina, relativita, původ hmoty a
stáří lidstva. Je zapřisáhlý materialista, a právě proto cítí tajemnou a
sladkou hrůzu neřešitelných věcí. Někdy se Prokop nezdrží a opravuje
büchnerovskou naivitu jeho názorů. Tu starý pán naslouchá přímo pobožně a
počíná si Prokopa nesmírně vážit, zejména tam, kde mu přestává rozumět,
řekněme takhle o rezonančním potenciálu nebo teorii kvant. Anči, ta prostě
sedí opírajíc se bradou o stůl; je sice na tuto pozici už trochu veliká, ale
patrně od maminčiny smrti zapomněla dospívat. Ani nemrká a dívá se velkýma
očima z táty na Prokopa a vice versa.
A noci, noci jsou pokojné a širé jako všude venku. Chvílemi zařinčí z kravína
řetězy, chvílemi se blízko nebo daleko rozštěkají psi; po nebi se mihne
padající hvězda, jarní déšť zašumí v zahradě nebo stříbrným zvukem odkapává
osamělá studna. Čirý, hlubinný chlad vane otevřeným oknem, a člověk usíná
požehnaným spánkem bez vidin.


X.

Nuže, bylo lépe; den za dnem se Prokopovi vracel život drobnými krůčky. Cítil
jen malátnost hlavy, bylo mu stále trochu jako ve snách. Nezbývalo než
poděkovat doktorovi a jeti po svém. Chtěl to ohlásit jednou po večeři, ale
zrovna všichni mlčeli jako zařezaní. A pak vzal starý doktor Prokopa pod paží
a dovedl si ho do ordinace; po nějakém okolkování vyhrkl s rozpačitou
hrubostí, že jako Prokop nemusí odjíždět, ať raději odpočívá, že nemá ještě
vyhráno, a vůbec ať si tu zůstane a dost. Prokop se matně bránil; faktum ovšem
bylo, že se ještě necítil v sedle a že se poněkud rozmazlil. Zkrátka o odjezdu
nebylo zatím řeči.
Vždy odpoledne se doktor zavíral v ordinaci. „Přijďte si někdy ke mně sednout,
co?“ řekl Prokopovi mimochodem. Tak tedy ho Prokop zastihl u všelijakých
lahviček a kelímků a prášků. „Víte, tady v místě není hapatyka,“ vysvětloval
doktor, „já musím sám dělat léky.“ A třesoucími se tlustými prsty dozoval
nějaký prášek na ručních vážkách. Měl nejistou ruku, váhy se mu houpaly a
točily; starý pán se rozčiloval, funěl a potil se na nose drobnými krůpějkami.
„Když na to pořádně nevidím,“ zamlouval stáří svých prstů. Prokop se chvíli
díval, pak neřekl nic a vzal mu vážky z ruky. Klep, klep, a prášek byl na
miligram odvážen. A druhý, třetí prášek. Citlivé vážky jen tančily v
Prokopových prstech. „Ale koukejme, koukejme,“ divil se doktor a s úžasem
sledoval Prokopovy ruce, rozbité, uzlovité, s netvornými klouby, ulámanými
nehty a krátkými pahýly místo několika prstů. „Človíčku, vy máte šikovnost v
těch rukou!“ Za chvíli už Prokop roztíral nějakou masť, odměřoval kapky a
nahříval zkumavky. Doktor zářil a nalepoval viněty. Za půl hodiny byl hotov s
celou lékárnou, a ještě tu byla hromada prášků do zásoby. A po několika dnech
Prokop už zběžně četl doktorovy recepty a bez řečí mu dělal magistra. Bon.
Kdysi kvečeru se dloubal doktor na zahradě v kyprém záhonku. Najednou strašná
rána v domě, a hned nato se s řinkotem sypalo sklo. Doktor se vrhl do domu a
na chodbě se srazil s uděšenou Anči. „Co se stalo?“ volal. „Já nevím,“
vypravilo ze sebe děvče. „To v ordinaci…“ Doktor běžel do ordinace a viděl
Prokopa, jak na všech čtyřech sbírá na podlaze střepy a papíry.
„Co jste tu dělal?“ rozkřikl se doktor.
„Nic,“ řekl Prokop a provinile vstával. „Praskla mně zkumavka.“
„Ale co u všech všudy,“ hromoval doktor a zarazil se: z Prokopovy levice
čurkem stékala krev. „Copak vám to utrhlo prst?“
„Jen škrábnutí,“ protestoval Prokop a schovával levičku za zády.
„Ukažte,“ křikl starý doktor a táhl Prokopa k oknu. Půl prstu viselo jen na
kůži. Doktor se hnal ke skříni pro nůžky, a v otevřených dveřích zahlédl Anči
na smrt bledou. „Co tu chceš?“ spustil. „Marš odtud!“ Anči se nehnula; tiskla
ruce k prsoum a vypadala co nejslibněji na omdlení.
Doktor se vrátil k Prokopovi; nejdřív dělal něco s vatičkou a pak cvakly
nůžky. „Světlo,“ křikl na Anči. Anči se vrhla k vypínači a rozsvítila. „A
nestůj tady,“ hřmotil starý pán a koupal jehlu v benzínu. „Co tu máš co dělat?
Podej sem nitě!“ Anči skočila ke skříni a podala mu ampulku s nitěmi. „A teď
jdi!“
Anči se podívala na Prokopova záda a udělala něco jiného; přistoupila blíž,
chopila oběma dlaněma tu poraněnou ruku a podržela ji. Doktor si zrovna myl
ruce; obrátil se k Anči a chtěl vybuchnout; místo toho zabručel: „Tak, teď drž
pevně! A víc u světla!“
Anči zamhouřila oči a držela. Když nebylo slyšet nic než doktorovo supění,
odvážila se zvednout oči. Dole, kde pracoval otec, to bylo krvavé a ošklivé.
Pohlédla honem na Prokopa; měl odvrácenou tvář, a jeho víčkem cukala bolest.
Anči trnula a polykala slzy a dělalo se jí nanic.
Zatím Prokopova ruka narůstala: spousta vaty, Billrothův batist a snad
kilometr fáče pořád navíjeného; konečně z toho bylo něco ohromného bílého.
Anči držela, kolena se jí třásla, zdálo se jí, že ta strašná operace nikdy
nebude u konce. Najednou se jí zatočila hlava, a pak slyšela, jak otec povídá:
„Na, vypij to honem!“ Otevřela oči a shledala, že sedí v ordinační sesli, že
tati jí podává skleničku s něčím, za ním že stojí Prokop, usmívá se a chová na
prsou zavázanou ruku vypadající jako obrovské poupě. „Tak to vypij,“ naléhal
doktor a jen cenil zuby. Spolkla to tedy a rozkuckala se; byl to vražedný
koňak.
„A teď vy,“ řekl doktor a podal skleničku Prokopovi. Prokop byl trochu bledý a
statečně čekal, že dostane vynadáno. Nakonec se napil doktor, odchrchlal a
spustil: „Tak co jste tu vlastně prováděl?“
„Pokus,“ řekl Prokop s křivým úsměvem provinilce.
„Co? Jaký pokus? S čím pokus?“
„Jen tak. Jen – jen – jde-li něco udělat z chloridu draselnatého.“
„Co udělat?“
„Třaskavina,“ šeptal Prokop v pokoře hříšníka.
Doktor se svezl očima na jeho ofáčovanou ruku. „A to se vám vyplatilo,
člověče! Ruku vám to mohlo utrhnout, co? Bolí? Ale dobře na vás, patří vám
to,“ prohlašoval krvelačně.
„Ale tati,“ ozvala se Anči, „nech ho teď!“
„A co ty tu máš co dělat,“ zavrčel doktor a pohladil ji rukou páchnoucí
karbolem a jodoformem.
Nyní doktor nosil klíč od ordinace v kapse. Prokop si objednal balík učených
svazků, chodil s rukou na pásku a studoval po celé dny. Už kvetou třešně,
lepkavé mladé listí se třpytí ve slunci, zlaté lilie rozvírají těžká poupata.
Po zahrádce chodí Anči s obtloustlou kamarádkou, obě se drží kolem pasu a
smějí se; teď sestrčily k sobě růžové čumáčky, něco si šeptají, zrudnou ve
smíchu a začnou se líbat.
Po létech zase cítí Prokop tělesné blaho. Živočišně se oddává slunci a mhouří
oči, aby naslouchal šumění svého těla. Vzdychne a sedá k práci; ale chce se mu
běhat, toulá se daleko po kraji a věnuje se náruživé radosti dýchat. Někdy
potká Anči v domě či v zahradě a pokouší se něco povídat; Anči se na něj dívá
po očku a neví co mluvit; ale ani Prokop to neví, a proto upadá do bručivého
tónu. Zkrátka je mu lépe nebo se aspoň cítí jistější, je-li sám.
Při studiu pozoroval, že mnoho zanedbal; věda byla už v mnohém dále a jinde,
leckdy se musel nově orientovat; a hlavně se bál vzpomínat na svou vlastní
práci, neboť tam, to cítil, se mu nejvíc potrhala souvislost. Pracoval jako
mezek nebo snil; snil o nových laboratorních metodách, ale zároveň ho lákal
jemný a odvážný kalkul teoretika; a vztekal se sám na sebe, když jeho hrubý
mozek nebyl s to rozštípnout teninký vlas problému. Byl si vědom, že jeho
laboratorní „destruktivní chemie“ otvírá nejpodivnější průhledy do teorie
hmoty; narážel na nečekané souvislosti, ale hned zas je rozšlapal svým příliš
těžkým uvažováním. Rozmrzen praštil vším, aby se ponořil do nějakého hloupého
románu; ale i tam ho pronásledovala laboratorní posedlost: místo slov četl
samé chemické symboly; byly to bláznivé vzorce plné prvků dosud neznámých, jež
ho znepokojovaly i ve snách.


XI.

Té noci se mu zdálo, že studuje veleučený článek v The Chemist. Zarazil se u
vzorce AnCi a nevěděl si s ním rady; hloubal, kousal se do kloubů a najednou
pochopil, že to znamená Anči. A vida, ona je vlastně tady a posmívá se mu s
pažema založenýma za hlavou; přistoupil k ní, chytil ji oběma rukama a začal
ji líbat a kousat do úst. Anči se divoce brání koleny a lokty; drží ji
brutálně a jednou rukou z ní trhá šaty v dlouhých pásech. Už cítí dlaněmi její
mladé maso; Anči sebou zběsile zmítá, vlasy padly jí přes tvář, teď, teď náhle
ochabuje a klesá; Prokop se vrhá k ní, ale nalézá pod rukama jen samé dlouhé
hadříky a fáče; trhá je, rve je, chce se z nich vyprostit, a probouzí se.
Hanbil se nesmírně za svůj sen; i ustrojil se potichu, sedl u okna a čekal na
svítání. Není hranice mezi nocí a dnem; jen nebe maličko pobledne, a vzduchem
proletí signál, jenž není ani světlo ani zvuk, ale poroučí přírodě: vzbuď se!
Tu tedy nastalo ráno ještě prostřed noci. Rozkřičeli se kohouti, zvířata v
stájích se pohnula. Nebe bledne do perleťova, rozzařuje se a lehce růžoví;
první červený pruh vyskočil na východě, „štilip štilip játiti piju piju já,“
štěkají a křičí ptáci, a první člověk jde volným krokem za svým povoláním.
Také učený člověk sedl k dílu. Dlouho kousal násadku, než se odhodlal napsat
první slova; neboť toto bude veliká věc, úhrn experimentování a přemýšlení
dvanácti let, práce opravdu vykoupená krví. Ovšem, to zde bude jen náčrt, či
spíš jistá fyzikální filozofie nebo báseň nebo vyznání víry. Bude to obraz
světa sklenutý z čísel a rovnic; avšak tyto cifry astronomického řádu měří
něco jiného než vznešenost oblohy: kalkulují vratkost a destrukci hmoty. Vše,
co jest, je tupá a vyčkávající třaskavina; ale jakékoliv budiž číslo její
netečnosti, je jenom mizivým zlomkem její brizance. Vše, co se děje, oběhy
hvězd a telurická práce, veškerá entropie, sám pilný a nenasytný život, to vše
jen na povrchu, nepatrně a neměřitelně ohlodává a váže tuto výbušnou sílu, jež
se jmenuje hmota. Vězte tedy, že pouto, jež ji váže, je jenom pavučina na
údech spícího titána; dejte mi sílu, aby jej pobodl, i setřese kůru země a
vrhne Jupitera na Saturna. A ty, lidstvo, jsi jenom vlaštovka, která si pracně
ulepila hnízdo pod krovem kosmické prachárny; cvrlikáš za slunce východu,
zatímco v sudech pod tebou mlčky duní strašlivý potenciál výbuchu…
Ty věci Prokop ovšem nepsal; byly mu jenom ztajenou melodií, jež okřídlovala
těžkopádné věty odborného výkladu. Pro něho bylo více fantazie v holém vzorci
a víc oslnivé krásy v číselném výrazu. A tak psal svou báseň ve značkách,
číslicích a děsné hantýrce učených slov.
K snídani nepřišel. Přišla tedy Anči a nesla mu mlíčko. Děkoval a přitom si
vzpomněl na svůj sen, a jaksi to nesvedl podívat se na ni. Koukal tvrdošíjně
do kouta; bůhví jak je to možno, že přesto viděl každý zlatý vlásek na jejích
holých pažích; nikdy si toho tak nevšiml.
Anči stála blizoučko. „Budete psát?“ ptala se neurčitě.
„Budu,“ bručel a myslel, co by tomu řekla, kdyby jí zničehonic položil hlavu
na prsa.
„Po celý den?“
„Po celý den.“ Asi by ucouvla náramně dotčena; ale má pevná, malá a široká
ňadra, o kterých snad ani neví. Ostatně, co s tím!
„Chtěl byste něco?“
„Ne, nic.“ Je to hloupé; chtěl by ji hryzat do paží či co; ženská nikdy neví,
jak člověka vyrušuje.
Anči pokrčila rameny trochu uraženě. „Taky dobře.“ A byla pryč.
Vstal a přecházel po pokoji; zlobil se na sebe i na ni, a hlavně se mu už
nechtělo psát. Sbíral myšlenky, ale naprosto se mu to nedařilo. Rozmrzel se a
otráven chodil od stěny ke stěně s pravidelností kyvadla. Hodinu, dvě hodiny.
Dole řinčí talíře, prostírá se k obědu. Sedl znovu k svým papírům a položil
hlavu do dlaní. Za chvíli tu byla služka a přinesla mu oběd.
Vrátil jídlo skoro netknuté a vrhl se rozmrzen na postel. Je zřejmo, že už ho
mají dost, že i on má toho všeho až po krk a že je načase odejet. Ano, hned
zítra. Dělal si nějaké plány pro příští práci, bylo mu neznámo proč stydno a
trapno a konečně z toho všeho usnul jako zabitý. Probudil se pozdě odpoledne s
duší zbahnělou a tělem zamořeným shnilou leností. Coural po pokoji, zíval a
bezmyšlenkovitě se mrzel. Setmělo se, a ani nerozsvítil.
Služka mu přinesla večeři. Nechal ji vystydnout a poslouchal, co se děje dole.
Vidličky cinkaly, doktor bručel a náramně brzo po večeři práskl dveřmi u svého
pokoje. Bylo ticho.
Jist, že už nikoho nepotká, sebral se Prokop a šel do zahrady. Byla vlažná a
jasná noc. Už kvetou šeříky a pustoryl, Bootes široce rozpíná na nebi svou
hvězdnou náruč, je ticho prohloubené dalekým psím štěkáním. O kamennou zídku v
zahradě se opírá něco světlého. Je to ovšem Anči.
„Je krásně, že?“ dostal ze sebe, aby vůbec něco řekl, a opřel se o zídku vedle
ní. Anči nic, jenom odvrací tvář a její ramena sebou nezvykle a neklidně
trhají.
„To je Bootes,“ bručel Prokop sdílně. „A nad ním… je Drak, a Cepheus, a tamto
je Kassiopeja, ty čtyři hvězdičky pohromadě. Ale to se musíte dívat výš.“
Anči se odvrací a něco roztírá kolem očí. „Tamta jasná,“ povídá Prokop váhavě,
„je Pollux, beta Geminorum. Nesmíte se na mne zlobit. Snad jsem se vám zdál
hrubý, že? Já jsem… něco mne trápilo, víte? Nesmíte na to dát.“
Anči zhluboka vzdychla. „A která je… tamta?“ ozvala se tichým, kolísavým
hláskem. „Ta nejjasnější dole.“
„To je Sírius, ve Velkém psu. Taky Alhabor mu říkají. A tamhle docela vlevo
Arcturus a Spica. Teď padala hvězda. Viděla jste?“
„Viděla. Proč jste se ráno na mne tak zlobil?“
„Nezlobil. Jsem snad… někdy… trochu hranatý; ale já jsem byl tvrdě živ, víte,
příliš tvrdě; pořád sám a… jako první hlídka. Nedovedu ani pořádně mluvit.
Chtěl jsem dnes… dnes napsat něco krásného… takovou vědeckou modlitbu, aby
tomu každý rozuměl; myslil jsem, že… že vám to přečtu; a vidíte, všechno ve
mně vyschlo, člověk už se stydí… rozehřát se, jako by to byla slabost. Nebo
vůbec něco říci ze sebe. Takový okoralý, víte? Už hodně šedivím.“
„Vždyť vám to sluší,“ vydechla Anči.
Prokopa překvapila tato stránka věci. „Nu víte,“ řekl zmateně, „příjemné to
není. Už by byl čas… už by byl čas svážet svou úrodu domů. Co by jiný udělal z
toho, co já vím! A já nemám nic, nic, nic z toho všeho. Jsem jenom… ,berühmt‘
a ,célčbre‘ a ,highly esteemed‘; ani o tom… u nás… nikdo neví. Já myslím,
víte, že mé teorie jsou dost špatné; já nemám hlavu na teoretika. Ale co jsem
našel, není bez ceny. Mé exotermické třaskaviny… diagramy… a exploze atomů… to
má nějakou cenu. A publikoval jsem sotva desetinu toho, co vím. Co by z toho
jiný udělal! Já už… ani nerozumím jejich teoriím; jsou tak subtilní, tak
duchaplné… a mne to jen mate. Jsem kuchyňský duch. Dejte mně k nosu nějakou
látku, a já zrovna čichám, co se s ní dá dělat. Ale pochopit, co z toho plyne…
teoreticky a filozoficky…, to neumím. Já znám… jen fakta; já je dělám; jsou to
má fakta, rozumíte? A přece… já… já za nimi cítím nějakou pravdu; ohromnou
obecnou pravdu… která všechno převrátí… až vybuchne. Ale ta velká pravda… je
za fakty a ne za slovy. A proto, proto musíš za fakty! až ti to třeba obě ruce
utrhne…“
Anči, opřena o zídku, sotva dýchala. Nikdy dosud se ten zamračený patron tolik
nerozmluvil – a hlavně nikdy nemluvil o sobě. Zápasil těžce se slovem; zmítala
jím ohromná pýcha, ale také plachost a zmučenost; a kdyby mluvil třeba v
integrálách, chápala Anči, že se před ní děje něco naprosto niterného a lidsky
zjitřeného.
„Ale to nejhorší, to nejhorší,“ bručel Prokop. „Někdy… a tady zvlášť… i to, i
to se mně zdá hloupé… a k ničemu. I ta konečná pravda… vůbec všecko. Nikdy
dřív mně to tak nepřišlo. Nač, a k čemu… Snad je rozumnější poddat se… prostě
poddat se tomu, tomu všemu – (Nyní ukázal rukou cosi kolem dokola.) Prostě
životu. Člověk nemá být šťastný; to ho změkčuje, víte? Pak se mu zdá všechno
ostatní zbytečné, malé… a nesmyslné. Nejvíc… nejvíc udělá člověk ze
zoufalství. Ze stesku, ze samoty, z ohlušování. Protože mu nic nestačí. Já
jsem pracoval jako blázen. Ale tady, tady jsem začal být šťastný. Tady jsem
poznal, že je snad… něco lepšího než myslet. Tady člověk jenom žije… a vidí,
že je to něco ohromného… jenom žít. Jako váš Honzík, jako kočka, jako slepice.
Každé zvíře to umí… a mně to připadá tak ohromné, jako bych dosud nežil. A
tak… tak jsem podruhé ztratil dvanáct let.“
Jeho potlučená, bůhvíkolikrát sešívaná pravice se chvěla na zídce. Anči mlčí,
i potmě je vidět její dlouhé řasy; opírá se lokty a hrudí o zděný plot a mžiká
k hvězdičkám. Tu zašelestilo něco v křoví, a Anči se zděsila; až ji to mocí
vrhlo k Prokopovu rameni. „Co je to?“
„Nic, nejspíš kuna; jde asi do dvora, na kuřata.“
Anči znehybněla. Její mladé prsy se nyní pružně, plně opírají o Prokopovu
pravici, – snad, jistě o tom sama neví, ale Prokop to ví víc než cokoliv na
světě; bojí se hrozně pohnout rukou, neboť, předně, by si Anči myslela, že ji
tam položil schválně, a za druhé by vůbec změnila polohu. Zvláštní však je, že
tato okolnost vylučuje, aby dále mluvil o sobě a o ztraceném životě. „Nikdy,“
koktá zmateně, „nikdy jsem nebyl tak rád… tak šťasten jako tady. Váš tatík je
nejlepší člověk na světě, a vy… vy jste tak mladá…“
„Já jsem myslela, že se vám zdám… příliš hloupá,“ povídá Anči tiše a šťastně.
„Nikdy jste se mnou takhle nemluvil.“
„Pravda, nikdy dosud,“ zabručel Prokop. Oba se odmlčeli. Cítil na ruce lehké
oddechování jejích ňader; mrazilo ho a tajil dech, i ona, zdá se, tají dech v
tichém trnutí, ani nemrká a široce hledí nikam. Oh, pohladit a stisknout! Oh,
závrati, prvý dotyku, lichotko bezděčná a horoucí! Zda tě kdy potkalo
dobrodružství opojnější než tato nevědomá a oddaná důvěrnost? Skloněné poupě,
tělo bázlivé a jemné! kdybys tušilo mučivou něhu té tvrdé chlapské ruky, jež
tě bez hnutí hladí a svírá! Kdybys – kdyby – kdybych teď učinil… a stiskl…
Anči se vztyčila nejpřirozenějším pohybem. Ach, děvče, tys tedy opravdu o
ničem nevědělo! „Dobrou noc!“ povídá Anči tiše, a její tvář je bledá a
nejasná. „Dobrou noc,“ praví trochu sevřeně a podává mu ruku; podává ji levě a
chabě, je jako polámaná a dívá se široce nějak jinam. Není-liž pak to, jako by
chtěla ještě prodlít? Ne, jde už, váhá; ne, stojí a trhá na kousíčky nějaký
lístek. Co ještě říci? Dobrou noc, Anči, a spěte lépe než já.
Neboť zajisté nelze teď jít spat. Prokop se vrhá na lavičku a položí hlavu do
dlaní. Nic, nic se neudálo… tak dalece; bylo by hanebné hnedle myslet na
bůhvíco. Anči je čistá a nevědomá jako telátko, a teď už dost o tom; nejsem
přece chlapec. Tu se rozsvítilo v prvním patře okno. Je to Ančina ložnice.
Prokopovi bouchá srdce. Ví, že je to hanebnost, tajně se tam dívat; jistě, to
by jako host dělat neměl. Pokouší se dokonce zakašlat (aby ho slyšela), ale
jaksi to selhalo; i sedí jako socha a nemůže odvrátit očí od zlatého okna.
Anči tam přechází, shýbá se, něco dlouze a široce robí; aha, rozestýlá si
postýlku. Teď stojí u okna, dívá se do tmy a zakládá ruce za hlavou: zrovna
tak ji viděl ve snu. Teď, teď by bylo radno se ozvat; proč to neudělal? Už je
na to pozdě; Anči se odvrací, přechází, je ta tam; ba ne, to sedí zády k oknu
a zřejmě se zouvá hrozně pomalu a zamyšleně; nikdy se nesní líp než se
střevícem v ruce. Aspoň teď by bylo načase zmizet; ale místo toho vylezl na
lavičku, aby líp viděl. Anči se vrací, už nemá na sobě živůtek; zvedá nahé
paže a vyndává si z účesu vlásničky. Nyní hodila hlavou, a celá hříva se jí
rozlévá po ramenou; děvče jí potřese, hurtem si přehodí celou tu úrodu vlasů
přes čelo a teď ji zpracovává kartáčem a hřebenem, až má hlavu jako cibulku;
je to patrně velmi směšné, neboť Prokop, hanebník, přímo září.
Anči, panenka bílá, stojí se skloněnou hlavou a splétá si vlasy ve dva copy;
má víčka sklopena a něco si šeptá, zasměje se, zastydí se, až jí to ramena
zvedá; pásek košile, pozor, sklouzne. Anči hluboce přemýšlí a hladí si bílé
ramínko v nějakém rozkošnictví, zachvěje se chladem, pásek se smeká už
povážlivě, a světlo zhaslo.
Nikdy jsem neviděl nic bělejšího, nic pěknějšího a bělejšího než toto
osvětlené okno.


XII.

Hned ráno ji zastihl, jak drhne mydlinkami Honzíka v neckách; psisko zoufale
vytřepávalo vodu, ale Anči se nedala, držela ho za čupřiny a náruživě mydlila,
postříkaná, zmáčená na břiše a usmátá. „Pozor,“ křičela z dálky, „postříká
vás!“ Vypadala jako mladá nadšená maminka; oj bože, jak je vše prosté a jasné
na tomto slunném světě!
Ani Prokop nevydržel zahálet. Vzpomněl si, že nefunguje zvonek, a jal se
spravovat baterii. Zrovna oškrabával zinek, když se k němu tiše blížila ona;
měla rukávy po loket vyhrnuté a mokré ruce, neboť se pere. „Nevybuchne to?“
ptá se starostlivě. Prokop se musel usmát; i ona se zasmála a stříkla po něm
mydlinkami; ale hned mu šla s vážnou tváří utřít loktem bublinku mýdla na
vlasech. Hle, včera by se toho nebyla odvážila.
K polednímu vleče s Nandou koš prádla na zahradu; bude se bílit. Prokop s
povděkem sklapl knihu; nenechá ji přece tahat se s těžkou kropicí konví.
Zmocnil se konve a kropí prádlo; hustá prška přeradostně a horlivě bubnuje na
řásné ubrusy a na bělostné rozložité povlaky a do široce rozevřených náručí
mužských košil, šumí, crčí a slévá se ve fjordy a jezírka. Prokop se žene
zkropit i bílé zvonky sukének a jiné zajímavé věci, ale Anči mu vyrve konev a
zalévá sama. Zatím si Prokop sedl do trávy, dýchá s rozkoší vůni vlhkosti a
pozoruje Ančiny činné a krásné ruce. Soi de theoi tosa doien, vzpomněl si
zbožně. Sebas m’echei eisoroónta. Já s úžasem na tebe hledím.
Anči usedá k němu do trávy. „Nač jste to myslel?“ Mhouří oči oslněním a
radostí, zardělá a kdovíproč tak šťastná. Rve plnou hrstí svěží trávu a chtěla
by mu ji z bujnosti hodit do vlasů; ale bůhví, i teď ji tísní jakýsi uctivý
ostych před tím ochočeným hrdinou. „Měl jste někdy někoho rád?“ ptá se
zčistajasna a honem se dívá jinam.
Prokop se směje. „Měl. Vždyť i vy jste už měla někoho ráda.“
„To jsem byla ještě hloupá,“ vyhrkne Anči a proti své vůli se červená.
„Študent?“
Anči jen kývne a kouše nějakou travinu. „To nic nebylo,“ povídá pak rychle. „A
vy?“
„Jednou jsem potkal děvče, které mělo takové řasy jako vy. Možná že vám byla
podobná. Prodávala rukavice či co.“
„A co dál?“
„Nic dál. Když jsem tam šel podruhé koupit rukavice, už tam nebyla.“
„A… líbila se vám?“
„Líbila.“
„A… nikdy jste ji…“
„Nikdy. Teď mně dělá rukavice… bandažista.“
Anči soustřeďuje svou pozornost na zem. „Proč… vždycky přede mnou schováváte
ruce?“
„Protože… protože je mám tak rozbité,“ děl Prokop a chudák se začervenal.
„To je zrovna tak krásné,“ šeptá Anči s očima sklopenýma.
„K obědúúú, k obědúúú,“ vyvolává Nanda před domem. „Bože, už,“ vzdychne Anči a
velmi nerada se zvedá.
Po obědě se starý doktor jen tak trochu položil, jen docela málo. „Víte,“
omlouval se, „já jsem se ráno nadřel jako pes.“ A hned začal pravidelně a
pilně chrupat. Zasmáli se na sebe očima a po špičkách vyšli; a i v zahradě
mluvili potichu, jako by ctili jeho sytý spánek.
Prokop musel povídat o svém životě. Kde se narodil a kde rostl, že byl až v
Americe, co bídy poznal, co kdy dělal. Dělalo mu dobře zopakovat si celý ten
život; neboť, kupodivu, byl klikatější a divnější, než by sám myslel; a ještě
o mnohém pomlčel, zejména, nu, zejména o jistých citových záležitostech, neboť
předně to nemá takový význam, a za druhé, jak známo, každý mužský má o čem
mlčet. Anči byla tichá jako pěna; připadalo jí jaksi směšné a zvláštní, že
Prokop byl také dítětem a chlapcem a vůbec něčím jiným než bručivým a divným
člověkem, vedle něhož se cítí taková nesvá a maličká. Nyní by se už nebála na
něho i sáhnout, zavázat mu kravatu, pročísnout vlasy nebo vůbec. A poprvé
viděla teď jeho tlustý nos, jeho drsná ústa a přísné, mračné, krvavě protkané
oči; připadalo jí to vše nesmírně divné.
A nyní byla řada na ní, aby povídala o svém životě. Už otevřela ústa a
nabírala dechu, ale dala se do smíchu. Uznejte, co se může říci o tak
nepopsaném životě, a dokonce někomu, kdo už jednou byl dvanáct hodin zasypán,
kdo byl ve válce, v Americe a kdovíkde ještě? „Já nic nevím,“ řekla upřímně.
Nuže, řekněte, není takové „nic stejně cenné jako mužovy zkušenosti?
Je pozdě odpoledne, když spolu putují vyhřátou polní stezkou. Prokop mlčí a
Anči poslouchá. Anči hladí rukou ostnaté vrcholky klasů. Anči se ho dotýká
ramenem, zpomaluje krok, vázne; pak zase zrychlí chůzi, jde dva kroky před ním
a rve klasy v jakési potřebě ničit. Tato slunečná samota je posléze tíží a
znervózňuje; neměli jsme sem jít, myslí si oba potají, a v tísnivém rozladění
soukají ze sebe plytký, potrhaný hovor. Konečně tady je cíl, kaplička mezi
dvěma starými lípami; je pozdní hodina, kdy pasáci začínají zpívat. Tu je
sedátko poutníků; usedli a jaksi ještě víc potichli. Nějaká žena klečela u
kapličky a modlila se, jistěže za svou rodinu. Sotva odešla, zvedla se Anči a
klekla na její místo. Bylo v tom něco nekonečně a samozřejmě ženského; Prokop
se cítil chlapcem vedle zralé prostoty tohoto pravěkého a posvátného gesta.
Anči konečně vstala, zvážnělá jaksi a vyspělá, o čemsi rozhodnutá, s čímsi
smířená; jako by něco poznala, jako by něco v sobě nesla, přetížená,
zamyšlená, bůhvíčím tak změněná; jen slabikami odpovídala sladkým a potemnělým
hlasem, když se loudali domů cestičkou soumraku.
Nemluvila při večeři a nemluvil ani Prokop; mysleli asi na to, kdy starý pán
si půjde přečíst noviny. Starý pán bručel a zkoumal je přes brejličky;
holenku, něco se mu tady netento, nezdálo jaksi v pořádku. Už se to trapně
táhlo, když se ozval zvonek a člověk odněkud ze Sedmidolí nebo ze Lhoty prosil
doktora k porodu. Starý doktor byl pramálo potěšen, zapomněl dokonce hubovat.
Ještě s porodním tlumokem zaváhal ve dveřích a kázal suše: „Jdi spat, Anči.“
Beze slova se zvedla a sklízela se stolu. Byla dlouho, velmi dlouho někde v
kuchyni. Prokop nervózně kouřil a už chtěl odejít. Tu se vrátila, bledá, jako
by ji mrazilo, a řekla s hrdinným přemáháním: „Nechcete si zahrát biliár?“ To
znamenalo: se zahradou dnes nic nebude.
Nu, byla to prašpatná partie; zejména Anči byla zrovna toporná, šťouchala
naslepo, zapomínala hrát a stěží odpovídala. A když jednou zahodila
nejvyloženějšího sedáka, ukazoval jí Prokop, jak to měla sehrát: pravá faleš,
vzít trochu dole, a je to; při tom – jen aby jí vedl ruku – položil svou ruku
na její. Tu Anči prudce, temně mu vzhlédla do tváře, hodila tágo na zem a
utekla.
Nuže, co dělat? Prokop pobíhal po salóně, kouřil a mrzel se. Eh, divné děvče;
ale proč to tak mate mne sama? Její hloupá pusa, jasné blizoučké oči, líčko
hladké a horoucí, nu, člověk není konečně ze dřeva. Což by bylo takovým
hříchem pohladit líčko, políbit, pohladit, ach, růžové líce, a požehnat vlasy,
vlasy, přejemné vlásky nad mladou šíjí (člověk není ze dřeva); políbit,
pohladit, vzít do rukou, pocelovat zbožně a opatrně? Hlouposti, mrzel se
Prokop; jsem starý osel; což bych se nestyděl – takové dítě, které na to ani
nemyslí, ani nemyslí – Dobrá; toto pokušení vyřídil Prokop sám se sebou, ale
tak rychle to nešlo; mohli byste jej vidět, jak stojí před zrcadlem se rty do
krve rozkousanými a mračně, hořce vyzývá a měří svá léta.
Jdi spat, starý mládenče, jdi; právě sis ušetřil ostudu, až by se ti mladá,
hloupá holčička vysmála; i tenhle výsledek stojí za to. Jakžtakž odhodlán
stoupal Prokop nahoru do své ložnice; jen ho tížilo, že musí tadyhle projít
podle Ančina pokojíčku. Šel po špičkách: snad už spí, dítě. A najednou stanul
se srdcem splašeně tlukoucím. Ty dveře… Ančiny… nejsou dovřeny. Nejsou vůbec
zavřeny a za nimi tma. Co je to? A tu slyšel uvnitř cosi jako zakvílení.
Něco ho chtělo vrhnout tam, do těch dveří; ale něco silnějšího jej tryskem
srazilo se schodů dolů a ven do zahrady. Stál v temném houští a tiskl ruku k
srdci, jež bouchalo jako na poplach. Kristepane, že jsem k ní nešel! Anči
jistě. klečí – polosvlečena – a pláče do peřinky, proč? to nevím; ale kdybych
byl vešel – nuže, co by se stalo? Nic; klekl bych vedle ní a prosil, aby
neplakala; pohladil, pohladil bych lehké vlasy, vlásky už rozpuštěné – Ó bože,
proč nechala otevřeno?
Ejhle, světlý stín vyklouzl z domu a míří do zahrady. Je to Anči, není
svlečena ani nemá vlasy rozpuštěné, ale tiskne ruce k skráním, neboť na
palčivém čele ruce chladí; a štká ještě posledním dozvukem pláče. Jde podle
Prokopa, jako by ho neviděla, ale dělá mu místo po svém pravém boku; neslyší,
nevidí, ale nebrání se, když ji bere pod paží a vede k lavičce. Prokop zrovna
sbírá nějaká slova chlácholení (u všech všudy, o čem vlastně?), když náhle,
bác, má na rameni její hlavu, ještě jednou to křečovitě zapláče, a prostřed
vzlyků a smrkání to odpovídá, že „to nic není“; Prokop ji obejme rukou, jako
by jí byl rodným strýčkem, a nevěda si jinak rady bručí cosi, že je hodná a
strašně milá; načež vzlyky roztály v dlouhé vzdechy (cítil kdesi v podpaží
jejich horoucí vlhkost) a bylo dobře. Ó noci, nebešťanko, ty ulevíš sevřené
hrudi a rozvážeš těžký jazyk; povzneseš, požehnáš, okřídlíš tiše tlukoucí
srdce, srdce teskné a zamlklé; žíznivým dáváš pít ze své nekonečnosti. V
kterémsi mizivém bodě prostoru, někde mezi Polárkou a Jižním křížem, Centaurem
a Lyrou se děje dojatá věc; nějaký muž se zničehonic cítí jediným ochráncem a
tátou tady té mokré tvářičky, hladí ji po temeni a povídá – co vlastně? Že je
tak šťasten, tak šťasten, že má tak rád, hrozně rád to štkající a
posmrkávající na svém rameni, že nikdy odtud neodejde a kdesi cosi.
„Já nevím, co mne to napadlo,“ vzlyká a vzdychá Anči. „Já… já jsem tak chtěla
s vámi ještě… mluvit…“
„A proč jste plakala?“ bručel Prokop.
„Protože jste tak dlouho nešel,“ zní překvapující odpověď.
V Prokopovi něco slábne, vůle či co. „Vy… vy mne… máte ráda?“ vysouká ze sebe,
a hlas mu mutuje jako čtrnáctiletému. Hlava zarytá v jeho podpaží prudce a bez
výhrady kývá.
„Snad jsem… měl za vámi přijít,“ šeptá Prokop zdrcen. Hlava rozhodně vrtí, že
ne. „Tady… je mi líp,“ vydechne Anči po chvíli. „Tady je… tak krásně!“ Nikdo
snad nepochopí, co je tak krásného na drsném mužském kabátě, čpícím tabákem a
tělesností; ale Anči do něho zarývá tvář a za nic na světě by ji neobrátila k
hvězdičkám: tak je šťastna v tomto tmavém a kořenném úkrytu. Její vlasy
šimrají Prokopa pod nosem a voní přepěknou vůničkou. Prokop jí hladí schýlená
ramena, hladí její mladičkou šíji a hruď, a nalézá jenom chvějící se oddanost;
tu zapomínaje na vše, prudký a brutální popadne její hlavu a chce ji políbit
na mokré rty. A hle, Anči se divoce brání, přímo tuhne hrůzou a jektá „ne ne
ne“; a už zas se zavrtala tváří do jeho kabátu a je cítit, jak v ní buchá
poplašené srdce. A Prokop náhle pochopí, že měla být políbena poprvé.
Tu se zastyděl za sebe, zněžněl nesmírně a neodvážil se již ničeho více než ji
hladit po vlasech: to se smí, to se smí; bože, vždyť je to docela ještě dítě a
úplný pitomec! A nyní již ani slova, ani slovíčka, jež by se jen dechem dotklo
neslýchaného dětství této bílé, veliké jalovičky; ani myšlenky, která by
chtěla hrubě vysvětlit zmatené pohnutky tohoto večera! Nevěděl věru, co
povídá; mělo to medvědí melodii a pražádnou syntaxi; týkalo se to střídavě
hvězd, lásky, boha, krásné noci a kterési opery, na jejíž jméno a děj si
Prokop živou mocí nemohl vzpomenout, ale jejíž smyčce a hlasy v něm opojně
zvučely. Chvílemi se mu zdálo, že Anči usnula; i umlkal, až zase pocítil na
rameni blažený dech ospalé pozornosti.
Posléze se Anči vzpřímila, složila ruce v klín a zamyslela se. „Já ani nevím,
já ani nevím,“ povídá sladce, „mně se to ani nezdá možné.“
Po nebi světlou proužkou padá hvězda. Pustoryl voní, tady spí zavřené koule
pivoněk, jakýsi božský dech šelestí v korunách stromů. „Já bych tu tak chtěla
zůstat,“ šeptá Anči.
Ještě jednou bylo Prokopovi svésti němý boj s pokušením. „Dobrou noc, Anči,“
dostal ze sebe. „Kdyby… kdyby se vrátil váš tati…“
Anči poslušně vstala. „Dobrou noc,“ řekla a váhala; tak stáli proti sobě a
nevěděli, co počít nebo skončit. Anči byla bledá, rozčileně mžikala a
vypadala, jako by se chtěla odhodlat k nějakému hrdinství; ale když Prokop –
už nadobro ztráceje hlavu – vztáhl ruku po jejím lokti, uhnula zbaběle a dala
se na ústup. Tak šli zahradní stezičkou dobře na metr od sebe; ale když došli
tam, co je ten nejčernější stín, patrně ztratili směr či co, neboť Prokop
narazil zuby na nějaké čelo, políbil chvatně studený nos a našel svými ústy
rty zoufale semknuté; tu je rozryl hrubou přesilou, lámaje děví šíji vypáčil
jektající zuby a ukrutně líbal horoucí vláhu otevřených, sténajících úst. Pak
už se mu vydrala z rukou, postavila se u zahradních vrátek a vzlykala. Tu ji
běží Prokop těšit, hladí ji, rozsévá hubičky do vlasů a na ucho, na šíj a na
záda, ale nepomáhá to; prosí, obrací k sobě mokré líčko, mokré oči, mokrou a
štkající pusu, má ústa plná slanosti slz, celuje a hladí, a náhle vidí, že ona
se už ničemu nebrání, že se vzdala na milost a nemilost a snad pláče nad svou
hroznou porážkou. Nuže, všechno mužské rytířství rázem procitá v Prokopovi;
pouští z náručí tu hromádku neštěstí a nesmírně dojat líbá jenom zoufalé prsty
smáčené slzami a třesoucí se. Tak, tak je to lépe; a tu zas ona složí tvář na
jeho hrubou pracku a celuje ji vlhkou, palčivou pusou a horkým dechem a
tlukotem zrosených řas, a nedá si ji vzít. A tu i on mžiká očima a tají dech,
aby nevzdychl mukou něhy.
Anči zvedla hlavu. „Dobrou noc,“ povídá tiše a nastaví zcela prostě rty.
Prokop se k nim skloní, vdechne na ně polibek, jak jemný jen umí, a už se ani
neodváží ji doprovodit dál; stojí a trne, a pak se klidí až na druhý konec
zahrady, kam nepronikne ani paprsek z jejího okna: stojí a vypadá, jako by se
modlil. Nikoliv, není to modlitba; je to jen nejkrásnější noc života.


XIII.

Když svítalo, nemohl už vydržet doma: umínil si, že poběží natrhat květin; pak
je položí na práh Ančiny ložnice, a až ona vyskočí… Okřídlen radostí vykradl
se Prokop z domu málem už ve čtyři ráno. Lidi, je to krása; každý květ jiskří
jako oči (ona má mírné, veliké oči kravičky) (ona má tak dlouhé řasy) (teď
spí, má víčka oblá a něžná jako vajíčka holubí) (bože, znát její sny) (má-li
ruce složeny na prsou, zvedají se dechem; ale má-li je pod hlavou, tu jistě se
jí shrnul rukáv a je vidět loket, kolečko drsné a růžové) (onehdy říkala, že
spí dosud v železné dětské postýlce) (říkala, že v říjnu jí bude už
devatenáct) (má na krku mateřské znamínko) (jak jen je možno, že mne má ráda,
to je tak divné), vskutku, nic se nevyrovná kráse letního jitra, ale Prokop se
dívá do země, usmívá se, pokud to vůbec dovede, a putuje samými závorkami až k
řece. Tam objeví – ale u druhého břehu – poupata leknínů; tu zhrdaje vším
nebezpečím se svlékne, vrhne se do hustého slizu zátoky, pořeže si nohy o
nějakou zákeřnou ostřici a vrací se s náručí leknínů. Leknín je květina
poetická, ale pouští ošklivou vodu z tučných stvolů; i běží Prokop s poetickou
kořistí domů a přemýšlí, z čeho by udělal na svou kytku pořádnou manžetu.
Vida, na lavičce před domem zapomněl doktor svou včerejší Političku. Prokop ji
chutě trhá, zhola přehlížeje jakousi balkánskou mobilizaci, i to, že se houpe
nějaké ministerstvo a že někdo v černém rámečku zemřel, oplakáván ovšem celým
národem, a balí do toho mokré řapíky. Když pak se chtěl s pýchou podívat na
své dílo, hrklo v něm hrozně. Na manžetě z novin našel totiž jedno slovo. Bylo
to KRAKATIT.
Chvíli na to strnule koukal nevěře prostě svým očím. Pak rozbalil se zimničným
spěchem noviny, rozsypal celou nádheru leknínů po zemi a našel konečně tento
inzerát: „KRAKATIT! Ing. P. ať udá svou adresu. Carson, hl. p.“ Nic víc.
Prokop si vytíral oči a četl znova: „Ing. P. ať udá svou adresu. Carson.“ Co u
všech všudy… Kdo je to, ten Carson? A jak ví, hrome, jak může vědět…
Popadesáté četl Prokop záhadný inzerát: „KRAKATIT! Ing. P. ať udá svou
adresu.“ A pak ještě „Carson, hl. p.“ Víc už se z toho vyčíst nedalo.
Prokop seděl jako praštěný palicí. Proč, proč jen jsem vzal ty proklaté noviny
do rukou, mihlo se mu zoufale hlavou. Jakže to tam je? „KRAKATIT! Ing. P. ať
udá svou adresu.“ Ing. P., to znamená Prokop; a Krakatit, to je právě to
zatracené místo, to zamžené místo tadyhle v mozku, ten těžký nádor, to, nač si
netroufal myslet, s čím chodil tluka hlavou do zdí, to, co už nemělo jména, –
jakže to tu stojí? „KRAKATIT!“ Prokop vytřeštil oči vnitřním nárazem. Najednou
viděl… tu jistou olovnatou sůl, a rázem se mu rozvinul zmatený film paměti:
předlouhý, zuřivý zápas v laboratoři s tou těžkou, tupou, netečnou látkou;
slepé a sviňské pokusy, když selhávalo vše, žíravý ohmat, když vztekem ji
drobil a drtil v prstech, leptavá chuť na jazyku a čpavý dým, únava, jíž
usínal na židli, stud, zarytost a najednou – snad ve snu či jak – poslední
nápad, pokus paradoxní a zázračně jednoduchý, fyzikální trik, jehož doposud
neužil. Viděl teninké bílé jehličky, jež konečně smetl do porcelánové krabice,
přesvědčen, že to zítra pěkně bouchne, až to zapálí v pískové jámě tam v
polích, kde byla jeho velmi protizákonná pokusná střelnice. Viděl svou
laboratorní lenošku, z níž čouhá koudel a dráty; tam tehdy se stočil jako
unavený pes a patrně usnul, neboť byla úplná tma, když za strašlivé exploze a
řinkotu skla se skácel i s lenoškou na zem. Pak přišla ta prudká bolest na
pravé ruce, neboť něco mu ji rozseklo; a potom – potom –
Prokop vraštil čelo bolestně prudkým rozpomínáním. Pravda, tady je přes ruku
ta jizva. A potom jsem chtěl rozsvítit, ale žárovky byly prasklé. Pak jsem
hmatal potmě, co se to stalo; na stole plno střepů, a tuhle, kde jsem
pracoval, je zinkový plech pultu roztrhán, zkroucen a seškvařen a dubová
tabule rozštípnuta, jako by do ní sjel blesk. A pak jsem nahmátl tu
porcelánovou krabici, a byla celá, a tehdy teprve jsem se zděsil. Tohle, ano,
tohle tedy byl Krakatit. A potom –
Prokop už nevydržel sedět; překročil rozsypané lekníny a běhal po zahradě
hryže si rozčilením prsty. Potom jsem někam běžel, přes pole, přes oranice,
několikrát jsem se svalil, bože, kde to vlastně bylo? Tady byla souvislost
vzpomínek rozhodně porušena; nepochybná je jenom hrozná bolest pod čelními
kostmi a jakási okolnost s policií, potom jsem mluvil s Jirkou Tomšem a šli
jsme k němu, ne, jel jsem tam drožkou; byl jsem nemocen a on mne ošetřoval.
Jirka je hodný. Proboha, jak to bylo dál? Jirka Tomeš řekl, že jede sem, k
tátovi, ale nejel; hleďme, je to divné; zatím já jsem spal či co –
Tu krátce, jemně zazněl zvonek; šel jsem otevřít, a na prahu stála dívka s
tváří zastřenou závojem.
Prokop zasténal a zakryl si obličej rukama. Ani nevěděl, že sedí na lavičce,
kde této noci mu bylo hladit a konejšit někoho jiného. „Bydlí tady pan Tomeš?“
ptala se udýchaně; asi běžela, kožišinku měla zrosenou deštěm, a náhle, náhle
zvedla oči –
Prokop málem zavyl útrapou. Viděl ji, jako by to včera bylo: ruce, maličké
ruce v těsných rukavičkách, rosička dechu na hustém závoji, pohled čistý a
plný hoře; krásná, smutná a statečná. „Vy ho zachráníte, že?“ Dívá se na něho
zblízka vážnýma, matoucíma očima a mačká nějaký balíček, nějakou silnou obálku
s pečetěmi, tiskne ji k prsoum rozčilenýma rukama a přemáhá se všemožně –
Prokopa jako by udeřilo do tváře. Kam jsem dal ten balíček? Ať kdokoliv je ta
dívka: slíbil jsem, že jej odevzdám Tomšovi. Ve své nemoci… jsem na všecko
zapomněl; nebo jsem… spíš… na to nechtěl myslet. Ale teď – Musí se teď nalézt,
toť jasno.
Skokem vyběhl do svého pokoje a rozhazoval zásuvky. Není, není, není tu nikde.
Podvacáté přehazoval svých pět švestek, list po listu a kus po kuse; pak usedl
prostřed toho strašného nepořádku jako nad zříceninami Jeruzaléma a ždímal si
čelo. Buď to vzal doktor nebo Anči nebo řehtavá Nanda; jinak to už není možno.
Když toto nezvratně a detektivně zjistil, pocítil jakousi nevolnost nebo
zmatek a jako ve snu šel ke kamnům, sáhl hluboko dovnitř a vyňal… hledaný
balíček. Přitom se mu nejasně zdálo, že jej tam kdysi uložil sám, kdysi, když
ještě nebyl… docela zdráv; nějak se upomínal, že v onom stavu mrákot a
blouznění jej pořád musel mít v posteli a zuřil, když mu jej brali, a že se ho
přitom hrozně bál, neboť pojil se k němu mučivý neklid a stesk. Patrně jej tam
se lstivostí blázna ukryl sám před sebou, aby měl od něho pokoj. Čert se
ostatně vyznej v tajemstvích podvědomí; teď je to tady, ta silná převázaná
obálka s pěti pečetěmi, a na ní napsáno „Pro pana Jiřího Tomše“. Snažil se
vyčíst něco bližšího z toho zralého a pronikavého písma; ale místo toho viděl
zastřenou dívku, jak ždímá obálku v třesoucích se prstech; teď, teď zase zvedá
oči… Přivoněl žíznivě k balíčku: voněl slabounce a vzdáleně.
Položil jej na stůl a kroužil dokola. Hrozně by chtěl vědět, co je tam uvnitř,
pod pěti pečetěmi; zajisté je to těžké tajemství, nějaký poměr osudný a
palčivý. Říkala sice, že… že to činí pro někoho jiného; ale byla tak rozčilena
– Nicméně že by ona, ona mohla milovat Tomše: toť neuvěřitelno. Tomeš je
darebák, zjišťoval s temným vztekem; vždycky měl u ženských štěstí, ten cynik.
Dobrá, najdu ho a odevzdám mu tu zásilku lásky; a pak ať už je konec –
Najednou se mu rozbřesklo v hlavě: oč že je nějaká souvislost mezi Tomšem a
tím, jakpak se jmenuje, tím zatraceným Carsonem! Nikdo přece nevěděl a neví o
Krakatitu; jen Tomeš Jirka to asi bůhvíjak vytento, vyšpehoval – Nový obrázek
se sám sebou vsunul do zmateného filmu paměti: kterak tehdy on, Prokop, něco
brebentil v horečce (to je asi byt Tomšův), a on, Jirka, se nad ním sklání a
něco si zaznamenává v notesu. Určitě a svatosvatě to byl můj vzorec! vyžvanil
jsem to, vylákal to ze mne, ukradl mi to a prodal to asi tomu Carsonovi!
Prokop ustrnul nad takovou špatností. Ježíši, a tomu člověku padlo to děvče do
rukou! Je-li co na světě jasno, tož je to: že je nutno ji zachránit, stůj co
stůj!
Dobrá, nejprve musím nalézt Tomše, zloděje; dám mu tady ten zapečetěný balíček
a mimoto mu vyrazím zuby. Dále, mám ho jednoduše v hrsti: musí mně říci jméno
a pobyt toho děvčete a zavázat se – ne; žádné sliby od takového ničemy. Ale
půjdu k ní a řeknu jí vše. A potom zmizím navždy z jejích očí.
Uspokojen tímto rytířským řešením stanul Prokop nad nešťastnou obálkou. Ach,
vědět jen to, jen to jediné, zda byla milenkou Tomšovou! Zase ji viděl, jak
stojí, sličná a silná; ani pohledem, ani mžiknutím tehdy nezavadila o hříšné
lože Tomšovo. Což bylo by možno tak lhát očima, tak lhát takovýma očima –
Tu syknuv utrpením zlomil pečetě, přerval provázek a roztrhl obálku. Byly tam
bankovky a dopis.


XIV.

Zatím už doktor Tomeš sedí u snídaně funě a bruče po těžkém porodu; přitom
vrhá na Anči pohledy zkoumavé a nespokojené. Anči sedí jako zařezaná, nejí,
nepije, nevěří prostě svým očím, že se Prokop ještě neukázal; nějak se jí
třesou rty, patrně užuž přijdou slzy. Tu vejde Prokop jaksi zbytečně rázně, je
bledý a nemůže si ani sednout, jak má naspěch; jen taktak že pozdraví,
přeběhne Anči očima, jako by ji ani neznal, a hned se ptá s popudlivou
netrpělivostí: „Kde je teď váš Jirka?“
Doktor se užasle otočil: „Cože?“
„Kde je teď váš syn,“ opakuje Prokop a sžehuje ho umíněnýma očima.
„Copak já vím?“ zavrčí doktor. „Já o něm nechci vědět.“
„Je v Praze?“ naléhá Prokop zatínaje pěstě. Doktor mlčí, ale něco v něm prudce
pracuje.
„Musím s ním mluvit,“ drtí Prokop. „Musím, slyšíte? Musím jet za ním, ještě
teď, hned! Kde je?“
Doktor něco přemílá čelistmi a jde ke dveřím.
„Kde je? Kde bydlí?“
„Nevím,“ rozkřikl se doktor nesvým hlasem a práskl dveřmi.
Prokop se obrátil k Anči. Seděla strnulá a upírala velikánské oči nikam.
„Anči,“ drmolil Prokop zimničně, „musíte mi říci, kde váš Jirka je. Já… já
musím za ním jet, víte? To je totiž… taková věc… Zkrátka jde tu o některé
věci… Já… Přečtěte si to,“ řekl honem a strkal jí před oči sežmolený kus
novin. Anči však viděla jenom jakési kruhy.
„To je můj vynález, rozumíte?“ vysvětloval nervózně. „Hledají mne, nějaký
Hanson – Kde je váš Jiří?“
„Nevíme,“ šeptala Anči. „Už dva… už dva roky nám nepsal –“
„Ach,“ utrhl se Prokop a vztekle zmačkal noviny. Děvče zkamenělo, jen oči jí
rostly a rostly a mezi pootevřenými rty jí dýchalo něco zmateně žalostného.
Prokop by se nejraději propadl. „Anči,“ rozřízl posléze mučivé ticho, „já se
vrátím. Já… za několik dní… Tohle je totiž vážná věc. Člověk… musí konečně
myslet… na své povolání. A má, víte, jisté… jisté povinnosti…“ (Bože, ten to
zkopal!) „Pochopte, že… Já prostě musím,“ křikl najednou. „Raději bych zemřel
než nejel, rozumíte?“
Anči jen maličko kývla hlavou. Ach, kdyby byla pokývla víc, byla by jí, bum,
hlava klesla na stůl v hlasitém pláči; ale takto se jí jen zalily oči a to
ostatní mohla ještě spolknout.
„Anči,“ bručel Prokop v zoufalých rozpacích a zachraňoval se ke dveřím, „ani
se nebudu loučit; hleďte, nestojí to za to; za týden, za měsíc tu budu zas…
Nu, hleďte –“ Ani se na ni nemohl podívat; seděla jako tupá, s plihými rameny,
očima nevidomýma a nosem, jenž nabíhal vnitřním pláčem; žalno ji vidět.
„Anči,“ pokusil se znovu a zas toho nechal. Nekonečná se mu zdála ta poslední
chvilka ve dveřích; cítil, že by měl něco ještě říci nebo něco udělat, ale
místo všeho vysoukal ze sebe jakési „na shledanou“ a trapně se vytratil.
Jako zloděj, po špičkách, opouštěl dům. Zaváhal ještě u dveří, za nimiž nechal
Anči. Bylo tam uvnitř ticho, jež ho sevřelo nevýslovnou trýzní. V domovních
dveřích se zarazil jako ten, kdo na něco zapomněl, a vracel se po špičkách do
kuchyně; bohudík, Nanda tam nebyla, i zamířil k poličce. „… ATIT!… adresu.
Carson, hl. p.“ To stálo na kuse novin, jež veselá Nanda cípatě nastříhala na
poličku. Tu tam pro ni položil plnou hrst peněz za všechnu její službu, a
zmizel.
Prokope, Prokope, tak nejedná člověk, který se chce za týden vrátit!
„To to ’de, to to ’de,“ skanduje vlak; ale lidské netrpělivosti už ani nestačí
jeho lomozný, drkotavý spěch; lidská netrpělivost se zoufale vrtí, pořád
vytahuje hodinky a kope kolem sebe v posunčině nervózy. Jedna, dvě, tři,
čtyři: to jsou telegrafní tyče. Stromy, pole, stromy, strážní domek, stromy,
břeh, břeh, plot a pole. Jedenáct hodin sedmnáct. Řepné pole, ženské v modrých
zástěrách, dům, psisko, jež si vzalo do hlavy předhonit vlak, pole, pole,
pole. Jedenáct hodin sedmnáct. Bože, což ten čas stojí? Raději na to nemyslet;
zavřít oči a počítat do tisíce; říkat si otčenáš nebo chemické vzorce. „To to
’de, to to ’de!“ Jedenáct hodin osmnáct. Bože, co počít?
Prokop se vytrhl. „KRAKATIT,“ padlo mu odněkud do očí, až se lekl. Kde je to?
Aha, to soused naproti čte noviny, a na zadní straně je zas ten inzerát.
„KRAKATIT! Ing. P. ať udá svou adresu. Carson, hl. p.“ Ať mi dá pokoj ten pan
Carson, myslí si Ing. P.; nicméně na nejbližší stanici shání všechny noviny,
co jich plodí požehnaná vlast. Bylo to ve všech, a ve všech stejně: „KRAKATIT!
Ing. P. ať udá…“ U všech rohatých, diví se Ing. P., to je po mně nějaká
sháňka! Nač mne potřebují, když jim to už Tomeš prodal?
Ale místo aby řešil tuto podstatnou záhadu, podíval se, není-li pozorován, a
vytáhl snad už posté onu povědomou roztrženou obálku. S všelijakými okolky,
jež mu působily silnou rozkoš odkladu, po různém potěžkávání a otáčení vyňal z
jejího nitra napěchovaného penězi zas onen dopis, onen drahocenný dopis psaný
písmem zralým a energickým. „Pane Tomši,“ četl znovu dychtivě, „toto nedělám
pro Vás, ale pro svou sestru. Šílí od té chvíle, kdy jste jí poslal svůj
strašlivý dopis. Chtěla prodat všechny své šaty a šperky, aby Vám poslala
peníze; musela jsem ji vší mocí zdržet, aby neprovedla něco, co by pak nemohla
utajit před svým mužem. Co Vám posílám, jsou mé vlastní peníze; vím, že je
přijmete bez zbytečných rozpaků, a prosím, abyste mi neděkoval. L.“ K tomu
chvatně připsáno: „Pro živého boha, nechte už M. na pokoji! Dala vše, co má;
dala vám více, než bylo její; trnu hrůzou, co bude, vyjde-li to najevo. Prosím
Vás pro vše na světě, nezneužívejte svého strašného vlivu na ni! Bylo by
příliš podlé, kdybyste –“ Zbytek věty byl přeškrtán, a následovalo ještě jedno
postskriptum: „Poděkujte za mne svému příteli, který vám toto doručí. Byl ke
mně nezapomenutelně laskav ve chvíli, kdy jsem nejvíc potřebovala lidské
pomoci.“
Prokopa zrovna drtila přemíra těžkého štěstí. Nebyla tedy Tomšova! A nikoho
neměla, o koho by se mohla opřít! Statečné děvče a ženerózní, čtyřicet tisíc
sehnala, aby zachránila svou sestru před… patrně před nějakou ostudou! Těchto
čtyřicet tisíc je z banky; jsou ještě opatřeny páskou, jak je vyzvedla, – u
čerta, proč na té pásce není jméno banky? A dalších deset tisíc vymetla kdoví
kde a jak; neboť jsou mezi nimi drobné bankovky, ubohé špinavé pětikoruny,
zchátralé hadříky z bůhvíjakých rukou, zmuchlané peníze ženských tobolek;
bože, co rozčilující sháňky ji muselo stát, než sehnala tuhle hrst peněz! „Byl
ke mně nezapomenutelně laskav…“ V tu chvíli by Prokop rozmlátil Tomše, bídníka
nesvědomitého a mrzkého; ale zároveň mu vše jaksi odpouštěl… neboť nebyla jeho
milenkou! Nebyla Tomšova: to přece přinejmenším znamená, že je to svatosvatě
anděl nejčistší a nejdokonalejší; a tu mu bylo, jako by se nějaká neznámá rána
zacelovala v jeho srdci prudce a zrovna bolestně.
Ano, nalézt ji; musím jí především… především vrátit tyhle její peníze (ani se
nestyděl za záminku tak průhlednou) a říci jí, že… že zkrátka… že může na mne
počítat, stran Tomše a vůbec… „Byl ke mně nezapomenutelně laskav.“ Prokop až
sepjal ruce: bože, co vše jsem odhodlán učinit, abych si zasloužil tahle slova
–
Ó-ó, jak ten vlak pomalu jede!


XV.

Jakmile přistál v Praze, hnal se do Tomšova bytu. U Muzea se zarazil:
Zatraceně, kde vlastně Tomeš bydlí? Šel jsem, ano, šel jsem tehdy, otřásán
zimnicí, na dráhu podle Muzea; ale odkud? Z které ulice? Zuře a klna bloudil
Prokop kolem Muzea, hledaje pravděpodobný směr; nenašel nic, i pustil se na
policejní ředitelství, oddělení dotazy. Jiří Tomeš, listoval zaprášený oficiál
v knihách, inženýr Tomeš Jiří, to je prosím na Smíchově, ulice ta a ta. Byla
to patrně stará adresa. Nicméně letěl Prokop na Smíchov do ulice té a té.
Domovník kroutil hlavou, když se ho ptal po Jiřím Tomši. Toť že tu ten jistý
bydlel, ale už víc než před rokem; kde bydlí teď, neví nikdo; ostatně nechal
tu po sobě všelijaké dluhy –
Zdrcen zalezl Prokop do nějaké kavárny. „KRAKATIT,“ padlo mu do očí na zadní
stránce novin. „Ing. P. ať udá svou adresu. Carson, hl. p.“ Nuže, jistě ví o
Tomšovi ten jistý Carson: už to tak je, že je mezi nimi jakási souvislost.
Dobře tedy, tady je lístek: „Carson, hlavní pošta. Přijďte zítra v poledne do
kavárny té a té. Ing. Prokop.“ Jen to napsal, a už ho napadla nová myšlenka:
totiž dluhy. Sebral se a utíkal k soudu, oddělení pro pohledávky. A hle, zde
tuze dobře znali adresu pana Tomše: celá hromada nedoručitelných obsílek,
soudních upomínek a tak dále; ale zdá se, že ten jistý Tomeš Jiří zmizel beze
stopy a zejména bez udání nynějšího pobytu. Přesto se vrhl Prokop za novou
adresou. Domovnice, osvěžena slušnou odměnou, hned poznala Prokopa, že tu
jednou přespal; i spustila přeochotně, že pan inženýr Tomeš je šejdíř a
darebák; dále, že zrovna tehdy v noci odejel a nechal tu jeho, pána, jí
domovnici na starost; že ona třikrát přišla nahoru se optat, potřebuje-li
čeho, ale že on, pán, jen pořád spal a mluvil ze spaní, a pak odpoledne
zmizel. A kdeže jářku je pan Tomeš? Inu, tenkrát tedy odejel a nechal tu
všecko stát a ležet a ještě se nevrátil; jen poslal peníze odněkud z ciziny,
ale je už zas dlužen za nový kvartál. Prý mu prodají v soudní dražbě svršky,
nepřihlásí-li se do konce měsíce. Nadělal prý dluhů asi za čtvrt miliónu, nu,
a utekl. Prokop podrobil výtečnou ženu křížovému výslechu: je-li jí co známo o
nějaké paničce, která prý měla s panem Tomšem poměr, kdo sem chodíval a
podobně. Domovnice nevěděla dohromady nic; co se týče ženských, chodilo jich
sem asi dvacet, takové se závojem na hubě, i jinačí, našminkované a všelijaké;
říkám vám, byla to ostuda po celé ulici. Prokop jí tedy zaplatil dlužný
kvartál ze svého, a za to dostal klíč od Tomšova bytu.
Bylo tam cítit jakousi ztuchlinu bytu dlouho neužívaného a skoro odumřelého.
Teprve teď si Prokop všiml divné nádhery místa, kde zápasil s horečkou. Všude
perské koberce a bucharské či jaké polštáře, na stěnách nahoty a gobelíny,
orient a klubovky, toaletní stůl subrety a koupelna prvotřídní prostitutky,
směs přepychu a sprostoty, smilstva a lajdáctví. A zde, uprostřed všech těch
svinstev, stála tehdy ona tisknouc k prsoum balíček; upírá čisté, hořeplné oči
k zemi, a teď, bože můj, je zvedá v statečné a ryzí důvěře… Proboha, co si
musela o mně myslet, když mne potkala v tomhle pelechu! Musím ji nalézt,
aspoň… aspoň proto, abych jí vrátil její peníze; i kdyby nešlo o nic jiného, o
nic většího… Je naprosto nutno ji nalézt!
To se lehko řekne; ale jak? Prokop si hryzl rty v úporném přemýšlení. Kdybych
aspoň věděl, kde hledat Jirku, říkal si; konečně padl na hromadu
korespondence, která tu čekala na Tomše. Většinou to byly, jak zřejmo,
obchodní dopisy, patrně samé účty. Pak několik soukromých listů, jež obracel a
očichával váhaje. Možná, možná že v některém je nějaká stopa, adresa nebo
cokoliv, co by jej vedlo za ním… nebo za ní! Hrdinně odolával pokušení otevřít
aspoň jeden dopis; ale byl tu tak sám za kalnými okny, a všechno tu zrovna
vydechuje nějakou mrzkou a tajnou hanebnost. A tu, rychle polykaje všechny
rozpaky, trhal Prokop obálky a četl list po listu. Účet za perské koberce, za
květiny, za tři psací stroje; velmi důtklivé upomínky, aby vyúčtoval zboží
dané do komise; jakési záhadné transakce týkající se koní, cizích valut a
dvaceti vagónů kulatého dříví kdesi u Kremnice. Prokop nevěřil svým očím;
podle těchto papírů byl Tomeš buď pašerák ve velkém, nebo agent s perskými
koberci, nebo valutní spekulant, nejspíš ale všecko troje; vedle toho
obchodoval s automobily, vývozními certifikáty, kancelářským nábytkem a patrně
vším možným. V jednom dopise je řeč o jakýchsi dvou miliónech, zatímco druhý,
usmolený a psaný tužkou, hrozí žalobou pro vylákanou starožitnost (staro bili
ring podědovi). Úhrnem to vypadalo na celou řadu podvodů, zpronevěru,
falšování vývozních listin a jiné paragrafy, pokud tomu Prokop vůbec rozuměl;
je prostě úžasné, že to dosud neprasklo. Jeden advokát stručně sděloval, že
firma ta a ta podala na pana Tomše trestní oznámení pro zpronevěru čtyřiceti
tisíc korun; ať se pan Tomeš ve vlastním zájmu dostaví do kanceláře atd.
Prokop se zhrozil; až tohle propukne, kam až stříkne hanba těchto nevýslovných
špinavostí? Vzpomněl si na tichý dům v Týnici a na tu, jež tady stála, zoufale
odhodlána zachránit toho člověka. I sebral celou tu obchodní korespondenci
firmy Tomeš a běžel ji spálit v kamnech. Bylo tam plno zuhelnatělých papírů.
Patrně sám Tomeš týmž způsobem zjednodušoval poměry, než ujel.
Dobrá, to byly obchodní papíry; zbývá ještě několik zcela soukromých dopisů
jemných anebo uboze umazaných, a nad nimi Prokop váhá znovu v palčivém studu.
U všech všudy, co jiného mohu udělat? Dusil se sice hanbou, ale trhal chvatně
další obálky. Zde pár lepkavých důvěrností, miláčku, vzpomínám, nová schůzka a
dost. Nějaká Anna Chválová s dojemnými pravopisnými chybami sděluje, že
Jeníček zemřel „na vyrážku“. Tady kdosi upozorňuje, že ví „něco, co by
zajímalo na policii“, ale že by dal se sebou mluvit, a že pan Tomeš „jistě ví,
jakou cenu má taková dikrétnost“; k tomu narážka na „ten dům v Břet. ul., kde
pan Tomeš ví, koho má hledat, aby to zůstalo pod pokličkou“. Zas něco o
jakémsi obchodě, o prodaných dluhopisech, podepsáno „Tvá Růža“. Táž Růža
sděluje, že její muž odejel. Táž ruka jako na čísle 1, dopis z lázní: nic než
kravské sentimentality, rozvalená erotika zralé a tučné blondýny, ocukrovaná
samými ach, výčitkami a krasocity, a k tomu „drahouši“ a „divochu“ a podobné
ohavnosti; Prokopovi se z toho obracel žaludek. Německý dopis, písmeno „G.“,
valutní obchod, prodej ty papíry, erwarte Dich, P. S. Achtung, K. aus Hamburg
eingetroffen. Táž „G“, uražený a chvatný dopis, mrazivé vykání, vraťte těch
deset tisíc, sonst wird K. dahinterkommen, hm. Prokop se k smrti styděl vnikat
do navoněného přítmí těchto spodničkových záležitostí, ale teď už se nelze
zastavit. Konečně čtyři dopisy signované M.: listy slzavé, horečné a trapné, z
nichž dýchala těžká a vášnivá historie nějaké slepé, dusné, otrocké lásky.
Byly tu úpěnlivé prosby, plazení v prachu, zoufalé inkriminace, strašné
sebenabízení a ještě strašnější sebetrýzeň; zmínka o dětech, o muži, nabídka
nové půjčky, nejasné narážky a přespříliš jasná zbědovanost ženy usmýkané
láskou. Tohle tedy je její sestra! Prokopovi bylo, jako by viděl před sebou
výsměšná a krutá ústa, pichlavé oči, panskou a zpupnou, sebevědomou,
sebejistou hlavu Tomšovu: byl by do ní udeřil pěstí. Avšak nic platno: tato
žalostně obnažená láska ženina mu neřekla toho nejmenšího o… o té druhé, jež
dosud nemá pro něho jména a kterou jest mu hledati.
Nezbývá tedy než nalézti Tomše.


XVI.

Nalézti Tomše: lidi, jako by tohle bylo tak lehké! Prokop provedl znovu
generální prohlídku celého bytu; řádil ve všech skříních i zásuvkách,
nenacházeje krom prašiviny starých účtů, milostných dopisů, fotografií a
jiného mládeneckého neřádu nic, co by jakkoliv osvětlilo Tomšovu záležitost.
Nu ovšem, má-li někdo tolik másla na hlavě, dovede už důkladně zmizet!
Znovu vyslechl domovnici; zvěděl sice záplavu všelijakých historek, ale nic,
co by ho uvedlo na stopu. Šel na pana domácího, odkudže poslal Tomeš ty peníze
z ciziny. Bylo mu vyslechnouti celé kázání nevrlého a dosti nepříjemného
staříka, který trpěl všemi možnými katary a nadával na zkaženost dnešních
mladých pánů. Za cenu nadlidské trpělivosti zvěděl konečně jen to, že řečené
peníze neposlal pan Tomeš, nýbrž jakýsi směnárník na konto Drážďanské banky
„auf Befehl des Herrn Tomes“. Rozběhl se k advokátovi, který měl, jak výše
sděleno, jistou rozpracovanou záležitost s pohřešovaným. Advokát se zbytečně
halil v profesionální tajemství; ale když Prokop hloupě vybleptl, že má panu
Tomšovi doručit nějaké peníze, oživl advokát a žádal, aby je složil do jeho
rukou; i dalo Prokopovi mnoho práce, aby se z toho vymotal. To jej poučilo,
aby nepátral po Tomšovi u lidí, kteří s ním měli jakékoliv obchodní řízení.
Na nejbližším rohu zůstal stát: Co teď? Zbývá jen Carson. Neznámá veličina,
jež o něčem ví a něco chce. Dobrá, tedy Carson. Prokop nahmatal v kapse
lístek, jejž zapomněl poslat, a rozběhl se na poštu.
Ale u poštovní schránky mu klesla ruka. Carson, Carson, – ano, ale tomu jde o
cosi, co… také není maličkost. U čerta, ten chlap něco ví o Krakatitu a má za
lubem – inu bůhsámví co. Proč vůbec mne shání? Patrně Tomeš neví vše; nebo
nechtěl vše prodat; nebo si klade nestydaté podmínky, a já osel mám být
lacinější. Tak asi to je; ale (a tu se Prokop poprvé zhrozil dosahu věci) což
je vůbec možno vyrukovat s Krakatitem ven? Především by se muselo u sta hromů
pořádně vědět, co to dělá a k čemu je to dobré, jak se s tím zachází a kdesi
cosi; Krakatit, holenku, to není šňupavý tabák nebo zasýpací prášek pro děti.
A za druhé, za druhé snad je to vůbec… příliš silný tabák pro tento svět.
Představme si, co by se s tím mohlo natropit… řekněme ve válce. Prokopovi
začalo být z celé věci až úzko. Který čert sem nese toho zatraceného Carsona?
Prokristapána, musí se za každou cenu zabránit –
Prokop se chytil za hlavu tak, až se zastavovali lidé. Vždyť, proboha,
zanechal tam nahoře, ve svém laboratorním baráku u Hybšmonky, v porcelánové
dózi skoro patnáct deka Krakatitu! tedy zrovna dost, aby to mohlo rozmlátit já
nevím co, celé hejtmanství! Přímo ztuhl úděsem, a pak se pustil tryskem k
tramvaji: jako by teď ještě záleželo na těch několika minutách! Trpěl pekelně,
než se tramvaj dovlekla na druhý břeh; pak ztekl cvalem košířskou stráň a
uháněl k svému baráku. Bylo zamčeno, a Prokop marně hledal po kapsách něco
podobného klíči; i rozhlédl se soumrakem jako zloděj, rozbil okenní tabulku,
otevřel závory a vlezl oknem domů.
Jen rozškrtl sirku a už viděl, že je co nejmetodičtěji vyloupen. Totiž peřiny
a takové krámy tu zůstaly; ale všechny lahvičky, kelímky a zkumavky, crushery,
hmoždíře, misky a přístroje, lžíce a váhy, celá jeho primitivní chemická
kuchyně, vše, co obsahovalo jeho pokusné hmoty, vše, na čem mohla být jen
usazenina či nálet nějaké chemikálie, vše zmizelo. Pryč je porcelánová dóza s
Krakatitem. Vytrhl zásuvku stolu: veškeré jeho zápisky a záznamy, každý
počmáraný útržek papíru, sebemenší památka dvanáctileté pokusné práce, vše
bylo to tam. Dokonce i s podlahy byly seškrabány skvrny a stopy jeho práce, a
jeho pracovní hazuka, ta stará, potřísněná, lučebninami zrovna zkornatělá
halena byla pryč. Hrdlo se mu sevřelo návalem pláče. Tohle tedy, tohle mi
udělali!
Dlouho do noci seděl na svém vojanském kavalci a strnule zíral do vypleněné
pracovny. Chvílemi se utěšoval, že si snad vzpomene na vše, co během dvanácti
let psal do svých poznámek; ale když namátkou vybral některý experiment a
chtěl si jej popaměti v hlavě zopakovat, nemohl z místa přes úsilí
nejzoufalejší; tu hryzal si rozbité prsty a sténal.
Náhle se probudil zarachocením klíče. Je čiročiré ráno a do pracovny jakoby
nic vchází cizí člověk a rovnou ke stolu. Tam teď sedí s kloboukem na hlavě,
bručí a pečlivě oškrabuje na stole zinek. Prokop se posadil na kavalci a
vyhrkl: „Člověče, co tu chcete?“
Člověk se obrátil nesmírně překvapen a beze slova koukal na Prokopa.
„Co tu chcete?“ opakoval Prokop podrážděně. Chlapík nic; ještě si ke všemu
nasadil skla a brejlil na Prokopa s ohromným zájmem.
Prokop zaskřípal zuby, neboť se v něm už vařila hrozná nadávka. Ale tu
človíček vlídně zazářil, vymrštil se ze židle a vypadal najednou, jako by
radostně vrtěl ocasem. „Carson,“ řekl honem a spustil po německu: „Bože, to
jsem rád, že jste se vrátil! Četl jste můj inzerát?“
„Četl,“ odpovídal Prokop tvrdou a centovou němčinou. „A co tu hledáte?“
„Vás,“ povídal host báječně potěšen. „Víte, že vás honím už po šest neděl?
Všecky noviny, všecky detektivní ústavy, haha, pane! co tomu říkáte? Hergot,
to mám radost! Jak se vede? Zdráv?“
„Proč jste mne vykradl?“ ptal se Prokop mračně.
„Jak prosím?“
„Proč jste mne vykradl!“
„Ale pane inženýre,“ sypal blažený mužík pranic nedotčen. „Co to říkáte?
Vykradl! Carson! To je ohromné, hahaha!“
„Vykradl,“ opakoval Prokop umíněně.
„Tatata,“ protestoval pan Carson. „Schoval. Všecko uložil. Pane, jak jste to
tu mohl nechat ležet? Někdo vám to mohl ukrást, ne? Co? Ovšem že mohl, pane.
Ukrást, prodat, publikovat, že? To se rozumí, pane. Mohl. Ale já jsem vám to
schoval, rozumíte? Čestné slovo. Proto jsem vás hledal. Všecko vrátím. Všecko.
To jest,“ dodával váhavě, a pod zářivými brýlemi to ocelově utkvělo. „Totiž…
budete-li rozumný. Vždyť my se dohodneme, co?“ dodával rychle. „Musíte se
habilitovat. Ohromná kariéra. Atomové výbuchy, rozbití prvků, báječné věci.
Věda, především věda! My se dohodneme, že? Čestné slovo, dostanete všecko
zpátky. Tak.“
Prokop mlčel, ohromen tímto přívalem slov, zatímco pan Carson házel rukama a
kroužil po pracovně náramně rozradován. „Všecko, všecko jsem vám schoval,“
mlel jaře. „Každou třísku z podlahy. Roztříděno, uloženo, s vinětou, pod
pečetí. Haha, mohl jsem se vším ujet, že? Ale já jsem poctivec, pane. Všecko
vrátím. Musíme se domluvit. Ptejte se na Carsona. Rodilý Dán, dříve docent v
Kodani. Taky jsem dělal vědu, božskou vědu. Jak to řekl Schiller? Dem einen
ist sie – ist sie – Už nevím, ale je to něco o vědě; švanda, že? Nu, ještě mi
neděkujte. Až později. Tak.“
Prokopovi sice ani nenapadlo děkovat, ale pan Carson zářil jako šťastný
dobrodinec. „Na vašem místě,“ drmolil nadšeně, „na vašem místě bych si zařídil
–“
„Kde je teď Tomeš?“ pře rušil ho Prokop.
Pan Carson vysunul zkoumavý pohled. „Nu,“ vycedil obezřele, „my o něm víme. Eh
co,“ obrátil hbitě. „Zařídíte si… zařídíte si největší laboratoř světa.
Nejlepší přístroje. Světový ústav destruktivní chemie. Máte pravdu, katedra je
hloupost. Odříkávat staré věci, no ne? Škoda času. Zařiďte si to po
amerikánsku. Ohromný ústav, brigáda asistentů, všechno, co chcete. A o peníze
se nemusíte starat. Punktum. Kde snídáte? Já bych vás ohromně rád pozval.“
„Co vlastně chcete?“ vydralo se z Prokopa.
Tu sedl pan Carson na kavalec vedle něho, vzal ho nesmírně vřele za ruku a
povídal najednou docela jiným hlasem: „Jen se neplašte. Můžete vydělat celou
hromadu miliónů.“


XVII.

Prokop s úžasem vzhlédl na pana Carsona. Kupodivu, teď už to nebyla ta
mopsličí tvář lesknoucí se blahem; všecko zvážnělo a zpřísnělo na horlivém
mužíkovi, oči zapadly pod těžkými víčky a jen chvílemi se zařízly matným
břitem. „Nebuďte blázen,“ pronesl důrazně. „Prodejte nám Krakatit, a je to.“
„Jak vůbec víte…,“ zahučel Prokop.
„Všecko vám povím. Čestné slovo, všecko. Byl u nás pan Tomeš. Přinesl patnáct
deka a formuli. Bohužel nepřinesl taky postup. Ani on, ani naši chemikové
dosud na to nepřišli, jak to dostat dohromady. Nějaký trik, že?“
„Ano.“
„Hm. Třeba se na to přijde i bez vás.“
„Nepřijde.“
„Pan Tomeš… něco o tom ví, ale dělá s tím tajnosti. Pracoval u nás při
zamčených dveřích. Je hrozně špatný chemik, ale je chytřejší než vy. Aspoň
nežvaní o tom, co ví. Proč jste mu to říkal? Neumí nic, jen pumpovat zálohy.
Měl jste přijít sám.“
„Já ho k vám neposlal,“ bručel Prokop.
„Aha,“ spustil pan Carson, „ohromně zajímavé. K nám přišel ten váš pan Tomeš
–“
„Kam vlastně?“
„K nám. Továrny v Balttin. Znáte?“
„Neznám.“
„Zahraniční podnik. Báječně moderní. Pokusná laboratoř s novými třaskavinami.
Děláme keranit, metylnitrát, žlutý prach a takové věci. Hlavně armádní, víte?
Tajné patenty. Vy nám prodáte Krakatit, co?“
„Ne. A Tomeš je tam u vás?“
„Aha, pan Tomeš; počkejte, to je švanda. Tak tedy k nám přijde a povídá: Tohle
je odkaz mého přítele, geniálního chemika Prokopa. Umřel mně v náruči a
posledním dechem, haha, mně svěřil, hahaha, ohromné, co?“
Prokop se jen křivě usmál. „A je Tomeš dosud… v Balttinu?“
„Počkejte. To se rozumí, nejdřív jsme ho zadrželi… jako špióna. K nám jich
chodí spousta, víte? A ten prášek, Krakatit, jsme dali přezkoušet.“
„Výsledek?“
Pan Carson zvedl ruce k nebi. „Bá-báječný!“
„Jaká je detonační rychlost? Jaké jste našli Q? Jaké t? Čísla!“
Pan Carson spustil ruce, až to pláclo, a vyvalil užasle oči: „Člověče, jakápak
čísla! První pokus… padesát procent škrobu… a crusher gauge se roztrhl na
střepy; jeden inženýr a dva laboranti… taky na střepy. Věřil byste? Pokus
číslo dvě: Trauzlův blok, devadesát procent vazelíny, a bum! sebralo to
střechu a jeden dělník zabit; z bloku zůstal jen škvarek. Tak se do toho
pustili vojáci; smáli se nám… že to umíme jako… vesnický kovář. Dali jsme jim
trochu; nacpali to do dělové hlavně, s rozemletým dřevěným uhlím. Ohromný
výsledek. Sedm kanonýrů i se setníkem… Jednu nohu pak našli tři kilometry
daleko. Za dva dny dvanáct mrtvých, tu máte čísla, haha! Báječné, co?“
Prokop chtěl něco říci, ale spolkl to. Dvanáct mrtvých za dva dny, u čerta!
Pan Carson si hladil kolena a zářil. „Třetí den jsme si dali pokoj. Víte, dělá
to špatný dojem, když… je mnoho takových případů. Dali jsme jen flegmatizovat
Krakatit… asi tři decigramy… v glycerínu a podobně. Prase laborant nechal asi
špetku volně ležet, a v noci, když byla laboratoř zamčena –“
„– to vybuchlo,“ vyhrkl Prokop.
„Ano. V deset třicet pět. Laboratoř byla na třísky, krom toho asi dva objekty…
Vzalo to s sebou nějaké tři tuny metylnitrátu Probst – Zkrátka asi šedesát
mrtvých, no. To se ví, náramné vyšetřování a kdesi cosi. Ukázalo se, že nikdo
v laboratoři nebyl, že to muselo patrně vybuchnout –“
„– samo od sebe,“ doplnil Prokop sotva dýchaje.
„Ano. Vám také?“
Prokop ponuře kývl.
„Tak vidíte,“ řekl pan Carson rychle. „Není to k ničemu. Tuze nebezpečná věc.
Prodejte nám to, a je to, máte to z krku. Co byste s tím dělal?“
„A co byste s tím dělali vy?“ vycedil Prokop.
„My už… my jsme na to zařízeni. Božínku, pár těch mrtvých – Ale vás by byla
škoda.“
„Ale Krakatit v porcelánové krabici nevybuchl,“ mínil Prokop úporně
přemýšleje.
„Chválabohu ne. Kdepak!“
„A bylo to v noci,“ přemýšlel Prokop dál.
„V deset třicet pět. Přesně.“
„A… ta špetka Krakatitu ležela na zinkovém… na kovovém plechu,“ tvrdil Prokop
dále.
„Ten na to nemá vliv,“ vybleptl mužík trochu zmaten, kousl se do rtu a jal se
přecházet po laboratoři. „Bylo to… bylo to asi jen okysličování,“ zamlouval to
po chvíli. „Nějaký chemický proces. Směs s glycerínem taky nevybuchla.“
„Protože není vodivá,“ zamumlal Prokop. „Nebo nemůže ionizovat, já nevím.“
Pan Carson se nad ním zastavil s rukama na zádech. „Vy jste moc chytrý,“ řekl
uznale. „Musíte dostat mnoho peněz. Tady je vás škoda.“
„Je Tomeš pořád v Balttinu?“ ptal se Prokop, vší silou se přemáhaje, aby to
vyznělo lhostejně.
Panu Carsonovi to nějak blýsklo pod brejlemi. „Máme ho na očích,“ řekl
vyhýbavě. „Sem se už jistě nevrátí. Přijeďte k nám… třeba ho najdete, když –
tak – tuze – chcete,“ slabikoval důrazně.
„Kde je?“ opakoval Prokop tvrdohlavě, dávaje najevo, že jinak nemluví.
Pan Carson zamával rukama jako pták. „No, utekl,“ dodával na Prokopův
nechápavý pohled.
„Utekl?“
„Vypařil se. Špatně hlídán, tuze chytrý. Zavázal se, že sestrojí celý
Krakatit. Zkoušel to… asi šest neděl. Stál nás hrozné peníze. Pak zmizel,
lump. Nevěděl si asi rady, co? Neumí nic.“
„A kde je?“
Pan Carson se naklonil k Prokopovi. „Lump. Teď nabízí Krakatit jinému státu.
Přitom jim přinesl taky náš metylnitrát, ten taškář. Sedli mu na lep, teď dělá
u nich.“
„Kde?“
„Nesmím říci. Na mou čest, nesmím. A když nám pláchl, jel jsem, haha,
navštívit váš hrob. Pieta, co? Geniální chemik, a nikdo ho tady nezná. To byla
práce, člověče. Musel jsem inzerovat jako blbec. To se ví, že si toho všimli…
ti druzí, víte? Rozumíte mi?“
„Ne.“
„Tak se pojďte podívat,“ řekl pan Carson čile a zamířil k protější stěně.
„Tady,“ řekl a ťukal na prkno.
„Co je?“
„Kulka. Někdo tu byl.“
„A kdo po něm střelil?“
„No já přece. Kdybyste byl sem lezl… oknem… takhle před čtrnácti dny, byl by
vás třeba někdo… moc šeredně vzal na mušku.“
„Kdo?“
„To je jedno, ten nebo onen stát. Tady si, holenku, podávaly dvéře tuze velké
mocnosti. A vy jste zatím někde, haha, chytal ryby, co? Báječný chlapík! Ale
poslyšte, drahoušku,“ řekl najednou starostlivě, „neračte raději chodit sám.
Nikdy a nikde, rozumíte?“
„Nesmysl!“
„Počkejte. Žádný granátník. Velmi nenápadní lidé. Dnes se to dělá… náramně
diskrétně.“ Pan Carson se zastavil u okna a bubnoval na sklo. „Nemáte ponětí,
co jsem na svůj inzerát dostal dopisů. Asi šest Prokopů se hlásilo… Pojďte se
honem podívat!“
Prokop přistoupil k oknu. „Co je?“
Pan Carson jen ukázal krátkým prstem na silnici. Motal se tam na velocipédu
nějaký mládenec v zoufalém zápase s rovnováhou, přičemž každé kolo jevilo
umíněnou náklonnost jet jiným směrem. Pan Carson tázavě pohlédl na Prokopa.
„Učí se asi jezdit,“ mínil Prokop nejistě.
„Náramný nešika, že?“ řekl pan Carson a otevřel okno. „Bob!“
Mladík na kole se zastavil jako přibitý: „Yessr.“
„Go to the town for our car!“
„Yessr.“ A přišlápnuv pedály svištěl mladý cyklista k městu.
Pan Carson se obrátil od okna. „Ir. Velrni obratný hoch. Co jsem chtěl říci?
Aha. Tedy asi šest Prokopů se mi hlásilo – schůzky na různých místech, zejména
v noci – švanda, že? Přečtěte si tenhle lístek.“
„Přijďte zítra v deset večer do mé laboratoře, ing. Prokop,“ četl Prokop jako
ve snu. „Ale vždyť je to… bezmála… mé písmo!“
„Tak vidíte,“ zubil se pan Carson. „Holenku, tady je horká půda. Prodejte to,
ať máte pokoj!“
Prokop zavrtěl hlavou.
Pan Carson na něm spočinul těžkým, neodbytným pohledem. „Můžete žádat…
řekněme… dvacet miliónů. Prodejte nám Krakatit.“
„Ne.“
„Dostanete všecko zpátky. Dvacet miliónů. Člověče, prodejte to!“
„Ne,“ řekl Prokop těžce. „Nechci mít co dělat… s vašimi válkami. Nechci.“
„Co máte tady? Geniální chemik a… bydlí v prkenné boudě! Krajani! Já to
neznám. Velký člověk nemá žádné krajany. Nekoukejte na nic! prodejte to a –“
„Nechci.“
Pan Carson strčil ruce do kapes a zívl. „Války! Myslíte, že jim zabráníte?
Pche! Prodejte a nestarejte se k čemu. Vy jste učenec… co je vám po ostatním?
Války! Jděte, nebuďte směšný. Pokud mají lidé nehty a zuby –“
„Neprodám,“ drtil Prokop mezi zuby.
Pan Carson pokrčil rameny. „Jak chcete. Najdeme si to sami. Nebo to najde
Tomeš. Taky dobře.“
Bylo chvíli ticho. „Mně je to jedno,“ ozval se pan Carson. „Je-li vám to
milejší, pojedeme s tím do Francie, do Anglie, kam chcete, třeba do Číny. My
oba, víte? Tady by nám to nikdo nezaplatil. Byl byste osel, kdybyste to prodal
za dvacet miliónů. Spolehněte se na Carsona. Tak co?“
Prokop rozhodně zavrtěl hlavou.
„Charakter,“ prohlásil pan Carson uznale. „Všecka čest. To se mně ohromně
líbí. Poslyšte, vám to řeknu. Naprosté tajemství. Ruku na to.“
„Neptám se po vašich tajemstvích,“ bručel Prokop.
„Bravo. Diskrétní člověk. Můj typ, pane.“


XVIII.

Pan Carson si sedl a zapálil si velmi tlusté cigáro, načež usilovně přemítal.
„Tjaja,“ řekl po chvíli. „Tak vám to taky vybuchlo. Kdy to bylo? Datum.“
„… Nevím už.“
„Den v týdnu?“
„… Nevím. Myslím… dva dny po neděli.“
„Tedy v úterý. A v kolik hodin?“
„Asi… po desáté večer.“
„Správně.“ Pan Carson zamyšleně vyfukoval kouř. „Nám to poprvé vybuchlo… jak
vy se račte vyjadřovat, ,samo od sebe‘… v úterý v deset třicet pět. Viděl jste
přitom něco?“
„Ne. Já jsem spal.“
„Aha. Taky to vybuchuje v pátek, kolem půl jedenácté. V úterý a v pátek. My
jsme to zkoušeli,“ vysvětloval na Prokopův vyjevený pohled. „Nechali jsme
volně ležet miligram Krakatitu a hlídali jsme to ve dne v noci. Vybuchovalo to
v úterý a v pátek, o půl jedenácté. Sedmkrát. Jednou taky v pondělí, v deset
dvacet devět. Tak.“
Prokop se omezil na to, že tiše žasnul.
„To proběhne Krakatitem taková modrá jiskra,“ dodával pan Carson zahloubaně,
„a pak to exploduje.“
Bylo tak ticho, že Prokop slyšel tikání Carsonových hodinek.
„Tjaja,“ vzdychl pan Carson a projel si zoufale zrzavý kartáč vlasů.
„Co to znamená?“ vyrazil Prokop.
Pan Carson jen trhl rameny. „A co vy,“ řekl, „co vy jste si vlastně myslel,
když vám to… ,samo od sebe‘… vybuchlo? Nu?“
„Nic,“ uhýbal Prokop. „Nepřemýšlel jsem o tom… tak dalece.“
Pan Carson zabručel něco urážlivého.
„Totiž,“ opravoval se Prokop, „tehdy mě napadlo, že to dělají… třeba…
elektromagnetické vlny.“
„Aha. Elektromagnetické vlny. My jsme si to taky mysleli. Výborná myšlenka,
jenže pitomá. Bohužel docela pitomá. Tak.“
Nyní si Prokop opravdu nevěděl rady.
„Předně,“ uvažoval pan Carson, „bezdrátové vlny neběhají po světě jenom v
úterý a v pátek o půl jedenácté, že? A za druhé, člověče, to si můžete myslet,
že jsme to s nimi hned vyzkoušeli. S krátkými, s dlouhými, se všemi možnými. A
váš Krakatit si z nich nedělal tohle,“ ukazoval na nehtu něco mizivě
nepatrného. „Ale v úterý a v pátek… o půl jedenácté… si umane ,sám od sebe‘
explodovat. A víte co ještě?“
Prokop to ovšem nevěděl.
„Ještě tohle. Od nějaké doby… asi půl roku nebo tak… mají evropské bezdrátové
stanice děsný dopal. Víte, něco jim ruší hovory. Docela pravidelně. Náhodou…
vždycky v úterý a v pátek od půl jedenácté v noci. Pravíte?“
Prokop nepravil nic, jen si mnul čelo.
„Nu ano, v úterý a v pátek. Říkají tomu smazané hovory. Začne to telegrafistům
práskat do uší, a tu to máme; hoši se z toho mohou zbláznit. Trapné, co?“ Pan
Carson si sundal brejle a jal se je čistit s velkými okolky. „Nejdřív… nejdřív
mysleli, že to jsou nějaké magnetické bouře či co. Ale když viděli, že to
úřaduje… pravidelně… v úterý a v pátek… Zkrátka Marconi, TSF, Transradio a
nějaká ministerstva pošt a maríny, obchodu, vnitra a já nevím čeho všeho
vyplatí dvacet tisíc liber chytrákovi, který tomu přijde na kobylku.“ Pan
Carson si nasadil zas brejle a vesele vykoukl. „Myslí se, že existuje nějaká
nezákonná stanice, která se baví tím, že v úterý a v pátek smazává hovory.
Konina, že? Soukromá stanice, která by jen tak pro švandu posílala nejmíň sto
kilowattů do vzduchu! Fi!“ Pan Carson si odplivl.
„V úterý a v pátek,“ ozval se Prokop, „tedy současně… zároveň…“
„Divné, že?“ šklebil se pan Carson. „Já to mám, panečku, napsáno: V úterý dne
toho a toho v deset třicet pět a několik vteřin porucha na všech stanicích od
Revalu a tak dále. A nám v tu samou vteřinu ,sama od sebe‘, jak vy račte
říkat, exploduje jistá část vašeho Krakatitu. Eh? Co? Detto příští pátek v
deset dvacet sedm a několik vteřin porucha a výbuch. Item příští úterý v deset
třicet výbuch a porucha. A tak dále. Výjimečně, jaksi proti programu taky
jednou porucha v pondělí v deset dvacet devět třicet sekund. Detto výbuch.
Klape to na vteřinu. Osmkrát v osmi případech. Špás, že? Co o tom soudíte?“
„N… nevím,“ mumlal Prokop.
„Tak teda ještě něco,“ spustil pan Carson po delším hloubání. „Pan Tomeš u nás
pracoval. Neumí nic, ale něco ví. Pan Tomeš si dal do laboratoře postavit
vysokofrekvenční generátor a zamkl nám dvéře před nosem. Lump. Jakživ jsem
neslyšel, že by se v obyčejné chemii pracovalo s vysokofrekvenčními mašinami,
co? Co byste řekl?“
„Nu… ovšem,“ uhýbal Prokop s neklidným pohledem na svůj vlastní zánovní
agregát postavený v koutě.
Pan Carson chytl čile tento pohled. „Hm,“ řekl, „taky tu máte takovou hračku,
že? Pěkný transformátorek. Co vás stál?“
Prokop se zamračil, ale pan Carson počal tiše zářit. „Tak si myslím,“ povídal
s rostoucí blažeností, „že by to byla báječná věc, kdyby se povedlo v nějaké
hmotě… dejme tomu pomocí vysoké frekvence… v jiskrovém poli nebo jak…
rozkmitat, rozviklat, uvolnit vnitřní strukturu tak, že by stačilo ťuknout z
dálky… nějakými vlnami… výboji… oscilacemi nebo čertví čím, aby se ta hmota
rozpadla, co? Bum! Na dálku! Co tomu říkáte?“
Prokop neřekl nic, a pan Carson cucaje s rozkoší cigáro se na něm jen pásl.
„Já nejsem elektrikář, víte?“ začal po chvíli. „Mně to vysvětloval jeden
učenec, ale ať se propadnu, jestli jsem to pochopil. Ten chlap šel na mne s
elektrony, ionty, elementárními kvanty a já ani nevím, jak to jmenoval; a
nakonec to katedrové světlo prohlásilo, že to zkrátka a dobře vůbec není
možno. Člověče, vy jste si dal! Udělal jste něco, co podle světové autority
není možno…“
„Tak já jsem si to vyložil sám,“ pokračoval, „jen tak ševcovsky. Někdo si
dejme tomu vezme do hlavy… udělat vratkou sloučeninu… z jisté olovnaté soli.
Dotyčná sůl je neřád; ne a ne se slučovat, že? Tak ten chemik zkouší všechno
možné… jako blázen; a tu si dejme tomu vzpomene, že v lednovém čísle The
Chemist bylo povídání o tom, že dotyčná flegmatická sůl je báječný koherer…
detektor pro elektrické vlny. Dostane nápad. Pitomý a geniální nápad, že by
snad mohl tu zatracenou sůl přivést elektrickými vlnami do lepší nálady, ne?
povzbudit ji, roztancovat ji, natřást ji jako peřinu, že? Tja, nejlepší nápady
dostane člověk z blbosti. Tak tedy sežene takový komický transformátorek a dá
se do toho; co prováděl, to je zatím jeho tajemství, ale koneckonců… dostane
hledanou sloučeninu. Ať mne čert, dostane ji. Nejspíš to nějak slepil tou
oscilací. Člověče, já se budu muset na stará kolena učit fyzice; říkám boty,
že?“
Prokop zabručel něco docela nesrozumitelného.
„To nevadí,“ prohlásil pan Carson spokojeně. „Jen když to zatím drží
dohromady; já jsem pitomec, já si představuju, že to dostalo nějakou
elektromagnetickou strukturu nebo co. Kdyby se nějak porušila, tak… se to
rozpadne, že? Naštěstí asi deset tisíc řádných radiostanic a několik set
nezákonných udržuje v naší pozemské atmosféře takové elektromagnetické klima,
takovou eh eh oscilační lázeň, která jde zrovna k duhu té struktuře. A tak to
drží dohromady…“
Pan Carson se maličko zamyslil. „A teď,“ začal zase, „teď si představte, že
nějaký ďábel nebo holomek na tomto světě má prostředek, kterým může dokonale
rušit elektrické vlny. Prostě je smazat či co. Představte si, že to – bůhsámví
proč – tropí pravidelně v úterý a v pátek o půl jedenácté v noci. V tu minutu
a vteřinu se poruší na tomto světě bezdrátové spojení; ale v tu minutu a
vteřinu se nejspíš něco stane taky v té… labilní sloučenině, pokud není zrovna
izolována… dejme tomu v… v porcelánové krabici; něco se v ní poruší… jaksi v
ní lupne, a ona se… ona se…“
„… rozpadne,“ vyhrkl Prokop.
„Ano, rozpadne se. Exploduje. Zajímavé, co? Jeden učený pán mně to vysvětloval
– hrome, jak to říkal? že – že prý –“
Prokop vyskočil a popadl pana Carsona za kabát. „Poslyšte,“ koktal hrozně
rozčilen, „kdyby se tedy… Krakatit… roztrousil dejme tomu tady… nebo kdekoliv…
prostě po zemi…“
„… tedy to nejbližšího úterku nebo pátku o půl jedenácté vyletí do povětří.
Tja. Člověče, neuškrťte mne.“
Prokop pustil pana Carsona a přebíhal po světnici hryže si hrůzou prsty. „To
je jasné,“ mručel, „to je jasné! Nikdo nesmí Krakatit vy-vyrá–“
„Krom pana Tomše,“ namítl Carson skepticky.
„Dejte mi pokoj,“ utrhl se Prokop. „Ten na to nepřijde!“
„Nu,“ mínil pan Carson s pochybami, „já nevím, kolik jste mu toho řekl.“
Prokop se zastavil jako vražen do země. „Představte si,“ kázal horečně,
„představte si dejme tomu… vvválku! Kdo má v rukou Krakatit, může… může…
kdykoli chce…“
„Zatím jen v úterý a v pátek.“
„… vyhodit do povětří… celá města… celé armády… a všecko! Stačí… stačí jen
roz-trousit – Dovedete si to představit?“
„Dovedu. Báječně.“
„A proto… v zájmu světa… nikdy… nedám nikdy!“
„V zájmu světa,“ bručel pan Carson. „Víte, v zájmu světa by hlavně bylo přijít
na kloub té – té –“
„Čemu?“
„Té zatracené stanici anarchistů.“


XIX.

„Vy tedy myslíte,“ koktal Prokop, „že… že snad…“
„My tedy víme,“ přerušil ho Carson, „že jsou na světě neznámé vysílací a
přijímací stanice. Že si pravidelně v úterý a v pátek říkají nejspíš něco
jiného než dobrou noc. Že disponují nějakými nám dosud neznámými silami,
výboji, oscilacemi, jiskrami, paprsky nebo čím zatraceným a… a zkrátka
nezachytitelným. Anebo nějakými antivlnami, antioscilacemi nebo jak to k čertu
nazvat, něčím, co prostě přerušuje nebo smazává naše vlny, rozumíte?“ Pan
Carson se rozhlédl po laboratoři. „Aha,“ řekl a popadl kus křídy. „Buď je to
takhle,“ povídal rýsuje na podlaze asi půlloketní šipku křídou, „nebo takhle,“
a přitom pokřídoval celý kus prkna a do toho vmázl nasliněným prstem temnou
čáru. „Tak nebo tak, rozumíte? Pozitivně nebo negativně. Buď posílají nějaké
nové vlny do našeho média, nebo vrhají do našeho kmitajícího, skrznaskrz
protelegrafovaného prostředí umělé pauzy, chápete? Obojím způsobem se dá
pracovat… bez naší kontroly. Obojí je dosud… technicky i fyzikálně… naprostá
záhada. Zatraceně,“ křikl pan Carson v náhlém vzteku a praštil křídou, až se
rozstříkla, „tohle je příliš! Posílat neznámými silami tajné depeše záhadnému
adresátovi! Kdo tohleto dělá? Co teda myslíte?“
„Třeba Marťané,“ nutil se Prokop zažertovat; ale opravdu, nebylo mu do žertu.
Pan Carson po něm vražedně vykoukl, ale pak se rozřehtal přímo koňsky. „Dejme
tomu, že Marťané. Bájecně! Dejme tomu, mistře. Ale dejme tomu, že spíš někdo
na zemi. Dejme tomu, že nějaká pozemská moc rozesílá své tajné instrukce.
Dejme tomu, že má tuze vážné příčiny vyhnout se lidské kontrole. Dejme tomu,
že je nějaká… mezinárodní služba nebo organizace nebo čertví co, a že to má k
dispozici neznámé síly, tajemné stanice a kdesi cosi. V každém případě… V
každém případě má lidstvo právo zajímat se o ty tajemné depeše, ne? Ať jsou z
pekla nebo z Martu. Je to prostě… zájem lidské společnosti. Můžete si myslet…
Nu, nejspíš, pane, nejspíš to nebudou radiodepeše o Červené karkulce. Tak.“
Pan Carson se rozběhl po světnici. „Předně je jisto,“ uvažoval nahlas, „že
dotyčná vysílací stanice… je někde ve střední Evropě, přibližně uprostřed
okruhu těch poruch, že ano? Je poměrně slabá, ježto hovoří jenom v noci.
Saprlot, tím hůř; Eiffelka nebo Nauen se najde lehko, že? Pane,“ zvolal náhle
a stanul jako přibitý, „považte, že v samém pupku Evropy existuje a chystá se
něco divného. Je to rozvětvené, má to své úřady, udržuje to tajné spojení; má
to technické prostředky nám neznámé, tajemné síly, a abyste věděl,“ zařval pan
Carson, „má to Krakatit! Tak!“
Prokop vyskočil jako blázen. „Jak-jakže?“
„Krakatit. Devět deka a pětatřicet decigramů. Všecko, co nám zbylo.“
„Co jste s ním dělali?“ rozzuřil se Prokop.
„Pokusy. Šetřili jsme s ním jako… jako s nějakou ctností. A jednoho večera –“
„Co?“
„Zmizel. I s porcelánovou pikslou.“
„Ukraden?“
„Ano.“
„A kdo – kdo –“
„Samozřejmě Marťané,“ šklebil se pan Carson. „Bohužel pozemským
prostřednictvím jednoho laboranta, který se nám ztratil. Ovšem že s
porcelánovou krabičkou.“
„Kdy se to stalo?“
„Nu, zrovna než mne poslali sem, za vámi. Vzdělaný člověk, Sasík. Ani prášek
nám nezůstal. Víte, proto jsem přijel.“
„A vy myslíte, že to přišlo do rukou těm… těm neznámým?“
Pan Carson jen frknul.
„Jak to víte?“
„Já to tvrdím. Poslyšte,“ řekl pan Carson houpaje se na krátkých nožkách,
„vypadám jako strašpytel?“
„N-ne.“
„Tak vám řeknu, že z tohohle mám strach. Na mou čest, plné kalhoty. Krakatit…
je zatracená věc; ta neznámá stanice je ještě horší; ale kdyby přišlo obojí do
jedněch rukou, pak… máúcta. Pak si pan Carson složí kufřík a pojede k
tasmanským lidojedům. Víte, já bych nerad viděl konec Evropy.“
Prokop si jen drtil ruce mezi koleny. „Kriste, kriste,“ šeptal pro sebe.
„Nu ano,“ mínil pan Carson. „Divím se jenom, víte, že dosud nevylítlo do
vzduchu… něco velikého. Může se jen stisknout kdesi jakási páka… a pár tisíc
kilometrů daleko – prásk! A je to. Nač ještě čekají?“
„To je jasné,“ ozval se Prokop zimničně. „Krakatit se nesmí dát z ruky. A
Tomeš, Tomšovi se musí zabránit…“
„Pan Tomeš,“ namítl Carson rychle, „prodá Krakatit samému ďáblu, když mu to
zaplatí. V této chvíli je pan Tomeš jedno z největších světových nebezpečí.“
„U čerta,“ mručel Prokop zoufale, „co tedy dělat?“
Pan Carson vydržel delší pauzu. „To je jasné,“ řekl konečně. „Krakatit se musí
dát z ruky.“
„Nnne! Nikdy!“
„Dát z ruky. Prostě proto, že to je… dešifrovací klíč. Nejvyšší čas, pane. U
všech všudy, dejte to, komu chcete, ale jen žádné dlouhé cavyky. Dejte to
Švýcarům nebo Svazu starých panen nebo čertově babičce; budou nad tím sedět
půl roku, než pochopí, že nejste blázen. Nebo to dejte nám. V Balttinu už
postavili takovou mašinu, víte, přijímací aparát. Představte si… nekonečně
rychlé výbuchy mikroskopických částeček Krakatitu. Zapalovačem je neznámy
proud. Jakmile jej tam někde zapnou, spustí celá věc: trrr ta ta trrr trrr ta
trrr ta ta ta. A je to. Dešifrovat, a hotovo. Jen mít Krakatit!“
„Nedám,“ dostal ze sebe Prokop pokrytý studeným potem. „Já vám nevěřím. Vy
byste… dělali Krakatit sami pro sebe.“
Pan Carson jen trhl koutkem úst. „Nu,“ řekl, „jde-li jen o to… Můžeme vám na
to svolat Svaz národů, Světovou poštovní unii, Eucharistický kongres nebo
které čerty ďábly chcete. Aby tedy měla dušička pokoj. Já jsem Dán a kašlu na
politiku. Tak. A vy dáte Krakatit do rukou mezinárodní komisi. Co je vám?“
„Já… já byl dlouho nemocen,“ omlouval se Prokop bledna smrtelně. „Není mi…
dosud… dobře. A… a… dva dny jsem nejedl.“
„Slabost,“ děl pan Carson, přisedl k němu a vzal jej kolem krku. „Přejde hned.
Pojedete do Balttinu. Velmi zdravá krajina. Pak můžete jet za panem Tomšem.
Budete mít peněz jako slupek. Budete big man. Nu?“
„Ano,“ šeptal Prokop jako malé dítě a nechal se mírně kolébat.
„Tak tak. Přílišné napětí, víte? To nic není. Hlavní… hlavní je budoucnost.
Člověče, vy jste prožil bídy, co? Jste chlapík. Vida, už je líp.“ Pan Carson
zamyšleně kouřil. „Hrozně ohromná budoucnost. Dostanete spoustu peněz. Mně
dáte deset procent, že? Je to už tak mezinárodní zvyk. Carson taky potřebuje…“
Před barákem zatroubilo auto.
„Nu sláva,“ oddychl si pan Carson, „tady je vůz. Tak, pane, jedeme.“
„Kam?“
„Zatím se najíst.“


XX.

Den nato se probudil Prokop se strašně těžkou hlavou a nemohl zprvu pochopit,
kde vlastně je; čekal, že uslyší kvokání slepic nebo hlaholné vyštěkávání
Honzíkovo. Pomalu si uvědomoval, že už není v Týnici; že leží v hotelu, kam
jej pan Carson dopravil opilého do bezvědomí, nalitého, řvoucího jako zvíře;
ale teprve když si pustil na hlavu proud studené vody, upamatoval se na celý
včerejšek a byl by se propadl hanbou.
Už při obědě pili, ale jen málo, jen tolik, že byli oba náramně rudí a vozili
se pak autem někde po sázavských či jakých lesích, aby se jim to vypařilo z
hlavy; přitom Prokop bez ustání žvanil, zatímco pan Carson žmoulal cigáro a
kýval. „Budete big man.“ Big man, big man dunělo Prokopovi v hlavě jako zvon;
hrome, kdyby mne v této slávě viděla… ta jistá se závojem! Nafukoval se před
Carsonem k prasknutí; ale ten jenom pokyvoval hlavou jako mandarín a ještě
rozdmychoval jeho zběsilou pýchu. Prokop div nevyletěl z auta samou
horečností; vykládal podle všeho, jak si představuje světový ústav
destruktivní chemie, socialismus, manželství, výchovu dětí a jiné nesmysly.
Ale večer to začalo doopravdy. Kde všude pili, to ví bůh; bylo to hrozné,
Carson platil za všechny neznámé, rudý, leskly, s kloboukem naraženým, zatímco
nějaké holky tancovaly, kdosi rozbíjel sklenice a Prokop vzlykaje zpovídal se
Carsonovi ze své strašlivé lásky k té, jíž nezná. Při této vzpomínce se Prokop
studem a bolestí chytal za hlavu.
Pak ho, křičícího „Krakatit“, vsadili do auta. Ďas ví, kam ho vezli; uháněli
po nekonečných silnicích, vedle Prokopa poskakoval rudý ohýnek, to byl asi pan
Carson se svým cigárem, a škytal „rychleji, Bobe“ či co. Najednou v jakémsi
ohybu proti nim vyjela dvě prudká světla, pár hlasů zavylo, auto sebou smýkalo
stranou a Prokop letěl hubou po trávě, čímž se vzpamatoval tak dalece, že
začal vnímat. Několik hlasů se zběsile hádalo a vyčítalo si opilství, pan
Carson strašlivě láteřil a bručel „teď musíme zpátky“, načež Prokopa jakožto
nejtíže raněného s tisícerými ohledy naložili do toho druhého auta, pan Carson
sedl k němu a jelo se zpátky, zatímco Bob zůstal u porouchaného vozu. V polou
cestě začal těžce raněný zpívat a povykovat a před Prahou pocítil novou žízeň.
Museli s ním projít ještě několik lokálů, než ho umlčeli.
S mračným znechucením studoval Prokop v zrcadle svou odřenou tvář. Z té trapné
podívané ho vyrušil vrátný hotelu, jenž mu – s patřičnými omluvami – přinášel
k vyplnění přihlašovací list. Prokop vyplnil své nacionále a doufal, že tím je
věc odbyta; ale sotva si vrátný přečetl jeho jméno a stav, oživl náramně a
prosil Prokopa, aby teď neodcházel; že prý jeden pán z ciziny si vyžádal, aby
mu hned z hotelu zatelefonovali, kdyby se tam pan inženýr Prokop snad ráčil
ubytovat. Jestli tedy pan inženýr dovolí atd. Pan inženýr byl tak rozlícen na
sebe sama, že by byl dovolil i to, aby mu uřízli krk. Sedl si tedy a čekal,
trpně odevzdán ve své bolení hlavy. Za čtvrt hodiny tu byl vrátný zas a
odevzdával navštívenku. Bylo na ní:

SIR REGINALD CARSON
Col. B. A., M. R. A., M. P., D. S. etc.
President of Marconi’s Wireless Co
LONDON

„Sem s ním,“ kázal Prokop, a v hloubi duše se nesmírně divil, proč mu chlapík
Carson neřekl už včera své ohromující hodnosti a proč dnes přichází s takovými
okolky; mimoto byl trochu zvědav, jak vypadá pan Carson po včerejší bohopusté
noci. Ale tu již vyvalil oči neuvěřitelně překvapen. Do dveří vcházel docela
neznámý pán, o dobrý loket větší než včerejší pan Carson.
„Very glad to see you,“ pronesl zvolna neznámý gentleman a poklonil se asi
tak, jako by byl telegrafní tyč. „Sir Reginald Carson,“ představil se a
ohlížel se po židli.
Prokop ze sebe vydal neurčitý zvuk a ukázal mu na židli. Gentleman pravoúhle
usedl a jal se obšírně svlékat velkolepé jelení rukavice. Byl to velmi dlouhý
a nesmírně vážný pán s koňskou tváří nažehlenou do přísných záhybů; v kravatě
ohromný indický opál, na zlatém řetízku antická kamej, ohromné nohy hráče
golfu, zkrátka každým coulem lord. Prokop tiše žasnul. „Tak prosím,“ ozval se
konečně, když už to trvalo nepřežitelně dlouho.
Gentleman neměl nijak naspěch. „Zajisté,“ začal posléze po anglicku, „zajisté
jste se podivil, když jste našel v novinách moje anonce. Předpokládám, že jste
inženýr Prokop, autor eh velmi zajímavých článků o explozívních látkách.“
Prokop mlčky přikývl.
„Velmi potěšen,“ řekl sir Carson nikterak nechvátaje. „Pátral jsem po vás v
jisté záležitosti vědecky velmi zajímavé a prakticky důležité pro naši
společnost, Marconi’s Wireless, jejímž prezidentem mám tu čest býti, neméně
než pro Mezinárodní unii pro bezdrátovou telegrafii, kterážto mi prokázala
nezaslouženou čest zvolivši mne svým generálním sekretářem. Zajisté se
divíte,“ pokračoval neudýchán tak dlouhou větou, „že tyto vážené společnosti
mne vysílají k vám, ačkoli vaše vynikající práce se pohybují na zcela jiném
poli. Dovolte.“ Na tato slova otevřel sir Carson svou krokodýlí aktovku a
vyňal nějaké papíry, blok a zlatou tužku.
„Asi po tři čtvrtě roku,“ začal pomalu a nasazoval si zlatý skřipec, aby se
podíval do svých papírů, „konstatují evropské bezdrátové stanice –“
„Promiňte,“ skočil mu do řeči Prokop nemoha se už ovládat, „tedy ty inzeráty
jste dával vy?“
„Zajisté. Tedy konstatují jisté pravidelné poruchy –“
„– v úterý a v pátek, vím. Kdo vám řekl o Krakatitu?“
„Byl bych k tomu došel sám,“ pronesl ctihodný lord poněkud káravě. „Well,
přeskočím bližší podrobnosti, předpokládaje, že jste do jisté míry informován
o našich nesnázích a o eh a –“
„– o tajné světové konspiraci, ne?“
Sir Carson vytřeštil bleděmodré oči. „Prosím za prominutí, o jaké konspiraci?“
„Nu, o těch záhadných nočních depeších, o tajemné organizaci, která je vysílá
–“
Sir Reginald Carson ho zarazil. „Fantazie,“ řekl s politováním, „čiré
fantazie. Já vím, nadhodily to dokonce Daily News, když naše společnost
vypsala onu poměrně značnou odměnu –“
„Vím,“ řekl rychle Prokop, obávaje se, aby se o ní pomalý lord nerozhovořil.
„Ano. Čirý nesmysl. Celá věc má jen obchodní pozadí. Někdo má zájem na tom,
aby dokázal nespolehlivost našich stanic, rozumíte? Chce podrýt veřejnou
důvěru. Bohužel naše receptory a – eh – koherery nemohou zjistit zvláštní druh
vln, kterými se toto rušení děje. A jelikož se nám dostalo zprávy, že jste v
držení jakési substance nebo chemikálie, která velmi, velmi pozoruhodně
reaguje na ony poruchy –“
„Od koho zprávy?“
„Od vašeho spolupracovníka, pana – eh – pana Tomese. Mister Tomes, že ano?“
Pomalý gentleman vylovil ze svých papírů nějaký dopis. „Dear Sir,“ četl s
jakousi námahou, „nalézám v novinách vypsání odměny et cetera. Jelikož se v
přítomné době nemohu vzdáliti z Balttinu, kde pracuji na jistém vynálezu, a
ježto věc tak velikého dosahu se nedá písemně vyřizovat, prosím, abyste nechal
v Praze vyhledat mého přítele a dlouholetého spolupracovníka Mr ing. Prokopa,
který má v držení nově vynalezenou látku, Krakatit, tetrargon jisté olovnaté
soli, jehož syntéza se provádí za specifických účinků vysokofrekvenčního
proudu. Krakatit reaguje, jak dokazují přesné experimenty, na neznámé rušivé
vlny silnou explozí; z čehož sám sebou plyne jeho rozhodující význam pro
výzkum řečených vln. Vzhledem k důležitosti věci předpokládám za sebe i za
svého přítele, že vypsaná odměna bude podstatně zvý-zvýšena –“ Sir Carson se
zakuckal. „To je celkem vše,“ řekl. „O odměně bychom si promluvili zvlášť.
Podepsán Mr Tomes v Balttinu.“
„Hm,“ řekl Prokop jat vážným podezřením, „že by takováhle soukromá…
nespolehlivá… fantastická zpráva stačila Marconiově společnosti –“
„Beg your pardon,“ namítal dlouhý pán, „dostalo se nám samozřejmě velmi
přesných zpráv o jistých pokusech v Balttinu –“
„Aha. Od jakéhosi saského laboranta, že?“
„Ne. Od našeho vlastního zástupce. Hned vám to přečtu.“ Sir Carson jal se
znovu lovit ve svých papírech. „Tady je to. ,Dear Sir, zdejším stanicím se
dosud nedaří překonati známé poruchy. Pokusy se zvýšenými vysílacími energiemi
selhaly naprosto. Dostalo se mi důvěrné, ale spolehlivé zprávy, že vojenský
ústav v Balttinu získal nějaké kvantum jisté látky –‘“
Zaklepáno. „Vstupte,“ řekl Prokop, a vešel sklepník s vizitkou: „Nějaký pán
prosí –“
Na vizitce stálo:

ING. CARSON, Balttin

„Ať vejde,“ kázal Prokop náhle rozjařen a naprosto nedbaje znamení protestu ze
strany sira Carsona.
Vzápětí vstoupil včerejší pan Carson s tváří velmi popleněnou nevyspáním a
hnal se k Prokopovi vydávaje zvuky radosti.


XXI.

„Počkejte,“ zarazil ho Prokop. „Dovolte, abych vás představil. Inženýr Carson,
sir Reginald Carson.“
Sir Carson sebou trhl, ale zůstal sedět s neporušenou důstojností; zato
inženýr Carson úžasem hvízdl a snesl se na židli jako člověk, kterému nohy
vypověděly službu. Prokop se opřel o dvéře a pásl se na obou pánech s
bezuzdnou zlomyslností. „Tak co?“ zeptal se konečně.
Sir Carson jal se skládati své papíry do aktovky. „Zajisté,“ řekl pomalu,
„bude lépe, navštívím-li vás jindy –“
„Jen račte zůstat,“ přerušil ho Prokop. „Prosím vás, pánové, nejste snad spolu
příbuzní?“
„Ba ne,“ ozval se inženýr Carson. „Spíš naopak.“
„Který z vás je tedy doopravdy Carson?“
Nikdo neodpověděl; bylo to trapné.
„Požádejte toho pána,“ řekl ostře sir Reginald, „aby vám ukázal své papíry.“
„Beze všeho,“ vysypal inženýr Carson, „ale až po panu předřečníkovi. Tak.“
„A kdo z vás inzeroval?“
„Já,“ prohlásil bez váhání inženýr Carson. „Můj nápad, pane. Konstatuju, že i
v našem oboru je neslýchanou špinavostí svést se zadarmo na cizím nápadu.
Tak.“
„Račte dovolit,“ obrátil se sir Reginald k Prokopovi se skutečnou mravní
nevolí, „to už je příliš. Jak by to bylo vypadalo, kdyby vycházel ještě jeden
inzerát s jiným jménem! Prostě jsem musel přijmout fakt, jak to tamten pán
udělal.“
„Aha,“ dorážel bojovně pan Carson, „a proto ten pán si přisvojil taky mé
jméno, víte?“
„Konstatuji prostě,“ ohradil se sir Reginald, „že tamten pán se naprosto
nejmenuje Carson.“
„Jak se tedy jmenuje?“ tázal se Prokop chvatně.
„… Přesně to nevím,“ vycedil opovržlivě lord.
„Carsone,“ obrátil se Prokop k inženýrovi, „a kdo je tenhle pán?“
„Konkurence,“ řekl s hořkým humorem pan Carson. „Je to ten pán, co mne
podvrženými listy chtěl vylákat na všelijaká místa. Nejspíš mne tam chtěl
seznámit s moc milými lidmi.“
„Se zdejší vojenskou policií, prosím,“ zamručel sir Reginald.
Inženýr Carson zle blýskl očima a varovně zakašlal: Prosím, o tomhle nemluvit!
sic –
„Chtějí si pánové navzájem ještě něco vysvětlit?“ šklebil se Prokop u dveří.
„Ne, nic už,“ řekl důstojně sir Reginald; doposud neuznal druhého Carsona ani
za hodna pohledu.
„Tak tedy,“ začal Prokop, „především vám děkuju za návštěvu. Za druhé mám
velikou radost, že Krakatit je v dobrých rukou, totiž v mých vlastních; neboť
kdybyste měli nejmenší naději dostat jej jinak, nebyl bych asi tak tuze
hledaná osoba, že? Za tuhle nedobrovolnou informaci jsem vám náramně vděčen.“
„Ještě nejásejte,“ bručel pan Carson. „Zbývá –“
„– on?“ řekl Prokop ukazuje na sira Reginalda.
Pan Carson zavrtěl hlavou. „Kdepak! ale neznámý třetí.“
„Odpusťte,“ mínil Prokop skoro uražen, „snad si nemyslíte, že vám něco věřím z
toho, co jste mi včera napovídal.“
Pan Carson s politováním pokrčil rameny. „Nu, jak chcete.“
„Dále a za třetí,“ pokračoval Prokop, „bych vás prosil, abyste mi řekli, kde
je teď Tomeš.“
„Ale vždyť jsem vám povídal,“ vyskočil pan Carson, „že tohle nesmím – Přijeďte
do Balttinu, a je to.“
„Tak vy, pane,“ obrátil se Prokop k siru Reginaldovi.
„Beg your pardon,“ pronesl dlouhý gentleman, „ale tohle nechám pro sebe.“
„Tedy za čtvrté vám kladu na srdce, abyste se tady navzájem nesnědli. Já zatím
půjdu –“
„– na policii,“ mínil sir Reginald. „Velmi správně.“
„Těší mne, že s tím souhlasíte. Odpusťte, že vás tu zatím zamknu.“
„Oh, prosím,“ řekl lord zdvořile, zatímco pan Carson se pokoušel zoufale
protestovat.
S velkou úlevou zamkl Prokop za sebou dvéře a ještě k nim postavil dva
sklepníky, načež běžel na blízké komisařství; neboť považoval za vhodno
poskytnout tam jakés takés vysvětlení. Ukázalo se, že věc není tak lehká;
poněvadž nemohl oba cizince nařknout aspoň z krádeže stříbrných lžiček nebo z
hraní makaa, měl velkou práci překonat pochybnosti policejního úředníka, který
ho patrně pokládal za blázna. Konečně – snad aby už měl pokoj – přidělil
Prokopovi civilního strážníka, osobnost velmi ošoupanou a mlčelivou. Když
dorazili do hotelu, našli oba sklepníky statečně vzepřené o dvéře za ohromného
shonu veškerého personálu. Prokop odemkl a civilní strážník zafrkav nosem
vstoupil klidně dovnitř, jako by si šel kupovat šle. Pokoj byl prázdný. Oba
páni Carsonové zmizeli.
Mlčelivá osobnost se jen omrkla a rovnou se ubírala ke koupelně, na kterou
Prokop dočista zapomněl. Bylo tam okno dokořán otevřené do světlíku, a v
protější straně vyražené okénko k záchodu. Mlčelivá osobnost zamířila k
záchodu. Ten ústil do jiné chodby, byl zamčen a klíč zmizel. Strážník
zakroutil v zámku paklíčem a otevřel: bylo tam prázdno, jen na sedadle klozetu
byly stopy nohou. Nemluvná osobnost vše zase zamkla a řekla, že sem pošle pana
komisaře.
Pan komisař, človíček velmi pohyblivý a slavný kriminalista, se dostavil velmi
brzo; ždímal z Prokopa dobré dvě hodiny, chtěje se mermomocí dozvědět, o čem
měl co jednat s oběma pány; zdálo se, že má velikou chuť zatknout aspoň
Prokopa, který upadal přes tu chvíli do hrozných rozporů ve vlastních
výpovědích, pokud se týkaly jeho styků s oběma cizinci. Potom vyslechl
vrátného a sklepníky a důtklivě vyzval Prokopa, aby se o šesté hodině dostavil
na policejní ředitelství; do té doby aby se raději z hotelu nehnul.
Zbytek dne strávil Prokop běhaje po pokoji a mysle s hrůzou na to, že bude asi
zavřen; neboť jaké může dát vysvětlení, když o Krakatitu pro živého boha nic
neřekne? Čertví jak dlouho může taková vyšetřovací vazba trvat; a tak místo
aby mohl hledat ji, tu neznámou v závoji… Prokop měl oči plné slz; cítil se
sláb a měkký, že se až styděl. Před šestou se však vyzbrojil vší svou
statečností a pustil se na policejní ředitelství.
Uvedli ho hned do kanceláře, kde byly tlusté koberce, kožená křesla a velká
krabice s doutníky (byla to kancelář policejního prezidenta). U psacího stolu
objevil Prokop obrovská, boxerská záda nakloněná nad papíry, záda, jež v něm
na prvý pohled budila hrůzu a pokoru. „Posaďte se, pane inženýre,“ řekla záda
přívětivě, osušila něco a obrátila se k Prokopovi tváří neméně monumentální,
vhodně umístěnou na tuří šíji. Mohutný pán vteřinku studoval Prokopa a řekl:
„Pane inženýre, nebudu vás nutit, abyste mně povídal, co z příčin jistě
uvážených hodláte nechat pro sebe. Znám vaši práci. Myslím, že v té
záležitosti šlo o nějakou vaši třaskavinu.“
„Ano.“
„Věc má asi větší význam… řekněme vojenský.“
„Ano.“
Mohutný pán se zvedl a podával Prokopovi ruku: „Chtěl jsem vám jenom, pane
inženýre, poděkovat, že jste ji neprodal zahraničním agentům.“
„To je všechno?“ vydechl Prokop.
„Ano.“
„Chytli jste je?“ vyhrkl Prokop.
„Proč?“ usmál se pán. „K tomu nemáme práva. Pokud jde o tajemství jenom vaše a
nikoliv o tajemství naší armády…“
Prokop pochytil jemnou výtku a upadl do rozpaků. „Ta věc… není dosud zralá…“
„Věřím. Spoléhám na vás,“ řekl mocný muž a znovu mu podal ruku.
To bylo vše.


XXII.

„Musím postupovat metodicky,“ umiňoval si Prokop. Dobrá, tedy po předlouhém
rozvažování a nejpodivnějších nápadech ustanovil se na tomto postupu:
Především dával obden do všech větších novin inzerát: „Pan Jiří Tomeš. Dámu v
závoji prosí doručitel s poraněnou rukou o udání adresy. Velmi důležité. P.
zn., 40 000‘ do inz. k. Grégr.“ Tato formulace se mu zdála velmi chytrá; není
sice jisto, že by mladá dáma četla noviny vůbec a inzertní část zvláště, nu
ale kdoví? Náhoda je mocná. Avšak místo náhody dostavily se okolnosti, jež
bylo možno předvídat, ale na něž Prokop předem nepomyslel. Na udanou značku
došla totiž celá spousta korespondence, jenže byly to většinou účty, upomínky,
hrozby a hrubosti na adresu nezvěstného Tomše; nebo „pan Jiří Tomeš nechť ve
vlastním zájmu udá svůj pobyt pod zn…“ a podobně. Mimoto očumoval v inzertní
kanceláři jakýsi hubený člověk, který, když Prokop si vyzvedl korespondenci, k
němu přistoupil a ptal se ho, kde bydlí pan Jiří Tomeš. Prokop si na něho
vyjel tak hrubě, jak okolnosti dovolovaly, a tu hubený pán se vytasil s
policejní legitimací a vyzval Prokopa důrazně, aby nedělal hlouposti. Šlo tu
totiž o onu jistou zpronevěru a jiné ošklivé věci. Prokopovi se podařilo
přesvědčit hubeného pána, že především on sám by nesmírně potřeboval vědět,
kde pan Tomeš je; nicméně po této příhodě a prostudování došlé korespondence
jeho důvěra v úspěch inzerce valně ochabla. Skutečně také na další anonce
docházelo odpovědí stále méně, zato však byly pořád hrozivější.
Za druhé navštívil soukromou detektivní kancelář. Vyložil tam, že hledá
neznámou dívku v závoji, a pokoušel se ji popsat. Byli ochotni opatřit mu o ní
diskrétní informace, udá-li buď její bydliště, nebo její jméno. I nezbylo mu
než odejít s nepořízenou.
Za třetí dostal geniální nápad. V řečené obálce, která ho neopouštěla ve dne
ani v noci, bylo – krom menších bankovek – třicet tisícovek opatřených páskou,
jak je v bankách zvykem při vyplácení větších peněz. Nebylo tam jméno banky;
ale aspoň to je nejvýš pravděpodobno, že dívka je vybrala v některém peněžním
ústavě téhož dne, kdy on, Prokop, s nimi odejel do Týnice. Nuže, nyní jen
vědět přesné datum, a pak stačí obejít všechny banky v Praze a vyprosit si,
aby mu udali jméno osoby, která toho dne vyzvedla třicet tisíc nebo o něco
více korun. Ano, vědět přesné datum; Prokop si byl sice neurčitě vědom, že
Krakatit mu vybuchl v úterý nebo kdy (dva dny předtím byla neděle či svátek),
takže dívka vyzvedla peníze pravděpodobně kterési středy; avšak týdnem ani
měsícem si nebyl Prokop jist, mohlo to být v březnu nebo v únoru. Se strašnou
námahou hleděl se upomenout nebo si vypočítat, kdy to asi bylo; avšak každý
kalkul se zastavil u toho, že nevěděl, jak dlouho stonal. Dobrá, jistě však
vědí u Tomšů v Týnici, kterého týdne jsem k nim vpadl! Oslněn touto nadějí
depešoval starému doktoru Tomši: „Telegrafujte datum, kdy jsem k vám přijel.
Prokop.“ Sotva depeši odeslal, zamrzelo ho to; neboť cítil zrovna palčivě, že
se k nim nezachoval pěkně. Skutečně také odpověď nedocházela. Když už chtěl
tuto nitku pustit z ruky, napadlo ho, že snad si na onen den vzpomene
domovnice od Jirky Tomše. Letěl k ní; avšak domovnice tvrdila, že to bylo
někdy v sobotu. Prokop si zoufal; ale tu ho došel dopis napsaný velkými a
pečlivými písmenami vzorné školačky, že do Týnice přijel dne toho a toho, ale
„tati nesmí vědět, že jsem Vám psala“. Nic víc. Podepsána Anči. V Prokopovi
bůhvíproč krvácelo srdce nad těmi dvěma řádky.
Nuže, se šťastně získaným datem běžel do první banky: mohou-li mu říci, kdo si
toho a toho dne vybral tady v ústavě řekněme třicet tisíc korun. Kroutili nad
tím hlavou, že prý to není zvykem ani vůbec přípustno; ale když viděli, jak je
zdrcen, šli se s někým poradit a pak se ho ptali, na jaký účet byly peníze
vybrány; nebo aspoň zda byly vyzvednuty na knížku, na běžný účet, na šek či
akreditiv. Prokop to ovšem nevěděl. Dále, pravili mu, snad ten dotyčný tu
prodal jen cenné papíry; pak jeho jméno ani nemusí být v knihách. A když jim
posléze Prokop doznal, že naprosto neví, zda ty peníze byly vyplaceny v téhle
bance nebo v kterékoliv jiné, dali se mu do smíchu a ptali se, chce-li s
takovýmto dotazem zběhat všech dvě stě padesát či kolik peněžních ústavů,
filiálek a směnáren v Praze. Tak Prokopův geniální nápad selhal naprosto.
Zbývala už jen čtvrtá možnost, totiž náhoda, že ji potká. I do té náhody se
pokoušel Prokop vpravit jakousi metodu; rozdělil si plán Prahy na sektory a
propátrával jeden úsek po druhém běhaje od rána do večera. Jednoho dne
spočítal, s kolika lidmi se takto za celý den setká, a došel k číslu skoro
čtyřiceti tisíc; tedy vzhledem k úhrnnému počtu obyvatelstva veškeré Prahy je
tu pravděpodobnost asi jedna ku dvanácti, že uvidí tu, již hledá. Ale i tato
malá pravděpodobnost je velkou nadějí. Jsou ulice a místa, která se už předem
zdají nad jiné hodna toho, aby ona tu bydlela nebo tudy prošla; ulice s akáty
kvetoucími, důstojná stará náměstí, intimní kouty hlubokého a vážného života.
Rozhodně není možno, že by přebývala v této hlučné a ponuré ulici, kudy se
jenom spěchá; ani v pravoúhlé suchosti těch činžáků bez tváře, ani ve rmutné
špíně staroby; proč by však nemohla žít zrovna za těmihle velkými okny, za
nimiž tají dech stinné a jemné ticho? Divě se, bloudě jako v snách objevoval
Prokop poprvé v životě, co vše je v tomto městě, kde strávil tolik let; bože,
tolik krásných míst, kde uplývá život pokojný a zralý a vábí tě, člověče
roztěkaný: ohranič, ohranič sebe sama.
Bezpočtukráte hnal se Prokop za mladými ženami, jež mu z dálky bůhvíčím
připomněly tu, již viděl jen dvakrát; běžel za nimi s divě tlukoucím srdcem:
což kdyby to byla ona! A kdo nám poví, jaká to byla divinace nebo čich: vždy
to byly ženy neznámé sice, ale krásné a smutné, uzavřené v sebe a zaštítěné
nevímjakou nedostupností. Jednou pak už si byl skoro jist, že to je ona; hrdlo
se mu sevřelo tak, že musel stanout, aby vydechl; tu ta dotyčná vstoupila do
tramvaje a ujela. Po tři dny potom hlídkoval u oné stanice, ale už jí
neuviděl.
Nejhorší pak byly večery, kdy na smrt unaven tiskl ruce mezi koleny a namáhal
se zkombinovat nějaký nový detektivní plán. Bože, nikdy se nevzdám toho,
nalézt ji; jsem posedly, budiž; jsem blázen, blbec a maniak; ale nikdy se toho
nevzdám. Čím víc mi uniká, tím je to silnější; prostě… je to… osud či co.
Jednou se probudil uprostřed noci, a bylo mu náhle neodvratně jasno, že takhle
jí jakživ nenajde; že musí vstát a vyhledat Jirku Tomše, který o ní ví a musí
mu o ní říci. I ustrojil se uprostřed noci a nemohl se dočkat rána. Nebyl
připraven na nepochopitelné potíže a průtahy s opatřením pasu; nerozuměl ani,
co všechno na něm chtějí, a zuřil i tesknil horečnou netrpělivostí. Konečně,
konečně jedné noci ho nesl rychlík za hranice. A tedy nejprve do Balttinu!
Teď se to rozhodne, cítil Prokop.


XXIII.

Rozhodlo se to bohužel jinak, než mínil.
Měl totiž plán vyhledat v Balttinu toho jistého, co se mu vydával za Carsona,
a říci mu asi tolik: něco za něco, já vám kašlu na peníze; vy mne dovedete
ihned k Jiřímu Tomši, se kterým mám co jednat, a za to dostanete dobrou
třaskavinu, dejme tomu fulminát jodu se zaručenou detonací nějakých jedenácti
tisíc sekundometrů, nebo pro mne a za mne ten jistý kovový azid s celými
třinácti tisíci, pane, a dělejte si s tím, co chcete. – Byli by ovšem blázni,
kdyby na takový obchod nepřistoupili.
Továrna v Balttinu se mu zdála zvenčí nehrubě veliká; trochu v něm hrklo, když
místo na portýra narazil na vojenskou hlídku. Ptal se jí na pana Carsona (– u
čerta, vždyť se ten člověk tak nejmenuje!); ale vojáček neřekl a ani b a s
bajonetem ho vedl k šikovateli. Ten neřekl o mnoho víc a dovedl Prokopa k
důstojníkovi. Inženýr Carson je tu neznám, řekl důstojník, a co prý s ním pán
chce? Prokop prohlásil, že chce vlastně mluvit s panem Tomšem. To na
důstojníka mělo tak dalece účinek, že poslal pro pana obrsta. Pan obrst, velmi
tlustý astmatický člověk, jal se Prokopa důtklivě vyslýchat, kdo je a co tu
chce; to už bylo v kanceláři asi pět vojenských pánů a prohlíželi si Prokopa
tak, až se potil. Bylo zřejmo, že čekají na někoho, pro koho zatím
telefonovali. Když se ten někdo přihnal jako vítr, ukázalo se, že je to pan
Carson; titulovali ho direktorem, ale jeho skutečné jméno Prokop nezvěděl
nikdy. Křičel radostí, když spatřil Prokopa, a tvrdil, že na něho už čekali a
kdesi cosi; hned nařídil telefonovat „do zámku“, aby připravili „kavalírské“
hostinské pokoje, chytil Prokopa pod paží a vedl jej balttinským závodem.
Ukázalo se, že to, co Prokop považoval za továrnu, je jenom vojenská a
hasičská ubikace u vchodu; odtud vede dlouhá chaussée tunelem v porostlé, asi
deset metrů vysoké hrázi. Pan Carson uvedl Prokopa nahoru, a teprve nyní si
Prokop jakžtakž uvědomil, co to jsou balttinské závody: celé město muničních
baráků označených číslicemi a písmenami, kopečky pokryté trávou, což prý jsou
sklady, o kus dál nádražní park s rampami a jeřáby a za ním nějaké docela
černé budovy a prkenné boudy. „Vidíte tamten les?“ ukazoval pan Carson k
obzoru. „Za ním jsou teprve ty pokusné laboratoře, víte? A tamhle, co jsou ty
pískové vršky, je střelnice. Tak. A tadyhle v parku je zámek. Budete mrkat, až
vám ukážu laboratoře. Ef ef, to nejmodernější. A teď půjdeme do zámku.“
Pan Carson vesele žvanil, ale nic o tom, co bylo nebo má být; šli zrovna
parkem, i ukazoval mu tuhle vzácný druh Amorphophallus a tamhle jakousi
japonskou varietu třešničky; a tady už je balttinský zámek celý zarostlý
břečťanem. U vchodu čeká tichý a jemňoučký stařík v bílých rukavicích, jménem
Paul, a vede Prokopa rovnou do „kavalírského pokoje“. Jakživ nebyl Prokop v
něčem podobném; vykládané parkety, anglický empir, vše staroučké a drahocenné,
že se bál na to sednout. A než se mohl opláchnout, už je tu Paul s vajíčky,
lahví vína a třesoucí se sklenicí a staví vše na stůl tak něžně, jako by
posluhoval princezničce. Pod okny je dvůr vysypaný plavým pískem; štolba v
ohrnutých holinkách tam na dlouhé oprati lonžíruje vysokého grošovaného koně;
vedle něho stojí hubená hnědá dívka, přimhouřenýma očima sleduje koňův cval a
dává krátce jakési rozkazy, načež přiklekne a ohmatává koňovy kotníky.
Pan Carson se přižene zase jako vítr, a že prý teď Prokopa musí představit
generálnímu řediteli. Vede ho dlouhou bílou chodbou ověšenou samými parohy a
vroubenou černými vyřezávanými židlemi. Růžový panák s bílými rukavicemi
otevře před nimi dveře, pan Carson všoupne Prokopa dovnitř, do jakéhosi
rytířského sálu, a dveře se zavrou. U psacího stolu stojí vysoký stařec,
podivně vzpřímen, jako by ho právě vytáhli ze skříně a připravili k uvítání.
„Pan inženýr Prokop, Jasnosti,“ řekl pan Carson. „Kníže Hagen-Balttin.“
Prokop se zamračil a trhl zlobně hlavou; patrně tento pohyb považoval za
poklonu.
„Buďte – nám – vítán,“ pronesl kníže Hagen a podal mu předlouhou ruku. Prokop
znovu trhl hlavou.
„Dou-fám, že – budete – u nás – spokojen,“ pokračoval kníže, a Prokop si
všiml, že je na půli těla ochrnut.
„Račte – nás poctít – u stolu,“ mluvil kníže s patrnou úzkostí, aby mu
nevypadl umělý chrup.
Prokop nervózně přešlapoval. „Račte odpustit, kníže,“ začal konečně, „ale já
se tu nemohu zdržet; já – já musím ještě dnes –“
„Nemožno, naprosto nemožno,“ vyhrkl pan Carson vzadu.
„Ještě dnes se musím poroučet,“ opakoval Prokop tvrdohlavě. „Chtěl jsem jenom…
poprosit, abyste mi řekli, kde je Tomeš. Byl bych… eventuelně ochoten
poskytnout za to… eventuelně…“
„Jak?“ zvolal kníže a vytřeštil na pana Carsona oči v absolutní nechápavosti.
„Co – chce?“
„Nechte to zatím,“ zahučel pan Carson Prokopovi do ucha. „Pan Prokop jenom
míní, Jasnosti, že nebyl na vaše pozvání připraven. To nevadí,“ obrátil se
čile k Prokopovi. „Já jsem to zařídil. Dnes bude déjeuner na trávníku, tedy…
žádné černé šaty; můžete jít jak jste. Telegrafoval jsem pro krejčího; žádné
starosti, pane. Zítra je to v pořádku. Tak.“
Nyní zas Prokop vytřeštil oči. „Jaký krejčí? Co to znamená?“
„Bude – nám – zvláštní ctí,“ zakončil kníže a podal Prokopovi umrlčí prsty.
„Co to znamená?“ zuřil Prokop na chodbě a chytil Carsona za rameno. „Člověče,
teď mluvte, nebo –“
Pan Carson se rozřehtal a vysmekl se mu jako uličník. „Nebo, jaképak nebo?“
smál se prchaje a poskakuje jako míč. „Jestli mne chytíte, řeknu vám všechno.
Na mou čest.“
„Vy kašpare,“ zahromoval Prokop rozzuřen a pustil se za ním. Pan Carson
řehtaje se letěl po schodech a vyklouzl podle plechových rytířů do parku; tam
panáčkoval na trávníku dělaje si zřejmě z Prokopa tatrmany. „Tak co,“ křičel,
„co mně uděláte?“
„Zmlátím vás,“ soptil Prokop řítě se na něho celou svou těžkou vahou. Carson
kvičel radostí a skákal po trávníku kličkuje jako zajíc. „Honem,“ jásal, „tady
jsem,“ a už zase uklouzl Prokopovi pod rukou a dělal na něho kukuč za pněm
stromu.
Prokop mlčky uháněl za ním s pěstmi zaťatými, vážný a hrozný jako Aiás. Supěl
už bez dechu, když najednou zahlédl, že ze zámeckých schodů přihmouřenýma
očima sleduje jejich běh hnědá amazonka. Zastyděl se nesmírně, stanul a jaksi
se lekl, že teď snad ta dívka mu přijde ohmatat kotníky.
Pan Carson, najednou zase docela vážný, coural se k němu s rukama v kapsách a
povídal přátelsky: „Málo tréninku. Nesmíte pořád sedět. Cvičit srdce. Tak.
Aá,“ zahlaholil rozzářen, „naše velitelka, haholihoo! Dcera starého,“ dodával
tiše. „Princezna Wille, totiž Wilhelmina Adelhaida Maud a tak dále. Zajímavá
holka, osmadvacet let, ohromná jezdkyně. Musím vás představit,“ řekl nahlas a
vlekl vzpouzejícího se Prokopa k dívce. „Nejjasnější princezno,“ volal zdálky,
„tady vám – do jisté míry proti jeho vůli – představuji našeho hosta. Inženýr
Prokop. Strašně zuřivý člověk. Chce mne zabít.“
„Dobrý den,“ řekla princezna a obrátila se k panu Carsonovi: „Víte, že
Whirlwind má zpuchlý kotník?“
„I proboha,“ děsil se pan Carson. „Ubohá princezno!“
„Hrajete tenis?“
Prokop se mračil a nevěděl ani, že tohle platilo jemu.
„Nehraje,“ odpověděl Carson za něho a šťouchl ho do žeber. „To musíte hrát.
Princezna prohrála s Lenglenovou jen o jeden set, že?“
„Protože jsem hrála proti slunci,“ namítla princezna poněkud dotčena. „Co
hrajete?“
Prokop zas nevěděl, že to patřilo jemu.
„Pan inženýr je učenec,“ spustil Carson horlivě. „Našel atomové výbuchy a
takové věci. Ohromný duch, vážně. My jsme proti němu kuchyňské ficky. Takhle
strouhat brambory a podobně. Ale tuhle on,“ a pan Carson podivem hvízdl.
„Jednoduše kouzelník. Jestli chcete, vyrazí z vizmutu vodík. Tak, panečku.“
Šedivé oči štěrbinou sklouzly po Prokopovi, jenž tu stál zrovna uvařen v
rozpacích a vztekaje se na Carsona.
„Velmi zajímavé,“ řekla princezna a už zas se dívala jinam. „Řekněte mu, aby
mne někdy poučil. Tedy v poledne na shledanou, že ano?“
Prokop se uklonil téměř včas, a pan Carson jej vlekl do parku. „Rasa,“ povídal
uznale. „Ta ženská má rasu. Pyšná, co? Počkejte, až ji poznáte blíž.“
Prokop se zastavil. „Poslyšte, Carsone, abyste si to nepletl. Nikoho nemíním
poznat blíž. Dnes nebo zítra odjedu, rozumíte?“
Pan Carson kousal nějaký list, jakoby nic. „Škoda,“ řekl. „Tady je moc pěkně.
Nu co dělat.“
„Zkrátka mi povězte, kde je Tomeš –“
„Až pojedete odtud. Jak se vám líbil starý?“
„Co mi je po něm,“ hučel Prokop.
„Nu ano. Antikní kus, pro reprezentaci. Bohužel ho pravidelně jednou týdně
raní mrtvice. Ale Wille je báječné děvče. Pak je tu Egon, klacek, osmnáct let.
Oba sirotci. Potom hosti, nějaký bratránek princ Suwalski, všelijací oficíři,
Rohlauf, von Graun, víte, Jockey Club, a doktor Krafft, vychovatel, a taková
společnost. Dnes večer musíte přijít mezi nás. Pivní večer, žádná šlechta,
naši inženýři a podobně, víte? Tamhle v mé vile. Je to na vaši počest.“
„Carsone,“ řekl Prokop přísně. „Chci s vámi vážně mluvit než odjedu.“
„To nespěchá. Odpočněte si, a je to. Nu, já musím po své práci. Můžete dělat,
co vám je libo. Žádné formality. Chcete-li se vykoupat, tak tamhle je rybník.
Nic nic, až později. Udělejte si pohodlí. Tak.“
A byl pryč.


XXIV.

Prokop se coural po parku mrze se na cosi a nevyspale zívaje. Divil se, co s
ním vlastně chtějí, a měřil s nelibostí své boty podobné vojenským bagančatům
i své unošené nohavice. Ponořen v tyto myšlenky divže nevlezl až doprostřed
tenisového hříště, kde princezna hrála se dvěma panáky v bílých šatech. Uhnul
rychle a pustil se směrem, kde předpokládal konec parku. Nu, na této straně
končil se pak park jakousi terasou: kamenná balustrádka a kolmo dolů zeď
nějakých dvanáct metrů vysoká. Možno se pokochat vyhlídkou na borové lesíky a
na vojáčka, který dole přechází s nasazeným bajonetem.
Prokop zamířil v tu stranu, kde se park svažoval dolů; našel tam rybník s
koupelnami, ale přemáhaje chuť vykoupat se vešel do pěkného březového hájku.
Tak vida, tady je jenom laťový plot a u polozarostlé cestičky vrátka; nejsou
dokonce zavřena a lze vyjít ven, do borového lesa. Putoval tiše po klouzavém
jehličí až na kraj lesa. A sakra, tady je dobré čtyři metry vysoký plot z
ostnatého drátu. Jakpak, řekněme, je takový drát pevný? Zkoušel to opatrně
rukou i nohou, až shledal, že k jeho počínání se zájmem přihlíží vojáček s
bajonetem na druhé straně plotu.
„To je horko, že?“ řekl Prokop, aby to zamluvil.
„Tudy se nesmí,“ povídal vojáček; i otočil se Prokop na patě a ubíral se podle
ostnatého plotu dál. Borový les přešel v mlází, a za ním jsou nějaké kůlny a
chlévy, patrně panský dvůr; nakoukl tam plotem, a tu se uvnitř rozlehl strašný
řev, chroptění a štěkot, a dobrý tucet dog, bloodhoundů a vlčáků se sápal na
plot. Čtyři páry nedůvěřivých očí vykoukly z čtverých dveří. Prokop pro
jistotu pozdravil a chtěl jít dál; ale jeden čeledín vyběhl za ním a povídal,
že „tudy se nesmí“, načež ho dovedl zpátky až k vrátkům do březového háje.
To vše Prokopa velmi rozlaďovalo. Carson mně musí říci, kudy se jde ven,
umiňoval si; nejsem přece kanár, aby mne drželi v kleci. Vyhnul se obloukem
tenisovému hříšti a zamířil k parkové cestě, kudy ho Carson vedl nahoru do
zámku. Jenže teď se mu postavil do cesty filmový chlapík v placaté čepici, a
kam prý pán ráčí.
„Ven,“ řekl Prokop zkrátka. Ale „tudy se nesmí,“ vysvětloval mu člověk v
čepici; tudy prý se jde k rnuničním barákům, a kdo tam chce jít, musí mít
laissez-passer od ředitelství. Ostatně vrata ze zámku přímo ven jsou tuhle
zpátky, po hlavní cestě a vlevo prosím.
Prokop se tedy pustil po hlavní cestě a vlevo prosím, až přišel k velikým
mřížovým vratům. Děda vrátný mu šel otevřít. „Račte mít lístek?“
„Jaký lístek?“
„Pasírku.“
„Jakou pasírku?“
„Lístek, že smíte ven.“
Prokop se rozlítil. „Copak jsem v kriminále?“
Děda krčil lítostivě rameny: „Prosím, dneska mi dali rozkaz.“
Chudáku, myslel si Prokop, ty bys tak někoho mohl zadržet! Jen udělat rukou
takhle –
Z okna vrátného domku vyhlédla povědomá tvář, náramně podobná jistému Bobovi.
Prokop tedy ani nedokončil svou myšlenku, otočil se na patě a loudal se zpátky
k zámku. U všech rohatých, řekl si, to jsou divné okolky; skoro to vypadá,
jako by tu někdo měl být zavřen. Dobrá, promluvím si o tom s Carsonem.
Především vůbec nestojím o jejich pohostinství a nepůjdu k obědu; nebudu sedět
s panáky, kteří se tam na tenisovém hříšti chechtali za mými zády. – Rozhořčen
nesmírně odebral se Prokop do pokojů, které mu byly vykázány, a vrhl se na
staroučkou chaise longue, až to zapraskalo, a hněval se. Za chvíli zaklepal
pan Paul a ptal se vlídně a starostlivě, půjde-li pán k déjeuner.
„Nepůjdu,“ vrčel Prokop.
Pan Paul se poklonil a zmizel. Za chvilku tu byl zas a strkal před sebou stůl
na kolečkách, pokrytý sklenicemi, křehoučkým porcelánem a stříbrem. „Prosím,
jaké víno?“ ptal se něžně. Prokop zamručel cosi jako aby mu dali pokoj.
Pan Paul šel po špičkách ke dveřím a vzal tam z dvou bílých pracek velikou
mísu. „Consommé de tortues,“ šeptal pozorně a naléval Prokopovi, načež mísa
opět zmizela v bílých tlapách. Toutéž cestou přišla ryba, pečeně, saláty,
věci, které Prokop jakživ nejedl, a ani dobře nevěděl, jak se jedí; než
ostýchal se dát před panem Paulem najevo jakékoliv rozpaky. Kupodivu, jeho
hněv se nějak rozplýval. „Sedněte si,“ kázal Paulovi, ochutnávaje nosem a
patrem nahořklé bleďoučké víno. Pan Paul se šetrně uklonil a zůstal ovšem
stát.
„Poslyšte, Paul,“ pokračoval Prokop, „myslíte, že tu jsem zavřen?“
Pan Paul pokrčil uctivě rameny: „Prosím, nemohu vědět.“
„Kudy se odtud dostanu ven?“
Pan Paul chvilinku přemýšlel. „Prosím, po hlavní cestě a pak nalevo. Poroučí
milostpán kávu?“
„No třeba.“ Prokop si opařil krk skvostným moka, zatímco pan Paul mu podával
všechny vůně Arábie v cigárové krabici a stříbrný hořák. „Poslyšte, Paul,“
začal zas Prokop kousaje špičku doutníku, „děkuju vám. Neznal jste tady
nějakého Tomše?“
Pan Paul obrátil oči k nebi samým usilovným vzpomínáním. „Neznal, prosím.“
„Kolik je tu vojáků?“
Pan Paul uvažoval a počítal. „Na hlavní stráži asi dvě stě. To je infanterie.
Potom polní četníci, to nevím kolik. V Balttin-Dortum škardona husarů. Na
střelnici v Balttin-Dikkeln kanonýři, to se mění.“
„Proč tu jsou polní četníci?“
„Prosím, tady je válečný stav. Kvůli muniční továrně.“
„Aha. A to se hlídá jen tady kolem?“
„Tady jsou jen patroly, prosím. Řetěz je až dál, za lesem.“
„Jaký řetěz?“
„Hlídková zóna, prosím. Tam nikdo nesmí.“
„A kdyby chtěl člověk odejet –“
„To musí mít povolení od staničního komanda. Přeje si pán ještě něco?“
„Ne, děkuju vám.“
Prokop se natáhl na chaise longue rozkošnicky jako sytý bej. Nu uvidíme, řekl
si; až potud to není tak zlé. Chtěl vše uvážit, ale místo toho si vzpomněl,
jak před ním Carson poskakoval. Že bych ho nedohonil? napadlo ho a pustil se
za ním. Stačil jediný pětimetrový skok; ale tu se Carson vznesl jako kobylka a
hladce přelétl přes skupinu keřů. Prokop dupnul nohou a vzlétl za ním, a jen
zvedl nohy, když letěl nad vrcholky křoví. Nový odraz, a již letěl bůhvíkam,
nestaraje se dále o Carsona. Vznášel se mezi stromy, lehýnký a volný jako
pták; zkusil několik plaveckých rázů nohama, a vida, stoupal výš. To se mu
nesmírně zalíbilo. Mocnými tempy se šrouboval kolmo nahoru. Pod nohama se mu
jako pěkně narýsovaný plán otevíral zámecký park se svými altány, trávníky a
vinutými cestami; lze rozeznat tenisové hříště, rybník, střechu zámku, březový
hájek; tam je ten dvůr se psy a borový les a ostnatý plot, a napravo už
začínají muniční baráky, a za nimi vysoká zeď. Prokop zamířil vzduchem nad tu
stranu parku, kde dosud nebyl. Cestou zjistil, že to, co považoval za terasu,
je vlastně bývalé opevnění zámku, mohutná bašta s podsebitím a příkopem,
druhdy patrně napájeným z rybníka. Hlavně mu šlo o tu část parku mezi hlavním
východem a baštou; jsou tam zarostlé cestičky a divoké křoví, hradba vysoká už
jen asi tři metry a pod ní jakési smetiště nebo kompost; dále zelinářská
zahrada a kolem řádková zeď hodně chatrná a v ní zelená vrátka; za vrátky
silnice. Tam se podívám, řekl si Prokop a snášel se pomalu dolů. Tu však
vyrazila na silnici škadrona jízdy s tasenými šavlemi, a rovnou na něho.
Prokop přitáhl nohy až k bradě, aby mu je neusekli; ale tím dostal takový
kolmý rozmach, že vylétl do výše jako šíp. Když se zas podíval dolů, viděl vše
maličké jako na mapě; dole na silnici předjíždí malinká baterie děl, lesklá
hlaveň se obrací nahoru, vyrazil bílý obláček, a bum! první granát přeletěl
Prokopovi nad hlavou. Zastřelují se, mínil Prokop, a rychle vesloval rukama,
aby se dostal dál. Bum! druhý granát zafičel Prokopovi před nosem. Prokop se
dal na ústup tak rychle, jak to šlo. Bum! třetí rána mu rázem přerazila křídla
a Prokop se řítil hlavou k zemi, a procitl. Někdo klepal na dveře.
„Vstupte,“ křikl Prokop a vyskočil, nechápaje, kde vůbec je.
Vešel bělovlasý, ušlechtilý pán v černém a hluboce se uklonil.
Prokop zůstal stát a čekal, až ho vznešený pán osloví.
„Drehbein,“ řekl ministr (nejméně!) a znovu se uklonil.
Prokop se uklonil stejně hluboko. „Prokop,“ představil se. „Čím mohu sloužit?“
„Kdybyste ráčil chvilku stát.“
„Prosím,“ vydechl Prokop, žasna, co se s ním bude dít.
Bělovlasý pán studoval Prokopa s přimhouřenýma očima; dokonce si ho obešel a
pohřížil se do pozorování jeho zad.
„Kdybyste se ráčil trochu narovnat.“
Prokop se vztyčil jako voják; co to u všech všudy –
„Račte dovolit,“ řekl pán a poklekl před Prokopem.
„Co chcete?“ vyhrkl Prokop couvaje.
„Vzít míru.“ A už vytáhl ze šosu svinutý metr a jal se měřit Prokopovu
nohavici.
Prokop ustoupil až k oknu. „Nechte toho, ano?“ spustil podrážděně. „Já jsem s
žádné šaty neobjednal.“
„Už jsem dostal rozkazy,“ podotkl pán uctivě.
„Poslyšte,“ řekl Prokop přemáhaje se, „jděte mi ke všem – – Nechci žádné šaty
a dost! Rozuměl jste?“
„Prosím,“ souhlasil pan Drehbein, dřepl před Prokopem, nadzvedl mu vestu a
zatahal za dolejší kraj kalhot. „O dva centimetry víc,“ poznamenal vstávaje.
„Račte dovolit.“ Přitom mu znalecky zajel rukou do podpaží. „Příliš volné.“
„To je dobře,“ zabručel Prokop a obrátil se k němu zády.
„Děkuju,“ mínil pán a uhlazoval mu na zádech nějaký záhyb.
Prokop se rozlíceně otočil. „Člověče, ruce pryč, nebo –“
„Promiňte,“ omlouval se pán a objal ho měkce kolem pasu; a než ho Prokop mohl
přinejmenším skolit, stáhl mu pásek u vesty, ustoupil a s nakloněnou hlavou
zpytoval Prokopovu tailli. „Tak je to,“ podotkl zcela uspokojen a hluboce se
uklonil. „Mám tu čest se vám poroučet.“
„Jdi ke všem kozlům,“ křičel za ním Prokop, a „však už tu zítra nebudu,“
zakončil pro sebe, načež popuzen měřil pokoj z rohu do rohu. Hrom do toho,
copak si ti lidé myslí, že tu zůstanu půl roku?
Tu zaklepal a vešel pan Carson s tváří neviňátka. Prokop se zastavil s rukama
za zády a měřil ho ponurýma očima. „Člověče,“ řekl ostře, „kdo vlastně jste?“
Pan Carson ani nemrkl, zkřížil ruce na prsou a klaněl se jako Turek. „Princi
Alaaddine,“ pravil, „jsem džin, tvůj otrok. Kaž, a vyplním každé tvé přání.
Ráčil jste spinkat, že? Nu, blahorodí, jak se vám tu líbí?“
„Ohromně,“ mínil Prokop hořce. „Jen bych rád věděl, jsem-li tady zavřen, a
jakým právem.“
„Zavřen?“ žasl pan Carson, „propána, copak vás někdo nechtěl pustit do parku?“
„Ne, ale z parku ven.“
Pan Carson potřásl účastně hlavou: „Nemilé, že? To mne hrozně mrzí, že jste
nespokojen. Koupal jste se v rybníce?“
„Ne. Kudy se dostanu ven?“
„Božínku, hlavním vchodem. Jdete rovně a potom vlevo –“
„A tam ukážete pasírku, ne? Jenže já žádné nemám.“
„To je škoda,“ mínil pan Carson. „Tady je moc hezké okolí.“
„Hlavně moc hlídané.“
„Moc hlídané,“ souhlasil pan Carson. „Výborně řečeno.“
„Poslyšte,“ vybuchl Prokop, a čelo mu nabíhalo hněvem, „myslíte, že je
příjemné narazit každým desátým krokem na bajonet nebo ostnatý plot?“
„Kde to?“ divil se pan Carson.
„Všude v pomezí parku.“
„A co vás čerti nesou do pomezí parku? Můžete chodit uvnitř, a je to.“
„Tedy jsem zavřen?“
„Bůh uchovej! Abych nezapomněl, tady je pro vás legitimace. Laissez-passer do
závodu, víte? Kdybyste se tam náhodou chtěl podívat.“
Prokop vzal do rukou legitimaci a podivil se; byla na ní fotografie vzatá
patrně téhož dne. „A s tímhle se mohu dostat ven?“
„To ne,“ řekl honem pan Carson. „To bych vám neradil. Vůbec, dejte si na sebe
trochu pozor, co? Rozumíte? Pojďte se podívat,“ řekl od okna.
„Co je?“
„Egon se učí boxovat. Heč, dostal ji! To je von Graun, víte? Haha, ten kluk má
kuráž!“
Prokop se s odporem díval na dvůr, kde polonahý chlapec, krváceje z úst i
nosu, vzlykaje bolestí a vztekem se vrhal znovu a znovu na staršího odpůrce,
aby za okamžik odletěl zkrvácenější a bědnější než předtím. Co se mu obzvláště
příčilo, bylo, že k tomu přihlížel starý kníže ve vozíčkovém křesle, směje se
z plna hrdla, i princezna Wille bavící se přitom klidně se skvělým krasavcem.
Konečně Egon padl do písku úplně zpitomělý a nechal si odkapávati krev z nosu.
„Dobytek,“ zahučel Prokop na neznámou adresu a zatínal pěstě.
„Tady nesmíte být tak citlivý,“ prohlásil pan Carson. „Tvrdá kázeň. Život…
jako na vojně. Nemazlíme se s nikým,“ pointoval tak důrazně, že to vypadalo
jako hrozba.
„Carsone,“ řekl Prokop vážně, „jsem tedy… jaksi… ve vězení?“
„Ale kdepak! Jste jenom v střeženém podniku. V prachárně to není jako u
holiče, co? Tomu se musíte přizpůsobit.“
„Zítra odjedu,“ vyrazil Prokop.
„Haha,“ smál se pan Carson a třepl ho po břiše. „Báječný šprýmař! Tedy
přijdete dnes večer mezi nás, že?“
„Nikam nepřijdu! Kde je Tomeš?“
„Co? Aha, váš Tomeš. Nu, zatím tuze daleko. Tohle je klíč od vaší laboratoře.
Nikdo vás tam nebude rušit. Škoda že nemám pokdy.“
„Carsone,“ chtěl ho zadržet Prokop, ale zarazil se před posuňkem tak
velitelským, že se neodvážil ničeho dál; a pan Carson vyklouzl ven hvízdaje si
jako cvičený špaček.
Prokop se svou legitimací se pustil k hlavním vratům. Děda vrátný ji studoval
a vrtěl hlavou; tenhle lístek prý platí jen pro východ C, tamhle, co se jde k
laboratořím. Prokop putoval k východu C; filmový chlapík s placatou čepicí
prohlédl legitimaci a ukazoval: tady rovně, pak třetí příčná severní cesta.
Prokop se ovšem dal první cestou k jihu; ale po pěti krocích ho zadržel polní
četník: zpátky a třetí cesta vlevo. Prokop si odplivl na třetí cestu vlevo a
nabral to rovnou přes louku: za okamžik ho honili tři lidé, tudy že se nesmí.
Šel tedy poslušně třetí severní cestou, a když si myslel, že už na něho
nekoukají, zamířil mezi muniční sklady. Tam ho sebral voják s bajonetem a
poučil ho, že má jít tamhle, na rozcestí VII, cesta N 6. Prokop zkoušel své
štěstí na každé křižovatce; všude ho zadrželi a posílali na cestu VII, N 6; i
umoudřil se konečně a pochopil, že legitimace popsaná písmenami „C 3 n. w. F.
H. A. VII, N 6. Bar. V, 7. S. b.!“ má smysl tajemný a nevyhnutelný, jemuž jest
se slepě podříditi. Šel tedy, kam mu ukazovali cestu. Tady už nebyly muniční
baráky, ale malé betonové stavbičky všelijak číslované, patrně pokusné
laboratoře či co, roztroušené mezi pískovými násypy a borovými lesíky. Jeho
cesta se stočila k docela osamělému domku V, 7, i zamířil k němu. Na dveřích
byla mosazná tabulka „Ing. Prokop“. Prokop odemkl klíčem, který mu dal Carson,
a vešel dovnitř.
Byla tam vzorně zařízená laboratoř pro chemii třaskavin – tak moderní a úplná,
že se v Prokopovi zatajil dech radostí odborníka. Na hřebíku visela jeho stará
halena, v rohu vojenský kavalec tak jako v Praze, a v přihrádkách velkolepě
vybaveného psacího stolu ležely pečlivě spořádány a zkatalogizovány veškeré
jeho tištěné články a rukopisné poznámky.


XXV.

Půl roku neměl Prokop v rukou milované nádobíčko chemika.
Prohlížel nástroj po nástroji; bylo tu vše, o čem kdy mohl snít, lesklé,
zbrusu nové a zrovna výstavní ve své pedantické uspořádanosti. Byla tu
příruční a odborná knihovna, ohromný regál s chemikáliemi, skříně s citlivými
nástroji, tlumicí kabina na pokusné exploze, komora s transformátory, zkušební
aparáty, které ani neznal; prohlédl sotva polovinu těch divů divoucích, když
poslušen okamžitého nápadu se hnal k regálu pro nějakou sůl barya, kyselinu
dusičnou a ještě cosi a zahájil pokus, při němž se mu povedlo ožehnout si
prst, přivést zkumavku k prasknutí a propálit si díru do kabátu; tu uspokojen
usedl k psacímu stolu a načmáral dvě tři poznámky.
Potom jal se znovu okukovat laboratoř. Trochu mu to připomínalo nově zařízenou
parfumerii; bylo to příliš uspořádané, ale stačilo sáhnout na to a ono, aby to
rozházel po své chuti; tak, teď to tu vypadá intimněji. Uprostřed
nejhorlivější práce se zarazil: Aha, řekl si, tímhle tedy mne chtějí dostat na
lep! Za chvíli přijde Carson a začne hučet: budete big man a kdesi cosi.
Sedl si mračně na kavalec a čekal. Když nikdo nepřicházel, šel jako zloděj k
pultu a hrál si znovu s barnatou solí. Beztoho jsem tu naposledy, chlácholil
sebe sama. Pokus se podařil dokonale: prsklo to s dlouhým plamenem a skleněný
zvon na citlivých váhách praskl. „Teď dostanu,“ hrklo v něm provinile, když
uviděl dosah škody, a vytratil se z laboratoře jako školák, který rozbil okno.
Venku byl už soumrak a drobně pršelo. Deset kroků před barákem stála vojenská
hlídka.
Prokop zamířil pomalu k zámku cestou, po které byl přišel. V parku nebylo živé
duše; jemný déšť šuměl v korunách stromů, v zámku svítili a klavír bouřil do
šera vítěznou písní. Prokop se pustil do oné pusté části parku mezi hlavním
východem a terasou. Zarůstalo to tu bezcestně, i zaryl se do vlhkého křoví
jako kanec, naslouchaje chvílemi a opět si raze cestu praskajícím houštím.
Tady je konečně kraj džungle, kde křoví se překlání přes starou hradbu ne
vyšší v těchto místech než tři metry. Prokop se chytil převislých větví, aby
se po nich spustil dolů; ale pod jeho solidní tíhou větve se zlomily s ostrým
třeskem, jako když z pistole střelí, a Prokop dopadl s těžkým žuchnutím na
jakési smetiště. Zůstal sedět s tlukoucím srdcem: teď někdo na mne přijde.
Nebylo slyšet nic než šustění deště. I sebral se a hledal zeď se zelenými
vrátky, jak ji byl viděl ve snu.
Bylo to tak, až na jednu okolnost: že vrátka byla pootevřena. Znepokojil se
velmi: buď jimi někdo právě vyšel, nebo se tudy vrátí; v obojím případě je
někde nablízku. Co tedy činit? Rychle rozhodnut kopl Prokop do vrátek a vyšel
rázně na silnici; a opravdu, potloukal se tam nevelký člověk v gumáku a
pokuřoval lulku. Tak stáli oba proti sobě v jistém zmatku, kdo začne a s čím.
Začal ovšem agilnější Prokop. Zvoliv bleskově mezi několika možnostmi cestu
násilí, vrhl se na muže s lulkou a beraním nárazem své hrubé síly jej okamžitě
položil do bláta. Nyní ho tiskne hrudí a lokty k zemi trochu udiven a nevěda,
co s ním teď; neboť nemůže ho přece zaškrtit jako slepici. Člověk pod ním ani
nepouští faječku z úst a patrně vyčkává. „Vzdej se,“ supí Prokop, ale v tom
okamžiku dostal ránu kolenem do břicha a pěstí pod čelist, a skutálel se do
příkopu.
Když se počal sbírat, čekal novou ránu; ale muž s faječkou stál klidně na
silnici a pozoroval ho. „Ještě?“ vycedil. Prokop zavrtěl hlavou. Tu jal se mu
ten chlapík ohromně špinavým kapesníkem čistit šaty. „Bláto,“ poznamenal a
třel co nejradikálněji.
„Zpátky?“ řekl konečně a ukazoval na zelená vrátka. Prokop chabě souhlasil.
Člověk s lulkou ho tedy vedl zpět až k staré hradbě a sklonil se, opřen rukama
o kolena. „Lezte,“ kázal suše. Prokop se mu postavil na ramena, člověk se
vztyčil a děl: „Hop!“ Prokop se zachytil převislého křoví a vydrápal se na
hradbu. Bylo mu skoro do pláče hanbou.
A ještě to, ještě to ke všemu: Když poškrabán a zpuchlý, uválen v blátě,
strašný a ponížený se kradl po zámeckých schodech do svého „kavalírského“
pokoje, potkala ho princezna Wille. Prokop se chtěl tvářit, jako by to nebyl
on nebo jako by jí neznal či co, zkrátka nepozdravil a hnal se nahoru jako
monument z bláta; a jak uháněl podle ní, zachytil její udivený, povýšený,
vskutku velmi urážlivý pohled. Prokop stanul jako udeřen. „Počkat,“ křikl a
seběhl k ní, a čelo mu zrovna praskalo náběhem vzteku. „Jděte,“ křičel, „a
řekněte jim, řekněte jim, že… že na ně kašlu a… že se nedám zavřít, rozumíte?
Nedám,“ zařval a uhodil pěstí do zábradlí, až zadrnčelo; načež se vyřítil zase
do parku nechávaje za sebou princeznu bledou a přímo ztuhlou.
Několik okamžiků nato vpadl kdosi k nepoznání zablácený do domku vrátného,
převrhl dubový stůl na večeřícího stařečka, popadl Boba za krk a škrtl mu
hlavou o zeď tak, že ho napolo skalpoval a nadobro omráčil; načež se zmocnil
klíče, odemkl vrata a běžel ven. Tam narazil na hlídkujícího vojáčka, jenž
ihned vykřikl výstrahu a strhl pušku; ale než mohl střelit, začal se s ním ten
kdosi cloumat, vyrval mu pušku z ruky a zlomil mu pažbou klíční kost. Tu však
přibíhaly dvě nejbližší hlídky; temná postava hodila po nich puškou a vrhla se
zpět do parku.
Skoro v témž okamžiku byl přepaden noční hlídač u východu C: kdosi černý a
veliký ho začal zčistajasna častovat strašnými ranami do spodní čelisti.
Hlídač, plavý obr, nadmíru překvapen chvíli držel, než ho napadlo zahvízdat;
tu ho ten někdo hrozně klna pustil a běžel zpět do černého parku. Pak byly
zalarmovány posily a četné patroly procházely parkem.
Asi o půlnoci demoloval kdosi balustrádu na parkové terase a vrhal
desetikilové kameny po stráži, jež přecházela dole v hloubi deseti metrů.
Voják vystřelil, načež shora se vychrlila spousta politických urážek, a bylo
ticho. V tu chvíli přijížděli z Dikkeln přivolaní kavaleristé, zatímco veškerá
balttinská posádka šťouchala bajonety do křovin. V zámku už dávno nikdo
nespal. V jednu hodinu našli u tenisového hříště omráčeného vojáka bez pušky.
Brzo nato se v březovém lesíku strhla krátká, ale vydatná přestřelka; raněn
nebyl bohudík nikdo. Pan Carson s tváří ustaranou důtklivě posílal domů
princeznu Wille, jež chvějíc se nejspíš nočním chladem bůhvíproč se odvažovala
na bojiště; ale princezna s očima podivně velikýma řekla, aby ji laskavě
opustil. Pan Carson pokrčil rameny a nechal ji bláznit.
Ač kolem zámku bylo lidí jako much, jal se někdo z houští metodicky vytloukat
zámecká okna. Nastal zmatek, neboť současně padly dvě tři rány z pušky až na
silnici. Pan Carson vypadal náramně znepokojeně.
Zatím princezna ani nedutajíc putovala cestičkou červených buků. Najednou se
proti ní řítila ohromná černá postava, stanula před ní, zahrozila pěstí a
drtila cosi, že je to hanba a skandál; pak se ponořila do houští, jež praskalo
a střásalo těžkou vláhu deště. Princezna se vrátila a zadržela patrolu: že prý
tam nikdo není. Její oči byly rozšířené a lesklé, jako by měla horečku. Po
chvíli se rozlehla střelba z křovin za rybníkem; podle zvuku to byly
brokovnice. Pan Carson huboval, aby se ti pacholci ze dvora do toho nepletli,
nebo že je vytahá za uši. V té chvíli ještě nevěděl, že tam kdosi utloukl
kamenem skvostnou dánskou dogu.
Za úsvitu našli Prokopa tvrdě spícího na lehátku v japonském altánu. Byl
úžasně rozdrásán a zablácen a šaty na něm visely v cárech; na čele měl bouli
jako pěst a vlasy spečené krví. Pan Carson potřásl hlavou nad spícím hrdinou
noci. Potom se přišoural pan Paul a pečlivě přikryl chrupajícího spáče teplou
houní; pak přinesl i umyvadlo s vodou a ručník, čisté prádlo a zbrusu nové
sportovní šaty od pana Drehbeina, a po špičkách odešel.
Jen dva nenápadní muži v civilu, s revolvery v zadní kapse, se procházeli až
do rána v blízkosti japonského altánu s nenucenou tváří lidí, kteří dohlížejí
na východ slunce.


XXVI.

Prokop čekal, kdoví co že bude následovat po oné noci; nenásledovalo nic, či
spíše následoval ho onen člověk s lulkou – jediný, kterého se Prokop jaksi
bál. Ten člověk se jmenoval Holz, – jméno, jež povídalo velmi málo o jeho
tiché a bdělé podstatě. Kamkoliv se Prokop hnul, pohyboval se svých pět kroků
za nim; Prokopa to divoce dráždilo a týral ho po celý den způsobem
nejrafinovanějším: například pobíhal sem tam, sem tam po krátké cestičce
padesátkrát a stokrát, čekaje, že pana Holze omrzí udělat vždycky po dvaceti
krocích čelem vzad; pana Holze to však neomrzelo. I jal se Prokop utíkat a
běžel třikrát round celým parkem; pan Holz mlčky uháněl za ním a ani nepřestal
pouštět obláčky kouře, zatímco Prokop se udýchal, až to v něm hvízdalo.
Pan Carson se toho dne ani neukázal; patrně se hněval. Kvečeru se Prokop
sebral a putoval k své laboratoři, provázen ovšem svým mlčelivým stínem. V
laboratorním baráku chtěl za sebou zamknout; ale pan Holz vstrčil nohu mezi
dveře a vešel za ním. A protože byla v předsíni přichystána lenoška, bylo
zřejmo, že se pan Holz odtud nehne. Nu, taky dobře. Prokop kutil v laboratoři
něco tajemného, zatímco pan Holz v předsíni suše a krátce chrápal. Ke druhé
hodině zrána napouštěl Prokop jakýsi motouz petrolejem, zapálil jej a uháněl
ven, jak rychle jen dovedl. Pan Holz vyletěl okamžitě z lenošky a pustil se za
ním. Po stu krocích vrhl se Prokop do příkopu tváří k zemi; pan Holz zůstal
nad ním stát a rozžíhal si lulku. Prokop zvedl hlavu a chtěl mu něco říci, ale
spolkl to, neboť si vzpomněl, že s Holzem zásadně nemluví; zato vztáhl ruku a
podrazil mu nohy. „Pozor,“ zahučel, a v tom okamžiku zarachotil v baráku
důkladný výbuch a tříšť kamení i skla jim letěla nad hlavou, jen to svištělo.
Prokop vstal, tak tak se očistil a rychle běžel odtud, sledován panem Holzem.
V tu chvíli již se sbíhaly stráže a najíždělo auto s hasiči.
To byla první výstraha adresovaná panu Carsonovi. Nepřijde-li teď vyjednávat,
nastanou věci horší.
Pan Carson nepřišel; místo návštěvy došla nová legitimace patrně pro jiný
pokusný barák. Prokop se rozlítil. Dobrá, řekl si, tentokrát jim ukážu, co
dovedu. Poklusem běžel do své nové laboratoře, vybíraje v mysli pádnější
projev svého protestu; rozhodl se pro třaskavé draslo, jež se zanítí vodou.
Avšak u nového baráku mu klesly bezmocně ruce: Zatraceně, je ten Carson ďábel!
Hned s laboratoří totiž sousedily domky patrně pro závodní hlídače; na
zahrádce se popelil dobrý tucet dětí a mladá maminka tam konejšila řvoucího
červeného živočicha. Když viděla zuřivý pohled Prokopův, zarazila se a
přestala zpívat. „Dobrý večer,“ zabručel Prokop a loudal se zpátky s pěstmi
zaťatými. Pan Holz pět kroků za ním.
Cestou do zámku potkal princeznu na koni s celou kavalkádou důstojníků. Uhnul
na postranní cestu, ale princezna v trysku stočila koně za ním. „Chcete-li si
vyjet,“ řekla rychle, a její tmavou lící prokmitla vlna krve, „je vám k
dispozici Premier.“
Prokop couval před tančícím Whirlwindem. Jakživ neseděl na koni, ale nepřiznal
by se k tomu za nic na světě. „Děkuji,“ řekl, „není třeba… oslazovat… mé
vězení.“
Princezna se zakabonila; bylo ovšem nemístné mluvit právě s ní o této stránce
věci; avšak přemohla se a děla, hladce shrnujíc výtku i pozvání:
„Nezapomínejte, že na zámku jste hostem u mne.“
„Myslím, že o to nestojím,“ mručel Prokop tvrdohlavě, dávaje pozor na každý
pohyb nervózního koně.
Princezna podrážděně trhla nohou; Whirlwind zafrkal a počal se vzpínat.
„Nebojte se ho,“ hodila Wille s úsměškem.
Prokop se zamračil a uhodil koně po hubě; princezna vzala bičík, jako by ho
chtěla švihnout přes ruku. Všechna krev valila se Prokopovi do hlavy. „Pozor,“
zaskřípěl a zahryzl se rudýma očima do princezniných jiskřících. Ale tu již
zpozorovali důstojníci trapný případ a cválali k princezně. „Halloh, co se
děje?“ volal ten, který jel v čele na černé klisně a hnal svého koně rovnou na
Prokopa. Prokop viděl nad sebou koňskou hlavu, i popadl ji za udidlo a vší
silou ji strhl stranou. Kůň zařičel bolestí a vzepjal se tanče na zadních
nohou, zatímco důstojník letěl do náručí klidného pana Holze. Dvě šavle
zaplály ve slunci; ale vtom tu byla princezna na třesoucím se Whirlwindu a
tlačila jeho bokem důstojníky nazpátek.
„Nechat,“ kázala, „je to můj host!“ Přitom šlehla po Prokopovi temným pohledem
a dodala: „Ostatně se bojí koní. Pánové se spolu seznámí. Poručík Rohlauf.
Inženýr Prokop. Kníže Suwalski. Von Graun. Případ je vyřízen, že ano? Rohlauf
na koně a jedeme. Premier je vám k dispozici, pane. Tedy pamatujte, že tady
jste jen hostem. Na shledanou!“ Bičík mnohoslibně zasvištěl vzduchem,
Whirlwind se zatočil, až písek tryskal, a kavalkáda zmizela v ohybu cesty; jen
pan Rohlauf obtancoval na koni Prokopa, spaloval ho zuřivýma očima a vypravil
ze sebe hlasem vztekle zajiklým: „Bude mne těšit, pane!“
Prokop se otočil na patě, šel do svého pokoje a zamkl se; po dvou hodinách
putoval po stařičkých nohou Paulových jakýsi dlouhý dopis z „kavalírského
pokoje“ na ředitelství. Vzápětí běžel pan Carson s čelem přísně svraštělým k
Prokopovi; velitelským posuňkem vyhnal pana Holze, který pokojně dřímal na
židli před pokojem, a vnikl dovnitř.
Pan Holz si tedy sedl před zámkem a zapálil si lulku. Uvnitř se strhl strašný
řev, ale to se Holze pranic netýkalo; protože mu faječka netáhla, rozšrouboval
ji a znalecky ji protahoval stéblem. Z „kavalírského pokoje“ se ozývalo
chroptění dvou tygrů do sebe zakousnutých; jeden řval a druhý soptil, bouchl
nějaký nábytek, byl okamžik ticha a opět zatřeskl strašlivý křik Prokopův.
Sbíhali se zahradníci, ale pan Holz je zahnal pokynem ruky a jal se
profoukávat troubel. Burácení nahoře rostlo, oba tygři ryčeli a doráželi na
sebe chraptíce zběsilostí. Pan Paul vyběhl ze zámku bled jako stěna a zvedal
uděšené oči k nebi. V tu chvíli klusala tudy princezna se svým průvodem; když
uslyšela boží dopuštění v hostinském křídle zámku, zasmála se nervózně a
docela zbytečně švihla Whirlwinda bičem. Pak se křik poměrně utišil; bylo
slyšeti hromování Prokopovo, jenž něčím vyhrožuje a bouchá pěstí do stolu. Do
toho mu vpadá ostrý hlas, jenž hrozí a poroučí; Prokop řve horečné protesty,
ale břitký hlas odpovídá tiše a rozhodně.
„Jakým právem?“ křičí hlas Prokopův. Velitelský hlas cosi vysvětluje s
příšernou a tichou důtklivostí. „Ale pak, rozumíte, pak vyletíte všichni do
povětří,“ burácí Prokop, a vřava se rozpoutává nanovo tak hrozně, že pan Holz
rázem stopil lulku do kapsy a rozběhl se k zámku. Ale opět to utichlo, jen
ostrý hlas kázal a odsekával věty, doprovázen temným a hrozivým mručením; bylo
to, jako když se diktují podmínky příměří. Ještě dvakrát se rozkatil divý řev
Prokopův, ale ostrý hlas už se nerozčiloval; zdálo se, že si je jist svou
věcí.
Po půldruhé hodině vyrazil pan Carson z pokoje Prokopova, fialový a lesklý
potem, funící a nachmuřený, a běžel poklusem k pokojům princezniným. Deset
minut nato pan Paul, třesa se úctou, hlásil Prokopovi, jenž hryzl si rty a
prsty ve svém pokoji: „Její Jasnost.“
Vešla princezna ve večerních šatech, popelavě bledá a s obočím palčivě
staženým. Prokop jí pokročil vstříc a chtěl, jak se zdálo, něco říci; ale
princezna jej zadržela pohybem ruky, pohybem, jenž byl pln výsosti a odporu, a
řekla zadrhlým hlasem: „Jdu se vám… pane… omluvit za onen výstup. Nemínila
jsem vás šlehnout. Lituji toho nesmírně.“
Prokop zrudl a chtěl opět něco říci; ale princezna pokračovala: „Poručík
Rohlauf dnes odjede. Kníže prosí, abyste někdy přišel k našemu stolu.
Zapomeňte na tu příhodu. Na shledanou.“ Rychle mu podala ruku; Prokop se sotva
dotkl jejích prstů. Byly velmi chladné a jako mrtvé.


XXVII.

Nuže, po bouřce s Carsonem jako by se vyčistil vzduch. Prokop sice prohlásil,
že při nejbližší příležitosti uteče, ale zavázal se čestným slovem, že až do
té doby se zdrží všech násilností a výstrah; za to byl pan Holz odsunut do
vzdálenosti patnácti kroků a Prokopovi dovoleno v jeho průvodu se volně
pohybovat v okruhu čtyř kilometrů od sedmi ráno do sedmi večer, spát v
laboratoři a stravovat se, kde mu libo. Naproti tomu však nasadil mu Carson
přímo do laboratoře ženu s dvěma dětmi, náhodou zrovna vdovu po dělníkovi
zabitém při výbuchu Krakatitu, jako jisté morální rukojemství proti jakékoliv
(řekněme) neopatrnosti. Krom toho vysazen Prokopovi znamenitý plat ve zlatě a
necháno mu na vůli, aby se prozatím bavil nebo zaměstnával, jak mu libo.
První dny po této dohodě strávil Prokop tím, že všemožně prostudoval terén v
okruhu čtyř kilometrů co do možnosti útěku. Byla prašpatná vzhledem k hlídkové
zóně, jež fungovala přímo výtečně. Prokop vymyslel několik způsobů, jak zabíti
Holze; naneštěstí shledal, že tento suchý a houževnatý patron živí pět dětí a
krom toho matku a chromou sestru, a že má ještě ke všemu za sebou tři léta
káznice pro zabití člověka. Tyto okolnosti nebyly příliš povzbuzující.
Jistou útěchou Prokopovi bylo, že se do něho oddaně, přímo náruživě zamiloval
pan Paul, klíčník na penzi, dokonale šťastný, že má komu sloužit; neboť
jemného stařečka tuze trápilo, že byl shledán příliš pomalým, aby posluhoval
při knížecí tabuli. Prokop si někdy až zoufal pro jeho obtížné a uctivé
pozornosti. Mimoto náramně přilnul k Prokopovi doktor Krafft, Egonův
vychovatel, člověk zrzavý jako liška a hrozně nešťastný v životě; byl přímo
neobyčejně vzdělaný, trochu teozof a k tomu nejpošetilejší idealista, jakého
si lze představit. K Prokopovi se blížil pln ostychu a obdivoval se mu
bezuzdně, neboť jej považoval přinejmenším za génia. Skutečně znal už dávno
Prokopovy odborné články, a dokonce na nich budoval teozofický výklad
nejnižšího okruhu, čili abych tak po sprostu řekl, hmoty. Nadto byl pacifista
a otrava jako všichni lidé příliš ušlechtilých názorů.
Prokopa konečně omrzelo bezcílné potloukání podle hlídkové zóny, a vracel se
stále častěji do laboratoře, aby pracoval na svých věcech. Studoval své staré
poznámky a doplňoval mnohé mezery; sestrojil a opět zničil dlouhou řadu
třaskavin, jež potvrzovaly jeho nejodvážnější hypotézy. Byl téměř šťasten v
těchto dnech; avšak večer, večer se vyhýbal lidem a tesknil pod klidným
dohledem pana Holze, dívaje se na oblaka, na hvězdy a na volný obzor.
Ještě jedna věc ho kupodivu zaměstnávala: jakmile zaslechl dupot koňských
kopyt, přistoupil k oknu a pozoroval jezdce, ať to byl štolba nebo některý
důstojník nebo princezna (s níž nemluvil od onoho dne), a s očima nachmuřenýma
samou pozorností zkoumal, jak se to dělá. Shledával, že jezdec vlastně nesedí
jen tak v sedle, nýbrž do jisté míry stojí ve třmenech; že nepracuje zadkem,
nýbrž koleny; že není trpně jako pytel brambor natřásán koňským cvalem, nýbrž
aktivně vystihuje jeho periodicitu. To vše je prakticky snad velmi jednoduché,
ale pro inženýrského pozorovatele je to mechanismus náramně spletitý,
jmenovitě jakmile kůň začne vzpínat se nebo vyhazovat nebo tančit třesa se
ušlechtilou a nedůtklivou plachostí. To vše studoval Prokop dlouhé hodiny
skryt za okenní záclonou; a jednoho pěkného rána nařídil Paulovi, aby mu dal
osedlat Premiera.
Pan Paul byl velmi zaražen; vysvětloval, že Premier je ohnivý a málo oježděný
rap hrozně nesnášenlivý, avšak Prokop krátce opakoval rozkaz. Jízdecké šaty
měl připraveny ve skříni; oblékl je se slabým pocitem ješitnosti a hnal se na
dvůr. Tam už tancoval Premier tahaje za sebou štolbu, jenž ho držel u huby.
Jako to viděl u jiných, chlácholil Prokop koně hladě mu nozdry a lysinu.
Valach se trochu utišil, jen nohy mu hrály v plavém písku. Prokop se k němu
obmyslně blížil z boku; užuž zvedal nohu ke třmenu, když Premier bleskově po
něm sekl zadní nohou a uhnul zadkem, že Prokop stěží měl čas uskočit. Štolba
vyprskl v krátký smích; to stačilo; Prokop se útokem vrhl na koňův bok,
neznámo jak dostal špičku nohy do třmene a vymrštil se. V nejbližších
okamžicích nevěděl, co se děje; všecko se zatočilo, někdo vykřikl, Prokop měl
jednu nohu ve vzduchu, zatímco druhá nemožně uvázla ve třmenu; nyní Prokop
těžce dopadl do sedla a sevřel kolena vší silou. To mu vrátilo vědomí právě ve
chvíli, kdy Premier vyhodil zadkem jako střelen; Prokop se honem položil
nazad, znovu dopadl a křečovitě přitáhl uzdu. Následkem toho se bestie
postavila na zadní nohy jako svíce; Prokop svíral kolena jako kleště a položil
se tváří až mezi rapovy uši, úzkostlivě dbaje, aby ho neobjal kolem krku,
neboť se bál, že by to vypadalo směšně. Visel vlastně jen na kolenou. Premier
se postavil zase na všechny čtyři a počal se točit jako vlček; toho použil
Prokop k tomu, aby dostal špičku druhé nohy do třmene. „Netiskněte ho tak,“
volal štolba, ale Prokop byl rád, že má koně mezi koleny. Valach se spíš
zoufale než zlomyslně snažil shodit svého divného jezdce; točil se a
vyhazoval, až písek tryskal, a celý kuchyňský personál vyběhl na dvůr podívat
se na tento divoký cirkus. Prokop zahlédl pana Paula, jenž úzkostí tiskl
ubrousek k ústům, a dr. Krafft se vyřítil, svítě na slunci svou zrzavou
hlavou, a s nasazením vlastního života chtěl zadržet Premiera za udidla.
„Nechte ho,“ křikl Prokop v bezuzdné pýše, a bodl valacha do slabin. Pane na
nebi! Premier, kterému se tohle ještě nestalo, vyrazil jako šíp a letěl ze
dvora do parku; Prokop stáhl hlavu mezi ramena, počítaje s tím, aby spadl
okrouhleji, až poletí; jinak stál ve třmenech nakloněn kupředu, mimovolně
napodobuje závodní žokeje. Když se takto řítil podle tenisového hříště,
zahlédl tam několik bílých figurek; tu ho popadlo furiantství a začal
traktovat bičem Premierovu kýtu. Nyní zdivočelý rap ztratil hlavu nadobro; po
několika nepříjemných skocích na bok sedl na zadek a zdálo se, že se překotí;
ale místo toho vyrazil přes záhony jako ztřeštěný. Prokop chápal, že nyní
záleží vše na tom, udržet mu hlavu nahoře, nemají-li oba udělat kotrmelec na
terénu tak nespolehlivém, i visel na uzdě a táhl. Premier se vzepjal, naráz
pokryt potem, a zničehonic začal rozumně cválat. Bylo to vítězství.
Prokopovi se nesmírně ulevilo; teprve nyní mohl vyzkoušet, co studoval tak
důkladně, totiž akademickou školu jezdce v sedle. Třesoucí se kůň poslouchal
uzdy jedna radost, a Prokop, pyšný jako bůh, točil jej po vinutých cestách
parku míře zpátky k tenisovému hříšti. Už viděl za křovím princeznu s raketou
v ruce, i pobodl Premiera do galopu. Vtom princezna mlaskla jazykem, Premier
se vznesl do vzduchu a letěl k ní přes křoví jako šíp; a Prokop naprosto
nepřipraven na tuhle vysokou školu vyletěl ze třmenů a poroučel se přes koňovu
hlavu do trávy. V tu chvíli cítil, že něco zapraskalo, a na vteřinu se mu
bolestí obestřely smysly.
Když procitl, viděl princeznu a tři pány v onom zaraženém postoji lidí, kteří
nevědí, mají-li se smát povedené švandě, nebo přiběhnout na pomoc. Prokop se
opřel o lokty a pokusil se pohnout levou nohou, jež ležela pod ním divně
stočena. Princezna pokročila s tázavým a trochu již ulekaným pohledem.
„Tak,“ řekl Prokop tvrdě, „teď jste mi zlomila nohu.“ Trpěl hrozně a vědomí se
mu mátlo otřesem; přesto se pokoušel vstát. Když zase přišel k sobě, ležel v
princeznině klíně a Wille mu utírala zpocené čelo pronikavě vonícím
kapesníkem. Přes strašlivou bolest v noze byl napolo jako v snách. „Kde je…
kůň,“ blábolil a počal sténati, když jej dva zahradníci kladli na přinesenou
lavici a nesli do zámku. Pan Paul se změnil ve všecko na světě: v anděla,
milosrdnou sestru a rodnou matku, pobíhal, rovnal Prokopovi pod hlavou podušky
a kapal mu na rty koňak; pak si musel sednout vedle postele, a Prokop mu
mačkal ruku v poryvech bolesti, posilován dotykem té měkké a stařecky lehýnké
ruky. Dr. Krafft stál u nohou s očima plnýma slz, a i pan Holz zřejmě dojat
rozstřihoval Prokopovi jezdecké nohavice a máčel mu stehno studenými obklady.
Prokop tiše sténal a chvílemi se modrými rty usmíval na Kraffta nebo na pana
Paula. A tu již se přivalil plukovní lékař, takový lepší řezník, provázen
asistentem, a bez dlouhých okolků se pustil do Prokopovy nohy. „Hmjo,“ řekl,
„komplikovaná fraktura femoris a tak dále; nejmíň šest neděl postele,
člověče.“ Vybral dvě dyhy, a nyní se počala trapná věc. „Natahujte mu nohu,“
kázal řezník asistentovi; ale pan Holz uctivě odstrčil rozčileného nováčka a
chopil se sám zlomeného údu celou svou tvrdou, šlachovitou silou. Prokop se
zahryzl do podušky, aby neřval bolestí jako zvíře, a vyhledal očima utrápenou
tvář pana Paula, na níž se zrcadlila všechna jeho vlastní muka. „Ještě
kousek,“ basoval doktor ohmatávaje frakturu; Holz mlčky a pevně táhl. Krafft
prchl koktaje cosi v úplném zoufalství. Nyní řezník rychle a obratně utahoval
dyhy; přitom bručel, že zítra zaleje tu sakramentskou nohu do sádry. Konečně
je po všem; bolí to sice příšerně a natažená noha leží jako mrtvá, ale aspoň
ten řezník je pryč; jenom pan Paul přechází po špičkách a žbrblaje měkkými rty
se stará, jak by trpiteli ulevil.
Tu se přižene pan Carson autem a bera najednou čtyři schody letí k Prokopovi.
Pokoj se naplní jeho třesknou účastí, hned je tu veseleji a jaksi chlapácky;
pan Carson žvaní pro útěchu páté přes deváté, a najednou pohladí Prokopa
nesměle a přátelsky po zježené hlavě; v tu chvíli odpouští Prokop svému
zavilému nepříteli a tyranu devět desetin jeho špatností. Pan Carson se
přehnal jako vítr; a nyní se posunuje po chodbě cosi těžkého, dveře se rozletí
a dva lokajové s bílými prackami vedou dovnitř ochromeného knížete. Kníže už
ode dveří kývá úžasně vyschlou a dlouhou ručkou, aby snad Prokop ze samé úcty
zázračně nevstal a nevykročil vstříc Jeho Jasnosti; pak se nechá posadit a
vypraví ze sebe několik vět nejblahovolnější účasti.
Sotva zmizelo toto zjevení, ťuká někdo na dveře a pan Paul šeptá s nějakou
komornou. Hned nato vchází princezna, má ještě bílé tenisové šaty a v hnědé
tváři vzdor a kajícnost; neboť se přichází dobrovolně omluvit ze svého
hrozného uličnictví. Ale než může promluvit, rozzáří se drsný, hrubě omítnutý
Prokopův obličej dětským úsměvem. „Tak co,“ praví pyšně pacient, „bojím se
koně nebo ne?“
Princezna se zarděla tak, že by to nikdo do ní neřekl; až ji to samu zamrzelo
a uvedlo do rozpaků. Nicméně se přemohla, a rázem je z ní vznešená hostitelka;
hlásí, že přijede chirurg profesor, a ptá se, co si Prokop žádá k jídlu, ke
čtení a podobně; ještě nařídí Paulovi, aby dvakrát denně jí podával zdravotní
zprávu, jaksi z dálky urovná cosi na polštáři a s malým kývnutím hlavy odejde.
Když zanedlouho přijel slavný chirurg autem, bylo mu několik hodin čekati, byť
nad tím sebevíc kroutil hlavou. Pan inženýr Prokop totiž ráčil hluboce usnout.


XXVIII.

To se rozumí, slavný chirurg neuznal práci vojenského řezníka, roztahoval
znovu Prokopovy zlomeniny a nakonec to vše zalil do sádry a řekl, že levá
extremita zůstane podle všeho chromá.
Prokopovi nastaly dny slavné a ležácké. Krafft mu předčítal Swedenborga a pan
Paul rodinné kalendáře, zatímco princezna dala obklopit lůžko trpitele všemi
nádhernými vazbami světové literatury. Nakonec Prokopa omrzely i kalendáře a
jal se Krafftovi diktovat soustavné dílo o destruktivní chemii. Nejvíc si –
kupodivu – oblíbil Carsona, jehož drzost a bezohlednost mu imponovala; neboť
našel pod ní veliké plány a potrhlou fanatičnost zásadního, mezinárodního
militaristy. Pan Paul byl na vrcholu blaženství; nyní byl nepostrádatelný od
noci do noci a mohl sloužiti každým dechem a každým krůčkem svých šouravých
nohou.
Ležíš sevřen hmotou, podoben poraženému pni; ale což necítíš jiskření
strašlivých a neznámých sil v té nehybné hmotě, jež tě poutá? Hovíš si na
prachových poduškách nabitých větší silou než sud dynamitu; tvé tělo je spící
třaskavina, a i třesoucí se, zvadlá ručička Paulova skrývá v sobě větší možnou
brizanci než melinitová kapsle. Spočíváš nehnutě v oceánu nezměřitelných,
nerozložených, nevypáčených sil; co je kolem tebe, nejsou pokojné zdi, tiší
lidé a hučící koruny stromů, nýbrž muniční sklad, kosmická prachárna
připravená k strašlivému výkonu; ťukáš kloubem na hmoty, jako bys přehlížel
sudy ekrazitu, zkoumaje, jak jsou plné.
Prokopovy ruce zprůhledněly nehybností, ale nabyly zato podivného hmatu:
cítily zrovna a odhadovaly detonační potenciál všeho, čehokoliv se dotkly.
Mladé tělo má ohromné brizantní napětí; ale opět dr. Krafft, nadšenec a
idealista, obsahuje poměrně slabou výbušnou kvalitu, kdežto Carsonovo
detonační číslo se blíží tetranitranilinu; a Prokop se zachvěním vzpomínal na
chladný dotek princezniny ruky, jenž mu vyzradil příšernou brizanci toho
zpupného amazonského tvora. Prokop si lámal hlavu, závisí-li potenciální
třaskavá energie organismu na přítomnosti nějakých enzymových či jakých látek,
nebo na chemické stavbě samotných buněčných jader, jež jsou náboji par
excellence. Ať je tomu jakkoliv: rád bych viděl, jak by ta černá, nadutá holka
explodovala.
Teď už pan Paul vozí Prokopa v lenošce po parku; pan Holz je nyní zbytečný,
ale činí se, neboť byl v něm objeven veliký talent masérský, a Prokop cítí z
jeho tuhých prstů zrovna prýštit blahodárnou explozívní sílu. Potká-li někdy
princezna pacienta v parku, promluví něco s dokonalou a přesně odměřenou
zdvořilostí, a Prokop k svému vzteku nikdy nepochopí, jak se to dělá; neboť
sám je buď příliš hrubý, nebo příliš sdílný. Ostatní společnost vidí v
Prokopovi podivína; to jim dává právo nebrat ho vážně a jemu volnost býti k
nim nezdvořilý jako drvoštěp. Jednou se princezna ráčila u něho zastavit s
celým průvodem; nechala pány stát, usedla vedle Prokopa a ptala se ho po jeho
práci. Prokop, chtěje jí co nejvíce vyhovět, upadl do tak odborného výkladu,
jako by měl přednášku na mezinárodním kongresu chemiků; kníže Suwalski a
jakýsi cousin se začali šťouchat a smát, a tu se Prokop rozvzteklil a utrhl se
na ně, jim že to nepovídá. Všechny oči se obrátily na Její Jasnost, neboť na
ní bylo usadit nesrstného plebejce; ale princezna se trpělivě usmála a poslala
pány hrát tenis. Zatímco se za nimi dívala očima jako kmín přimhouřenýma,
zpytoval ji Prokop úkosem; vlastně poprvé si jí pořádně všiml. Byla tuhá,
tenká, s nadbytkem pigmentu v pleti, vlastně ne zrovna hezká; maličká ňadra,
nohy přehozeny, skvostné rasové ruce; na pyšném čele jizva, oči skryté a
prudké, pod ostrým nosem temné chmýří, zpupné a tvrdé rty; nu ano, vlastně
téměř hezká. Jaké má opravdu oči?
Tu je k němu plně obrátila, a Prokop se zmátl. „Prý umíte hmatem poznat
povahu,“ řekla honem. „Vypravoval o tom Krafft.“ Prokop se zasmál tomuto
ženskému výkladu své zvláštní chemotaxe. „Nu ano,“ povídal, „člověk cítí,
kolik má která věc síly; to nic není.“ Princezna pohlédla rychle na jeho ruku
a potom kolem dokola; nebyl tam nikdo.
„Ukažte,“ zabručel Prokop a nastavil rozjizvenou dlaň. Položila na ni hladké
konečky prstů; nějaký blesk proběhl Prokopem, srdce mu zabouchalo a hlavou mu
nesmyslně kmitlo: „Což kdybych sevřel!“ A již hnětl a drtil v hrubé tlapě
tuhé, palčivé maso její ruky. Opilá závrať mu zaplavila hlavu; viděl ještě, že
princezna zavírá oči a syká rozchlípenými rty, sám pak semkl oči a zatínaje
zuby propadal se do kroužící tmy; jeho ruka se horce a divoce rvala s tenkými,
přísavnými prsty, které se mu chtěly vyrvat, které se hadovitě svíjely, které
se zarývaly nehty do jeho kůže a opět naze, křečovitě přilnuly k jeho masu.
Prokop jektal zuby rozkoší; chvějivé prsty pekelně dráždily jeho zápěstí,
začal vidět rudá kola, náhle prudký a žhavý stisk, a úzká ruka se mu vydrala z
dlaně. Omámen zvedl Prokop opilá víčka; v hlavě mu hučelo těžkými tepy; s
úžasem viděl opět zelenou a zlatou zahradu a musel přivřít oči oslněn denním
světlem. Princezna zrovna zpopelavěla a hryzla se do rtů ostrými zuby; v
štěrbinách očí jí žířil bezmezný odpor či co.
„Nu?“ řekla ostře.
„Panenská, bezcitná, vilná, vzteklá a pyšná, – vypráhlá jako troud, jako troud
– a zlá; vy jste zlá; vy jste palčivá samou krutostí a nenávistná a bez srdce;
vy jste zlá a k prasknutí nabitá náruživostí; nedotknutelná, chtivá, tvrdá,
tvrdá k sobě, led a oheň, oheň a led –“
Princezna mlčky pokývla: ano.
„– k nikomu dobrá, k ničemu dobrá; nadutá, vznětlivá jako lunt, neschopná
milovat, otrávená a planoucí – řeřavá – speklá žárem, a všechno kolem vás
mrzne.“
„Musím být tvrdá k sobě,“ šeptala princezna. „Vy nevíte – vy nevíte –“ Mávla
rukou a vstala. „Děkuju vám. Pošlu vám Paula.“
Vyliv takto svou osobní, uraženou hořkost, začal Prokop o princezně smýšlet
laskavěji; dokonce ho tuze mrzelo, že se mu nyní zřejmě vyhýbá. Chystal se
říci jí při nejbližší příležitosti něco hodně přívětivého, ale příležitost se
už nenaskytla.
Na zámek přijel kníže Rohn, zvaný mon oncle Charles, bratr nebožky kněžny,
takový vzdělaný a jemný světoběžník, amatér všeho možného, tres grand artiste,
jak se říkalo, který dokonce napsal několik historických románů, ale jinak byl
nadmíru milý člověk; k Prokopovi pojal zvláštní náklonnost a trávil u něho
celé hodiny. Prokop mnoho profitoval od jemného pána, obrousil se jaksi a
pochopil, že jsou na světě také jiné věci než destruktivní chemie. Oncle
Charles byl vtělená anekdotická kronika; Prokop rád stočil hovor na princeznu
a naslouchal se zájmem, jaké to bývalo zlé, ztřeštěné, pyšné a velkodušné
děvčátko, jež kdysi střelilo po svém maître de danse a jindy si chtělo dát
vyříznout kus kůže na transplantaci pro popálenou chůvu; když jí to zakázali,
porazila ze vzteku une vitrine s nejvzácnějším sklem. Le bon oncle také
přivlekl k Prokopovi klacka Egona a dával jej (Prokopa) chlapci za příklad s
takovými elóžemi, že se chudák Prokop červenal stejně jako Egonek.
Po pěti nedělích už běhal o holi; vracel se stále častěji do laboratoře a
pracoval jako morovatý, až mu zas procitla bolest v noze, takže cestou domů
zrovna visel na ruce pozorného Holze. Pan Carson zářil, když viděl Prokopa tak
mírného a pracovitého, a ťukal chvílemi na onu stranu, kde v Pánu odpočíval
Krakatit; než to byla věc, o níž Prokop nechtěl ani slyšet.
Jednoho večera bylo na zámku nějaké slavné soirée; nuže, na tento večer
připravil Prokop svůj coup. Princezna zrovna stála ve skupině generálů a
diplomatů, když se otevřely dveře a vešel – bez hole – vzdorovitý vězeň,
poprvé poctívaje knížecí křídlo svou návštěvou. Oncle Charles a Carson mu
běželi vstříc, kdežto princezna na něho jen rychle, zkoumavě pohlédla přes
hlavu čínského vyslance. Prokop si myslel, že ho přijde uvítat; ale když
viděl, že se zastavila s dvěma staršími, až po pupek dekoletovanými paničkami,
zamračil se a couval do kouta, neochotně se ukláněje náramným osobnostem,
kterým ho pan Carson představoval pod titulem „slavného učence“, „našeho
slavného hosta“ a tak dále; jak se zdálo, převzal tu pan Carson roli Holzovu,
neboť nehnul se od Prokopa na krok. Čím dál, tím se Prokop nudil zoufaleji;
vtlačil se už docela do kouta a škaredil na celý svět. Teď mluví princezna s
nějakými arcihodnostáři, jeden z nich je dokonce admirál a druhý veliké
zahraniční zvíře; princezna se kvapně podívá stranou, kde se kaboní Prokop,
ale v tu chvíli k ní přistupuje pretendent jistého zrušeného trůnu a odvádí ji
na opačnou stranu. „Nu, já půjdu domů,“ bručí Prokop a rozhoduje se v hloubi
své černé duše, že do