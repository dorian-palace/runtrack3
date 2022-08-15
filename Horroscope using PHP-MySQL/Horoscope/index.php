<?PHP
require('horoscope.class.php');
$horoscope = new phpHoroscope;
$horoscope->setDate('today');
$horoscope->setOverView();
?>
<html>
<head>
<meta http-equiv='Content-Language' content='en-us'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
<title>Horoscope By Ashraf M Kaabi</title>
<style>
<!--
.news{font-family:Verdana;font-size:9px;color:#B4B9C2;padding-left:15px;padding-right:15px;padding-bottom:5px;}
.cap{font-family:Verdana;font-weight:bold;font-size:9px;color:#D3D7DC;}
.newsinthemiddle{font-family:Verdana;font-size:9px;color:#B4B9C2;padding-left:19px;padding-right:15px;padding-bottom:5px;}
.footer{font-family:Verdana;font-size:9px;color:#ffffff;padding-right:15px;padding-top:5px;}
.menu{font-family:Sevenet 7 Cyr;font-size:8px;color:#97999B;padding-right:5px;padding-left:5px;text-decoration:none;}
-->
</style>
</head>
<body bgcolor='#454A55'>
<div align='center'>
        <table border='0' width='21%' cellpadding='0' style='border-collapse: collapse'>
                <tr>
                        <td>
                        <table cellSpacing='10' cellPadding='0' width='376' bgColor='#dfdfd7' border='0'>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font color='#454c56' face='Verdana' size='1'>
                                        <img border='0' src='images/TAURUS.gif' width='71' height='56'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56' face='Verdana' size='1'>
                                        <font color='#ff0099'><b>TAURUS </b></font><?
                                        $horoscope->setSign('taurus');
                                        $horoscope->displayHoroscope(-1);
                                        ?> </font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' colspan='2'>
                                        <font color='#454c56'><center>
                                        <p dir='ltr'><font size='1' face='Verdana'>
                                        <img src='images/br_0001_line.gif'></font></p>
                                        </center></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/GEMINI.gif' width='71' height='56'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>GEMINI</font></b><font size="1" face="Verdana">&nbsp;<?
                                        $horoscope->setSign('gemini');
                                        $horoscope->displayHoroscope(-1);
                                        ?></font></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/CANCER.gif' width='71' height='57'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>CANCER </font></b>
                                        <font size="1" face="Verdana"><?
                                        $horoscope->setSign('cancer');
                                        $horoscope->displayHoroscope(-1);
                                        ?></font></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/LEO.gif' width='71' height='57'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>LEO </font></b>
                                        <font face="Verdana" size="1">&nbsp;<?
                                        $horoscope->setSign('leo');
                                        $horoscope->displayHoroscope(-1);
                                        ?></font></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/VIRGO.gif' width='71' height='57'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>VIRGO </font></b>
                                        <font size="1" face="Verdana">&nbsp;<?
                                        $horoscope->setSign('virgo');
                                        $horoscope->displayHoroscope(-1);
                                        ?> </font> </font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/LIBRA.gif' width='71' height='66'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>LIBRA </font></b>
                                                                                <font size="1" face="Verdana">&nbsp;<?
                                        $horoscope->setSign('libra');
                                        $horoscope->displayHoroscope(-1);
                                        ?> </font> </font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/SCORPIO.gif' width='71' height='53'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>SCORPIO </font></b>
                                        <font size="1" face="Verdana">&nbsp;<?
                                        $horoscope->setSign('scorpio');
                                        $horoscope->displayHoroscope(-1);
                                        ?> </font> </font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/SAGITTARIUS.gif' width='71' height='53'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>SAGITTARIUS </font></b>
                                        <font size="1" face="Verdana">&nbsp;<?
                                        $horoscope->setSign('sagittarius');
                                        $horoscope->displayHoroscope(-1);
                                        ?> </font> </font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/CAPRICORN.gif' width='71' height='51'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>CAPRICORN </font></b>
                                                                                <font face="Verdana" size="1">&nbsp;<?
                                        $horoscope->setSign('capricorn');
                                        $horoscope->displayHoroscope(-1);
                                        ?></font></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/ACUARIUS.gif' width='71' height='56'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>
                                                                                AQUARIUS </font></b>
                                                                                <font face="Verdana" size="1">&nbsp;<?
                                        $horoscope->setSign('aquarius');
                                        $horoscope->displayHoroscope(-1);
                                        ?></font></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/PISCIS.gif' width='71' height='56'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>
                                                                                PISCES </font></b>
                                                                                <font face="Verdana" size="1">&nbsp;<?
                                        $horoscope->setSign('pisces');
                                        $horoscope->displayHoroscope(-1);
                                        ?></font></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font size='1' face='Verdana' color='#454c56'>
                                        <img src='images/br_0001_line.gif'></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='71'>
                                        <font face='Verdana' size='1'>
                                        <img border='0' src='images/ARIES.gif' width='71' height='56'></font></td>
                                        <td vAlign='top' bgColor='#dfdfd7' width='275'>
                                        <font color='#454c56'><b>
                                        <font color='#ff0099' face='Verdana' size='1'>ARIES </font></b>
                                                                                <font face="Verdana" size="1">&nbsp;<?
                                        $horoscope->setSign('aries');
                                        $horoscope->displayHoroscope(-1);
                                        ?></font></font></td>
                                </tr>
                                <tr>
                                        <td vAlign='top' bgColor='#dfdfd7' width='346' colspan='2'>
                                        <font color='#454c56'><center>
                                        <p dir='ltr'><font size='1' face='Verdana'>
                                        <img src='images/br_0001_line.gif'></font></p>
                                        </center></font></td>
                                </tr>
                        </table>
                        </td>
                </tr>
        </table>
</div>
</body>
</html>