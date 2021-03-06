<?php
  function getDownloadList($group) {
    $result = array();
    if ($group == 'launcher' || is_null($group)) {
      $variants = array();
//      $stb_ver = '0.2.0';
//      $stb_date = '2017-01-20';
      $dev_ver = '0.1.0';
      $dev_date = '2022-03-31';
      $dev_snap = 'SNAPSHOT-20220331';

      $variants['stb'][0]['name'] = 'Windows Installer';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'exe';
      $variants['stb'][0]['file'] = 'voxella-launcher-'.$stb_ver.'-win32.exe';
      $variants['stb'][1]['name'] = 'ZIP';
      $variants['stb'][1]['ver'] = $stb_ver;
      $variants['stb'][1]['date'] = $stb_date;
      $variants['stb'][1]['icon'] = 'zip';
      $variants['stb'][1]['file'] = 'voxella-launcher-'.$stb_ver.'.zip';

/*      $variants['dev'][0]['name'] = 'Windows Installer';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'exe';
      $variants['dev'][0]['file'] = 'comusika-studio-'.$dev_ver.'-'.$dev_snap.'-win32.exe'; */
      $variants['dev'][1]['name'] = 'JAR';
      $variants['dev'][1]['ver'] = $dev_ver;
      $variants['dev'][1]['date'] = $dev_date;
      $variants['dev'][1]['icon'] = 'jar';
      $variants['dev'][1]['file'] = 'voxella-launcher-'.$dev_ver.'-'.$dev_snap.'.jar';

      $result['launcher'] = $variants;
    }

    return $result;
  }
 ?>