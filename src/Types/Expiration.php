<?php

namespace Pastly\Types;

/**
 * This a helper class for set expiration for new paste.
 */
class Expiration
{
    /**
     * Paste has no expiration date.
     */
    protected const NEVER = null;

    /**
     * Paste will burn after read.
     */
    protected const BURN_AFTER_READ = 0;

    /**
     * Pass a string date like: `+1 day`, `+5 min`, `2021/05/30 15:00` and etc.
     *
     * Based on `strtotime` function.
     *
     * @see https://www.php.net/manual/en/function.strtotime.php
     *
     * @param string $until
     * @return int|null
     */
    public static function until(string $until): ?int
    {
        return strtotime($until);
    }
}
