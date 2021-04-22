<?php

namespace Anteris\Helper;

/**
 * This class provides some basic helpers for Operating System names. Currently
 * it only supports the three major players: Linux, Mac OS, and Windows.
 *
 * @author Aidan Casey <aidan.casey@anteris.com>
 */
class StaticOS
{
    public static function isLinux(): bool
    {
        return (self::name() === 'Linux');
    }

    public static function ifLinux(callable $callback): void
    {
        if (static::isLinux()) {
            $callback();
        }
    }

    public static function isMacOs()
    {
        return (self::name() === 'Darwin');
    }

    public static function ifMacOs(callable $callback): void
    {
        if (static::isMacOs()) {
            $callback();
        }
    }

    public static function isWindows(): bool
    {
        return (self::name() === 'Windows');
    }

    public static function ifWindows(callable $callback): void
    {
        if (static::isWindows()) {
            $callback();
        }
    }

    /**
     * Returns the OS name in a friendly manner, for user display.
     */
    public static function name()
    {
        return PHP_OS_FAMILY;
    }

    /**
     * Returns the OS name in an unfriendly short fashion best for use in
     * comparisons.
     */
    public static function shortName()
    {
        $osSystemName = self::name();

        switch ($osSystemName) {
            case 'Darwin':
                return 'macos';
                break;

            // Fall back on removing spaces and making everything lowercase
            default:
                return str_replace(' ', '', strtolower($osSystemName));
                break;
        }
    }
}
