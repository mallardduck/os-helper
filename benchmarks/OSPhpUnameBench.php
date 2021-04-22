<?php


use Anteris\Helper\OS;

class OSPhpUnameBench
{
    /**
     * @Revs(10)
     * @Iterations(10)
     */
    public function bench_isLinux()
    {
        $result = OS::isLinux();
    }

    /**
     * @Revs(10)
     * @Iterations(10)
     */
    public function bench_isMacOs()
    {
        $result = OS::isMacOs();
    }

    /**
     * @Revs(10)
     * @Iterations(10)
     */
    public function bench_isWindows()
    {
        $result = OS::isWindows();
    }
}