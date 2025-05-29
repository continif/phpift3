<?php
/**
 * Class IFTCron
 *
 * This class manages the execution of IFT chains based on a specified schedule.
 */
class IFTCron
{
    /**
     * @var array Stores the IFT instances.
     */
    protected $iftInstances = [];

    /**
     * Adds an IFT instance to the internal array.
     *
     * @param IFT $iftInstance An instance of the IFT class.
     * @return void
     */
    public function addIFT($iftInstance)
    {
        $this->iftInstances[] = $iftInstance;
    }

    /**
     * Adds a new chain to the cron.
     *
     * @param string $chain_name The name of the chain to run.
     * @param int $minute The minute when the chain should run.
     * @param int $hour The hour when the chain should run.
     * @param int $day The day of the month when the chain should run.
     * @param int $month The month when the chain should run.
     * @param int $day_week The day of the week when the chain should run.
     */
    public function runChain($chain_name, $minute, $hour, $day, $month, $day_week)
    {
        // Implementation goes here
    }

    /**
     * Starts a loop that checks the time and runs the chain if the time is correct.
     */
    public function startIFTCron()
    {
        // Implementation goes here
    }

    /**
     * Stops the loop.
     */
    public function stopIFTCron()
    {
        // Implementation goes here
    }
}