<?php



/**
 * Skeleton subclass for performing query and update operations on the 'Message' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.aptostat_api
 */
class MessageQuery extends BaseMessageQuery
{
    public function showHidden($showHidden)
    {
        if ($showHidden == 1) {
            return $this;
        } else {
            return $this
                ->filterByHidden(0);
        }
    }
}
