<?php

namespace jizuscreed\TimeApproximator\Languages;

abstract class AbstractLanguagePack
{
    abstract public function just_now(): string;

    abstract public function less_than_x_seconds(int $seconds): string;

    abstract public function half_a_minute(): string;

    abstract public function less_than_x_minutes(int $minutes) : string;

    abstract public function x_minutes(int $minutes) : string;

    abstract public function about_x_hours(int $hours) : string;

    abstract public function x_days(int $days) : string;

    abstract public function about_x_months(int $months) : string;

    abstract public function x_months(int $months) : string;

    abstract public function almost_x_years(int $years) : string;

    abstract public function about_x_years(int $years) : string;

    abstract public function over_x_years(int $years) : string;
}