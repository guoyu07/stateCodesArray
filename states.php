<?PHP
/*
 * Copyright Hugh Fuve 2014
 * MIT Licence.
 * $states = new stateClass();
 *
 * $states->getState($code);   //returns a string with the full name of the state given a code
 * $states->getStateXX($code);   //returns a string with the full name of the state given a 2 letter code or XX on fail.
 */


class statesClass
{
    private static $states = array();
    
    function __construct(){
         if($this->states['US-AL']=='Alabama'){
            return;
         }
         $this->states['US-AL']='Alabama';
         $this->states['AL']='Alabama';
         $this->states['Ala.']='Alabama';
         $this->states['US-AK']='Alaska';
         $this->states['AK']='Alaska';
         $this->states['Alaska']='Alaska';
         $this->states['Alas.']='Alaska';
         $this->states['US-AZ']='Arizona';
         $this->states['AZ']='Arizona';
         $this->states['Ariz.']='Arizona';
         $this->states['Az.']='Arizona';
         $this->states['US-AR']='Arkansas';
         $this->states['AR']='Arkansas';
         $this->states['Ark.']='Arkansas';
         $this->states['US-CA']='California';
         $this->states['CA']='California';
         $this->states['CF']='California';
         $this->states['Calif.']='California';
         $this->states['Ca.']='California';
         $this->states['Cal.']='California';
         $this->states['US-CO']='Colorado';
         $this->states['CO']='Colorado';
         $this->states['CL']='Colorado';
         $this->states['Colo.']='Colorado';
         $this->states['Col.']='Colorado';
         $this->states['US-CT']='Connecticut';
         $this->states['CT']='Connecticut';
         $this->states['Conn.']='Connecticut';
         $this->states['Ct.']='Connecticut';
         $this->states['US-DE']='Delaware';
         $this->states['DE']='Delaware';
         $this->states['DL']='Delaware';
         $this->states['Del.']='Delaware';
         $this->states['De.']='Delaware';
         $this->states['US-DC']='District of Columbia';
         $this->states['DC']='District of Columbia';
         $this->states['D.C.']='District of Columbia';
         $this->states['Wash.']='District of Columbia';
         $this->states['US-FL']='Florida';
         $this->states['FL']='Florida';
         $this->states['Fla.']='Florida';
         $this->states['Fl.']='Florida';
         $this->states['Flor.']='Florida';
         $this->states['US-GA']='Georgia';
         $this->states['GA']='Georgia';
         $this->states['Ga.']='Georgia';
         $this->states['US-HI']='Hawaii';
         $this->states['HI']='Hawaii';
         $this->states['HA']='Hawaii';
         $this->states['Hawaii']='Hawaii';
         $this->states['H.I.']='Hawaii';
         $this->states['US-ID']='Idaho';
         $this->states['ID']='Idaho';
         $this->states['Idaho']='Idaho';
         $this->states['Id.']='Idaho';
         $this->states['Ida.']='Idaho';
         $this->states['US-IL']='Illinois';
         $this->states['IL']='Illinois';
         $this->states['Ill.']='Illinois';
         $this->states['Il.']='Illinois';
         $this->states['US-IN']='Indiana';
         $this->states['IN']='Indiana';
         $this->states['Ind.']='Indiana';
         $this->states['In.']='Indiana';
         $this->states['US-IA']='Iowa';
         $this->states['IA']='Iowa';
         $this->states['Iowa']='Iowa';
         $this->states['Ia.']='Iowa';
         $this->states['Ioa.']='Iowa';
         $this->states['US-KS']='Kansas';
         $this->states['KS']='Kansas';
         $this->states['KA']='Kansas';
         $this->states['Kans.']='Kansas';
         $this->states['Kan.']='Kansas';
         $this->states['Ks.']='Kansas';
         $this->states['Ka.']='Kansas';
         $this->states['US-KY']='Kentucky';
         $this->states['KY']='Kentucky';
         $this->states['Ky.']='Kentucky';
         $this->states['Ken.']='Kentucky';
         $this->states['Kent.']='Kentucky';
         $this->states['US-LA']='Louisiana';
         $this->states['LA']='Louisiana';
         $this->states['La.']='Louisiana';
         $this->states['US-ME']='Maine';
         $this->states['ME']='Maine';
         $this->states['Maine']='Maine';
         $this->states['Me.']='Maine';
         $this->states['US-MD']='Maryland';
         $this->states['MD']='Maryland';
         $this->states['Md.']='Maryland';
         $this->states['US-MA']='Massachusetts';
         $this->states['MA']='Massachusetts';
         $this->states['MS']='Massachusetts';
         $this->states['Mass.']='Massachusetts';
         $this->states['US-MI']='Michigan';
         $this->states['MI']='Michigan';
         $this->states['MC']='Michigan';
         $this->states['Mich.']='Michigan';
         $this->states['US-MN']='Minnesota';
         $this->states['MN']='Minnesota';
         $this->states['Minn.']='Minnesota';
         $this->states['Mn.']='Minnesota';
         $this->states['US-MS']='Mississippi';
         $this->states['Miss.']='Mississippi';
         $this->states['US-MO']='Missouri';
         $this->states['MO']='Missouri';
         $this->states['Mo.']='Missouri';
         $this->states['US-MT']='Montana';
         $this->states['MT']='Montana';
         $this->states['Mont.']='Montana';
         $this->states['US-NE']='Nebraska';
         $this->states['NE']='Nebraska';
         $this->states['NB']='Nebraska';
         $this->states['Nebr.']='Nebraska';
         $this->states['Neb.']='Nebraska';
         $this->states['US-NV']='Nevada';
         $this->states['NV']='Nevada';
         $this->states['Nev.']='Nevada';
         $this->states['Nv.']='Nevada';
         $this->states['US-NH']='New Hampshire';
         $this->states['NH']='New Hampshire';
         $this->states['N.H.']='New Hampshire';
         $this->states['US-NJ']='New Jersey';
         $this->states['NJ']='New Jersey';
         $this->states['N.J.']='New Jersey';
         $this->states['US-NM']='New Mexico';
         $this->states['NM']='New Mexico';
         $this->states['N.']='New Mexico';
         $this->states['Mex.']='New Mexico';
         $this->states['N.M.']='New Mexico';
         $this->states['New']='New Mexico';
         $this->states['M.']='New Mexico';
         $this->states['US-NY']='New York';
         $this->states['NY']='New York';
         $this->states['N.Y.']='New York';
         $this->states['York']='New York';
         $this->states['US-NC']='North Carolina';
         $this->states['NC']='North Carolina';
         $this->states['N.C.']='North Carolina';
         $this->states['Car.']='North Carolina';
         $this->states['US-ND']='North Dakota';
         $this->states['ND']='North Dakota';
         $this->states['Dak.']='North Dakota';
         $this->states['N.D.']='North Dakota';
         $this->states['NoDak']='North Dakota';
         $this->states['US-OH']='Ohio';
         $this->states['OH']='Ohio';
         $this->states['Ohio']='Ohio';
         $this->states['Oh.']='Ohio';
         $this->states['US-OK']='Oklahoma';
         $this->states['OK']='Oklahoma';
         $this->states['Okla.']='Oklahoma';
         $this->states['Ok.']='Oklahoma';
         $this->states['US-OR']='Oregon';
         $this->states['OR']='Oregon';
         $this->states['Oreg.']='Oregon';
         $this->states['Ore.']='Oregon';
         $this->states['Or.']='Oregon';
         $this->states['US-PA']='Pennsylvania';
         $this->states['PA']='Pennsylvania';
         $this->states['Pa.']='Pennsylvania';
         $this->states['Penn.']='Pennsylvania';
         $this->states['US-RI']='Rhode Island';
         $this->states['RI']='Rhode Island';
         $this->states['R.I.']='Rhode Island';
         $this->states['P.P.']='Rhode Island';
         $this->states['R.']='Rhode Island';
         $this->states['Isl.']='Rhode Island';
         $this->states['US-SC']='South Carolina';
         $this->states['SC']='South Carolina';
         $this->states['S.C.']='South Carolina';
         $this->states['S.']='South Carolina';
         $this->states['US-SD']='South Dakota';
         $this->states['SD']='South Dakota';
         $this->states['S.D.']='South Dakota';
         $this->states['SoDak']='South Dakota';
         $this->states['US-TN']='Tennessee';
         $this->states['TN']='Tennessee';
         $this->states['Tenn.']='Tennessee';
         $this->states['US-TX']='Texas';
         $this->states['TX']='Texas';
         $this->states['Tex.']='Texas';
         $this->states['Texas']='Texas';
         $this->states['Tx.']='Texas';
         $this->states['US-UT']='Utah';
         $this->states['UT']='Utah';
         $this->states['Utah']='Utah';
         $this->states['Ut.']='Utah';
         $this->states['US-VT']='Vermont';
         $this->states['VT']='Vermont';
         $this->states['Vt.']='Vermont';
         $this->states['US-VA']='Virginia';
         $this->states['VA']='Virginia';
         $this->states['Va.']='Virginia';
         $this->states['Virg.']='Virginia';
         $this->states['US-WA']='Washington';
         $this->states['WA']='Washington';
         $this->states['WN']='Washington';
         $this->states['Wa.']='Washington';
         $this->states['Wn.']='Washington';
         $this->states['US-WV']='West Virginia';
         $this->states['WV']='West Virginia';
         $this->states['W.']='West Virginia';
         $this->states['W.Va.']='West Virginia';
         $this->states['W.V.']='West Virginia';
         $this->states['US-WI']='Wisconsin';
         $this->states['WI']='Wisconsin';
         $this->states['WS']='Wisconsin';
         $this->states['Wis.']='Wisconsin';
         $this->states['Wi.']='Wisconsin';
         $this->states['Wisc.']='Wisconsin';
         $this->states['US-WY']='Wyoming';
         $this->states['WY']='Wyoming';
         $this->states['Wyo.']='Wyoming';
         $this->states['Wy.']='Wyoming';
         $this->states['AS']='American Samoa';
         $this->states['ASM']='American Samoa';
         $this->states['US-AS']='American Samoa';
         $this->states['A.S.']='American Samoa';
         $this->states['GU']='Guam';
         $this->states['GUM']='Guam';
         $this->states['US-GU']='Guam';
         $this->states['Guam']='Guam';
         $this->states['MP']='Northern Mariana Islands';
         $this->states['MNP']='Northern Mariana Islands';
         $this->states['US-MP']='Northern Mariana Islands';
         $this->states['CM']='Northern Mariana Islands';
         $this->states['M.P.']='Northern Mariana Islands';
         $this->states['PR']='Puerto Rico';
         $this->states['PRI']='Puerto Rico';
         $this->states['US-PR']='Puerto Rico';
         $this->states['P.R.']='Puerto Rico';
         $this->states['VI']='Virgin Islands';
         $this->states['VIR']='Virgin Islands';
         $this->states['US-VI']='Virgin Islands';
         $this->states['V.I.']='Virgin Islands';
         $this->states['U.S.V.I.']='Virgin Islands';
         $this->states['UM']='U.S. Minor Outlying Islands';
         $this->states['UMI']='U.S. Minor Outlying Islands';
         $this->states['US-UM']='U.S. Minor Outlying Islands';
         $this->states['UM-81']='Baker Island';
         $this->states['UM-84']='Howland Island';
         $this->states['UM-86']='Jarvis Island';
         $this->states['UM-67']='Johnston Atoll';
         $this->states['UM-89']='Kingman Reef';
         $this->states['UM-71']='Midway Islands';
         $this->states['UM-76']='Navassa Island';
         $this->states['UM-95']='Palmyra Atoll';
         $this->states['UM-79']='Wake Island';
         $this->states['FM']='Federated states of Micronesia';
         $this->states['FSM']='Federated states of Micronesia';
         $this->states['MH']='Marshall Islands';
         $this->states['MHL']='Marshall Islands';
         $this->states['PW']='Palau';
         $this->states['PLW']='Palau';
         $this->states['CZ']='Panama Canal Zone';
         $this->states['PH']='Philippine Islands';
         $this->states['PI']='Philippine Islands';
         $this->states['TT']='Trust Territory Pacific Islands';
    }

    function findStateNameByCode($code){
        return $this->states[$code];
    }

    function findStateNameByXXCode($code){     //find the US state name by two letter code.
        $USCode="US-".$code;
        if($this->states[$USCode]!=""){
            return $this->states[$USCode];
        }else{
            return "XX";
        }
    }

    public function cleanCode($code){     //strips double spaces and []()tabs and linefeeds
        $code=trim(str_replace("'","",$code));
        $code=str_replace('"',"",$code);
        $code=str_replace('(',"",$code);
        $code=str_replace(')',"",$code);
        $code=str_replace('[',"",$code);
        $code=str_replace(']',"",$code);

        return preg_replace(array('/\s{2,}/', '/[\t\n\r]/'), ' ', $code);
    }
}