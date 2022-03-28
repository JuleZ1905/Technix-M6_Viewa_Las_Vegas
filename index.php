<?php

require('vendor/autoload.php');

use Julian\M6ViewaLasVegas\Hotel;

$changes[] = new Hotel(
    'Polo Towers By Diamond Resorts',
    'https://t-cf.bstatic.com/xdata/images/hotel/square200/302715552.webp?k=15ea8ca92f34bae6880d037ed810b726232c466ca6a7c80c51f13a3204836fb1&o=&s=1',
    'Dieses Resort in Las Vegas erwartet Sie auf dem berühmten Strip in der Nähe mehrerer Casinos, Spas und
erstklassiger Einkaufsmöglichkeiten und bietet Suiten mit einem privaten Balkon und Blick auf die Berge und die
Stadt.

Die gemütlich eingerichteten Suiten im Polo Towers sind mit einem Flachbild-TV und einer iPod-Dockingstation
ausgestattet und umfassen eine Küche oder Küchenzeile mit einer Mikrowelle und einem Kühlschrank.

Der Concierge-Service im Polo Towers arrangiert Ihnen gern Transfers, Ausflüge und vieles mehr Zu den
Einrichtungen des Hotels zählen ein Außenpool, ein Whirlpool und ein Fitnesscenter. Ein Wellnessbereich und
Massagen versprechen Entspannung.
Den Unterhaltungs- und Show-Komplex MGM Grand erreichen Sie zu Fuß in knapp 10 Minuten. Vom internationalen
Flughafen McCarran trennen Sie rund 4 km.'
);

$changes[] = new Hotel(
    'TI - Treasure Island Hotel & Casino',
    'https://t-cf.bstatic.com/xdata/images/hotel/square200/63000008.webp?k=d8e3f0449fbc38eb1392526f02f2ff51432c727b20d94244e1192a0bc27d6f09&o=&s=1',
    'Das Courtyard Las Vegas Convention Center liegt nur 0,4 km vom Las Vegas
Strip entfernt und bietet Ihnen Zimmer mit Premium-Kabel-TV-Kanälen und
ohne Resortgebühren. Die Einrichtungen umfassen außerdem einen beheizten
Außenpool. Im Courtyard Las Vegas Convention Center wohnen Sie in modern
eingerichteten Zimmern. Alle Zimmer verfügen über kostenfreies WLAN,
einen Minikühlschrank, Kaffee-/Teezubehör sowie einen Sitzbereich.
Wäschemöglichkeiten, ein Fitnesscenter und ein Whirlpool sorgen für
zusätzlichen Komfort im Las Vegas Convention Center Courtyard. Das
Bistro serviert Ihnen gesunde Gerichte, eine große Auswahl an Speisen
zum Frühstück und Abendessen, eine Bar am Abend und mit Starbucks-Kaffee
zubereitete Getränkespezialitäten. Mit dem nahegelegenen öffentlichen
Verkehrssystem Las Vegas Monorail erreichen Sie viele Geschäfte,
Restaurants und Bars am Las Vegas Strip.
'
);

$changes[] = new Hotel(
    'Courtyard by Marriott Las Vegas Convention Center',
    'https://t-cf.bstatic.com/xdata/images/hotel/square200/18241355.webp?k=592472c47db323769a0014f5281060c3914173432dfc0a22ba657eded28618b0&o=&s=1',
    'Das Best Western Plus Casino Royale - Center Strip liegt 1,6 km vom
Sands Expo and Convention Center entfernt am Las Vegas Strip. Das Hotel
verfügt über kostenfreies WLAN sowie Parkplätze und verlangt keine
Resortgebühr. Alle Zimmer im Best Western Plus Casino Royale sind mit
einem Flachbild-Kabel-TV ausgestattet. Eine Kaffeemaschine, ein kleiner
Kühlschrank sowie eine Minibar ergänzen die Annehmlichkeiten. Die
Restaurants Denny\'s, White Castle, Cinnabon, Outback Steakhouse und
Subway laden im Casino Royale Best Western Plus auf einen Besuch ein.
Freuen Sie sich in der Unterkunft zudem auf eine Cocktaillounge und ein
Café. Das Freizeitangebot des Hotels umfasst einen saisonal geöffneten
Außenpool und ein 24-Stunden-Fitnesscenter. Bei Bedarf nehmen Sie das
Businesscenter und den Concierge-Service in Anspruch. Caesar\'s Forum
Shops sind weniger als 5 Gehminuten vom Best Western Plus Casino Royale
- Center Strip entfernt. Zur Fashion Show Mall gelangen Sie nach 10
Gehminuten.'
);

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render(
    'index.html',
    ['hotels' => $changes]
);
