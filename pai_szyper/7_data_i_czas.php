<?php

    echo 'dzień - miesiąc - rok: ', date('d-m-y'), '<br>';
    echo 'dzień - miesiąc - rok: ', date('d-m-Y'), '<br>';

    echo date('M-d-Y'), '<br>';

    echo date('G-i-s'), '<br>';
    echo date('H-i-s'), '<br>';
    echo date('G-i-sa'), '<br>';
    echo date('w'), '<br>'; // 3 - środa, 0 - niedziela, 1 - poniedziałek

    echo date('d-m-Y H:i:s'), '<br>';

    $date = getdate();
    print_r($date);

    echo '<br>Dzień miesiąca: ', $date['mday'];
    echo '<br>Dzień roku: ', $date['yday'] . '<br>';

    // wyswietl dane w formacie: 18 listopad 2020, 10:11:25 | środa

    echo $date['mday'] . ' ' . translateMonth($date['mon']) . ' ' . $date['year'] . ', ' . date('G:i:s') . ' | ' . translateWeekday($date['wday']);


    function translateMonth($monthNumber) {
        $polishMonths = [
            'Styczeń',
            'Luty',
            'Marzec',
            'Kwiecień',
            'Maj',
            'Czerwiec',
            'Lipiec',
            'Sierpień',
            'Wrzesień',
            'Październik',
            'Listopad',
            'Grudzień'
        ];
        return $polishMonths[$monthNumber-1];
    }

    function translateWeekday($weekdayNumber) {
        $polishWeekDays = [
            'Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'
        ];

        return $polishWeekDays[$weekdayNumber];
    }
 ?>
