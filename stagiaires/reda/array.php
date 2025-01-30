<?php
/*
 * Les tableaux
 */



// des prénoms
$classe = ['Jean', 'Eric', 'Marie', 'Julie', 'Luc', 'Pierre', 'Paul', 'Jacques', 'Hélène', 'Anne', 'Yassine', 'Jean-Luc', 'Magib', 'Samsung',];

// jours de la semaine en français
$semaineFr = [1 => 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche',];

// mois de l'année en français
$moisFr = [1 => 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre',];

// Tableau de données représentant une classe de 18 élèves
$classe18 = [
  ['nom' => 'Élève 1', 'age' => 15, 'note' => 90],
  ['nom' => 'Élève 2', 'age' => 16, 'note' => 80],
  ['nom' => 'Élève 3', 'age' => 15, 'note' => 100],
  ['nom' => 'Élève 4', 'age' => 17, 'note' => 70],
  ['nom' => 'Élève 5', 'age' => 16, 'note' => 95],
  ['nom' => 'Élève 6', 'age' => 15, 'note' => 85],
  ['nom' => 'Élève 7', 'age' => 17, 'note' => 75],
  ['nom' => 'Élève 8', 'age' => 16, 'note' => 90],
  ['nom' => 'Élève 9', 'age' => 15, 'note' => 80],
  ['nom' => 'Élève 10', 'age' => 17, 'note' => 100],
  ['nom' => 'Élève 11', 'age' => 16, 'note' => 70],
  ['nom' => 'Élève 12', 'age' => 15, 'note' => 95],
  ['nom' => 'Élève 13', 'age' => 17, 'note' => 85],
  ['nom' => 'Élève 14', 'age' => 16, 'note' => 75],
  ['nom' => 'Élève 15', 'age' => 15, 'note' => 90],
  ['nom' => 'Élève 16', 'age' => 17, 'note' => 80],
  ['nom' => 'Élève 17', 'age' => 16, 'note' => 95],
  ['nom' => 'Élève 18', 'age' => 15, 'note' => 85],
];

// code numérique, code alpha 2, code Alpha 3, nom du pays
$countryCode = array(
  array('4', 'AFG', 'AF', 'Afghanistan'),
  array('710', 'ZAF', 'ZA', 'Afrique du Sud'),
  array('248', 'ALA', 'AX', 'Aland'),
  array('8', 'ALB', 'AL', 'Albanie'),
  array('12', 'DZA', 'DZ', 'Algérie'),
  array('276', 'DEU', 'DE', 'Allemagne'),
  array('20', 'AND', 'AD', 'Andorre'),
  array('24', 'AGO', 'AO', 'Angola'),
  array('660', 'AIA', 'AI', 'Anguilla'),
  array('10', 'ATA', 'AQ', 'Antarctique'),
  array('28', 'ATG', 'AG', 'Antigua-et-Barbuda'),
  array('682', 'SAU', 'SA', 'Arabie saoudite'),
  array('32', 'ARG', 'AR', 'Argentine'),
  array('51', 'ARM', 'AM', 'Arménie'),
  array('533', 'ABW', 'AW', 'Aruba'),
  array('36', 'AUS', 'AU', 'Australie'),
  array('40', 'AUT', 'AT', 'Autriche'),
  array('31', 'AZE', 'AZ', 'Azerbaïdjan'),
  array('44', 'BHS', 'BS', 'Bahamas'),
  array('48', 'BHR', 'BH', 'Bahreïn'),
  array('50', 'BGD', 'BD', 'Bangladesh'),
  array('52', 'BRB', 'BB', 'Barbade'),
  array('112', 'BLR', 'BY', 'Biélorussie'),
  array('56', 'BEL', 'BE', 'Belgique'),
  array('84', 'BLZ', 'BZ', 'Belize'),
  array('204', 'BEN', 'BJ', 'Bénin'),
  array('60', 'BMU', 'BM', 'Bermudes'),
  array('64', 'BTN', 'BT', 'Bhoutan'),
  array('68', 'BOL', 'BO', 'Bolivie'),
  array('535', 'BES', 'BQ', 'Bonaire', ' Saint-Eustache et Saba'),
  array('70', 'BIH', 'BA', 'Bosnie-Herzégovine'),
  array('72', 'BWA', 'BW', 'Botswana'),
  array('74', 'BVT', 'BV', 'Île Bouvet'),
  array('76', 'BRA', 'BR', 'Brésil'),
  array('96', 'BRN', 'BN', 'Brunei'),
  array('100', 'BGR', 'BG', 'Bulgarie'),
  array('854', 'BFA', 'BF', 'Burkina Faso'),
  array('108', 'BDI', 'BI', 'Burundi'),
  array('136', 'CYM', 'KY', 'Îles Caïmans'),
  array('116', 'KHM', 'KH', 'Cambodge'),
  array('120', 'CMR', 'CM', 'Cameroun'),
  array('124', 'CAN', 'CA', 'Canada'),
  array('132', 'CPV', 'CV', 'Cap-Vert'),
  array('140', 'CAF', 'CF', 'République centrafricaine'),
  array('152', 'CHL', 'CL', 'Chili'),
  array('156', 'CHN', 'CN', 'Chine'),
  array('162', 'CXR', 'CX', 'Île Christmas'),
  array('196', 'CYP', 'CY', 'Chypre'),
  array('166', 'CCK', 'CC', 'Îles Cocos'),
  array('170', 'COL', 'CO', 'Colombie'),
  array('174', 'COM', 'KM', 'Comores'),
  array('178', 'COG', 'CG', 'République du Congo'),
  array('180', 'COD', 'CD', 'République démocratique du Congo'),
  array('184', 'COK', 'CK', 'Îles Cook'),
  array('410', 'KOR', 'KR', 'Corée du Sud'),
  array('408', 'PRK', 'KP', 'Corée du Nord'),
  array('188', 'CRI', 'CR', 'Costa Rica'),
  array('384', 'CIV', 'CI', 'Côte d\'Ivoire'),
  array('191', 'HRV', 'HR', 'Croatie'),
  array('192', 'CUB', 'CU', 'Cuba'),
  array('531', 'CUW', 'CW', 'Curaçao'),
  array('208', 'DNK', 'DK', 'Danemark'),
  array('262', 'DJI', 'DJ', 'Djibouti'),
  array('214', 'DOM', 'DO', 'République dominicaine'),
  array('212', 'DMA', 'DM', 'Dominique'),
  array('818', 'EGY', 'EG', 'Égypte'),
  array('222', 'SLV', 'SV', 'Salvador'),
  array('784', 'ARE', 'AE', 'Émirats arabes unis'),
  array('218', 'ECU', 'EC', 'Équateur'),
  array('232', 'ERI', 'ER', 'Érythrée'),
  array('724', 'ESP', 'ES', 'Espagne'),
  array('233', 'EST', 'EE', 'Estonie'),
  array('840', 'USA', 'US', 'États-Unis'),
  array('231', 'ETH', 'ET', 'Éthiopie'),
  array('238', 'FLK', 'FK', 'Îles Malouines'),
  array('234', 'FRO', 'FO', 'Îles Féroé'),
  array('242', 'FJI', 'FJ', 'Fidji'),
  array('246', 'FIN', 'FI', 'Finlande'),
  array('250', 'FRA', 'FR', 'France'),
  array('266', 'GAB', 'GA', 'Gabon'),
  array('270', 'GMB', 'GM', 'Gambie'),
  array('268', 'GEO', 'GE', 'Géorgie'),
  array('239', 'SGS', 'GS', 'Géorgie du Sud-et-les Îles Sandwich du Sud'),
  array('288', 'GHA', 'GH', 'Ghana'),
  array('292', 'GIB', 'GI', 'Gibraltar'),
  array('300', 'GRC', 'GR', 'Grèce'),
  array('308', 'GRD', 'GD', 'Grenade'),
  array('304', 'GRL', 'GL', 'Groenland'),
  array('312', 'GLP', 'GP', 'Guadeloupe'),
  array('316', 'GUM', 'GU', 'Guam'),
  array('320', 'GTM', 'GT', 'Guatemala'),
  array('831', 'GGY', 'GG', 'Guernesey'),
  array('324', 'GIN', 'GN', 'Guinée'),
  array('624', 'GNB', 'GW', 'Guinée-Bissau'),
  array('226', 'GNQ', 'GQ', 'Guinée équatoriale'),
  array('328', 'GUY', 'GY', 'Guyana'),
  array('254', 'GUF', 'GF', 'Guyane'),
  array('332', 'HTI', 'HT', 'Haïti'),
  array('334', 'HMD', 'HM', 'Îles Heard-et-MacDonald'),
  array('340', 'HND', 'HN', 'Honduras'),
  array('344', 'HKG', 'HK', 'Hong Kong'),
  array('348', 'HUN', 'HU', 'Hongrie'),
  array('833', 'IMN', 'IM', 'Île de Man'),
  array('581', 'UMI', 'UM', 'Îles mineures éloignées des États-Unis'),
  array('92', 'VGB', 'VG', 'Îles Vierges britanniques'),
  array('850', 'VIR', 'VI', 'Îles Vierges des États-Unis'),
  array('356', 'IND', 'IN', 'Inde'),
  array('360', 'IDN', 'ID', 'Indonésie'),
  array('364', 'IRN', 'IR', 'Iran'),
  array('368', 'IRQ', 'IQ', 'Irak'),
  array('372', 'IRL', 'IE', 'Irlande'),
  array('352', 'ISL', 'IS', 'Islande'),
  array('376', 'ISR', 'IL', 'Israël'),
  array('380', 'ITA', 'IT', 'Italie'),
  array('388', 'JAM', 'JM', 'Jamaïque'),
  array('392', 'JPN', 'JP', 'Japon'),
  array('832', 'JEY', 'JE', 'Jersey'),
  array('400', 'JOR', 'JO', 'Jordanie'),
  array('398', 'KAZ', 'KZ', 'Kazakhstan'),
  array('404', 'KEN', 'KE', 'Kenya'),
  array('417', 'KGZ', 'KG', 'Kirghizistan'),
  array('296', 'KIR', 'KI', 'Kiribati'),
  array('414', 'KWT', 'KW', 'Koweït'),
  array('418', 'LAO', 'LA', 'Laos'),
  array('426', 'LSO', 'LS', 'Lesotho'),
  array('428', 'LVA', 'LV', 'Lettonie'),
  array('422', 'LBN', 'LB', 'Liban'),
  array('430', 'LBR', 'LR', 'Liberia'),
  array('434', 'LBY', 'LY', 'Libye'),
  array('438', 'LIE', 'LI', 'Liechtenstein'),
  array('440', 'LTU', 'LT', 'Lituanie'),
  array('442', 'LUX', 'LU', 'Luxembourg'),
  array('446', 'MAC', 'MO', 'Macao'),
  array('807', 'MKD', 'MK', 'Macédoine'),
  array('450', 'MDG', 'MG', 'Madagascar'),
  array('458', 'MYS', 'MY', 'Malaisie'),
  array('454', 'MWI', 'MW', 'Malawi'),
  array('462', 'MDV', 'MV', 'Maldives'),
  array('466', 'MLI', 'ML', 'Mali'),
  array('470', 'MLT', 'MT', 'Malte'),
  array('580', 'MNP', 'MP', 'Îles Mariannes du Nord'),
  array('504', 'MAR', 'MA', 'Maroc'),
  array('584', 'MHL', 'MH', 'Marshall'),
  array('474', 'MTQ', 'MQ', 'Martinique'),
  array('480', 'MUS', 'MU', 'Maurice'),
  array('478', 'MRT', 'MR', 'Mauritanie'),
  array('175', 'MYT', 'YT', 'Mayotte'),
  array('484', 'MEX', 'MX', 'Mexique'),
  array('583', 'FSM', 'FM', 'Micronésie'),
  array('498', 'MDA', 'MD', 'Moldavie'),
  array('492', 'MCO', 'MC', 'Monaco'),
  array('496', 'MNG', 'MN', 'Mongolie'),
  array('499', 'MNE', 'ME', 'Monténégro'),
  array('500', 'MSR', 'MS', 'Montserrat'),
  array('508', 'MOZ', 'MZ', 'Mozambique'),
  array('104', 'MMR', 'MM', 'Birmanie'),
  array('516', 'NAM', 'NA', 'Namibie'),
  array('520', 'NRU', 'NR', 'Nauru'),
  array('524', 'NPL', 'NP', 'Népal'),
  array('558', 'NIC', 'NI', 'Nicaragua'),
  array('562', 'NER', 'NE', 'Niger'),
  array('566', 'NGA', 'NG', 'Nigeria'),
  array('570', 'NIU', 'NU', 'Niue'),
  array('574', 'NFK', 'NF', 'Île Norfolk'),
  array('578', 'NOR', 'NO', 'Norvège'),
  array('540', 'NCL', 'NC', 'Nouvelle-Calédonie'),
  array('554', 'NZL', 'NZ', 'Nouvelle-Zélande'),
  array('86', 'IOT', 'IO', 'Territoire britannique de l\'océan Indien'),
  array('512', 'OMN', 'OM', 'Oman'),
  array('800', 'UGA', 'UG', 'Ouganda'),
  array('860', 'UZB', 'UZ', 'Ouzbékistan'),
  array('586', 'PAK', 'PK', 'Pakistan'),
  array('585', 'PLW', 'PW', 'Palaos'),
  array('275', 'PSE', 'PS', 'Autorité Palestinienne'),
  array('591', 'PAN', 'PA', 'Panama'),
  array('598', 'PNG', 'PG', 'Papouasie-Nouvelle-Guinée'),
  array('600', 'PRY', 'PY', 'Paraguay'),
  array('528', 'NLD', 'NL', 'Pays-Bas'),
  array('604', 'PER', 'PE', 'Pérou'),
  array('608', 'PHL', 'PH', 'Philippines'),
  array('612', 'PCN', 'PN', 'Îles Pitcairn'),
  array('616', 'POL', 'PL', 'Pologne'),
  array('258', 'PYF', 'PF', 'Polynésie française'),
  array('630', 'PRI', 'PR', 'Porto Rico'),
  array('620', 'PRT', 'PT', 'Portugal'),
  array('634', 'QAT', 'QA', 'Qatar'),
  array('638', 'REU', 'RE', 'La Réunion'),
  array('642', 'ROU', 'RO', 'Roumanie'),
  array('826', 'GBR', 'GB', 'Royaume-Uni'),
  array('643', 'RUS', 'RU', 'Russie'),
  array('646', 'RWA', 'RW', 'Rwanda'),
  array('732', 'ESH', 'EH', 'Sahara occidental'),
  array('652', 'BLM', 'BL', 'Saint-Barthélemy'),
  array('659', 'KNA', 'KN', 'Saint-Christophe-et-Niévès'),
  array('674', 'SMR', 'SM', 'Saint-Marin'),
  array('663', 'MAF', 'MF', 'Saint-Martin (Antilles françaises)'),
  array('534', 'SXM', 'SX', 'Saint-Martin'),
  array('666', 'SPM', 'PM', 'Saint-Pierre-et-Miquelon'),
  array('336', 'VAT', 'VA', 'Saint-Siège (État de la Cité du Vatican)'),
  array('670', 'VCT', 'VC', 'Saint-Vincent-et-les-Grenadines'),
  array('654', 'SHN', 'SH', 'Sainte-Hélène', ' Ascension et Tristan da Cunha'),
  array('662', 'LCA', 'LC', 'Sainte-Lucie'),
  array('90', 'SLB', 'SB', 'Salomon'),
  array('882', 'WSM', 'WS', 'Samoa'),
  array('16', 'ASM', 'AS', 'Samoa américaines'),
  array('678', 'STP', 'ST', 'Sao Tomé-et-Principe'),
  array('686', 'SEN', 'SN', 'Sénégal'),
  array('688', 'SRB', 'RS', 'Serbie'),
  array('690', 'SYC', 'SC', 'Seychelles'),
  array('694', 'SLE', 'SL', 'Sierra Leone'),
  array('702', 'SGP', 'SG', 'Singapour'),
  array('703', 'SVK', 'SK', 'Slovaquie'),
  array('705', 'SVN', 'SI', 'Slovénie'),
  array('706', 'SOM', 'SO', 'Somalie'),
  array('729', 'SDN', 'SD', 'Soudan'),
  array('728', 'SSD', 'SS', 'Soudan du Sud'),
  array('144', 'LKA', 'LK', 'Sri Lanka'),
  array('752', 'SWE', 'SE', 'Suède'),
  array('756', 'CHE', 'CH', 'Suisse'),
  array('740', 'SUR', 'SR', 'Suriname'),
  array('744', 'SJM', 'SJ', 'Svalbard et Île Jan Mayen'),
  array('748', 'SWZ', 'SZ', 'Swaziland'),
  array('760', 'SYR', 'SY', 'Syrie'),
  array('762', 'TJK', 'TJ', 'Tadjikistan'),
  array('158', 'TWN', 'TW', 'Taïwan / (République de Chine (Taïwan))'),
  array('834', 'TZA', 'TZ', 'Tanzanie'),
  array('148', 'TCD', 'TD', 'Tchad'),
  array('203', 'CZE', 'CZ', 'République tchèque'),
  array('260', 'ATF', 'TF', 'Terres australes et antarctiques françaises'),
  array('764', 'THA', 'TH', 'Thaïlande'),
  array('626', 'TLS', 'TL', 'Timor oriental'),
  array('768', 'TGO', 'TG', 'Togo'),
  array('772', 'TKL', 'TK', 'Tokelau'),
  array('776', 'TON', 'TO', 'Tonga'),
  array('780', 'TTO', 'TT', 'Trinité-et-Tobago'),
  array('788', 'TUN', 'TN', 'Tunisie'),
  array('795', 'TKM', 'TM', 'Turkménistan'),
  array('796', 'TCA', 'TC', 'Îles Turques-et-Caïques'),
  array('792', 'TUR', 'TR', 'Turquie'),
  array('798', 'TUV', 'TV', 'Tuvalu'),
  array('804', 'UKR', 'UA', 'Ukraine'),
  array('858', 'URY', 'UY', 'Uruguay'),
  array('548', 'VUT', 'VU', 'Vanuatu'),
  array('862', 'VEN', 'VE', 'Venezuela'),
  array('704', 'VNM', 'VN', 'VietNam'),
  array('876', 'WLF', 'WF', 'Wallis-et-Futuna'),
  array('887', 'YEM', 'YE', 'Yémen'),
  array('894', 'ZMB', 'ZM', 'Zambie'),
  array('716', 'ZWE', 'ZW', 'Zimbabwe')
);

$depFr = array();
$depFr["01"] = "Ain";
$depFr["02"] = "Aisne";
$depFr["03"] = "Allier";
$depFr["04"] = "Alpes-de-Haute-Provence";
$depFr["06"] = "Alpes-Maritimes";
$depFr["07"] = "Ardèche";
$depFr["08"] = "Ardennes";
$depFr["09"] = "Ariège";
$depFr["10"] = "Aube";
$depFr["11"] = "Aude";
$depFr["12"] = "Aveyron";
$depFr["67"] = "Bas-Rhin";
$depFr["13"] = "Bouches-du-Rhône";
$depFr["14"] = "Calvados";
$depFr["15"] = "Cantal";
$depFr["16"] = "Charente";
$depFr["17"] = "Charente-Maritime";
$depFr["18"] = "Cher";
$depFr["19"] = "Corrèze";
$depFr["2A"] = "Corse-du-Sud";
$depFr["21"] = "Côte-d'Or";
$depFr["22"] = "Côtes-d'Armor";
$depFr["23"] = "Creuse";
$depFr["79"] = "Deux-Sèvres";
$depFr["24"] = "Dordogne";
$depFr["25"] = "Doubs";
$depFr["26"] = "Drôme";
$depFr["91"] = "Essonne";
$depFr["27"] = "Eure";
$depFr["28"] = "Eure-et-Loir";
$depFr["29"] = "Finistère";
$depFr["30"] = "Gard";
$depFr["32"] = "Gers";
$depFr["33"] = "Gironde";
$depFr["971"] = "Guadeloupe";
$depFr["973"] = "Guyane";
$depFr["05"] = "Hautes-Alpes";
$depFr["65"] = "Hautes-Pyrénées";
$depFr["2B"] = "Haute-Corse";
$depFr["31"] = "Haute-Garonne";
$depFr["43"] = "Haute-Loire";
$depFr["52"] = "Haute-Marne";
$depFr["70"] = "Haute-Saône";
$depFr["74"] = "Haute-Savoie";
$depFr["87"] = "Haute-Vienne";
$depFr["92"] = "Hauts-de-Seine";
$depFr["68"] = "Haut-Rhin";
$depFr["34"] = "Hérault";
$depFr["35"] = "Ille-et-Vilaine";
$depFr["36"] = "Indre";
$depFr["37"] = "Indre-et-Loire";
$depFr["38"] = "Isère";
$depFr["39"] = "Jura";
$depFr["40"] = "Landes";
$depFr["974"] = "La Réunion";
$depFr["42"] = "Loire";
$depFr["45"] = "Loiret";
$depFr["44"] = "Loire-Atlantique";
$depFr["41"] = "Loir-et-Cher";
$depFr["46"] = "Lot";
$depFr["47"] = "Lot-et-Garonne";
$depFr["48"] = "Lozère";
$depFr["49"] = "Maine-et-Loire";
$depFr["50"] = "Manche";
$depFr["51"] = "Marne";
$depFr["972"] = "Martinique";
$depFr["53"] = "Mayenne";
$depFr["976"] = "Mayotte";
$depFr["54"] = "Meurthe-et-Moselle";
$depFr["55"] = "Meuse";
$depFr["56"] = "Morbihan";
$depFr["57"] = "Moselle";
$depFr["58"] = "Nièvre";
$depFr["59"] = "Nord";
$depFr["60"] = "Oise";
$depFr["61"] = "Orne";
$depFr["75"] = "Paris";
$depFr["62"] = "Pas-de-Calais";
$depFr["63"] = "Puy-de-Dôme";
$depFr["64"] = "Pyrénées-Atlantiques";
$depFr["66"] = "Pyrénées-Orientales";
$depFr["69"] = "Rhône";
$depFr["71"] = "Saône-et-Loire";
$depFr["72"] = "Sarthe";
$depFr["73"] = "Savoie";
$depFr["93"] = "Seine-Saint-Denis";
$depFr["76"] = "Seine-Maritime";
$depFr["77"] = "Seine-et-Marne";
$depFr["80"] = "Somme";
$depFr["81"] = "Tarn";
$depFr["82"] = "Tarn-et-Garonne";
$depFr["90"] = "Territoire de Belfort";
$depFr["94"] = "Val-de-Marne";
$depFr["95"] = "Val-d'Oise";
$depFr["83"] = "Var";
$depFr["84"] = "Vaucluse";
$depFr["85"] = "Vendée";
$depFr["86"] = "Vienne";
$depFr["88"] = "Vosges";
$depFr["89"] = "Yonne";
$depFr["78"] = "Yvelines";
