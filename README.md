# 1HW-PHP

root - siunčiam skaičius ir string, bet php pakankamai protingas, todėl tikrina ar string galima prilyginti
skaičiui. Jei būtų 'd' ar koks kitas raidžių simbolių string, tai gausim error.

Nfq\Akademija\NotTyped\calculateHomeWorkSum - viskas vyksta taip pat, kaip ir prieš tai aprašytame, tik funkcija turi return'inti (int) 
tipo kintamaji, todėl vietoj 6.2 panaikina dali esama po kablelio, todėl 6, jei būtų 6.9, taip pat 6, nes neapvalina.

Nfq\Akademija\Soft\calculateHomeWorkSum - funkcijoje nurodyta, kad gaunami kintamieji bus int tipo, todėl iškart float tipo kintamaji paverčia int kintamuoju, t.y nukanda viska po kablelio ir neapvalina, jei 2.2, = 2, jei
2.9 = 2. Ir taip pat funkcija gražina :int tipo kintamaji, todėl jei siusim string nebe skaičiu, o 'jda', tai gausim error.

Nfq\Akademija\Strict\calculateHomeWorkSum - declare(strict_types=1), reiškia, kad scalar types nebėra default, todėl funkcija priims arba int arba float šiuo atveju, o '1' konvertuojamas arba į int arba į float (pvz '1.2'= float(1.2)). Jei vietoj '1' būtų raidė ar simbolis, tai error, nes stringe, turi būti vieno tipo kintamieji, int arba float, taip pat nurodyta jog funkcija gražina :int, todėl iškart neveiktų, jei būtų string(pvz: 'df', nes nepriskiriamas nei int nei float). Funkcija priima float ir int todėl nes iškart nurodyta jog funkcija gaus int - (int...$numbers), tai float reikšmės tampa int, nukandami skaičiai po kablelio.

error sugaudau su set_error_handler, bet jis nesugauna fatal error, tai fatal pagaunu su catch. Taip pat išvedu error, nes buvote minėjęs per paskaitą, jog galima, jei tvarkingai.
