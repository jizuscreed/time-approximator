<?php

namespace jizuscreed\TimeApproximator;

use jizuscreed\TimeApproximator\Languages\AbstractLanguagePack;

class TimeApproximator
{
    /**
     * @var AbstractLanguagePack
     */
    private $language;

    public function __construct(AbstractLanguagePack $languagePack)
    {
        $this->language = $languagePack;
    }

    /**
     * get approximate time human friendly description
     * @param int $seconds
     * @return string
     */
    public function getDescriptionFor(int $seconds) : string
    {
        $minutes = floor($seconds / 60);

        switch (true) {
            case ($minutes < 2):
                switch (true) {
                    case ($seconds <= 10):
                        return $this->language->just_now();
                    case ($seconds < 20):
                        return $this->language->less_than_x_seconds(20);
                    case ($seconds < 40):
                        return $this->language->half_a_minute();
                    case ($seconds < 60):
                        return $this->language->less_than_x_minutes(1);
                    default:
                        return $this->language->x_minutes(1);
                }
                break;
            case ($minutes < 45): // 2 mins up to 45 mins
                return $this->language->x_minutes($minutes);
            case ($minutes < 90): // 45 mins up to 90 mins
                return $this->language->about_x_hours(1);
            case ($minutes < 1440): // 90 mins up to 24 hours
                return $this->language->about_x_hours(round($minutes / 60.0));
            case ($minutes < 2520): // 24 hours up to 42 hours
                return $this->language->x_days(1);
            case ($minutes < 43200): // 42 hours up to 30 days
                return $this->language->x_days(round($minutes / 1440.0));
            case ($minutes < 86400): // 30 days up to 60 days
                return $this->language->about_x_months(round($minutes / 43200.0));
            case ($minutes < 525600): // 60 days up to 365 days
                return $this->language->x_months(round($minutes / 43200.0));
            default:
            $remainder = $minutes % 525600;
            $years = floor($minutes / 525600);

            if ($remainder < 131400) {
                return $this->language->about_x_years($years);
            } else if ($remainder < 394200) {
                return $this->language->over_x_years($years);
            } else {
                return $this->language->almost_x_years($years + 1);
            }
        }
    }
}