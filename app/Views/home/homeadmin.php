<?php if (in_groups('dosen')) : ?>
    <?= $this->extend('templatedosen') ?>
<?php elseif (in_groups('admin')) : ?>
    <?= $this->extend('templateadmin') ?>
<?php else : ?>
    <?= $this->extend('template') ?>
<?php endif; ?>
<?= $this->section('content') ?>

<!-- /.card-header -->
<div class="card-body">
    <div class="callout callout-info">
        <h4>Halo <b>Administrator!</b></h4>

        <p>Selamat Datang di <b>Siakad UNILA.</b> Website ini dirancang untuk memudahkan dalam manajerial perkuliahan. Jika anda tertarik memiliki web sistem ini hubungi kontak Whatsapp berikut 081234542101. <b>Terima Kasih!</b></p>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>2</h3>

                            <p>Jumlah Kelas</p>
                        </div>
                        <div class="icon"><i class="ion ion-ribbon-b"></i></div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>9</h3>

                            <p>Jumlah Mata Kuliah</p>
                        </div>
                        <div class="icon"><i class="ion ion-ios7-bookmarks"></i></div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>1</h3>

                            <p> Jumlah Admin Aktif</p>
                        </div>
                        <div class="icon"><i class="ion ion-starh"></i></div>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-6">

                            <?php

                            //Draw Calendar

                            function draw_calendar($month, $year)
                            {

                                // Draw table for Calendar 
                                $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

                                // Draw Calendar table headings 
                                $headings = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
                                $calendar .= '<tr class="calendar-row"><td class="calendar-day-head">' . implode('</td><td class="calendar-day-head">', $headings) . '</td></tr>';

                                //days and weeks variable for now ... 
                                $running_day = date('w', mktime(0, 0, 0, $month, 1, $year));
                                $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
                                $days_in_this_week = 1;
                                $day_counter = 0;
                                $dates_array = array();

                                // row for week one 
                                $calendar .= '<tr class="calendar-row">';

                                // Display "blank" days until the first of the current week 
                                for ($x = 0; $x < $running_day; $x++) :
                                    $calendar .= '<td class="calendar-day-np">&nbsp;</td>';
                                    $days_in_this_week++;
                                endfor;

                                // Show days.... 
                                for ($list_day = 1; $list_day <= $days_in_month; $list_day++) :
                                    if ($list_day == date('d') && $month == date('n')) {
                                        $currentday = 'currentday';
                                    } else {
                                        $currentday = '';
                                    }
                                    $calendar .= '<td class="calendar-day ' . $currentday . '">';

                                    // Add in the day number
                                    if ($list_day < date('d') && $month == date('n')) {
                                        $showtoday = '<strong class="overday">' . $list_day . '</strong>';
                                    } else {
                                        $showtoday = $list_day;
                                    }
                                    $calendar .= '<div class="day-number">' . $showtoday . '</div>';

                                    // Draw table end
                                    $calendar .= '</td>';
                                    if ($running_day == 6) :
                                        $calendar .= '</tr>';
                                        if (($day_counter + 1) != $days_in_month) :
                                            $calendar .= '<tr class="calendar-row">';
                                        endif;
                                        $running_day = -1;
                                        $days_in_this_week = 0;
                                    endif;
                                    $days_in_this_week++;
                                    $running_day++;
                                    $day_counter++;
                                endfor;

                                // Finish the rest of the days in the week
                                if ($days_in_this_week < 8) :
                                    for ($x = 1; $x <= (8 - $days_in_this_week); $x++) :
                                        $calendar .= '<td class="calendar-day-np">&nbsp;</td>';
                                    endfor;
                                endif;

                                // Draw table final row
                                $calendar .= '</tr>';

                                // Draw table end the table 
                                $calendar .= '</table>';

                                // Finally all done, return result 
                                return $calendar;
                            }
                            ?>

                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <style>
                                    @charset "utf-8";

                                    /* CSS Document */
                                    html,
                                    body,
                                    form {
                                        margin: 0px;
                                        padding: 0px;
                                        font-family: Ebrima, Arial, Helvetica, sans-serif;
                                        font-size: 12px;
                                        color: #666;
                                        empty-cells: hide;
                                    }

                                    table.calendar {
                                        border-style: solid;
                                        border-width: 1px;
                                        border-width: 1px;
                                        border-color: #666;
                                        -moz-box-shadow: 0px 0px 4px #CCCCCC;
                                        -webkit-box-shadow: 0px 0px 4px #CCCCCC;
                                        box-shadow: 0px 0px 4px #CCCCCC;
                                    }



                                    td.calendar-day {
                                        min-height: 80px;
                                        position: relative;
                                    }

                                    * html div.calendar-day {
                                        height: 80px;
                                    }

                                    td.calendar-day:hover {
                                        background: #FFF;
                                        -moz-box-shadow: 0px 0px 20px #eeeeee inset;
                                        -webkit-box-shadow: 0px 0px 20px #eeeeee inset;
                                        box-shadow: 0px 0px 20px #eeeeee inset;
                                        cursor: pointer;
                                    }

                                    td.calendar-day-np {
                                        background: #eee;
                                        min-height: 80px;
                                    }

                                    * html div.calendar-day-np {
                                        height: 80px;
                                    }

                                    td.calendar-day-head {
                                        font-weight: bold;
                                        text-shadow: 0px 1px 0px #FFF;
                                        color: #666;
                                        text-align: center;
                                        width: 64px;
                                        padding: 12px 6px;
                                        border-bottom: 1px solid #CCC;
                                        border-top: 1px solid #CCC;
                                        border-right: 1px solid #CCC;
                                        background: #ffffff;
                                        background: -moz-linear-gradient(top, #ffffff 0%, #ededed 100%);
                                        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #ededed));
                                        background: -webkit-linear-gradient(top, #ffffff 0%, #ededed 100%);
                                        background: -o-linear-gradient(top, #ffffff 0%, #ededed 100%);
                                        background: -ms-linear-gradient(top, #ffffff 0%, #ededed 100%);
                                        background: linear-gradient(to bottom, #ffffff 0%, #ededed 100%);
                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed', GradientType=0);
                                    }

                                    div.day-number {
                                        padding: 6px;
                                        text-align: center;
                                    }

                                    /* shared */
                                    td.calendar-day,
                                    td.calendar-day-np {
                                        padding: 5px;
                                        border-bottom: 1px solid #DBDBDB;
                                        border-right: 1px solid #DBDBDB;
                                        font-size: 14px;
                                        background: #ffffff;
                                        background: -moz-linear-gradient(top, #ffffff 0%, #f2f2f2 100%);
                                        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #f2f2f2));
                                        background: -webkit-linear-gradient(top, #ffffff 0%, #f2f2f2 100%);
                                        background: -o-linear-gradient(top, #ffffff 0%, #f2f2f2 100%);
                                        background: -ms-linear-gradient(top, #ffffff 0%, #f2f2f2 100%);
                                        background: linear-gradient(to bottom, #ffffff 0%, #f2f2f2 100%);
                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f2f2f2', GradientType=0);
                                    }


                                    .overday {
                                        color: #164b87;
                                        text-shadow: 0px 1px 0px #FFF;
                                    }

                                    .currentday {
                                        background: #6cb7f3 !important;
                                        background: -moz-linear-gradient(top, #6cb7f3 0%, #388be8 100%) !important;
                                        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #6cb7f3), color-stop(100%, #388be8)) !important;
                                        background: -webkit-linear-gradient(top, #6cb7f3 0%, #388be8 100%) !important;
                                        background: -o-linear-gradient(top, #6cb7f3 0%, #388be8 100%) !important;
                                        background: -ms-linear-gradient(top, #6cb7f3 0%, #388be8 100%) !important;
                                        background: linear-gradient(to bottom, #6cb7f3 0%, #388be8 100%) !important;
                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#6cb7f3', endColorstr='#388be8', GradientType=0) !important;
                                        color: #FFF !important;
                                        font-weight: bold;
                                        -moz-box-shadow: 0px 0px 18px #1F68BA inset;
                                        -webkit-box-shadow: 0px 0px 18px #1F68BA inset;
                                        box-shadow: 0px 0px 18px #1F68BA inset;
                                    }

                                    .currentday:hover {
                                        -moz-box-shadow: 0px 0px 24px #074080 inset !important;
                                        -webkit-box-shadow: 0px 0px 24px #074080 inset !important;
                                        box-shadow: 0px 0px 24px #074080 inset !important;
                                    }
                                </style>
                            </head>

                            <body>

                                <?php
                                echo '<h1><b>Calender</b></h1>';
                                echo '<br>';
                                echo '<h2>November 2022</h2>';
                                echo draw_calendar(11, 2022);
                                ?>

                            </body>

                            <br><br>

                            <div class="callout callout-warning">
                                <h4><b>VISI</b></h4>

                                <p>Unila telah menetapkan tekad untuk melanjutkan dharma membangun Unila dan bangsa secara bersama-sama. Dengan keteguhan hati, dalam Rencana Pembangunan Jangka Panjang (RPJP) Unila 2005-2025 telah ditetapkan visi Unila yaitu : <b>” PADA TAHUN 2025 UNILA MENJADI PERGURUAN TINGGI SEPULUH TERBAIK DI INDONESIA.”</b>
                                    Sejalan dengan misi pembangunan pendidikan nasional serta kebijakan Kementerian Pendidikan dan Kebudayaan, Unila telah pula menetapkan misi dalam RPJP Unila 2005-2025.</p>
                            </div>

                            <div class="callout callout-warning">
                                <h4><b>MISI</b></h4>

                                <p>Misi Unila seperti yang tertera di dalam dokumen RPJP 2005 – 2015 dan dokumen Renstra 2007 – 2011 sebagai berikut. Butir-butir Misi Unila yang telah disempurnakan sebagai berikut:
                                    <br>
                                    1. menyelenggarakan tridarma PT yang berkualitas dan relevan;
                                    <br>
                                    2. menjalankan tata pamong organisasi Unila yang baik (good university governance);
                                    <br>
                                    3. menjamin aksesibilitas dan ekuitas pendidikan tinggi;
                                    <br>
                                    4. menjalin kerja sama dengan berbagai pihak di dalam dan luar negeri.
                                </p>
                            </div>



                            <?= $this->endSection() ?>
