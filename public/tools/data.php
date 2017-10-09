<?php

$data = json_decode('[
	{ "city":"Shanghai","country":"China","img":"/img/world-city-maps/shanghai_china.png"},
	{ "city":"Istanbul","country":"Turkey","img":"/img/world-city-maps/istanbul_turkey.png"},
	{ "city":"Karachi","country":"Pakistan","img":"/img/world-city-maps/karachi_pakistan.png"},
	{ "city":"Mumbai","country":"India","img":"/img/world-city-maps/mumbai_india.png"},
	{ "city":"Moscow","country":"Russia","img":"/img/world-city-maps/moscow_russia.png"},
	{ "city":"Beijing","country":"China","img":"/img/world-city-maps/beijing_china.png"},
	{ "city":"Sao Paulo","country":"Brazil","img":"/img/world-city-maps/sao_paulo_brazil.png"},
	{ "city":"Tianjin","country":"China","img":"/img/world-city-maps/tianjin_china.png"},
	{ "city":"Guangzhou","country":"China","img":"/img/world-city-maps/guangzhou_china.png"},
	{ "city":"Delhi","country":"India","img":"/img/world-city-maps/delhi_india.png"},
	{ "city":"Seoul","country":"South Korea","img":"/img/world-city-maps/seoul_south_korea.png"},
	{ "city":"Shenzhen","country":"China","img":"/img/world-city-maps/shenzhen_china.png"},
	{ "city":"Jakarta","country":"Indonesia","img":"/img/world-city-maps/jakarta_indonesia.png"},
	{ "city":"Tokyo","country":"Japan","img":"/img/world-city-maps/tokyo_japan.png"},
	{ "city":"Mexico City","country":"Mexico","img":"/img/world-city-maps/mexico_city_mexico.png"},
	{ "city":"Kinshasa","country":"Democratic Republic of the Congo","img":"/img/world-city-maps/kinshasa_democratic_republic_of_the_congo.png"},
	{ "city":"Bangalore","country":"India","img":"/img/world-city-maps/bangalore_india.png"},
	{ "city":"New York City","country":"United States","img":"/img/world-city-maps/new_york_city_united_states.png"},
	{ "city":"Tehran","country":"Iran","img":"/img/world-city-maps/tehran_iran.png"},
	{ "city":"Dongguan","country":"China","img":"/img/world-city-maps/dongguan_china.png"},
	{ "city":"London","country":"United Kingdom","img":"/img/world-city-maps/london_united_kingdom.png"},
	{ "city":"Lagos","country":"Nigeria","img":"/img/world-city-maps/lagos_nigeria.png"},
	{ "city":"Lima","country":"Peru","img":"/img/world-city-maps/lima_peru.png"},
	{ "city":"Ho Chi Minh City","country":"Vietnam","img":"/img/world-city-maps/ho_chi_minh_city_vietnam.png"},
	{ "city":"Bogota","country":"Colombia","img":"/img/world-city-maps/bogota_colombia.png"},
	{ "city":"Hong Kong","country":"China","img":"/img/world-city-maps/hong_kong_china.png"},
	{ "city":"Bangkok","country":"Thailand","img":"/img/world-city-maps/bangkok_thailand.png"},
	{ "city":"Dhaka","country":"Bangladesh","img":"/img/world-city-maps/dhaka_bangladesh.png"},
	{ "city":"Hyderabad","country":"India","img":"/img/world-city-maps/hyderabad_india.png"},
	{ "city":"Cairo","country":"Egypt","img":"/img/world-city-maps/cairo_egypt.png"},
	{ "city":"Hanoi","country":"Vietnam","img":"/img/world-city-maps/hanoi_vietnam.png"},
	{ "city":"Rio de Janeiro","country":"Brazil","img":"/img/world-city-maps/rio_de_janeiro_brazil.png"},
	{ "city":"Lahore","country":"Pakistan","img":"/img/world-city-maps/lahore_pakistan.png"},
	{ "city":"Ahmedabad","country":"India","img":"/img/world-city-maps/ahmedabad_india.png"},
	{ "city":"Baghdad","country":"Iraq","img":"/img/world-city-maps/baghdad_iraq.png"},
	{ "city":"Riyadh","country":"Saudi Arabia","img":"/img/world-city-maps/riyadh_saudi_arabia.png"},
	{ "city":"Singapore","country":"Singapore","img":"/img/world-city-maps/singapore_singapore.png"},
	{ "city":"Santiago","country":"Chile","img":"/img/world-city-maps/santiago_chile.png"},
	{ "city":"Saint Petersburg","country":"Russia","img":"/img/world-city-maps/saint_petersburg_russia.png"},
	{ "city":"Chennai","country":"India","img":"/img/world-city-maps/chennai_india.png"},
	{ "city":"Ankara","country":"Turkey","img":"/img/world-city-maps/ankara_turkey.png"},
	{ "city":"Kolkata","country":"India","img":"/img/world-city-maps/kolkata_india.png"},
	{ "city":"Surat","country":"India","img":"/img/world-city-maps/surat_india.png"},
	{ "city":"Yangon","country":"Myanmar","img":"/img/world-city-maps/yangon_myanmar.png"},
	{ "city":"Alexandria","country":"Egypt","img":"/img/world-city-maps/alexandria_egypt.png"},
	{ "city":"Shenyang","country":"China","img":"/img/world-city-maps/shenyang_china.png"},
	{ "city":"Suzhou","country":"China","img":"/img/world-city-maps/suzhou_china.png"},
	{ "city":"New Taipei City","country":"Republic of China (Taiwan)","img":"/img/world-city-maps/new_taipei_city_republic_of_china_taiwan_.png"},
	{ "city":"Johannesburg","country":"South Africa","img":"/img/world-city-maps/johannesburg_south_africa.png"},
	{ "city":"Los Angeles","country":"United States","img":"/img/world-city-maps/los_angeles_united_states.png"},
	{ "city":"Yokohama","country":"Japan","img":"/img/world-city-maps/yokohama_japan.png"},
	{ "city":"Abidjan","country":"Ivory Coast","img":"/img/world-city-maps/abidjan_ivory_coast.png"},
	{ "city":"Busan","country":"South Korea","img":"/img/world-city-maps/busan_south_korea.png"},
	{ "city":"Berlin","country":"Germany","img":"/img/world-city-maps/berlin_germany.png"},
	{ "city":"Cape Town","country":"South Africa","img":"/img/world-city-maps/cape_town_south_africa.png"},
	{ "city":"Durban","country":"South Africa","img":"/img/world-city-maps/durban_south_africa.png"},
	{ "city":"Jeddah","country":"Saudi Arabia","img":"/img/world-city-maps/jeddah_saudi_arabia.png"},
	{ "city":"Pyongyang","country":"North Korea","img":"/img/world-city-maps/pyongyang_north_korea.png"},
	{ "city":"Madrid","country":"Spain","img":"/img/world-city-maps/madrid_spain.png"},
	{ "city":"Nairobi","country":"Kenya","img":"/img/world-city-maps/nairobi_kenya.png"},
	{ "city":"Pune","country":"India","img":"/img/world-city-maps/pune_india.png"},
	{ "city":"Jaipur","country":"India","img":"/img/world-city-maps/jaipur_india.png"},
	{ "city":"Addis Ababa","country":"Ethiopia","img":"/img/world-city-maps/addis_ababa_ethiopia.png"},
	{ "city":"Casablanca","country":"Morocco","img":"/img/world-city-maps/casablanca_moroccoa.png"}
]');