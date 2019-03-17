<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::resource('dataTafsir', 'DataTafsirController');
Route::get('Al-Fatihah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah1'));
Route::get('Al-Baqarah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah2'));
Route::get('Ali-`Imran', array('middleware' => 'cors', 'uses' => 'ApiController@Surah3'));
Route::get('An-Nisa`', array('middleware' => 'cors', 'uses' => 'ApiController@Surah4'));
Route::get('Al-Ma`idah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah5'));
Route::get('Al-An`am', array('middleware' => 'cors', 'uses' => 'ApiController@Surah6'));
Route::get('Al-A`raf', array('middleware' => 'cors', 'uses' => 'ApiController@Surah7'));
Route::get('Al-Anfal', array('middleware' => 'cors', 'uses' => 'ApiController@Surah8'));
Route::get('At-Taubah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah9'));
Route::get('Yunus', array('middleware' => 'cors', 'uses' => 'ApiController@Surah10'));
Route::get('Hud', array('middleware' => 'cors', 'uses' => 'ApiController@Surah11'));
Route::get('Yusuf', array('middleware' => 'cors', 'uses' => 'ApiController@Surah12'));
Route::get('Ar-Ra`d', array('middleware' => 'cors', 'uses' => 'ApiController@Surah13'));
Route::get('Ibrahim', array('middleware' => 'cors', 'uses' => 'ApiController@Surah14'));
Route::get('Al-Hijr', array('middleware' => 'cors', 'uses' => 'ApiController@Surah15'));
Route::get('An-Nahl', array('middleware' => 'cors', 'uses' => 'ApiController@Surah16'));
Route::get('Al-Isra`', array('middleware' => 'cors', 'uses' => 'ApiController@Surah17'));
Route::get('Al-Kahf', array('middleware' => 'cors', 'uses' => 'ApiController@Surah18'));
Route::get('Maryam', array('middleware' => 'cors', 'uses' => 'ApiController@Surah19'));
Route::get('Ta-Ha', array('middleware' => 'cors', 'uses' => 'ApiController@Surah20'));
Route::get('Al-Anbiya', array('middleware' => 'cors', 'uses' => 'ApiController@Surah21'));
Route::get('Al-Hajj', array('middleware' => 'cors', 'uses' => 'ApiController@Surah22'));
Route::get('Al-Mu`minun', array('middleware' => 'cors', 'uses' => 'ApiController@Surah23'));
Route::get('An-Nur', array('middleware' => 'cors', 'uses' => 'ApiController@Surah24'));
Route::get('Al-Furqan', array('middleware' => 'cors', 'uses' => 'ApiController@Surah25'));
Route::get('Asy-Syu`ara`', array('middleware' => 'cors', 'uses' => 'ApiController@Surah26'));
Route::get('An-Naml', array('middleware' => 'cors', 'uses' => 'ApiController@Surah27'));
Route::get('Al-Qasas', array('middleware' => 'cors', 'uses' => 'ApiController@Surah28'));
Route::get('Al-`Ankabut', array('middleware' => 'cors', 'uses' => 'ApiController@Surah29'));
Route::get('Ar-Rum', array('middleware' => 'cors', 'uses' => 'ApiController@Surah30'));
Route::get('Luqman', array('middleware' => 'cors', 'uses' => 'ApiController@Surah31'));
Route::get('As-Sajdah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah32'));
Route::get('Al-Ahzab', array('middleware' => 'cors', 'uses' => 'ApiController@Surah33'));
Route::get('Saba`', array('middleware' => 'cors', 'uses' => 'ApiController@Surah34'));
Route::get('Fatir', array('middleware' => 'cors', 'uses' => 'ApiController@Surah35'));
Route::get('Ya-Sin', array('middleware' => 'cors', 'uses' => 'ApiController@Surah36'));
Route::get('As-Saffat', array('middleware' => 'cors', 'uses' => 'ApiController@Surah37'));
Route::get('Sad', array('middleware' => 'cors', 'uses' => 'ApiController@Surah38'));
Route::get('Az-Zumar', array('middleware' => 'cors', 'uses' => 'ApiController@Surah39'));
Route::get('Ghafir', array('middleware' => 'cors', 'uses' => 'ApiController@Surah40'));
Route::get('Fussilat', array('middleware' => 'cors', 'uses' => 'ApiController@Surah41'));
Route::get('Asy-Syura', array('middleware' => 'cors', 'uses' => 'ApiController@Surah42'));
Route::get('Az-Zukhruf', array('middleware' => 'cors', 'uses' => 'ApiController@Surah43'));
Route::get('Ad-Dukhan', array('middleware' => 'cors', 'uses' => 'ApiController@Surah44'));
Route::get('Al-Jasiyah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah45'));
Route::get('Al-Ahqaf', array('middleware' => 'cors', 'uses' => 'ApiController@Surah46'));
Route::get('Muhammad', array('middleware' => 'cors', 'uses' => 'ApiController@Surah47'));
Route::get('Al-Fath', array('middleware' => 'cors', 'uses' => 'ApiController@Surah48'));
Route::get('Al-Hujurat', array('middleware' => 'cors', 'uses' => 'ApiController@Surah49'));
Route::get('Qaf', array('middleware' => 'cors', 'uses' => 'ApiController@Surah50'));
Route::get('Az-Zariyat', array('middleware' => 'cors', 'uses' => 'ApiController@Surah51'));
Route::get('At-Tur', array('middleware' => 'cors', 'uses' => 'ApiController@Surah52'));
Route::get('An-Najm', array('middleware' => 'cors', 'uses' => 'ApiController@Surah53'));
Route::get('Al-Qamar', array('middleware' => 'cors', 'uses' => 'ApiController@Surah54'));
Route::get('Ar-Rahman', array('middleware' => 'cors', 'uses' => 'ApiController@Surah55'));
Route::get('Al-Waqi`ah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah56'));
Route::get('Al-Hadid', array('middleware' => 'cors', 'uses' => 'ApiController@Surah57'));
Route::get('Al-Mujadilah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah58'));
Route::get('Al-Hasyr', array('middleware' => 'cors', 'uses' => 'ApiController@Surah59'));
Route::get('Al-Mumtahanah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah60'));
Route::get('As-Saff', array('middleware' => 'cors', 'uses' => 'ApiController@Surah61'));
Route::get('Al-Jumu`ah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah62'));
Route::get('Al-Munafiqun', array('middleware' => 'cors', 'uses' => 'ApiController@Surah63'));
Route::get('At-Taghabun', array('middleware' => 'cors', 'uses' => 'ApiController@Surah64'));
Route::get('At-Talaq', array('middleware' => 'cors', 'uses' => 'ApiController@Surah65'));
Route::get('At-Tahrim', array('middleware' => 'cors', 'uses' => 'ApiController@Surah66'));
Route::get('Al-Mulk', array('middleware' => 'cors', 'uses' => 'ApiController@Surah67'));
Route::get('Al-Qalam', array('middleware' => 'cors', 'uses' => 'ApiController@Surah68'));
Route::get('Al-Haqqah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah69'));
Route::get('Al-Ma`arij', array('middleware' => 'cors', 'uses' => 'ApiController@Surah70'));
Route::get('Nuh', array('middleware' => 'cors', 'uses' => 'ApiController@Surah71'));
Route::get('Al-Jinn', array('middleware' => 'cors', 'uses' => 'ApiController@Surah72'));
Route::get('Al-Muzzammil', array('middleware' => 'cors', 'uses' => 'ApiController@Surah73'));
Route::get('An-Muddassir', array('middleware' => 'cors', 'uses' => 'ApiController@Surah74'));
Route::get('Al-Qiyamah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah75'));
Route::get('Al-Insan', array('middleware' => 'cors', 'uses' => 'ApiController@Surah76'));
Route::get('Al-Mursalat', array('middleware' => 'cors', 'uses' => 'ApiController@Surah77'));
Route::get('An-Naba`', array('middleware' => 'cors', 'uses' => 'ApiController@Surah78'));
Route::get('An-Nazi`at', array('middleware' => 'cors', 'uses' => 'ApiController@Surah79'));
Route::get('`Abasa', array('middleware' => 'cors', 'uses' => 'ApiController@Surah80'));
Route::get('At-Takwir', array('middleware' => 'cors', 'uses' => 'ApiController@Surah81'));
Route::get('Al-Infitar', array('middleware' => 'cors', 'uses' => 'ApiController@Surah82'));
Route::get('Al-Muthaffifiin', array('middleware' => 'cors', 'uses' => 'ApiController@Surah83'));
Route::get('Al-Insyiqaq', array('middleware' => 'cors', 'uses' => 'ApiController@Surah84'));
Route::get('Al-Buruj', array('middleware' => 'cors', 'uses' => 'ApiController@Surah85'));
Route::get('At-Tariq', array('middleware' => 'cors', 'uses' => 'ApiController@Surah86'));
Route::get('As-A`la', array('middleware' => 'cors', 'uses' => 'ApiController@Surah87'));
Route::get('Al-Ghasyiyah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah88'));
Route::get('Al-Fajr', array('middleware' => 'cors', 'uses' => 'ApiController@Surah89'));
Route::get('Al-Balad', array('middleware' => 'cors', 'uses' => 'ApiController@Surah90'));
Route::get('Asy-Syams', array('middleware' => 'cors', 'uses' => 'ApiController@Surah91'));
Route::get('Al-Lail', array('middleware' => 'cors', 'uses' => 'ApiController@Surah92'));
Route::get('Ad-Duha', array('middleware' => 'cors', 'uses' => 'ApiController@Surah93'));
Route::get('Al-Insyirah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah94'));
Route::get('At-Tin', array('middleware' => 'cors', 'uses' => 'ApiController@Surah95'));
Route::get('Al-`Alaq', array('middleware' => 'cors', 'uses' => 'ApiController@Surah96'));
Route::get('Al-Qadr', array('middleware' => 'cors', 'uses' => 'ApiController@Surah97'));
Route::get('Al-Bayyinah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah98'));
Route::get('Az-Zalzalah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah99'));
Route::get('Al-`Adiyat', array('middleware' => 'cors', 'uses' => 'ApiController@Surah100'));
Route::get('Al-Qari`ah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah101'));
Route::get('At-Takasur', array('middleware' => 'cors', 'uses' => 'ApiController@Surah102'));
Route::get('Al-`Asr', array('middleware' => 'cors', 'uses' => 'ApiController@Surah103'));
Route::get('Al-Humazah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah104'));
Route::get('Al-Fil', array('middleware' => 'cors', 'uses' => 'ApiController@Surah105'));
Route::get('Quraisy', array('middleware' => 'cors', 'uses' => 'ApiController@Surah106'));
Route::get('Al-Ma`un', array('middleware' => 'cors', 'uses' => 'ApiController@Surah107'));
Route::get('Al-Kausar', array('middleware' => 'cors', 'uses' => 'ApiController@Surah108'));
Route::get('Al-Kafirun', array('middleware' => 'cors', 'uses' => 'ApiController@Surah109'));
Route::get('An-Nasr', array('middleware' => 'cors', 'uses' => 'ApiController@Surah110'));
Route::get('Al-Lahab', array('middleware' => 'cors', 'uses' => 'ApiController@Surah111'));
Route::get('Al-Ikhlas', array('middleware' => 'cors', 'uses' => 'ApiController@Surah112'));
Route::get('Al-Falaq', array('middleware' => 'cors', 'uses' => 'ApiController@Surah113'));
Route::get('An-Nas', array('middleware' => 'cors', 'uses' => 'ApiController@Surah114'));
// Route::get('dataTafsir/{id}', 'DataTafsirController@Tafsir');