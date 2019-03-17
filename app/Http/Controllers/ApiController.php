<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTafsirModel;
use App\IbnuKatsirModel;

class ApiController extends Controller
{
    public function index()
    {
        // return DataTafsirModel::all();
    }
    public function Surah1(){
        return DataTafsirModel::where('surat', 'Al-Fatihah')->get();
    }
    public function Surah2(){
        return DataTafsirModel::where('surat', 'Al-Baqarah')->get();
    }
    public function Surah3(){
        return DataTafsirModel::where('surat', 'Ali `Imran')->get();
    }
    public function Surah4(){
        return DataTafsirModel::where('surat', 'An-Nisa`')->get();
    }
    public function Surah5(){
        return DataTafsirModel::where('surat', 'Al-Ma`idah')->get();
    }
    public function Surah6(){
        return DataTafsirModel::where('surat', 'Al-An`am')->get();
    }
    public function Surah7(){
        return DataTafsirModel::where('surat', 'Al-A`raf')->get();
    }
    public function Surah8(){
        return DataTafsirModel::where('surat', 'Al-Anfal')->get();
    }
    public function Surah9(){
        return DataTafsirModel::where('surat', 'At-Taubah')->get();
    }
    public function Surah10(){
        return DataTafsirModel::where('surat', 'Yunus')->get();
    }
    public function Surah11(){
        return DataTafsirModel::where('surat', 'Hud')->get();
    }
    public function Surah12(){
        return DataTafsirModel::where('surat', 'Yusuf')->get();
    }
    public function Surah13(){
        return DataTafsirModel::where('surat', 'Ar-Ra`d')->get();
    }
    public function Surah14(){
        return DataTafsirModel::where('surat', 'Ibrahim')->get();
    }
    public function Surah15(){
        return DataTafsirModel::where('surat', 'Al-Hijr')->get();
    }
    public function Surah16(){
        return DataTafsirModel::where('surat', 'An-Nahl')->get();
    }
    public function Surah17(){
        return DataTafsirModel::where('surat', 'Al-Isra`')->get();
    }
    public function Surah18(){
        return DataTafsirModel::where('surat', 'Al-Kahf')->get();
    }
    public function Surah19(){
        return DataTafsirModel::where('surat', 'Maryam')->get();
    }
    public function Surah20(){
        return DataTafsirModel::where('surat', 'Ta-Ha')->get();
    }
    public function Surah21(){
        return DataTafsirModel::where('surat', 'Al-Anbiya')->get();
    }
    public function Surah22(){
        return DataTafsirModel::where('surat', 'Al-Hajj')->get();
    }
    public function Surah23(){
        return DataTafsirModel::where('surat', 'Al-Mu`minun')->get();
    }
    public function Surah24(){
        return DataTafsirModel::where('surat', 'An-Nur')->get();
    }
    public function Surah25(){
        return DataTafsirModel::where('surat', 'Al-Furqan')->get();
    }
    public function Surah26(){
        return DataTafsirModel::where('surat', 'Asy-Syu`ara`')->get();
    }
    public function Surah27(){
        return DataTafsirModel::where('surat', 'An-Naml')->get();
    }
    public function Surah28(){
        return DataTafsirModel::where('surat', 'Al-Qasas')->get();
    }
    public function Surah29(){
        return DataTafsirModel::where('surat', 'Al-`Ankabut')->get();
    }
    public function Surah30(){
        return DataTafsirModel::where('surat', 'Ar-Rum')->get();
    }
    public function Surah31(){
        return DataTafsirModel::where('surat', 'Luqman')->get();
    }
    public function Surah32(){
        return DataTafsirModel::where('surat', 'As-Sajdah')->get();
    }
    public function Surah33(){
        return DataTafsirModel::where('surat', 'Al-Ahzab')->get();
    }
    public function Surah34(){
        return DataTafsirModel::where('surat', 'Saba`')->get();
    }
    public function Surah35(){
        return DataTafsirModel::where('surat', 'Fatir')->get();
    }
    public function Surah36(){
        return DataTafsirModel::where('surat', 'Ya-Sin')->get();
    }
    public function Surah37(){
        return DataTafsirModel::where('surat', 'As-Saffat')->get();
    }
    public function Surah38(){
        return DataTafsirModel::where('surat', 'Sad')->get();
    }
    public function Surah39(){
        return DataTafsirModel::where('surat', 'Az-Zumar')->get();
    }
    public function Surah40(){
        return DataTafsirModel::where('surat', 'Ghafir')->get();
    }
    public function Surah41(){
        return DataTafsirModel::where('surat', 'Fussilat')->get();
    }
    public function Surah42(){
        return DataTafsirModel::where('surat', 'Asy-Syura')->get();
    }
    public function Surah43(){
        return DataTafsirModel::where('surat', 'Az-Zukhruf')->get();
    }
    public function Surah44(){
        return DataTafsirModel::where('surat', 'Ad-Dukhan')->get();
    }
    public function Surah45(){
        return DataTafsirModel::where('surat', 'Al-Jasiyah')->get();
    }
    public function Surah46(){
        return DataTafsirModel::where('surat', 'Al-Ahqaf')->get();
    }
    public function Surah47(){
        return DataTafsirModel::where('surat', 'Muhammad')->get();
    }
    public function Surah48(){
        return DataTafsirModel::where('surat', 'Al-Fath')->get();
    }
    public function Surah49(){
        return DataTafsirModel::where('surat', 'Al-Hujurat')->get();
    }
    public function Surah50(){
        return DataTafsirModel::where('surat', 'Qaf')->get();
    }
    public function Surah51(){
        return DataTafsirModel::where('surat', 'Az-Zariyat')->get();
    }
    public function Surah52(){
        return DataTafsirModel::where('surat', 'At-Tur')->get();
    }
    public function Surah53(){
        return DataTafsirModel::where('surat', 'An-Najm')->get();
    }
    public function Surah54(){
        return DataTafsirModel::where('surat', 'Al-Qamar')->get();
    }
    public function Surah55(){
        return DataTafsirModel::where('surat', 'Ar-Rahman')->get();
    }
    public function Surah56(){
        return DataTafsirModel::where('surat', 'Al-Waqi`ah')->get();
    }
    public function Surah57(){
        return DataTafsirModel::where('surat', 'Al-Hadid')->get();
    }
    public function Surah58(){
        return DataTafsirModel::where('surat', 'Al-Mujadilah')->get();
    }
    public function Surah59(){
        return DataTafsirModel::where('surat', 'Al-Hasyr')->get();
    }
    public function Surah60(){
        return DataTafsirModel::where('surat', 'Al-Mumtahanah')->get();
    }
    public function Surah61(){
        return DataTafsirModel::where('surat', 'As-Saff')->get();
    }
    public function Surah62(){
        return DataTafsirModel::where('surat', 'Al-Jumu`ah')->get();
    }
    public function Surah63(){
        return DataTafsirModel::where('surat', 'Al-Munafiqun')->get();
    }
    public function Surah64(){
        return DataTafsirModel::where('surat', 'At-Taghabun')->get();
    }
    public function Surah65(){
        return DataTafsirModel::where('surat', 'At-Talaq')->get();
    }
    public function Surah66(){
        return DataTafsirModel::where('surat', 'At-Tahrim')->get();
    }
    public function Surah67(){
        return DataTafsirModel::where('surat', 'Al-Mulk')->get();
    }
    public function Surah68(){
        return DataTafsirModel::where('surat', 'Al-Qalam')->get();
    }
    public function Surah69(){
        return DataTafsirModel::where('surat', 'Al-Haqqah')->get();
    }
    public function Surah70(){
        return DataTafsirModel::where('surat', 'Al-Ma`arij')->get();
    }
    public function Surah71(){
        return DataTafsirModel::where('surat', 'Nuh')->get();
    }
    public function Surah72(){
        return DataTafsirModel::where('surat', 'Al-Jinn')->get();
    }
    public function Surah73(){
        return DataTafsirModel::where('surat', 'Al-Muzzammil')->get();
    }
    public function Surah74(){
        return DataTafsirModel::where('surat', 'Al-Muddassir')->get();
    }
    public function Surah75(){
        return DataTafsirModel::where('surat', 'Al-Qiyamah')->get();
    }
    public function Surah76(){
        return DataTafsirModel::where('surat', 'Al-Insan')->get();
    }
    public function Surah77(){
        return DataTafsirModel::where('surat', 'Al-Mursalat')->get();
    }
    public function Surah78(){
        return DataTafsirModel::where('surat', 'An-Naba`')->get();
    }
    public function Surah79(){
        return DataTafsirModel::where('surat', 'An-Nazi`at')->get();
    }
    public function Surah80(){
        return DataTafsirModel::where('surat', '`Abasa')->get();
    }
    public function Surah81(){
        return DataTafsirModel::where('surat', 'At-Takwir')->get();
    }
    public function Surah82(){
        return DataTafsirModel::where('surat', 'Al-Infitar')->get();
    }
    public function Surah83(){
        return DataTafsirModel::where('surat', 'Al-Muthaffifiin')->get();
    }
    public function Surah84(){
        return DataTafsirModel::where('surat', 'Al-Insyiqaq')->get();
    }
    public function Surah85(){
        return DataTafsirModel::where('surat', 'Al-Buruj')->get();
    }
    public function Surah86(){
        return DataTafsirModel::where('surat', 'At-Tariq')->get();
    }
    public function Surah87(){
        return DataTafsirModel::where('surat', 'Al-A`la')->get();
    }
    public function Surah88(){
        return DataTafsirModel::where('surat', 'Al-Ghasyiyah')->get();
    }
    public function Surah89(){
        return DataTafsirModel::where('surat', 'Al-Fajr')->get();
    }
    public function Surah90(){
        return DataTafsirModel::where('surat', 'Al-Balad')->get();
    }
    public function Surah91(){
        return DataTafsirModel::where('surat', 'Asy-Syams')->get();
    }
    public function Surah92(){
        return DataTafsirModel::where('surat', 'Al-Lail')->get();
    }
    public function Surah93(){
        return DataTafsirModel::where('surat', 'Ad-Duha')->get();
    }
    public function Surah94(){
        return DataTafsirModel::where('surat', 'Al-Insyirah')->get();
    }
    public function Surah95(){
        return DataTafsirModel::where('surat', 'At-Tin')->get();
    }
    public function Surah96(){
        return DataTafsirModel::where('surat', 'Al-`Alaq')->get();
    }
    public function Surah97(){
        return DataTafsirModel::where('surat', 'Al-Qadr')->get();
    }
    public function Surah98(){
        return DataTafsirModel::where('surat', 'Al-Bayyinah')->get();
    }
    public function Surah99(){
        return DataTafsirModel::where('surat', 'Az-Zalzalah')->get();
    }
    public function Surah100(){
        return DataTafsirModel::where('surat', 'Al-`Adiyat')->get();
    }
    public function Surah101(){
        return DataTafsirModel::where('surat', 'Al-Qari`ah')->get();
    }
    public function Surah102(){
        return DataTafsirModel::where('surat', 'At-Takasur')->get();
    }
    public function Surah103(){
        return DataTafsirModel::where('surat', 'Al-`Asr')->get();
    }
    public function Surah104(){
        return DataTafsirModel::where('surat', 'Al-Humazah')->get();
    }
    public function Surah105(){
        return DataTafsirModel::where('surat', 'Al-Fil')->get();
    }
    public function Surah106(){
        return DataTafsirModel::where('surat', 'Quraisy')->get();
    }
    public function Surah107(){
        return DataTafsirModel::where('surat', 'Al-Ma`un')->get();
    }
    public function Surah108(){
        return DataTafsirModel::where('surat', 'Al-Kausar')->get();
    }
    public function Surah109(){
        return DataTafsirModel::where('surat', 'Al-Kafirun')->get();
    }
    public function Surah110(){
        return DataTafsirModel::where('surat', 'An-Nasr')->get();
    }
    public function Surah111(){
        return DataTafsirModel::where('surat', 'Al-Lahab')->get();
    }
    public function Surah112(){
        return DataTafsirModel::where('surat', 'Al-Ikhlas')->get();
    }
    public function Surah113(){
        return DataTafsirModel::where('surat', 'Al-Falaq')->get();
    }
    public function Surah114(){
        return DataTafsirModel::where('surat', 'An-Nas')->get();
    }
}
