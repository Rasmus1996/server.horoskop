<?php
function getHoroskop($inputDate)
{
    $horoscope = array(
        "Aries" => "03:21:04:19",
        "Taurus" => "04:20:05:20",
        "Gemini" => "05:21:06:21",
        "Cancer" => "06:22:07:22",
        "Leo" => "07:23:08:22",
        "Virgo" => "08:23:09:22",
        "Libra" => "09:23:10:22",
        "Scorpio" => "10:23:11:21",
        "Sagittarius" => "11:22:12:21",
        "Capricorn" => "12:22:01:19",
        "Aquarius" => "01:20:02:18",
        "Pisces" => "02:19:03:20"
    );
    $inputDateArr = explode("-", $inputDate);
    $inputMonth = (int) $inputDateArr[1];
    $inputDay = (int) $inputDateArr[2];
    foreach ($horoscope as $key => $value) {
        $dates = explode(":", $value);
        $fromMonth = (int) $dates[0];
        $fromDate = (int) $dates[1];
        $toMonth = (int) $dates[2];
        $toDate = (int) $dates[3];
        if ($inputMonth == $fromMonth) {
            if ($inputDay >= $fromDate) {
                return $key;
            }
        }

        if ($inputMonth == $toMonth) {
            if ($inputDay <= $toDate) {
                return $key;
            }
        }
    }
}
