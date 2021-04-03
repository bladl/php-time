<?php
declare(strict_types=1);


/**
 * Class Moment
 */
final class Moment extends DateTimeImmutable
{
    public function dayOfWeek():DayOfWeek {
        return DayOfWeek::fromISO($this->dayOfWeekISO());
    }
    public function dayOfWeekISO(): int
    {
        return (int)$this->format('N');
    }

    public function hour24Int(): int
    {
        return (int)$this->format('G');
    }
    public function hour24Zeros(): string
    {
        return $this->format('H');
    }
}