<?php
/*
* Author   : Ashraf M Kaabi
* Created : May 06 ,2005
* Version 0.01
* Based On phpHoroscope Classes version 1.1
*/
define('base', 'http://horoscopes.astrology.com');
define('qbase', base . '/dailyquick');
define('obase', base . '/daily');
define('ebase', base . '/dailylong');
define('sbase', base . '/dailysingles');
define('cbase', base . '/dailyrom');
define('fbase', base . '/dailyfunflirty');
define('wbase', base . '/dailytech');

class phpHoroscope
{
  var $sign;
  var $date;
  var $quickie;
  var $extended;
  var $singlelove;
  var $couplelove;
  var $flirt;
  var $work;
  var $overview;

  function phpHoroscope ()
  {
    $this->sign = 'aquarius';
    $this->date = 'today';
    $this->quickie = TRUE;
    $this->extended = FALSE;
  }

  function safeSigns ()
  {
    unset($safeSigns);
    return $safeSigns = array(
                              'aquarius',  'aries',  'cancer',
                              'capricorn', 'gemini', 'leo',
                              'libra',     'pisces', 'sagittarius',
                              'scorpio',   'taurus', 'virgo'
                             );
  }

  function safeDates ()
  {
    unset($safeDates);
    return $dates = array(
                          'today', 'yesterday', 'tomorrow'
                         );
  }

  function setSign ($signControl)
  {
    if (empty($signControl)) {
      echo "error: sign is undefined!";
      exit;
    }
    if (in_array($signControl, $this->safeSigns())) {
      $this->sign = $signControl;
    } else {
      echo "error: " . $signControl . " is not a valid sign!";
      exit;
    }
  }

  function setDate ($dateControl)
  {
    if (empty($dateControl)) {
      echo "error: date is undefined!";
      exit;
    }
    if (in_array($dateControl, $this->safeDates())) {
      $this->date = $dateControl;
    } else {
      echo "error: " . $dateControl . " is not a valid date!";
      exit;
    }
  }

  function setQuickie ()
  {
    $this->extended = FALSE;
    $this->quickie = TRUE;
    $this->singelove = FALSE;
    $this->couplelove = false;
    $this->flirt = FALSE;
    $this->work = FALSE;
    $this->overview = FALSE;
  }

  function setExtended ()
  {
    $this->quickie = FALSE;
    $this->extended = TRUE;
    $this->singelove = FALSE;
    $this->couplelove = false;
    $this->flirt = FALSE;
    $this->work = FALSE;
    $this->overview = FALSE;
  }
  function setSingleLove ()
  {
    $this->quickie = FALSE;
    $this->extended = FALSE;
    $this->singlelove = TRUE;
    $this->couplelove = false;
    $this->flirt = FALSE;
    $this->work = FALSE;
    $this->overview = FALSE;
  }
  function setCoupleLove()
  {
    $this->quickie = FALSE;
    $this->extended = FALSE;
    $this->singlelove = FALSE;
    $this->couplelove = true;
    $this->flirt = FALSE;
    $this->work = FALSE;
    $this->overview = FALSE;
  }
    function setFlirt()
  {
    $this->quickie = FALSE;
    $this->extended = FALSE;
    $this->singlelove = FALSE;
    $this->couplelove = FALSE;
    $this->flirt = TRUE;
    $this->work = FALSE;
    $this->overview = FALSE;
  }
    function setWork()
  {
    $this->quickie = FALSE;
    $this->extended = FALSE;
    $this->singlelove = FALSE;
    $this->couplelove = FALSE;
    $this->flirt = FALSE;
    $this->work = TRUE;
    $this->overview = FALSE;
  }
   function setOverView()
  {
    $this->quickie = FALSE;
    $this->extended = FALSE;
    $this->singlelove = FALSE;
    $this->couplelove = FALSE;
    $this->flirt = FALSE;
    $this->work = FALSE;
    $this->overview = TRUE;
  }

  function buildUrl ()
  {
      if ($this->extended)
      $url = ebase;
      elseif($this->singlelove)
      $url = sbase;
      elseif($this->quickie)
      $url = qbase;
      elseif($this->couplelove)
      $url = cbase;
      elseif($this->flirt)
      $url = fbase;
      elseif($this->work)
      $url = wbase;
      elseif($this->overview)
      $url = obase;

    if ($this->date == 'today') {
      $url = $url . $this->sign . '.html';
    } else {
      $url = $url . $this->sign . substr($this->date, 0, 3) . '.html';
    }
    return $url;
  }

  function getHoroscope ($limit)
  {
    $url = $this->buildUrl();
    $file = fopen($url, 'r');
    if (!$file) {
      echo "error: remote file '" . $url . "' could not be opened!";
      exit;
    }
    while (!feof($file)) {
      $line = fgets($file);
      if (eregi("<daily_horoscope>", $line, $result)) {
        $found = TRUE;
      } elseif ($found) {
        $horoscope = trim($line);
        break;
      }
    }
    fclose($file);
    return substr($horoscope,0,$limit);
  }

  function displayHoroscope ($limit)
  {
    if (!empty($this->sign) && !empty($this->date)) {
      if (in_array($this->sign, $this->safeSigns()) && in_array($this->date, $this->safeDates())) {
        echo $this->getHoroscope($limit);
      } else {
        echo "error: sign and/or date are not valid!";
        exit;
      }
    } else {
      echo "sign and/or date are undefined!";
      exit;
    }
  }
}
?>