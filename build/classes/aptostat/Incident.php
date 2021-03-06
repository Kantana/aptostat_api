<?php



/**
 * Skeleton subclass for representing a row from the 'Incident' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.aptostat_api
 */
class Incident extends BaseIncident
{
    public function setIncidentParameters($param)
    {
        $this->setTitle($param['title']);
        $this->setTimestamp(time());
    }
}
