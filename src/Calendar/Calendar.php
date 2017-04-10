<?php
namespace Ara\Calendar;

class Calendar
{
    private $year;
    private $month;
    private $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    private $numDays;
    private $currDay;

    public function __construct()
    {
        $this->year = date("Y");
        $this->month = date("m");
        $this->currDay = date('d');
        $this->numDays = cal_days_in_month(CAL_GREGORIAN, $this->month, 2017);
    }


    public function calendar()
    {
        $this->currDay = date('d');
        if ($this->year . "-" . $this->month != date("Y") . "-" . date("m") && $this->year . "-0" . $this->month != date("Y") . "-" . date("m")) {
            $this->currDay = 2017;
        }


        $nameofmonth = date("F", mktime(0, 0, 0, $this->month, 1, $this->year));
        echo "<h1 class='yearmonth'>";
        echo $nameofmonth. ", ";
        echo $this->year;
        echo "</h1>";

        echo "<div class='calendar-container'>";
        echo "<img class='imgmonth 'src='img/natur.jpg'>";
        echo "<div class='calendar'>";

        $this->dayName();
        $this->day();
        echo "</div>";
        echo "</div>";
    }



    /**
     *
     * @return void
     */
    public function dayName()
    {
        foreach ($this->days as $day) {
            echo "<div class='dayname'>$day</div>";
        }
    }


    public function nextMonth()
    {
        if ($this->month == 12) {
            $this->year++;
            $this->month = 1;
        } else {
            $this->month++;
        }
        $this->numDays = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
    }



    public function previousMonth()
    {
        if ($this->month == 1) {
            $this->year--;
            $this->month = 12;
        } else {
            $this->month--;
        }
        $this->numDays = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
    }



    public function day()
    {
        $dates = date(''.$this->year.'-'."$this->month".'-1');
        $day = date('l', strtotime($dates));
        $index = array_search($day, $this->days);


        if ($this->month == 1) {
            $prevday = cal_days_in_month(CAL_GREGORIAN, 12, $this->year -1);
            $prevday -= $index - 1;
        } else {
            $prevday = cal_days_in_month(CAL_GREGORIAN, $this->month - 1, $this->year);
            $prevday -= $index - 1;
        }

        for ($i = 1; $i <= $index; $i++) {
            echo "<div class='daypassed'>$prevday</div>";
            $prevday++;
        }

        for ($i = 1; $i <= $this->numDays; $i++) {
            if ($i == $this->currDay) {
                echo "<div class='calday' style='background:green; border: solid 1px black;'>";
            }

            if (date('l', strtotime(date(''.$this->year.'-'.$this->month.'-' . strval($i)))) == "Sunday" && $i != $this->currDay) {
                echo "<div class='calday' style='color:red; border: solid 1px red;'>";
            } elseif ($i != $this->currDay) {
                echo "<div class='calday'>";
            }
             echo "$i</div>";
        }
    }
}
