<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Constraint\Count;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('id' => 1,  'short_description' => 'AF', 'long_description' => 'Afganistán'),
            array('id' => 2,  'short_description' => 'AX', 'long_description' => 'Islas Gland'),
            array('id' => 3,  'short_description' => 'AL', 'long_description' => 'Albania'),
            array('id' => 4,  'short_description' => 'DE', 'long_description' => 'Alemania'),
            array('id' => 5,  'short_description' => 'AD', 'long_description' => 'Andorra'),
            array('id' => 6,  'short_description' => 'AO', 'long_description' => 'Angola'),
            array('id' => 7,  'short_description' => 'AI', 'long_description' => 'Anguilla'),
            array('id' => 8,  'short_description' => 'AQ', 'long_description' => 'Antártida'),
            array('id' => 9,  'short_description' => 'AG', 'long_description' => 'Antigua y Barbuda'),
            array('id' => 10, 'short_description' => 'AN', 'long_description' =>  'Antillas Holandesas'),
            array('id' => 11, 'short_description' => 'SA', 'long_description' =>  'Arabia Saudí'),
            array('id' => 12, 'short_description' => 'DZ', 'long_description' =>  'Argelia'),
            array('id' => 13, 'short_description' => 'AR', 'long_description' =>  'Argentina'),
            array('id' => 14, 'short_description' => 'AM', 'long_description' =>  'Armenia'),
            array('id' => 15, 'short_description' => 'AW', 'long_description' =>  'Aruba'),
            array('id' => 16, 'short_description' => 'AU', 'long_description' =>  'Australia'),
            array('id' => 17, 'short_description' => 'AT', 'long_description' =>  'Austria'),
            array('id' => 18, 'short_description' => 'AZ', 'long_description' =>  'Azerbaiyán'),
            array('id' => 19, 'short_description' => 'BS', 'long_description' =>  'Bahamas'),
            array('id' => 20, 'short_description' => 'BH', 'long_description' =>  'Bahréin'),
            array('id' => 21, 'short_description' => 'BD', 'long_description' =>  'Bangladesh'),
            array('id' => 22, 'short_description' => 'BB', 'long_description' =>  'Barbados'),
            array('id' => 23, 'short_description' => 'BY', 'long_description' =>  'Bielorrusia'),
            array('id' => 24, 'short_description' => 'BE', 'long_description' =>  'Bélgica'),
            array('id' => 25, 'short_description' => 'BZ', 'long_description' =>  'Belice'),
            array('id' => 26, 'short_description' => 'BJ', 'long_description' =>  'Benin'),
            array('id' => 27, 'short_description' => 'BM', 'long_description' =>  'Bermudas'),
            array('id' => 28, 'short_description' => 'BT', 'long_description' =>  'Bhután'),
            array('id' => 29, 'short_description' => 'BO', 'long_description' =>  'Bolivia'),
            array('id' => 30, 'short_description' => 'BA', 'long_description' =>  'Bosnia y Herzegovina'),
            array('id' => 31, 'short_description' => 'BW', 'long_description' =>  'Botsuana'),
            array('id' => 32, 'short_description' => 'BV', 'long_description' =>  'Isla Bouvet'),
            array('id' => 33, 'short_description' => 'BR', 'long_description' =>  'Brasil'),
            array('id' => 34, 'short_description' => 'BN', 'long_description' =>  'Brunéi'),
            array('id' => 35, 'short_description' => 'BG', 'long_description' =>  'Bulgaria'),
            array('id' => 36, 'short_description' => 'BF', 'long_description' =>  'Burkina Faso'),
            array('id' => 37, 'short_description' => 'BI', 'long_description' =>  'Burundi'),
            array('id' => 38, 'short_description' => 'CV', 'long_description' =>  'Cabo Verde'),
            array('id' => 39, 'short_description' => 'KY', 'long_description' =>  'Islas Caimán'),
            array('id' => 40, 'short_description' => 'KH', 'long_description' =>  'Camboya'),
            array('id' => 41, 'short_description' => 'CM', 'long_description' =>  'Camerún'),
            array('id' => 42, 'short_description' => 'CA', 'long_description' =>  'Canadá'),
            array('id' => 43, 'short_description' => 'CF', 'long_description' =>  'República Centroafricana'),
            array('id' => 44, 'short_description' => 'TD', 'long_description' =>  'Chad'),
            array('id' => 45, 'short_description' => 'CZ', 'long_description' =>  'República Checa'),
            array('id' => 46, 'short_description' => 'CL', 'long_description' =>  'Chile'),
            array('id' => 47, 'short_description' => 'CN', 'long_description' =>  'China'),
            array('id' => 48, 'short_description' => 'CY', 'long_description' =>  'Chipre'),
            array('id' => 49, 'short_description' => 'CX', 'long_description' =>  'Isla de Navidad'),
            array('id' => 50, 'short_description' => 'VA', 'long_description' =>  'Ciudad del Vaticano'),
            array('id' => 51, 'short_description' => 'CC', 'long_description' =>  'Islas Cocos'),
            array('id' => 52, 'short_description' => 'CO', 'long_description' =>  'Colombia'),
            array('id' => 53, 'short_description' => 'KM', 'long_description' =>  'Comoras'),
            array('id' => 54, 'short_description' => 'CD', 'long_description' =>  'República Democrática del Congo'),
            array('id' => 55, 'short_description' => 'CG', 'long_description' =>  'Congo'),
            array('id' => 56, 'short_description' => 'CK', 'long_description' =>  'Islas Cook'),
            array('id' => 57, 'short_description' => 'KP', 'long_description' =>  'Corea del Norte'),
            array('id' => 58, 'short_description' => 'KR', 'long_description' =>  'Corea del Sur'),
            array('id' => 59, 'short_description' => 'CI', 'long_description' =>  'Costa de Marfil'),
            array('id' => 60, 'short_description' => 'CR', 'long_description' =>  'Costa Rica'),
            array('id' => 61, 'short_description' => 'HR', 'long_description' =>  'Croacia'),
            array('id' => 62, 'short_description' => 'CU', 'long_description' =>  'Cuba'),
            array('id' => 63, 'short_description' => 'DK', 'long_description' =>  'Dinamarca'),
            array('id' => 64, 'short_description' => 'DM', 'long_description' =>  'Dominica'),
            array('id' => 65, 'short_description' => 'DO', 'long_description' =>  'República Dominicana'),
            array('id' => 66, 'short_description' => 'EC', 'long_description' =>  'Ecuador'),
            array('id' => 67, 'short_description' => 'EG', 'long_description' =>  'Egipto'),
            array('id' => 68, 'short_description' => 'SV', 'long_description' =>  'El Salvador'),
            array('id' => 69, 'short_description' => 'AE', 'long_description' =>  'Emiratos Árabes Unidos'),
            array('id' => 70, 'short_description' => 'ER', 'long_description' =>  'Eritrea'),
            array('id' => 71, 'short_description' => 'SK', 'long_description' =>  'Eslovaquia'),
            array('id' => 72, 'short_description' => 'SI', 'long_description' =>  'Eslovenia'),
            array('id' => 73, 'short_description' => 'ES', 'long_description' =>  'España'),
            array('id' => 74, 'short_description' => 'UM', 'long_description' =>  'Islas ultramarinas de Estados Unidos'),
            array('id' => 75, 'short_description' => 'US', 'long_description' =>  'Estados Unidos'),
            array('id' => 76, 'short_description' => 'EE', 'long_description' =>  'Estonia'),
            array('id' => 77, 'short_description' => 'ET', 'long_description' =>  'Etiopía'),
            array('id' => 78, 'short_description' => 'FO', 'long_description' =>  'Islas Feroe'),
            array('id' => 79, 'short_description' => 'PH', 'long_description' =>  'Filipinas'),
            array('id' => 80, 'short_description' => 'FI', 'long_description' =>  'Finlandia'),
            array('id' => 81, 'short_description' => 'FJ', 'long_description' =>  'Fiyi'),
            array('id' => 82, 'short_description' => 'FR', 'long_description' =>  'Francia'),
            array('id' => 83, 'short_description' => 'GA', 'long_description' =>  'Gabón'),
            array('id' => 84, 'short_description' => 'GM', 'long_description' =>  'Gambia'),
            array('id' => 85, 'short_description' => 'GE', 'long_description' =>  'Georgia'),
            array('id' => 86, 'short_description' => 'GS', 'long_description' =>  'Islas Georgias del Sur y Sandwich del Sur'),
            array('id' => 87, 'short_description' => 'GH', 'long_description' =>  'Ghana'),
            array('id' => 88, 'short_description' => 'GI', 'long_description' =>  'Gibraltar'),
            array('id' => 89, 'short_description' => 'GD', 'long_description' =>  'Granada'),
            array('id' => 90, 'short_description' => 'GR', 'long_description' =>  'Grecia'),
            array('id' => 91, 'short_description' => 'GL', 'long_description' =>  'Groenlandia'),
            array('id' => 92, 'short_description' => 'GP', 'long_description' =>  'Guadalupe'),
            array('id' => 93, 'short_description' => 'GU', 'long_description' =>  'Guam'),
            array('id' => 94, 'short_description' => 'GT', 'long_description' =>  'Guatemala'),
            array('id' => 95, 'short_description' => 'GF', 'long_description' =>  'Guayana Francesa'),
            array('id' => 96, 'short_description' => 'GN', 'long_description' =>  'Guinea'),
            array('id' => 97, 'short_description' => 'GQ', 'long_description' =>  'Guinea Ecuatorial'),
            array('id' => 98, 'short_description' => 'GW', 'long_description' =>  'Guinea-Bissau'),
            array('id' => 99, 'short_description' => 'GY', 'long_description' =>  'Guyana'),
            array('id' => 100, 'short_description' => 'HT', 'long_description' =>  'Haití'),
            array('id' => 101, 'short_description' => 'HM', 'long_description' =>  'Islas Heard y McDonald'),
            array('id' => 102, 'short_description' => 'HN', 'long_description' =>  'Honduras'),
            array('id' => 103, 'short_description' => 'HK', 'long_description' =>  'Hong Kong'),
            array('id' => 104, 'short_description' => 'HU', 'long_description' =>  'Hungría'),
            array('id' => 105, 'short_description' => 'IN', 'long_description' =>  'India'),
            array('id' => 106, 'short_description' => 'ID', 'long_description' =>  'Indonesia'),
            array('id' => 107, 'short_description' => 'IR', 'long_description' =>  'Irán'),
            array('id' => 108, 'short_description' => 'IQ', 'long_description' =>  'Iraq'),
            array('id' => 109, 'short_description' => 'IE', 'long_description' =>  'Irlanda'),
            array('id' => 110, 'short_description' => 'IS', 'long_description' =>  'Islandia'),
            array('id' => 111, 'short_description' => 'IL', 'long_description' =>  'Israel'),
            array('id' => 112, 'short_description' => 'IT', 'long_description' =>  'Italia'),
            array('id' => 113, 'short_description' => 'JM', 'long_description' =>  'Jamaica'),
            array('id' => 114, 'short_description' => 'JP', 'long_description' =>  'Japón'),
            array('id' => 115, 'short_description' => 'JO', 'long_description' =>  'Jordania'),
            array('id' => 116, 'short_description' => 'KZ', 'long_description' =>  'Kazajstán'),
            array('id' => 117, 'short_description' => 'KE', 'long_description' =>  'Kenia'),
            array('id' => 118, 'short_description' => 'KG', 'long_description' =>  'Kirguistán'),
            array('id' => 119, 'short_description' => 'KI', 'long_description' =>  'Kiribati'),
            array('id' => 120, 'short_description' => 'KW', 'long_description' => 'Kuwait'),
            array('id' => 121, 'short_description' => 'LA', 'long_description' => 'Laos'),
            array('id' => 122, 'short_description' => 'LS', 'long_description' => 'Lesotho'),
            array('id' => 123, 'short_description' => 'LV', 'long_description' => 'Letonia'),
            array('id' => 124, 'short_description' => 'LB', 'long_description' => 'Líbano'),
            array('id' => 125, 'short_description' => 'LR', 'long_description' => 'Liberia'),
            array('id' => 126, 'short_description' => 'LY', 'long_description' => 'Libia'),
            array('id' => 127, 'short_description' => 'LI', 'long_description' => 'Liechtenstein'),
            array('id' => 128, 'short_description' => 'LT', 'long_description' => 'Lituania'),
            array('id' => 129, 'short_description' => 'LU', 'long_description' => 'Luxemburgo'),
            array('id' => 130, 'short_description' => 'MO', 'long_description' => 'Macao'),
            array('id' => 131, 'short_description' => 'MK', 'long_description' => 'ARY Macedonia'),
            array('id' => 132, 'short_description' => 'MG', 'long_description' => 'Madagascar'),
            array('id' => 133, 'short_description' => 'MY', 'long_description' => 'Malasia'),
            array('id' => 134, 'short_description' => 'MW', 'long_description' => 'Malawi'),
            array('id' => 135, 'short_description' => 'MV', 'long_description' => 'Maldivas'),
            array('id' => 136, 'short_description' => 'ML', 'long_description' => 'Malí'),
            array('id' => 137, 'short_description' => 'MT', 'long_description' => 'Malta'),
            array('id' => 138, 'short_description' => 'FK', 'long_description' => 'Islas Malvinas'),
            array('id' => 139, 'short_description' => 'MP', 'long_description' => 'Islas Marianas del Norte'),
            array('id' => 140, 'short_description' => 'MA', 'long_description' => 'Marruecos'),
            array('id' => 141, 'short_description' => 'MH', 'long_description' => 'Islas Marshall'),
            array('id' => 142, 'short_description' => 'MQ', 'long_description' => 'Martinica'),
            array('id' => 143, 'short_description' => 'MU', 'long_description' => 'Mauricio'),
            array('id' => 144, 'short_description' => 'MR', 'long_description' => 'Mauritania'),
            array('id' => 145, 'short_description' => 'YT', 'long_description' => 'Mayotte'),
            array('id' => 146, 'short_description' => 'MX', 'long_description' => 'México'),
            array('id' => 147, 'short_description' => 'FM', 'long_description' => 'Micronesia'),
            array('id' => 148, 'short_description' => 'MD', 'long_description' => 'Moldavia'),
            array('id' => 149, 'short_description' => 'MC', 'long_description' => 'Mónaco'),
            array('id' => 150, 'short_description' => 'MN', 'long_description' => 'Mongolia'),
            array('id' => 151, 'short_description' => 'MS', 'long_description' => 'Montserrat'),
            array('id' => 152, 'short_description' => 'MZ', 'long_description' => 'Mozambique'),
            array('id' => 153, 'short_description' => 'MM', 'long_description' => 'Myanmar'),
            array('id' => 154, 'short_description' => 'NA', 'long_description' => 'Namibia'),
            array('id' => 155, 'short_description' => 'NR', 'long_description' => 'Nauru'),
            array('id' => 156, 'short_description' => 'NP', 'long_description' => 'Nepal'),
            array('id' => 157, 'short_description' => 'NI', 'long_description' => 'Nicaragua'),
            array('id' => 158, 'short_description' => 'NE', 'long_description' => 'Níger'),
            array('id' => 159, 'short_description' => 'NG', 'long_description' => 'Nigeria'),
            array('id' => 160, 'short_description' => 'NU', 'long_description' => 'Niue'),
            array('id' => 161, 'short_description' => 'NF', 'long_description' => 'Isla Norfolk'),
            array('id' => 162, 'short_description' => 'NO', 'long_description' => 'Noruega'),
            array('id' => 163, 'short_description' => 'NC', 'long_description' => 'Nueva Caledonia'),
            array('id' => 164, 'short_description' => 'NZ', 'long_description' => 'Nueva Zelanda'),
            array('id' => 165, 'short_description' => 'OM', 'long_description' => 'Omán'),
            array('id' => 166, 'short_description' => 'NL', 'long_description' => 'Países Bajos'),
            array('id' => 167, 'short_description' => 'PK', 'long_description' => 'Pakistán'),
            array('id' => 168, 'short_description' => 'PW', 'long_description' => 'Palau'),
            array('id' => 169, 'short_description' => 'PS', 'long_description' => 'Palestina'),
            array('id' => 170, 'short_description' => 'PA', 'long_description' => 'Panamá'),
            array('id' => 171, 'short_description' => 'PG', 'long_description' => 'Papúa Nueva Guinea'),
            array('id' => 172, 'short_description' => 'PY', 'long_description' => 'Paraguay'),
            array('id' => 173, 'short_description' => 'PE', 'long_description' => 'Perú'),
            array('id' => 174, 'short_description' => 'PN', 'long_description' => 'Islas Pitcairn'),
            array('id' => 175, 'short_description' => 'PF', 'long_description' => 'Polinesia Francesa'),
            array('id' => 176, 'short_description' => 'PL', 'long_description' => 'Polonia'),
            array('id' => 177, 'short_description' => 'PT', 'long_description' => 'Portugal'),
            array('id' => 178, 'short_description' => 'PR', 'long_description' => 'Puerto Rico'),
            array('id' => 179, 'short_description' => 'QA', 'long_description' => 'Qatar'),
            array('id' => 180, 'short_description' => 'GB', 'long_description' => 'Reino Unido'),
            array('id' => 181, 'short_description' => 'RE', 'long_description' => 'Reunión'),
            array('id' => 182, 'short_description' => 'RW', 'long_description' => 'Ruanda'),
            array('id' => 183, 'short_description' => 'RO', 'long_description' => 'Rumania'),
            array('id' => 184, 'short_description' => 'RU', 'long_description' => 'Rusia'),
            array('id' => 185, 'short_description' => 'EH', 'long_description' => 'Sahara Occidental'),
            array('id' => 186, 'short_description' => 'SB', 'long_description' => 'Islas Salomón'),
            array('id' => 187, 'short_description' => 'WS', 'long_description' => 'Samoa'),
            array('id' => 188, 'short_description' => 'AS', 'long_description' => 'Samoa Americana'),
            array('id' => 189, 'short_description' => 'KN', 'long_description' => 'San Cristóbal y Nevis'),
            array('id' => 190, 'short_description' => 'SM', 'long_description' => 'San Marino'),
            array('id' => 191, 'short_description' => 'PM', 'long_description' => 'San Pedro y Miquelón'),
            array('id' => 192, 'short_description' => 'VC', 'long_description' => 'San Vicente y las Granadinas'),
            array('id' => 193, 'short_description' => 'SH', 'long_description' => 'Santa Helena'),
            array('id' => 194, 'short_description' => 'LC', 'long_description' => 'Santa Lucía'),
            array('id' => 195, 'short_description' => 'ST', 'long_description' => 'Santo Tomé y Príncipe'),
            array('id' => 196, 'short_description' => 'SN', 'long_description' => 'Senegal'),
            array('id' => 197, 'short_description' => 'CS', 'long_description' => 'Serbia y Montenegro'),
            array('id' => 198, 'short_description' => 'SC', 'long_description' => 'Seychelles'),
            array('id' => 199, 'short_description' => 'SL', 'long_description' => 'Sierra Leona'),
            array('id' => 200, 'short_description' => 'SG', 'long_description' => 'Singapur'),
            array('id' => 201, 'short_description' => 'SY', 'long_description' => 'Siria'),
            array('id' => 202, 'short_description' => 'SO', 'long_description' => 'Somalia'),
            array('id' => 203, 'short_description' => 'LK', 'long_description' => 'Sri Lanka'),
            array('id' => 204, 'short_description' => 'SZ', 'long_description' => 'Suazilandia'),
            array('id' => 205, 'short_description' => 'ZA', 'long_description' => 'Sudáfrica'),
            array('id' => 206, 'short_description' => 'SD', 'long_description' => 'Sudán'),
            array('id' => 207, 'short_description' => 'SE', 'long_description' => 'Suecia'),
            array('id' => 208, 'short_description' => 'CH', 'long_description' => 'Suiza'),
            array('id' => 209, 'short_description' => 'SR', 'long_description' => 'Surinam'),
            array('id' => 210, 'short_description' => 'SJ', 'long_description' => 'Svalbard y Jan Mayen'),
            array('id' => 211, 'short_description' => 'TH', 'long_description' => 'Tailandia'),
            array('id' => 212, 'short_description' => 'TW', 'long_description' => 'Taiwán'),
            array('id' => 213, 'short_description' => 'TZ', 'long_description' => 'Tanzania'),
            array('id' => 214, 'short_description' => 'TJ', 'long_description' => 'Tayikistán'),
            array('id' => 215, 'short_description' => 'IO', 'long_description' => 'Territorio Británico del Océano Índico'),
            array('id' => 216, 'short_description' => 'TF', 'long_description' => 'Territorios Australes Franceses'),
            array('id' => 217, 'short_description' => 'TL', 'long_description' => 'Timor Oriental'),
            array('id' => 218, 'short_description' => 'TG', 'long_description' => 'Togo'),
            array('id' => 219, 'short_description' => 'TK', 'long_description' => 'Tokelau'),
            array('id' => 220, 'short_description' => 'TO', 'long_description' => 'Tonga'),
            array('id' => 221, 'short_description' => 'TT', 'long_description' => 'Trinidad y Tobago'),
            array('id' => 222, 'short_description' => 'TN', 'long_description' => 'Túnez'),
            array('id' => 223, 'short_description' => 'TC', 'long_description' => 'Islas Turcas y Caicos'),
            array('id' => 224, 'short_description' => 'TM', 'long_description' => 'Turkmenistán'),
            array('id' => 225, 'short_description' => 'TR', 'long_description' => 'Turquía'),
            array('id' => 226, 'short_description' => 'TV', 'long_description' => 'Tuvalu'),
            array('id' => 227, 'short_description' => 'UA', 'long_description' => 'Ucrania'),
            array('id' => 228, 'short_description' => 'UG', 'long_description' => 'Uganda'),
            array('id' => 229, 'short_description' => 'UY', 'long_description' => 'Uruguay'),
            array('id' => 230, 'short_description' => 'UZ', 'long_description' => 'Uzbekistán'),
            array('id' => 231, 'short_description' => 'VU', 'long_description' => 'Vanuatu'),
            array('id' => 232, 'short_description' => 'VE', 'long_description' => 'Venezuela'),
            array('id' => 233, 'short_description' => 'VN', 'long_description' => 'Vietnam'),
            array('id' => 234, 'short_description' => 'VG', 'long_description' => 'Islas Vírgenes Británicas'),
            array('id' => 235, 'short_description' => 'VI', 'long_description' => 'Islas Vírgenes de los Estados Unidos'),
            array('id' => 236, 'short_description' => 'WF', 'long_description' => 'Wallis y Futuna'),
            array('id' => 237, 'short_description' => 'YE', 'long_description' => 'Yemen'),
            array('id' => 238, 'short_description' => 'DJ', 'long_description' => 'Yibuti'),
            array('id' => 239, 'short_description' => 'ZM', 'long_description' => 'Zambia'),
            array('id' => 240, 'short_description' => 'ZW', 'long_description' => 'Zimbabue'),
        );

        foreach ($countries as $key => $item) {
            Country::create([
                'id' =>  $item['id'],
                'short_description' => mb_strtoupper($item['short_description']),
                'long_description' => mb_strtoupper($item['long_description']),
            ]);
        }
    }
}
