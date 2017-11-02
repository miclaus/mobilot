<?php

class StationTableSeeder extends Seeder {

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run()
  {
    \DB::table('station')->truncate();

    \DB::table('station')->insert(array (
      0 =>
      array (
        'code' => 'AllGeBra',
        'mobidulId' => 15,
        'lat' => 48.18422587351380315112692187540233135223388671875,
        'lon' => 16.085757320022100458345448714680969715118408203125,
        'radius' => 1000,
        'name' => 'All-Ge-Bra',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=388',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      1 =>
      array (
        'code' => 'almstueberl',
        'mobidulId' => 15,
        'lat' => 48.20625693700760194815302384085953235626220703125,
        'lon' => 16.064178948497300325470860116183757781982421875,
        'radius' => 1000,
        'name' => 'Almstüberl Erika Berger',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=368',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      2 =>
      array (
        'code' => 'aquaedukt_brentenmais',
        'mobidulId' => 15,
        'lat' => 48.1761169447699018064668052829802036285400390625,
        'lon' => 16.0994768191333008644505753181874752044677734375,
        'radius' => 1000,
        'name' => 'AquÃ¤dukt über die Brentenmais',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=405',
        'durationInMinutes' => NULL,
        'categoryId' => 52,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      3 =>
      array (
        'code' => 'Arrakis',
        'mobidulId' => 15,
        'lat' => 48.22024805329500196648950804956257343292236328125,
        'lon' => 16.02241158971740020433571771718561649322509765625,
        'radius' => 1000,
        'name' => 'Arrakis Software und Verwaltung GmbH',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=390',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      4 =>
      array (
        'code' => 'Arzt_BarfuÃŸ',
        'mobidulId' => 15,
        'lat' => 48.1843725163493985519380657933652400970458984375,
        'lon' => 16.0872888613696005677411449141800403594970703125,
        'radius' => 1000,
        'name' => 'Allgemeinmedizin Dr. Karin Barfuss',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=395',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      5 =>
      array (
        'code' => 'BajicBau',
        'mobidulId' => 15,
        'lat' => 48.16131940553309931374315056018531322479248046875,
        'lon' => 16.072375779246801386079823714680969715118408203125,
        'radius' => 1000,
        'name' => 'Bajic Bau KG',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=394',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      6 =>
      array (
        'code' => 'bankaustria',
        'mobidulId' => 15,
        'lat' => 48.180284000000000332875060848891735076904296875,
        'lon' => 16.0781019999999017500158515758812427520751953125,
        'radius' => 1000,
        'name' => 'UniCredit Bank Austria AG',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=351',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      7 =>
      array (
        'code' => 'bartbergUnternehmensberatung',
        'mobidulId' => 15,
        'lat' => 48.1780307246636994022992439568042755126953125,
        'lon' => 16.105356221293998686405757325701415538787841796875,
        'radius' => 1000,
        'name' => 'Bartberg Beratung',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=397',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      8 =>
      array (
        'code' => 'bauergaussMarcellus',
        'mobidulId' => 15,
        'lat' => 48.1811820457842969744888250716030597686767578125,
        'lon' => 16.058728699779099002853399724699556827545166015625,
        'radius' => 1000,
        'name' => 'Bauer-Gauss Marcellus',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=398',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      9 =>
      array (
        'code' => 'BP_Pressbaum',
        'mobidulId' => 15,
        'lat' => 48.1804237433043027749590692110359668731689453125,
        'lon' => 16.078555588817199151208114926703274250030517578125,
        'radius' => 1000,
        'name' => 'BP Tankstelle',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=404',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      10 =>
      array (
        'code' => 'Denkmal_KaiserJoseph',
        'mobidulId' => 15,
        'lat' => 48.17888587590920224101864732801914215087890625,
        'lon' => 16.077067136764501498191748396493494510650634765625,
        'radius' => 1000,
        'name' => 'Denkmal von Kaiser Joseph II.',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=377',
        'durationInMinutes' => NULL,
        'categoryId' => 52,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      11 =>
      array (
        'code' => 'Drucktechnik_Szerencsics',
        'mobidulId' => 15,
        'lat' => 48.1800910882050033023915602825582027435302734375,
        'lon' => 16.084778313731700194466611719690263271331787109375,
        'radius' => 1000,
        'name' => 'Drucktechnik Szerencsics Werbeprint GmbH',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=407',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      12 =>
      array (
        'code' => 'FahrschulePressbaum',
        'mobidulId' => 15,
        'lat' => 48.17868890535149972720319055952131748199462890625,
        'lon' => 16.076425914859299837189610116183757781982421875,
        'radius' => 1000,
        'name' => 'Fahrschule Pressbaum',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=396',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      13 =>
      array (
        'code' => 'fotognaser',
        'mobidulId' => 15,
        'lat' => 48.1833850000000012414602679200470447540283203125,
        'lon' => 16.091065000000099871613201685249805450439453125,
        'radius' => 1000,
        'name' => 'Foto Gnaser',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=373',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      14 =>
      array (
        'code' => 'Friedhof_scp',
        'mobidulId' => 15,
        'lat' => 48.17796080495470079085862380452454090118408203125,
        'lon' => 16.062484741210898420149533194489777088165283203125,
        'radius' => 1000,
        'name' => 'Friedhof Sacre Coeur',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=378',
        'durationInMinutes' => NULL,
        'categoryId' => 52,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      15 =>
      array (
        'code' => 'Friseur_Beatrix_Aschauer',
        'mobidulId' => 15,
        'lat' => 48.20422622741710227955991285853087902069091796875,
        'lon' => 16.067440514659399042329823714680969715118408203125,
        'radius' => 1000,
        'name' => 'Beatrix Aschauer',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=393',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      16 =>
      array (
        'code' => 'GaestezimmerFam.Breitner',
        'mobidulId' => 15,
        'lat' => 48.17959388999999958969056024216115474700927734375,
        'lon' => 16.0740280200000000832005753181874752044677734375,
        'radius' => 1000,
        'name' => 'GÃ¤stezimmer Familie Breitner',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=383',
        'durationInMinutes' => NULL,
        'categoryId' => 52,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      17 =>
      array (
        'code' => 'Heimatmuseum',
        'mobidulId' => 15,
        'lat' => 48.06061248316930090140886022709310054779052734375,
        'lon' => 16.116729736328100131004248396493494510650634765625,
        'radius' => 1000,
        'name' => 'Heimatmuseum',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=379',
        'durationInMinutes' => NULL,
        'categoryId' => 52,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      18 =>
      array (
        'code' => 'hlwpressbaum',
        'mobidulId' => 15,
        'lat' => 48.18059543541419742496145772747695446014404296875,
        'lon' => 16.08252525815920108698264812119305133819580078125,
        'radius' => 1000,
        'name' => 'HLW Pressbaum',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=370',
        'durationInMinutes' => NULL,
        'categoryId' => 50,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      19 =>
      array (
        'code' => 'holdoptik',
        'mobidulId' => 15,
        'lat' => 48.1842008368900991399641497991979122161865234375,
        'lon' => 16.092696194743698612228399724699556827545166015625,
        'radius' => 1000,
        'name' => 'Hold Optik',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=387',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      20 =>
      array (
        'code' => 'Ingeneurbuero_Brandstetter',
        'mobidulId' => 15,
        'lat' => 48.185610022106601491032051853835582733154296875,
        'lon' => 16.05915785322140010293878731317818164825439453125,
        'radius' => 1000,
        'name' => 'Ingenieurbüro DI Fritz Brandstetter',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=408',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      21 =>
      array (
        'code' => 'kaiserbruenndl',
        'mobidulId' => 15,
        'lat' => 48.16136680999999697405655751936137676239013671875,
        'lon' => 16.038038809999999756428223918192088603973388671875,
        'radius' => 1000,
        'name' => 'Kaiserbrünndl',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=358',
        'durationInMinutes' => NULL,
        'categoryId' => 50,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      22 =>
      array (
        'code' => 'mariasfashion',
        'mobidulId' => 15,
        'lat' => 48.1476844318487025020658620633184909820556640625,
        'lon' => 16.065187459086899934845860116183757781982421875,
        'radius' => 1000,
        'name' => 'Maria\'s Fashion',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=391',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      23 =>
      array (
        'code' => 'omvtankstelle_groÃŸram',
        'mobidulId' => 15,
        'lat' => 48.16363448605920183354101027362048625946044921875,
        'lon' => 16.0051435280795004700848949141800403594970703125,
        'radius' => 1000,
        'name' => 'OMV Tankstelle',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=403',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      24 =>
      array (
        'code' => 'orgelbau_niemeczek',
        'mobidulId' => 15,
        'lat' => 48.18102466317319709787625470198690891265869140625,
        'lon' => 16.07128143796879982119207852520048618316650390625,
        'radius' => 1000,
        'name' => 'Der Orgelbau im Wienerwald',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=375',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      25 =>
      array (
        'code' => 'pfarrkirche',
        'mobidulId' => 15,
        'lat' => 48.17903700000000100089891930110752582550048828125,
        'lon' => 16.077602000000098314558272249996662139892578125,
        'radius' => 1000,
        'name' => 'Pfarrkirche Pressbaum',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=353',
        'durationInMinutes' => NULL,
        'categoryId' => 52,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      26 =>
      array (
        'code' => 'polizeiposten ',
        'mobidulId' => 15,
        'lat' => 48.1794385244131007084433804266154766082763671875,
        'lon' => 16.076841831207300259620751603506505489349365234375,
        'radius' => 1000,
        'name' => 'Polizeiposten ',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=380',
        'durationInMinutes' => NULL,
        'categoryId' => 50,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      27 =>
      array (
        'code' => 'raiffeisen_pressbaum',
        'mobidulId' => 15,
        'lat' => 48.178488299999997934719431214034557342529296875,
        'lon' => 16.076109800000001115449776989407837390899658203125,
        'radius' => 1000,
        'name' => 'Raiffeisenbank Wienerwald reg. Gen.m.b.H.',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=406',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      28 =>
      array (
        'code' => 'rathaus',
        'mobidulId' => 15,
        'lat' => 48.17934000000000338559402734972536563873291015625,
        'lon' => 16.076847999999898775058682076632976531982421875,
        'radius' => 1000,
        'name' => 'Rathaus Pressbaum',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=356',
        'durationInMinutes' => NULL,
        'categoryId' => 50,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      29 =>
      array (
        'code' => 'renateshaarstudio',
        'mobidulId' => 15,
        'lat' => 48.17827754341190171771813766099512577056884765625,
        'lon' => 16.05669022092769893106378731317818164825439453125,
        'radius' => 1000,
        'name' => 'Renates Haarstudio â€“ Frisiersalon Renate Steinle',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=374',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      30 =>
      array (
        'code' => 'sacre',
        'mobidulId' => 15,
        'lat' => 48.18533500000000202589944819919764995574951171875,
        'lon' => 16.081903000000000503177943755872547626495361328125,
        'radius' => 1000,
        'name' => '',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => '',
        'durationInMinutes' => NULL,
        'categoryId' => 1,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      31 =>
      array (
        'code' => 'Schule_Fünkhgasse',
        'mobidulId' => 15,
        'lat' => 48.17959388999999958969056024216115474700927734375,
        'lon' => 16.0740280200000000832005753181874752044677734375,
        'radius' => 1000,
        'name' => 'Schulzentrum Fünkhgasse ',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=381',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      32 =>
      array (
        'code' => 'Schule_Sacre_Coeur',
        'mobidulId' => 15,
        'lat' => 48.18412930361240142929091234691441059112548828125,
        'lon' => 16.079392438029799450305290520191192626953125,
        'radius' => 1000,
        'name' => 'Schulzentrum Sacre Coeur',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=385',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      33 =>
      array (
        'code' => 'Sene_Cura ',
        'mobidulId' => 15,
        'lat' => 48.17776048714279824025652487762272357940673828125,
        'lon' => 16.048193931579600501891036401502788066864013671875,
        'radius' => 1000,
        'name' => '',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => '',
        'durationInMinutes' => NULL,
        'categoryId' => 1,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      34 =>
      array (
        'code' => 'UnternehmensberatungBluespring',
        'mobidulId' => 15,
        'lat' => 48.18113912330189663180135539732873439788818359375,
        'lon' => 16.089992528056701104333114926703274250030517578125,
        'radius' => 1000,
        'name' => 'Bluespring OEG',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=399',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      35 =>
      array (
        'code' => 'Zahnarzt_AugustBichler',
        'mobidulId' => 15,
        'lat' => 48.15343589801239687631095875985920429229736328125,
        'lon' => 15.928856139278000370040899724699556827545166015625,
        'radius' => 1000,
        'name' => 'Zahnarzt Dr. August Bichler',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=402',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      36 =>
      array (
        'code' => 'zeitlos',
        'mobidulId' => 15,
        'lat' => 48.18239816785060014581176801584661006927490234375,
        'lon' => 16.085057263469298760583114926703274250030517578125,
        'radius' => 1000,
        'name' => 'CafÃ© Restaurant Zeitlos',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=400',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      37 =>
      array (
        'code' => 'zickzack',
        'mobidulId' => 15,
        'lat' => 48.18287030158389683265340863727033138275146484375,
        'lon' => 16.08776093015629982119207852520048618316650390625,
        'radius' => 1000,
        'name' => 'Schneiderei ZickZack',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=386',
        'durationInMinutes' => NULL,
        'categoryId' => 51,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      38 =>
      array (
        'code' => 'ahorn',
        'mobidulId' => 16,
        'lat' => 48.2345069068523031319273286499083042144775390625,
        'lon' => 15.477418904399399934845860116183757781982421875,
        'radius' => 1000,
        'name' => 'Ahorn',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=335',
        'durationInMinutes' => NULL,
        'categoryId' => 53,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      39 =>
      array (
        'code' => 'et',
        'mobidulId' => 16,
        'lat' => 0,
        'lon' => 0,
        'radius' => 1000,
        'name' => 'Gratuliere!',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=342',
        'durationInMinutes' => NULL,
        'categoryId' => 0,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      40 =>
      array (
        'code' => 'ha',
        'mobidulId' => 16,
        'lat' => 0,
        'lon' => 0,
        'radius' => 1000,
        'name' => 'Gratuliere!',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=340',
        'durationInMinutes' => NULL,
        'categoryId' => 0,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      41 =>
      array (
        'code' => 'hohenegg',
        'mobidulId' => 16,
        'lat' => 48.2343353953796025734845898114144802093505859375,
        'lon' => 15.4772043276781996468116631149314343929290771484375,
        'radius' => 1000,
        'name' => 'Burgruine Hohenegg',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=336',
        'durationInMinutes' => NULL,
        'categoryId' => 55,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      42 =>
      array (
        'code' => 'mammutbaum',
        'mobidulId' => 16,
        'lat' => 48.36970733615549988826387561857700347900390625,
        'lon' => 15.553550725078100214204823714680969715118408203125,
        'radius' => 1000,
        'name' => 'GÃ¶ttweiger MammutbÃ¤ume',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=339',
        'durationInMinutes' => NULL,
        'categoryId' => 53,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      43 =>
      array (
        'code' => 'mit',
        'mobidulId' => 16,
        'lat' => 0,
        'lon' => 0,
        'radius' => 1000,
        'name' => 'Gratuliere!',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=341',
        'durationInMinutes' => NULL,
        'categoryId' => 0,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      44 =>
      array (
        'code' => 'pig',
        'mobidulId' => 16,
        'lat' => 0,
        'lon' => 0,
        'radius' => 1000,
        'name' => 'Gratuliere!',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=345',
        'durationInMinutes' => NULL,
        'categoryId' => 54,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      45 =>
      array (
        'code' => 'reh',
        'mobidulId' => 16,
        'lat' => 0,
        'lon' => 0,
        'radius' => 1000,
        'name' => 'Gratuliere!',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=344',
        'durationInMinutes' => NULL,
        'categoryId' => 54,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      46 =>
      array (
        'code' => 'rehtext',
        'mobidulId' => 16,
        'lat' => 48.2930159029640009293871116824448108673095703125,
        'lon' => 15.526084904765600214204823714680969715118408203125,
        'radius' => 1000,
        'name' => 'Reh',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=343',
        'durationInMinutes' => NULL,
        'categoryId' => 54,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
      47 =>
      array (
        'code' => 'wildschweindi',
        'mobidulId' => 16,
        'lat' => 48.3149395108871004822503891773521900177001953125,
        'lon' => 15.5624771166797000176984511199407279491424560546875,
        'radius' => 1000,
        'name' => 'Wildschwein',
        'enabled' => 1,
        'contentType' => 'text',
        'content' => 'content.php?id=338',
        'durationInMinutes' => NULL,
        'categoryId' => 54,
        'created_at' => '2014-07-10 11:31:02',
        'updated_at' => '2014-07-10 11:31:02',
      ),
    ));
  }

}
