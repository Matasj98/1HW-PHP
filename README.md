# 1HW-PHP

Nfq\calculateHomeWorkSum - siunčiam skaičius ir string, bet php pakankamai protingas, todėl tikrina ar string galima prilyginti
skaičiui, jei būtų 'd', tai neskaičiuotų tiesiog, o dabar kadangi '1', tai prideda.

Nfq\Akademija\NotTyped\calculateHomeWorkSum - viskas vyksta taip pat, kaip ir prieš tai aprašytame, tik funkcija turi return'inti (int) 
tipo kintamaji, todėl vietoj 6.2, suapvalina.

Nfq\Akademija\Soft\calculateHomeWorkSum - funkcijoje nurodyta, kad gaunami kintamieji bus int tipo ir nurodyta, jog funkcija gražins
int tipo kintamaji, todėl iškart float tipo kintamaji suapvalina ir string kintamaji jei įmanoma sulygina su int ir return int kintamasis.

Nfq\Akademija\Strict\calculateHomeWorkSum - visų pirma declare(strict_types=1) reiškia, kad jei funkcija turi gražinti string ar int, tai 
ji ir turi gauti tokio tipo kintamuosius, jei gražins kito tipo, tai gausim erorr ir negražins reikšmės. Kitaip tariant turi būti tik vieno tipo 
kintamieji. Čia negaunam error, nes nurodyta, jog gausim int kintamuosius, todėl string konvertuoja į skaičių, nes įmanoma, jei būtų raidė
ar simbolis, tai būtų error. Taip pat gražina int tipo kinamaji funkcija, todėl viskas suveikia. Jei ištrintume jog funkcija gauna tik 
(...$numbers), tai neveiktų, nes gauna strint, o strictas nekonvertuoja. Pagal default strict_types = 0. 
