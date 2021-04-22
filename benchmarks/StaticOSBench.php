<?php


use Anteris\Helper\StaticOS;

class StaticOSBench
{
    /**
     * @Revs(10)
     * @Iterations(10)
     */
    public function bench_isLinux()
    {
        $result = StaticOS::isLinux();
    }

    /**
     * @Revs(10)
     * @Iterations(10)
     */
    public function bench_isMacOs()
    {
        $result = StaticOS::isMacOs();
    }

    /**
     * @Revs(10)
     * @Iterations(10)
     */
    public function bench_isWindows()
    {
        $result = StaticOS::isWindows();
    }
}