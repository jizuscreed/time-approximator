<?php

namespace jizuscreed\TimeApproximator\Languages;

class Russian extends AbstractLanguagePack
{
    public function just_now(): string
    {
        return 'только что';
    }

    public function less_than_x_seconds(int $seconds): string
    {
        return sprintf("меньше чем %d %s", $seconds, $this->getForSeconds($seconds));
    }

    public function half_a_minute(): string
    {
        return 'полминуты';
    }

    public function less_than_x_minutes(int $minutes): string
    {
        return sprintf('меньше чем %d %s', $minutes, $this->getForMinutes($minutes));
    }

    public function x_minutes(int $minutes): string
    {
        return sprintf('%d %s', $minutes, $this->getForMinutes($minutes));
    }

    public function about_x_hours(int $hours): string
    {
        return sprintf('примерно %d %s', $hours, $this->getForHours($hours));
    }

    public function x_days(int $days): string
    {
        return sprintf('%d %s', $days, $this->getForDays($days));
    }

    public function about_x_months(int $months): string
    {
        return sprintf('примерно %d %s', $months, $this->getForMonths($months));
    }

    public function x_months(int $months): string
    {
        return sprintf('%d %s', $months, $this->getForMonths($months));
    }

    public function almost_x_years(int $years): string
    {
        return sprintf('почти %d %s', $years, $this->getForYears($years));
    }

    public function about_x_years(int $years): string
    {
        return sprintf('примерно %d %s', $years, $this->getForYears($years));
    }

    public function over_x_years(int $years): string
    {
        return sprintf('больше чем %d %s', $years, $this->getForYears($years));
    }

    protected function getForSeconds(int $seconds) : string
    {
        if(floor($seconds/10) == 1){
            return 'секунд';
        }

        switch ($seconds % 10) {
            case 1:
                return 'секунда';
            case 2:
            case 3:
            case 4:
                return 'секунды';
            default:
                return 'секунд';
        }
    }

    protected function getForMinutes(int $minutes) : string
    {
        if(floor($minutes/10) == 1){
            return 'минут';
        }

        switch ($minutes % 10) {
            case 1:
                return 'минута';
            case 2:
            case 3:
            case 4:
                return 'минуты';
            default:
                return 'минут';
        }
    }

    protected function getForHours(int $hours) : string
    {
        if(floor($hours/10) == 1){
            return 'часов';
        }

        switch ($hours % 10) {
            case 1:
                return 'час';
            case 2:
            case 3:
            case 4:
                return 'часа';
            default:
                return 'часов';
        }
    }

    protected function getForDays(int $days) : string
    {
        if(floor($days/10) == 1){
            return 'дней';
        }

        switch ($days % 10) {
            case 1:
                return 'день';
            case 2:
            case 3:
            case 4:
                return 'часа';
            default:
                return 'дней';
        }
    }

    protected function getForWeeks(int $weeks) : string
    {
        if(floor($weeks/10) == 1){
            return 'недель';
        }

        switch ($weeks % 10) {
            case 1:
                return 'неделя';
            case 2:
            case 3:
            case 4:
                return 'недели';
            default:
                return 'недель';
        }
    }

    protected function getForMonths(int $months) : string
    {
        if(floor($months/10) == 1){
            return 'месяцев';
        }
        switch ($months % 10) {
            case 1:
                return 'месяц';
            case 2:
            case 3:
            case 4:
                return 'месяца';
            default:
                return 'месяцев';
        }
    }

    protected function getForYears(int $years) : string
    {
        if(floor($years/10) == 1){
            return 'лет';
        }
        switch ($years % 10) {
            case 1:
                return 'год';
            case 2:
            case 3:
            case 4:
                return 'года';
            default:
                return 'лет';
        }
    }
}